<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSettingTemplate File
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
* DeviceManagementConfigurationSettingTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSettingTemplate extends Entity
{
    /**
    * Gets the settingInstanceTemplate
    * Setting Instance Template
    *
    * @return DeviceManagementConfigurationSettingInstanceTemplate|null The settingInstanceTemplate
    */
    public function getSettingInstanceTemplate()
    {
        if (array_key_exists("settingInstanceTemplate", $this->_propDict) && !is_null($this->_propDict["settingInstanceTemplate"])) {
            if (is_a($this->_propDict["settingInstanceTemplate"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingInstanceTemplate")) {
                return $this->_propDict["settingInstanceTemplate"];
            } else {
                $this->_propDict["settingInstanceTemplate"] = new DeviceManagementConfigurationSettingInstanceTemplate($this->_propDict["settingInstanceTemplate"]);
                return $this->_propDict["settingInstanceTemplate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settingInstanceTemplate
    * Setting Instance Template
    *
    * @param DeviceManagementConfigurationSettingInstanceTemplate $val The settingInstanceTemplate
    *
    * @return DeviceManagementConfigurationSettingTemplate
    */
    public function setSettingInstanceTemplate($val)
    {
        $this->_propDict["settingInstanceTemplate"] = $val;
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
    * @return DeviceManagementConfigurationSettingTemplate
    */
    public function setSettingDefinitions($val)
    {
        $this->_propDict["settingDefinitions"] = $val;
        return $this;
    }
    
}
