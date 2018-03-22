<?php

interface Love
{
	function sajiao();
}

class Kawayi implements Love
{
	function sajiao()
	{
		echo '小哥哥你好坏啊，人家不理你了哦';
	}
}
class Tiger implements Love
{
	function sajiao()
	{
		echo '看老子萌不萌？你过来，把你的肩膀给老娘靠一下';
	}
}

class Xianhui implements Love
{
	function sajiao()
	{
		echo '衣服都熨好了，饭也热好了';
	}
}
class GirlFriend
{
	public $xingge;

	function __construct($xingge)
	{
		$this->xingge = $xingge;
	}
	function sajiao()
	{
		$this->xingge->sajiao();
	}
}
//你写好的类就是一个策略，相当于一个功能，咱们最后会专门写一个类，用来承接前面的策略
$xingge = new Tiger();
$girl = new GirlFriend($xingge);
$girl->sajiao();