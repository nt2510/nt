<?php
namespace observer;
class HumidityObserver implements Observer
{
	public function update()
	{
		echo "正在更新濕度...已是最新<br>";
	}
	
}