<?php
class PostsController extends \BaseController {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}


	public function index()
	{
		$posts = Post::paginate(4);
		return View::make('posts.index')->with(array('posts' => $posts));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);
	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', 'Your new post couldn\'t be created. See errors below:');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post

	        $file = Input::file('img_url');
	    	$destinationPath = public_path() . '/img';
	    	$filename = $file->getClientOriginalName();
	    	Input::file('img_url')->move($destinationPath, $filename);

	        $post = new Post();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
	    	$post->img_url = $filename;
			$post->save();
			Session::flash('successMessage', 'Your new post: "' . $post->title . '" was successfully created.');
			return Redirect::action('PostsController@index');
	    }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);
	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', 'The update was unsuccessful. See errors below:');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$post = Post::find($id);
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->img_url = Input::get('img_url');
			$post->save();
			Session::flash('successMessage', 'Your post "' . $post->title . '" was successfully updated.');
			return Redirect::action('PostsController@show', array($id));
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		Session::flash('successMessage', 'Your post titled "' . $post->title . '" was successfully deleted.');
		return Redirect::action('PostsController@index');
	}
}