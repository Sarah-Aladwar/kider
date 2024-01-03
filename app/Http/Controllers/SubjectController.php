<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Subject;
use App\Models\Teacher;
use App\Trait\Common;

class SubjectController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subject = Subject::get();
        return view('subjectlist', compact('subject'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher = Teacher::select('id', 'name')->get();
        return view('addsubject', compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();

        //form data validation
        $data = $request->validate([
            'class_subject' => 'required|string',
            'min_age' => 'required|decimal:0,2',
            'max_age' => 'required|decimal:0,2',
            'start_time' => 'required',
            'end_time' => 'required',
            'price' => 'required|decimal:0,2',
            'capacity' => 'required|decimal:0,2',
            'teacher_id' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], $messages);


        $filename = $this->uploadfile($request->image, 'assets/images');

        $data['image'] = $filename;

        Subject::create($data);

        //return redirect('admin/testmoniallist');
    }

    //custom error messages
    public function messages(){
        return ['name.required' => 'Name is required',
        'testimony.required' => 'Testimony is required'
      ];
    }

    /**
     * Display the specified resource.
     */
   /* public function show()
    {
        $sub = Subject::latest()->take(6)->get();
        return view('classes', compact('sub'));
    } */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subject = Subject::findOrFail($id);
        $teacher = Teacher::get();
        return view('updatesubject', compact('subject', 'teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->messages();

        $data = $request->validate([
            'class_subject' => 'required|string',
            'min_age' => 'required|decimal:0,2',
            'max_age' => 'required|decimal:0,2',
            'start_time' => 'required',
            'end_time' => 'required',
            'price' => 'required|decimal:0,2',
            'capacity' => 'required|decimal:0,2',
            'teacher_id' => 'required',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            ], $messages); 
     
            //update image if new file is selected
            if($request->hasFile('image')){
             $filename = $this->uploadfile($request->image, 'assets/images');
             $data['image'] = $filename;
            }
               
            Subject::where('id', $id)->update($data);   
     
            return redirect('admin/subjectlist');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Subject::where('id', $id)->delete();
        return redirect('admin/subjectlist');
    }

    public function trashed()
    {
        $subject = Subject::onlyTrashed()->get();
        return view('trashedsubject', compact('subject'));
    }

    public function restore(string $id): RedirectResponse
    {
        Subject::where('id', $id)->restore();
        return redirect('admin/subjectlist');
    }

    public function fdsubject(string $id): RedirectResponse
    {
        Subject::where('id', $id)->forceDelete();
        return redirect('admin/trashedsubject');
    }
}
