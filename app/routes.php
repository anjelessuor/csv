<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/security/login', 'Security#login', 'security_login'],
		['GET|POST', '/security/register', 'Security#register', 'security_register'],
	);
