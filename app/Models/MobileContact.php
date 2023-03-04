<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileContact extends Model
{
    protected $table = 'contact';
    protected $fillable = ['Yourname','It','spacify','phone','email','need','work','begin','budget','about'];
}
