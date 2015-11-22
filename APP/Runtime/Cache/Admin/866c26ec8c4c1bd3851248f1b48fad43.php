<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Documenttt</title>
</head>
<body>
<table>

	<tr>
		<th colspan="2"><a href="<?php echo U(GROUP_NAME.'/Rbac/addNode');?>">添加应用</a></th>
	</tr>
		<?php if(is_array($node)): foreach($node as $key=>$app): ?><tr>
			<td><?php echo ($app["title"]); ?></td>
			<td><a href="<?php echo U(GROUP_NAME.'/rbac/addNode',array('pid'=>$app['id'],'level'=>2));?>">[添加控制器]</a>[<a href="">修改</a>][<a href="">删除</a>]</td>
		</tr>


			<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><tr>
					<td colspan="2">==<?php echo ($action["title"]); ?><a href="<?php echo U(GROUP_NAME.'/Rbac/addNode',array('pid'=>$action['id'],'level'=>3));?>">[添加方法]</a>[<a href="">修改</a>][<a href="">删除</a>]</td>
				</tr>
				<tr>
					<td></td>
				</tr>
			
			
				<?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><tr>
						<td colspan="2">====<?php echo ($method["title"]); ?>[<a href="">修改</a>][<a href="">删除</a>]</td>
					</tr>
					<tr>
						<td></td>
					</tr><?php endforeach; endif; endforeach; endif; endforeach; endif; ?>

</table>

<!--  id:<br />
 名称：<?php echo ($v["name"]); ?><br />
 描述：<?php echo ($v["title"]); ?><br />
 状态：<?php if($v['status'] == 1): ?>开启
 		<?php else: ?>关闭<?php endif; ?><br />
<br /><br /> -->

	
</body>
</html>