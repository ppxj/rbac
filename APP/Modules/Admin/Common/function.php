<?php 
/**
 * 递归重组节点信息为多维数组
 */
	function node_merge($node,$access=null,$pid=0){
		 // p($node);
		$arr=array();

		foreach($node as $v){
			if(is_array($access)){
				// echo "mark";
			// p($access);
					// p($v);
					$v['access']=in_array($v['id'],$access)?1:0;
					// p($v['access']);
				
				
			}
			// p($v);
			// die();
			if($v['pid']==$pid){
				// p($v);
				// die();
				$v['child']=node_merge($node,$access,$v['id']);
				// p($v['child']);
				$arr[]=$v;
				// p($arr[]);
			}
			// p($v);

		}
		return $arr;
	}
 ?>