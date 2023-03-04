<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = 'contact';
    protected $fillable = ['yourname','It','Whatdo','phone','detail','refrence','begin','budget'];
}
