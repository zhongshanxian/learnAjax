var div1=document.getElementById("div1"),k="";
var json1={
	"sites":[{"name":"菜鸟教程","url":["www.runoob1.com","www.runoob2.com","www.runoob3.com"],"slogan":"学的不仅是技术，更是梦想！"},
{"name":"Google","url":["www.google.com"]},
{"name":"淘宝","url":["www.taobao.com"]}]
};
var json2={"name":"菜鸟教程","url":["www.runoob1.com","www.runoob2.com","www.runoob3.com"],"slogan":{
	"slogan1":"学的不仅是技术，更是梦想1！",
	"slogan2":"学的不仅是技术，更是梦想2！",
	"slogan3":"学的不仅是技术，更是梦想3！"}
};
var text3='{"sites":[{"name":"菜鸟教程","url":"www.runoob.com","slogan":"学的不仅是技术，更是梦想！"},'+
					'{"name":"Google","url":"www.google.com"},'+
					'{"name":"淘宝","url":"www.taobao.com"}]'+
					'}';

//把 JSON 文本转换为 JavaScript 对象
var myobj7=eval("("+text3+")");
div1.innerHTML=myobj7.sites[0].name;

/*
//解析函数
var myobj6={ "name":"Runoob", "alexa":function () {return 10000;}, "site":"www.runoob.com"};
myobj6.alexa=myobj6.alexa.toString();
var json6=JSON.stringify(myobj6);
div1.innerHTML=json6;

//JSON.stringify 将 Date 对象转换为字符串
var myobj5={"name":"runoob","initDate":new Date(),"site":"www.runoob.com"};
var json5=JSON.stringify(myobj5);
div1.innerHTML=json5;

//使用 JSON.stringify() 方法将 JavaScript 对象转换为字符串。
var myobj4={"name":"Runoob","alexa":"function(){return 1000;}","site":"www.runoob.com"};
var arr2=["Google","runoob","taobao"];
var json3=JSON.stringify(myobj4);
var json4=JSON.stringify(arr2);
div1.innerHTML=json4;

//将字符串解析为函数,将 JSON 文本转换为 JavaScript 对象
var text2='{"name":"Runoob","alexa":"function(){return 1000;}","site":"www.runoob.com"}';
var myobj3=JSON.parse(text2);
myobj3.alexa=eval("("+myobj3.alexa+")");//将字符串转化为函数
//eval(string):函数可计算某个字符串，并执行其中的的 JavaScript 代码。
div1.innerHTML=myobj3.name+" 排名："+myobj3.alexa();

//将字符串转化成Date对象
var text1='{"name":"Runoob","initDate":"2013-12-14","site":"www.runoob.com"}';
var myobj2=JSON.parse(text1,function(key,value){
	if(key=="initDate")
	{
		return new Date(value);
	}
	else
	{
		return value;
	}
});
//myobj2.initDate=new Date(myobj2.initDate);
div1.innerHTML=myobj2.name+" 创建的日期： "+myobj2.initDate;

//请求数据
var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
	console.log(this.readyState);
	console.log(this.status);
	if(this.readyState==4&&(this.status== 200 || this.status==0)){//this.status==200
		//myobj1=JSON.parse(this.responseText);//{"name":"Google","url":"www.google.com"}

		arr1=JSON.parse(this.responseText);
		div1.innerHTML=arr1[0];
	}
};
xmlhttp.open("GET","E:/weblearning/Json/learnjson/learnjson.txt",true);
xmlhttp.send();

//使用 JSON.parse() 方法将数据转换为 JavaScript 对象。
var obj=JSON.parse('{"name":"Google","url":"www.google.com"}');
div1.innerHTML=obj.name;


for(x in json2)
{
	if(x=="slogan")
	{
		json2[x]["slogan1"]="学的不仅是技术，更是梦想4！";
		delete json2[x].slogan3;
		div1.innerHTML+="slogan1 : "+json2[x].slogan1+"<br>";
		div1.innerHTML+="slogan2 : "+json2[x].slogan2+"<br>";
		div1.innerHTML+="slogan3 : "+json2[x].slogan3+"<br>";
	}
	if(x=="url")
	{
		div1.innerHTML+=x+" : "+json2[x][1]+"<br>";
	}
	else
	{
		div1.innerHTML+=x+" : "+json2[x]+"<br>";
	}
}

for(x in json1.sites)
{
	k+="<h1>"+json1.sites[x].name+"</h1>";
	if(json1.sites[x].url.length>1)
	{
		for(j in json1.sites[x].url)
		{
			k+=json1.sites[x].url[j]+"<br>";
		}
	}
	else
	{
		k+=json1.sites[x].url[0]+"<br>";
	}
}
div1.innerHTML=k;

json1.sites[0].name="cainiao";
div1.innerHTML=json1.sites[0].name+"<br>"+json1.sites[0]["url"]+"<br>"+json1.sites[0].slogan;
*/