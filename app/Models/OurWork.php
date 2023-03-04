<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurWork extends Model
{
    protected $table = 'our_work';
    protected $fillable = ['type','image','title','subtitle'];
}
