<!DOCTYPE html>
<?php require "test1-2.php";?>
<html>
	<head>
		<title>learn php</title>
		<meta charset="utf-8">
		<style type="text/css">
			body
			{
				margin:50px;
			}
			.error
			{
				color:red;
			}
		</style>
	</head>
	<body>

	<h1>My first PHP page</h1>
	<h2>yubolun</h2>
	
	<!--
	<form method="post" action="<?php //echo $_SERVER['PHP_SELF'];?>">
		name:<input type="text" name="fname">
		<input type="submit" value="submit">
	</form>
	
	<a href="test1.php?subject=PHP&web=runoob.com">Test $GET</a>
	-->
	<!--
	<h2>PHP 表单验证实例</h2>
	<form method="post" action="<?php //echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
		名字：<input type="text" name="name">
		<span class="error">* <?php //echo $nameErr;?></span>
		<br><br>
		E-mail：<input type="text" name="email">
		<span class="error">* <?php //echo $emailErr;?></span>
		<br><br>
		网址：<input type="text" name="website">
		<span class="error">* <?php //echo $websiteErr;?></span>
		<br><br>
		备注：<textarea name="comment" rows="5" cols="40"></textarea><br><br>
		性别：
		<input type="radio" name="gender" value="female">女
		<input type="radio" name="gender" value="male">男
		<span class="error">* <?php //echo $genderErr;?></span>
		<br><br>
		<input type="submit" name="submit" value="submit">
	</form>
	-->
	<?php 
	require 'test1-1.php';
	//echo "<br>"."I have a $color $car.";
	?>

	</body>
</html>
