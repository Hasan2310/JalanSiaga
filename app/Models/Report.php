<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'name', 
        'phone',
        'email',
        'lacation',
        'description',
        'image',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
