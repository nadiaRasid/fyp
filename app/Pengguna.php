<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $fillable = ['nama', 'telefon', 'fakulti', 'persatuan'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
