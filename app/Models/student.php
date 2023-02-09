<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'phone_number', 'department_number', 'password', 'gender'
    ];  

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_number');
    }

}
