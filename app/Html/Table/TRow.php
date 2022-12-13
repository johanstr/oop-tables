<?php

namespace App\Html\Table;

use App\Html\BlockContainer;

class TRow extends BlockContainer
{
	public function __construct($content = null, array $attributes = [])
	{
		Parent::__construct($content, 'tr', $attributes);
	}
}