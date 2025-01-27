<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminValidate;
use App\Http\Middleware\LoginValidate;
use App\Livewire\AboutUs;
use App\Livewire\Gallery;
use App\Livewire\Panel\Clientes;
use App\Livewire\Panel\Dashboard;
use App\Livewire\Panel\SectionServices as DashSectionServies;
use App\Livewire\Panel\Sections as DashSection;
use App\Livewire\Panel\Reservations;

use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\MyProfile;
use App\Livewire\Panel\ReservationCreate;
use App\Livewire\Reservation;
use App\Livewire\Section;
use App\Livewire\SectionServices;
use App\Livewire\Register;
use App\Livewire\Service;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(UserController::class,)->group(function(){
    Route::get('/logout', 'logoutUser')->name('logoutUser');
});
Route::get('/', Home::class)->name('home');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/section_services', SectionServices::class)->name('section_services');
Route::get('/section/{id}', Section::class)->name('section');
Route::get('/service/{id}', Service::class)->name('service');
Route::get('/nosotros', AboutUs::class)->name('about_us');
Route::get('/galeria', Gallery::class)->name('gallery');

Route::get('/my-profile', MyProfile::class)->name('my_profile')->middleware(LoginValidate::class);
Route::get('/reservate/{id}', Reservation::class)->name('reservate')->middleware(LoginValidate::class);

Route::get('/dashboard', Dashboard::class)->name('dashboard')->middleware(AdminValidate::class);
Route::get('/dashboard/section_services', DashSectionServies::class)->name('dashboard_section_services')->middleware(AdminValidate::class);
Route::get('/dashboard/sections', DashSection::class)->name('dashboard_section')->middleware(AdminValidate::class);
Route::get('/dashboard/clientes', Clientes::class)->name('dashboard_clientes')->middleware(AdminValidate::class);
Route::get('/dashboard/reservaciones', Reservations::class)->name('dashboard_reservaciones')->middleware(AdminValidate::class);

Route::get('/dashboard/crear_reservaciones', ReservationCreate::class)->name('dashboard_reservaciones_create')->middleware(AdminValidate::class);
