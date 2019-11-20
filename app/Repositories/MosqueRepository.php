<?php

namespace App\Repositories;

use App\Models\Mosque;
use App\Repositories\BaseRepository;

/**
 * Class MosqueRepository
 * @package App\Repositories
 * @version November 20, 2019, 1:40 am UTC
*/

class MosqueRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'image',
        'description',
        'address',
        'website',
        'prefectures',
        'city',
        'status'
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
        return Mosque::class;
    }
}
