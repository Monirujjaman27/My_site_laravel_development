<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitedefault extends Model
{
    use HasFactory;
    protected $nullable = [
        'site_title',
        'site_about',
        'favicon',
        'businessmail',
        'address',
        'phone',
    ];
}
