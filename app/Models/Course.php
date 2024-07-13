<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
    public function courseDiscriptionBuletlines(): HasMany
    {
        return $this->hasMany(CourseDiscriptionBuletline::class);
    }
    public function courseCurriculums(): HasMany
    {
        return $this->hasMany(CourseCurriculum::class);
    }
    public function CourseCareerPaths(): HasMany
    {
        return $this->hasMany(CourseCareerPath::class);
    }
}
