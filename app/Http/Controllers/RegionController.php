<?php

namespace App\Http\Controllers;

use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;

class RegionController extends Controller
{
    public function cities(Province $province)
    {
        return response()->json($province->cities);
    }

    public function districts(City $city)
    {
        return response()->json($city->districts);
    }

    public function villages(District $district)
    {
        return response()->json($district->villages);
    }
}