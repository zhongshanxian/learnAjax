$(document).ready(function(){
	
	//使用外部文本
	$("#button3").click(function(){
		$("#div2").load("javascript/demo_test.txt",function(responseTxt,statusTxt,xhr){
			if(statusTxt=="success"){
				alert("加载成功");
			}
			if(statusTxt=="error"){
				alert("加载失败："+xhr.status+":"+xhr.statusText);
			}
		});
	});
	

	//实例
	function loadXMLDoc(){
		//为了应对所有的现代浏览器，包括 IE5 和 IE6，请检查浏览器是否支持 XMLHttpRequest 对象
		var xmlhttp;
		if(window.XMLHttpRequest)
		{
			//  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
			xmlhttp=new XMLHttpRequest();
		}
		else
		{
			// IE6, IE5 浏览器执行代码
			xmlhttp=new ActiveXobject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			//使用 async=true 时，请规定在响应处于 onreadystatechange 事件中的就绪状态时执行的函数
			if(xmlhttp.readyState==4 && xmlhttp.status==0)// && xmlhttp.status==200
				//4: 请求已完成，且响应已就绪.200: "OK"
			{
				document.getElementById("myDIV").innerHTML=xmlhttp.responseText;//获得字符串形式的响应数据。
				console.log("xmlhttp.readyState==4&&xmlhttp.states==200 OK");
			}
			console.log("onreadystatechange"+" "+xmlhttp.readyState+" "+xmlhttp);
		}
		//get
		xmlhttp.open("POST","http://localhost/demo_test.php",true);
		//xmlhttp.open("GET","/try/ajax/demo_get2.php?fname=Henry&lname=Ford",true);

		//post
		//xmlhttp.open("POST","/try/ajax/demo_post2.php",true);
    //xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    //xmlhttp.send("fname=Henry&lname=Ford");
		xmlhttp.send();
	}
	
	
	$("#button1").click(function(){
		loadXMLDoc();
	});
	
});