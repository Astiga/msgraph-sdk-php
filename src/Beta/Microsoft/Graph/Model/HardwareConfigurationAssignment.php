<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HardwareConfigurationAssignment File
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
* HardwareConfigurationAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HardwareConfigurationAssignment extends Entity
{
    /**
    * Gets the target
    * The Id of the Azure Active Directory group we are targeting the configuration to.
    *
    * @return DeviceAndAppManagementAssignmentTarget|null The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            if (is_a($this->_propDict["target"], "\Beta\Microsoft\Graph\Model\DeviceAndAppManagementAssignmentTarget") || is_null($this->_propDict["target"])) {
                return $this->_propDict["target"];
            } else {
                $this->_propDict["target"] = new DeviceAndAppManagementAssignmentTarget($this->_propDict["target"]);
                return $this->_propDict["target"];
            }
        }
        return null;
    }

    /**
    * Sets the target
    * The Id of the Azure Active Directory group we are targeting the configuration to.
    *
    * @param DeviceAndAppManagementAssignmentTarget $val The target
    *
    * @return HardwareConfigurationAssignment
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }

}
