<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderjobController;
use App\Http\Controllers\OrdercrewController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ShipnameController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\NationalController;
use App\Http\Controllers\PortController;
use App\Http\Controllers\ReController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/papers', function () {
    return view('papers');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/orderprint/{id}', [OrderController::class, 'printcrew']);

Route::resource('/crew', CrewController::class);
Route::resource('/order', OrderController::class);
Route::resource('/orderjob', OrderjobController::class);
Route::resource('/ordercrew', OrdercrewController::class);
Route::resource('/print', PrintController::class);
Route::resource('/ticket', TicketController::class);
Route::resource('/exp', ExperienceController::class);
Route::resource('/klien', KlienController::class);
Route::resource('/company', CompanyController::class);
Route::resource('/shipname', ShipnameController::class);
Route::resource('/job', JobController::class);
Route::resource('/doc', DocumentController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/contract', ContractController::class);
Route::resource('/certificate', CertificateController::class);
Route::resource('/medical', MedicalController::class);
Route::resource('/port', PortController::class);
Route::resource('/national', NationalController::class);
Route::resource('/currency', CurrencyController::class);

Route::get('/order/{inv}/step2', [OrderController::class, 'step2'])->name('order.step2');
Route::get('/admin/order/{inv}', [OrderController::class, 'adminview'])->name('order.adminview');
Route::get('/setting', [HomeController::class, 'setting'])->name('setting.index');
Route::post('/setting/shipname', [HomeController::class, 'storeshipname'])->name('shipname.store');
Route::get('/print/crew/{id}', [PrintController::class, 'klien'])->name('print.crew');
Route::get('/order/{id}/print/crew', [OrderController::class, 'pcrew'])->name('print.ordercrew');
Route::get('/exp/create/{id}', [ExperienceController::class, 'create'])->name('experience.create');
Route::post('/ordercrew/update', [OrdercrewController::class, 'updateall'])->name('ordercrewall.update');
Route::get('/crews/export', [App\Http\Controllers\CrewController::class, 'downloadxls']);
Route::post('/ordercrew/deleteall', [OrdercrewController::class, 'destroyall']);
Route::get('/cetakcrew/{id}', [OrderController::class, 'pdfcrew']);
Route::get('/crew/doc/{crewid}/{id}', [CrewController::class, 'document']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/ticket/update/{id}', [TicketController::class, 'update'])->name('ticket.update');
Route::get('/re/create', [ReController::class, 'stepOne'])->name('re.stepone');
Route::post('/re', [ReController::class, 'storeStepOne'])->name('re.storeone');
Route::get('/re/steptwo/{id}', [ReController::class, 'stepTwo'])->name('re.steptwo');
Route::get('/filter/crews/{id}', [HomeController::class, 'filter'])->name('filter.crew');

Route::resource('/admin', AdminController::class);
