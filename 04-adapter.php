<?php

interface PersonMan
{
	function writePhp();
	function cook();
}

class Wife
{
	function cook()
	{
		echo '贤惠的你会做剁椒鱼头';
	}
}
class Husband implements PersonMan
{
	//这个成员属性就是咱们的类中的一个对象
	public $wife;
	function __construct($wife)
	{
		$this->wife = $wife;

	}
	function writePhp()
	{
		echo '苦逼的我两点还在敲代码';
	}
	function cook()
	{
		$this->wife->cook();
	}
}
//把一个对象当成一个属性来用，这个属性属于你 的，你可以让这个属性也就是这个对象干一些事情
$xianhui = new Wife();
$jiangjiang = new Husband($xianhui);
$jiangjiang->writePhp();
$jiangjiang->cook();