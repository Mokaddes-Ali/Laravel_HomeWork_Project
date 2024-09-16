<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Flasher\Laravel\LaravelFlasher;

use Flasher\Prime\FlasherInterface;

class StudentController extends Controller
{
    protected $flasher;

    public function __construct(FlasherInterface $flasher)
    {
        $this->flasher = $flasher;
    }

    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required',
            'address' => 'required',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'course' => 'required',
            'year' => 'required',
            'nationality' => 'required',
            'language' => 'required',
            'blood_group' => 'required',
            'religion' => 'required',
            'hobbies' => 'nullable',
            'parents_info' => 'nullable',
            'emergency_contact' => 'nullable',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'is_active' => 'nullable|boolean',
            'additional_notes' => 'nullable',
            'guardian_name' => 'nullable',
            'guardian_phone' => 'nullable',
            'guardian_address' => 'nullable',
            'guardian_relation' => 'nullable',
            'scholarship_status' => 'nullable',
            'admission_year' => 'nullable|date_format:Y',
            'graduation_year' => 'nullable|date_format:Y',
            'previous_education' => 'nullable',
            'extracurricular_activities' => 'nullable',
            'academic_achievements' => 'nullable',
            'transportation_mode' => 'nullable',
            'health_issues' => 'nullable',
        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->date_of_birth = $request->date_of_birth;
        $student->gender = $request->gender;
        $student->course = $request->course;
        $student->year = $request->year;
        $student->nationality = $request->nationality;
        $student->language = $request->language;
        $student->blood_group = $request->blood_group;
        $student->religion = $request->religion;
        $student->hobbies = $request->hobbies;
        $student->parents_info = $request->parents_info;
        $student->emergency_contact = $request->emergency_contact;

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imagePath = $image->store('images', 'public');
            $student->profile_image = $imagePath;
        }

        $student->is_active = $request->is_active ?? true;
        $student->additional_notes = $request->additional_notes;
        $student->guardian_name = $request->guardian_name;
        $student->guardian_phone = $request->guardian_phone;
        $student->guardian_address = $request->guardian_address;
        $student->guardian_relation = $request->guardian_relation;
        $student->scholarship_status = $request->scholarship_status;
        $student->admission_year = $request->admission_year;
        $student->graduation_year = $request->graduation_year;
        $student->previous_education = $request->previous_education;
        $student->extracurricular_activities = $request->extracurricular_activities;
        $student->academic_achievements = $request->academic_achievements;
        $student->transportation_mode = $request->transportation_mode;
        $student->health_issues = $request->health_issues;

        $student->save();
        $this->flasher->addSuccess('Student created successfully!');
        return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'course' => 'required',
            'year' => 'required',
            'nationality' => 'required',
            'language' => 'required',
            'blood_group' => 'required',
            'religion' => 'required',
            'hobbies' => 'nullable',
            'parents_info' => 'nullable',
            'emergency_contact' => 'nullable',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'is_active' => 'nullable|boolean',
            'additional_notes' => 'nullable',
            'guardian_name' => 'nullable',
            'guardian_phone' => 'nullable',
            'guardian_address' => 'nullable',
            'guardian_relation' => 'nullable',
            'scholarship_status' => 'nullable',
            'admission_year' => 'nullable|date_format:Y',
            'graduation_year' => 'nullable|date_format:Y',
            'previous_education' => 'nullable',
            'extracurricular_activities' => 'nullable',
            'academic_achievements' => 'nullable',
            'transportation_mode' => 'nullable',
            'health_issues' => 'nullable',
        ]);

        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->date_of_birth = $request->date_of_birth;
        $student->gender = $request->gender;
        $student->course = $request->course;
        $student->year = $request->year;
        $student->nationality = $request->nationality;
        $student->language = $request->language;
        $student->blood_group = $request->blood_group;
        $student->religion = $request->religion;
        $student->hobbies = $request->hobbies;
        $student->parents_info = $request->parents_info;
        $student->emergency_contact = $request->emergency_contact;

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imagePath = $image->store('images', 'public');
            $student->profile_image = $imagePath;
        }

        $student->is_active = $request->is_active ?? true;
        $student->additional_notes = $request->additional_notes;
        $student->guardian_name = $request->guardian_name;
        $student->guardian_phone = $request->guardian_phone;
        $student->guardian_address = $request->guardian_address;
        $student->guardian_relation = $request->guardian_relation;
        $student->scholarship_status = $request->scholarship_status;
        $student->admission_year = $request->admission_year;
        $student->graduation_year = $request->graduation_year;
        $student->previous_education = $request->previous_education;
        $student->extracurricular_activities = $request->extracurricular_activities;
        $student->academic_achievements = $request->academic_achievements;
        $student->transportation_mode = $request->transportation_mode;
        $student->health_issues = $request->health_issues;

        $student->save();
        $this->flasher->addSuccess('Student updated successfully!');
        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        $this->flasher->addSuccess('Student deleted successfully!');
        return redirect()->route('students.index');
    }
}
