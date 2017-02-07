<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ApiController extends Controller
{
    public function index()
    {
    	// $uri = 'http://api.football-data.org/v1/competitions/';
    	// $uri = 'http://api.football-data.org/v1/fixtures/';
	    // $reqPrefs['http']['method'] = 'GET';
	    // $reqPrefs['http']['header'] = 'X-Auth-Token: e54f1a0362ef40ee92948b3bcf26d9f8';
	    // $stream_context = stream_context_create($reqPrefs);
	    // $responses = file_get_contents($uri, false, $stream_context);

	    // $fixtures = json_decode($responses);
	    // return $fixtures;


	    // $uri = 'https://raw.githubusercontent.com/jokecamp/FootballData/master/openFootballData/countries.json';
	    // $uri = 'http://api.football-data.org/v1/competitions/';
	    // $reqPrefs['http']['method'] = 'GET';
	    // $reqPrefs['http']['header'] = 'X-Auth-Token: e54f1a0362ef40ee92948b3bcf26d9f8';
	    // $stream_context = stream_context_create($reqPrefs);
	    // $response = file_get_contents($uri, false, $stream_context);
	    // $fixtures = json_decode($response);


	    // flash()->info('Title bit', 'caption bit');
	     return view('admin', compact('fixtures'));

	   	
	    return $fixtures; 

    }
}
