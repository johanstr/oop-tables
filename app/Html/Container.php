<?php

namespace App\Html;

class Container implements iHtmlTag
{
	protected $_content;
	protected $_tagname;
	protected $_attributes;

	public function __construct($content, $tagname, array $attributes = [])
	{
		$this->set($content);
		$this->_tagname = $tagname;
		$this->_attributes = $attributes;
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
		if(is_array($tgis->_content)) {
			reset($this->_content);
			return each($this->_content);
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
			return each($this->_content);

		return $this->_content;
	}
}