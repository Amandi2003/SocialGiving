<?php

namespace App\Controllers;

class EquipmentDonations extends BaseController
{
	public function index()
	{
		$Headerdata['Title']='Equipment Donations';
		$Headerdata['HeaderImage']='equipment-header';
		echo view('Header',$Headerdata);
		echo view('EquipmentDonations');
		echo view('Footer');
	}
}
