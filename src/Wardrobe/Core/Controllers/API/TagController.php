<?php namespace Wardrobe\Core\Controllers\Api;

use Wardrobe\Core\Controllers\BaseController;

use Wardrobe\Tag;
use Wardrobe\Repositories\PostRepositoryInterface;

class ApiTagController extends BaseController {

	/**
	 * The post repository implementation.
	 *
	 * @var \Wardrobe\PostRepositoryInterface  $posts
	 */
	protected $posts;

	/**
	 * Create a new API Tag controller.
	 *
	 * @param PostRepositoryInterface $posts
	 *
	 * @return ApiTagController
	 */
	public function __construct(PostRepositoryInterface $posts)
	{
		parent::__construct();

		$this->posts = $posts;

		$this->beforeFilter('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json($this->posts->allTags());
	}

}