<?php

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
use App\User;
use App\report_info as Report;
use App\purchase_info as Purchase;
use App\growth as Growth;
use App\exp_inc;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dummyfrontpage', function () {
    return view('dummy.front');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/createReportStep1', 'ReportGeneratorController@createReportStep1')->name('createReportStep1');
Route::get('/createReportStep2', 'ReportGeneratorController@createReportStep2')->name('createReportStep2');
Route::get('/createReportStep3', 'ReportGeneratorController@createReportStep3')->name('createReportStep3');
Route::get('/reportDetails', 'ReportGeneratorController@reportDetails');
Route::post('/storeReport1', 'ReportGeneratorController@storeReport1')->name('storeReport1');
Route::post('/storeReport2', 'ReportGeneratorController@storeReport2')->name('storeReport2');
Route::post('/storeReport3', 'ReportGeneratorController@storeReport3')->name('storeReport3');
Route::get('/myReports', 'ReportGeneratorController@myReports')->name('myReports');
Route::post('/editReportStep1', 'ReportGeneratorController@editReportStep1')->name('editReportStep1');
Route::get('/editReportStep1', 'ReportGeneratorController@editReportStep1get');
Route::get('/editReportStep2', 'ReportGeneratorController@editReportStep2')->name('editReportStep2');
Route::get('/editReportStep3', 'ReportGeneratorController@editReportStep3')->name('editReportStep3');
Route::post('/updateReportStep1', 'ReportGeneratorController@updateReportStep1')->name('updateReportStep1');
Route::post('/updateReportStep2', 'ReportGeneratorController@updateReportStep2')->name('updateReportStep2');
Route::post('/updateReportStep3', 'ReportGeneratorController@updateReportStep3')->name('updateReportStep3');

Route::get('/home', 'HomeController@index')->name('home');






Route::get('/createUser', function () {
    $password= '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password

   User::create([
       'name' => 'Young Yeller',
        'email' => 'shuayb@gmail.com',
        'password' => "$password"
        ]);
});


Route::get('/createReport', function () {
   $user=User::find(1);
$user->report_info()->create([
    'title' => 'Report Title',
     'address' => '132 Sample Addres',
     'mls' => 'MLS123',
     'city' => 'Toronto',
     'postal' => 'm1b1t2',
     ]);

     
});


Route::get('/createPurchase', function () {
        $report=Report::find(1);
        $report->purchase_info()->create([
        'purchase_price' => 1234567,
        'arv' => 128678,
        'closing_cost' => 1000,
        'repairs' => 2000,
        'down_payment' =>20,
        'amortization' =>10,
        ]);
        });

Route::get('/createGrowth', function () {
$report=Report::findc(1);
$report->growth()->create([
'income' => 1.8,
'property_value' => 2,
'expenses' => 2,
]);
});

Route::get('/createExpenses', function () {
    echo '+';
   echo $report=Report::find(1);
   
    $report->exp_inc()->create([
    'income' => 1400,
    'rental_income' => 200,
    'other_income' => 20,
    'electricity' => 200,
    'water' => 102,
    'gas' => 20,
    'insurance' => 76,
    'taxes' => 123,
    'other' => 150,
    'vacancy' => 100,
    'capex' => 100,
    'management' => 100,
    ]);
    });