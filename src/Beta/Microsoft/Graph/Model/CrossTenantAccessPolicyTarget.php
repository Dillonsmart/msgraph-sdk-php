<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CrossTenantAccessPolicyTarget File
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
* CrossTenantAccessPolicyTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CrossTenantAccessPolicyTarget extends Entity
{
    /**
    * Gets the target
    *
    * @return string|null The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            return $this->_propDict["target"];
        } else {
            return null;
        }
    }

    /**
    * Sets the target
    *
    * @param string $val The value of the target
    *
    * @return CrossTenantAccessPolicyTarget
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }

    /**
    * Gets the targetType
    *
    * @return CrossTenantAccessPolicyTargetType|null The targetType
    */
    public function getTargetType()
    {
        if (array_key_exists("targetType", $this->_propDict)) {
            if (is_a($this->_propDict["targetType"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyTargetType") || is_null($this->_propDict["targetType"])) {
                return $this->_propDict["targetType"];
            } else {
                $this->_propDict["targetType"] = new CrossTenantAccessPolicyTargetType($this->_propDict["targetType"]);
                return $this->_propDict["targetType"];
            }
        }
        return null;
    }

    /**
    * Sets the targetType
    *
    * @param CrossTenantAccessPolicyTargetType $val The value to assign to the targetType
    *
    * @return CrossTenantAccessPolicyTarget The CrossTenantAccessPolicyTarget
    */
    public function setTargetType($val)
    {
        $this->_propDict["targetType"] = $val;
         return $this;
    }
}
