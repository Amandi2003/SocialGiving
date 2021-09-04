<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$Headerdata['Title']='';
		$Headerdata['HeaderImage']='header';
		echo view('Header',$Headerdata);
		echo view('Homepage');
		echo view('Footer');
	}
}
