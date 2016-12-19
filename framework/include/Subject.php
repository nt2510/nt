<?php

/**
 * 觀察者主題類
 * @author ntlee
 * @version 2016-12-19
 */
interface Subject
{
	public function registerObserver(Observer $observer);
	public function deleteObserver(Observer $observer);
	public function notify();
}


