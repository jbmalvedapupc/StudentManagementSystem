<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Section;

class Student extends Model
{
    protected $table = 'students';
    public $timestamps = false;
    public $guarded = [];

    public function section()
    {
        return $this->belongsTo(Section::class);   
    }
}
