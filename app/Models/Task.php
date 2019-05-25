<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = [
    	'description','content','status',
    ];
    public function role(){
        return $this->belongsTo(Role::class);
    }
    
    public function attachment(){
        return $this->belongsTo(Attachments::class);
    }

    public function checklist(){
        return $this->belongsTo(Checklist::class);
    }

    public function comment(){
        return $this->belongsTo(Comment::class);
    }

    public function label(){
        return $this->belongsTo(Label::class);
    }
}
