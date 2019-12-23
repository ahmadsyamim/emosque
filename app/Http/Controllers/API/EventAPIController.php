<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateEventAPIRequest;
use App\Http\Requests\API\UpdateEventAPIRequest;
use App\Models\Event;
use App\Repositories\EventRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class EventController
 * @package App\Http\Controllers\API
 */

class EventAPIController extends AppBaseController
{
    /** @var  EventRepository */
    private $eventRepository;

    public function __construct(EventRepository $eventRepo)
    {
        $this->eventRepository = $eventRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/events",
     *      summary="Get a listing of the Events.",
     *      tags={"Event"},
     *      description="Get all Events",
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
     *                  @SWG\Items(ref="#/definitions/Event")
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
        $events = $this->eventRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        // with object of Model or Collection
        if (\Voyager::translatable($events)) {
            // it's translatable
        }

        return $this->sendResponse(
            $events->toArray(),
            __('messages.retrieved', ['model' => __('models/events.plural')])
        );
    }

    /**
     * @param CreateEventAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/events",
     *      summary="Store a newly created Event in storage",
     *      tags={"Event"},
     *      description="Store Event",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Event that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Event")
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
     *                  ref="#/definitions/Event"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateEventAPIRequest $request)
    {
        $input = $request->all();

        $event = $this->eventRepository->create($input);

        return $this->sendResponse(
            $event->toArray(),
            __('messages.saved', ['model' => __('models/events.singular')])
        );
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/events/{id}",
     *      summary="Display the specified Event",
     *      tags={"Event"},
     *      description="Get Event",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Event",
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
     *                  ref="#/definitions/Event"
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
        /** @var Event $event */
        $event = $this->eventRepository->find($id);

        if (empty($event)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/events.singular')])
            );
        }

        return $this->sendResponse(
            $event->toArray(),
            __('messages.retrieved', ['model' => __('models/events.singular')])
        );
    }

    /**
     * @param int $id
     * @param UpdateEventAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/events/{id}",
     *      summary="Update the specified Event in storage",
     *      tags={"Event"},
     *      description="Update Event",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Event",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Event that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Event")
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
     *                  ref="#/definitions/Event"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateEventAPIRequest $request)
    {
        $input = $request->all();

        /** @var Event $event */
        $event = $this->eventRepository->find($id);

        if (empty($event)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/events.singular')])
            );
        }

        $event = $this->eventRepository->update($input, $id);

        return $this->sendResponse(
            $event->toArray(),
            __('messages.updated', ['model' => __('models/events.singular')])
        );
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/events/{id}",
     *      summary="Remove the specified Event from storage",
     *      tags={"Event"},
     *      description="Delete Event",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Event",
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
        /** @var Event $event */
        $event = $this->eventRepository->find($id);

        if (empty($event)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/events.singular')])
            );
        }

        $event->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/events.singular')])
        );
    }
}
