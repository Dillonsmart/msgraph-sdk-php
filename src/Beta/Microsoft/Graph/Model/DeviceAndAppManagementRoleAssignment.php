<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceAndAppManagementRoleAssignment File
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
* DeviceAndAppManagementRoleAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceAndAppManagementRoleAssignment extends RoleAssignment
{
    /**
    * Gets the members
    * The list of ids of role member security groups. These are IDs from Azure Active Directory.
    *
    * @return string|null The members
    */
    public function getMembers()
    {
        if (array_key_exists("members", $this->_propDict)) {
            return $this->_propDict["members"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the members
    * The list of ids of role member security groups. These are IDs from Azure Active Directory.
    *
    * @param string $val The members
    *
    * @return DeviceAndAppManagementRoleAssignment
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleScopeTags
    * The set of Role Scope Tags defined on the Role Assignment.
     *
     * @return RoleScopeTag[]|null The roleScopeTags
     */
    public function getRoleScopeTags()
    {
        if (array_key_exists('roleScopeTags', $this->_propDict) && !is_null($this->_propDict['roleScopeTags'])) {
            $roleScopeTags = [];
            if (count($this->_propDict['roleScopeTags']) > 0 && is_a($this->_propDict['roleScopeTags'][0], 'RoleScopeTag')) {
                return $this->_propDict['roleScopeTags'];
            }
            foreach ($this->_propDict['roleScopeTags'] as $singleValue) {
                $roleScopeTags []= new RoleScopeTag($singleValue);
            }
            $this->_propDict['roleScopeTags'] = $roleScopeTags;
            return $this->_propDict['roleScopeTags'];
        }
        return null;
    }
    
    /** 
    * Sets the roleScopeTags
    * The set of Role Scope Tags defined on the Role Assignment.
    *
    * @param RoleScopeTag[] $val The roleScopeTags
    *
    * @return DeviceAndAppManagementRoleAssignment
    */
    public function setRoleScopeTags($val)
    {
        $this->_propDict["roleScopeTags"] = $val;
        return $this;
    }
    
}
