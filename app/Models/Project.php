<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
     protected $fillable = [  //definit proprietà model 
            'title',
            'description',
            'start_date',
            'end_date',
            'category',
            'lnaguages',
            'project_status',
            
    
        ];


    //$guarded per i non mass assignment
}
