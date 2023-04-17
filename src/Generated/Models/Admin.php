<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Admin implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Admin and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Admin
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Admin {
        return new Admin();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the edge property value. A container for Microsoft Edge resources. Read-only.
     * @return Edge|null
    */
    public function getEdge(): ?Edge {
        return $this->getBackingStore()->get('edge');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'edge' => fn(ParseNode $n) => $o->setEdge($n->getObjectValue([Edge::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'serviceAnnouncement' => fn(ParseNode $n) => $o->setServiceAnnouncement($n->getObjectValue([ServiceAnnouncement::class, 'createFromDiscriminatorValue'])),
            'sharepoint' => fn(ParseNode $n) => $o->setSharepoint($n->getObjectValue([Sharepoint::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the serviceAnnouncement property value. A container for service communications resources. Read-only.
     * @return ServiceAnnouncement|null
    */
    public function getServiceAnnouncement(): ?ServiceAnnouncement {
        return $this->getBackingStore()->get('serviceAnnouncement');
    }

    /**
     * Gets the sharepoint property value. The sharepoint property
     * @return Sharepoint|null
    */
    public function getSharepoint(): ?Sharepoint {
        return $this->getBackingStore()->get('sharepoint');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('edge', $this->getEdge());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('serviceAnnouncement', $this->getServiceAnnouncement());
        $writer->writeObjectValue('sharepoint', $this->getSharepoint());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the edge property value. A container for Microsoft Edge resources. Read-only.
     * @param Edge|null $value Value to set for the edge property.
    */
    public function setEdge(?Edge $value): void {
        $this->getBackingStore()->set('edge', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the serviceAnnouncement property value. A container for service communications resources. Read-only.
     * @param ServiceAnnouncement|null $value Value to set for the serviceAnnouncement property.
    */
    public function setServiceAnnouncement(?ServiceAnnouncement $value): void {
        $this->getBackingStore()->set('serviceAnnouncement', $value);
    }

    /**
     * Sets the sharepoint property value. The sharepoint property
     * @param Sharepoint|null $value Value to set for the sharepoint property.
    */
    public function setSharepoint(?Sharepoint $value): void {
        $this->getBackingStore()->set('sharepoint', $value);
    }

}