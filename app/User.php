<?php

namespace App;

use App\Event;
use App\Berita;
use App\Pengguna;
use App\Pengarang;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'no_matrik', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'created_at', 'updated_at',
    ];

    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function berita()
    {
        return $this->hasMany(Berita::class);
    }

    public function pengguna() {
        return $this->hasOne(Pengguna::class, 'user_id');
    }

    // public function pengarang() {
    //     return $this->hasOne(Pengarang::class, 'user_id');
    // }

}
