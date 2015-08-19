PHP中GET POST REQUEST区别

PHP中有$_REQUEST与$_POST、$_GET用于接受表单数据。
一、$_REQUEST与$_POST、$_GET的区别和特点
$_REQUEST[]具用$_POST[] $_GET[]的功能，但是$_REQUEST[]比较慢。通过POST和GET方法提交的所有数据都可以通过$_REQUEST数组获得。
二、$_POST、$_GET的区别和特点
1.         GET是从服务器上获取数据，POST是向服务器传送数据。
2.         GET是把参数数据队列加到提交表单的ACTION属性所指的URL中，值和表单内各个字段一一对应，在URL中可以看到。POST是通过HTTP POST机制，将表单内各个字段与其内容放置在HTML HEADER内一起传送到ACTION属性所指的URL地址。用户看不到这个过程。
3.         对于GET方式提交表单数据，服务器端用$_GET[‘name’]获取变量的值，对于POST方式提交表单数据，服务器端用$_POST[‘name’]获取提交的数据，当然，两者都可以通过$_REQUEST[‘name’]获得表单数据。对于REQUEST方式提交表单数据，服务器端用$_REQUEST[‘name’]获取变量的值，但这种方式很少用。
4.         GET传送的数据量较小，不能大于2KB。POST传送的数据量较大，一般被默认为不受限制。但理论上，一般认为不能超过100KB。
5.         GET安全性非常低，POST安全性较高。
6.         GET表单值可以通过_GET获取；但通过action的url设置的参数总是获取不到的，<form method="get" action="a.asp?b=b">跟<form method="get"action="a.asp">是一样的，也就是说，在这种情况下，GET方式会忽略action页面后边带的参数列表。POST表单值可以通过_POST获取；但通过action的url参数设置的参数则可以不能通过_POST获取到。action=test.php?id=1这种就是GET方式传值，可以用$_REQUEST和$_GET接受传值，但不能用POST方式获取到值，即使表单是POST方式提交。所在，在提交表单时，如果action中同时有参数，最好只能通过POST表单方式，对于表单内数据，直接通过POST获取，对于action中参数，童工GET获取。
在做数据查询时，建议用GET方式，而在做数据添加、修改或删除时，建议用POST方式。
request是先读取 get再读post 的， 同时存在， 即覆盖掉前面的变量。
经典实例：
<?php
echo "get\n";
print_r($_GET);
echo "post\n";
print_r($_POST);
echo "request\n";
print_r($_REQUEST);
?>
<form method=post action='?a=1&b=2'>
<input type=text name=a value='a'>
<input type=text name=b value='b'>
<input type=submit value=test>
</form>
 
输出结果：
get：
Array
(
  [a] => 1
  [b] => 2
)
post：
Array
(
  [a] => a
  [b] => b
