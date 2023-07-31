<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'DeviceName', 'Company','Weight','Size','Quantitie','District','Desc'];
    public $timestamp=false;

}
