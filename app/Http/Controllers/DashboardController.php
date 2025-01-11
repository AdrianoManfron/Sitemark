<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function __invoke()
    {

        /** @var User $user */
        $user = auth()->user();

        return view('dashboard', [
            'user' => $user
        ]);
    }
}
