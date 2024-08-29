<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModelCollection;
use App\Models\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    /**
     * @return ModelCollection
     * @param mixed $district_id
     */
    public function index(Request $request, $district_id): ModelCollection
    {
        $search = $request->get('search');
        $data = Village::search($search)->byDistrict($district_id)->paginate(10);

        return new ModelCollection($data);
    }
}
