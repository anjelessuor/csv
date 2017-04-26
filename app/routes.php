<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/security/login', 'Security#login', 'security_login'],
		['GET|POST', '/security/register', 'Security#register', 'security_register'],


		['GET|POST', '/event/create', 'Event#create', 'event_create'],
		['GET|POST', '/event/index', 'Event#index', 'event_index'],
		['GET|POST', '/event/delete/[i:id]', 'Event#delete', 'event_delete'],
		['GET|POST', '/event/update/[i:id]', 'Event#update', 'event_update'],
		['GET', '/event/[i:id]', 'Event#view', 'event_view'],



		['GET|POST', '/activities/create', 'Activities#create', 'activities_create'],
		['GET|POST', '/activities/index', 'Activities#index', 'activities_index'],
		['GET|POST', '/activities/edit/[i:id]', 'Activities#edit', 'activities_edit'],
		['GET|POST', '/activities/delete/[i:id]', 'Activities#delete', 'activities_delete'],
		['GET', '/activities/[i:id]', 'Activities#view', 'activities_view'],

	);
