<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;

class Answer extends Model
{
    protected $fillable = ['isi', 'question_id'];

    public function questions()
    {
        return $this->belongsTo(Question::class);
    }
}
