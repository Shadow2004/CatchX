<?php namespace Model;

/* This basic model has been auto-generated by the Gas ORM */

use \Gas\Core;
use \Gas\ORM;

class Nodes extends ORM {
	
	public $primary_key = 'id';

	function _init()
	{

        self::$relationships = array(
            'nodeLinks'  => ORM::has_many('\\Model\\NodeLinks'),
            'graphs' => ORM::belongs_to('\\Model\\Graphs')
        );

		self::$fields = array(
			'id' => ORM::field('auto[11]'),
			'graph_id' => ORM::field('int[11]'),
			'x' => ORM::field('int[11]'),
			'y' => ORM::field('int[11]')
		);

	}
}