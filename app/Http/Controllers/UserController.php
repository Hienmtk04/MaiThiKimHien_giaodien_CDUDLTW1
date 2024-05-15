<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index()
	{
		return view("user.index");
	}
	public function show()
	{
		return view("user.show");
	}
	public function edit($id)
	{
		$data = ["userid" => $id];
		return view("user.edit", compact("data"));
	}
	public function list($page = 1)
	{
		$title = "Danh sách";
		$data = ["name" => "Kim Hiền", "lop" => "CCQ2211G"];
		return view("user.list", compact("title", "data"));
	}
}
