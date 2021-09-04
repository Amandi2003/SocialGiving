<?php

namespace App\Controllers;

class BloodDonorForm extends BaseController{
	public function index()
	{
		$Headerdata['Title']='';
		$Headerdata['HeaderImage']='sub-header';
		echo view('Header',$Headerdata);
		echo view('donarform');
		echo view('Footer');
	}
}
