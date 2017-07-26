	<!--表单验证代码-->
	<?php
	/*
	//定义变量并默认设置为空值
	$nameErr=$emailErr=$genderErr=$websiteErr="";//设定必填
	$name=$email=$gender=$comment=$website='';
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(empty($_POST['name'])){
			$nameErr="名字是必须的";
		}else{
			$name=test_input($_POST['name']);
			//检验名字是否只含字母和空格
			if(!preg_match("/^[a-zA-Z ]*$/", $name)){
				$nameErr="只允许字母和空格";
			}
		}
		if(empty($_POST['email'])){
			$emailErr="邮箱是必须的";
		}else{
			$email=test_input($_POST['email']);
			//检验邮箱是否合法、
			if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)){
				$emailErr="非法邮箱格式";
			}
		}
		if(empty($_POST['gender'])){
			$genderErr="性别是必须的";
		}else{
			$gender=test_input($_POST['gender']);
		}
		if(empty($_POST['website'])){
			$website="";
		}else{
			$website=test_input($_POST['website']);
			//检测URL地址是否合法
			if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
				$websiteErr="非法的URL的地址";
			}
		}
		$comment=test_input($_POST['comment']);
	}
	function test_input($data)
	{
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	
	?>
	<?php
	
	echo "<h2>您输入的内容是：</h2>";
	echo "名字：".$name;
	echo "<br>";
	echo "邮箱：".$email;
	echo "<br>";
	echo "网址：".$website;
	echo "<br>";
	echo "备注：".$comment;
	echo "<br>";
	echo "性别：".$gender;
	echo "<br>";
	*/
	?>
	
	<?php
	/*
	//注释
	echo "Hello World!";
	*/

	/*
	//定义，输出变量
	$x=5;
	echo $x;
	*/

	/*
	//全局变量与局部变量
	$x=4;
	$z=10;
	function test1(){
		$y=8;
		global $x;//若缺少这句，则函数里面不能使用全局变量，global使得全局变量可以应用在函数内
		$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['z'];
		echo "<p>测试函数内变量：</p>";
		echo "变量x为：$x";
		echo "<br>";
		echo "变量y为：$y";
	}
	test1();
	echo "<p>测试函数内变量：</p>";
	echo "变量x为：$x";
	echo "<br>";
	echo "变量y为：$y";//报错，因为y为局部变量，不能在全局中使用
	//PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中。 index 保存变量的名称。这个数组可以在函数内部访问，也可以直接用来更新全局变量。
	echo "<br>在函数内利用GLOBALS直接修改变量值：$z";
	*/

	/*
	//Static 作用域
	function test2(){
		Static $x=0;
		echo "$x<br>";
		$x++;
	}
	test2();
	test2();
	test2();
	*/

	/*
	//参数作用域
	function test3($x){
		echo $x;
	}
	test3(7);
	*/

	/*
	//echo - 可以输出一个或多个字符串
	$text1="hello ";
	$text2="world";
	$cars = array('abc','def','ghi');
	echo "string1","string2","string3";
	echo "<br>string2<br>","string3<br>";
	echo $text1,"<br>";
	echo "big $text2","<br>";
	echo "我的车：{$cars[2]}","<br>";
	print "我的车：{$cars[0]}";
	print("<br>haha");
	echo("<br>hehe");
	*/

	/*
	//PHP 字符串
	$text1="string1";
	echo $text1;
	$text1="string2";
	echo $text1;
	//PHP 整型,PHP var_dump() 函数返回变量的数据类型和值
	$x=5230;
	var_dump($x);
	echo "<br>";
	$x=-963;
	var_dump($x);
	echo "<br>";
	$x=0xcd;
	var_dump($x);
	echo "<br>";
	$x=047;
	var_dump($x);
	echo "<br>";
	//浮点型 
	$x=-963.23;
	var_dump($x);
	echo "<br>";
	$x=2.4e3;
	var_dump($x);
	echo "<br>";
	$x=8E-5;
	var_dump($x);
	echo "<br>";
	//PHP 布尔型
	$x=true;
	$y=false;
	//PHP数组 
	$cars=array("123",456,"789");
	var_dump($cars);
	//PHP 对象
	//对象数据类型也可以用于存储数据。在 PHP 中，对象必须声明。首先，你必须使用class关键字声明类对象。类是可以包含属性和方法的结构。然后我们在类中定义数据类型，然后在实例化的类中使用数据类型：
	class car
	{
		var $color;
		function carcolor($color="red"){
			$this->color=$color;//这里的this值得就是car
		}
		function showolor(){
			return $this->color;
		}
	}

	//PHP NULL 值,NULL 值表示变量没有值。NULL 是数据类型为 NULL 的值。
	$x="hello";
	var_dump($x);
	$x=null;
	var_dump($x);
	*/

	/*
	//设置 PHP 常量
	define("greeting","欢迎访问该网站，区分大小写");
	echo greeting;
	echo "<br>";
	echo Greeting;
	
	define("greeting","欢迎访问该网站，不区分大小写",true);
	echo greeting;
	echo "<br>";
	echo Greeting;
	function test4(){
		echo "<br>test4",greetinG;
	}
	test4();
	*/

	/*
	//并置运算符 (.) 用于把两个字符串值连接起来。
	$text1="string1";
	$text2="string2";
	echo $text1."&".$text2;
	//strlen() 函数返回字符串的长度（字符数）。
	echo "<br>";
	echo strlen("123456hello");
	//strpos() 函数用于在字符串内查找一个字符或一段指定的文本。
	//如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。
	echo "<br>";
	echo strpos("hello world","world");
	*/

	/*
	//PHP运算符
	$x=10;
	$y=6;
	$x+=$y;
	echo ($x);//+-*
	echo "<br>";
	//var_dump(intdiv(10, 3));//PHP7+ 版本新增整除运算符 intdiv()
	$text1="srting1";
	$text2=" string2";
	$text1.=$text2;
	echo $text1;	
	//PHP 递增/递减运算符
	$x=10;
	echo ++$x,"<br>";
	$y=10;
	echo $y++,"<br>";
	$z=10;
	echo --$z,"<br>";
	$a=10;
	echo $a--,"<br>";
	//PHP 比较运算符
	$x=100;
	$y="100";
	var_dump($x==$y);
	echo "<br>";
	var_dump($x===$y);
	echo "<br>";
	var_dump($x!=$y);
	echo "<br>";
	var_dump($x!==$y);
	echo "<br>";
	//PHP逻辑运算符
	//数组运算符
	$x = array('a' =>"red" , 'b'=>"boy");
	$y=array('c'=>"cat",'d'=>"dog");
	$z=$x+$y;
	var_dump($z);
	var_dump($x==$y);
	var_dump($x===$y);
	var_dump($x!=$y);
	var_dump($x<>$y);
	var_dump($x!==$y);
	//三元运算符
	//(expr1) ? (expr2) : (expr3) 
	//对 expr1 求值为 TRUE 时的值为 expr2，在 expr1 求值为 FALSE 时的值为 expr3。
	//表达式 expr1 ?: expr3 在 expr1 求值为 TRUE 时返回 expr1，否则返回 expr3。
	$test="hello";
	$username=isset($test)?$test:'nobody';
	echo $username,"<br>";

	$username=$test?:'nobody';
	echo $username,PHP_EOL;

	//// 如果 $_GET['user'] 不存在返回 'nobody'，否则返回 $_GET['user'] 的值..在 PHP7+ 版本多了一个 NULL 合并运算符
	$username=$_GET['user']??'nobody';
	//// 类似的三元运算符
	$username=isset($_GET['user'])?$_GET['user']:'nobody';
	//组合比较符(PHP7+)
	echo 1<=>1;//0;
	echo 1<=>2;//-1;
	echo 2<=>1;//1;

	echo 1.5<=>1.5;//0;
	echo 1.5<=>2.5;//-1;
	echo 2.5<=>1.5;//1;

	echo "a"<=>"a";//0;
	echo "a"<=>"b";//-1;
	echo "b"<=>"a";//1;
	*/

	/*
	//条件语句
	$t=date("H");
	if($t<"10")
	{
		echo "morning";
	}
	else if($t<"20")
	{
		echo "afternoon";
	}
	else
	{
		echo "night";
	}
	//switch,使用 break 来阻止代码跳入下一个 case 中继续执行。default 语句用于不存在匹配（即没有 case 为真）时执行。
	$color="red";
	switch ($color) {
		case 'red':
			echo "i like red";
			break;
		case 'green':
			echo "i like green";
			break;
		case 'blue':
			echo "i like blue";
			break;
		default:
			echo "i like black";
			break;
	}
	*/

	/*
	//获取数组的长度 - count() 函数
	$color=array("red","green","blue","black");
	$colorlen=count($color);
	for($i=0;$i<$colorlen;$i++)
	{
		echo "i like ".$color[$i];
		echo "<br>";
	}
	sort($color);
	print_r($color);
	echo "<br>";
	//rsort($color);
	$yearold=array("peter"=>"35","amy"=>"20","mike"=>"25");
	foreach ($yearold as $key => $value) {
		echo "key= ".$key." ,age= ".$value."<br>";
	}
	//asort($yearold);
	//ksort($yearold);
	//arsort($yearold);
	//krsort($yearold);		
	*/
	/*
	//PHP $GLOBALS
	$x=10;
	$y=3;
	function add()
	{
		$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
	}
	add();
	echo $z."<br>";
	//PHP $_SERVER
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];
	echo "<br>";
	//PHP $_REQUEST 用于收集HTML表单提交的数据。
	$name=$_REQUEST['fname'];
	//$name=$_POST['fname'];
	echo $name;

	//PHP $_GET
	echo "study ".$_GET['subject']." at ".$_GET['web'];
	*/

	/*
	//while
	$i=0;
	while($i<5)
	{
		echo "number1: ".$i."<br>";
		$i++;
	}
	$j=0;
	do
	{
		echo "number2: ".$j."<br>";
		$j++;
	}
	while($j<1);
	//For 循环
	for($k=0;$k<8;$k++)
	{
		echo "number3: ".$k."<br>";
	}
	$arr= array('a' =>"apple" , 'b' =>"boy" ,'c' =>"cat");
	foreach ($arr as $key => $value) {
		echo "字母：".$key." 单词： ".$value;
	}
	*/

	/*
	//带有参数的函数
	function writename($name,$pun){
		echo "i like ".$name." ".$pun;
		$x=1;
		$y=2;
		$total=$x+$y;
    return $total;
	}
	echo(writename("amy","!"));
	*/

	/*
	//PHP 魔术变量
	echo "这是第“".__LINE__."”行<br>";
	echo "该文件位于“".__FILE__."”<br>";
	echo "该文件位于“".__DIR__."”<br>";
	class test
	{
		public function writename($name,$pun){
		//echo "执行的类名“".__CLASS__."”<br>";
		//echo "执行的函数名“".__FUNCTION__."”<br>";
		echo "i like ".$name." ".$pun;
		}
	}
	//__TRAIT__
	trait sayhello{
		public function writename($name,$pun)
		{
			parent::writename($name,$pun);
			echo "haha!";
		}
	}
	class sayhelloname extends test{
		use sayhello;
	}
	$test=new sayhelloname();
	$test->writename("amy","!");
	//__METHOD__函数名
	//__NAMESPACE__当前命名空间的名称（区分大小写）。
	//namespace  mypro;需要在一开始就设定好
	echo "命名空间“".__NAMESPACE__."”";
	*/

	/*
	//命名空间
	//必须在脚本第一行，前面不能有其他东西
	namespace project1;
	namespace project1\file1;
	namespace project2{

	}
	*/

	/*
	//file1.php
	namespace Foo\Bar\subnamesapce;
	const FOO=1;
	function foo(){}
	class foo{
		static function staticmethod(){}
	}
	
	//file2.php
	namespace Foo\Bar;
	include 'file1.php';
	const FOO=2;
	function foo(){}
	class foo{
		static function staticmethod(){}
	}
	//非限定名称
	foo();// 解析为 Foo\Bar\foo resolves to function Foo\Bar\foo
	foo::staticmethod();// 解析为类 Foo\Bar\foo的静态方法staticmethod。resolves to class Foo\Bar\foo, method staticmethod
	echo FOO;// resolves to constant Foo\Bar\FOO

	//限定名称 
	subnamespace\foo();// 解析为函数 Foo\Bar\subnamespace\foo
	subnamespace\foo::staticmethod();// 解析为类 Foo\Bar\subnamespace\foo,
                                  // 以及类的方法 staticmethod
	echo subnamespace\FOO;// 解析为常量 Foo\Bar\subnamespace\FOO

	//完全限定名称
	\Foo\Bar\foo();// 解析为函数 Foo\Bar\foo
	\Foo\Bar\foo::staticmethod(); // 解析为类 Foo\Bar\foo, 以及类的方法 staticmethod
	echo \Foo\Bar\FOO;// 解析为常量 Foo\Bar\FOO

	//访问任意全局类、函数或常量，都可以使用完全限定名称
	namespace Foo;
	function strlen(){}
	const INT_ALL=3;
	class Exception{}
	$a=\strlen('hi');// 调用全局函数strlen
	$b=\INT_ALL;// 访问全局常量 INI_ALL
	$c=new \Exception('error');// 实例化全局类 Exception
	
	//必须使用完全限定名称（包括命名空间前缀的类名称）。注意因为在动态的类名称、函数名称或常量名称中，限定名称和完全限定名称没有区别，因此其前导的反斜杠是不必要的。
	//file1.php
	class classname
	{
		function __construct(){
			echo __METHOD__,"\n";
		}
	}
	function funcname(){
		echo __FUNCTION__,"\n";
	}
	const constname="global";
	$a="classname";
	$obj=new $a; // prints classname::__construct
	$b="funcname";
	$b();
	echo constant("constname"),"\n";// prints global
	//file2.php
	namespace namespacename;
	class classname
	{
		function __construct(){
			echo __METHOD__,"\n";
		}
	}
	function funcname(){
		echo __FUNCTION__,"\n";
	}
	const constname="namespaced";
	include "example1.php";
	$a="classname";
	$obj=new $a; // prints classname::__construct
	$b="funcname";
	$b();
	echo constant("constname"),"\n";// prints global

	//note that if using double quotes, "\\namespacename\\classname" must be used
	$a='\namespacename\classname';
	$obj=new $a;//prints namespacename\classname::__construct
	$a="namespacename\classname";
	$obj=new $a; // also prints namespacename\classname::__construct
	$b="namespacename\classname";
	$b(); // prints namespacename\funcname
	$a='\namespacename\classname';
	$b();// also prints namespacename\funcname
	echo constant('\namespacename\classname'),"\n";// prints namespaced
	echo constant('namespacename\classname'),"\n";// also prints namespaced

	//namespace关键字和__NAMESPACE__常量
	namespace project;
	use blah\blah as mine;// see "Using namespaces: importing/aliasing"
	blah\mine(); // calls function blah\blah\mine()
	namespace\blah\mine();// calls function MyProject\blah\mine()
	namespace\func();// calls function MyProject\func()
	namespace\sub\func();// calls function MyProject\sub\func()
	namespace\cname::method();// calls static method "method" of class MyProject\cname
	$a=new namespace\sub\cname(); // instantiates object of class MyProject\sub\cname
	$b=namespace\CONSTANT;// assigns value of constant MyProject\CONSTANT to


	//使用use操作符导入/使用别名
	namespace foo;
	use My\Full\Classsname as Another;
	// 下面的例子与 use My\Full\NSname as NSname 相同
	use My\Full\NSname;
	//导入一个全局类
	use \ArrayObject;

	$obj=new namespace\Another;// 实例化 foo\Another 对象
	$obj=new Another;// 实例化 My\Full\Classname　对象
	NSname\subns\func(); // 调用函数 My\Full\NSname\subns\func
	$a=new ArrayObject(array(1));// 实例化 ArrayObject 对象
	// 如果不使用 "use \ArrayObject" ，则实例化一个 foo\ArrayObject 对象
	
	// 一行中包含多个use语句
	use My\Full\Classname as Another,My\Full\NSname;
	$obj=new Another;// 实例化 My\Full\Classname 对象
	NSname\subns\func();// 调用函数 My\Full\NSname\subns\func

	//导入和动态名称
	use My\Full\Classname as Another,My\Full\NSname;
	$obj=new Another;// 实例化 My\Full\Classname 对象
	$a='Another';
	$obj=new $a;// 实际化一个 Another 对象

	//导入和完全限定名称
	use My\Full\Classname as Another,My\Full\NSname;
	$obj=new Another;// 实例化 My\Full\Classname 对象
	$obj=new \Another;
	$obj=new Another\thing;
	$obj=new \Another\thing;

	//使用命名空间：后备全局函数/常量
	//在命名空间中访问全局类
	namespace A\B\C;
	class Exception extends \Exception{}
	$a=new Exception('hi');// $a 是类 A\B\C\Exception 的一个对象
	$b=new \Exception('hi'); // $b 是类 Exception 的一个对象
	$c=new ArrayObject;// 致命错误, 找不到 A\B\C\ArrayObject 类

	//命名空间中后备的全局函数/常量
	namespace A\B\C;
	const E_ERROR=45;
	function strlen($str)
	{
		return \strlen($str)-1;
	}
	echo E_ERROR,"\n";
	echo INT_ALL,"\n";
	echo strlen('hi'),"\n";
	if(is_array("hi")){
		echo "is array\n";
	}
	else
	{
		echo "is not array\n";
	}

	//使用全局空间说明
	namespace A\B\C;
	//这个函数是A\B\C\fopen
	function fopen(){
		$f=\fopen();
		return $f;
	}

	//http://www.runoob.com/php/php-namespace.html
	//命名空间顺序

	*/

	/*
  class Site{
  	//成员变量
  	var $url;
  	var $title;
  	//成员函数
  	
  	//function setUrl($par){
  	//	$this->url=$par;
  	//}
  	//function setTitle($par){
  	//	$this->title=$par;
  	//}
  	
  	//构造函数 ，是一种特殊的方法。主要用来在创建对象时初始化对象， 即为对象成员变量赋初始值，总与new运算符一起使用在创建对象的语句中。
  	function __construct($par1,$par2){
  		$this->url=$par1;
  		$this->title=$par2;
  	}
  	function getUrl(){
  		echo $this->url."<br>";
  	}
  	function getTitle(){
  		echo $this->title ."<br>"; 
  	}
  	
  }

  //new一个对象
  $runoob=new Site('www.google.com','google');
  $taobao=new Site('www.taobao.com','淘宝');

  
  //调用函数，设置标题和URL
  //$runoob->setUrl('www.runoob.com');
  //$taobao->setUrl('www.taobao.com');

  //$runoob->setTitle('菜鸟教程');
  //$taobao->setTitle('淘宝');


  //调用函数。获取标题和URL
  $runoob->getUrl();
  $runoob->getTitle();
  $taobao->getUrl();
  $taobao->getTitle();
 
  //PHP构造函数
	*/

