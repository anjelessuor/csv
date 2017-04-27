<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/security/login', 'Security#login', 'security_login'],
		['GET|POST', '/security/register', 'Security#register', 'security_register'],


		['GET|POST', '/event/index', 'Event#index', 'event_index'],
		['GET|POST', '/event/create', 'Event#create', 'event_create'],
		['GET|POST', '/event/delete/[i:events_id]', 'Event#delete', 'event_delete'],
		['GET|POST', '/event/update/[i:events_id]', 'Event#update', 'event_update'],
		['GET', '/event/[i:events_id]', 'Event#view', 'event_view'],


		['GET|POST', '/activities/index', 'Activities#index', 'activities_index'],
		['GET|POST', '/activities/create', 'Activities#create', 'activities_create'],
		['GET|POST', '/activities/edit/[i:id]', 'Activities#edit', 'activities_edit'],
		['GET|POST', '/activities/delete/[i:id]', 'Activities#delete', 'activities_delete'],
		['GET', '/activities/[i:id]', 'Activities#view', 'activities_view'],



		['GET|POST', '/config/index', 'Config#index', 'config_index'],
		['GET|POST', '/config/update/[i:config_id]', 'Config#update', 'config_update'],
		['GET', '/config/[i:id]', 'Config#view', 'config_view'],

		['GET|POST', '/h_activities/index', 'HolidaysActivities#index', 'h_activities_index'],
		['GET|POST', '/h_activities/create', 'HolidaysActivities#create', 'h_activities_create'],
		['GET|POST', '/h_activities/edit/[i:id]', 'HolidaysActivities#edit', 'h_activities_edit'],
		['GET|POST', '/h_activities/delete/[i:id]', 'HolidaysActivities#delete', 'h_activities_delete'],
		['GET', '/h_activities/[i:id]', 'HolidaysActivities#view', 'h_activities_view'],

		['GET|POST', '/partners/index', 'Partners#index', 'partners_index'],
		['GET|POST', '/partners/create', 'Partners#create', 'partners_create'],
		['GET|POST', '/partners/delete/[i:partners_id]', 'Partners#delete', 'partners_delete'],
		['GET|POST', '/partners/update/[i:partners_id]', 'Partners#update', 'partners_update'],
		['GET', '/partners/[i:partners_id]', 'Partnerst#view', 'partners_view']

	);
