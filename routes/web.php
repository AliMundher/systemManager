<?php

use App\Http\Livewire\Admin\AdminAddParent;
use App\Http\Livewire\Admin\AdminAddStudent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditParent;
use App\Http\Livewire\Admin\AdminEditStudent;
use App\Http\Livewire\MainDashboard;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;


// Route::get('/', function(){
//     return redirect('home');
// });

Route::get('/',HomeComponent::class);
Route::get('/main-dashboard',MainDashboard::class)->name('maindashboard');

// For Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function () {
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/add/student',AdminAddStudent::class)->name('admin.addstudent');
    Route::get('/admin/edit/student/{student_id}',AdminEditStudent::class)->name('admin.editstudent');

    Route::get('/admin/add/parent',AdminAddParent::class)->name('admin.addparent');
    Route::get('/admin/edit/parent/{parent_id}',AdminEditParent::class)->name('admin.editparent');

});

// For User
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});
