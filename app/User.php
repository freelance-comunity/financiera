<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use YoHang88\LetterAvatar\LetterAvatar;

class User extends Authenticatable
{
    use EntrustUserTrait; // add this trait to your user model
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name', 'last_name', 'address', 'phone', 'birthday', 'position', 'start_date', 'type','email', 'password', 'branch_id',
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
    "name" => "required|max:255|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/",
    "last_name" => "required|max:255|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/",
    "address" => "required|max:255|min:5",
    "phone" => "required|digits:10",
    "birthday" => "required|date",
    "position" => "required",
    "start_date" => "required|date",
    "type" => "required",
    "branch_id" => "required",
    "email" => "required|email|max:255|unique:users",
    ];

    public static $rulesedit = [
    "name" => "required|max:255|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/",
    "last_name" => 'required|max:255|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
    "address" => "required|max:255|min:5",
    "phone" => "required|digits:10",
    "birthday" => "required|date|date",
    "start_date" => "required|date",
    "email" => "required|email|max:255",
    ];

    //establecemos las relaciones con el modelo Role, ya que un usuario puede tener varios roles
    //y un rol lo pueden tener varios usuarios
    public function roles(){
        return $this->belongsToMany('App\Role');
    }

    public function accredited()
    {
        return $this->hasOne('App\Models\Accredited');
    }

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }
    public static function promotor($id){
        return Branch::where('branch_id','=',$id)
        ->get();
    }

<<<<<<< HEAD
    public function getAvatarAttribute()
    {
        return new LetterAvatar($this->name);

    }
=======
    public static function users($id){
        return User::where('branch_id','=',$id)
        ->get();
    }

>>>>>>> remotes/origin/master
}
