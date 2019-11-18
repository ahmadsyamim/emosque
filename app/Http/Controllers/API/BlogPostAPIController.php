<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateBlogPostAPIRequest;
use App\Http\Requests\API\UpdateBlogPostAPIRequest;
use App\Models\BlogPost;
use App\Repositories\BlogPostRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class BlogPostController
 * @package App\Http\Controllers\API
 */

class BlogPostAPIController extends AppBaseController
{
    /** @var  BlogPostRepository */
    private $blogPostRepository;

    public function __construct(BlogPostRepository $blogPostRepo)
    {
        $this->blogPostRepository = $blogPostRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/blogPosts",
     *      summary="Get a listing of the BlogPosts.",
     *      tags={"BlogPost"},
     *      description="Get all BlogPosts",
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
     *                  @SWG\Items(ref="#/definitions/BlogPost")
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
        $blogPosts = $this->blogPostRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            $blogPosts->toArray(),
            __('messages.retrieved', ['model' => __('models/blogPosts.plural')])
        );
    }

    /**
     * @param CreateBlogPostAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/blogPosts",
     *      summary="Store a newly created BlogPost in storage",
     *      tags={"BlogPost"},
     *      description="Store BlogPost",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="BlogPost that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/BlogPost")
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
     *                  ref="#/definitions/BlogPost"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateBlogPostAPIRequest $request)
    {
        $input = $request->all();

        $blogPost = $this->blogPostRepository->create($input);

        return $this->sendResponse(
            $blogPost->toArray(),
            __('messages.saved', ['model' => __('models/blogPosts.singular')])
        );
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/blogPosts/{id}",
     *      summary="Display the specified BlogPost",
     *      tags={"BlogPost"},
     *      description="Get BlogPost",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of BlogPost",
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
     *                  ref="#/definitions/BlogPost"
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
        /** @var BlogPost $blogPost */
        $blogPost = $this->blogPostRepository->find($id);

        if (empty($blogPost)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/blogPosts.singular')])
            );
        }

        return $this->sendResponse(
            $blogPost->toArray(),
            __('messages.retrieved', ['model' => __('models/blogPosts.singular')])
        );
    }

    /**
     * @param int $id
     * @param UpdateBlogPostAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/blogPosts/{id}",
     *      summary="Update the specified BlogPost in storage",
     *      tags={"BlogPost"},
     *      description="Update BlogPost",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of BlogPost",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="BlogPost that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/BlogPost")
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
     *                  ref="#/definitions/BlogPost"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateBlogPostAPIRequest $request)
    {
        $input = $request->all();

        /** @var BlogPost $blogPost */
        $blogPost = $this->blogPostRepository->find($id);

        if (empty($blogPost)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/blogPosts.singular')])
            );
        }

        $blogPost = $this->blogPostRepository->update($input, $id);

        return $this->sendResponse(
            $blogPost->toArray(),
            __('messages.updated', ['model' => __('models/blogPosts.singular')])
        );
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/blogPosts/{id}",
     *      summary="Remove the specified BlogPost from storage",
     *      tags={"BlogPost"},
     *      description="Delete BlogPost",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of BlogPost",
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
        /** @var BlogPost $blogPost */
        $blogPost = $this->blogPostRepository->find($id);

        if (empty($blogPost)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/blogPosts.singular')])
            );
        }

        $blogPost->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/blogPosts.singular')])
        );
    }
}
