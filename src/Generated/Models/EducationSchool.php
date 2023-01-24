<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSchool extends EducationOrganization implements Parsable 
{
    /**
     * Instantiates a new EducationSchool and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationSchool');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationSchool
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationSchool {
        return new EducationSchool();
    }

    /**
     * Gets the address property value. Address of the school.
     * @return PhysicalAddress|null
    */
    public function getAddress(): ?PhysicalAddress {
        return $this->getBackingStore()->get('address');
    }

    /**
     * Gets the administrativeUnit property value. The underlying administrativeUnit for this school.
     * @return AdministrativeUnit|null
    */
    public function getAdministrativeUnit(): ?AdministrativeUnit {
        return $this->getBackingStore()->get('administrativeUnit');
    }

    /**
     * Gets the classes property value. Classes taught at the school. Nullable.
     * @return array<EducationClass>|null
    */
    public function getClasses(): ?array {
        return $this->getBackingStore()->get('classes');
    }

    /**
     * Gets the createdBy property value. Entity who created the school.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the externalId property value. ID of school in syncing system.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->getBackingStore()->get('externalId');
    }

    /**
     * Gets the externalPrincipalId property value. ID of principal in syncing system.
     * @return string|null
    */
    public function getExternalPrincipalId(): ?string {
        return $this->getBackingStore()->get('externalPrincipalId');
    }

    /**
     * Gets the fax property value. The fax property
     * @return string|null
    */
    public function getFax(): ?string {
        return $this->getBackingStore()->get('fax');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([PhysicalAddress::class, 'createFromDiscriminatorValue'])),
            'administrativeUnit' => fn(ParseNode $n) => $o->setAdministrativeUnit($n->getObjectValue([AdministrativeUnit::class, 'createFromDiscriminatorValue'])),
            'classes' => fn(ParseNode $n) => $o->setClasses($n->getCollectionOfObjectValues([EducationClass::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'externalPrincipalId' => fn(ParseNode $n) => $o->setExternalPrincipalId($n->getStringValue()),
            'fax' => fn(ParseNode $n) => $o->setFax($n->getStringValue()),
            'highestGrade' => fn(ParseNode $n) => $o->setHighestGrade($n->getStringValue()),
            'lowestGrade' => fn(ParseNode $n) => $o->setLowestGrade($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'principalEmail' => fn(ParseNode $n) => $o->setPrincipalEmail($n->getStringValue()),
            'principalName' => fn(ParseNode $n) => $o->setPrincipalName($n->getStringValue()),
            'schoolNumber' => fn(ParseNode $n) => $o->setSchoolNumber($n->getStringValue()),
            'users' => fn(ParseNode $n) => $o->setUsers($n->getCollectionOfObjectValues([EducationUser::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the highestGrade property value. Highest grade taught.
     * @return string|null
    */
    public function getHighestGrade(): ?string {
        return $this->getBackingStore()->get('highestGrade');
    }

    /**
     * Gets the lowestGrade property value. Lowest grade taught.
     * @return string|null
    */
    public function getLowestGrade(): ?string {
        return $this->getBackingStore()->get('lowestGrade');
    }

    /**
     * Gets the phone property value. Phone number of school.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->getBackingStore()->get('phone');
    }

    /**
     * Gets the principalEmail property value. Email address of the principal.
     * @return string|null
    */
    public function getPrincipalEmail(): ?string {
        return $this->getBackingStore()->get('principalEmail');
    }

    /**
     * Gets the principalName property value. Name of the principal.
     * @return string|null
    */
    public function getPrincipalName(): ?string {
        return $this->getBackingStore()->get('principalName');
    }

    /**
     * Gets the schoolNumber property value. School Number.
     * @return string|null
    */
    public function getSchoolNumber(): ?string {
        return $this->getBackingStore()->get('schoolNumber');
    }

    /**
     * Gets the users property value. Users in the school. Nullable.
     * @return array<EducationUser>|null
    */
    public function getUsers(): ?array {
        return $this->getBackingStore()->get('users');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeObjectValue('administrativeUnit', $this->getAdministrativeUnit());
        $writer->writeCollectionOfObjectValues('classes', $this->getClasses());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeStringValue('externalPrincipalId', $this->getExternalPrincipalId());
        $writer->writeStringValue('fax', $this->getFax());
        $writer->writeStringValue('highestGrade', $this->getHighestGrade());
        $writer->writeStringValue('lowestGrade', $this->getLowestGrade());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeStringValue('principalEmail', $this->getPrincipalEmail());
        $writer->writeStringValue('principalName', $this->getPrincipalName());
        $writer->writeStringValue('schoolNumber', $this->getSchoolNumber());
        $writer->writeCollectionOfObjectValues('users', $this->getUsers());
    }

    /**
     * Sets the address property value. Address of the school.
     * @param PhysicalAddress|null $value Value to set for the address property.
    */
    public function setAddress(?PhysicalAddress $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the administrativeUnit property value. The underlying administrativeUnit for this school.
     * @param AdministrativeUnit|null $value Value to set for the administrativeUnit property.
    */
    public function setAdministrativeUnit(?AdministrativeUnit $value): void {
        $this->getBackingStore()->set('administrativeUnit', $value);
    }

    /**
     * Sets the classes property value. Classes taught at the school. Nullable.
     * @param array<EducationClass>|null $value Value to set for the classes property.
    */
    public function setClasses(?array $value): void {
        $this->getBackingStore()->set('classes', $value);
    }

    /**
     * Sets the createdBy property value. Entity who created the school.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the externalId property value. ID of school in syncing system.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the externalPrincipalId property value. ID of principal in syncing system.
     * @param string|null $value Value to set for the externalPrincipalId property.
    */
    public function setExternalPrincipalId(?string $value): void {
        $this->getBackingStore()->set('externalPrincipalId', $value);
    }

    /**
     * Sets the fax property value. The fax property
     * @param string|null $value Value to set for the fax property.
    */
    public function setFax(?string $value): void {
        $this->getBackingStore()->set('fax', $value);
    }

    /**
     * Sets the highestGrade property value. Highest grade taught.
     * @param string|null $value Value to set for the highestGrade property.
    */
    public function setHighestGrade(?string $value): void {
        $this->getBackingStore()->set('highestGrade', $value);
    }

    /**
     * Sets the lowestGrade property value. Lowest grade taught.
     * @param string|null $value Value to set for the lowestGrade property.
    */
    public function setLowestGrade(?string $value): void {
        $this->getBackingStore()->set('lowestGrade', $value);
    }

    /**
     * Sets the phone property value. Phone number of school.
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->getBackingStore()->set('phone', $value);
    }

    /**
     * Sets the principalEmail property value. Email address of the principal.
     * @param string|null $value Value to set for the principalEmail property.
    */
    public function setPrincipalEmail(?string $value): void {
        $this->getBackingStore()->set('principalEmail', $value);
    }

    /**
     * Sets the principalName property value. Name of the principal.
     * @param string|null $value Value to set for the principalName property.
    */
    public function setPrincipalName(?string $value): void {
        $this->getBackingStore()->set('principalName', $value);
    }

    /**
     * Sets the schoolNumber property value. School Number.
     * @param string|null $value Value to set for the schoolNumber property.
    */
    public function setSchoolNumber(?string $value): void {
        $this->getBackingStore()->set('schoolNumber', $value);
    }

    /**
     * Sets the users property value. Users in the school. Nullable.
     * @param array<EducationUser>|null $value Value to set for the users property.
    */
    public function setUsers(?array $value): void {
        $this->getBackingStore()->set('users', $value);
    }

}
