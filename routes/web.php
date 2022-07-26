<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstallController;


use App\Models\User;
use App\Models\Diploma;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DiplomaController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\UserController;
use Spatie\Permission\Models\Permission;
use Intervention\Image\ImageManagerStatic as Image;
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

//Admin Routes
Route::prefix('admin')->middleware(['permission:manage_system'])->group(function () {
    Route::get('/', [AdminController::class, 'adminPanel'])->middleware('auth')->name('admin');

    Route::get('/install', [InstallController::class, 'install']);
});
// Route::get('image', function() {
//     $img = Image::make('storage/course/flyers/bTEXpNSmBIjbZkg98ASAN5hIITM21QVtupNPwh32.jpg')->resize(200, 200);

//     return $img->response('webp');
// });
Route::prefix('aux')->group(function(){
    Route::get('select-video',function ()
    {
        return view('auxiliar.select-video');
    })->name('select.video');
});
Route::prefix('coordination')->middleware(['permission:manage_content'])->group(function () {
    Route::get('/', [AdminController::class, 'coordinatorPanel'])->middleware('auth')->name('coordination');
    Route::get('/diploma/inscriptions', [DiplomaController::class,'inscription'])->name('diploma.inscriptions');
});


Route::get('diploma/watch', [DiplomaController::class, 'show'])->middleware('ActivePayment')->name('diploma.show');
//end Admin Routes
Route::post('update/zoomLink', [DiplomaController::class, 'updateZoomLink'])->name('diploma.zoom-link.update');

//Diploma routes

//end diploma routes
Route::resource('diploma', DiplomaController::class)->except(['show']);
Route::post('diploma/update/flyer', [DiplomaController::class, 'updateFlyer'])->name('diploma.update.flyer');
Route::post('diploma/update/poster', [DiplomaController::class, 'updatePoster'])->name('diploma.update.poster');

// Route::get('diploma/create', [DiplomaController::class, 'create'])->name('diploma.create');
// Route::get('diploma/edit', [DiplomaController::class, 'edit'])->name('diploma.edit');

//end Diploma routes
Route::get('/', function () {

    $diplomas = Diploma::where('status_id', 1)->get();
    $courses = Course::all();
    $header = "hola";
    return view('welcome', compact('diplomas', 'courses', 'header'));
})->name('/');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $user = Auth::user();
    return view('dashboard', compact('user'));
})->name('dashboard');
Route::get('/product/select_schema', [ProductController::class, 'select_schema'])->name('product.select_schema');

Route::get('/diploma/preview/{dip_id}', [DiplomaController::class, 'preview'])->name('diploma.preview');
Route::get('/course/preview/{course_id}', [CourseController::class, 'preview'])->name('course.preview');

Route::get('/sb', function () {
    return view('sandbox');
});


Route::get('create_payment_method/', function () {
    $user = User::find(Auth::user()->id);
    $intent = $user->createSetupIntent();
    return view('payment.add-payment-method', compact('intent'));
})->name('create_payment_method');

Route::get('stripe', [StripeController::class, 'stripe']);
Route::get('add_payment_method/{pid}', [StripeController::class, 'addPaymentMethod'])->name('stripe.addPaymentMethod');
Route::get('/product/pricing/{id}', [ProductController::class, 'pricing'])->name('product.pricing');
Route::get('/product/checkout/plan/{id}', [ProductController::class, 'checkoutPlan'])->name('product.plan.checkout')->middleware('auth');
Route::get('/product/checkout/price/{id}', [ProductController::class, 'checkoutPrice'])->name('product.price.checkout')->middleware('auth');
Route::get('/product/buy_intent/success/{buy_intent_id}', [ProductController::class, 'buyIntentSuccess'])->name('product.buy_intent.success');
Route::get('/product/buy_intent/cancel/{buy_intent_id}', [ProductController::class, 'buyIntentCancel'])->name('product.buy_intent.cancel');
Route::resource('course', CourseController::class);
//Rutas PDF
Route::prefix('pdf')->group(function () {
    Route::post('/welcome_teacher', [PDFController::class, 'welcomeFormat'])->name('pdf.welcome-teacher');
    Route::get('/generateProof', [PDFController::class, 'generateProof'])->name('pdf.generateProof');
    Route::get('/generateMassProof', [PDFController::class, 'generateMassProof'])->name('pdf.generateMassProof');

    Route::post('/generate-diploma', [PDFController::class, 'generateDiploma'])->name('pdf.generateDiploma');
    Route::get('/create-diploma', [PDFController::class, 'createDiploma'])->name('pdf.createDiploma');
    Route::get('/create-certificate', [PDFController::class, 'createCertificate'])->name('pdf.createCertificate');
    Route::post('/generateCertificate', [PDFController::class, 'generateCertificate'])->name('pdf.generateCertificate');

    Route::get('/create-welcome-doc', [PDFController::class, 'createWelcome'])->name('pdf.createWelcome');
    Route::get('/create-constancia', [PDFController::class, 'createConstancia'])->name('pdf.createConstancia');
    Route::get('/create-mass-constancia', [PDFController::class, 'createMassConstancia'])->name('pdf.createMassConstancia');
});
Route::prefix('resources')->group(function () {
    Route::get('calendario-dacti', function () {
        return response()->download('storage/downloadable-resources/CALENDARIO DACTILOSCOPIA.pdf');
    });
});
Route::get('view-session', function () {
    return view('student.diploma.index');
});
Route::resource('user', UserController::class)->middleware(['auth', 'permission:manage_users']);
//Autenticacion Social
Route::get('auth/{provider}', [SocialAuthController::class, 'redirectToProvider'])->name('social.auth');
Route::get('auth/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback']);

//terms & privacy
Route::get('terms', function () {
    return view('terms');
})->name('terms');
Route::get('policy', function () {

    return view('policy');
})->name('policy');
Route::get('about', function () {

    return view('about');
})->name('about');
