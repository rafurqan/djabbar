<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;

class EducationLevel extends Model
{
    use HasFactory, Notifiable, HasUuids;

    protected $table = 'education_levels';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name',
        'description',
        'level',
        'status',
        'created_at',
        'created_by_id',
        'updated_at',
        'updated_by_id'
    ];

}
