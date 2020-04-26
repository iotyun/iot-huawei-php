<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/11/9
 * Time: 9:15
 */

namespace iotyun\huaweiiot\constant;

//$extend_dir = dirname(dirname(dirname(__FILE__)));
//define('LOG4PHP_DIR', $extend_dir ."/log4php");

class Constant
{
    //Authentication 应用安全接入
    //鉴权
    static $getAuthTokenUri = "/iocm/app/sec/v1.1.0/login";
    //刷新token
    static $refreshAuthTokenUri = "/iocm/app/sec/v1.1.0/refreshToken";

    //BatchProcess 批量处理
    //创建批量任务
    static  $createBatchTaskUri = "/iocm/app/batchtask/v1.1.0/tasks";
    //查询指定批量任务信息
    static $queryOneTaskUri = "/iocm/app/batchtask/v1.1.0/tasks/";
    //查询批量任务的子任务信息
    static $queryTaskDetailsUri = "/iocm/app/batchtask/v1.1.0/taskDetails";

    //DataCollection 数据采集
    //查询单个设备信息
    static $querySingleDeviceInfoUri = "/iocm/app/dm/v1.4.0/devices/";
    //批量查询设备信息
    static $queryBatchDevicesInfoUri = "/iocm/app/dm/v1.4.0/devices";
    //查询设备历史数据
    static $queryDeviceDataHistoryUri = "/iocm/app/data/v1.2.0/deviceDataHistory";
    //查询设备影子历史数据
    static $queryDeviceDesiredHistoryUri = "/iocm/app/shadow/v1.5.0/deviceDesiredHistory";
    //查询设备服务能力
    static $queryDeviceCapabilitiesUri = "/iocm/app/data/v1.1.0/deviceCapabilities";

    //DeviceGroupManagement 设备组管理
    //创建设备组
    static  $createDeviceGroupUri = "/iocm/app/devgroup/v1.3.0/devGroups";
    //删除设备组
    static $deleteDeviceGroupUri = "/iocm/app/devgroup/v1.3.0/devGroups/";
    //修改设备组
    static $modifyDeviceGroupUri = "/iocm/app/devgroup/v1.3.0/devGroups/";
    //查询设备组列表
    static $queryDeviceGroupsUri = "/iocm/app/devgroup/v1.3.0/devGroups";
    //查询指定设备组
    static $querySingleDeviceGroupUri = "/iocm/app/devgroup/v1.3.0/devGroups/";
    //查询指定设备组成员
    static $queryDeviceGroupMembersUri = "/iocm/app/dm/v1.2.0/devices/ids";
    //增加设备组成员
    static $addDevicesToGroupUri = "/iocm/app/dm/v1.1.0/devices/addDevGroupTagToDevices";
    //删除设备组成员
    static $deleteDevicesFromGroupUri = "/iocm/app/dm/v1.1.0/devices/deleteDevGroupTagFromDevices";

    //DeviceManagement 设备管理
    //注册设备（验证码方式）
    static $regDirectDeviceUri = "/iocm/app/reg/v1.1.0/deviceCredentials";
    //注册设备（密码方式）
    static $regDirectDeviceByPasswordUri = "/iocm/app/reg/v2.0.0/deviceCredentials";
    //刷新设备密钥
    static $refreshDeviceKeyUri = "/iocm/app/reg/v1.1.0/deviceCredentials/";
    //修改设备信息
    static $modifyDeviceInfoUri = "/iocm/app/dm/v1.4.0/devices/";
    //删除设备
    static $deleteDirectDeviceUri = "/iocm/app/dm/v1.4.0/devices/";
    //删除子设备

    //查询设备激活状态
    static $queryDeviceStatusUri = "/iocm/app/reg/v1.1.0/deviceCredentials/";
    //修改设备影子
    static $modifyDeviceShadowUri = "/iocm/app/shadow/v1.5.0/devices/";
    //查询设备影子
    static $queryDeviceShadowUri = "/iocm/app/shadow/v1.5.0/devices/";
    //注册LoRa网关

