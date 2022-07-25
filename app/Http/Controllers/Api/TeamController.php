<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResource;
use App\Models\Team;
use Illuminate\Support\Facades\Cache;

class TeamController extends Controller
{
    public function index()
    {
        $page = request()->get('page', 1);
        return Cache::remember('teams_p' . $page, 60 * 60 * 24, function () {
            return TeamResource::collection(Team::paginate(1));
        });
    }
}
