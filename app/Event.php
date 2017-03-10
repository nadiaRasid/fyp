<?php

namespace App;

use App\User;
use App\Category;
use App\EventCategory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['tajuk', 'huraian', 'tarikh', 'masa', 'lokasi', 'tempoh', 'kumpulan_sasaran', 'max_peserta', 'penganjur', 'telephone' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
      return $this->hasMany(Category::class);
    }

    public function event_categories()
    {
      return $this->belongsToMany(Category::class, 'event_categories');
    }

    
}
