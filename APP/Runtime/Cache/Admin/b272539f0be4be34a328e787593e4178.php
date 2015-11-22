<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php if(is_array($list)): foreach($list as $key=>$v): ?>角色名称：<?php echo ($v["name"]); ?><br />
角色描述：<?php echo ($v["remark"]); ?><br />
开启状态：<?php if($v['status'] == 1): ?>开启&nbsp;&nbsp;<?php else: ?>关闭&nbsp;&nbsp;<?php endif; ?><br />
<a href="<?php echo U(GROUP_NAME.'/Rbac/access',array('rid'=>$v['id']));?>">配置权限</a><br /><br /><?php endforeach; endif; ?>
</body>
</html>