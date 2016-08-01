<?php
/**
 * 分頁類
 * @author ntlee
 * @version 2016-01-27
 *
 */
namespace Home\Controller;

use Think\Controller;

class PageController extends Controller{
	
	public function index()
	{
		//使用會員數據
		$user = M('user');
		$map = array();
		$totalRows = $user->where($map)->count();
		$listRow = 20;
		$pageUtil = new \Home\Controller\PageUtil($totalRows, $listRow);
		$page = $pageUtil->page();		
		
		$res = $user->where($map)->limit($pageUtil->firstRow, $pageUtil->listRows)->select();//var_dump($user->getLastSQL());//pre($res);
		foreach($res as $val){
			$data = array();
			$data['name'] = $val['username'];
			
			$result[] = $data;
		}
		
		foreach($result as $val){
			echo $val['name']."<br>";
		}
		
		echo $page;
	}
	
	
	
	
}


/**
 * 分頁工具類
 *
 */
class PageUtil{
	public $firstRow = 0;
	public $listRows = 30;
	public $roll = 5;
	public $totalRows = 0;
	public $pageStr = '';
	
	public function __construct($totalRows, $listRows){
		$listRows && $this->listRows = $listRows;
		$this->totalRows = $totalRows;
	}
	
	/**
	 * 生成分页
	 *
	 * @return unknown
	 */
	public function page()
	{
		//總頁數
		$pages = ceil($this->totalRows/$this->listRows);
		
		$p = I('p');
		if($p <= 0) $p = 1;
		if($p >= $pages) $p = $pages;
		
		$this->firstRow = ($p-1)*$this->listRows;		
		
		//向後延伸的頁數
		$next = $p+$this->roll;
		if($next >= $pages){
			$next = $pages;
		}
		//向關延伸的頁數
		$pre = $p-$this->roll;
		if($pre <= 0){
			$pre = 1;
		}	
		//url可以動態化
		$str = '';		
		if($p > 1){
			$str .= "<a href='/home/page?p=1'>首頁</a> ... "; 
		}
			
		for($i=$pre; $i<=$next; $i++){		
			$class = '';
			if($i == $p){
				$class = "style='color:red;font-weight:bold;'";
			}
			$str .= "<a href='/home/page?p={$i}' {$class}>".$i."</a> ";					
		}
		
		if($p < $pages){
			$str .= "... <a href='/home/page?p={$pages}'>尾頁</a>"; 
		}
		
		return $str;
	}
}
