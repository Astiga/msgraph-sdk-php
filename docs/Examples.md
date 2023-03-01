# Usage Examples

## Creating a Graph client
This creates a default Graph client that uses `https://graph.microsoft.com` as the default base URL and default configured Guzzle HTTP client to make the requests.

```php

use Microsoft\Graph\GraphRequestAdapter;
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Kiota\Authentication\Oauth\AuthorizationCodeContext;
use Microsoft\Kiota\Authentication\Oauth\ClientCredentialContext;
use Microsoft\Graph\Core\Authentication\GraphPhpLeagueAuthenticationProvider;

$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode',
    'redirectUri'
);
$scopes = ['User.Read', 'Mail.ReadWrite'];
$authProvider = new GraphPhpLeagueAuthenticationProvider($tokenRequestContext, $scopes);
$requestAdapter = new GraphRequestAdapter($authProvider);
$graphServiceClient = new GraphServiceClient($requestAdapter);

// Uses https://graph.microsoft.com/.default scopes if none are specified
$tokenRequestContext = new ClientCredentialContext(
    'tenantId',
    'clientId',
    'clientSecret'
);
$authProvider = new GraphPhpLeagueAuthenticationProvider($tokenRequestContext);
$requestAdapter = new GraphRequestAdapter($authProvider);
$graphServiceClient = new GraphServiceClient($requestAdapter);

```

Customizing the default Guzzle client:
```php

use Microsoft\Graph\Core\GraphClientFactory;
use Microsoft\Graph\GraphRequestAdapter;
use Microsoft\Graph\GraphServiceClient;

$guzzleConfig = [
    // your custom config
];
$httpClient = GraphClientFactory::createWithConfig($guzzleConfig);
$requestAdapter = new GraphRequestAdapter($authProvider, $httpClient);
$graphServiceClient = new GraphServiceClient($requestAdapter);

```

