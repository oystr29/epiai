<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModelCollection;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * @return ModelCollection
     * @param mixed $province_id
     */
    public function index(Request $request, $regency_id): ModelCollection
    {
        $search = $request->get('search');
        $data = District::search($search)->byRegency($regency_id)->paginate(10);

        return new ModelCollection($data);
    }
}
