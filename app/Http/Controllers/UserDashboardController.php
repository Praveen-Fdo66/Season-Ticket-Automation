<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function loadPage($page)
    {
        // List of valid pages to prevent unauthorized access
        $validPages = ['dashboard', 'renew_ticket', 'get_season_ticket', 'cancel_season'];

        // Check if the requested page is valid
        if (in_array($page, $validPages)) {
            // Return the corresponding page view
            return view('user_dashboard.pages.' . $page);
        }

        // If page not found, return a 404 error
        return response('Page not found', 404);
    }
}

