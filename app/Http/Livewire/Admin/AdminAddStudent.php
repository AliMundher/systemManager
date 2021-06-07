<?php

namespace App\Http\Livewire\Admin;

use App\Models\Student;
use App\Models\Hall;
use Livewire\Component;

class AdminAddStudent extends Component
{
    public $fullname;
    public $code;
    public $address;
    public $email;
    public $phone;
    public $status;
    public $description;
    public $hall_id;

    public function updated($fields){
        $this->validateOnly($fields,[
            'fullname' => 'required',
            'code' => 'required|unique:students',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'status' => 'required',
            'description' => 'required',
            'hall_id' => 'required',
        ]);
    }

    public function addStudent(){
        $this->validate([
            'fullname' => 'required',
            'code' => 'required|unique:students',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'status' => 'required',
            'description' => 'required',
            'hall_id' => 'required',
        ]);
        $student = new Student();
        $student->fullname = $this->fullname;
        $student->code = $this->code;
        $student->address = $this->address;
        $student->email = $this->email;
        $student->phone = $this->phone;
        $student->status = $this->status;
        $student->description = $this->description;
        $student->hall_id = $this->hall_id;
        $student->save();
        session()->flash('message','Student has been added successfully...');
    }

    public function render()
    {
        $halls = Hall::all();
        return view('livewire.admin.admin-add-student',[
            'halls' => $halls
        ])->layout('layouts.base');
    }
}
