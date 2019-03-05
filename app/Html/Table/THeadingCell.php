<?php

namespace App\Html\Table;

use App\Html\DataContainer;

class THeadingCell extends DataContainer
{
	public function __construct($content = null, $attributes = [])
	{
		Parent::__construct($content, 'th', $attributes);
	}
}