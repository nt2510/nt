<?php
include_once 'Subject.php';
class WeatherData implements Subject
{
	public $temp; 
	public $humidity;
	public $pressure;
	
	public function registerObserver()
	{
		
	}
	public function removeObserver()
	{
		
	}
	
	public function notifyObserver()
	{
		include_once 'CurrentConditionDisplay.php';
		$currentConditionDisplay = new CurrentConditionDisplay();
		$currentConditionDisplay->update($this->temp, $this->humidity, $this->pressure);
	}
	
	public function setMeasurements($temp, $humidity, $pressure)
	{
		$this->temp = $temp;
		$this->humidity = $humidity;
		$this->pressure = $pressure;
		$this->notifyObserver();
	}
	
}