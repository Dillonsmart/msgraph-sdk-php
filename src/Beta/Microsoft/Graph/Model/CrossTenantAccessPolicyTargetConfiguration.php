<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CrossTenantAccessPolicyTargetConfiguration File
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
* CrossTenantAccessPolicyTargetConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CrossTenantAccessPolicyTargetConfiguration extends Entity
{

    /**
    * Gets the accessType
    *
    * @return CrossTenantAccessPolicyTargetConfigurationAccessType|null The accessType
    */
    public function getAccessType()
    {
        if (array_key_exists("accessType", $this->_propDict)) {
            if (is_a($this->_propDict["accessType"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyTargetConfigurationAccessType") || is_null($this->_propDict["accessType"])) {
                return $this->_propDict["accessType"];
            } else {
                $this->_propDict["accessType"] = new CrossTenantAccessPolicyTargetConfigurationAccessType($this->_propDict["accessType"]);
                return $this->_propDict["accessType"];
            }
        }
        return null;
    }

    /**
    * Sets the accessType
    *
    * @param CrossTenantAccessPolicyTargetConfigurationAccessType $val The value to assign to the accessType
    *
    * @return CrossTenantAccessPolicyTargetConfiguration The CrossTenantAccessPolicyTargetConfiguration
    */
    public function setAccessType($val)
    {
        $this->_propDict["accessType"] = $val;
         return $this;
    }

    /**
    * Gets the targets
    *
    * @return CrossTenantAccessPolicyTarget|null The targets
    */
    public function getTargets()
    {
        if (array_key_exists("targets", $this->_propDict)) {
            if (is_a($this->_propDict["targets"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyTarget") || is_null($this->_propDict["targets"])) {
                return $this->_propDict["targets"];
            } else {
                $this->_propDict["targets"] = new CrossTenantAccessPolicyTarget($this->_propDict["targets"]);
                return $this->_propDict["targets"];
            }
        }
        return null;
    }

    /**
    * Sets the targets
    *
    * @param CrossTenantAccessPolicyTarget $val The value to assign to the targets
    *
    * @return CrossTenantAccessPolicyTargetConfiguration The CrossTenantAccessPolicyTargetConfiguration
    */
    public function setTargets($val)
    {
        $this->_propDict["targets"] = $val;
         return $this;
    }
}
