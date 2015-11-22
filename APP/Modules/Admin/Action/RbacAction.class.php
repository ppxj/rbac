<?php 
	Class RbacAction extends CommonAction{


		//用户列表
		PUblic function index(){
			echo 111;
		}
		//角色列表
		PUblic function role(){
			$this->list=$list=M('role')->select();
			$this->display();
			
		}
		//节点列表
		PUblic function node(){
			$field=array('id','name','title','pid');
			$node=M('node')->field($field)->order('sort')->select();
			$this->node=node_merge($node);
			p($this->node);

			$this->display();
			// $node=node_merge($node);
			// p($node);
			// die();
			// p($arr);
		
		}
		//添加用户
		PUblic function addUser(){
			$this->role=M('role')->select();
			$this->display();
		}
		//添加角色
		PUblic function addRole(){
			

			$this->display();
		}
		//添加角色处理
	    Public function addRoleHandle(){
	    	// p($_POST);
	    	// $data['name']=$_POST['name'];
	    	// $data['remark']=$_POST['remark'];
	    	// $data['status']=$_POST['status'];
		if(M('role')->add($_POST)){
				$this->success('添加成功', U(GROUP_NAME.'/Rbac/role'));
			}else{
				$this->error('添加失败');
				
			}
			
	    }
		//添加节点
		PUblic function addNode(){
			// $this->pid=isset($_GET['pid'])?$_GET['pid']:0;
			$this->pid=I('pid',0,'intval');
			$this->level=I('level',1,'intval');
			switch ($this->level) {
				case 1:
					$this->type='应用';
					# code...
					break;
				case 2:
					$this->type="控制器";
					break;
				case 3:
					$this->type="动作方法";
					break;
			
			}
			p($_GET);
			$this->display();
		}
		//添加节点表单处理
		Public function addNodeHandle(){
			// p($_POST);
			if(M('node')->add($_POST)){
				$this->success('插入节点成功',U(GROUP_NAME.'/Rbac/node'));
			}else{
				$this->error('插入失败');
			}
			
		}

		//配置权限的方法
		Public function access(){
			$rid=I('rid',0,'intval');
			$field=array('id','name','title','pid');
	
			$node=M('node')->order('sort')->field($field)->select();
		
			// p($node);
			// p($_GET);
			//读取原有权限
			$access=M('access')->where(array('role_id'=>$rid))->getField('node_id',true);
			// p($access);

			$node=node_merge($node,$access);

			// p($node);
			$this->node=$node;
			$this->rid=$rid;
			$this->display();
		}

		//修改权限
		Public function setAccess(){
			// p($_POST['access']);
			$db=M('access');
			
			p($_POST);
			$rid=I('rid',0,'intval');
			//清空原权限
			$db->where(array('role_id'=>$rid))->delete();
			//插入新权限
			$data=array();
			foreach($_POST['access'] as $v){

				$tmp=explode('_',$v);
				p($tmp);
				$data[]=array(
					'role_id'=>$rid,
					'node_id'=>$tmp[0],
					'level'=>$tmp[1],

					);
			}
			if($db->addAll($data)){
				$this->success('修改权限成功',U(GROUP_NAME.'/Rbac/role'));
			 // p($_POST);
			}else{
				$this->erro('修改失败，请重新修改');
			}
			p($data);
		}

}
 ?>

