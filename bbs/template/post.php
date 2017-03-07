<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>留言</title>
  
</head>
<body>
<style>
    
</style>
<script type="text/javascript">
</script>
<div>

<?php 
$db = Db::getInstance();

$sql = "select * from `comment`";
$res = $db->select($sql);
var_dump($res);

foreach($res as $val){
	$posttime = strtotime($val['posttime']);
	$diff = time()-$posttime;
	if($diff < 3600){
		$result = floor($diff/60)."分鐘前";
	}elseif($diff < 24*3600){
		$result = floor($diff/3600)."小時前";
	}else{
		$result = floor($diff/(60*24))."天前";
	}
	$val['posttime'] = $result;
	echo "<div>".$val['content']." 時間：".$val['posttime']."</div>";
}

?>
</div>
<div>
<?php 
$user_id = 3;
$db = Db::getInstance();
$sql = "select * from `user` where user_id = '{$user_id}' and is_black = 1";
$res = $db->select($sql);
$isBlack = 0;
if($res){
	$isBlack = 1;
}
?>
<?php if(!$isBlack){?>
<form action="index.php" Method="post">

留言

<div>
<textarea rows="5" cols="10" name="content"></textarea>
</div>
<div>
<input type="submit" vaule="提交" />
<input type="hidden" name="module" value="Comment" />
<input type="hidden" name="action" value="doPost" />
</div>
</form>
<?php }?>
</div>
</body>
</html>

