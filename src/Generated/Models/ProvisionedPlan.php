<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ProvisionedPlan implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new provisionedPlan and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProvisionedPlan
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProvisionedPlan {
        return new ProvisionedPlan();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
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
     * Gets the capabilityStatus property value. For example, 'Enabled'.
     * @return string|null
    */
    public function getCapabilityStatus(): ?string {
        return $this->getBackingStore()->get('capabilityStatus');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'capabilityStatus' => fn(ParseNode $n) => $o->setCapabilityStatus($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'provisioningStatus' => fn(ParseNode $n) => $o->setProvisioningStatus($n->getStringValue()),
            'service' => fn(ParseNode $n) => $o->setService($n->getStringValue()),
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
     * Gets the provisioningStatus property value. For example, 'Success'.
     * @return string|null
    */
    public function getProvisioningStatus(): ?string {
        return $this->getBackingStore()->get('provisioningStatus');
    }

    /**
     * Gets the service property value. The name of the service; for example, 'AccessControlS2S'
     * @return string|null
    */
    public function getService(): ?string {
        return $this->getBackingStore()->get('service');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('capabilityStatus', $this->getCapabilityStatus());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('provisioningStatus', $this->getProvisioningStatus());
        $writer->writeStringValue('service', $this->getService());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the capabilityStatus property value. For example, 'Enabled'.
     *  @param string|null $value Value to set for the capabilityStatus property.
    */
    public function setCapabilityStatus(?string $value): void {
        $this->getBackingStore()->set('capabilityStatus', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the provisioningStatus property value. For example, 'Success'.
     *  @param string|null $value Value to set for the provisioningStatus property.
    */
    public function setProvisioningStatus(?string $value): void {
        $this->getBackingStore()->set('provisioningStatus', $value);
    }

    /**
     * Sets the service property value. The name of the service; for example, 'AccessControlS2S'
     *  @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value): void {
        $this->getBackingStore()->set('service', $value);
    }

}
