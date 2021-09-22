<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSetting File
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
* DeviceManagementConfigurationSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSetting extends Entity
{
    /**
    * Gets the settingInstance
    * Setting Instance
    *
    * @return DeviceManagementConfigurationSettingInstance|null The settingInstance
    */
    public function getSettingInstance()
    {
        if (array_key_exists("settingInstance", $this->_propDict) && !is_null($this->_propDict["settingInstance"])) {
            if (is_a($this->_propDict["settingInstance"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingInstance")) {
                return $this->_propDict["settingInstance"];
            } else {
                $this->_propDict["settingInstance"] = new DeviceManagementConfigurationSettingInstance($this->_propDict["settingInstance"]);
                return $this->_propDict["settingInstance"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settingInstance
    * Setting Instance
    *
    * @param DeviceManagementConfigurationSettingInstance $val The settingInstance
    *
    * @return DeviceManagementConfigurationSetting
    */
    public function setSettingInstance($val)
    {
        $this->_propDict["settingInstance"] = $val;
        return $this;
    }
    

     /** 
     * Gets the settingDefinitions
    * List of related Setting Definitions
     *
     * @return DeviceManagementConfigurationSettingDefinition[]|null The settingDefinitions
     */
    public function getSettingDefinitions()
    {
        if (array_key_exists('settingDefinitions', $this->_propDict) && !is_null($this->_propDict['settingDefinitions'])) {
            $settingDefinitions = [];
            if (count($this->_propDict['settingDefinitions']) > 0 && is_a($this->_propDict['settingDefinitions'][0], 'DeviceManagementConfigurationSettingDefinition')) {
                return $this->_propDict['settingDefinitions'];
            }
            foreach ($this->_propDict['settingDefinitions'] as $singleValue) {
                $settingDefinitions []= new DeviceManagementConfigurationSettingDefinition($singleValue);
            }
            $this->_propDict['settingDefinitions'] = $settingDefinitions;
            return $this->_propDict['settingDefinitions'];
        }
        return null;
    }
    
    /** 
    * Sets the settingDefinitions
    * List of related Setting Definitions
    *
    * @param DeviceManagementConfigurationSettingDefinition[] $val The settingDefinitions
    *
    * @return DeviceManagementConfigurationSetting
    */
    public function setSettingDefinitions($val)
    {
        $this->_propDict["settingDefinitions"] = $val;
        return $this;
    }
    
}
