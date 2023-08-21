<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
 
class HomeController extends Controller
{

    /**
     * @var class
     */
    private $client;

    /**
     * @var class
     */
    private $school;


    public function __construct()
    {
        $this->client = new \Wonde\Client(env('WONDE_TOKEN'));
        $this->school = $this->client->school(env('WONDE_SCHOOL'));
    }

    /**
     * Show the schools homepage
     */
    public function index(Request $request): View
    {
        $employees = $this->school->employees->all([],['has_class' => true]);
        
        return view('school', [
            'employees' => $employees
        ]);
    }

    /**
     * Show the employees classes
     */
    public function classes($id): View
    {
        $employee = $this->school->employees->get($id, ['classes']);

        foreach ($employee->classes->data as $class) {
            $class = $this->school->classes->get($class->id, ['students','lessons'], ['has_lessons' => true]);
        }

        return view('classes', [
            'classes' => $employee->classes->data
        ]);
    }

    /**
     * Show the class students
     */
    public function students($id): View
    {
        $class = $this->school->classes->get($id, ['students']);

        return view('students', [
            'students' => $class->students->data
        ]);
    }
}