/*
	//PHP析构函数
	//析构函数(destructor) 与构造函数相反，当对象结束其生命周期时（例如对象所在的函数已调用完毕），系统自动执行析构函数。
	class MyDestructableClass{
		function __construct(){
			print "构造函数<br>";
			$this->name="MyDestructableClass";
		}
		function __destruct(){
			print "销毁 ".$this->name."\n";
		}
	}
	$obj=new MyDestructableClass();
	*/

/*
	//继承
	//子类扩展站点类别
	class Child_Site extends Site{
		var $category;
		function setCate($par){
			$this->category=$par;
		}
		function getCate(){
			echo $this->category."<br>";
		}
	}
	*/

/*
	//方法重写：如果从父类继承的方法不能满足子类的需求，可以对其进行改写，这个过程叫方法的覆盖（override），也称为方法的重写。
	function getUrl(){
		echo $this->url."<br>";
		return $this->url;
	}
	*/


//访问控制
//public（公有）：公有的类成员可以在任何地方被访问。
//protected（受保护）：受保护的类成员则可以被其自身以及其子类和父类访问。
//private（私有）：私有的类成员则只能被其定义所在的类访问。
/*
	//define MyClass
	class MyClass{
		public $public1='public1';
		protected $protected1='protected1';
		private $private1='private1';

		function printHello(){//自身可以访问三种类型
			echo $this->public1;
			echo $this->protected1;
			echo $this->private1;
		}
	}

	$obj1=new MyClass();
	echo $obj1->public1;//new的对象只能访问共有类型
	//echo $obj1->protected1;
	//echo $obj1->private1;
	$obj1->printHello();

	//define MyClass2
	class MyClass2 extends MyClass{
		protected $protected1='protected2';//重定义
		function printHello(){//继承的能访问public和protected，不能访问private
			echo $this->public1;
			echo $this->protected1;
			echo $this->private1;
		}
	}

	$obj2=new MyClass2();
	echo $obj2->public1;//new的对象只能访问共有类型
	//echo $obj2->private1;// 未定义 private
	//echo $obj2->protected1;
	//$obj2->printHello();
	*/

