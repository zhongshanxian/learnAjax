//拖动
$(function() {
	$( "#draggable" ).draggable();
	});

//日期选择器
$( "#date" ).datepicker();

//滑块
$( "#slider" ).slider({
    orientation: "vertical",//设置滑块的方向
    min: 0,//滑块范围值
    max: 150,
    value: 10//当前值，底部为0
});
$( "#slider" ).bind('slide',function(){
	$("#sliderValue").html($("#slider").slider('option','value'));
});
/*
$( "#slider" ).slider({
    slide: function() {
        $("#sliderValue").html($("#slider").slider('option','value'));
    }
});
*/

//进度条
$( "#progressbar" ).progressbar({
	value:40
});
$("#progressbarValue").html($("#progressbar").progressbar('option','value'));
//进度条事件
/*
$( "#progressbar" ).bind( "progressbarchange", function() {
    alert( "The value has changed!" );
});
$( "#progressbar" ).progressbar({
    change: function() {
        alert( "The value has changed!" );
    }
});
$( "<div></div>" )//将div元素插进body的后面 ，然后在里面创建进度条
    .appendTo( "body" )
    .progressbar({ value: 20 });

var bar = $( "<div></div>" )
    .appendTo( "body" )
    .progressbar({ value: 20 });
 
// Get the current value.
console.log( bar.progressbar( "value" ) );
 
// Update the value.
bar.progressbar( "value", 50 );
 
// Get the current value again.
alert( bar.progressbar( "value" ) );

$.widget( "custom.progressbar", {
    options: {
        value: 80
    },
    _create: function() {
        this.options.value = this._constrain(this.options.value);
        this.element.addClass( "progressbar" );
        this.refresh();
    },
    _setOption: function( key, value ) {
        if ( key === "value" ) {
            value = this._constrain( value );
        }
        this._super( key, value );
    },
    _setOptions: function( options ) {
        this._super( options );
        this.refresh();
    },
    refresh: function() {
        var progress = this.options.value + "%";
        this.element.text( progress );
        if ( this.options.value == 100 ) {
            this._trigger( "complete", null, { value: 100 } );
        }
    },
    _constrain: function( value ) {
        if ( value > 100 ) {
            value = 100;
        }
        if ( value < 0 ) {
            value = 0;
        }
        return value;
    }
});
*/    

//对话框小部件
/*
//在 "custom" 命名空间中创建一个 "superDialog" 小部件。
//（$.ui.dialog），表示 superDialog 小部件应该使用 jQuery UI 的 dialog（对话框）小部件作为父部件。
$.widget( "custom.superDialog", $.ui.dialog, {
    white: function() {
        this.element.css( "color", "white" );
    },
    //原有的open方法,由于我们重载了 open() 的默认行为，所以 dialog（对话框）不再显示在屏幕上。
    //_super() 和 _superApply() 实际上等同于最初的 Function.prototype.call() 和 Function.prototype.apply() 方法。使对话框可见
    open: function() {
        console.log( "superDialog已经打开" );
        // Invoke the parent widget's open().
        return this._super();
    },
    _setOption: function( key, value ) {
 
        // Both invoke dialog's setOption() method. _super() requires the arguments
        // be passed as an argument list, _superApply() as a single array.
        this._super( key, value );
        this._superApply( arguments );
    }
} );
$( "<div>I am red</div>" )
    .superDialog()//将div放在新建的superDialog中，然后调用上面扩展的"red"方法
    .superDialog("white");

//定制个性化实例
var dialogInstance = $( "<div>" )
    .dialog()
    // 检索对话框的实例并将其存储。
    .data( "ui-dialog" );
 
// 重写close方法
dialogInstance.close = function() {//此实例点击关闭，但是不会关闭
    console.log( "close" );
};
 
// Create a second dialog
$( "<div>I am red</div>" ).dialog();//此实例被关闭后直接关闭
 
// close只会记录一次。使用小部件的插件调用方法，把方法名称以字符串形式进行传递
$( ":data(ui-dialog)" ).dialog( "close" );
//加载完成后执行
var bar = $( "<div></div>" )
    .appendTo( "body" )
    .progressbar({
        complete: function( event, data ) {
            alert( "Callbacks are great!" );
        }
    })
    .bind( "progressbarcomplete", function( event, data ) {
        alert( "Events bubble and support many handlers for extreme flexibility." );
        alert( "The progress bar value is " + data.value );
    }); 
bar.progressbar( "option", "value", 100 );
*/

//addClass();
$( "div" ).click(function() {
  //$( this ).addClass( "big-blue", 1000, "easeOutBounce" );动画Easings
  //$( this).toggle( "blind" );百叶窗特效（Blind Effect）
  //$( this).toggle( "bounce", { times: 3 }, "slow" );反弹特效（Bounce Effect）
  //$( this).effect( "bounce", "slow" );.effect()
  //$( this).toggle( "clip" );剪辑特效（Clip Effect）
  //$( this).animate({backgroundColor: "rgb( 20, 20, 20 )"});颜色动画（Color Animation）
  //$( this).toggle( "drop" ); 降落特效（Drop Effect）
  //$( this).toggle( "explode" );爆炸特效（Explode Effect）
  //$( this).toggle( "fade" );淡入淡出特效（Fade Effect）
  //$( this ).toggle( "fold" ); 折叠特效（Fold Effect）
  //$( this).hide( "drop", { direction: "down" }, "slow" );.hide()
  //$( this).toggle( "highlight" );突出特效（Highlight Effect）
  //$( this).toggle( "puff" );膨胀特效（Puff Effect）
  //$( this).toggle( "pulsate" );跳动特效（Pulsate Effect）
  //$( this ).removeClass( "big-blue", 1000, "easeInBack" );.removeClass()
  //$( this).toggle({ effect: "scale", direction: "horizontal" });缩放特效（Scale Effect）
  //$( this).effect( "shake" );震动特效（Shake Effect）
  //$( this).show( "fold", 1000 );配合display=none .show()
  //$( this).effect( "size", {to: { width: 200, height: 60 }}, 1000 );尺寸特效（Size Effect）
  //$( this ).switchClass( "big", "blue", 1000, "easeInOutQuad" ); .switchClass()
  //$( this ).toggle( "fold", 1000 );.toggle()配合一个按钮，方式折叠后找不到div
  //$( this ).toggleClass( "big-blue", 1000, "easeOutSine" ); .toggleClass()
  //var i = 1 - $( "div" ).index( this );转移特效（Transfer Effect）
  //$( this ).effect( "transfer", { to: $( ".big-gray" )}, 1000 );
});

//可调整尺寸小部件
$( "#resizable" ).resizable();

//可选择小部件
$( "#selectable" ).selectable();

//折叠面板
$( "#accordion" ).accordion();

//自动完成
$( "#autocomplete" ).autocomplete({
  source: [ "c++", "java", "php", "coldfusion", "javascript", "asp", "ruby" ]
});

//按钮部件
$( "#radio" ).buttonset();

//菜单部件
$( "#menu" ).menu();

//旋转器
$( "#spinner" ).spinner();

//标签部件
$( "#tabs" ).tabs();

//工具提示框部件
$( document ).tooltip();