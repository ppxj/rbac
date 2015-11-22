<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<table>
	<form action="<?php echo U(GROUP_NAME.'/Rbac/addRoleHandle');?>" method="post">
		<th>
			<th colspan="2" align="center">添加角色</td>
		</th>
		<tr>
			<td>角色名称</td>
			<td><input type="text" name="name" /></td>
		</tr>
		<tr>
			<td>角色描述</td>
			<td><input type="text" name="remark"></td>
		</tr>
		<tr>
			<td>是否开启:</td>
			<td><input type="radio" name="status" value="1" checked="checked">开启
				<input type="radio" name="status" value="0">关闭
			</td>

		</tr>
		<tr>
			<td colspan="2" align="right"> <input type="submit" value="提交"></td>
		</tr>
	</form>
	</table>
	<?php if(is_array($list)): foreach($list as $key=>$v): echo ($v["name"]); ?>
	<?php echo ($v["remark"]); ?>
	<?php echo ($v["status"]); endforeach; endif; ?>

</body>
</html>