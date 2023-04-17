<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Beta_Dist;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Beta_DistPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new beta_DistPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Beta_DistPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Beta_DistPostRequestBody {
        return new Beta_DistPostRequestBody();
    }

    /**
     * Gets the a property value. The A property
     * @return Json|null
    */
    public function getA(): ?Json {
        return $this->getBackingStore()->get('a');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the alpha property value. The alpha property
     * @return Json|null
    */
    public function getAlpha(): ?Json {
        return $this->getBackingStore()->get('alpha');
    }

    /**
     * Gets the b property value. The B property
     * @return Json|null
    */
    public function getB(): ?Json {
        return $this->getBackingStore()->get('b');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the beta property value. The beta property
     * @return Json|null
    */
    public function getBeta(): ?Json {
        return $this->getBackingStore()->get('beta');
    }

    /**
     * Gets the cumulative property value. The cumulative property
     * @return Json|null
    */
    public function getCumulative(): ?Json {
        return $this->getBackingStore()->get('cumulative');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'a' => fn(ParseNode $n) => $o->setA($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'alpha' => fn(ParseNode $n) => $o->setAlpha($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'b' => fn(ParseNode $n) => $o->setB($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'beta' => fn(ParseNode $n) => $o->setBeta($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'cumulative' => fn(ParseNode $n) => $o->setCumulative($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'x' => fn(ParseNode $n) => $o->setX($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the x property value. The x property
     * @return Json|null
    */
    public function getX(): ?Json {
        return $this->getBackingStore()->get('x');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('a', $this->getA());
        $writer->writeObjectValue('alpha', $this->getAlpha());
        $writer->writeObjectValue('b', $this->getB());
        $writer->writeObjectValue('beta', $this->getBeta());
        $writer->writeObjectValue('cumulative', $this->getCumulative());
        $writer->writeObjectValue('x', $this->getX());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the a property value. The A property
     * @param Json|null $value Value to set for the A property.
    */
    public function setA(?Json $value): void {
        $this->getBackingStore()->set('a', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the alpha property value. The alpha property
     * @param Json|null $value Value to set for the alpha property.
    */
    public function setAlpha(?Json $value): void {
        $this->getBackingStore()->set('alpha', $value);
    }

    /**
     * Sets the b property value. The B property
     * @param Json|null $value Value to set for the B property.
    */
    public function setB(?Json $value): void {
        $this->getBackingStore()->set('b', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the beta property value. The beta property
     * @param Json|null $value Value to set for the beta property.
    */
    public function setBeta(?Json $value): void {
        $this->getBackingStore()->set('beta', $value);
    }

    /**
     * Sets the cumulative property value. The cumulative property
     * @param Json|null $value Value to set for the cumulative property.
    */
    public function setCumulative(?Json $value): void {
        $this->getBackingStore()->set('cumulative', $value);
    }

    /**
     * Sets the x property value. The x property
     * @param Json|null $value Value to set for the x property.
    */
    public function setX(?Json $value): void {
        $this->getBackingStore()->set('x', $value);
    }

}