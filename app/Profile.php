<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['full_name', 'telephone_no', 'jawatan', 'jabatan', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
