<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<th>用户列表</th>
		</tr>
		<tr>
			<td><a href="<?php echo U(GROUP_NAME.'/Rbac/addUser');?>">添加用户</a></td>
		</tr>
		<tr>
			<td><a href="<?php echo U(GROUP_NAME.'/Rbac/role');?>">角色列表</a></td>
		</tr>
		<tr>
			<td><a href="<?php echo U(GROUP_NAME.'/Rbac/addRole');?>">添加角色</a></td>
		</tr>
		<tr>
			<td>添加用户</td>
		</tr>
		<tr>
			<td><a href="<?php echo U(GROUP_NAME.'/Rbac/node');?>">节点列表</a></td>
		</tr>
		<tr>
			<td><a href="<?php echo U(GROUP_NAME.'/Rbac/addNode');?>">添加节点</a></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>


	</table>
</body>
</html>