<?php

namespace Controller\Front\Test;

class SampleController extends \Controller\Front\Controller
{
	public function index()
	{
//		gd_debug($this);
		$setData = 'Hello World !!!';
		$this->setData('setData', $setData);
		echo 1;
	}
}

?>