<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Documenttt</title>
	<script type="text/javascript" src="../Public/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript">
		$(function(){
		$('input[level=1]').click(function(){
			var inputs=$(this).parents('.app').find('input');
			$(this).attr('checked')?inputs.attr('checked','checked');
				inputs.removeAttr('checked');
		})

	});

	</script>
</head>
<body>
<table>

<a href="<?php echo U(GROUP_NAME.'/Rbac/role');?>">返回</a>

	<tr>
		<th colspan="2"></th>
	</tr>
		<form action="<?php echo U(GROUP_NAME.'/Rbac/setAccess');?>" method="post">
		<?php if(is_array($node)): foreach($node as $key=>$app): ?><tr bgcolor="red">

			<td><?php echo ($app["title"]); ?></td>
			<td><input type="checkbox" name="access[]" value="<?php echo ($app["id"]); ?>_1" level="1" <?php if($app['access']): ?>checked='checked'<?php endif; ?>   /></td>
		</tr>

			<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><tr bgcolor="green">
					<td colspan="2">==<?php echo ($action["title"]); ?></a></td>
				
					<td><input type="checkbox" name="access[]" value="<?php echo ($action["id"]); ?>_2" level="2" <?php if($action['access']): ?>checked='checked'<?php endif; ?>></td>
				</tr>
			
				<?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><tr>
						<td colspan="2">====<?php echo ($method["title"]); ?></td>
			
						<td><input type="checkbox" name="access[]"  value="<?php echo ($method["id"]); ?>_3" level="3" <?php if($method['access']): ?>checked='checked'<?php endif; ?>></td>
					</tr><?php endforeach; endif; endforeach; endif; endforeach; endif; ?>
				<tr>
					<input type="hidden" value="<?php echo ($rid); ?>" name="rid">
					<td colspan="2"><input type="submit" value="保存添加"></td>
				</tr>

			
	</form>

</table>

<!--  id:<br />
 名称：<?php echo ($v["name"]); ?><br />
 描述：<?php echo ($v["title"]); ?><br />
 状态：<?php if($v['status'] == 1): ?>开启
 		<?php else: ?>关闭<?php endif; ?><br />
<br /><br /> -->



</body>
</html>