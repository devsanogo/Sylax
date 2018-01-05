<?php 
/**
 * Header - General Platform Template
 *
 * @author      Anzoumana SANOGO
 */

$route = new Router();

$route->add('/', function(){
	header('Location: index');
});
$route->add('index', 'Test@index');
$route->add('nouveau', 'Test@create');
$route->add('detail/'.$route->getParam(), 'Test@show');
$route->add('modifier/'.$route->getParam(), 'Test@edit');
$route->add('update/'.$route->getParam(), 'Test@update');
$route->add('suppression/'.$route->getParam(), 'Test@delete');

$route->submit();