<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewHistoryInstance File
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
* AccessReviewHistoryInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewHistoryInstance extends Entity
{
    /**
    * Gets the downloadUri
    *
    * @return string|null The downloadUri
    */
    public function getDownloadUri()
    {
        if (array_key_exists("downloadUri", $this->_propDict)) {
            return $this->_propDict["downloadUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the downloadUri
    *
    * @param string $val The downloadUri
    *
    * @return AccessReviewHistoryInstance
    */
    public function setDownloadUri($val)
    {
        $this->_propDict["downloadUri"] = $val;
        return $this;
    }

    /**
    * Gets the expirationDateTime
    *
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTime
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return AccessReviewHistoryInstance
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the fulfilledDateTime
    *
    * @return \DateTime|null The fulfilledDateTime
    */
    public function getFulfilledDateTime()
    {
        if (array_key_exists("fulfilledDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["fulfilledDateTime"], "\DateTime") || is_null($this->_propDict["fulfilledDateTime"])) {
                return $this->_propDict["fulfilledDateTime"];
            } else {
                $this->_propDict["fulfilledDateTime"] = new \DateTime($this->_propDict["fulfilledDateTime"]);
                return $this->_propDict["fulfilledDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the fulfilledDateTime
    *
    * @param \DateTime $val The fulfilledDateTime
    *
    * @return AccessReviewHistoryInstance
    */
    public function setFulfilledDateTime($val)
    {
        $this->_propDict["fulfilledDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the reviewHistoryPeriodEndDateTime
    *
    * @return \DateTime|null The reviewHistoryPeriodEndDateTime
    */
    public function getReviewHistoryPeriodEndDateTime()
    {
        if (array_key_exists("reviewHistoryPeriodEndDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["reviewHistoryPeriodEndDateTime"], "\DateTime") || is_null($this->_propDict["reviewHistoryPeriodEndDateTime"])) {
                return $this->_propDict["reviewHistoryPeriodEndDateTime"];
            } else {
                $this->_propDict["reviewHistoryPeriodEndDateTime"] = new \DateTime($this->_propDict["reviewHistoryPeriodEndDateTime"]);
                return $this->_propDict["reviewHistoryPeriodEndDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewHistoryPeriodEndDateTime
    *
    * @param \DateTime $val The reviewHistoryPeriodEndDateTime
    *
    * @return AccessReviewHistoryInstance
    */
    public function setReviewHistoryPeriodEndDateTime($val)
    {
        $this->_propDict["reviewHistoryPeriodEndDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the reviewHistoryPeriodStartDateTime
    *
    * @return \DateTime|null The reviewHistoryPeriodStartDateTime
    */
    public function getReviewHistoryPeriodStartDateTime()
    {
        if (array_key_exists("reviewHistoryPeriodStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["reviewHistoryPeriodStartDateTime"], "\DateTime") || is_null($this->_propDict["reviewHistoryPeriodStartDateTime"])) {
                return $this->_propDict["reviewHistoryPeriodStartDateTime"];
            } else {
                $this->_propDict["reviewHistoryPeriodStartDateTime"] = new \DateTime($this->_propDict["reviewHistoryPeriodStartDateTime"]);
                return $this->_propDict["reviewHistoryPeriodStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewHistoryPeriodStartDateTime
    *
    * @param \DateTime $val The reviewHistoryPeriodStartDateTime
    *
    * @return AccessReviewHistoryInstance
    */
    public function setReviewHistoryPeriodStartDateTime($val)
    {
        $this->_propDict["reviewHistoryPeriodStartDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the runDateTime
    *
    * @return \DateTime|null The runDateTime
    */
    public function getRunDateTime()
    {
        if (array_key_exists("runDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["runDateTime"], "\DateTime") || is_null($this->_propDict["runDateTime"])) {
                return $this->_propDict["runDateTime"];
            } else {
                $this->_propDict["runDateTime"] = new \DateTime($this->_propDict["runDateTime"]);
                return $this->_propDict["runDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the runDateTime
    *
    * @param \DateTime $val The runDateTime
    *
    * @return AccessReviewHistoryInstance
    */
    public function setRunDateTime($val)
    {
        $this->_propDict["runDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return AccessReviewHistoryStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\AccessReviewHistoryStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AccessReviewHistoryStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param AccessReviewHistoryStatus $val The status
    *
    * @return AccessReviewHistoryInstance
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

}
