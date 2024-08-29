<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModelCollection;
use App\Models\Regency;
use Illuminate\Http\Request;

class RegencyController extends Controller
{
    /**
     * @return ModelCollection
     * @param mixed $province_id
     */
    public function index(Request $request, $province_id): ModelCollection
    {
        $search = $request->get('search');
        $data = Regency::search($search)->byProvince($province_id)->paginate(10);

        return new ModelCollection($data);
    }
}
