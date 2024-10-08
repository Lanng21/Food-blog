<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];
    use SoftDeletes;
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
    public function getAllHasSoftDeletes()
    {
        return $this->withTrashed();
    }
    public function findHasSoftDeletes($id)
    {
        return $this->withTrashed()->find($id);
    }
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, BlogTag::class, 'id_blog', 'id_tag');
    }
    public function user(): BelongsTo
    {
        return $this-> belongsTo(User::class, 'id_user');
    }

    public function getAllBlogPublic($limit)
    {
        return $this->where('status', 1)->paginate($limit);
    }
    public function comments(): HasMany
    {
        return $this->HasMany(Comment::class, 'id_blog');
    }



}
