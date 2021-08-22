<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class CommunityController extends Controller
{


	public function communityPage(){
		$users = User::paginate(16);


		return view('pages.community')->with([
			'users' => $users
		]);
	}
}
