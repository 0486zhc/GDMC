<?php
 //$fromUsername = $postObj->FromUserName; $toUsername = $postObj->ToUserName; $keyword = trim($postObj->Content); $time = time(); $event=$postObj->Event;
        
	function transmitText($postObj,$content)
    {
        $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[text]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							</xml>";
        
        $result = sprintf($textTpl, $postObj->FromUserName, $postObj->ToUserName,time(), $content);
        echo $result;
    }

	function transmitImage($postObj,$mediaId)
    {
        $imageTpl ="<xml>
                        <ToUserName><![CDATA[%s]]></ToUserName>
                        <FromUserName><![CDATA[%s]]></FromUserName>
                        <CreateTime>%s</CreateTime>
                        <MsgType><![CDATA[image]]></MsgType>
                        <Image>
                        <MediaId><![CDATA[%s]]></MediaId>
                        </Image>
                        </xml>";
        $result = sprintf($musicTpl, $postObj->FromUserName, $postObj->ToUserName,time(),$mediaId);
        echo $result;
    }

	function transmitVoice()
    {
    }

	function transmitVideo()
    {
    }

	function transmitNews()
    {
    }

	function transmitMusic($postObj,$title,$url)
    {
         $musicTpl = "<xml>
                            <ToUserName><![CDATA[%s]]></ToUserName>
                            <FromUserName><![CDATA[%s]]></FromUserName>
                            <CreateTime>%s</CreateTime>
                            <MsgType><![CDATA[music]]></MsgType>
                            <Music>
                            <Title><![CDATA[%s]]></Title>
                            <Description><![CDATA[音你而乐]]></Description>
                            <MusicUrl><![CDATA[%s]]></MusicUrl>
                            <HQMusicUrl><![CDATA[%s]]></HQMusicUrl>
                            </Music>
                            </xml>";
        $result = sprintf($musicTpl, $postObj->FromUserName, $postObj->ToUserName,time(),$title,$url,$url);
        echo $result;
    }
	
	function transmitOnePic($postObj,$item){
		$picTpl= " <xml>
					   <ToUserName><![CDATA[%s]]></ToUserName>
					   <FromUserName><![CDATA[%s]]></FromUserName>
					   <CreateTime>%s</CreateTime>
					   <MsgType><![CDATA[news]]></MsgType>
					   <ArticleCount>1</ArticleCount>
					   <Articles>
					   <item>
						   <Title><![CDATA[%s]]></Title> 
						   <Description><![CDATA[%s]]></Description>
						   <PicUrl><![CDATA[%s]]></PicUrl>
						   <Url><![CDATA[%s]]></Url>
					   </item>
					   </Articles>
					   <FuncFlag>0</FuncFlag>
				   </xml> "; 
		$resultStr = sprintf($picTpl, $postObj->FromUserName, $postObj->ToUserName,time(),$item['title'],$item['description'],$item['picurl'],$item['url']);
		echo $resultStr;
	}
	
	function transmitPic($postObj,$contentArray){
		$count = count($contentArray);
		$head ="  <xml>
                         <ToUserName><![CDATA[%s]]></ToUserName>
                         <FromUserName><![CDATA[%s]]></FromUserName>
                         <CreateTime>%s</CreateTime>
                         <MsgType><![CDATA[news]]></MsgType>
                         <ArticleCount>".$count."</ArticleCount>
                         <Articles>";
		for($i = 1 ; $i<= $count ; $i++){
			$itemNum = "<item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
						</item>";
		}
		$foot = "		</Articles>
                   </xml>";
		$picNum = $head.$itemNum.$foot;
        
		$str = "";
		for($i = 1 ; $i<=$count; $i++){
			$str .= $contentArray[i]['title'].",".$contentArray[i]['picurl'].",".$contentArray[i]['url'].",";
			if( $i == $count){
				$str = substr($str,0,-1);
			}
		}
		$result= sprintf($picNum,$postObj->FromUserName,$postObj->ToUserName,time(),$str);
		echo $result;

	}
	

	
	
	
	
	
?>