<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Father;

class AdminAddParent extends Component
{

    public $fullname;
    public $address;
    public $email;
    public $phone;
    public $gender;
    public $description;

    public function updated($fields){
        $this->validateOnly($fields,[
            'fullname' => 'required|unique:fathers',
            'address' => 'required',
            'email' => 'required|unique:fathers',
            'phone' => 'required',
            'gender' => 'required',
            'description' => 'required',
        ]);
    }

    public function addStudent(){
        $this->validate([
            'fullname' => 'required|unique:fathers',
            'address' => 'required',
            'email' => 'required|unique:fathers',
            'phone' => 'required',
            'gender' => 'required',
            'description' => 'required',
        ]);
        $father = new Father();
        $father->fullname = $this->fullname;
        $father->address = $this->address;
        $father->email = $this->email;
        $father->phone = $this->phone;
        $father->gender = $this->gender;
        $father->description = $this->description;
        $father->save();
        session()->flash('message','Student has been added successfully...');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-parent')->layout('layouts.base');
    }
}
