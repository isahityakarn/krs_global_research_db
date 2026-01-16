<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\StoreTimeModel;
use Illuminate\Http\Request;

class StoreTimeController extends Controller
{
    public function storeClick($id, Request $request)
    {


        // return "hi";    
        $url = Project::find($id);
        $lastWord = explode('=', $url->name);
        $lastWord = end($lastWord);
        
        $ip = $request->ip();
        StoreTimeModel::create([
            'pid' => $lastWord,
            'uid' => $lastWord,
            'ip' => $ip,
            'created_at' => now(),
        ]);
        return redirect($url->name);
    }
}
