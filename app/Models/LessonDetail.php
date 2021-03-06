<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonDetail extends Model
{
    protected $table = 'lesson_detail';
    protected $primaryKey = 'word_id';
    public $timestamps = true;

    protected $fillable = [
        'word_name',
        'picture',
        'sound',
        'translate',
        'lesson_id',
    ];

    public function word_Remembers()
    {
        return $this->hasMany(WordRemember::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

}
