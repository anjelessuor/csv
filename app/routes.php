<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/security/login', 'Security#login', 'security_login'],
		['GET|POST', '/security/register', 'Security#register', 'security_register'],
		['GET|POST', '/activities/create', 'Activities#create', 'activities_create'],
		['GET|POST', '/activities/index', 'Activities#index', 'activities_index'],
		['GET|POST', '/activities/edit/[i:id]', 'Activities#edit', 'activities_edit'],
		['GET|POST', '/activities/delete/[i:id]', 'Activities#delete', 'activities_delete'],
		['GET', '/activities/[i:id]', 'Activities#view', 'activities_view'],
	);
