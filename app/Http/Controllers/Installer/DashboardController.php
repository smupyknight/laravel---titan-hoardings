<?php

namespace App\Http\Controllers\Installer;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

	public function getIndex()
	{
		return view('pages.installer.dashboard');
	}

}
