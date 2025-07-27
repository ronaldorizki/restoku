<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    //
    use SoftDeletes;

    protected $fillable = ['name', 'description', 'created_at', 'updated_at'];
    protected $dates = ['deleted_at'];
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
