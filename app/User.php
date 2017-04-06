<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use EntrustUserTrait; // add this trait to your user model
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'address', 'phone', 'birthday', 'position', 'start_date', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $rules = [
        "name" => "required|max:255|alpha",
        "last_name" => "required|max:255|regex:/^[(a-zA-Z\s)]+$/u",
        "address" => "required|max:255|min:5",
        "phone" => "required|digits:10",
        "birthday" => "required|date",
        "position" => "required",
        "start_date" => "required|date",
        "email" => "required|email|max:255|unique:users",
    ];

     public static $rulesedit = [
        "name" => "required|max:255|regex:/^[(a-zA-Z\s)]+$/u",
        "last_name" => "required|max:255|regex:/^[(a-zA-Z\s)]+$/u",
        "address" => "required|max:255|min:5",
        "phone" => "required|digits:10",
        "birthday" => "required|date|date",
        "position" => "required",
        "start_date" => "required|date",
        "email" => "required|email|max:255",
    ];

    //establecemos las relaciones con el modelo Role, ya que un usuario puede tener varios roles
    //y un rol lo pueden tener varios usuarios
    public function roles(){
        return $this->belongsToMany('App\Role');
    }

}
