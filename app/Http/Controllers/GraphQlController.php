<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GraphQlController extends Controller
{
    function getRepo($name){

        $query = <<<GQL
        query {
            user(login:"$name"){
              name
              url
              email
              }              
            }
        GQL;

        $response = Http::withHeaders([
            'Content-Type' => "application/json",
            'Authorization' => "Bearer " . env("GITHUB_TOKEN")
        ])->post("https://api.github.com/graphql",[
            'query' => $query,
        ]);

        $data = $response->json()['data'];
        $user = $data['user'];

        //return response()->json($response->json());
        return view('graphql-github', compact('user'));
    }
}
