<?php

namespace App\Html;

class DataContainer extends Container
{
	public function __construct($content, $tagname, array $attributes = [])
	{
		Parent::__construct($content, $tagname, $attributes);
	}

	public function render()
	{
		echo $this->tagOpen()."{$this->_content}".$this->tagClose().PHP_EOL;
	}

}