<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>訂單</title>
  
</head>
<body>
<style>
    
</style>
<script type="text/javascript">
</script>
<div>
<form action="index.php" Method="post">


付款方式
<div><input type="radio" name="payType" value="1" />點數</div>
<div><input type="radio" name="payType" value="2" />IOS</div>
<div>
<input type="submit" vaule="提交" />
<input type="hidden" name="module" value="Pay" />
<input type="hidden" name="action" value="pay" />
</div>
</form>
</div>
</body>
</html>

