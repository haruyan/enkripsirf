<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['pertanyaan', 'jawabanA', 'jawabanB', 'jawabanC', 'jawabanD'];
}
