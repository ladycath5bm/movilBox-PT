<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname', 'salary', 'education_level_id'];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function eductionLevel(): BelongsTo
    {
        return $this->belongsTo(EducationLevel::class);
    }
}
