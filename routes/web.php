<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\{TestimonialController,SidegalleryController,GalleryController,AdminController,AuthController,FrontController,RegisterController,ContactController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FrontController::class,'home']);    


Route::get('/home.html',[FrontController::class,'home'])->name('home');    
Route::get('/about-us.html',[FrontController::class,'aboutus'])->name('aboutus');      
Route::get('/donation-details.html',[FrontController::class,'donation'])->name('donation.details');        
Route::get('/contact-us.html',[FrontController::class,'contact'])->name('contact.us');        
Route::get('/volunteer.html',[FrontController::class,'volunteer'])->name('volunteer');        
Route::get('/become-volunteer.html',[FrontController::class,'becomevolunteer'])->name('become.volunteer');        
Route::get('/gallery-view.html',[FrontController::class,'gallery'])->name('gallery');        




Route::group(['middleware' => 'guest'], function () {   
    Route::get("login", [AuthController::class, 'index'])->name("admin-auth");
    Route::get("admin/login", [AuthController::class, 'index'])->name("login");

    //  Route::get("login", [AuthController::class, 'admin_index'])->name("admin-auth-login");
    
    // Route::get("adminregister", [AuthController::class, 'register_view'])->name("register-auth");
    Route::post("register-auth", [AuthController::class, 'register_post'])->name("register.auth.post");

});
Route::post("login-auth", [AuthController::class, 'login'])->name("login.auth");
Route::get('/logout', [AuthController::class, 'logout']);


Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin-logout', [AuthController::class, 'logout']);
    
    Route::get('/admin/admindashboard', [AdminController::class, 'index_view'])->name("admin.admindashboard");
    
    Route::get('/gallery/admindashboard', [AdminController::class, 'index_view'])->name("gallery.index");
    Route::get('/sponsor/admindashboard', [AdminController::class, 'sponsor_view'])->name("sponsor.index");
    Route::get('/admindashboard/setevent', [AdminController::class, 'setevent_view'])->name("setevent.admin.view");
    Route::get('/admindashboard/gallery', [AdminController::class, 'sidegallery_view'])->name("gallery.admin.view");
    Route::get("/admindashboard/upcomingevent.html",function(){return view("admin.upcomingevent");})->name("upcomingevent");

    Route::post('/store', [GalleryController::class, 'store'])->name('store');
    Route::get('/edit', [GalleryController::class, 'edit'])->name('edit');
    Route::post('/update', [GalleryController::class, 'update'])->name('update');
    Route::delete('/delete', [GalleryController::class, 'delete'])->name('delete');
    Route::get('/fetchall', [GalleryController::class, 'fetchAll'])->name('fetchAll');
    Route::get('/testimonial/view/admin', [TestimonialController::class, 'testimonial_view'])->name('testimonial.view');
    Route::any('/testimonial/store/admin', [TestimonialController::class, 'admin_store'])->name('testimonial.admin.store');
    Route::get('testimonial/admin/edit/', [TestimonialController::class, 'admin_edit'])->name('testimonial.admin.edit');
    Route::post('testimonial/admin/update', [TestimonialController::class, 'admin_update'])->name('testimonial.admin.update');
    Route::delete('/delete/testimonial/admin', [TestimonialController::class, 'admin_delete'])->name('testimonial.admin.delete');
    Route::get('/testimonial/fetchall/admin', [TestimonialController::class, 'admin_fetchAll'])->name('testimonial.admin.fetchall');


    
    Route::any('/register/fetchall/admin', [RegisterController::class, 'admin_fetchAll'])->name('register.admin.fetchall');
    Route::delete('/delete/register/admin', [RegisterController::class, 'admin_delete'])->name('register.admin.delete');
    Route::get('/register/admin/show/{id}', [RegisterController::class, 'admin_show'])->name('register.admin.id');
    Route::get('/show/{id}', [GalleryController::class, 'show'])->name('show');

    Route::get('/contact/admin/show/{id}', [ContactController::class, 'contact_show'])->name('contact.admin.show');


    
    Route::get('/Register/store/admin', [RegisterController::class, 'register_show'])->name('register.admin.view');
    Route::get('/contact/view/admin', [ContactController::class, 'contact_view'])->name('contact.admin.view');
    Route::delete('/contact/admin/delete', [ContactController::class, 'admin_delete'])->name('contactus.admin.delete');
    Route::delete('/contact/admin/delete', [ContactController::class, 'admin_delete'])->name('contactus.admin.delete');
    Route::get('/contact/fetchall/admin', [ContactController::class, 'admin_fetchAll'])->name('contact.admin.fetchall');


    
    Route::any('/slidegallery/store/admin/', [SidegalleryController::class, 'admin_store'])->name('sidegallery.admin.store');
    Route::get('/slidegallery/admin/fetchall', [SidegalleryController::class, 'admin_fetchall'])->name('sidegallery.fetchall');
    Route::get('/sidegallery/admin/show/{id}', [SidegalleryController::class, 'admin_show'])->name('sidegallery.view');
    Route::delete('/slidegallery/delete/admin/', [SidegalleryController::class, 'admin_delete'])->name('sidegallery.delete');
    Route::get('Sponsor/admin/edit', [SponsorController::class, 'admin_edit'])->name('sponsor.admin.edit');

    Route::any('sponsor/admin/update', [SponsorController::class, 'admin_update'])->name('sponsor.admin.update');

});


Route::post('/contactus/store/admin', [ContactController::class, 'front_store'])->name('contactus.admin.store');
Route::any('volunteer/store', [RegisterController::class, 'volunteer_store'])->name('volunteer.register');
