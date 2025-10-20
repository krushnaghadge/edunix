<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'institution_id',
        'user_id',
        'department',
        'designation',
        'contact_number',
        'joining_date',
        'status',
    ];

    // Relation with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation with Institution
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}
