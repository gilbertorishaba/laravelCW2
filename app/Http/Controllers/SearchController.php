<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{



public function search(Request $request)
{
    $query = $request->input('query');
    $students = Student::where('name', 'LIKE', "%{$query}%")
                       ->orWhere('email', 'LIKE', "%{$query}%")
                       ->get();

    return view('backend.index', compact('students'));
}

}

