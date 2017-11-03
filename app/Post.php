<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();
    }

    public function scopeFilter($query, $filters)
    {
        extract($filters);

        if (isset($month)) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if (isset($year)) {
            $query->whereYear('created_at', $year);
        }
    }
}
