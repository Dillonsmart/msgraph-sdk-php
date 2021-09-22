<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CredentialUserRegistrationCount File
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
* CredentialUserRegistrationCount class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CredentialUserRegistrationCount extends Entity
{
    /**
    * Gets the totalUserCount
    * Provides the total user count in the tenant.
    *
    * @return int|null The totalUserCount
    */
    public function getTotalUserCount()
    {
        if (array_key_exists("totalUserCount", $this->_propDict)) {
            return $this->_propDict["totalUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalUserCount
    * Provides the total user count in the tenant.
    *
    * @param int $val The totalUserCount
    *
    * @return CredentialUserRegistrationCount
    */
    public function setTotalUserCount($val)
    {
        $this->_propDict["totalUserCount"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the userRegistrationCounts
    * A collection of registration count and status information for users in your tenant.
     *
     * @return UserRegistrationCount[]|null The userRegistrationCounts
     */
    public function getUserRegistrationCounts()
    {
        if (array_key_exists('userRegistrationCounts', $this->_propDict) && !is_null($this->_propDict['userRegistrationCounts'])) {
            $userRegistrationCounts = [];
            if (count($this->_propDict['userRegistrationCounts']) > 0 && is_a($this->_propDict['userRegistrationCounts'][0], 'UserRegistrationCount')) {
                return $this->_propDict['userRegistrationCounts'];
            }
            foreach ($this->_propDict['userRegistrationCounts'] as $singleValue) {
                $userRegistrationCounts []= new UserRegistrationCount($singleValue);
            }
            $this->_propDict['userRegistrationCounts'] = $userRegistrationCounts;
            return $this->_propDict['userRegistrationCounts'];
        }
        return null;
    }
    
    /** 
    * Sets the userRegistrationCounts
    * A collection of registration count and status information for users in your tenant.
    *
    * @param UserRegistrationCount[] $val The userRegistrationCounts
    *
    * @return CredentialUserRegistrationCount
    */
    public function setUserRegistrationCounts($val)
    {
        $this->_propDict["userRegistrationCounts"] = $val;
        return $this;
    }
    
}
