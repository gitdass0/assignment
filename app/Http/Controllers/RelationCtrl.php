<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Post;

use Illuminate\Http\Request;

class RelationCtrl extends Controller
{
     public function index()
    {
        $users = User::with('posts')->find(1);

        $teachers = Teacher::with('user')->get();

        return view('relation', compact('users','teachers'));
    }
}
