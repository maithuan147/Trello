<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
    	'content','task_id','user_id'
    ];
    public function task(){
        return $this->belongsTo(Task::class);
    }
}
