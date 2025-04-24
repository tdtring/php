<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileUser extends Model
{
    protected $fillable = ['user_id','bio','avatar','birthday'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}