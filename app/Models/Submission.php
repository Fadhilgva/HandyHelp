<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function Job()
    {
        return $this->belongsTo(Jobs::class, 'job_id', 'id');
    }

    public function Contractor()
    {
        return $this->belongsTo(User::class, 'contractor_id', 'id');
    }
}
