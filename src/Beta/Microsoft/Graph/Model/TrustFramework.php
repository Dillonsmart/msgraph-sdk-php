<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrustFramework File
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
* TrustFramework class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrustFramework implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;
    
    /**
    * Construct a new TrustFramework
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the TrustFramework
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    

     /** 
     * Gets the keySets
     *
     * @return TrustFrameworkKeySet[]|null The keySets
     */
    public function getKeySets()
    {
        if (array_key_exists('keySets', $this->_propDict) && !is_null($this->_propDict['keySets'])) {
            $keySets = [];
            if (count($this->_propDict['keySets']) > 0 && is_a($this->_propDict['keySets'][0], 'TrustFrameworkKeySet')) {
                return $this->_propDict['keySets'];
            }
            foreach ($this->_propDict['keySets'] as $singleValue) {
                $keySets []= new TrustFrameworkKeySet($singleValue);
            }
            $this->_propDict['keySets'] = $keySets;
            return $this->_propDict['keySets'];
        }
        return null;
    }
    
    /** 
    * Sets the keySets
    *
    * @param TrustFrameworkKeySet[] $val The keySets
    *
    * @return TrustFramework
    */
    public function setKeySets($val)
    {
        $this->_propDict["keySets"] = $val;
        return $this;
    }
    

     /** 
     * Gets the policies
     *
     * @return TrustFrameworkPolicy[]|null The policies
     */
    public function getPolicies()
    {
        if (array_key_exists('policies', $this->_propDict) && !is_null($this->_propDict['policies'])) {
            $policies = [];
            if (count($this->_propDict['policies']) > 0 && is_a($this->_propDict['policies'][0], 'TrustFrameworkPolicy')) {
                return $this->_propDict['policies'];
            }
            foreach ($this->_propDict['policies'] as $singleValue) {
                $policies []= new TrustFrameworkPolicy($singleValue);
            }
            $this->_propDict['policies'] = $policies;
            return $this->_propDict['policies'];
        }
        return null;
    }
    
    /** 
    * Sets the policies
    *
    * @param TrustFrameworkPolicy[] $val The policies
    *
    * @return TrustFramework
    */
    public function setPolicies($val)
    {
        $this->_propDict["policies"] = $val;
        return $this;
    }
    
    /**
    * Gets the ODataType
    *
    * @return string The ODataType
    */
    public function getODataType()
    {
        return $this->_propDict["@odata.type"];
    }
    
    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return TrustFramework
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }
    
    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, '\DateTime')) {
                $serializableProperties[$property] = $val->format(\DateTimeInterface::RFC3339);
            } else if (is_a($val, '\Microsoft\Graph\Core\Enum')) {
                $serializableProperties[$property] = $val->value();
            } else if (is_array($val)) {
                $values = [];
                if (count($val) > 0 && is_a($val[0], '\DateTime')) {
                   foreach ($values as $propertyValue) {
                       $values []= $propertyValue->format(\DateTimeInterface::RFC3339);
                   }
                } else if(count > 0 && is_a($val[0], '\Microsoft\Graph\Core\Enum')) {
                    foreach ($values as $propertyValue) {
                       $values []= $propertyValue->value();
                   }
                }
                $serializableProperties[$property] = $values;
            }
        }
        return $serializableProperties;
    }
}
