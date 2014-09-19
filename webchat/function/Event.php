<?php

function receiveEvent($postObj)
{
    $event = $postObj->Event;
    switch($event)
    {
        case "subscribe":
            $contentStr = "欢迎关注！";
            break;
        case "unsubscribe":
            $contentStr = "期待您的再次关注！";
            break;
        case "CLICK":
            //$contentStr = "尚未支持 自定义菜单点击事件！";
			$contentStr = receiveClick($postObj);
            break;
        default:
       		$contentStr = "未知事件类型！";
    }
    $resultStr = transmitText($postObj,$contentStr);
    return $resultStr;
}

?>