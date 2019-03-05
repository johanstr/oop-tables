<?php

namespace App\Html;

interface iHtmlTag
{
	public function render();		// Render the output
	public function get();			// Get the (first) child
	public function set($content);	// Set the child/children
	public function next();			// Get the next child
}
