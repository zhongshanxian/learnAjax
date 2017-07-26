$(document).ready(function(){
	var flag=0;

	//定义函数
	function appendText(){
		var txt1="<p>使用 HTML 标签创建文本</p>";
		var txt2=$("<p></p>").text("使用 jQuery 创建文本");
		var txt3=document.createElement("p");
		txt3.innerHTML="使用 DOM 创建文本 text with DOM";
		$("body").before(txt1,txt2,txt3);
	}

	//JSONP的函数
	$.getJSON("javascript/demo_test.php?jsoncallback=?", function(data) {
    
    var html = '<ul>';
    for(var i = 0; i < data.length; i++)
    {
        html += '<li>' + data[i] + '</li>';
    }
    html += '</ul>';
    
    $('#divCustomers').html(html); 
});

	//按钮1选择器
	$("#button1").click(function(){ 
		/*
		$("#div1").animate({
			left:'+=250px',//相对值
			opacity:'0.5',
			//height:'toggle'//反向伸缩
		},3000);
			//队列，先完成上面党的部分，接着开始下面的部分
			$("#div1").animate({
				height:'+=250px',//相对值
				opacity:'1',
		},3000);

		$("#input1").val("women");
		$("#test1").prepend("开头");
		$("#test1").append("结尾");
		$("#test2").html("<b>world</b>");
		$("#runoob").attr({
			"title":"jquery"
		});
		console.log($("#runoob").attr("title"));

		$("#div1").addClass("blue");
		$("#div1").toggleClass("red");
		console.log($("#div1").css("background-color"));
		
		console.log($("#div1").innerHeight());
		
		$("li").parentsUntil("div").css("backgroundColor","green");
		
		$("ul").siblings().css("color","red");
		
		$.get("javascript/demo_test.php",function(data,status){
			alert("数据："+data+"\n状态："+status);
		});

		$.post("javascript/demo_test.php",
		{
			name:"菜鸟教程",
			url:"http://www.runoob.com"
		},
		function(data,status){
			alert("数据："+data+"\n状态："+status);
		});
		*/
	});

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
	

	//按钮2选择器
	$("#button2").click(function(){
		/*
		$("#div1").stop().css({"backgroundColor":"green","font-size":"50px"});//只是停止当前的运动，接下来的运动2继续执行
		$("#div1").removeClass("red");
		*/
	});

	//段落选择器
	$("p").hover(function(){
		console.log("鼠标在字体上 ");
		},
		function(){
			console.log("鼠标离开字体 ");
		}
	);

	//输入框选择器
	$("input").focus(function(){
		$(this).css("backgroundColor","#88ffff");
	});
	$("input").blur(function(){
		$(this).css("backgroundColor","#ff0000");
	});


});//$(document).ready(function(){
