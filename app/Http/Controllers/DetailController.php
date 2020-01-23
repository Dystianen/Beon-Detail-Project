<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;

class DetailController extends Controller
{
    public function show($id)
    {
        $projects = Detail::where('id', $id)->first();
        if (Detail::where('id', $id)->count() > 0) {
            $data = $projects;
            return response()->json([
                'status' => '1',
                'data' => $data,
            ]);
        } else {
            return response()->json([
                'status' => '0',
                'message' => 'Data tidak dapat ditemukan'
            ]);
        }
    }
}
