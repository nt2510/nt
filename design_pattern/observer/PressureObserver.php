<?php
include_once 'Observer.php';
class PressureObserver implements Observer
{
	public function update()
	{
		echo "正在更新氣壓...已是最新<br>";
	}
	
}