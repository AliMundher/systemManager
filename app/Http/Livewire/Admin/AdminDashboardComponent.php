<?php

namespace App\Http\Livewire\Admin;

use App\Models\Student;
use App\Models\Father;
use Livewire\Component;

class AdminDashboardComponent extends Component
{


    public function delete($id,$person){
        if($person === "father"){
            $product = Father::find($id);
            $product->delete();
            session()->flash('success_delete','Product has been deleted successfully...');
        }
        else if($person === "student"){
            $product = Student::find($id);
            $product->delete();
            session()->flash('success_delete','Product has been deleted successfully...');
        }
    }

    public function render()
    {
        $students = Student::all();
        $fathers = Father::all();
        return view('livewire.admin.admin-dashboard-component',[
            'students' => $students,
            'fathers'=>$fathers
        ])->layout('layouts.base');
    }
}
