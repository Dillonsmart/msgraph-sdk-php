<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkPeripheral File
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
* TeamworkPeripheral class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkPeripheral extends Entity
{
    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return TeamworkPeripheral
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the productId
    *
    * @return string|null The productId
    */
    public function getProductId()
    {
        if (array_key_exists("productId", $this->_propDict)) {
            return $this->_propDict["productId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productId
    *
    * @param string $val The productId
    *
    * @return TeamworkPeripheral
    */
    public function setProductId($val)
    {
        $this->_propDict["productId"] = $val;
        return $this;
    }

    /**
    * Gets the vendorId
    *
    * @return string|null The vendorId
    */
    public function getVendorId()
    {
        if (array_key_exists("vendorId", $this->_propDict)) {
            return $this->_propDict["vendorId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vendorId
    *
    * @param string $val The vendorId
    *
    * @return TeamworkPeripheral
    */
    public function setVendorId($val)
    {
        $this->_propDict["vendorId"] = $val;
        return $this;
    }

}
