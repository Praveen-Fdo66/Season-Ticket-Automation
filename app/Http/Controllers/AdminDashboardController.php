<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function loadPage($page)
    {
        // Ensure Laravel looks in the correct directory
        $viewPath = "admin_dashboard.pages.{$page}";
    
        if (view()->exists($viewPath)) {
            return view($viewPath);
        } else {
            return response()->view('errors.404', [], 404);
        }
    }
    
}