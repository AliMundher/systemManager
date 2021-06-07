<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Father;

class AdminParentComponent extends Component
{
    public function render()
    {
        $fathers = Father::all();
        return view('livewire.admin.admin-parent-component',[
            'fathers'=>$fathers
        ])->layout('layouts.base');
    }
}
