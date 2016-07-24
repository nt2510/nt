<?php

class WatchTvFacade
{
	public $tv;
	public $light;
	public $airCondition;
	
	public function __construct(Light $light, AirCondition $airCondition, Tv $tv)
	{
		$this->light = $light;
		$this->airCondition = $airCondition;
		$this->tv = $tv;	
	}
	
	public function on()
	{
		$this->light->on();
		$this->airCondition->on();
		$this->tv->on();
	}
	
	public function off()
	{
		$this->light->off();
		$this->airCondition->off();
		$this->tv->off();
	}
	
}




