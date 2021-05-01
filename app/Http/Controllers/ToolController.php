<?php

namespace App\Http\Controllers;

use App\Models\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ToolController extends Controller
{
    public function index()
    {
        return view('pages.tool');
    }

    public function query(Query $query, Request $request): \Illuminate\Http\JsonResponse
    {
        $matches = [];
        preg_match_all("/\[([^\]]*)\]/", $query->query_text, $matches);

        $params = $matches[1];

        $sparql = $query->sparql;

        foreach ($params as $param) {
            $sparql = str_replace("%$param%", $request[$param], $sparql);
        }

        $response = Http::get("http://localhost:3030/{$query->dataset}/sparql", [
            'query' => $sparql,
            'output' => 'json',
        ]);

        $responseArr = $response->json();

        $headers = $responseArr['head']['vars'];
        $data = $responseArr['results']['bindings'];

        $processed = array_map(function ($item) use ($headers) {
            $newItem = [];
            foreach($headers as $header) {
                $newItem[$header] = $item[$header]['value'];
            }
            return $newItem;
        }, $data);

        return response()->json(['headers' => $headers, 'data' => $processed]);
    }

    public function advancedQuery(Request $request): \Illuminate\Http\JsonResponse
    {

        $response = Http::get("http://localhost:3030/{$request->dataset}/sparql", [
            'query' => $request->sparql,
            'output' => 'json',
        ]);

        $responseArr = $response->json();

        $headers = $responseArr['head']['vars'];
        $data = $responseArr['results']['bindings'];

        $processed = array_map(function ($item) use ($headers) {
            $newItem = [];
            foreach($headers as $header) {
                $newItem[$header] = $item[$header]['value'];
            }
            return $newItem;
        }, $data);

        return response()->json(['headers' => $headers, 'data' => $processed]);
    }
}
