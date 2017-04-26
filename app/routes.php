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


	);
