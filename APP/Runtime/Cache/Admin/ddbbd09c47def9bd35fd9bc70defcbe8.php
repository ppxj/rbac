<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table>
	<form method="post" action="<?php echo U(GROUP_NAME.'/Rbac/addNodeHandle');?>">
	<tr>
		<th colspan="2">添加节点</th>
	</tr>
	<tr>
		<td><?php echo ($type); ?>名称：</td>
		<td><input type="text" name="name"></td>
	</tr>	
	<tr>
		<td><?php echo ($type); ?>描述</td>
		<td><input type="text" name="title"></td>
	</tr>
	<tr>
		<td>是否开启</td>
		<td><input type="radio" value="1" checked="checked" name="status">开启
		<input type="radio" value="0" name="status">关闭</td>

	</tr>
	<tr>
		<td>排序</td>
		<td><input type="text" name="sort"  value="1"></td>
	</tr>
		<input type="hidden" name="pid" value="<?php echo ($pid); ?>">
		<input type="hidden" name="level" value="<?php echo ($level); ?>">
	<tr>
		<td colspan="2">
			<input type="submit" value="保存添加">
		</td>
	</tr>
	</form>
</table>
	
</body>
</html>