<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class GeoCoordinates implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new geoCoordinates and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GeoCoordinates
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GeoCoordinates {
        return new GeoCoordinates();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the altitude property value. Optional. The altitude (height), in feet,  above sea level for the item. Read-only.
     * @return float|null
    */
    public function getAltitude(): ?float {
        $val = $this->getBackingStore()->get('altitude');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'altitude'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'altitude' => fn(ParseNode $n) => $o->setAltitude($n->getFloatValue()),
            'latitude' => fn(ParseNode $n) => $o->setLatitude($n->getFloatValue()),
            'longitude' => fn(ParseNode $n) => $o->setLongitude($n->getFloatValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the latitude property value. Optional. The latitude, in decimal, for the item. Read-only.
     * @return float|null
    */
    public function getLatitude(): ?float {
        $val = $this->getBackingStore()->get('latitude');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'latitude'");
    }

    /**
     * Gets the longitude property value. Optional. The longitude, in decimal, for the item. Read-only.
     * @return float|null
    */
    public function getLongitude(): ?float {
        $val = $this->getBackingStore()->get('longitude');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'longitude'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('altitude', $this->getAltitude());
        $writer->writeFloatValue('latitude', $this->getLatitude());
        $writer->writeFloatValue('longitude', $this->getLongitude());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the altitude property value. Optional. The altitude (height), in feet,  above sea level for the item. Read-only.
     * @param float|null $value Value to set for the altitude property.
    */
    public function setAltitude(?float $value): void {
        $this->getBackingStore()->set('altitude', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the latitude property value. Optional. The latitude, in decimal, for the item. Read-only.
     * @param float|null $value Value to set for the latitude property.
    */
    public function setLatitude(?float $value): void {
        $this->getBackingStore()->set('latitude', $value);
    }

    /**
     * Sets the longitude property value. Optional. The longitude, in decimal, for the item. Read-only.
     * @param float|null $value Value to set for the longitude property.
    */
    public function setLongitude(?float $value): void {
        $this->getBackingStore()->set('longitude', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