## Get an item from the Graph
This sample fetches the current signed-in user. Note that to use `\me` you need
a delegated permission. Alternatively, using application permissions, you can request `/users/[userPrincipalName]`.
See [Microsoft Graph Permissions](https://docs.microsoft.com/en-us/graph/auth/auth-concepts#microsoft-graph-permissions) for more.


```php
$user = $graphServiceClient->me()->get()->wait();

// Or

$user = $graphServiceClient->usersById('userPrincipalName')->get()->wait();
```

## Get a collection of items
Some queries against Microsoft Graph return multiple pages of data either due to server-side paging or due to the use of the $top query parameter to specifically limit the page size in a request. When a result set spans multiple pages, Microsoft Graph returns an @odata.nextLink property in the response that contains a URL to the next page of results.

This snippet retrieves the messages in the signed-in user's mailbox. Ensure you have the [correct permissions](https://docs.microsoft.com/en-us/graph/api/user-list-messages?view=graph-rest-1.0&tabs=http#permissions) set.
The Graph API response is deserialized into a collection of `Message` - a model class provided by the SDK.

```php
use Microsoft\Graph\Generated\Users\Item\Messages\MessagesRequestBuilderGetQueryParameters;
use Microsoft\Graph\Generated\Users\Item\Messages\MessagesRequestBuilderGetRequestConfiguration;

$requestConfig = new MessagesRequestBuilderGetRequestConfiguration();
$requestConfig->queryParameters = new MessagesRequestBuilderGetQueryParameters();
$requestConfig->queryParameters->select = ['subject'];
$requestConfig->queryParameters->top = 2;
$requestConfig->headers = ['Prefer' => 'outlook.body-content-type=text'];

// or with PHP 8
$requestConfig = new MessagesRequestBuilderGetRequestConfiguration(
    queryParameters: MessagesRequestBuilderGetRequestConfiguration::addQueryParameters(
        select: ['subject'],
        top: 2
    ),
    headers: ['Prefer' => 'outlook.body-content-type=text']
);

$messages = $graphServiceClient->usersById(USER_ID)->messages()->get($requestConfig)->wait();

foreach ($messages->getValue() as $message) {
    echo "Subject: {$message->getSubject()}\n";
}
```

For now, you can page through the collection using the @odata.nextLink value. We intend to introduce a Page Iterator component in the future releases:

```php

while ($messages->getOdatanextLink()) {
    $requestInfo = $graphServiceClient->usersById(USER_ID)->messages()->createGetRequestInformation($requestConfig);
    $requestInfo->setUri($messages->getOdatanextLink());
    $messages = $requestAdapter->sendAsync($requestInfo, [MessageCollectionResponse::class, 'createFromDiscriminatorValue'])->wait();

    foreach ($messages->getValue() as $message) {
        echo "Subject: {$message->getSubject()}\n";
    }
}

```

## Use a Custom Response Handler / Get the raw PSR response
Define a response handler that implements the [Response Handler interface](https://github.com/microsoft/kiota-abstractions-php/blob/dev/src/ResponseHandler.php) and pass it into the request using the request options.

The SDK provides a default asynchronous response handler which returns a promise that resolves to a  raw PSR-7 response.

To get the raw response:
```php

// PHP 7
$config = new MeRequestBuilderGetRequestConfiguration();
$config->options = [new ResponsehandlerOption(new NativeResponseHandler())];
$user = $graphServiceClient->me()->get($config)->wait()->wait();


// PHP 8
$user = $graphServiceClient->me()->get(new MeRequestBuilderGetRequestConfiguration(
    options: [new ResponseHandlerOption(new NativeResponseHandler())]
))->wait()->wait();
```

## Send an email
This sample sends an email. The request body is constructed using the provided models.
Ensure you have the [right permissions](https://docs.microsoft.com/en-us/graph/api/user-sendmail?view=graph-rest-1.0&tabs=http#permissions).

```php

use Microsoft\Graph\Generated\Me\SendMail\SendMailPostRequestBody;
use Microsoft\Graph\Generated\Models\BodyType;
use Microsoft\Graph\Generated\Models\EmailAddress;
use Microsoft\Graph\Generated\Models\ItemBody;
use Microsoft\Graph\Generated\Models\Message;
use Microsoft\Graph\Generated\Models\Recipient;
use Microsoft\Graph\GraphRequestAdapter;
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Authentication\Oauth\AuthorizationCodeContext;
use Microsoft\Graph\Core\Authentication\GraphPhpLeagueAuthenticationProvider;


$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode',
    'redirectUri'
);
$scopes = ['Mail.Send'];
$authProvider = new GraphPhpLeagueAuthenticationProvider($tokenRequestContext, $scopes);
$requestAdapter = new GraphRequestAdapter($authProvider);
$graphServiceClient = new GraphServiceClient($requestAdapter);

try {
    $sender = new EmailAddress();
    $sender->setAddress('john.doe@outlook.com');
    $sender->setName('John Doe');
    $fromRecipient = new Recipient();
    $fromRecipient->setEmailAddress($sender);

    $recipients = [];

    $recipientEmail = new EmailAddress();
    $recipientEmail->setAddress('jane.doe@outlook.com');
    $recipientEmail->setName('Jane Doe');
    $recipient = new Recipient();
    $toRecipient->setEmailAddress($recipientEmail);
    $recipients[] = $toRecipient;

    $emailBody = new ItemBody();
    $emailBody->setContent('Dummy content');
    $emailBody->setContentType(new BodyType(BodyType::TEXT));

    $message = new Message();
    $message->setSubject('Test Email');
    $message->setFrom($fromRecipient);
    $message->setToRecipients($recipients);
    $message->setBody($emailBody);

    $requestBody = new SendMailPostRequestBody();
    $requestBody->setMessage($message);

    $response = $graphServiceClient->me()->sendMail()->post($requestBody)->wait();

} catch (ApiException $ex) {
    echo $ex->getError()->getMessage();
}

```

## Download an item

```php

use Microsoft\Graph\GraphRequestAdapter;
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Authentication\Oauth\AuthorizationCodeContext;
use Microsoft\Graph\Core\Authentication\GraphPhpLeagueAuthenticationProvider;

$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode',
    'redirectUri'
);
$scopes = ['Files.ReadWrite'];
$authProvider = new GraphPhpLeagueAuthenticationProvider($tokenRequestContext, $scopes);
$requestAdapter = new GraphRequestAdapter($authProvider);
$graphServiceClient = new GraphServiceClient($requestAdapter);

try {
    $fileContents = $graphServiceclient->drivesById('driveId')->itemsById('itemId')->content()->get()->wait();

} catch (ApiException $ex) {
    echo $ex->getError()->getMessage();
}

```


## Upload an item

```php

$driveItemId = 'root:/upload.txt:';

$inputStream = Utils::streamFor(fopen('upload.txt', 'r'));
$uploadItem = $graphServiceClient->drivesById('[driveId]')->itemsById($driveItemId)->content()->put($inputStream)->wait();

```

## Passing request headers
Each execution method i.e. get(), post(), put(), patch(), delete() accepts a Request Configuration object where the request headers can be set:

```php

use Microsoft\Graph\Generated\Me\Messages\MessagesRequestBuilderGetRequestConfiguration;

$requestConfig = new MessagesRequestBuilderGetRequestConfiguration();
$requestConfig->headers = ['Prefer' => 'outlook.body-content-type=text'];

$messages = $graphServiceclient->me()->messages()->get($requestConfig)->wait();

// PHP 8
$messages = $graphServiceClient->me()->messages()->get(new MessagesRequestBuilderGetRequestConfiguration(
    headers: ['Prefer' => 'outlook.body-content-type=text']
))->wait();

```

## Passing query parameters

```php

use Microsoft\Graph\Generated\Me\Messages\MessagesRequestBuilderGetRequestConfiguration;

$requestConfig = new MessagesRequestBuilderGetRequestConfiguration();
$requestConfig->queryParameters = MessagesRequestBuilderGetRequestConfiguration::addQueryParameters();
$requestConfig->queryParameters->select = ['subject', 'from'];
$requestConfig->queryParameters->skip = 2;
$requestConfig->queryParameters->top = 3;

$messages = $graphServiceClient->me()->messages()->get($requestConfig)->wait();

// PHP 8
$messages = $graphServiceClient->me()->messages()->get(new MessagesRequestBuilderGetRequestConfiguration(
    queryParameters: MessagesRequestBuilderGetRequestConfiguration::addQueryParameters(
        select: ['subject', 'from'],
        skip: 2,
        top: 3
    )
))->wait();


```

## Customizing middleware configuration

```php

use Microsoft\Graph\Generated\Users\Item\Messages\MessagesRequestBuilderGetRequestConfiguration;
use Microsoft\Kiota\Http\Middleware\Options\RetryOption;

$requestConfig = new MessagesRequestBuilderGetRequestConfiguration();
$requestConfig->options = [new RetryOption(2, 5)];

$messages = $graphServiceClient->me()->messages()->get($requestConfig)->wait();

```
