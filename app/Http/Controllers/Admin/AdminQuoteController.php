<?php

namespace App\Http\Controllers\Admin;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuoteStoreRequest;

class AdminQuoteController extends Controller
{
    public function index()
	{
		return view('admin.quotes.index', [
			'quotes' => Quote::latest()->paginate(2),
		]);
	}

	public function create()
	{
        $dbmovies = Movie::all();

		return view('admin.quotes.create', ['movies' => $dbmovies]);
	}

	public function store(QuoteStoreRequest $request)
	{
		Quote::create([
			'movie_id' => $request->movie_id,
			'quote' => $request->quote
		]);


		return redirect()->route('home');
	}

	public function edit(Quote $quote)
	{

        $dbmovies = Movie::all();

		return view('admin.quotes.edit', ['quote' => $quote, 'movies' => $dbmovies]);
	}

	public function update(Quote $quote)
	{
		$attrubutes = request()->validate([
			'quote'    => 'required',
			'movie_id' => 'required|exists:movies,id',
		]);

		$quote->update($attrubutes);
		return redirect()->route('quotes');
	}

	public function destroy(Quote $quote)
	{
		$quote->delete();
		return redirect(asset('/quotes'));
	}
}
