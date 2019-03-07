<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{

    public function home()
    {

        $tasks = App::get('database')->selectAll('tasks');
        $users = App::get('database')->selectAll('users');



        return view('index', ['users' => $users, 'tasks' => $tasks]);

        //delegate
        //return a response
    }

    public function about()
    {
        $company = "Rocky Mountain Web Design";

        return view('about', ['company' => $company]);
    }

    public function contact()
    {
        return view('contact');
    }
}
