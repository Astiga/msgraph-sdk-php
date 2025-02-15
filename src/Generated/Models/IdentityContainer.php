<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IdentityContainer extends Entity implements Parsable 
{
    /**
     * Instantiates a new identityContainer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityContainer {
        return new IdentityContainer();
    }

    /**
     * Gets the apiConnectors property value. Represents entry point for API connectors.
     * @return array<IdentityApiConnector>|null
    */
    public function getApiConnectors(): ?array {
        $val = $this->getBackingStore()->get('apiConnectors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IdentityApiConnector::class);
            /** @var array<IdentityApiConnector>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apiConnectors'");
    }

    /**
     * Gets the b2xUserFlows property value. Represents entry point for B2X/self-service sign-up identity userflows.
     * @return array<B2xIdentityUserFlow>|null
    */
    public function getB2xUserFlows(): ?array {
        $val = $this->getBackingStore()->get('b2xUserFlows');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, B2xIdentityUserFlow::class);
            /** @var array<B2xIdentityUserFlow>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'b2xUserFlows'");
    }

    /**
     * Gets the conditionalAccess property value. the entry point for the Conditional Access (CA) object model.
     * @return ConditionalAccessRoot|null
    */
    public function getConditionalAccess(): ?ConditionalAccessRoot {
        $val = $this->getBackingStore()->get('conditionalAccess');
        if (is_null($val) || $val instanceof ConditionalAccessRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccess'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'apiConnectors' => fn(ParseNode $n) => $o->setApiConnectors($n->getCollectionOfObjectValues([IdentityApiConnector::class, 'createFromDiscriminatorValue'])),
            'b2xUserFlows' => fn(ParseNode $n) => $o->setB2xUserFlows($n->getCollectionOfObjectValues([B2xIdentityUserFlow::class, 'createFromDiscriminatorValue'])),
            'conditionalAccess' => fn(ParseNode $n) => $o->setConditionalAccess($n->getObjectValue([ConditionalAccessRoot::class, 'createFromDiscriminatorValue'])),
            'identityProviders' => fn(ParseNode $n) => $o->setIdentityProviders($n->getCollectionOfObjectValues([IdentityProviderBase::class, 'createFromDiscriminatorValue'])),
            'userFlowAttributes' => fn(ParseNode $n) => $o->setUserFlowAttributes($n->getCollectionOfObjectValues([IdentityUserFlowAttribute::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the identityProviders property value. The identityProviders property
     * @return array<IdentityProviderBase>|null
    */
    public function getIdentityProviders(): ?array {
        $val = $this->getBackingStore()->get('identityProviders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IdentityProviderBase::class);
            /** @var array<IdentityProviderBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityProviders'");
    }

    /**
     * Gets the userFlowAttributes property value. Represents entry point for identity userflow attributes.
     * @return array<IdentityUserFlowAttribute>|null
    */
    public function getUserFlowAttributes(): ?array {
        $val = $this->getBackingStore()->get('userFlowAttributes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IdentityUserFlowAttribute::class);
            /** @var array<IdentityUserFlowAttribute>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userFlowAttributes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('apiConnectors', $this->getApiConnectors());
        $writer->writeCollectionOfObjectValues('b2xUserFlows', $this->getB2xUserFlows());
        $writer->writeObjectValue('conditionalAccess', $this->getConditionalAccess());
        $writer->writeCollectionOfObjectValues('identityProviders', $this->getIdentityProviders());
        $writer->writeCollectionOfObjectValues('userFlowAttributes', $this->getUserFlowAttributes());
    }

    /**
     * Sets the apiConnectors property value. Represents entry point for API connectors.
     * @param array<IdentityApiConnector>|null $value Value to set for the apiConnectors property.
    */
    public function setApiConnectors(?array $value): void {
        $this->getBackingStore()->set('apiConnectors', $value);
    }

    /**
     * Sets the b2xUserFlows property value. Represents entry point for B2X/self-service sign-up identity userflows.
     * @param array<B2xIdentityUserFlow>|null $value Value to set for the b2xUserFlows property.
    */
    public function setB2xUserFlows(?array $value): void {
        $this->getBackingStore()->set('b2xUserFlows', $value);
    }

    /**
     * Sets the conditionalAccess property value. the entry point for the Conditional Access (CA) object model.
     * @param ConditionalAccessRoot|null $value Value to set for the conditionalAccess property.
    */
    public function setConditionalAccess(?ConditionalAccessRoot $value): void {
        $this->getBackingStore()->set('conditionalAccess', $value);
    }

    /**
     * Sets the identityProviders property value. The identityProviders property
     * @param array<IdentityProviderBase>|null $value Value to set for the identityProviders property.
    */
    public function setIdentityProviders(?array $value): void {
        $this->getBackingStore()->set('identityProviders', $value);
    }

    /**
     * Sets the userFlowAttributes property value. Represents entry point for identity userflow attributes.
     * @param array<IdentityUserFlowAttribute>|null $value Value to set for the userFlowAttributes property.
    */
    public function setUserFlowAttributes(?array $value): void {
        $this->getBackingStore()->set('userFlowAttributes', $value);
    }

}
