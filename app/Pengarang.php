<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Pengarang extends Model
{
    protected $fillable = ['nama', 'telefon', 'jawatan', 'jabatan'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
