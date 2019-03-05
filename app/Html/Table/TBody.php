<?php

namespace App\Html\Table;

use App\Html\BlockContainer;

class TBody extends BlockContainer
{
	public function __construct($content = null, $attributes = [])
	{
		Parent::__construct($content, 'tbody', $attributes);
	}
}