<?php
//header("Content-Type: text/html; charset=utf-8");
	function receiveText($postObj)
    {
        $keyword = trim( $postObj->Content );
		
        $fromUsername = $postObj->FromUserName;
        //$mem = memcache_init();
        if(!empty( $keyword) )
        {
			$length = strlen($keyword);
			$str = explode("@",$keyword);
			$firstStr =$str['0'];
            $secondStr =$str['1'];
			$search ="/查询$/" ;    //以“查询”开始的字符串
			if ( $length == 1 ){
					switch ($keyword){
						case "1":
							school($postObj);
							//$contentStr = "你好！本平台正在维护中！更新功能，敬请期待！";
							break;
						case "2":
							recruitment($postObj);
							break;	
						case "3":
							$contentStr = "\t\t【录取查询】\n\t亲，欢迎报考广东医学院，目前录取结果已出来，共计招生录取4067名，喜大普奔！\n\n查询格式：考生号@姓名\n如：0123456789@李四";
							transmitText($postObj,$contentStr);
							break;		
						case "4":
							$contentStr = "\t\t【考试课室查询】\n湛江校区，回复 【学习】\n东莞校区，回复【我要学习】";
							transmitText($postObj,$contentStr);
							break;
						case "5":
							$contentStr = "\t\t【四六级查询】\n亲，还没知道你四六级考得怎么样吗，快来查一下成绩吧 \n格式：准考证号+姓名+查询 如：440431131214205肖**查询";
							transmitText($postObj,$contentStr);
							break;		
						case "6":
							CheckResult($postObj);
							break;
						case "7":
							checkBus($postObj);
							break;
						default:
							$contentStr ="你好！本平台正在维护中！";
							transmitText($postObj,$contentStr);
							break;																
					}
			}else{
				if( $keyword=='我要学习' || $keyword == '学习'){
					$contentStr ="每逢考试月开通，祝大家学习愉快！";
					transmitText($postObj,$contentStr);
				}else if(  strstr($keyword,"@") ){
					checkCollegeAcception($postObj,$firstStr,$secondStr);
				}else if( preg_match($search,$keyword) ){
					checkEnglish($postObj,$keyword);
				}else{
					$contentStr ="你好！本平台正在维护中！";
					transmitText($postObj,$contentStr);
				}
				
                        
            } // end if
        }else
        {
            $resultStr = "Input something...";
        }
        
        //$resultStr = transmitText($postObj,$contentStr);
        //return $resultStr;
    }
?>