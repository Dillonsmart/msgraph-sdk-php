<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsInsight File
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
* UserExperienceAnalyticsInsight class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsInsight extends Entity
{
    /**
    * Gets the insightId
    * The unique identifier of the user experience analytics insight.
    *
    * @return string|null The insightId
    */
    public function getInsightId()
    {
        if (array_key_exists("insightId", $this->_propDict)) {
            return $this->_propDict["insightId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the insightId
    * The unique identifier of the user experience analytics insight.
    *
    * @param string $val The value of the insightId
    *
    * @return UserExperienceAnalyticsInsight
    */
    public function setInsightId($val)
    {
        $this->_propDict["insightId"] = $val;
        return $this;
    }

    /**
    * Gets the severity
    * The value of the user experience analytics insight. Possible values are: none, informational, warning, error.
    *
    * @return UserExperienceAnalyticsInsightSeverity|null The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict) && !is_null($this->_propDict["severity"])) {
     
            if (is_a($this->_propDict["severity"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsInsightSeverity")) {
                return $this->_propDict["severity"];
            } else {
                $this->_propDict["severity"] = new UserExperienceAnalyticsInsightSeverity($this->_propDict["severity"]);
                return $this->_propDict["severity"];
            }
        }
        return null;
    }

    /**
    * Sets the severity
    * The value of the user experience analytics insight. Possible values are: none, informational, warning, error.
    *
    * @param UserExperienceAnalyticsInsightSeverity $val The value to assign to the severity
    *
    * @return UserExperienceAnalyticsInsight The UserExperienceAnalyticsInsight
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
         return $this;
    }
    /**
    * Gets the userExperienceAnalyticsMetricId
    * The unique identifier of the user experience analytics insight.
    *
    * @return string|null The userExperienceAnalyticsMetricId
    */
    public function getUserExperienceAnalyticsMetricId()
    {
        if (array_key_exists("userExperienceAnalyticsMetricId", $this->_propDict)) {
            return $this->_propDict["userExperienceAnalyticsMetricId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsMetricId
    * The unique identifier of the user experience analytics insight.
    *
    * @param string $val The value of the userExperienceAnalyticsMetricId
    *
    * @return UserExperienceAnalyticsInsight
    */
    public function setUserExperienceAnalyticsMetricId($val)
    {
        $this->_propDict["userExperienceAnalyticsMetricId"] = $val;
        return $this;
    }

    /**
    * Gets the values
    * The value of the user experience analytics insight.
    *
    * @return UserExperienceAnalyticsInsightValue[]|null The values
    */
    public function getValues()
    {
        if (array_key_exists("values", $this->_propDict) && !is_null($this->_propDict["values"])) {
       
            if (count($this->_propDict['values']) > 0 && is_a($this->_propDict['values'][0], 'UserExperienceAnalyticsInsightValue')) {
               return $this->_propDict['values'];
            }
            $values = [];
            foreach ($this->_propDict['values'] as $singleValue) {
               $values []= new UserExperienceAnalyticsInsightValue($singleValue);
            }
            $this->_propDict['values'] = $values;
            return $this->_propDict['values'];
            }
        return null;
    }

    /**
    * Sets the values
    * The value of the user experience analytics insight.
    *
    * @param UserExperienceAnalyticsInsightValue[] $val The value to assign to the values
    *
    * @return UserExperienceAnalyticsInsight The UserExperienceAnalyticsInsight
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
         return $this;
    }
}
