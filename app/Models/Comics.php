<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    protected $comicsData = [
        "title",
        "description",
        "thumb",
        "price",
        "series",
        "sale_date",
        "type"
    ];
}
