<?php

namespace App\Repositories;

use App\Models\BlogPost;
use App\Repositories\BaseRepository;

/**
 * Class BlogPostRepository
 * @package App\Repositories
 * @version November 18, 2019, 5:54 am UTC
*/

class BlogPostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BlogPost::class;
    }
}
