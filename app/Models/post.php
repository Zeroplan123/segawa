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

      public function scopeFilter($query, array $filters)
    {
        // filter by search keyword
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where('title', 'like', '%' . $search . '%')
                  ->orWhere('body', 'like', '%' . $search . '%');
        });

        // filter by category
        $query->when($filters['category'] ?? false, function ($query, $category) {
            $query->whereHas('categories', function ($q) use ($category) {
                $q->where('slug', $category);
            });
        });

        // filter by author
        $query->when($filters['author'] ?? false, function ($query, $author) {
            $query->whereHas('author', function ($q) use ($author) {
                $q->where('username', $author);
            });
        });

    }


}
