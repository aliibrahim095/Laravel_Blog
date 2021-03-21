<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\Sluggable;
// use config\Sluggable;

class Post extends Model 
{

    use Sluggable;
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'user_id',
        'slug'
    ];

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
