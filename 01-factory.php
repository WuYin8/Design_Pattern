<?php

interface Fushikang
{
	function zhaoren();
	function zaoshouji();
}

class Huawei implements Fushikang
{
	function zhaoren()
	{
		echo '来啊，华为手机需要你来造';
	}
	function zaoshouji()
	{
		echo '干活，造华为手机';
	}
}
class 	Chuizi implements Fushikang
{
	function zhaoren()
	{
		echo '来啊，锤子手机需要你来造';
	}
	function zaoshouji()
	{
		echo '干活，造锤子手机';
	}
}
class Mi implements Fushikang
{
	function zhaoren()
	{
		echo '来啊，小米手机需要你来造';
	}
	function zaoshouji()
	{
		echo '干活，造小米手机';
	}
}

class Factory
{
	static function creatPhone($type)
	{
		switch ($type) {
			case 'Huawei':
				return new Huawei();
				break;
			case 'Chuizi':
				return new Chuizi();
				break;
			case 'Mi':
				return new Mi();
				break;
		}
	}
}
$phone =Factory::creatPhone('Huawei');
$phone->zaoshouji();
$phone->zhaoren();