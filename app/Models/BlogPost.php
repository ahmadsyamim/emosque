<?php

namespace App\Models;

use Eloquent as Model;

/**
 * @SWG\Definition(
 *      definition="BlogPost",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="author_id",
 *          description="author_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="category_id",
 *          description="category_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="title",
 *          description="title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="seo_title",
 *          description="seo_title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="excerpt",
 *          description="excerpt",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="body",
 *          description="body",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="image",
 *          description="image",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="slug",
 *          description="slug",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="meta_description",
 *          description="meta_description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="status",
 *          description="status",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="featured",
 *          description="featured",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="tags",
 *          description="tags",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="published_date",
 *          description="published_date",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class BlogPost extends Model
{
    public $table = 'blog_posts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'author_id',
        'category_id',
        'title',
        'seo_title',
        'excerpt',
        'body',
        'image',
        'slug',
        'meta_description',
        'status',
        'featured',
        'tags',
        'published_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author_id' => 'integer',
        'category_id' => 'integer',
        'title' => 'string',
        'seo_title' => 'string',
        'excerpt' => 'string',
        'body' => 'string',
        'image' => 'string',
        'slug' => 'string',
        'meta_description' => 'string',
        'status' => 'string',
        'featured' => 'boolean',
        'tags' => 'string',
        'published_date' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'author_id' => 'required',
        'title' => 'required',
        'excerpt' => 'required',
        'body' => 'required',
        'slug' => 'required',
        'meta_description' => 'required',
        'status' => 'required',
        'featured' => 'required'
    ];

    public function getImageAttribute($value)
    {
        if ($value) {
            return asset('storage/' . $value);
        } else {
            return asset('images/placeholder.png');
        }
    }
}
