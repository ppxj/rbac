<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<td>用户名：</td>
			<td><input type="text" name="name"></td>

		</tr>
		<tr>
			<td>密码：</td>
			<td><input type="text" name=""></td>

		</tr>
		<tr>
			<td>确认密码：</td>
			<td><input type="text" name=""></td>
		</tr>
		<tr>
			<td>角色：</td>
			<td>
				<select name="role_id[]" id="">
				
					<option value="">请选择角色组</option>
					<?php if(is_array($role)): foreach($role as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
				</select>
			</td>
		</tr>
	</table>
</body>
</html>