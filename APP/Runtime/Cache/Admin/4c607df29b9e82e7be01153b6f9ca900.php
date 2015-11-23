<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php if(is_array($user)): foreach($user as $key=>$v): ?>编号：<?php echo ($v["id"]); ?><br />
		用户名字：<?php echo ($v["username"]); ?><br />
		登录时间：<?php echo (date('y-m-d H:i',$v["logintime"])); ?><br />
		登录ip：<?php echo ($v["loginip"]); ?><br />
		锁定状态：<?php if($v['lockdd'] != 0): ?>锁定<?php else: ?>未锁定<?php endif; ?><br />
			角色：
			<?php if($v['username'] == C('RBAC_SUPERADMIN')): ?>超级管理员
			<?php else: ?>
				<?php if(is_array($v["role"])): foreach($v["role"] as $key=>$value): echo ($value["name"]); ?>(<?php echo ($value["remark"]); ?>)<?php endforeach; endif; ?><br /><?php endif; ?>
<br /><br /><?php endforeach; endif; ?>
</body>
</html>