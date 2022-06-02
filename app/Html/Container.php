<?php

namespace App\Html;

class Container implements iHtmlTag
{
	protected $_content;
	protected $_tagname;
	protected $_attributes;
	private $index = 0;

	public function __construct($content, $tagname, array $attributes = [])
	{
		$this->set($content);
		$this->_tagname = $tagname;
		$this->_attributes = $attributes;
	}

	private function each()
	{
		if(!is_array($this->_content))
			return $this->_content;
			
		$return_value = null;

		if(array_key_exists($this->index, $this->_content))
			$return_value = $this->_content[$this->index];

		if($this->index < count($this->_content) - 1)
			$this->index++;
		else
			$this->index = 0;

		return $return_value;
	}

	private function reset()
	{
		$this->index = 0;
	}

	public function tagOpen()
	{
		$output = "<{$this->_tagname}";
		if(!is_null($this->_attributes) && !empty($this->_attributes) && is_array($this->_attributes)) {
			foreach($this->_attributes as $attr_name => $attr_value) {
				$output .= " {$attr_name}='{$attr_value}'";
			}
		}
		$output .= ">";

		return $output;
	}

	public function tagClose()
	{
		return "</{$this->_tagname}>";
	}

	public function name($newname = null)
	{
		if(!is_null($newname)) {
			$this->tagname = $newname;
		}

		return $this->_tagname;
	}

	public function attr($key = null)
	{
		if(!is_null($key) && array_key_exists($key, $this->_attributes))
			return $this->_attributes[$key];

		return $this->_attributes;
	}

	public function render()
	{
	}

	public function getAll()
	{
		return $this->_content;
	}

	public function get()
	{
		if(is_array($this->_content)) {
			$this->reset();
			return $this->each();
		}
		
		return $this->_content;
	}

	public function set($content)
	{
			$this->_content = $content;
	}

	public function next()
	{
		if(is_array($this->_content))
			return $this->each();

		return $this->_content;
	}
}