/*
	//接口是通过 interface 关键字来定义的，就像定义一个标准的类一样，但其中定义所有的方法都是空的。
	//接口中定义的所有方法都必须是公有，这是接口的特性。
	//要实现一个接口，使用 implements 操作符。类中必须实现接口中定义的所有方法，否则
	//会报一个致命错误。类可以实现多个接口，用逗号来分隔多个接口的名称。
	//声明一个iTemplate接口
	interface iTemplate{
		public function setVariable($name,$var);
		public function getHtml($template);
	}

	//实现接口
	class Template implements iTemplate{
		private $vars=array();
		public function setVariable($name,$var){
			$this->vars[$name]=$var;
		}
		public function getHtml($template)
		{
			foreach ($$this->vars as $name => $value) {
				$template=str_replace('('.$name.")",$value,$template);
			}
			return $template;
		}
	}
	*/

/*
	//常量
	//可以把在类中始终保持不变的值定义为常量。在定义和使用常量的时候不需要使用 $ 符号。
	class MyClass{
		const constant='changliang';
		function showConstant(){
			echo self::constant."4<br>";
		}
	}
	echo MyClass::constant."1<br>";
	$classname="MyClass";
	echo $classname::constant."2<br>";
	$class=new MyClass();
	$class->showConstant();
	echo $class::constant."3<br>";
	*/

