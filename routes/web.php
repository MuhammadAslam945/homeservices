<?php

use Illuminate\Support\Facades\Route;
use App\Http\livewire\HomeComponent;
use App\Http\livewire\Admin\AdminDashboardComponent;
use App\Http\livewire\Admin\AdminServiceCategoryComponent;
use App\Http\livewire\Admin\AdminAddServiceCategoryComponent;
use App\Http\livewire\Admin\AdminEditCategoryComponent;
use App\Http\livewire\Admin\AdminServicesComponent;
use App\Http\livewire\Admin\AdminServicesByCategoryComponent;
use App\Http\livewire\Admin\AdminAddserviceComponent;
use App\Http\livewire\Admin\AdminEditServiceComponent;
use App\Http\livewire\Customer\CustomerDashboardComponent;
use App\Http\livewire\Sprovider\SproviderDashboardComponent;
use App\Http\livewire\ServiceCategoriesComponent;
use App\Http\livewire\ServicesByyCategoryComponent;
use App\Http\livewire\ServiceDetailsComponent;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',HomeComponent::class)->name('home');
Route::get('/services-categories',ServiceCategoriesComponent::class)->name('home.service_categories');
Route::get('/{category_slug}/services',ServicesByyCategoryComponent::class)->name('home.services_by_category');
Route::get('/services{service_slug}',ServiceDetailsComponent::class)->name('home.service_details');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/customer/dashboard',CustomerDashboardComponent::class)->name('customer.dashboard');
});



Route::middleware(['auth:sanctum', 'verified','authsprovider'])->group(function(){
    Route::get('/sprovider/dashboard',SproviderDashboardComponent::class)->name('sprovider.dashboard');
});

Route::middleware(['auth:sanctum','verified','authadmin'])->group(function () {
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/service-categories',AdminServiceCategoryComponent::class)->name('admin.service_categories');
    Route::get('/admin/service-category/add',AdminAddServiceCategoryComponent::class)->name('admin.add_service_category');
    Route::get('/admin/service-category/edit/{category_id}',AdminEditCategoryComponent::class)->name('admin.edit_service_category');
    Route::get('/admin/all-services',AdminServicesComponent::class)->name('admin.all_services');
    Route::get('admin/{category_slug}/services',AdminServicesByCategoryComponent::class)->name('admin.service_by_category');
    Route::get('/admin/add-service',AdminAddserviceComponent::class)->name('admin.add_service');
    Route::get('/admin/service/edit/{service_slug}',AdminEditServiceComponent::class)->name('admin.edit_service');
});