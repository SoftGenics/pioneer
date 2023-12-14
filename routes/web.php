<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ManagerController;

use App\Http\Controllers\RatingController;

use App\Http\Controllers\DeleteController;
use App\Http\Controllers\CsvController;
use App\Http\Controllers\adsController;
use App\Http\Controllers\Controllermaterial;
use App\Http\Controllers\createSubscription;
use App\Http\Controllers\adminController;
use App\Http\Middleware\AdminAuthenticated;
use App\Http\Controllers\PersanalInfocontroller;
use App\Http\Controllers\resetcontrolar;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AllUserController;
use App\Http\Controllers\srequirementController;
use App\Http\Controllers\emp_post_job;
use App\Http\Controllers\usercreatecontroller;
use App\Http\Controllers\createrecord;

use App\Http\Controllers\helpchatcontroller;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\GlobleassController;
use App\Http\Controllers\Ratingsubmit;
use App\Http\Controllers\jobController;
use App\Http\Controllers\tuitionController;









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
//Admin perform


    
Route::POST('/admin-login',[adminController::class,'login'])->name('Loginadmin');
Route::POST('/addadmin',[adminController::class,'CreateAccount'])->name('create-damin');
Route::POST('/forget-password',[adminController::class,'forget'])->name('forget');


// index routing via Route feature
//Route::redirect('/dashboard', '/Dashboards/Elearning');

//add tution
Route::get('/sspostnew', function () {
    return view('course/spostnew');
});
//emp post
Route::get('epostnew',function () {
    return view('dashboards/spostnew');
});

Route::post('addrequirment',[srequirementController::class,'addrequirment'])->name('add_requirment');
Route::post('/newpostjob',[emp_post_job::class,'addrequirment'])->name('New-post-job');

/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
|
*/
Route::prefix('Dashboards')->group(function () {
Route::get('/',[adminController::class, 'dashboardindex'] );
   // Route::view('/', 'dashboards.elearning');
 //Route::view('School', 'dashboards/school');
    // Route::group(['middleware' => 'adminauth'], function () {
    //     Route::get('/', function () {
    //         return view('Dashboards.Elearning');
    //     });
 
    // });
    Route::view('/globle_ass', 'dashboards/globle_ass');
     Route::view('/jobs', 'dashboards.jobs');
      Route::view('/tuitions', 'dashboards.tuitions');
});

Route::prefix('Course')->group(function () {
    Route::redirect('/', '/Course/Explore');
    Route::view('Explore', 'course/explore');
    Route::view('List', 'course/list');
    Route::view('today', 'course/todayCreate');
    Route::view('week', 'course/weekAccount');
    

    Route::view('Students', 'course/studentlist');
    Route::view('Employee', 'course/emplo');
    Route::view('Teacher', 'course/TeacherList');


   
    Route::view('Detail/{id}', 'course/detail');
});


Route::prefix('Users')->group(function () {
    Route::redirect('/', '/Users/List');
    Route::view('List', 'quiz/list');
    Route::get('Detail/{id}', [Usercontroller::class,'user_detail']);
    Route::view('Result', 'quiz/result');

});
Route::prefix('Blogs')->group(function () {
    Route::redirect('/', '/blogs/List');
    Route::view('List', 'blogs/list');
    Route::view('Detail/{id}', 'blogs/detail');
    Route::any('delete/{id}',[BlogController::class,'delete']);
    

});
Route::prefix('Chats')->group(function () {
    Route::redirect('/', '/apps/chats');
    Route::view('chats', 'apps/chats');
    Route::view('mails', 'apps/mails');
    Route::view('manager', 'apps/manager');

});

Route::prefix('Manager')->group(function () {
    Route::redirect('/', '/managerdetails/manager');
    Route::view('Manager', 'managerdetails/manager');
});



Route::prefix('Path')->group(function () {
    Route::redirect('/', '/Path/List');
    Route::view('List', 'path/list');
    Route::view('Detail', 'path/detail');
});

Route::prefix('Instructor')->group(function () {
    Route::redirect('/', '/Instructor/List');
    Route::view('List', 'instructor/list');
    Route::view('Detail', 'instructor/detail');
});

Route::prefix('Misc')->group(function () {
    Route::redirect('/', '/Misc/Player');
    Route::view('Player', 'misc/player');
    Route::view('Material', 'misc/material');
    Route::view('Syllabus', 'misc/syllabus');
    Route::view('Coupon', 'misc/coupon');
    Route::view('/create' ,'misc/create');
});


Route::prefix('Pages')->group(function () {
    Route::view('/', 'pages/index');

    Route::prefix('Authentication')->group(function () {
        Route::view('/', 'authentication/index');
        Route::view('Login', 'authentication/login');
        Route::view('Register', '/authentication/register');
        Route::view('ForgotPassword', '/authentication/forgot_password');
        Route::view('ResetPassword', '/authentication/reset_password');
    });

});

//payment list
Route::view('/payment-history', 'dashboards/paymentpage');
Route::view('/feel-free', 'feelFree');


//blog
Route::any("/blockuser/{id}", [BlockController::class, 'blockUser']);
Route::any("/unblockuser/{id}", [BlockController::class, 'UnblockUser']);

