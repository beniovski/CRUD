<?php
set_include_path(
		get_include_path()
		.PATH_SEPARATOR."./Controller/"
		.PATH_SEPARATOR."./Model/"
		.PATH_SEPARATOR."./View/"		
		);
		
function __autoload($class_name) {
	require_once $class_name . '.php';
}
?>