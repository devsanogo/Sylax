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
$route->add('detail/.+', 'Test@show');
$route->add('modifier/.+', 'Test@edit');
$route->add('update/.+', 'Test@update');
$route->add('suppression/.+', 'Test@delete');

$route->submit();