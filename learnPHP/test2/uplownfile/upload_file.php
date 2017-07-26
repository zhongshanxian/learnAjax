<meta charset="utf-8">
<?php
//允许上传额图片后缀
$allowebExts=array("gif","jpeg","jpg","png");
$temp=explode(".",$_FILES['file']['name']);
echo $_FILES['file']['size'];
$extension=end($temp);//获取文件后缀名
if((($_FILES['file']['type']=="image/gif")
	||($_FILES['file']['type']=="image/jpeg")
	||($_FILES['file']['type']=="image/jpg")
	||($_FILES['file']['type']=="image/png")
	||($_FILES['file']['type']=="image/pjpeg")
	||($_FILES['file']['type']=="image/x-png"))
	&&($_FILES['file']['size']<204800)
	&& in_array($extension,$allowebExts))
	{
		if($_FILES['file']['error']>0)
		{
			echo "报错：".$_FILES['file']['error']."<br>";
		}
		else
		{
			echo "上传文件名：".$_FILES['file']['name']."<br>";
			echo "文件类型：".$_FILES['file']['type']."<br>";
			echo "上传文件名：".$_FILES['file']['size']."<br>";
			echo "文件临时存储的位置：".$_FILES['file']['tmp_name']."<br>";

			//判断当前目录下的upload目录是否存在该文件
			//如果没有upload目录，需要创建，upload目录权限为777
			if(file_exists('upload/'.$_FILES['file']['name']))
			{
				echo $_FILES['file']['name']." 文件已经存在。";
			}
			else
			{
				//如果upload目录不存在该文件则将文件上传到upload目录下
				move_uploaded_file($_FILES['file']['tmp_name'], "upload/".$_FILES['file']['name']);
				echo "文件存储在；"."upload/".$_FILES['file']['name'];
			}
		}
	}
	else
	{
		echo "非法的文件格式";
	}

?>