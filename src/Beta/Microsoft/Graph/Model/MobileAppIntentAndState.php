<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppIntentAndState File
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
* MobileAppIntentAndState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppIntentAndState extends Entity
{
    /**
    * Gets the managedDeviceIdentifier
    * Device identifier created or collected by Intune.
    *
    * @return string|null The managedDeviceIdentifier
    */
    public function getManagedDeviceIdentifier()
    {
        if (array_key_exists("managedDeviceIdentifier", $this->_propDict)) {
            return $this->_propDict["managedDeviceIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceIdentifier
    * Device identifier created or collected by Intune.
    *
    * @param string $val The managedDeviceIdentifier
    *
    * @return MobileAppIntentAndState
    */
    public function setManagedDeviceIdentifier($val)
    {
        $this->_propDict["managedDeviceIdentifier"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileAppList
    * The list of payload intents and states for the tenant.
     *
     * @return MobileAppIntentAndStateDetail[]|null The mobileAppList
     */
    public function getMobileAppList()
    {
        if (array_key_exists('mobileAppList', $this->_propDict) && !is_null($this->_propDict['mobileAppList'])) {
            $mobileAppList = [];
            if (count($this->_propDict['mobileAppList']) > 0 && is_a($this->_propDict['mobileAppList'][0], 'MobileAppIntentAndStateDetail')) {
                return $this->_propDict['mobileAppList'];
            }
            foreach ($this->_propDict['mobileAppList'] as $singleValue) {
                $mobileAppList []= new MobileAppIntentAndStateDetail($singleValue);
            }
            $this->_propDict['mobileAppList'] = $mobileAppList;
            return $this->_propDict['mobileAppList'];
        }
        return null;
    }
    
    /** 
    * Sets the mobileAppList
    * The list of payload intents and states for the tenant.
    *
    * @param MobileAppIntentAndStateDetail[] $val The mobileAppList
    *
    * @return MobileAppIntentAndState
    */
    public function setMobileAppList($val)
    {
        $this->_propDict["mobileAppList"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * Identifier for the user that tried to enroll the device.
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    * Identifier for the user that tried to enroll the device.
    *
    * @param string $val The userId
    *
    * @return MobileAppIntentAndState
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
}
