<?php

use App\Livewire\MemReg;
// use Barryvdh\DomPDF\PDF;


use App\Mail\MyTestEmail;
use App\Exports\ExcelExport;
use App\Livewire\ViewMemReg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

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

Route::get('/', function () {
    return view('home/pages/registration-details');
})->name('reg');


// Route::get('/mem-registration', function () {
//     return view('registration.mem-registration');
// })->name('memReg');

// Route::get('/non-mem-registration', function () {
//     return view('registration.non-mem-registration');
// })->name('nonMemReg');


Route::get('/emailsend', function (Request $request){
    
    $email = $request->query('email');
    $name = $request->query('name');
    
    Mail::to($email)->send(new MyTestEmail($name));
    
    return redirect()->route('reg')->with('success', 'Thank you for your registration, Dr. ' . $name . '.');
    
})->name('emailsend');

//ADMIN SIDE

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin');
    // Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/admin/viewMemReg', function () {
        return view('user_account.viewMemReg');
    })->name('viewMemReg');

    Route::get('/admin/viewMemReg/download/trainee/{trainee_cert}', function ($trainee_cert){
        // dd($trainee_cert);
        $pathToFile = public_path('storage/photos/trainee cert/'. $trainee_cert);
        return response()->download($pathToFile);
    });

    Route::get('/admin/viewMemReg/download/senior/{senior_citizen}', function ($senior_citizen){
        // dd($trainee_cert);
        $pathToFile = public_path('storage/photos/senior ids/'. $senior_citizen);
        return response()->download($pathToFile);
    });

    Route::get('/admin/viewMemReg/download/payment/{payment}', function ($payment){
        // dd($trainee_cert);
        $pathToFile = public_path('storage/photos/proof of payments/'. $payment);
        return response()->download($pathToFile);
    });

    Route::get('/admin/dashboard/export-excel', function () {
        return Excel::download(new ExcelExport, 'Registration Annual Convention as of '. Carbon::now()->format('mdy - his') .'.xlsx');
    })->name('exportExcel');

    // Route::get('/admin/dashboard/export-pdf', function (Request $request) {
    //     $info = $request->query('info');
    //     // dd($info);
    //     $pdf = PDF::loadView('exportPDF', $info);
    //     return $pdf->download('reg.pdf');
    // })->name('exportPDF');
});


