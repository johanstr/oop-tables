<?php

namespace App\Html;

class BlockContainer extends Container
{
	public function __construct($content, $tagname, array $attributes = [])
	{
		Parent::__construct($content, $tagname, $attributes);
	}

	public function render()
	{
		echo $this->tagOpen().PHP_EOL;

		if(is_array($this->_content)) {
			foreach($this->_content as $content_item) {
				echo $content_item->render();
			}
		} else {
			echo $this->_content->render();
		}
 
		echo $this->tagClose().PHP_EOL;

	}
}