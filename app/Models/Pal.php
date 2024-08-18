<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use SoftDelete;

class Pal extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function getScoreAttribute()
    {
        $score = 0;

        if ($this->gender == "female") {
            $score += 2;
        } else {
            $score += 1;
        }

        if ($this->level < 8) {
            $score += 2;
        } else {
            $score += 1;
        }

        $score += $this->fun_score;
        $score += $this->attraction_score;

        if ($this->custom_multiplier != 0) {
            $score = $score * $this->custom_multiplier;
        }

        $score = round($score, 0);

        return $score;
    }
}
