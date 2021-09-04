<?php

namespace App\Controllers;

class Feedback extends BaseController
{
	public function index()
	{
		$Headerdata['Title']='Hi';
		$Headerdata['HeaderImage']='third-header';
		echo view('Header',$Headerdata);
		echo view('feedback');
		echo view('Footer');
	}
}
