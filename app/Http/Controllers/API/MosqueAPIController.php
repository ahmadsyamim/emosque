<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateMosqueAPIRequest;
use App\Http\Requests\API\UpdateMosqueAPIRequest;
use App\Models\Mosque;
use App\Repositories\MosqueRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class MosqueController
 * @package App\Http\Controllers\API
 */

class MosqueAPIController extends AppBaseController
{
    /** @var  MosqueRepository */
    private $mosqueRepository;

    public function __construct(MosqueRepository $mosqueRepo)
    {
        $this->mosqueRepository = $mosqueRepo;
    }

    /**
     * Display a listing of the Mosque.
     * GET|HEAD /mosques
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $mosques = $this->mosqueRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($mosques->toArray(), 'Mosques retrieved successfully');
    }

    /**
     * Store a newly created Mosque in storage.
     * POST /mosques
     *
     * @param CreateMosqueAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateMosqueAPIRequest $request)
    {
        $input = $request->all();

        $mosque = $this->mosqueRepository->create($input);

        return $this->sendResponse($mosque->toArray(), 'Mosque saved successfully');
    }

    /**
     * Display the specified Mosque.
     * GET|HEAD /mosques/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Mosque $mosque */
        $mosque = $this->mosqueRepository->find($id);

        if (empty($mosque)) {
            return $this->sendError('Mosque not found');
        }

        return $this->sendResponse($mosque->toArray(), 'Mosque retrieved successfully');
    }

    /**
     * Update the specified Mosque in storage.
     * PUT/PATCH /mosques/{id}
     *
     * @param int $id
     * @param UpdateMosqueAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMosqueAPIRequest $request)
    {
        $input = $request->all();

        /** @var Mosque $mosque */
        $mosque = $this->mosqueRepository->find($id);

        if (empty($mosque)) {
            return $this->sendError('Mosque not found');
        }

        $mosque = $this->mosqueRepository->update($input, $id);

        return $this->sendResponse($mosque->toArray(), 'Mosque updated successfully');
    }

    /**
     * Remove the specified Mosque from storage.
     * DELETE /mosques/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Mosque $mosque */
        $mosque = $this->mosqueRepository->find($id);

        if (empty($mosque)) {
            return $this->sendError('Mosque not found');
        }

        $mosque->delete();

        return $this->sendSuccess('Mosque deleted successfully');
    }
}