    //注册LoRa节点

    //查询单个LoRa网关信息

    //删除LoRa网关

    //查询单个LoRa节点信息

    //删除LoRa节点
    
    //
    static $queryDeviceRealtimeLocationUri = "/iocm/app/location/v1.1.0/queryDeviceRealtimeLocation";
    
    //DeviceServiceInvocation
    //
    static $invokeDeviceServiceUri = "/iocm/app/signaltrans/v1.1.0/devices/%s/services/%s/sendCommand";

    //DeviceUpgrade
    //查询版本包信息
    static $queryUpgradePackageListUri = "/iodm/northbound/v1.5.0/category";
    //查询指定版本包
    static $queryUpgradePackageUri = "/iodm/northbound/v1.5.0/category/";
    //删除指定版本包
    static $deleteUpgradePackageUri = "/iodm/northbound/v1.5.0/category/";
    //创建软件升级任务
    static $createSoftwareUpgradeTaskUri = "/iodm/northbound/v1.5.0/operations/softwareUpgrade";
    //创建固件升级任务
    static $createFirmwareUpgradeTaskUri = "/iodm/northbound/v1.5.0/operations/firmwareUpgrade";
    //查询指定任务信息
    static $queryUpgradeTaskUri = "/iodm/northbound/v1.5.0/operations/";
    //查询指定任务的子任务详情
    static $queryUpgradeSubTaskUri = "/iodm/northbound/v1.5.0/operations/%s/subOperations";
    //查询任务列表
    static $queryUpgradeTaskListUri = "/iodm/northbound/v1.5.0/operations";
    

    //RuleEngine
    //
    static $createRuleUri = "/iocm/app/rule/v1.2.0/rules";
    //
    static $updateRuleUri = "/iocm/app/rule/v1.2.0/rules";
    //
    static $deleteRuleUri = "/iocm/app/rule/v1.2.0/rules/";
    //
    static $updateRuleStatusUri = "/iocm/app/rule/v1.2.0/rules/%s/status/%s";
    //
    static $queryRulesUri = "/iocm/app/rule/v1.2.0/rules";
    //
    static $updateBatchRuleStatusUri = "/iocm/app/rule/v1.2.0/rules/status";

    //SignalDelivery 命令下发
    //创建设备命令
    static $postDeviceCommandUri = "/iocm/app/cmd/v1.4.0/deviceCommands";
    //查询设备命令
    static $queryDeviceCommandUri = "/iocm/app/cmd/v1.4.0/deviceCommands";
    //修改设备命令
    static $updateDeviceCommandUri = "/iocm/app/cmd/v1.4.0/deviceCommands/";
    //批量创建设备命令 见批量处理
    
    //创建设备命令撤销任务
    static $createDeviceCmdCancelTaskUri = "/iocm/app/cmd/v1.4.0/deviceCommandCancelTasks";
    //查询设备命令撤销任务
    static $queryDeviceCmdCancelTaskUri = "/iocm/app/cmd/v1.4.0/deviceCommandCancelTasks";
    //设备命令下发  MQTT设备

    //SubscriptionManagement 订阅平台业务数据
    //订阅平台业务数据
    static $subDeviceData3Uri = "/iocm/app/sub/v1.2.0/subscriptions";
    //订阅平台管理数据
    static $subDeviceData2Uri = "/iodm/app/sub/v1.1.0/subscribe";
    //查询单个订阅
    static $querySingleSubscriptionUri = "/iocm/app/sub/v1.2.0/subscriptions/";
    //批量查询订阅数据
    static $queryBatchSubscriptionsUri = "/iocm/app/sub/v1.2.0/subscriptions";
    //删除单个订阅
    static $deleteSingleSubscriptionUri = "/iocm/app/sub/v1.2.0/subscriptions/";
    //批量删除订阅
    static $deleteBatchSubscriptionsUri = "/iocm/app/sub/v1.2.0/subscriptions";
}