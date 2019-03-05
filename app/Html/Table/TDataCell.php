<?php

namespace App\Html\Table;

use App\Html\DataContainer;

class TDataCell extends DataContainer
{
	public function __construct($content = null, $attributes = [])
	{
		Parent::__construct($content, 'td', $attributes);
	}
}