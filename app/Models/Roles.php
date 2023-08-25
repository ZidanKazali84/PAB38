<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $table = 'role_user';
    public $guarded = [];
   
    public function users(){
        return $this->belongsTo(User::class, 'user_id','id' );
    }
    public function role(){
        return $this->belongsTo(Role::class, 'role_id','id' );
    }
}
