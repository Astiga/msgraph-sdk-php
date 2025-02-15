<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties and inherited properties for Android store apps that you can manage with an Intune app protection policy.
*/
class ManagedAndroidStoreApp extends ManagedApp implements Parsable 
{
    /**
     * Instantiates a new managedAndroidStoreApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedAndroidStoreApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAndroidStoreApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAndroidStoreApp {
        return new ManagedAndroidStoreApp();
    }

    /**
     * Gets the appStoreUrl property value. The Android AppStoreUrl.
     * @return string|null
    */
    public function getAppStoreUrl(): ?string {
        $val = $this->getBackingStore()->get('appStoreUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appStoreUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appStoreUrl' => fn(ParseNode $n) => $o->setAppStoreUrl($n->getStringValue()),
            'minimumSupportedOperatingSystem' => fn(ParseNode $n) => $o->setMinimumSupportedOperatingSystem($n->getObjectValue([AndroidMinimumOperatingSystem::class, 'createFromDiscriminatorValue'])),
            'packageId' => fn(ParseNode $n) => $o->setPackageId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. Contains properties for the minimum operating system required for an Android mobile app.
     * @return AndroidMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?AndroidMinimumOperatingSystem {
        $val = $this->getBackingStore()->get('minimumSupportedOperatingSystem');
        if (is_null($val) || $val instanceof AndroidMinimumOperatingSystem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumSupportedOperatingSystem'");
    }

    /**
     * Gets the packageId property value. The app's package ID.
     * @return string|null
    */
    public function getPackageId(): ?string {
        $val = $this->getBackingStore()->get('packageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'packageId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appStoreUrl', $this->getAppStoreUrl());
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->getMinimumSupportedOperatingSystem());
        $writer->writeStringValue('packageId', $this->getPackageId());
    }

    /**
     * Sets the appStoreUrl property value. The Android AppStoreUrl.
     * @param string|null $value Value to set for the appStoreUrl property.
    */
    public function setAppStoreUrl(?string $value): void {
        $this->getBackingStore()->set('appStoreUrl', $value);
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. Contains properties for the minimum operating system required for an Android mobile app.
     * @param AndroidMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?AndroidMinimumOperatingSystem $value): void {
        $this->getBackingStore()->set('minimumSupportedOperatingSystem', $value);
    }

    /**
     * Sets the packageId property value. The app's package ID.
     * @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value): void {
        $this->getBackingStore()->set('packageId', $value);
    }

}