Route::post("/updateuser",[UserController::class, 'updateuser'])->name('edit-user'); 

Route::any("/bloglike/{id}", [BlogController::class, 'like']);
Route::any("/comments", [BlogController::class, 'addcomment'])->name('add-comments');
Route::any("/unblock_blog/{id}", [BlogController::class, 'unblock_blog']);
Route::any("/block_blog/{id}", [BlogController::class, 'block_blog']);



Route::post("/sendmail", [MailController::class, 'sendmail'])->name('send_Mail');
Route::any("/user/delete/{id}", [DeleteController::class, 'delete']);









//Team 
Route::get('/edit_team/{id}',[ManagerController::class,'editform']);
Route::post('/createAccount', [ManagerController::class, 'createAcc']);
Route::Post('edit_team/{id}',[ManagerController::class,'update']); 
//send mail
//Route::get("/sendmail",[MailController::class,'gmailinbox']);




Route::any('/team-delete/{id}' ,[ManagerController::class, 'delete']);
Route::any('/team-edit/{id}' ,[ManagerController::class, 'Edit']);

//give ratings

Route::post('/giveRating', [RatingController::class, 'AddRating']);
Route::post('/update-ads', [adsController::class, 'update_ads'])->name('update-ads');
//adds
Route::any('/delete-ads/{id}', [adsController::class, 'delete_ads']);
Route::any('/approve-ads/{id}', [adsController::class, 'approve_ads']);
//csv
Route::get('/export-csv', [CsvController::class, 'export']);
Route::get('/export-csv-teacher', [CsvController::class, 'exportteacher']);
Route::get('/export-csv-student', [CsvController::class, 'exportstudent']);
Route::get('/export-csv-employee', [CsvController::class, 'exportemployee']);
Route::get('/export-csv-jobsheekher', [CsvController::class, 'exportjobsheekher']);

//team
Route::get('/addteam', [CsvController::class, 'addteam']);
Route::get('/deleteteam/{id}', [CsvController::class, 'deleteteam']);
Route::get('/updateteam/{id}', [CsvController::class, 'updateaddteam']);

//material


Route::post('/ganeratecode', [Controllermaterial::class, 'ganeratecode'])->name('ganerat-ecode');
Route::get('ganeratecode/delete/{id}', [Controllermaterial::class, 'ganeratecodedelete']);
Route::get('ganeratecode/approve/{id}', [Controllermaterial::class, 'ganeratecodeapprove']);

//users data
Route::get('/teachlist',[Usercontroller::class, 'teacher']);

//create subscription
Route::post('/create-subscription', [createSubscription::class, 'create'])->name('create-subs');
Route::get('/Misc/Syllabus/{id}', [createSubscription::class, 'display']);
Route::post('/edit-subscription/{id}', [createSubscription::class, 'edit']);
Route::post('/delete-subscription/{id}', [createSubscription::class, 'delete']);
Route::POST('/admin-login',[adminController::class,'login'])->name('Loginadmin');

Route::post('addinfo',[PersanalInfocontroller::class,'addinfo'])->name('add_info');

Route::any('logout',[adminController::class,'logout']);
Route::post('/send-OTP', [resetcontrolar::class, 'resetview']);  
Route::view('/authentication/send_otp', '/authentication.send_otp');
Route::post('/conform-otp', [resetcontrolar::class, 'conform']);
//Route::view('/authentication/conform_pass',[resetcontrolar::class,'resetpass'] );
Route::post('/success', [resetcontrolar::class, 'success']);

Route::get('msg_send/{id}',[ChatController::class,'send'])->name('msg_send');
Route::post('msg_hist',[ChatController::class,'history'])->name('msg_hist');
Route::get('msg_rec/{id}',[ChatController::class,'rec']);
    
    


Route::get('/',[adminController::class,'index']);
Route::get('/form-edit', [adminController::class, 'profile']);
Route::post('/profile-Edit', [adminController::class, 'profileEdit']);

Route::post('/comment-delete',[ChatController::class,'deleteChat']);
Route::get('/all-user-location',[AllUserController::class,'index']);

// add user

Route::view('create-user','dashboards/createuser');
Route::post('/create-user',[usercreatecontroller::class,'adduser'])->name('add-user');

Route::get('/charts-view/{id}',[helpchatcontroller::class,'userchart']);

//create recode
Route::post('/update-record', [createrecord::class, 'create']);  
Route::get('/Dashboards/Record', [createrecord::class, 'view']); 
Route::get('/delete/{id}', [createrecord::class, 'delete']); 
Route::get('/edit/{id}', [createrecord::class, 'edit']); 
Route::post('/edit', [createrecord::class, 'update']);

Route::post('/save-data', [GlobleassController::class, 'save_data']);

// creat query
Route::post('/create-query', [QueryController::class, 'create']); 
Route::get('/Dashboards/query', [QueryController::class, 'show']); 
Route::get('/replayee/{id}', [QueryController::class, 'replayee']);
Route::post('/replayee', [QueryController::class, 'update']);


//job function
Route::get('job/delete/{id}', [jobController::class, 'deletejob']);
Route::get('job/csv', [jobController::class, 'csvjob']);

//tuition function
Route::get('tuition/delete/{id}', [tuitionController::class, 'deletetuition']);



