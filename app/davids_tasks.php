<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class davids_tasks extends Model
{
    protected $fillable = [
        'task_title',
        'task_description',
        'task_due_date',
        'task_start_date'
    ];
}
