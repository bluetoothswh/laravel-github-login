<?php

namespace LaraMall\Github;
use App\Http\Controllers\Controller;
use Socialite;
use LaraMall\Github\Models\User;
class LoginController extends Controller
{

	/*
    |-------------------------------------------------------------------------------
    |
    |  显示登录界面
    |
    |-------------------------------------------------------------------------------
    */
	public function login()
	{
		return view('github::login');
	}

	/*
    |-------------------------------------------------------------------------------
    |
    |  github账号登录链接
    |
    |-------------------------------------------------------------------------------
    */
	public function github()
	{
		return Socialite::driver('github')->redirect();
	}


	/*
    |-------------------------------------------------------------------------------
    |
    |  github登录回调函数
    |
    |-------------------------------------------------------------------------------
    */
	public function githubCallback()
	{
		$githubUser  	= Socialite::driver('github')->user();
		if($user = User::where('github_id',$githubUser->getId())->first())
		{
			return $user;
		}
		return User::github($githubUser);
	}
} 