<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function getCorrectOption()
    {
        return $this->correct_option;
    }

    public function getOptions()
    {
        return [
            'option_1' => $this->option_1,
            'option_2' => $this->option_2,
            'option_3' => $this->option_3,
            'option_4' => $this->option_4,
        ];
    }

    public function getQuestion()
    {
        return $this->question;
    }
}
