<?php
namespace LaraMall\Github\Models;
use Hash;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
	protected $table = 'users';
	protected $fillable = ['username','email','phone','password','github_id','avatar'];


	/*
    |-------------------------------------------------------------------------------
    |
    |  创建用户
    |
    |-------------------------------------------------------------------------------
    */
    public static function github($user)
    {
    	return (new static)->create([
    		'username'=>$user->getName(),
    		'email'=>$user->getEmail(),
    		'github_id'=>$user->getId(),
    		'avatar'=>$user->getAvatar(),
    		'password'=> Hash::make('demo888'),
    	]);
    }
}