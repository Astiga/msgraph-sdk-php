<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Shares\Item\AllowedGroups\Item\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Revoke the specified group's access to submit print jobs to the associated printerShare.
*/
class RefRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("%40id")
     * @var string|null $id Delete Uri
    */
    public ?string $id = null;
    
    /**
     * Instantiates a new RefRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $id Delete Uri
    */
    public function __construct(?string $id = null) {
        $this->id = $id;
    }

}
