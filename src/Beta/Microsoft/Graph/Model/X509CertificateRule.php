<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* X509CertificateRule File
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
* X509CertificateRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class X509CertificateRule extends Entity
{
    /**
    * Gets the identifier
    *
    * @return string|null The identifier
    */
    public function getIdentifier()
    {
        if (array_key_exists("identifier", $this->_propDict)) {
            return $this->_propDict["identifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identifier
    *
    * @param string $val The value of the identifier
    *
    * @return X509CertificateRule
    */
    public function setIdentifier($val)
    {
        $this->_propDict["identifier"] = $val;
        return $this;
    }

    /**
    * Gets the x509CertificateAuthenticationMode
    *
    * @return X509CertificateAuthenticationMode|null The x509CertificateAuthenticationMode
    */
    public function getX509CertificateAuthenticationMode()
    {
        if (array_key_exists("x509CertificateAuthenticationMode", $this->_propDict)) {
            if (is_a($this->_propDict["x509CertificateAuthenticationMode"], "\Beta\Microsoft\Graph\Model\X509CertificateAuthenticationMode") || is_null($this->_propDict["x509CertificateAuthenticationMode"])) {
                return $this->_propDict["x509CertificateAuthenticationMode"];
            } else {
                $this->_propDict["x509CertificateAuthenticationMode"] = new X509CertificateAuthenticationMode($this->_propDict["x509CertificateAuthenticationMode"]);
                return $this->_propDict["x509CertificateAuthenticationMode"];
            }
        }
        return null;
    }

    /**
    * Sets the x509CertificateAuthenticationMode
    *
    * @param X509CertificateAuthenticationMode $val The value to assign to the x509CertificateAuthenticationMode
    *
    * @return X509CertificateRule The X509CertificateRule
    */
    public function setX509CertificateAuthenticationMode($val)
    {
        $this->_propDict["x509CertificateAuthenticationMode"] = $val;
         return $this;
    }

    /**
    * Gets the x509CertificateRuleType
    *
    * @return X509CertificateRuleType|null The x509CertificateRuleType
    */
    public function getX509CertificateRuleType()
    {
        if (array_key_exists("x509CertificateRuleType", $this->_propDict)) {
            if (is_a($this->_propDict["x509CertificateRuleType"], "\Beta\Microsoft\Graph\Model\X509CertificateRuleType") || is_null($this->_propDict["x509CertificateRuleType"])) {
                return $this->_propDict["x509CertificateRuleType"];
            } else {
                $this->_propDict["x509CertificateRuleType"] = new X509CertificateRuleType($this->_propDict["x509CertificateRuleType"]);
                return $this->_propDict["x509CertificateRuleType"];
            }
        }
        return null;
    }

    /**
    * Sets the x509CertificateRuleType
    *
    * @param X509CertificateRuleType $val The value to assign to the x509CertificateRuleType
    *
    * @return X509CertificateRule The X509CertificateRule
    */
    public function setX509CertificateRuleType($val)
    {
        $this->_propDict["x509CertificateRuleType"] = $val;
         return $this;
    }
}
