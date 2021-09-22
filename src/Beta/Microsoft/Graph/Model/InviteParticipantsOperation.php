<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InviteParticipantsOperation File
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
* InviteParticipantsOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InviteParticipantsOperation extends CommsOperation
{

     /** 
     * Gets the participants
    * The participants to invite.
     *
     * @return InvitationParticipantInfo[]|null The participants
     */
    public function getParticipants()
    {
        if (array_key_exists('participants', $this->_propDict) && !is_null($this->_propDict['participants'])) {
            $participants = [];
            if (count($this->_propDict['participants']) > 0 && is_a($this->_propDict['participants'][0], 'InvitationParticipantInfo')) {
                return $this->_propDict['participants'];
            }
            foreach ($this->_propDict['participants'] as $singleValue) {
                $participants []= new InvitationParticipantInfo($singleValue);
            }
            $this->_propDict['participants'] = $participants;
            return $this->_propDict['participants'];
        }
        return null;
    }
    
    /** 
    * Sets the participants
    * The participants to invite.
    *
    * @param InvitationParticipantInfo[] $val The participants
    *
    * @return InviteParticipantsOperation
    */
    public function setParticipants($val)
    {
        $this->_propDict["participants"] = $val;
        return $this;
    }
    
}
