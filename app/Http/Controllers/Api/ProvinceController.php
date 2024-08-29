<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModelCollection;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $data = Province::search($search)->paginate(10);

        return new ModelCollection($data);
    }

    //
}
