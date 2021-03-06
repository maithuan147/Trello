<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
    protected $table = 'attachments';
    protected $fillable = [
    	'filename','task_id'
    ];
    public function task(){
        return $this->belongsTo(Task::class);
    }
}
