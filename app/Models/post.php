<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class post extends Model {
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['title', 'slug', 'author', 'body' ];
    protected $with = [
        'author',
        'categories'];

     public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }



    // public function Category(): BelongsTo
    // {
    //     return $this->belongsTo(Category::class);
    // }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }


}