/*
	//抽象类
	//被定义为抽象的方法只是声明了其调用方式（参数），不能定义其具体的功能实现。
	//继承一个抽象类的时候，子类必须定义父类中的所有抽象方法；另外，这些方法的访问控制必须和父类中一样（或者更为宽松）。例如某个抽象方法被声明为受保护的，那么子类中实现的方法就应该声明为受保护的或者公有的，
	abstract class AbstractClass{
		//强制要求子类定义这些方法
		abstract protected function getValue();
		abstract protected function prefixValue($prefix);

		//普通方法（非抽象方法）
		public function printOut(){
			print $this->getValue()."<br>";
		}
	}
	class ConcreateClass1 extends AbstractClass{
		protected function getValue(){
			return "ConcreateClass1";
		}
		public function prefixValue($prefix){
			return "{$prefix}ConcreateClass1";
		}
	}
	class ConcreateClass2 extends AbstractClass{
		public function getValue(){
			return "ConcreateClass2";
		}
		public function prefixValue($prefix){
			return "{$prefix}ConcreateClass2";
		}
	}
	$class1=new ConcreateClass1;
	$class1->printOut();
	echo $class1->prefixValue('FOO_')."<br>";

	$class2=new ConcreateClass2;
	$class2->printOut();
	echo $class2->prefixValue('FOO_')."<br>";
	*/

