<?php

//被观察者类
class Subject implements Splsubject
{
	//保存所有的观察者
	private $observers = []; 
	//记录一下心情
	public $lastMood;
	private $name;
	public function __construct($name)
	{
		$this->name = $name;
	}

	public function attach(SplObserver $observer)
	{
		//将观察者添加到观察者数组
		$this->observers[] = $observer;
	}
	public function detach(SplObserver $observer)
	{
		//删除观察者中指定的观察者
		$key = array_search($observer, $this->observers);
		if ($key !== false) {
			unset($this->observers[$key]);
		}

	}
	public function notify()
	{
		foreach ($this->observers as  $observer) {
			$observer->update($this);
		}
	}
	public function sendMood($mood)
	{
		$this->lastMood = $mood;
		echo $this->name . '发表了' . $mood . '<br />';
		//通知观察者，我做了改变
		$this->notify();
	}
}
//观察者类
class Observer implements SplObserver
{
	private $name;
	function __construct($name)
	{
		$this->name = $name;
	}
	function update(Splsubject $subject)
	{
		$replys = [
			'这都不是事',
			'洗洗睡吧',
			'你该吃药了'
		];
		$reply = $replys[mt_rand(0, count($replys)-1)];
		echo $this->name . '回复：' . $reply . '<br/>';
	}
}
//创建一个被观察者对象
$jingjing = new Subject('静静');
//创建观察者
$ergou = new Observer('二狗');

//加好友
$jingjing->attach($ergou);


$jingjing->sendMood('呵呵，肚子疼');



