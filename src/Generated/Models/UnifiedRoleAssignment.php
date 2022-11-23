<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new unifiedRoleAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleAssignment {
        return new UnifiedRoleAssignment();
    }

    /**
     * Gets the appScope property value. Read-only property with details of the app specific scope when the assignment scope is app specific. Containment entity. Supports $expand.
     * @return AppScope|null
    */
    public function getAppScope(): ?AppScope {
        return $this->getBackingStore()->get('appScope');
    }

    /**
     * Gets the appScopeId property value. Identifier of the app-specific scope when the assignment scope is app-specific.  Either this property or directoryScopeId is required. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. Supports $filter (eq, in).
     * @return string|null
    */
    public function getAppScopeId(): ?string {
        return $this->getBackingStore()->get('appScopeId');
    }

    /**
     * Gets the condition property value. The condition property
     * @return string|null
    */
    public function getCondition(): ?string {
        return $this->getBackingStore()->get('condition');
    }

    /**
     * Gets the directoryScope property value. The directory object that is the scope of the assignment. Read-only. Supports $expand.
     * @return DirectoryObject|null
    */
    public function getDirectoryScope(): ?DirectoryObject {
        return $this->getBackingStore()->get('directoryScope');
    }

    /**
     * Gets the directoryScopeId property value. Identifier of the directory object representing the scope of the assignment.  Either this property or appScopeId is required. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. Supports $filter (eq, in).
     * @return string|null
    */
    public function getDirectoryScopeId(): ?string {
        return $this->getBackingStore()->get('directoryScopeId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appScope' => fn(ParseNode $n) => $o->setAppScope($n->getObjectValue([AppScope::class, 'createFromDiscriminatorValue'])),
            'appScopeId' => fn(ParseNode $n) => $o->setAppScopeId($n->getStringValue()),
            'condition' => fn(ParseNode $n) => $o->setCondition($n->getStringValue()),
            'directoryScope' => fn(ParseNode $n) => $o->setDirectoryScope($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'directoryScopeId' => fn(ParseNode $n) => $o->setDirectoryScopeId($n->getStringValue()),
            'principal' => fn(ParseNode $n) => $o->setPrincipal($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'principalId' => fn(ParseNode $n) => $o->setPrincipalId($n->getStringValue()),
            'roleDefinition' => fn(ParseNode $n) => $o->setRoleDefinition($n->getObjectValue([UnifiedRoleDefinition::class, 'createFromDiscriminatorValue'])),
            'roleDefinitionId' => fn(ParseNode $n) => $o->setRoleDefinitionId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the principal property value. Referencing the assigned principal. Read-only. Supports $expand.
     * @return DirectoryObject|null
    */
    public function getPrincipal(): ?DirectoryObject {
        return $this->getBackingStore()->get('principal');
    }

    /**
     * Gets the principalId property value. Identifier of the principal to which the assignment is granted. Supports $filter (eq, in).
     * @return string|null
    */
    public function getPrincipalId(): ?string {
        return $this->getBackingStore()->get('principalId');
    }

    /**
     * Gets the roleDefinition property value. The roleDefinition the assignment is for.  Supports $expand. roleDefinition.Id will be auto expanded.
     * @return UnifiedRoleDefinition|null
    */
    public function getRoleDefinition(): ?UnifiedRoleDefinition {
        return $this->getBackingStore()->get('roleDefinition');
    }

    /**
     * Gets the roleDefinitionId property value. Identifier of the role definition the assignment is for. Read only. Supports $filter (eq, in).
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        return $this->getBackingStore()->get('roleDefinitionId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('appScope', $this->getAppScope());
        $writer->writeStringValue('appScopeId', $this->getAppScopeId());
        $writer->writeStringValue('condition', $this->getCondition());
        $writer->writeObjectValue('directoryScope', $this->getDirectoryScope());
        $writer->writeStringValue('directoryScopeId', $this->getDirectoryScopeId());
        $writer->writeObjectValue('principal', $this->getPrincipal());
        $writer->writeStringValue('principalId', $this->getPrincipalId());
        $writer->writeObjectValue('roleDefinition', $this->getRoleDefinition());
        $writer->writeStringValue('roleDefinitionId', $this->getRoleDefinitionId());
    }

    /**
     * Sets the appScope property value. Read-only property with details of the app specific scope when the assignment scope is app specific. Containment entity. Supports $expand.
     *  @param AppScope|null $value Value to set for the appScope property.
    */
    public function setAppScope(?AppScope $value): void {
        $this->getBackingStore()->set('appScope', $value);
    }

    /**
     * Sets the appScopeId property value. Identifier of the app-specific scope when the assignment scope is app-specific.  Either this property or directoryScopeId is required. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. Supports $filter (eq, in).
     *  @param string|null $value Value to set for the appScopeId property.
    */
    public function setAppScopeId(?string $value): void {
        $this->getBackingStore()->set('appScopeId', $value);
    }

    /**
     * Sets the condition property value. The condition property
     *  @param string|null $value Value to set for the condition property.
    */
    public function setCondition(?string $value): void {
        $this->getBackingStore()->set('condition', $value);
    }

    /**
     * Sets the directoryScope property value. The directory object that is the scope of the assignment. Read-only. Supports $expand.
     *  @param DirectoryObject|null $value Value to set for the directoryScope property.
    */
    public function setDirectoryScope(?DirectoryObject $value): void {
        $this->getBackingStore()->set('directoryScope', $value);
    }

    /**
     * Sets the directoryScopeId property value. Identifier of the directory object representing the scope of the assignment.  Either this property or appScopeId is required. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. Supports $filter (eq, in).
     *  @param string|null $value Value to set for the directoryScopeId property.
    */
    public function setDirectoryScopeId(?string $value): void {
        $this->getBackingStore()->set('directoryScopeId', $value);
    }

    /**
     * Sets the principal property value. Referencing the assigned principal. Read-only. Supports $expand.
     *  @param DirectoryObject|null $value Value to set for the principal property.
    */
    public function setPrincipal(?DirectoryObject $value): void {
        $this->getBackingStore()->set('principal', $value);
    }

    /**
     * Sets the principalId property value. Identifier of the principal to which the assignment is granted. Supports $filter (eq, in).
     *  @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value): void {
        $this->getBackingStore()->set('principalId', $value);
    }

    /**
     * Sets the roleDefinition property value. The roleDefinition the assignment is for.  Supports $expand. roleDefinition.Id will be auto expanded.
     *  @param UnifiedRoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?UnifiedRoleDefinition $value): void {
        $this->getBackingStore()->set('roleDefinition', $value);
    }

    /**
     * Sets the roleDefinitionId property value. Identifier of the role definition the assignment is for. Read only. Supports $filter (eq, in).
     *  @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value): void {
        $this->getBackingStore()->set('roleDefinitionId', $value);
    }

}
