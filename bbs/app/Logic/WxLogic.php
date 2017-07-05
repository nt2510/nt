<?php
namespace App\Logic;


class WxLogic extends BaseLogic 
{
	public function chkValid()
	{
		$echostr = $_GET['echostr'];
		if($this->chkSignature()){
			echo $echostr;
			exit;
		}
	}
	
	public function chkSignature()
	{
		$token = 'lifeng2017wx';
		$signature = $_GET["signature"];
		$timestamp = $_GET["timestamp"];
		$nonce = $_GET["nonce"];
						
		
		$array = array($token, $timestamp, $nonce);
		sort($array, SORT_STRING);
		$str = implode($array);
		$signatureVer = sha1($str);
		
		if($signature == $signatureVer){
			return true;
		}else{
			return false;
		}
	}

}


