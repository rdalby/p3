<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
	/**
	 * GET /media
	 */
	public function index()
	{
		# Work that was previously happening in the routes file is now happening here
		return 'Selected media is...';
	}
}
