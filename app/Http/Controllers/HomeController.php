<?php

namespace Framework\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getDoc()
	{
		return '{
			"swaggerVersion": "1.2",
			"apis": [{
				"path": "\/api\/product\/reviews",
				"description": "Returning product reviews."
			}],
			"apiVersion": "0.1",
			"info": {
				"title": "Product review services",
				"description": "This service handles product reviews"
			},
			"authorizations": []
		}';
	}
}
