<?php
include_once 'Observer.php';
class TempObserver implements Observer
{
	public function update()
	{
		echo "正在更新溫度...已是最新<br>";
	}
	
}