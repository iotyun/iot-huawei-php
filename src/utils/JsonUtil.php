<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/23
 * Time: 16:35
 */

namespace iotyun\huaweiiot\utils;

//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyDeviceAddedDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyBindDeviceDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyDeviceInfoChangedDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyDeviceDataChangedDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyDeviceDatasChangedDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyServiceInfoChangedDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyDeviceDeletedDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyMessageConfirmDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyCommandRspDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyDeviceEventDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyDeviceModelAddedDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyDeviceModelDeletedDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyRuleEventDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyDeviceDesiredStatusChangedDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifySwUpgradeStateChangedDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifySwUpgradeResultDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyFwUpgradeStateChangedDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyFwUpgradeResultDTO.php');
//require_once($GLOBALS['root'] . '\extend\iotyun\huaweiiot\client\dto\NotifyNBCommandStatusChangedDTO.php');

use iotyun\huaweiiot\client\dto\NotifyDeviceAddedDTO;
use iotyun\huaweiiot\client\dto\NotifyBindDeviceDTO;
use iotyun\huaweiiot\client\dto\NotifyDeviceInfoChangedDTO;
use iotyun\huaweiiot\client\dto\NotifyDeviceDataChangedDTO;
use iotyun\huaweiiot\client\dto\NotifyDeviceDatasChangedDTO;
use iotyun\huaweiiot\client\dto\NotifyServiceInfoChangedDTO;
use iotyun\huaweiiot\client\dto\NotifyDeviceDeletedDTO;
use iotyun\huaweiiot\client\dto\NotifyMessageConfirmDTO;
use iotyun\huaweiiot\client\dto\NotifyCommandRspDTO;
use iotyun\huaweiiot\client\dto\NotifyDeviceEventDTO;
use iotyun\huaweiiot\client\dto\NotifyDeviceModelAddedDTO;
use iotyun\huaweiiot\client\dto\NotifyDeviceModelDeletedDTO;
use iotyun\huaweiiot\client\dto\NotifyRuleEventDTO;
use iotyun\huaweiiot\client\dto\NotifyDeviceDesiredStatusChangedDTO;
use iotyun\huaweiiot\client\dto\NotifySwUpgradeStateChangedDTO;
use iotyun\huaweiiot\client\dto\NotifySwUpgradeResultDTO;
use iotyun\huaweiiot\client\dto\NotifyFwUpgradeStateChangedDTO;
use iotyun\huaweiiot\client\dto\NotifyFwUpgradeResultDTO;
use iotyun\huaweiiot\client\dto\NotifyNBCommandStatusChangedDTO;

class JsonUtil
{
    public static function jsonString2SimpleObj($json, $className){
        $obj = json_decode($json);
        $ret = new $className();
        foreach ($obj as $key=>$value){
            $ret->$key = $value;
        }
        return $ret;
    }
}