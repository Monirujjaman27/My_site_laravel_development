<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];


       /**
     * The Relationship between category to portfolio.
     *
     * @var array
     */
    public function portfolio()
    {
        return $this->hasMany(Portfolio::class);
    }
}