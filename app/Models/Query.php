<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    use HasFactory;

    protected $fillable = [
        'query_text',
        'sparql',
        'dataset',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'dataset'
    ];
}
