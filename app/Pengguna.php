<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $fillable = ['user_id', 'nama', 'telefon', 'fakulti', 'persatuan', 'gambar'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
