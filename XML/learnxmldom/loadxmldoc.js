//loadXMLDoc()函数
function loadXMLDoc(dname){
	if(window.XMLHttpRequest)
	{
		xhttp=new XMLHttpRequest();
	}
	else
	{
		xhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhttp.open("GET",dname,false);//这里为false，所以是同步请求
	xhttp.send();
	return xhttp.responseXML;
}

//异步loadXMLDocyibu()函数
function  loadXMLDocyibu(dname){
	if(window.XMLHttpRequest)
	{
		//IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		//IE6, IE5 浏览器执行代码
		xmlDoc=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState==4&&(xmlhttp.status==0||xmlhttp.status==200))//在服务器上返回OK200，在本地返回0
		{
			document.getElementById("mydiv").innerHTML=xmlhttp.responseText;//这里设置的返回是字符串，非XML（responseXML）
		}
	}
	xmlhttp.open("GET",dname,true);//这里 true为异步加载
	xmlhttp.send();
}

//loadXMLString()函数
function loadXMLString(txt){
	if(window.DOMParser)
	{
		parser=new DOMParser();
		xmlDoc=parser.parseFromString(txt,"text/xml");
	}
	else
	{
		//Internet Explorer
		xmlDoc=new ActiveXObject("Microsoft.XMLDOM");
		xmlDoc.async=false;
		xmlDoc.loadXML(txt);
	}
	return xmlDoc;
}

//获取某个节点的下一个同级节点，避免空节点
function get_nextSibling(node){
	nextnode=node.nextSibling;
	while(nextnode.nodeType!=1)
	{
		nextnode=nextnode.nextSibling;
	}
	return nextnode;
}

//获取某个节点的前一个同级节点，避免空节点
function get_previousSibling(node){
	previousnode=node.previousSibling;
	while(previousnode.nodeType!=1)
	{
		previousnode=previousnode.previousSibling;
	}
	return previousnode;
}

//获取某个节点的第一个元素节点
function get_firstChild(node){
	firstnode=node.firstChild;
	while(firstnode.nodeType!=1)
	{
		firstnode=firstnode.nextSibling;
	}
	return firstnode;
}

//获取某个节点的最后一个元素节点
function get_lastChild(node){
	lastnode=node.lastChild;
	while(lastnode.nodeType!=1)
	{
		lastnode=lastnode.previousSibling;
	}
	return lastnode;
}

xmlDoc=loadXMLDoc("learnxml.xml");
//titles=xmlDoc.getElementsByTagName("title");
books=xmlDoc.getElementsByTagName("book");

/*克隆一个节点
clonebook0=books[0].cloneNode(true);
xmlDoc.documentElement.appendChild(clonebook0);
books=xmlDoc.getElementsByTagName("book");
*/
/*菜单
for(var i=0;i<titles.length;i++)
{
	document.write(titles[i].childNodes[0].nodeValue+"<br>");
}
*/
for(var i=0;i<books.length;i++)
{
	//var bookatt=books[i].attributes;
	//console.log(books[i].childNodes[1].childNodes[0].nodeValue+"的category= "+bookatt.getNamedItem("category").nodeValue);
	//var bookatt=books[i].getAttribute("category");
	//console.log(books[i].childNodes[1].childNodes[0].nodeValue+"的category= "+bookatt+"!");
	
	//方法一改变属性值books[0].setAttribute("category","literature!!!");
	//var bookatt=books[i].getAttributeNode("category").nodeValue;
	//方法二改变属性值
	//bookatt="literature???";
	//删除属性节点books[0].removeAttribute("category");
	//var bookatt=books[i].getAttributeNode("category").nodeValue;
	//console.log(books[i].childNodes[1].childNodes[0].nodeValue+"的category= "+bookatt+".");

	//删除文本节点books[0].childNodes[1].removeChild(books[0].childNodes[1].childNodes[0]);
  
	//前面是整个根节点，即bookstore xmlDoc.documentElement.replaceChild(newnode,books[0]);
	for(var j=0;j<books[i].childNodes.length;j++)
	{
		if(books[i].childNodes[j].nodeType==1)
		{
			books[2].childNodes[5].childNodes[0].nodeValue="2018";
			document.write(books[i].childNodes[j].nodeName+" : ");
			document.write(books[i].childNodes[j].childNodes[0].nodeValue+"<br>");
			//console.log(books[i].childNodes[j].parentNode.nodeName);
			console.log(get_firstChild(books[i]).nodeName);
		}
		var x=books[i].childNodes[j].nextSibling;
		//console.log("nextSibling "+x);
	}
}