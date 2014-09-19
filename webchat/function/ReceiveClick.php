<?php
//header("Content-Type: text/html; charset=utf-8");
	function receiveClick($postObj)
    {
        $EventKey = $postObj->EventKey;
             
        switch($EventKey){
            case "1" :  //菜单中key相关值 
                $keyword='1';
				break;
            case "2":
				$keyword='2'; 
			    break;
            case "3":
                $keyword='3';           
				break;
            case "4":
                $keyword='4';           
				break;
            case "5":
                $keyword='5';           
				break;
            case "6":
                $keyword='6';           
				break;
            case "7":
                $keyword='7';           
				break;
            case "lsk":
                $keyword='lsk'; ;
				break;
            case "zjc":
                $keyword='zjc'; ;     
				break;
        }
		$postObj->Content = $keyword;
		receiveText($postObj);
		//return $keyword;
    }
?>