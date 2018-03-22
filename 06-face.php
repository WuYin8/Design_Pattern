<?php

//非常简单，对复杂的操作进行多次封装，最终给客户留一个接口
//
class Sensor
{
	function star()
	{
		echo '打开感应器';
	}
	function stop()
	{
		echo '关闭感应器';
	}
}
class Light
{
	function turnOn()
	{
		echo '打开闪光灯';
	}
	function turnOff()
	{
		echo '关闭闪光灯';
	}
}
class Camera
{
	function open()
	{
		echo '打开照相机';
	}
	function close()
	{
		echo '关闭照相机';
	}
}
//照相的时候，依次去调用相应对象的相应方法
//，可以通过门面模式进行改进
//咱们可以吧非常复杂的过程，给他放到一个门面模式下，通过门面模式给咱们提供的一个口，然后咱们再去调用即可。
class Facde
{
	public $sensor;
	public $light;
	public $camera;

	function __construct()
	{
		
		$this->camera = new Camera();
		$this->sensor = new Sensor();
		$this->light = new Light();
	}
	//就是打开的过程
	function star()
	{
		
		$this->camera -> open();
		$this->sensor-> star();
		$this->light -> turnOn();
	}
	function stop()
	{
		$this->sensor-> stop();
		$this->light -> turnOff();
		$this->camera -> close();
	}

}

class Client
{
	static function zipai()
	{
		$face = new Facde();
		$face->star();
	}
	static function guanbi()
	{
		$face = new Facde();
		$face->stop();
	}
}

Client::zipai();
