<?php

include_once 'OpenTvCommand.php';
include_once 'CloseTvCommand.php';
include_once 'ChangeChannelCommand.php';
class Remote
{
	public $openTv;
	public $closeTv;
	public $changeChannel;
	public function __construct(OpenTvCommand $openTv, CloseTvCommand $closeTv, ChangeChannelCommand $changeChannel)
	{
		$this->openTv = $openTv;
		$this->closeTv = $closeTv;
		$this->changeChannel = $changeChannel;
	}
	
	public function open()
	{
		$this->openTv->execute();
	}
	
	public function close()
	{
		$this->closeTv->execute();
	}
	
	public function change()
	{
		$this->changeChannel->execute();
	}
}





