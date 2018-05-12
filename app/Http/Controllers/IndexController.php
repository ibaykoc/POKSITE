<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getPokeData() {
        $client = new \GuzzleHttp\Client();
        $url = 'https://api.pokemontcg.io/v1/cards?page=1';

        $res = $client->request('GET', $url);

        $cards = json_decode($res->getBody(), true)['cards'];
        return view('index', ['cards' => $cards]);
    }
}
