<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EduController extends Controller
{
    public function home()
    {
        require_once app_path('../database/seeders/DB-major.php');

        $hciCourse = \DBMajor::getCourseBySlug('human-and-computer-interaction');
        $uxCourse = \DBMajor::getCourseBySlug('user-experience');

        return view('home', [
            'hciCourse' => $hciCourse,
            'uxCourse' => $uxCourse
        ]);
    }

    public function category($major)
    {
        require_once app_path('../database/seeders/DB-major.php');

        $majorData = \DBMajor::getMajorBySlug($major);

        if (!$majorData) {
            return redirect()->route('home')->with('message', 'Category not found.');
        }

        return view('category', ['major' => $majorData]);
    }

    public function courseDetail($slug)
    {
        require_once app_path('../database/seeders/DB-major.php');

        $course = \DBMajor::getCourseBySlug($slug);

        if (!$course) {
            return redirect()->route('home')->with('message', 'Course not found.');
        }

        return view('detail', ['course' => $course]);
    }

    public function writers()
    {
        require_once app_path('../database/seeders/DB-major.php');

        $writers = \DBMajor::getWriters();

        return view('writers', ['writers' => $writers]);
    }

    public function writerDetail($slug)
    {
        require_once app_path('../database/seeders/DB-major.php');

        $writer = \DBMajor::getWriterBySlug($slug);

        if (!$writer) {
            return redirect()->route('writers')->with('message', 'Writer not found.');
        }

        $courses = \DBMajor::getCoursesByWriter($writer['name']);

        return view('writers-desc', [
            'writer' => $writer,
            'courses' => $courses
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function popular(Request $request)
    {
        require_once app_path('../database/seeders/DB-major.php');

        $page = $request->get('page', 1);
        $popularData = \DBMajor::getPopularCoursesWithPagination($page, 3);

        return view('popular', $popularData);
    }
}
