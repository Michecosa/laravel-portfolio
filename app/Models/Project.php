<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function getStatusLabelAttribute() {
        return $this->is_completed ? "Completed" : "In progress";
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function technologies() {
        return $this->belongsToMany(Technology::class);
    }
}
