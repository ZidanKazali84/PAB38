<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laratrust\Models\Role as RoleModel;

class Role extends RoleModel
{
    use HasFactory;
    protected $fillable = [
        'name', 'display_name', 'description',
    ];
    public $guarded = [];
   
    public function users(){
        return $this->hasMany(Roles::class, 'id','role_id' );
    }
   
    
}
