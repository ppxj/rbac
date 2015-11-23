<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
	<form action="<?php echo U(GROUP_NAME.'/Rbac/addUserHandle');?>" method="post">
		<tr>

			<td>用户名：</td>
			<td><input type="text" name="username"></td>

		</tr>
		<tr>
			<td>密码：</td>
			<td><input type="text" name="password"></td>

		</tr>

		<tr>
			<td>角色：</td>
			<td>
			
				
			
					<?php if(is_array($role)): foreach($role as $key=>$v): echo ($v["name"]); ?><input type="checkbox" name="role_id[]"  value="<?php echo ($v["id"]); ?>" ><?php endforeach; endif; ?>
			
			</td>
		</tr>
		<tr>
			<td colspan="2" textalign="center"><input type="submit" value="保存添加"></td>
		</tr>
		</form>
	</table>
</body>
</html>