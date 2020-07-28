<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function visits()
    {
        return $this->belongsTo(Visit::class);
    }

}
