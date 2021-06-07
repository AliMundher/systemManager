<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Student;
use App\Models\Hall;

class AdminEditStudent extends Component
{
    public $fullname;
    public $code;
    public $address;
    public $email;
    public $phone;
    public $status;
    public $description;
    public $hall_id;
    public $student_id;

    public function mount($student_id){
        $student = Student::where('id',$student_id)->first();
        $this->student_id = $student->id;
        $this->fullname = $student->fullname;
        $this->code = $student->code;
        $this->address = $student->address;
        $this->email = $student->email;
        $this->phone = $student->phone;
        $this->status = $student->status;
        $this->description = $student->description;
        $this->hall_id = $student->hall_id;
    }

    public function updated($fields){

        $this->validateOnly($fields,[
            'fullname' => 'required',
            'code' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'status' => 'required',
            'description' => 'required',
            'hall_id' => 'required',
        ]);
    }

    public function updateStudent(){
        $this->validate([
            'fullname' => 'required',
            'code' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'status' => 'required',
            'description' => 'required',
            'hall_id' => 'required',
        ]);
        $student = Student::find($this->student_id);
        $student->fullname = $this->fullname;
        $student->code = $this->code;
        $student->address = $this->address;
        $student->email = $this->email;
        $student->phone = $this->phone;
        $student->status = $this->status;
        $student->description = $this->description;
        $student->hall_id = $this->hall_id;
        $student->save();
        session()->flash('message','Student has been Updating successfully...');
    }

    public function render()
    {
        $halls = Hall::all();
        return view('livewire.admin.admin-edit-student',[
            'halls' => $halls
        ])->layout('layouts.base');
    }
}
