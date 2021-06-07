<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Father;

class AdminEditParent extends Component
{
    public $fullname;
    public $address;
    public $email;
    public $phone;
    public $gender;
    public $description;
    public $parent_id;

    public function mount($parent_id){
        $father = Father::where('id',$parent_id)->first();
        $this->parent_id = $father->id;
        $this->fullname = $father->fullname;
        $this->address = $father->address;
        $this->email = $father->email;
        $this->phone = $father->phone;
        $this->gender = $father->gender;
        $this->description = $father->description;
    }

    public function updated($fields){

        $this->validateOnly($fields,[
            'fullname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'description' => 'required',
        ]);
    }

    public function updateParent(){
        $this->validate([
            'fullname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'description' => 'required',
        ]);
        $father = Father::find($this->parent_id);
        $father->fullname = $this->fullname;
        $father->address = $this->address;
        $father->email = $this->email;
        $father->phone = $this->phone;
        $father->gender = $this->gender;
        $father->description = $this->description;
        $father->save();
        session()->flash('message','Student has been Updating successfully...');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-parent')->layout('layouts.base');
    }
}
