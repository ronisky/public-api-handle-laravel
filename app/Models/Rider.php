<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    use HasFactory;
    protected $fillable = [
        'team_id',
        'name',
        'surname',
        'nation',
        'weight',
        'height',
        'mugshot_image',
    ];
}
