<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }

    public function addTask()
    {
        return view('task.add');
    }

    public function listTasks()
    {
        return view('task.list');
    }
}