/*
	//Static 关键字
	//声明类属性或方法为 static(静态)，就可以不实例化类而直接访问。
	class Foo{
		public static $my_static='foo';
		public function staticValue(){
			return self::$my_static;
		}
	}
	print Foo::$my_static."<br>";
	$foo=new Foo();
	//print $foo->staticValue()."<br>";
	*/

/*
	//如果一个类被声明为 final，则不能被继承。
	class BaseClass{
		public function test(){
			echo 'BaseClass::test() called'."<br>";
		}
		final public function moreTesting(){
			echo 'BaseClass::moreTesting() called'.'<br>';
		}
	}
	class ChildClass extends BaseClass{
		public function moreTesting(){
			echo 'ChildClass::moreTesting() called'."<br>";
		}
	}//报错，不能被继承
	*/

/*
	//PHP 不会在子类的构造方法中自动的调用父类的构造方法。要执行父类的构造方法，需要在子类的构造方法中调用 parent::__construct() 。
	class BaseClass{
		function __construct(){
			print 'BaseClass 类中构造方法'.'<br>';
		}
	}
	class SubClass extends BaseClass{
		function __construct(){
			parent::__construct();//子类不能自动继承
			print 'SubClass 类中构造函数'.'<br>';
		}
	}
	class OtherSubClass extends BaseClass{
		//继承BaseClass的构造函数
	}
	//调用BaseClass构造方法
	$obj1=new BaseClass();
	$obj2=new SubClass();
	*/

	//htmlspecialchars() 函数把一些预定义的字符转换为 HTML 实体。
