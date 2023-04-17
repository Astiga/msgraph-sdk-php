<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MediaContentRatingJapan implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new mediaContentRatingJapan and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MediaContentRatingJapan
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MediaContentRatingJapan {
        return new MediaContentRatingJapan();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'movieRating' => fn(ParseNode $n) => $o->setMovieRating($n->getEnumValue(RatingJapanMoviesType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'tvRating' => fn(ParseNode $n) => $o->setTvRating($n->getEnumValue(RatingJapanTelevisionType::class)),
        ];
    }

    /**
     * Gets the movieRating property value. Movies rating labels in Japan
     * @return RatingJapanMoviesType|null
    */
    public function getMovieRating(): ?RatingJapanMoviesType {
        return $this->getBackingStore()->get('movieRating');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the tvRating property value. TV content rating labels in Japan
     * @return RatingJapanTelevisionType|null
    */
    public function getTvRating(): ?RatingJapanTelevisionType {
        return $this->getBackingStore()->get('tvRating');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('movieRating', $this->getMovieRating());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('tvRating', $this->getTvRating());
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
     * Sets the movieRating property value. Movies rating labels in Japan
     * @param RatingJapanMoviesType|null $value Value to set for the movieRating property.
    */
    public function setMovieRating(?RatingJapanMoviesType $value): void {
        $this->getBackingStore()->set('movieRating', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the tvRating property value. TV content rating labels in Japan
     * @param RatingJapanTelevisionType|null $value Value to set for the tvRating property.
    */
    public function setTvRating(?RatingJapanTelevisionType $value): void {
        $this->getBackingStore()->set('tvRating', $value);
    }

}