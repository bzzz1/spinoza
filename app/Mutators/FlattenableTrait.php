<?php namespace Mutators;

use App\BaseCollection;

trait FlattenableTrait {
	// array $models = array() php Declaration should be compatible with
	public function newCollection(array $models = array()) {
		return new BaseCollection($models);
	}
}