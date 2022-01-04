<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'description',
        'a',
        'b',
        'c',
        'd',
        'correct',
        'exam_id',

    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
