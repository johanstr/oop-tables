<?php

namespace App\Html\Table;

class TableFactory
{
	/*
	*	$data 			-	Contains the data to display and possibly the column
	*						headers.
	*	$heading 		-	true -> Columnheadings can be found as array keys in
	*						the data argument.
	*	$attributes 	-	Contains an array with attributes for the several tags
	*						[
	*							'table' => [ .... ],
	*							'thead' => [ .... ],
	*							etc....
	*						]
	*/
	public static function create(array $data, $heading = true, $attributes = null)
	{
		$_thead = null;
		$_tbody = null;
		$_table = null;
		$heading_cells = [];
		$data_cells = [];
		$table_rows = [];

		if($heading !== false) {
			if(is_array($heading)) {
				foreach($heading as $th) {
					$heading_cells[] = new THeadingCell($th, (isset($attributes['th']) ? $attributes['th'] : null));
				}
			} elseif($heading === true) {
				if(is_array($data[0])) {
					foreach($data[0] as $key => $val) {
						$heading_cells[] = new THeadingCell($key, (isset($attributes['th']) ? $attributes['th'] : null));
					}
				}
			}

			$_thead = new THead(new TRow($heading_cells, (isset($attributes['tr']) ? $attributes['tr'] : null)), (isset($attributes['thead']) ? $attributes['thead'] : null));	
		}

		if(is_array($data)) {
			foreach($data as $key => $value) {
				if(is_array($value)) {
					foreach($value as $key => $column_value) {
						$data_cells[] = new TDataCell($column_value, (isset($attributes['td']) ? $attributes['td'] : null));
					}
					$table_rows[] = new TRow($data_cells, (isset($attributes['tr']) ? $attributes['tr'] : null));
					unset($data_cells);
				} else {
					$table_rows[] = new TRow(new TDataCell($value, (isset($attributes['td']) ? $attributes['td'] : null)), (isset($attributes['tr']) ? $attributes['tr'] : null));
				}
			}
		} else { //if(is_string($data) || is_numeric($data)) {
			$table_rows[] = new TRow(new TDataCell($data, (isset($attributes['td']) ? $attributes['td'] : null)), (isset($attributes['tr']) ? $attributes['tr'] : null));
		}

		if(!is_null($_thead)) {
			$_tbody = new TBody($table_rows, (isset($attributes['tbody']) ? $attributes['tbody'] : null));
			$_table = new Table([ $_thead, $_tbody ], (isset($attributes['table']) ? $attributes['table'] : null));
		} else {
			$_table = new Table($table_rows, (isset($attributes['table']) ? $attributes['table'] : null));
		}
		
		return $_table;
	}
}