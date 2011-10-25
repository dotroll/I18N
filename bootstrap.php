<?php

function i18n_autoload($classname) {
	require(dirname(__FILE__) . '/src/' . strtr($classname, '_', '/') . '.php');
}

spl_autoload_register("i18n_autoload");
