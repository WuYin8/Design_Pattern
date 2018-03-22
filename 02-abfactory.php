<?php
interface Tell 
{
	function call();
	function receive();
}

class Xiaomi implements Tell
{
	function call()
	{
		echo '我在使用小米手机打电话';
	}
	function receive()
	{
		echo '我在使用小米5接电话';
	}
}
class Huawei implements Tell
{
	function call()
	{
		echo '我在使用荣耀手机打电话';
	}
	function receive()
	{
		echo '我在使用p10接电话';
	}
}
//工厂方法，你可以写成抽象类或者是接口
interface Factory
{
	//这个地方注意下，
	static function createPhone();

}
class XiaomiFactory implements Factory
{
	static function createPhone()
	{
		return new Xiaomi();
	}
}
class HuaweiFactory implements Factory
{
	static function createPhone()
	{
		return new Huawei();
	}
}
$phone = HuaweiFactory::createPhone();
$phone->call();
$phone->receive();
