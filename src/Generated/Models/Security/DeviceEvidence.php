<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new DeviceEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceEvidence {
        return new DeviceEvidence();
    }

    /**
     * Gets the azureAdDeviceId property value. A unique identifier assigned to a device by Azure Active Directory (Azure AD) when device is Azure AD-joined.
     * @return string|null
    */
    public function getAzureAdDeviceId(): ?string {
        return $this->getBackingStore()->get('azureAdDeviceId');
    }

    /**
     * Gets the defenderAvStatus property value. State of the Defender AntiMalware engine. The possible values are: notReporting, disabled, notUpdated, updated, unknown, notSupported, unknownFutureValue.
     * @return DefenderAvStatus|null
    */
    public function getDefenderAvStatus(): ?DefenderAvStatus {
        return $this->getBackingStore()->get('defenderAvStatus');
    }

    /**
     * Gets the deviceDnsName property value. The fully qualified domain name (FQDN) for the device.
     * @return string|null
    */
    public function getDeviceDnsName(): ?string {
        return $this->getBackingStore()->get('deviceDnsName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureAdDeviceId' => fn(ParseNode $n) => $o->setAzureAdDeviceId($n->getStringValue()),
            'defenderAvStatus' => fn(ParseNode $n) => $o->setDefenderAvStatus($n->getEnumValue(DefenderAvStatus::class)),
            'deviceDnsName' => fn(ParseNode $n) => $o->setDeviceDnsName($n->getStringValue()),
            'firstSeenDateTime' => fn(ParseNode $n) => $o->setFirstSeenDateTime($n->getDateTimeValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(DeviceHealthStatus::class)),
            'loggedOnUsers' => fn(ParseNode $n) => $o->setLoggedOnUsers($n->getCollectionOfObjectValues([LoggedOnUser::class, 'createFromDiscriminatorValue'])),
            'mdeDeviceId' => fn(ParseNode $n) => $o->setMdeDeviceId($n->getStringValue()),
            'onboardingStatus' => fn(ParseNode $n) => $o->setOnboardingStatus($n->getEnumValue(OnboardingStatus::class)),
            'osBuild' => fn(ParseNode $n) => $o->setOsBuild($n->getIntegerValue()),
            'osPlatform' => fn(ParseNode $n) => $o->setOsPlatform($n->getStringValue()),
            'rbacGroupId' => fn(ParseNode $n) => $o->setRbacGroupId($n->getIntegerValue()),
            'rbacGroupName' => fn(ParseNode $n) => $o->setRbacGroupName($n->getStringValue()),
            'riskScore' => fn(ParseNode $n) => $o->setRiskScore($n->getEnumValue(DeviceRiskScore::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
            'vmMetadata' => fn(ParseNode $n) => $o->setVmMetadata($n->getObjectValue([VmMetadata::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the firstSeenDateTime property value. The date and time when the device was first seen.
     * @return DateTime|null
    */
    public function getFirstSeenDateTime(): ?DateTime {
        return $this->getBackingStore()->get('firstSeenDateTime');
    }

    /**
     * Gets the healthStatus property value. The health state of the device.The possible values are: active, inactive, impairedCommunication, noSensorData, noSensorDataImpairedCommunication, unknown, unknownFutureValue.
     * @return DeviceHealthStatus|null
    */
    public function getHealthStatus(): ?DeviceHealthStatus {
        return $this->getBackingStore()->get('healthStatus');
    }

    /**
     * Gets the loggedOnUsers property value. Users that were logged on the machine during the time of the alert.
     * @return array<LoggedOnUser>|null
    */
    public function getLoggedOnUsers(): ?array {
        return $this->getBackingStore()->get('loggedOnUsers');
    }

    /**
     * Gets the mdeDeviceId property value. A unique identifier assigned to a device by Microsoft Defender for Endpoint.
     * @return string|null
    */
    public function getMdeDeviceId(): ?string {
        return $this->getBackingStore()->get('mdeDeviceId');
    }

    /**
     * Gets the onboardingStatus property value. The status of the machine onboarding to Microsoft Defender for Endpoint.The possible values are: insufficientInfo, onboarded, canBeOnboarded, unsupported, unknownFutureValue.
     * @return OnboardingStatus|null
    */
    public function getOnboardingStatus(): ?OnboardingStatus {
        return $this->getBackingStore()->get('onboardingStatus');
    }

    /**
     * Gets the osBuild property value. The build version for the operating system the device is running.
     * @return int|null
    */
    public function getOsBuild(): ?int {
        return $this->getBackingStore()->get('osBuild');
    }

    /**
     * Gets the osPlatform property value. The operating system platform the device is running.
     * @return string|null
    */
    public function getOsPlatform(): ?string {
        return $this->getBackingStore()->get('osPlatform');
    }

    /**
     * Gets the rbacGroupId property value. The ID of the role-based access control (RBAC) device group.
     * @return int|null
    */
    public function getRbacGroupId(): ?int {
        return $this->getBackingStore()->get('rbacGroupId');
    }

    /**
     * Gets the rbacGroupName property value. The name of the RBAC device group.
     * @return string|null
    */
    public function getRbacGroupName(): ?string {
        return $this->getBackingStore()->get('rbacGroupName');
    }

    /**
     * Gets the riskScore property value. Risk score as evaluated by Microsoft Defender for Endpoint. The possible values are: none, informational, low, medium, high, unknownFutureValue.
     * @return DeviceRiskScore|null
    */
    public function getRiskScore(): ?DeviceRiskScore {
        return $this->getBackingStore()->get('riskScore');
    }

    /**
     * Gets the version property value. The version of the operating system platform.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->getBackingStore()->get('version');
    }

    /**
     * Gets the vmMetadata property value. Metadata of the virtual machine (VM) on which Microsoft Defender for Endpoint is running.
     * @return VmMetadata|null
    */
    public function getVmMetadata(): ?VmMetadata {
        return $this->getBackingStore()->get('vmMetadata');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureAdDeviceId', $this->getAzureAdDeviceId());
        $writer->writeEnumValue('defenderAvStatus', $this->getDefenderAvStatus());
        $writer->writeStringValue('deviceDnsName', $this->getDeviceDnsName());
        $writer->writeDateTimeValue('firstSeenDateTime', $this->getFirstSeenDateTime());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeCollectionOfObjectValues('loggedOnUsers', $this->getLoggedOnUsers());
        $writer->writeStringValue('mdeDeviceId', $this->getMdeDeviceId());
        $writer->writeEnumValue('onboardingStatus', $this->getOnboardingStatus());
        $writer->writeIntegerValue('osBuild', $this->getOsBuild());
        $writer->writeStringValue('osPlatform', $this->getOsPlatform());
        $writer->writeIntegerValue('rbacGroupId', $this->getRbacGroupId());
        $writer->writeStringValue('rbacGroupName', $this->getRbacGroupName());
        $writer->writeEnumValue('riskScore', $this->getRiskScore());
        $writer->writeStringValue('version', $this->getVersion());
        $writer->writeObjectValue('vmMetadata', $this->getVmMetadata());
    }

    /**
     * Sets the azureAdDeviceId property value. A unique identifier assigned to a device by Azure Active Directory (Azure AD) when device is Azure AD-joined.
     * @param string|null $value Value to set for the azureAdDeviceId property.
    */
    public function setAzureAdDeviceId(?string $value): void {
        $this->getBackingStore()->set('azureAdDeviceId', $value);
    }

    /**
     * Sets the defenderAvStatus property value. State of the Defender AntiMalware engine. The possible values are: notReporting, disabled, notUpdated, updated, unknown, notSupported, unknownFutureValue.
     * @param DefenderAvStatus|null $value Value to set for the defenderAvStatus property.
    */
    public function setDefenderAvStatus(?DefenderAvStatus $value): void {
        $this->getBackingStore()->set('defenderAvStatus', $value);
    }

    /**
     * Sets the deviceDnsName property value. The fully qualified domain name (FQDN) for the device.
     * @param string|null $value Value to set for the deviceDnsName property.
    */
    public function setDeviceDnsName(?string $value): void {
        $this->getBackingStore()->set('deviceDnsName', $value);
    }

    /**
     * Sets the firstSeenDateTime property value. The date and time when the device was first seen.
     * @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstSeenDateTime', $value);
    }

    /**
     * Sets the healthStatus property value. The health state of the device.The possible values are: active, inactive, impairedCommunication, noSensorData, noSensorDataImpairedCommunication, unknown, unknownFutureValue.
     * @param DeviceHealthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?DeviceHealthStatus $value): void {
        $this->getBackingStore()->set('healthStatus', $value);
    }

    /**
     * Sets the loggedOnUsers property value. Users that were logged on the machine during the time of the alert.
     * @param array<LoggedOnUser>|null $value Value to set for the loggedOnUsers property.
    */
    public function setLoggedOnUsers(?array $value): void {
        $this->getBackingStore()->set('loggedOnUsers', $value);
    }

    /**
     * Sets the mdeDeviceId property value. A unique identifier assigned to a device by Microsoft Defender for Endpoint.
     * @param string|null $value Value to set for the mdeDeviceId property.
    */
    public function setMdeDeviceId(?string $value): void {
        $this->getBackingStore()->set('mdeDeviceId', $value);
    }

    /**
     * Sets the onboardingStatus property value. The status of the machine onboarding to Microsoft Defender for Endpoint.The possible values are: insufficientInfo, onboarded, canBeOnboarded, unsupported, unknownFutureValue.
     * @param OnboardingStatus|null $value Value to set for the onboardingStatus property.
    */
    public function setOnboardingStatus(?OnboardingStatus $value): void {
        $this->getBackingStore()->set('onboardingStatus', $value);
    }

    /**
     * Sets the osBuild property value. The build version for the operating system the device is running.
     * @param int|null $value Value to set for the osBuild property.
    */
    public function setOsBuild(?int $value): void {
        $this->getBackingStore()->set('osBuild', $value);
    }

    /**
     * Sets the osPlatform property value. The operating system platform the device is running.
     * @param string|null $value Value to set for the osPlatform property.
    */
    public function setOsPlatform(?string $value): void {
        $this->getBackingStore()->set('osPlatform', $value);
    }

    /**
     * Sets the rbacGroupId property value. The ID of the role-based access control (RBAC) device group.
     * @param int|null $value Value to set for the rbacGroupId property.
    */
    public function setRbacGroupId(?int $value): void {
        $this->getBackingStore()->set('rbacGroupId', $value);
    }

    /**
     * Sets the rbacGroupName property value. The name of the RBAC device group.
     * @param string|null $value Value to set for the rbacGroupName property.
    */
    public function setRbacGroupName(?string $value): void {
        $this->getBackingStore()->set('rbacGroupName', $value);
    }

    /**
     * Sets the riskScore property value. Risk score as evaluated by Microsoft Defender for Endpoint. The possible values are: none, informational, low, medium, high, unknownFutureValue.
     * @param DeviceRiskScore|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?DeviceRiskScore $value): void {
        $this->getBackingStore()->set('riskScore', $value);
    }

    /**
     * Sets the version property value. The version of the operating system platform.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

    /**
     * Sets the vmMetadata property value. Metadata of the virtual machine (VM) on which Microsoft Defender for Endpoint is running.
     * @param VmMetadata|null $value Value to set for the vmMetadata property.
    */
    public function setVmMetadata(?VmMetadata $value): void {
        $this->getBackingStore()->set('vmMetadata', $value);
    }

}
