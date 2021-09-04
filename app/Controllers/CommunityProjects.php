<?php

namespace App\Controllers;

class CommunityProjects extends BaseController
{
	public function index()
	{
		$Headerdata['Title']='Community Projects';
		$Headerdata['HeaderImage']='community-header';
		echo view('Header',$Headerdata);
		echo view('CommunityProjects');
		echo view('Footer');
	}
}
