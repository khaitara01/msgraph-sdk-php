<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationStrengthRoot File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* AuthenticationStrengthRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationStrengthRoot extends Entity
{

     /**
     * Gets the authenticationCombinations
    * A collection of all valid authentication method combinations in the system.
     *
     * @return array|null The authenticationCombinations
     */
    public function getAuthenticationCombinations()
    {
        if (array_key_exists("authenticationCombinations", $this->_propDict)) {
           return $this->_propDict["authenticationCombinations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationCombinations
    * A collection of all valid authentication method combinations in the system.
    *
    * @param AuthenticationMethodModes[] $val The authenticationCombinations
    *
    * @return AuthenticationStrengthRoot
    */
    public function setAuthenticationCombinations($val)
    {
        $this->_propDict["authenticationCombinations"] = $val;
        return $this;
    }


     /**
     * Gets the authenticationMethodModes
    * Names and descriptions of all valid authentication method modes in the system.
     *
     * @return array|null The authenticationMethodModes
     */
    public function getAuthenticationMethodModes()
    {
        if (array_key_exists("authenticationMethodModes", $this->_propDict)) {
           return $this->_propDict["authenticationMethodModes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationMethodModes
    * Names and descriptions of all valid authentication method modes in the system.
    *
    * @param AuthenticationMethodModeDetail[] $val The authenticationMethodModes
    *
    * @return AuthenticationStrengthRoot
    */
    public function setAuthenticationMethodModes($val)
    {
        $this->_propDict["authenticationMethodModes"] = $val;
        return $this;
    }


     /**
     * Gets the policies
    * A collection of authentication strength policies that exist for this tenant, including both built-in and custom policies.
     *
     * @return array|null The policies
     */
    public function getPolicies()
    {
        if (array_key_exists("policies", $this->_propDict)) {
           return $this->_propDict["policies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policies
    * A collection of authentication strength policies that exist for this tenant, including both built-in and custom policies.
    *
    * @param AuthenticationStrengthPolicy[] $val The policies
    *
    * @return AuthenticationStrengthRoot
    */
    public function setPolicies($val)
    {
        $this->_propDict["policies"] = $val;
        return $this;
    }

}
