<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class VisitController extends Controller
{

    public function store(Link $link, Request $request)
    {
        if ($link->link !== $request->input('link')) {
            return abort(403);
        }

        return $link->visits()
            ->create([
                'user_agent' => $request->userAgent()
            ]);
    }

}
