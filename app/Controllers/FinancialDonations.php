<?php

namespace App\Controllers;

class FinancialDonations extends BaseController
{
	public function index()
	{
		$Headerdata['Title']='Financial Donations';
		$Headerdata['HeaderImage']='financial-header';
		echo view('Header',$Headerdata);
		echo view('FinancialDonations');
		echo view('Footer');
	}
}
