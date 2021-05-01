<?php

namespace App\Http\Controllers;

use App\Models\Query;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function getQueries(): \Illuminate\Http\JsonResponse
    {
        $queries = Query::all()->groupBy('dataset');
        return response()->json($queries);
    }
}
