<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkDevice File
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
* TeamworkDevice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkDevice extends Entity
{
    /**
    * Gets the activityState
    *
    * @return TeamworkDeviceActivityState|null The activityState
    */
    public function getActivityState()
    {
        if (array_key_exists("activityState", $this->_propDict)) {
            if (is_a($this->_propDict["activityState"], "\Beta\Microsoft\Graph\Model\TeamworkDeviceActivityState") || is_null($this->_propDict["activityState"])) {
                return $this->_propDict["activityState"];
            } else {
                $this->_propDict["activityState"] = new TeamworkDeviceActivityState($this->_propDict["activityState"]);
                return $this->_propDict["activityState"];
            }
        }
        return null;
    }

    /**
    * Sets the activityState
    *
    * @param TeamworkDeviceActivityState $val The activityState
    *
    * @return TeamworkDevice
    */
    public function setActivityState($val)
    {
        $this->_propDict["activityState"] = $val;
        return $this;
    }

    /**
    * Gets the companyAssetTag
    *
    * @return string|null The companyAssetTag
    */
    public function getCompanyAssetTag()
    {
        if (array_key_exists("companyAssetTag", $this->_propDict)) {
            return $this->_propDict["companyAssetTag"];
        } else {
            return null;
        }
    }

    /**
    * Sets the companyAssetTag
    *
    * @param string $val The companyAssetTag
    *
    * @return TeamworkDevice
    */
    public function setCompanyAssetTag($val)
    {
        $this->_propDict["companyAssetTag"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    *
    * @return IdentitySet|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    *
    * @param IdentitySet $val The createdBy
    *
    * @return TeamworkDevice
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return TeamworkDevice
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the currentUser
    *
    * @return TeamworkUserIdentity|null The currentUser
    */
    public function getCurrentUser()
    {
        if (array_key_exists("currentUser", $this->_propDict)) {
            if (is_a($this->_propDict["currentUser"], "\Beta\Microsoft\Graph\Model\TeamworkUserIdentity") || is_null($this->_propDict["currentUser"])) {
                return $this->_propDict["currentUser"];
            } else {
                $this->_propDict["currentUser"] = new TeamworkUserIdentity($this->_propDict["currentUser"]);
                return $this->_propDict["currentUser"];
            }
        }
        return null;
    }

    /**
    * Sets the currentUser
    *
    * @param TeamworkUserIdentity $val The currentUser
    *
    * @return TeamworkDevice
    */
    public function setCurrentUser($val)
    {
        $this->_propDict["currentUser"] = $val;
        return $this;
    }

    /**
    * Gets the deviceType
    *
    * @return TeamworkDeviceType|null The deviceType
    */
    public function getDeviceType()
    {
        if (array_key_exists("deviceType", $this->_propDict)) {
            if (is_a($this->_propDict["deviceType"], "\Beta\Microsoft\Graph\Model\TeamworkDeviceType") || is_null($this->_propDict["deviceType"])) {
                return $this->_propDict["deviceType"];
            } else {
                $this->_propDict["deviceType"] = new TeamworkDeviceType($this->_propDict["deviceType"]);
                return $this->_propDict["deviceType"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceType
    *
    * @param TeamworkDeviceType $val The deviceType
    *
    * @return TeamworkDevice
    */
    public function setDeviceType($val)
    {
        $this->_propDict["deviceType"] = $val;
        return $this;
    }

    /**
    * Gets the hardwareDetail
    *
    * @return TeamworkHardwareDetail|null The hardwareDetail
    */
    public function getHardwareDetail()
    {
        if (array_key_exists("hardwareDetail", $this->_propDict)) {
            if (is_a($this->_propDict["hardwareDetail"], "\Beta\Microsoft\Graph\Model\TeamworkHardwareDetail") || is_null($this->_propDict["hardwareDetail"])) {
                return $this->_propDict["hardwareDetail"];
            } else {
                $this->_propDict["hardwareDetail"] = new TeamworkHardwareDetail($this->_propDict["hardwareDetail"]);
                return $this->_propDict["hardwareDetail"];
            }
        }
        return null;
    }

    /**
    * Sets the hardwareDetail
    *
    * @param TeamworkHardwareDetail $val The hardwareDetail
    *
    * @return TeamworkDevice
    */
    public function setHardwareDetail($val)
    {
        $this->_propDict["hardwareDetail"] = $val;
        return $this;
    }

    /**
    * Gets the healthStatus
    *
    * @return TeamworkDeviceHealthStatus|null The healthStatus
    */
    public function getHealthStatus()
    {
        if (array_key_exists("healthStatus", $this->_propDict)) {
            if (is_a($this->_propDict["healthStatus"], "\Beta\Microsoft\Graph\Model\TeamworkDeviceHealthStatus") || is_null($this->_propDict["healthStatus"])) {
                return $this->_propDict["healthStatus"];
            } else {
                $this->_propDict["healthStatus"] = new TeamworkDeviceHealthStatus($this->_propDict["healthStatus"]);
                return $this->_propDict["healthStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the healthStatus
    *
    * @param TeamworkDeviceHealthStatus $val The healthStatus
    *
    * @return TeamworkDevice
    */
    public function setHealthStatus($val)
    {
        $this->_propDict["healthStatus"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    *
    * @return IdentitySet|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return TeamworkDevice
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return TeamworkDevice
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the notes
    *
    * @return string|null The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            return $this->_propDict["notes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notes
    *
    * @param string $val The notes
    *
    * @return TeamworkDevice
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }

    /**
    * Gets the activity
    *
    * @return TeamworkDeviceActivity|null The activity
    */
    public function getActivity()
    {
        if (array_key_exists("activity", $this->_propDict)) {
            if (is_a($this->_propDict["activity"], "\Beta\Microsoft\Graph\Model\TeamworkDeviceActivity") || is_null($this->_propDict["activity"])) {
                return $this->_propDict["activity"];
            } else {
                $this->_propDict["activity"] = new TeamworkDeviceActivity($this->_propDict["activity"]);
                return $this->_propDict["activity"];
            }
        }
        return null;
    }

    /**
    * Sets the activity
    *
    * @param TeamworkDeviceActivity $val The activity
    *
    * @return TeamworkDevice
    */
    public function setActivity($val)
    {
        $this->_propDict["activity"] = $val;
        return $this;
    }

    /**
    * Gets the configuration
    *
    * @return TeamworkDeviceConfiguration|null The configuration
    */
    public function getConfiguration()
    {
        if (array_key_exists("configuration", $this->_propDict)) {
            if (is_a($this->_propDict["configuration"], "\Beta\Microsoft\Graph\Model\TeamworkDeviceConfiguration") || is_null($this->_propDict["configuration"])) {
                return $this->_propDict["configuration"];
            } else {
                $this->_propDict["configuration"] = new TeamworkDeviceConfiguration($this->_propDict["configuration"]);
                return $this->_propDict["configuration"];
            }
        }
        return null;
    }

    /**
    * Sets the configuration
    *
    * @param TeamworkDeviceConfiguration $val The configuration
    *
    * @return TeamworkDevice
    */
    public function setConfiguration($val)
    {
        $this->_propDict["configuration"] = $val;
        return $this;
    }

    /**
    * Gets the health
    *
    * @return TeamworkDeviceHealth|null The health
    */
    public function getHealth()
    {
        if (array_key_exists("health", $this->_propDict)) {
            if (is_a($this->_propDict["health"], "\Beta\Microsoft\Graph\Model\TeamworkDeviceHealth") || is_null($this->_propDict["health"])) {
                return $this->_propDict["health"];
            } else {
                $this->_propDict["health"] = new TeamworkDeviceHealth($this->_propDict["health"]);
                return $this->_propDict["health"];
            }
        }
        return null;
    }

    /**
    * Sets the health
    *
    * @param TeamworkDeviceHealth $val The health
    *
    * @return TeamworkDevice
    */
    public function setHealth($val)
    {
        $this->_propDict["health"] = $val;
        return $this;
    }


     /**
     * Gets the operations
     *
     * @return array|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operations
    *
    * @param TeamworkDeviceOperation[] $val The operations
    *
    * @return TeamworkDevice
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }

}
