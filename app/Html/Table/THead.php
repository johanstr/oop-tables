<?php

namespace App\Html\Table;

use App\Html\BlockContainer;

class THead extends BlockContainer
{
	public function __construct($content = null, $attributes = [])
	{
		Parent::__construct($content, 'thead', $attributes);
	}
}