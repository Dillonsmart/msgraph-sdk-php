<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationGroupSettingCollectionInstanceTemplate File
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
* DeviceManagementConfigurationGroupSettingCollectionInstanceTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationGroupSettingCollectionInstanceTemplate extends DeviceManagementConfigurationSettingInstanceTemplate
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementConfigurationGroupSettingCollectionInstanceTemplate");
    }

    /**
    * Gets the allowUnmanagedValues
    * Linked policy may append values which are not present in the template.
    *
    * @return bool|null The allowUnmanagedValues
    */
    public function getAllowUnmanagedValues()
    {
        if (array_key_exists("allowUnmanagedValues", $this->_propDict)) {
            return $this->_propDict["allowUnmanagedValues"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowUnmanagedValues
    * Linked policy may append values which are not present in the template.
    *
    * @param bool $val The value of the allowUnmanagedValues
    *
    * @return DeviceManagementConfigurationGroupSettingCollectionInstanceTemplate
    */
    public function setAllowUnmanagedValues($val)
    {
        $this->_propDict["allowUnmanagedValues"] = $val;
        return $this;
    }

    /**
    * Gets the groupSettingCollectionValueTemplate
    * Group Setting Collection Value Template
    *
    * @return DeviceManagementConfigurationGroupSettingValueTemplate[]|null The groupSettingCollectionValueTemplate
    */
    public function getGroupSettingCollectionValueTemplate()
    {
        if (array_key_exists("groupSettingCollectionValueTemplate", $this->_propDict) && !is_null($this->_propDict["groupSettingCollectionValueTemplate"])) {
       
            if (count($this->_propDict['groupSettingCollectionValueTemplate']) > 0 && is_a($this->_propDict['groupSettingCollectionValueTemplate'][0], 'DeviceManagementConfigurationGroupSettingValueTemplate')) {
               return $this->_propDict['groupSettingCollectionValueTemplate'];
            }
            $groupSettingCollectionValueTemplate = [];
            foreach ($this->_propDict['groupSettingCollectionValueTemplate'] as $singleValue) {
               $groupSettingCollectionValueTemplate []= new DeviceManagementConfigurationGroupSettingValueTemplate($singleValue);
            }
            $this->_propDict['groupSettingCollectionValueTemplate'] = $groupSettingCollectionValueTemplate;
            return $this->_propDict['groupSettingCollectionValueTemplate'];
            }
        return null;
    }

    /**
    * Sets the groupSettingCollectionValueTemplate
    * Group Setting Collection Value Template
    *
    * @param DeviceManagementConfigurationGroupSettingValueTemplate[] $val The value to assign to the groupSettingCollectionValueTemplate
    *
    * @return DeviceManagementConfigurationGroupSettingCollectionInstanceTemplate The DeviceManagementConfigurationGroupSettingCollectionInstanceTemplate
    */
    public function setGroupSettingCollectionValueTemplate($val)
    {
        $this->_propDict["groupSettingCollectionValueTemplate"] = $val;
         return $this;
    }
}
