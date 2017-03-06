<?php

namespace App;

use App\Event;
use App\EventCategory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function event_categories()
    {
        return $this->belongsToMany(Event::class, 'event_categories');
    }

    public function event_categoried()
    {
        return $this->hasMany(EventCategory::class, 'category_id');
    }
}
