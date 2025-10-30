<?php

namespace App\Models;

use App\Models\Scopes\FilterScope;
use App\Models\Scopes\IncludeScope;
use App\Models\Scopes\SelectScope;
use App\Models\Scopes\SortScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
	use HasFactory;

	protected static function booted(): void
	{
		$scopes = [
			FilterScope::class,
			IncludeScope::class,
			SelectScope::class,
			SortScope::class,
		];
		foreach ($scopes as $scopeClass) {
			static::addGlobalScope(new $scopeClass());
		}
	}

	public function scopeGetOrPaginage($query)
	{
		return $this->scopeGetOrPaginate($query);
	}

	public function scopeGetOrPaginate($query)
	{
		if (request('perPage')) {
			return $query->paginate(request('perPage'));
		}

		return $query->get();
	}

}
