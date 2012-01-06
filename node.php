<?php
class node {
	
	public $name;
	public $id;
	public $parent;
	public $children;
	
	
	public function __construct($parent, $id, $name) {
		$this->parent = $parent;
		$this->id = $id;
		$this->name = $name;
		$this->children = array();
	}
	
	public function addChild($node) {
		$this->children[] = $node;
	}
	
	public function deleteChild($i) {
		if(exists($this->children[$i])) {
			unset($this->children[$i]);
		}
	}
}
?>