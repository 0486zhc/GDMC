<?php

include 'function/ReceiveText.php';
include 'function/Event.php';
include 'function/Template.php';
include 'function/ReceiveClick.php';
include 'function/Content.php';
include '../config/config.php';
define("TOKEN", "gdmc12580");
$wechatObj = new wechatCallbackapiTest();
//$wechatObj->valid();
$wechatObj->responseMsg();

class wechatCallbackapiTest
{
    public function responseMsg()
    {
		$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];	//get post data, May be due to the different environments
		
        if (!empty($postStr))	//extract post data
        {    
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $msgType=trim($postObj->MsgType);
          
            switch($msgType)
            {
                case "text"://文本消息
               	 	$resultStr = receiveText($postObj);
                    break;
                case "image"://图片消息
               		$resultStr = receiveImg($postObj);
                    break;
                case "location";//地理位置消息
                	$resultStr = receiveLocation($postObj);//$resultStr="你的纬度是{$latitude},经度是{$longitude}!";
                    break;
                case "link"://链接消息
                	$resultStr = receiveLink($postObj);
                    break;
                case "event"://事件推送
                	$resultStr =receiveEvent($postObj);
                	break;
                default:
                	$resultStr ="未知信息类型！";
            }
            //echo $resultStr;
        }
        else 
        {
        	echo "";
        	exit;
        }
    } 
    
    /*public function valid()
    {
        $echoStr = $_GET["echostr"];

        //valid signature , option
        if($this->checkSignature()){
        	echo $echoStr;
        	exit;
        }
    }
    private function checkSignature()
	{
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];	
        		
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
		sort($tmpArr, SORT_STRING);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}*/
}

?>