//预定义的字符是：
//& （和号） 成为 &amp;
//" （双引号） 成为 &quot;
//' （单引号） 成为 &#039;
//< （小于） 成为 &lt;
//> （大于） 成为 &gt;

	//会通过$_SERVER["REQUEST_METHOD"]来检测表单是否被提交 。如果 REQUEST_METHOD 是 POST, 表单将被提交 - 数据将被验证

	//从带有 GET 方法的表单发送的信息，对任何人都是可见的（会显示在浏览器的地址栏），并且对发送信息的量也有限制。

	//高级教程
	//多维数组
	/*
	$sites= array(
		"runoob"=>array(
			"菜鸟教程",
			"http://www.runoob.com"
			),
		"google"=>array(
			"Google搜索",
			"http://www.google.com"
			),
		"taobao"=>array(
			"淘宝",
			"http://www.taobao.com"
			)
		);
	print("<pre>");
	print_r($sites);
	print("</pre>");
	echo $sites["google"][0]."的地址是：".$sites["google"][1];
	*/

	//date()函数，用于格式化时间/日期
	//PHP Date() - 格式化日期
	//date() 函数的第一个必需参数 format 规定了如何格式化日期/时间。
	//这里列出了一些可用的字符：
	//d - 代表月中的天 (01 - 31)
	//m - 代表月 (01 - 12)
	//Y - 代表年 (四位数)
	/*
	echo date("y-m-d  D")."<br>";
	echo date("y-m-d  l");
	$color="red";
	$car="BWM";
	*/

	//require 生成一个致命错误（E_COMPILE_ERROR），在错误发生后脚本会停止执行。
	//include 生成一个警告（E_WARNING），在错误发生后脚本会继续执行。
	//假设您有一个标准的页头文件，名为 "header.php"。如需在页面中引用这个页头文件
	
	//fopen() 函数用于在 PHP 中打开文件。
	//此函数的第一个参数含有要打开的文件的名称，第二个参数规定了使用哪种模式来打开文件
	/*
	$file=fopen("php.txt","r") or exit("can not open");
	
	if(feof($file)){
		echo "文件结尾";
	}
	//fgets() 函数用于从文件中逐行读取文件。
	while (!feof($file)) {
		echo fgets($file)."<br>";
		//fgetc() 函数用于从文件中逐字符地读取文件。
		//echo fgetc($file);
	}

	fclose($file);
	*/

	//cookie 常用于识别用户。cookie 是一种服务器留在用户计算机上的小文件。每当同一台计算机通过浏览器请求页面时，这台计算机将会发送 cookie。通过 PHP，您能够创建并取回 cookie 的值。
	//setcookie() 函数必须位于 <html> 标签之前。
	//取回cookie
	/*
	if(isset($_COOKIE['user']))
	{
		echo "欢迎 ".$_COOKIE['user']."<br>";
	}
	else
	{
		echo "普通访客！<br>";
	}
	*/

	//Session 的工作机制是：为每个访客创建一个唯一的 id (UID)，并基于这个 UID 来存储变量。UID 存储在 cookie 中，或者通过 URL 进行传导。
	//session_start() 函数必须位于 <html> 标签之前：
	//检索session数据
	/*
	echo "浏览量：".$_SESSION['views'];
	*/

	//PHP mail() 函数用于从脚本中发送电子邮件。
	//简易email
	/*
	$to="someone@example.com";
	$subject="邮件参数";
	$message="hello!这是邮件内容。";
	$from="someonelse@example.com";
	$headers="From:".$from;
	mail($to,$subject,$message,$headers);
	echo "邮件已发送";
	*/

	//Mail 表单
	/*
	function spamcheck($field)
	{
		//filter_var()过滤e-mail
		//使用FILTER_SANITIZE_EMAIL
		$field=fiiter_var($field,FILTER_SANITIZE_EMAIL);
		if(filter_var($field,FILTER_SANITIZE_EMAIL))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	if(isset($_REQUEST['email'])){//如果有这个请求，则发送
		//判断邮箱是否合法
		$mailcheck=spamcheck($_REQUEST['email']);
		if($mailcheck==FALSE)
		{
			echo "非法输入";
		}
		else
		{
			//发送邮件
			$email=$_REQUEST['email'];
			$subject=$_REQUEST['subject'];
			$message=$_REQUEST['message'];
			mail("someone@example.com",$subject,$message,"From:".$email);
			echo "发送成功";
		}
}
else
{
	echo "<form method='post' action='mailform.php'>
	Email:<input name='email' type='text'><br>
	Subject:<input name='subject' type='text'><br>
	Message:<br>
	<textarea name='message' rows='15' cols='40'></textarea><br>
	<input type='submit'>
	</form>";
}
//FILTER_SANITIZE_EMAIL 过滤器从字符串中删除电子邮件的非法字符
//FILTER_VALIDATE_EMAIL 过滤器验证电子邮件地址的值
	*/

	//错误处理
	/*
	if(!file_exists("php1.txt"))
	{
		die("文件不存在");
	}
	else
	{
		$file=fopen("php1.txt","r");
		echo "文件已打开";
	}
	*/

	//error_function(error_level,error_message,error_file,error_line,error_context)
	//错误处理函数
	/*
	function customError($errno,$errstr)
	{
		echo "<b>Error:</b>[$errno] $errstr<br>";
		echo "脚本结束，已通知网站管理员";
		error_log("Error:[$errno] $errstr",1,"someone@example.com","From:webmaster@example.com");
		die();
	}
	//设置错误处理函数
	set_error_handler("customError");
	//触发错误
	$test=2;
	if($test>1)
	{
		trigger_error("变量值必须小于等于1",E_USER_WARNING);
	}

	//在脚本中用户输入数据的位置，当用户的输入无效时触发错误是很有用的。在 PHP 中，这个任务由 trigger_error() 函数完成。
	*/

	//异常处理
	//每个 throw 必须对应一个 catch" 的原则
	//创建一个有异常处理的函数
	/*
	function checkNum($number)
	{
		if($number>1)
		{
			throw new Exception("变量值必须小于等于1");			
		}
		return true;
	}

	//在try中触发异常
	try
	{
		checkNum(2);
		//如果抛出异常。一下文本不会输出 
		echo "如果输出该内容，说明$number变量";
	}
	//捕获异常
	catch(Exception $e)
	{
		echo "Message:".$e->getMessage();
	}
	//在 "try" 代码块中调用 checkNum() 函数。
	//checkNum() 函数中的异常被抛出。
	*/

	//创建一个自定义的 Exception 类,该类必须是 exception 类的一个扩展
	/*
	class customException extends Exception
	{
		public function errorMessage(){
			//错误信息
			$errorMsg='错误行号 '.$this->getLine().' in '.$this->getFile().':<b>'.$this->getMessage().'</b>不是一个合法的E-mail地址';
			return $errorMsg;
		}
	}
	$email="someone@example...com";
	try{
		//检测邮箱
		if(filter_var($email,FILTER_VALIDATE_EMAIL)===FALSE)
		{
			//如果是个不合法的邮箱地址，刨除错误
			throw new customException($email);
		}
		//检测"example"是否在邮箱地址中
		
		if(strpos($email,"example")!==FALSE)
		{
			throw new Exception("$email 是example邮箱");
		}
	}
	catch(customException $e)
	{
		//显示信息
		echo $e->errorMessage()."<br>";
	}
	catch(Exception $e)
	{
		//显示信息
		echo $e->getMessage()."<br>";
	}

	//可以使用多个 if..else 代码块，或一个 switch 代码块，或者嵌套多个异常
	*/

	//重新抛出异常
	/*
	class customException extends Exception
	{
		public function errorMessage(){
			//错误信息
			$errorMsg=$this->getMessage()." 不是一个合法的E-mail地址";
			return $errorMsg;
		}
	}
	$email="someone@example.com";
	try
	{
		try//"try" 代码块包含另一个 "try" 代码块，这样就可以再次抛出异常
		{
			//检测example是否在邮箱地址中，有则抛出异常
			if(strpos($email, "example")!==FALSE)
			{
				//如果是个不合法的邮箱地址，抛出异常
				throw new Exception("$email");				
			}
		}
		catch(Exception $e)
		{
			//重新抛出异常
			throw new customException($email);
		}
	}
	catch (customException $e)
	{
		//显示自定义信息
		echo $e->errorMessage();
	}
	*/

	//设置顶层异常处理器
	/*
	function myException($exception)
	{
		echo "<b>Exception:</b> ",$exception->getMessage();
	}
	set_exception_handler("myException");
	throw new Exception('Uncaught Exception occurred');
	*/

	//过滤器
	/*
	$var=300;
	$int_options=array(
		"options"=>array(
			"min_range"=>0 ,
			 "max_range"=>256
			)
		);
	if(!filter_var($var,FILTER_VALIDATE_INT,$int_options))
	{
		echo "不是一个合法的整数";
	}
	else
	{
		echo "是个合法的整数";
	}
	*/

	//验证输入
	/*
	if(!filter_has_var(INPUT_GET, "email"))
	{
		echo "没有email参数";
	}
	else
	{
		if(!filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL))
		{
			echo "不是一个合法的email";
		}
		else
		{
			echo "是合法的email";
		}
	}
*/
	//用 filter_input() 函数来净化输入数据。
	/*
	if(!filter_has_var(INPUT_GET, "url"))
	{
		echo "没有url参数";
	}
	else
	{
		$url=filter_input(INPUT_GET,"url",FILTER_SANITIZE_URL);
		echo $url;
	}
	*/

	//使用 filter_input_array() 函数来过滤三个 GET 变量。接收到的 GET 变量是一个名字、一个年龄以及一个 e-mail 地址
	/*
	$filters=array(
		"name"=>array(
			"filter"=>FILTER_SANITIZE_STRING
		),
		"age"=>array(
			"filter"=>FILTER_VALIDATE_INT,
			"options"=>array(
				"min_range"=>1,
				"max_range"=>120)
		),
		"email"=>FILTER_VALIDATE_EMAIL
	);
	$result=filter_input_array(INPUT_GET,$filters);
	if(!$result['age'])
	{
		echo "年龄必须在1-120之间<br>";
	}
	else if(!$result['email'])
	{
		echo "email不合法<br>";
	}
	else
	{
		echo "输入正确";
	}		
	*/

	//使用了一个自定义的函数把所有 "_" 转换为 "."
	/*
	function convertSpace($string)
	{
		return str_replace("_", ".", $string);
	}
	$string="www_runoob_com";
	echo filter_var($string,FILTER_CALLBACK,array("options"=>"convertSpace"))
	*/

	//检测一个数字是否在一个范围内
	/*
	$int=122;
	$min=1;
	$max=200;
	if(filter_var($int,FILTER_VALIDATE_INT,array(
		"options"=>array(
			"min_range"=>$min,
			"max_range"=>$max)))===false){
		echo "变量不在合法范围内";
	}
	else
	{
		echo "变量在合法范围内";
	}

	//使用了 filter_var() 函数来检测一个 $ip 变量是否是 IPv6 地址
	$ip="2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
	if(!filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)===false)
	{
		echo "$ip 是一个IPv6地址 ";
	}
	else
	{
		echo "$ip 不是一个IPv6地址";
	}

	//用了 filter_var() 函数来检测 $url 是否包含查询字符串
	$url="http://www.runoob.com";
	if(!filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)===	false)
	{
		echo "$url 是一个合法的URL";
	}
	else
	{
		echo "$url 不是一个合法的URL";
	}
	
	//使用了 filter_var() 函数来移除字符串中 ASCII 值大于 127 的字符，同样它也能移除 HTML 标签
	$str="<h1>hello world</h1>";
	$newstr=filter_var($str,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	echo $newstr;
	*/

	/*
	//PHP json_encode() 用于对变量进行 JSON 编码，该函数如果执行成功返回 JSON 数据，否则返回 FALSE 
	$arr=array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
	echo json_encode($arr);//{"a":1,"b":2,"c":3,"d":4,"e":5}

	//将 PHP 对象转换为 JSON 格式数据
	class Emp{
		public $name="";
		public $hobbies="";
		public $birthdate="";
	}
	$e=new Emp();
	$e->name="xian";
	$e->hobbies="sports";
	$e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));
	echo json_encode($e);

	//PHP json_decode() 函数用于对 JSON 格式的字符串进行解码，并转换为 PHP 变量。
	//json_string: 待解码的 JSON 字符串，必须是 UTF-8 编码数据
	//assoc: 当该参数为 TRUE 时，将返回数组，FALSE 时返回对象。
	//depth: 整数类型的参数，它指定递归深度
	$json='{"a":1,"b":2,"c":3,"d":4,"e":5}';
	var_dump(json_decode($json));
	var_dump(json_decode($json,true));
	*/
	?>  	