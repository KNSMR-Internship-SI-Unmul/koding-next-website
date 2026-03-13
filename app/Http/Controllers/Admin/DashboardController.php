<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\Promotion;
use App\Models\Event;
use App\Models\StudentProject;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProgram = 9;
        $totalPromotion = 3;
        $totalEvent = 5;
        $totalProject = 1;


        return view('admin.dashboard', compact(
            'totalProgram',
            'totalPromotion',
            'totalEvent',
            'totalProject'
        ));
    }
}
