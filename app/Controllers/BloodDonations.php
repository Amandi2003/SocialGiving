<?php

namespace App\Controllers;

class BloodDonations extends BaseController
{
	public function index()
	{
		$Headerdata['Title']='Blood Donations';
		$Headerdata['HeaderImage']='sub-header';
		echo view('Header',$Headerdata);
		echo view('BloodDonations');
		echo view('Footer');
	}
}
