<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Teamwork File
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
* Teamwork class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Teamwork extends Entity
{

     /**
     * Gets the workforceIntegrations
     *
     * @return array|null The workforceIntegrations
     */
    public function getWorkforceIntegrations()
    {
        if (array_key_exists("workforceIntegrations", $this->_propDict)) {
           return $this->_propDict["workforceIntegrations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workforceIntegrations
    *
    * @param WorkforceIntegration[] $val The workforceIntegrations
    *
    * @return Teamwork
    */
    public function setWorkforceIntegrations($val)
    {
        $this->_propDict["workforceIntegrations"] = $val;
        return $this;
    }


     /**
     * Gets the devices
     *
     * @return array|null The devices
     */
    public function getDevices()
    {
        if (array_key_exists("devices", $this->_propDict)) {
           return $this->_propDict["devices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the devices
    *
    * @param TeamworkDevice[] $val The devices
    *
    * @return Teamwork
    */
    public function setDevices($val)
    {
        $this->_propDict["devices"] = $val;
        return $this;
    }

}
