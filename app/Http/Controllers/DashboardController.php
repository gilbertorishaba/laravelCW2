<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Report;

class DashboardController extends Controller
{
    public function index()
    {
        $studentsCount = Student::count();
        $coursesCount = Course::count();
        $enrollmentsCount = Enrollment::count();
        $reportsCount = Report::count();

        return view('dashboard', compact('studentsCount', 'coursesCount', 'enrollmentsCount', 'reportsCount'));
    }
}
