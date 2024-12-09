<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Batch extends Model
{
    protected $table = 'batches';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'course_id' , 'start_date'];
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }


    //Batch মডেলে belongsTo(Course::class) ব্যবহার করলে, Batch মডেল জানবে যে এটি একটি Course এর অংশ, এবং Course মডেলটি hasMany(Batch::class) ব্যবহার করে একাধিক Batch ধারণ করতে পারবে।
}



