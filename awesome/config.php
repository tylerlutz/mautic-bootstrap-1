<?php

$config = array(
	"name"		=> "Awesome",
	"features"	=> array(
		"page",
		"email",
		"form"
		),
	"slots"		=> array(
		"page"	=> array(
			"left",
			"right",
			"top",
			"bottom",
			"footer"
			),
		"email"	=> array(
			"header",
			"body",
			"footer"
			)
		)
	);

return $config;