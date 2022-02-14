<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EBook extends Model
{
    use HasFactory;

    protected $table = 'ebooks';
    protected $primaryKey = 'ebook_id';
    public $timestamps = false;

    protected $fillable = [
        'title',
        'author',
        'description',
    ];


    public function order() {
        return $this->hasMany(Order::class);
    }
}
