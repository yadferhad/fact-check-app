<?php

namespace App\Http\Controllers;

use App\Models\Query;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ToolController extends Controller
{
    public function index()
    {
        return view('pages.tool');
    }

    public function docIndex() {
        return view('pages.doc');
    }

    public function query(Query $query, Request $request): \Illuminate\Http\JsonResponse
    {
        $matches = [];
        preg_match_all("/\[([^\]]*)\]/", $query->query_text, $matches);

        $params = $matches[1];

        $sparql = $query->sparql;

        foreach ($params as $param) {
            if(str_contains($param, 'date')) {
                $minDate = Carbon::createFromFormat('Y-m-d', $request[$param]);
                $maxDate = Carbon::createFromFormat('Y-m-d', $request[$param]);
                $plusMinus = ((int) $request['dateRange']);
                $minDate->subDays($plusMinus);
                $maxDate->addDays($plusMinus);
                $sparql = str_replace("%exactDate%", $request[$param], $sparql);
                $sparql = str_replace("%minDate%", $minDate->format('Y-m-d'), $sparql);
                $sparql = str_replace("%maxDate%", $maxDate->format('Y-m-d'), $sparql);
            } else {
                $sparql = str_replace("%$param%", $request[$param], $sparql);
            }
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

    public function ibcParams(Request $request): \Illuminate\Http\JsonResponse
    {
        $paramName = $request->paramName;
        if($paramName === 'martyrdomLocation') $paramName = 'diedIn';

        $sparql = "SELECT DISTINCT ?{$paramName} WHERE { ?person <http://dbpedia.org/ontology/{$paramName}> ?{$paramName} }";

        $response = Http::get("http://localhost:3030/ibc/sparql", [
            'query' => $sparql,
            'output' => 'json',
        ]);

        $responseArr = $response->json();

        $data = $responseArr['results']['bindings'];

        $processed = array_map(function ($item) use ($paramName) {
            return trim($item[$paramName]['value']);
        }, $data);

        sort($processed);

        $filterString = $request->keyword == null ? '' : $request->keyword;

        return response()->json(array_values(array_filter($processed, function($item) use($filterString) {
            return str_contains($item, $filterString);
        })));
    }

    public function vdcParams(Request $request): \Illuminate\Http\JsonResponse
    {
        $sparql = "SELECT DISTINCT ?{$request->paramName} WHERE { ?person <http://dbpedia.org/ontology/{$request->paramName}> ?{$request->paramName} }";

        $response = Http::get("http://localhost:3030/vdc/sparql", [
            'query' => $sparql,
            'output' => 'json',
        ]);

        $responseArr = $response->json();

        $data = $responseArr['results']['bindings'];


        $processed = array_map(function ($item) use ($request) {
            return trim($item[$request->paramName]['value']);
        }, $data);

        sort($processed);

        $filterString = $request->keyword == null ? '' : $request->keyword;

        return response()->json(array_values(array_filter($processed, function($item) use($filterString) {
            return str_contains($item, $filterString);
        })));
    }
}
