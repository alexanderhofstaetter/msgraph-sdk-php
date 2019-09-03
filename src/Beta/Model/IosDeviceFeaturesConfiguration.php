<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosDeviceFeaturesConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* IosDeviceFeaturesConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IosDeviceFeaturesConfiguration extends AppleDeviceFeaturesConfigurationBase
{
    /**
    * Gets the assetTagTemplate
    * Asset tag information for the device, displayed on the login window and lock screen.
    *
    * @return string The assetTagTemplate
    */
    public function getAssetTagTemplate()
    {
        if (array_key_exists("assetTagTemplate", $this->_propDict)) {
            return $this->_propDict["assetTagTemplate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assetTagTemplate
    * Asset tag information for the device, displayed on the login window and lock screen.
    *
    * @param string $val The assetTagTemplate
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setAssetTagTemplate($val)
    {
        $this->_propDict["assetTagTemplate"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentFilterSettings
    * Gets or sets iOS Web Content Filter settings, supervised mode only
    *
    * @return IosWebContentFilterBase The contentFilterSettings
    */
    public function getContentFilterSettings()
    {
        if (array_key_exists("contentFilterSettings", $this->_propDict)) {
            if (is_a($this->_propDict["contentFilterSettings"], "Microsoft\Graph\Beta\Model\IosWebContentFilterBase")) {
                return $this->_propDict["contentFilterSettings"];
            } else {
                $this->_propDict["contentFilterSettings"] = new IosWebContentFilterBase($this->_propDict["contentFilterSettings"]);
                return $this->_propDict["contentFilterSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the contentFilterSettings
    * Gets or sets iOS Web Content Filter settings, supervised mode only
    *
    * @param IosWebContentFilterBase $val The contentFilterSettings
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setContentFilterSettings($val)
    {
        $this->_propDict["contentFilterSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the lockScreenFootnote
    * A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later.
    *
    * @return string The lockScreenFootnote
    */
    public function getLockScreenFootnote()
    {
        if (array_key_exists("lockScreenFootnote", $this->_propDict)) {
            return $this->_propDict["lockScreenFootnote"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lockScreenFootnote
    * A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later.
    *
    * @param string $val The lockScreenFootnote
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setLockScreenFootnote($val)
    {
        $this->_propDict["lockScreenFootnote"] = $val;
        return $this;
    }
    

     /** 
     * Gets the homeScreenDockIcons
    * A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements.
     *
     * @return array The homeScreenDockIcons
     */
    public function getHomeScreenDockIcons()
    {
        if (array_key_exists("homeScreenDockIcons", $this->_propDict)) {
           return $this->_propDict["homeScreenDockIcons"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the homeScreenDockIcons
    * A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements.
    *
    * @param IosHomeScreenItem $val The homeScreenDockIcons
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setHomeScreenDockIcons($val)
    {
		$this->_propDict["homeScreenDockIcons"] = $val;
        return $this;
    }
    

     /** 
     * Gets the homeScreenPages
    * A list of pages on the Home Screen. This collection can contain a maximum of 500 elements.
     *
     * @return array The homeScreenPages
     */
    public function getHomeScreenPages()
    {
        if (array_key_exists("homeScreenPages", $this->_propDict)) {
           return $this->_propDict["homeScreenPages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the homeScreenPages
    * A list of pages on the Home Screen. This collection can contain a maximum of 500 elements.
    *
    * @param IosHomeScreenPage $val The homeScreenPages
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setHomeScreenPages($val)
    {
		$this->_propDict["homeScreenPages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the notificationSettings
    * Notification settings for each bundle id. Applicable to devices in supervised mode only (iOS 9.3 and later). This collection can contain a maximum of 500 elements.
     *
     * @return array The notificationSettings
     */
    public function getNotificationSettings()
    {
        if (array_key_exists("notificationSettings", $this->_propDict)) {
           return $this->_propDict["notificationSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the notificationSettings
    * Notification settings for each bundle id. Applicable to devices in supervised mode only (iOS 9.3 and later). This collection can contain a maximum of 500 elements.
    *
    * @param IosNotificationSettings $val The notificationSettings
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setNotificationSettings($val)
    {
		$this->_propDict["notificationSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the singleSignOnSettings
    * The Kerberos login settings that enable apps on receiving devices to authenticate smoothly.
    *
    * @return IosSingleSignOnSettings The singleSignOnSettings
    */
    public function getSingleSignOnSettings()
    {
        if (array_key_exists("singleSignOnSettings", $this->_propDict)) {
            if (is_a($this->_propDict["singleSignOnSettings"], "Microsoft\Graph\Beta\Model\IosSingleSignOnSettings")) {
                return $this->_propDict["singleSignOnSettings"];
            } else {
                $this->_propDict["singleSignOnSettings"] = new IosSingleSignOnSettings($this->_propDict["singleSignOnSettings"]);
                return $this->_propDict["singleSignOnSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the singleSignOnSettings
    * The Kerberos login settings that enable apps on receiving devices to authenticate smoothly.
    *
    * @param IosSingleSignOnSettings $val The singleSignOnSettings
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setSingleSignOnSettings($val)
    {
        $this->_propDict["singleSignOnSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the wallpaperDisplayLocation
    * A wallpaper display location specifier.
    *
    * @return IosWallpaperDisplayLocation The wallpaperDisplayLocation
    */
    public function getWallpaperDisplayLocation()
    {
        if (array_key_exists("wallpaperDisplayLocation", $this->_propDict)) {
            if (is_a($this->_propDict["wallpaperDisplayLocation"], "Microsoft\Graph\Beta\Model\IosWallpaperDisplayLocation")) {
                return $this->_propDict["wallpaperDisplayLocation"];
            } else {
                $this->_propDict["wallpaperDisplayLocation"] = new IosWallpaperDisplayLocation($this->_propDict["wallpaperDisplayLocation"]);
                return $this->_propDict["wallpaperDisplayLocation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the wallpaperDisplayLocation
    * A wallpaper display location specifier.
    *
    * @param IosWallpaperDisplayLocation $val The wallpaperDisplayLocation
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setWallpaperDisplayLocation($val)
    {
        $this->_propDict["wallpaperDisplayLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the wallpaperImage
    * A wallpaper image must be in either PNG or JPEG format. It requires a supervised device with iOS 8 or later version.
    *
    * @return MimeContent The wallpaperImage
    */
    public function getWallpaperImage()
    {
        if (array_key_exists("wallpaperImage", $this->_propDict)) {
            if (is_a($this->_propDict["wallpaperImage"], "Microsoft\Graph\Beta\Model\MimeContent")) {
                return $this->_propDict["wallpaperImage"];
            } else {
                $this->_propDict["wallpaperImage"] = new MimeContent($this->_propDict["wallpaperImage"]);
                return $this->_propDict["wallpaperImage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the wallpaperImage
    * A wallpaper image must be in either PNG or JPEG format. It requires a supervised device with iOS 8 or later version.
    *
    * @param MimeContent $val The wallpaperImage
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setWallpaperImage($val)
    {
        $this->_propDict["wallpaperImage"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificateForClientAuthentication
    * Identity Certificate for the renewal of Kerberos ticket used in single sign-on settings.
    *
    * @return IosCertificateProfileBase The identityCertificateForClientAuthentication
    */
    public function getIdentityCertificateForClientAuthentication()
    {
        if (array_key_exists("identityCertificateForClientAuthentication", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificateForClientAuthentication"], "Microsoft\Graph\Beta\Model\IosCertificateProfileBase")) {
                return $this->_propDict["identityCertificateForClientAuthentication"];
            } else {
                $this->_propDict["identityCertificateForClientAuthentication"] = new IosCertificateProfileBase($this->_propDict["identityCertificateForClientAuthentication"]);
                return $this->_propDict["identityCertificateForClientAuthentication"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificateForClientAuthentication
    * Identity Certificate for the renewal of Kerberos ticket used in single sign-on settings.
    *
    * @param IosCertificateProfileBase $val The identityCertificateForClientAuthentication
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setIdentityCertificateForClientAuthentication($val)
    {
        $this->_propDict["identityCertificateForClientAuthentication"] = $val;
        return $this;
    }
    
}