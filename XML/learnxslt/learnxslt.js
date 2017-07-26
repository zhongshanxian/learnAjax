/************************************************
//学习XPath

//加载函数
function loadXMLDoc(dname){
	if(window.XMLHttpRequest)
	{
		xhttp=new XMLHttpRequest();
	}
	else
	{
		xhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhttp.open("GET",dname,false);//同步加载
	xhttp.send();
	return xhttp.responseXML;
}

xmlDoc=loadXMLDoc("learnxml.xml");
//path="/bookstore/book/bookname";//查找bookstore里面的book里面的bookname

//path="/bookstore/book[2]/bookname";//这里的1，原本需要表示的是第一个book,但是非IE浏览的索引为0
//需要解决这个问题xml.setProperty("SelectionLanguage","XPath");

path="/bookstore/book/booktime/text()";//获取booktime里面的文本，后面不用加childNodes[0]

path="/bookstore/book[booktime>2000]/bookname";//获取booktime大于2000的bookname
//code for IE
if(window.ActiveXObject)
{
	xmlDoc.setProperty("SelectionLanguage","XPath");
	var nodes=xmlDoc.selectNodes(path);
	for(var i=0;i<nodes.length;i++)
	{
		document.write(i+" : "+nodes[i].childNodes[0].nodeValue);
		document.write("<br>");
	}
}
//code for Mozilla, Firefox, Opera, etc.
else if(document.implementation&&document.implementation.createDocument)
{
	var nodes=xmlDoc.evaluate(path,xmlDoc,null,XPathResult.ANY_TYPE,null);
	var result=nodes.iterateNext();//非IE浏览器，会包含空节点
	while(result)
	{
		console.log(result.nodeName);
		document.write(result.childNodes[0].nodeValue);
		document.write("<br>");
		result=nodes.iterateNext();
	}
}

//学习XPath
************************************************/



//将XML转换成XHTML
function loadXMLDoc(dname){
	if(window.XMLHttpRequest)
	{
		xhttp=new XMLHttpRequest();
	}
	else
	{
		xhttp=new ActiveXObject("Msxml2.XMLHTTP");
	}
	xhttp.open("GET",dname,false);//同步加载
	try{
		xhttp.responseType="msxml-document";
	}catch(err){

	}
	xhttp.send();
	return xhttp.responseXML;
}

function displayResult(){
	xmlDoc=loadXMLDoc("learnxml.xml");
	xslDoc=loadXMLDoc("learnxslt.xsl");
	//code for IE
	if(window.ActiveXObject||xhttp.responseType=="msxml-document")
	{
		ex=xmlDoc.transformNode(xslDoc);
		//使用 transformNode() 方法把 XSL 样式表应用到 XML 文档
		document.getElementById("example").innerHTML=ex;
	}
	//code for Chrome, Firefox, Opera, etc.
	else if(document.implementation&&document.implementation.createDocument)
	{
		xsltProcessor=new XSLTProcessor();
		//创建一个新的 XSLTProcessor 对象并导入 XSL 文件
		xsltProcessor.importStylesheet(xslDoc);
		resultDocument=xsltProcessor.transformToFragment(xmlDoc,document);
		//使用 transformToFragment() 方法把 XSL 样式表应用到 XML 文档
		document.getElementById("example").appendChild(resultDocument);
	}
}



