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

		['GET|POST', '/ages/index', 'Ages#index', 'ages_index'],
		['GET|POST', '/ages/update/[i:ages_id]', 'Ages#update', 'ages_update'],
		['GET', '/ages/view', 'Ages#view', 'ages_view'],

		['GET|POST', '/school/index', 'School#index', 'school_index'],
		['GET|POST', '/school/create', 'School#create', 'school_create'],
		['GET|POST', '/school/edit/[i:id]', 'School#edit', 'school_edit'],
		['GET|POST', '/school/delete/[i:id]', 'School#delete', 'school_delete'],
		['GET', '/school/[i:id]', 'School#view', 'school_view'],

		['GET|POST', '/section/qui-sommes-nous', 'Default#about', 'section_qui-sommes-nous'],
		['GET|POST', '/section/enfance-3-5', 'Default#enfance1', 'section_enfance-3-5'],
		['GET|POST', '/section/enfance-6-12', 'Default#enfance2', 'section_enfance-6-12'],
		['GET|POST', '/section/enfance-12-16', 'Default#enfance3', 'section_enfance-12-16'],
		['GET|POST', '/section/jeunes', 'Default#jeunes', 'section_jeunes'],
		['GET|POST', '/section/adultes-et-famille', 'Default#family', 'section_adultes-et-famille'],
		['GET|POST', '/section/events', 'Default#events', 'section_events'],

		['GET|POST', '/partners/index', 'Partners#index', 'partners_index'],
		['GET|POST', '/partners/create', 'Partners#create', 'partners_create'],
		['GET|POST', '/partners/delete/[i:partners_id]', 'Partners#delete', 'partners_delete'],
		['GET|POST', '/partners/update/[i:partners_id]', 'Partners#update', 'partners_update'],
		['GET', '/partners/[i:partners_id]', 'Partners#view', 'partners_view'],

		['GET|POST', '/documents/index', 'Documents#index', 'documents_index'],
		['GET|POST', '/documents/create', 'Documents#create', 'documents_create'],
		['GET|POST', '/documents/delete/[i:documents_id]', 'Documents#delete', 'documents_delete'],
		['GET|POST', '/documents/update/[i:documents_id]', 'Documents#update', 'documents_update'],

		['GET', '/documents/[i:documents_id]', 'Documents#view', 'documents_view'],

		['GET|POST', '/presentation/index', 'Presentation#index', 'presentation_index'],
		['GET|POST', '/presentation/update/[i:presentation_id]', 'Presentation#update', 'presentation_update'],
		['GET', '/presentation/views', 'Presentation#views', 'presentation_views']

	);
