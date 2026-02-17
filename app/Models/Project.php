<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function getStatusLabelAttribute() {
        return $this->is_completed ? "Completed" : "In progress";
    }
}
