<?php
// app/Models/Task.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'due_date', 'due_time', 
        'priority', 'status', 'category_id'
    ];

    protected $casts = [
        'due_date' => 'date',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}