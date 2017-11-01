<?php

Route::namespace('LaraMall\Github')
     ->prefix('laramall')
     ->middleware('web')
	 ->group(function(){
	 	Route::get('login','LoginController@login');
	 	Route::get('github','LoginController@github');
	 	Route::get('github-callback','LoginController@githubCallback');
	 });