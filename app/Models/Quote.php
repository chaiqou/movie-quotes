<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quote extends Model
{
	use HasFactory;

	use HasTranslations;

	protected $guarded = ['id'];

	public $translatable = ['quote'];

	public function movie()
	{
		return $this->belongsTo(Movie::class);
	}
}
