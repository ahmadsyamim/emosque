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
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/mosques",
     *      summary="Get a listing of the Mosques.",
     *      tags={"Mosque"},
     *      description="Get all Mosques",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Mosque")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $mosques = $this->mosqueRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            $mosques->toArray(),
            __('messages.retrieved', ['model' => __('models/mosques.plural')])
        );
    }

    /**
     * @param CreateMosqueAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/mosques",
     *      summary="Store a newly created Mosque in storage",
     *      tags={"Mosque"},
     *      description="Store Mosque",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Mosque that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Mosque")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Mosque"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateMosqueAPIRequest $request)
    {
        $input = $request->all();

        $mosque = $this->mosqueRepository->create($input);

        return $this->sendResponse(
            $mosque->toArray(),
            __('messages.saved', ['model' => __('models/mosques.singular')])
        );
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/mosques/{id}",
     *      summary="Display the specified Mosque",
     *      tags={"Mosque"},
     *      description="Get Mosque",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Mosque",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Mosque"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Mosque $mosque */
        $mosque = $this->mosqueRepository->find($id);

        if (empty($mosque)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/mosques.singular')])
            );
        }

        return $this->sendResponse(
            $mosque->toArray(),
            __('messages.retrieved', ['model' => __('models/mosques.singular')])
        );
    }

    /**
     * @param int $id
     * @param UpdateMosqueAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/mosques/{id}",
     *      summary="Update the specified Mosque in storage",
     *      tags={"Mosque"},
     *      description="Update Mosque",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Mosque",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Mosque that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Mosque")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Mosque"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateMosqueAPIRequest $request)
    {
        $input = $request->all();

        /** @var Mosque $mosque */
        $mosque = $this->mosqueRepository->find($id);

        if (empty($mosque)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/mosques.singular')])
            );
        }

        $mosque = $this->mosqueRepository->update($input, $id);

        return $this->sendResponse(
            $mosque->toArray(),
            __('messages.updated', ['model' => __('models/mosques.singular')])
        );
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/mosques/{id}",
     *      summary="Remove the specified Mosque from storage",
     *      tags={"Mosque"},
     *      description="Delete Mosque",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Mosque",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var Mosque $mosque */
        $mosque = $this->mosqueRepository->find($id);

        if (empty($mosque)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/mosques.singular')])
            );
        }

        $mosque->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/mosques.singular')])
        );
    }
}
