<?php
	
	// 学校简介
	function school($postObj){
	  $picTp10 ="  <xml>
                         <ToUserName><![CDATA[%s]]></ToUserName>
                         <FromUserName><![CDATA[%s]]></FromUserName>
                         <CreateTime>%s</CreateTime>
                         <MsgType><![CDATA[news]]></MsgType>
                         <ArticleCount>10</ArticleCount>
                         <Articles>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         </Articles>
                         </xml>  ";
		$game = array 
                           (
							 1=>array
                           		(
                                     'title'=>' 广东医学院简介',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/1111.jpg',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200435055&idx=1&sn=aec8dfd74c89b08e61cd195c25e7c974#rd'
                                ),
                            2=>array
									(
                                        'title'=>'广东医学院招生章程与考生问答',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/22222222222.png',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200435041&idx=1&sn=9a7b1cb064daf1ca17cad75a80a55e76#rd'
                                    ),
                            3=>array
									(
                                        'title'=>'2014年广东医学院招生计划及联系方式',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/333333333333333.png',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200435177&idx=1&sn=f9174de98f6bd5c94fbf95f1b460e62f#rd'
                                    ),
                            4=>array
						 	 		(
                                        'title'=>'广东医学院第一临床医学院、第二临床医学院招生简介',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/444444444444444444.png',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200435107&idx=1&sn=039c07907d6ed112893183350f929126#rd'
                                    ),
                            5=>array
									(
                                        'title'=>'广东医学院基础医学院、护理学院招生简介',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/555555555555555555.png',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200435121&idx=1&sn=ae3b7e041616ee32379da327dfa5a604#rd'
                                    ),
                            
                            6=>array
									(
                                        'title'=>'广东医学院医学检验学院招生简介',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/6666666666666666666.png',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200435134&idx=1&sn=b49fb18c8973b5554d65e4ed349e5380#rd'
                                    ),
                            7=>array
									(
                                        'title'=>'广东医学院公共卫生学院招生简介',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/7777777777777777777777.png',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200435141&idx=1&sn=65fe934d87e599622d555ba9da45d1bd#rd'
                                    ),
                            8=>array
									(
                                        'title'=>'广东医学院药学院招生简介',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/8888888888888888888.png',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200435152&idx=1&sn=efea39bb2b7e589fc8c5f711e20fb434#rd'
                                     ), 
                            
                            9=>array
									(
                                        'title'=>'广东医学院人文与管理学院、信息工程学院招生简介',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/9999999999999999999999.png',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200435126&idx=1&sn=c82d607d3d2706c9820d2e1bfc8510e5#rd'
                                    ),
                            10=>array 
									(
                                        'title'=>'印象广东医',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/00000000000000000.png',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MzA4MjE0NTYxNA==&mid=200812479&idx=1&sn=6f4c786024eb94eca5e40e049292b938#rd'
                                    ),
                       		); 
                       $resultStr = sprintf( $picTp10,$postObj->FromUserName, $postObj->ToUserName,time(),
                                            $game[1]['title'],$game[1]['picurl'],$game[1]['url'],
                                            $game[2]['title'],$game[2]['picurl'],$game[2]['url'],
                                            $game[3]['title'],$game[3]['picurl'],$game[3]['url'],
                                            $game[4]['title'],$game[4]['picurl'],$game[4]['url'],
                                            $game[5]['title'],$game[5]['picurl'],$game[5]['url'],
                                            $game[6]['title'],$game[6]['picurl'],$game[6]['url'],
                                            $game[7]['title'],$game[7]['picurl'],$game[7]['url'],
                                            $game[8]['title'],$game[8]['picurl'],$game[8]['url'],
                                            $game[9]['title'],$game[9]['picurl'],$game[9]['url'],
                                            $game[10]['title'],$game[10]['picurl'],$game[10]['url']
                                           );
                       echo $resultStr;
	
	}

	// 招生
    function recruitment($postObj){
		  $picTp10 ="  <xml>
                         <ToUserName><![CDATA[%s]]></ToUserName>
                         <FromUserName><![CDATA[%s]]></FromUserName>
                         <CreateTime>%s</CreateTime>
                         <MsgType><![CDATA[news]]></MsgType>
                         <ArticleCount>10</ArticleCount>
                         <Articles>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         <item>
                             <Title><![CDATA[%s]]></Title> 
                             <Description><![CDATA[description1]]></Description>
                             <PicUrl><![CDATA[%s]]></PicUrl>
                             <Url><![CDATA[%s]]></Url>
                         </item>
                         </Articles>
                         </xml>  ";
		 $game = array 
                           (
							 1=>array
                           		(
                                     'title'=>' 广东医学院简介',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/11111111.jpg',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200435055&idx=1&sn=aec8dfd74c89b08e61cd195c25e7c974#rd'
                                ),
                            2=>array
									(
                                        'title'=>'广东医学院2014年成人高等教育招生简介与考生问答',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/22222222.jpg',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200590060&idx=1&sn=f56a7a045ec8ee3d451199d66a923344#rd'
                                    ),
                            3=>array
									(
                                        'title'=>'广东医学院2014年成人高等教育招生专业一览表及招生宣传工作联系方式',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/33333333.jpg',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200590182&idx=1&sn=db919fdb20ac68fc73648fdf93420f9d#rd'
                                    ),
                            4=>array
						 	 		(
                                        'title'=>'广东医学院成人高等教育教学点：湛江卫生学校、珠海市卫生学校简介',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/44444444.jpg',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200590238&idx=1&sn=4b70ef5746c9874aa60f9fdc8ce5e213#rd'
                                    ),
                            5=>array
									(
                                        'title'=>'广东医学院成人高等教育教学点：茂名卫生学校、肇庆医学高等专科学校简介',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/1333333333333.jpg',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200596325&idx=1&sn=22d1cadfc5097b02c92579bd01c7751d#rd'
                                    ),
                            
                            6=>array
									(
                                        'title'=>'广东医学院成人高等教育教学点：江门中医药学校、东源卫生职业技术学校简介',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/66666666.jpg',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200596532&idx=1&sn=e2cf42100f26f2a1c3b9c0267e0b3a36#rd'
                                    ),
                            7=>array
									(
                                        'title'=>'广东医学院成人高等教育教学点：惠州卫生职业技术学院、新兴中药学校、湛江中医学校简介',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/23333333333333333.jpg',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200596650&idx=1&sn=a92dfb3487c584a82c5f3a66cf872a1f#rd'
                                    ),
                            8=>array
									(
                                        'title'=>'广东医学院成人高等教育教学点：顺德职业技术学院、深圳市福田区福华医药职业培训中心、东莞市岭南培训中心简介',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/88888888.jpg',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200596741&idx=1&sn=8fac7f121c909560592ab46db25f9739#rd'
                                     ), 
                            
                            9=>array
									(
                                        'title'=>'广东医学院成人高等教育教学点：深圳市医学继续教育中心、广东黄埔卫生职业技术学校、深圳宝康卫生培训中心简介',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/3444444444444444.jpg',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MjM5MTc2NTExMQ==&mid=200596888&idx=1&sn=2465166f5fb1193368451b0e5791410c#rd'
                                    ),
                            10=>array 
									(
                                        'title'=>'印象广东医',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/00000000000000000.png',
                                        'url'=>'http://mp.weixin.qq.com/s?__biz=MzA4MjE0NTYxNA==&mid=200812479&idx=1&sn=6f4c786024eb94eca5e40e049292b938#rd'
                                    ),
                       		); 
                       $resultStr = sprintf( $picTp10,$postObj->FromUserName, $postObj->ToUserName,time(),
                                            $game[1]['title'],$game[1]['picurl'],$game[1]['url'],
                                            $game[2]['title'],$game[2]['picurl'],$game[2]['url'],
                                            $game[3]['title'],$game[3]['picurl'],$game[3]['url'],
                                            $game[4]['title'],$game[4]['picurl'],$game[4]['url'],
                                            $game[5]['title'],$game[5]['picurl'],$game[5]['url'],
                                            $game[6]['title'],$game[6]['picurl'],$game[6]['url'],
                                            $game[7]['title'],$game[7]['picurl'],$game[7]['url'],
                                            $game[8]['title'],$game[8]['picurl'],$game[8]['url'],
                                            $game[9]['title'],$game[9]['picurl'],$game[9]['url'],
                                            $game[10]['title'],$game[10]['picurl'],$game[10]['url']
                                           );
                       echo $resultStr;
	
	
	}
	
	function CheckResult($postObj){
		$item= array(						
						'title' => '查成绩？ 我帮您',
						'description' => '点进去后，输入 【用户名】和【密码】登陆 —> 点击【个人信息管理】—>我的教务栏下【申请重修】,即可查看成绩。',
						'picurl' => 'http://1.gdmc12580.sinaapp.com/image/%E6%B1%82%E5%8F%8A%E6%A0%BC.jpg', 
						'url' => 'http://125.90.8.125:8000/portal', 
					);		 		  

		transmitOnePic($postObj,$item);
	}

	function checkBus($postObj){
		$picTp6 ="  <xml>
							 <ToUserName><![CDATA[%s]]></ToUserName>
							 <FromUserName><![CDATA[%s]]></FromUserName>
							 <CreateTime>%s</CreateTime>
							 <MsgType><![CDATA[news]]></MsgType>
							 <ArticleCount>6</ArticleCount>
							 <Articles>
							 <item>
								 <Title><![CDATA[%s]]></Title> 
								 <Description><![CDATA[description1]]></Description>
								 <PicUrl><![CDATA[%s]]></PicUrl>
								 <Url><![CDATA[%s]]></Url>
							 </item>
							 <item>
								 <Title><![CDATA[%s]]></Title> 
								 <Description><![CDATA[description1]]></Description>
								 <PicUrl><![CDATA[%s]]></PicUrl>
								 <Url><![CDATA[%s]]></Url>
							 </item>
							 <item>
								 <Title><![CDATA[%s]]></Title> 
								 <Description><![CDATA[description1]]></Description>
								 <PicUrl><![CDATA[%s]]></PicUrl>
								 <Url><![CDATA[%s]]></Url>
							 </item>
							 <item>
								 <Title><![CDATA[%s]]></Title> 
								 <Description><![CDATA[description1]]></Description>
								 <PicUrl><![CDATA[%s]]></PicUrl>
								 <Url><![CDATA[%s]]></Url>
							 </item>
							 <item>
								 <Title><![CDATA[%s]]></Title> 
								 <Description><![CDATA[description1]]></Description>
								 <PicUrl><![CDATA[%s]]></PicUrl>
								 <Url><![CDATA[%s]]></Url>
							 </item>
							 <item>
								 <Title><![CDATA[%s]]></Title> 
								 <Description><![CDATA[description1]]></Description>
								 <PicUrl><![CDATA[%s]]></PicUrl>
								 <Url><![CDATA[%s]]></Url>
							 </item>
							 </Articles>
							 </xml>  ";
		 $game = array 
                           (
							 1=>array
                           		(
                                    'title'=>'【广医后门22路公交】松山湖东莞中学-文化广场西 06:15--21:00，11分钟/班，全程6元，详情请点击',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/22%E8%B7%AF.jpg',
                                        'url'=>'http://1.gdmc12580.sinaapp.com/%E5%85%AC%E4%BA%A4%E8%B7%AF%E7%BA%BF/22.html'
                                ),
                            2=>array
									(
                                        'title'=>'【86路】长安汽车站-桥头汽车站 06:15--19:30（15-20分钟/班），全程15元，详情请点击',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/86%E8%B7%AF.jpg',
                                        'url'=>'http://1.gdmc12580.sinaapp.com/%E5%85%AC%E4%BA%A4%E8%B7%AF%E7%BA%BF/86.html'
                                    ),
                            3=>array
									(
                                        'title'=>'【327路】凤岗汽车站-广医后门 05:35--18:30（20分钟/班），全程13元，详情请点击',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/327.jpg',
                                        'url'=>'http://1.gdmc12580.sinaapp.com/%E5%85%AC%E4%BA%A4%E8%B7%AF%E7%BA%BF/327%E8%B7%AF.html'
                                    ),
                            4=>array
						 			(
                                        'title'=>'【X1路】格林小城南-松山湖东莞中学 06:30--22:00，6：40-9：00（20分钟/班）9：00-19：20（30分钟/班）19：20-22：00（40分钟/班）全程4元，详情请点击',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/X1.jpg',
                                        'url'=>'http://1.gdmc12580.sinaapp.com/%E5%85%AC%E4%BA%A4%E8%B7%AF%E7%BA%BF/X1.html'
                                    ),
                            5=>array
									(
                                        'title'=>'【松山湖2路】广医后门-松山湖汽车站 07:00--21:30；07：00-9：00（15分钟/班），9：00-21：30（20分钟/班）票价1元，详情请点击',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/%E6%96%B02.jpg',
                                        'url'=>'http://1.gdmc12580.sinaapp.com/%E5%85%AC%E4%BA%A4%E8%B7%AF%E7%BA%BF/2%E8%B7%AF.html'
                                    ),
                              6=>array
									(
                                        'title'=>'【323B路】松山湖汽车客运站-威远炮台 06:00--18:00；（20分钟/班），详情请点击',
                                        'picurl'=>'http://1.gdmc12580.sinaapp.com/image/%E6%9D%BE%E5%B1%B1%E6%B9%962%E8%B7%AF.jpg',
                                        'url'=>'http://1.gdmc12580.sinaapp.com/%E5%85%AC%E4%BA%A4%E8%B7%AF%E7%BA%BF/323B.html'
                                    ),
                           
                       		); 
		   $resultStr = sprintf( $picTp6,$postObj->FromUserName, $postObj->ToUserName,time(),
								$game[1]['title'],$game[1]['picurl'],$game[1]['url'],
								$game[2]['title'],$game[2]['picurl'],$game[2]['url'],
								$game[3]['title'],$game[3]['picurl'],$game[3]['url'],
								$game[4]['title'],$game[4]['picurl'],$game[4]['url'],
								$game[5]['title'],$game[5]['picurl'],$game[5]['url'],
								$game[6]['title'],$game[6]['picurl'],$game[6]['url']
							   );
		   echo $resultStr;
	
	}


	function checkCollegeAcception($postObj,$firstStr,$secondStr){
		if( strlen($firstStr) ==10  &&  (!empty( $secondStr ))  ){
				if(substr($firstStr,0,1) == '0' ){
					$firstStr = substr($firstStr,1,10);
				}										
				$sql ="select * from AdmissionList where stu_id = '$firstStr' and name = '$secondStr' ;";		
				$result = mysql_query($sql) OR die ("<br/>ERROR：".mysql_error()."<br/>产生问题的SQL:".$sql);
				$row = mysql_fetch_array($result,MYSQL_ASSOC);
			   
				if($row){
					$stu_id = $row['stu_id'];
					if(strlen($stu_id) == 9){
						$stu_id = '0'.$stu_id ;                                
					}    
					$contentStr = "考生号：".$stu_id."\n"."姓名：".$row['name']."\n"."性别：".$row['sex']."\n"."总分：".$row['score']."\n"."排位：".$row['rank']."\n"."录取专业：".$row['profession']."\n"."备注：具体请以收到录取通知书为准！";
				}
				else{
					$contentStr= "录取名单暂无此人,请确认考生号和姓名重新输入,具体请以收到录取通知书为准！";	  
				}                
		}
		else{
			 $contentStr= "输入的考生号长度有误，请重新输入！";
		}
		transmitText($postObj,$contentStr);		
	}

	function checkEnglish($postObj,$keyword){
		//调用
		$b = cet($keyword);
		if($b[score]!=0){
			$contentStr=$b[school].$b[name]."你的".$b[cet]."总分是".$b[score];
		}else {
			$contentStr ="出错啦！原因可能如下：\n1、格式输入不正确； \n2、查四六级系统繁忙，请再输一次。" ;	
		}
		transmitText($postObj,$contentStr);	
	}

	 //封装 输入考号姓名，返回数组学校，姓名，考试类别，成绩
     function cet($keyword){ 
		$id=substr($keyword,0,15);
		$name=substr($keyword,15,9);
		$ch = curl_init();
		$url ="http://www.chsi.com.cn/cet/query?zkzh={$id}&xm={$name}";
		curl_setopt ($ch, CURLOPT_REFERER, "http://www.chsi.com.cn "); //模拟来源
        curl_setopt($ch, CURLOPT_URL, $url);//url  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $a = curl_exec($ch);
                    $match="#<td>(.*)</td>#";
        preg_match_all($match,$a,$b);
        $yourname= $b[1][0];
        $school= $b[1][1];
        $cet= $b[1][2];
        $c= $b[1][5];//分数
        $score=strip_tags($c);
        $score=str_replace("&nbsp;","",$score);  
		return array('school'=>$chool,'name'=>$yourname,'cet'=>$cet,'score'=>$score);
	}	







?>