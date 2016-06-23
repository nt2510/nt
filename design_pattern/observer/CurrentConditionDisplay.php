<?php
include_once 'Observer.php';
class CurrentConditionDisplay implements Observer
{
	
	
	
	public function update($temp, $humidity, $pressure)
	{
		echo $temp.":".$humidity.":".$pressure."<br>";
	}
	
}