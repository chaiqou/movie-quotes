<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieStoreRequest;
use App\Models\Movie;

class AdminController extends Controller
{
	public function index()
	{
		return view('admin.movies.index', [
			'movies' => Movie::latest()->paginate(10),
		]);
	}

	public function create()
	{
		return view('admin.movies.create');
	}

	public function store(MovieStoreRequest $request)
	{
		$movie = new Movie;
		$imagePath = request()->file('image_path')->store('images'); // return path where the file stored
		$movie->image_path = $imagePath;

		$movie->setTranslations('title', $request->input('title'));
		$movie->save();

		return redirect()->route('quote.create');
	}

	public function edit(Movie $movie)
	{
		return view('admin.movies.edit', ['movie' => $movie]);
	}

	public function update(Movie $movie)
	{
		$attrubutes = request()->validate([
			'title'      => 'required',
			'image_path' => 'image',
		]);

		if (isset($attrubutes['image_path']))
		{
			$attrubutes['image_path'] = request()->file('image_path')->store('images'); // if validated store image in disk
		}

		$movie->update($attrubutes);
		return redirect()->route('movies');
	}

	public function destroy(Movie $movie)
	{
		$movie->delete();
		return redirect(asset('/movies'));
	}
}
