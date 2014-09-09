<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/GDMC/app/db/db.class.php");
    
    // 报修model
class Repair{
	
	public $id = null ;
	public $dept = null ;
	public $submitter = null ;
	public $place = null;
	public $submitTime = null;
	public $reason = null ;
	
	/**
	 * 构造函数
	 */
	public function __construct() {
		$a=func_get_args();  // 数组 array
        $i=func_num_args();  // 参数个数
        
        if(method_exists($this,$f='__construct'.$i)){    //检查类方法是否存在
          call_user_func_array(array($this,$f),$a);     // 返回参数个数对应的函数
      } 
	}
	
	public function __construct4($dept,$submitter,$place,$reason){
		$this->dept=$dept;
		$this->submitter = $submitter;
		$this->place = $place;
		$this->reason = $place;
	}
	
	public function insert(){
		$db = new DB();
		$fields = array("dept","submitter","place","reason");
		$resultid = $db->insertData("repair", $fields, array (
			$this->dept,
			$this->submitter ,
			$this->place ,
			$this->reason,
		));
		return $resultid;
	}
	
	/** 分页函数 */
	public static function getRepairsPage($page,$pageSize){
		$db = new DB();
		@ $data = $db->getObjListBySql("select * from repair limit ".$page.",".$pageSize);
		if(count($data) != 0  ){
			return $data ;
		}else{
			return null;
		}
	}
	
	public static function getRepairsCount(){
		$db = new DB();
		@ $data = $db -> getTotalCount("repair");
		return $data;
	}	
}


?>
