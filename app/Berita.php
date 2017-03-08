<?php

namespace App;

use App\User;
use App\Category;
use App\EventCategory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = ['tajuk', 'huraian', 'lokasi', 'kumpulan_sasaran' ];

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

    // public function alreadyevent_categoried(Category $category)
    // {
    //   return $category->event_categoried->contains('event_id', $this->id);
    // }

}
