<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewHistoryScheduleSettings File
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
* AccessReviewHistoryScheduleSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewHistoryScheduleSettings extends Entity
{

    /**
    * Gets the recurrence
    *
    * @return PatternedRecurrence|null The recurrence
    */
    public function getRecurrence()
    {
        if (array_key_exists("recurrence", $this->_propDict)) {
            if (is_a($this->_propDict["recurrence"], "\Beta\Microsoft\Graph\Model\PatternedRecurrence") || is_null($this->_propDict["recurrence"])) {
                return $this->_propDict["recurrence"];
            } else {
                $this->_propDict["recurrence"] = new PatternedRecurrence($this->_propDict["recurrence"]);
                return $this->_propDict["recurrence"];
            }
        }
        return null;
    }

    /**
    * Sets the recurrence
    *
    * @param PatternedRecurrence $val The value to assign to the recurrence
    *
    * @return AccessReviewHistoryScheduleSettings The AccessReviewHistoryScheduleSettings
    */
    public function setRecurrence($val)
    {
        $this->_propDict["recurrence"] = $val;
         return $this;
    }
    /**
    * Gets the reportRange
    *
    * @return string|null The reportRange
    */
    public function getReportRange()
    {
        if (array_key_exists("reportRange", $this->_propDict)) {
            return $this->_propDict["reportRange"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reportRange
    *
    * @param string $val The value of the reportRange
    *
    * @return AccessReviewHistoryScheduleSettings
    */
    public function setReportRange($val)
    {
        $this->_propDict["reportRange"] = $val;
        return $this;
    }
}
