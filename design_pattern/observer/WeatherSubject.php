<?php
namespace observer;
class WeatherSubject implements Subject
{
	private $observers=array();
	
	public function register(Observer $observer)
	{
		if(!in_array($observer,$this->observers)){
			$this->observers[] = $observer;
		}
	}
	
	public function remove(Observer $observer)
	{
		if(($index=array_search($observer,$this->observers) != false)){
			unset($this->observers[$index]);
		}
	}
	
	public function notify()
	{
		foreach($this->observers as $observer){
			$observer->update();
		}
	}
	
}