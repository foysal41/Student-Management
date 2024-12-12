<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Course extends Model
{

    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'syllabus' , 'duration'];
    use HasFactory;


    public function duration(){
        return $this->duration. " Months";
    }

    // এই course model এর duration function ta আমরা ব্যবহার করবো view> course > index.php moddhe <td>{{ $item->duration() }}</td>  এবং show.php moddhe


}
