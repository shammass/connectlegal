<?php

use App\Http\Controllers\admin\ArbitrationAreaController;
use App\Http\Controllers\admin\ContactUsController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ForumController;
use App\Http\Controllers\admin\LawyerController;
use App\Http\Controllers\admin\TestimonialsController;
use App\Http\Controllers\Common\LoginController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Lawyer\CalendlyController;
use App\Http\Controllers\Lawyer\DashboardController as LawyerDashboardController;
use App\Http\Controllers\Lawyer\HomeController;
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
Route::post('/login',                      [LoginController::class, 'userLogin'])->name('login');

Route::get('/how-it-works',             [CommonController::class, 'howItWorks'])->name('howItWorks');
Route::post('/forum',                   [CommonController::class, 'storeForum'])->name('store.forum');
Route::post('/contact-us',              [CommonController::class, 'storeContactUs'])->name('store.contact-us');
Route::post('/store-testimonial',       [CommonController::class, 'storeTestimonials'])->name('store.testimonials');
Route::get('/testimonial',              [CommonController::class, 'testimonials'])->name('testimonials');
Route::get('/book-a-meeting/{id}',      [CommonController::class, 'bookAMeeting'])->name('book-a-meeting');

#Q&A
Route::get('/question-&-answers',       [CommonController::class, 'questionAnswer'])->name('question-answer');

Route::get('/unauthenticated-user',           [LoginController::class, 'unauthenticated'])->name('unauthenticated');

Route::get('/send-mail',function(){
    $user = [
        'name' => 'Shammas',
        'body' => 'This is simple mail from Shammas'
    ];
    
    \Mail::to('s4shamma@gmail.com')->send(new \App\Mail\TestMail($user));
      
});

#################                           ADMIN                  ###################################

Route::prefix('admin')->group(function () {
    Route::get('/',                            [Controller::class, 'redirectToLogin']);

    Route::get('/login',                       [LoginController::class, 'adminLoginPage'])->name('admin.login_page');
    Route::post('/login',                      [LoginController::class, 'adminLogin'])->name('admin.login');
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/logout',                 [LoginController::class, 'logout'])->name('logout');

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/dash',      [DashboardController::class, 'test']);

        #Arbitration Area
        Route::get('/arbitration-area',                     [ArbitrationAreaController::class, 'index'])->name('admin.arbitration-area');
        Route::get('/create/arbitration-area',              [ArbitrationAreaController::class, 'create'])->name('admin.create.arbitration-area');
        Route::post('/store/arbitration-area',              [ArbitrationAreaController::class, 'store'])->name('admin.store.arbitration-area');
        Route::get('/edit/arbitration-area/{id}',           [ArbitrationAreaController::class, 'edit'])->name('admin.edit.arbitration-area');
        Route::post('/update/arbitration-area/{id}',        [ArbitrationAreaController::class, 'update'])->name('admin.update.arbitration-area');
        Route::get('/delete/arbitration-area/{id}',         [ArbitrationAreaController::class, 'delete'])->name('admin.delete.arbitration-area');
        
        #Lawyers
        Route::get('/lawyers',                     [LawyerController::class, 'index'])->name('admin.lawyer_list');
        Route::get('/view/lawyer/{id}',            [LawyerController::class, 'view'])->name('admin.view.lawyer');
        Route::get('/delete/lawyer/{id}',          [LawyerController::class, 'delete'])->name('admin.delete.lawyer');
        Route::post('/verify/lawyer/{id}',         [LawyerController::class, 'verify'])->name('admin.verify.lawyer');
        Route::get('/verify-lawyer/{id}',          [LawyerController::class, 'verifyLawyer'])->name('admin.verify-lawyer');
        
        #Forums
        Route::get('/forums/{status}',                     [ForumController::class, 'index'])->name('admin.forums');
        Route::post('/change-status/forum/{id}',           [ForumController::class, 'changeForumStatus'])->name('admin.change-status.forum');
        Route::post('/forum/title/{id}',                   [ForumController::class, 'addTitle'])->name('admin.forum.add-title');
        Route::get('/forum/edit-title/{id}',               [ForumController::class, 'editTitle'])->name('admin.forum.edit-title');
        Route::post('/forum/update-title/{id}',            [ForumController::class, 'updateTitle'])->name('admin.forum.update-title');
        Route::get('/filtered-forums/{status}',            [ForumController::class, 'forums'])->name('admin.filtered-forums');
        Route::get('/forum-modal/{id}',                    [ForumController::class, 'forumModal'])->name('admin.forum-modal');
        Route::get('/delete/forum/{id}',                   [ForumController::class, 'delete'])->name('admin.delete.forum');

        #Testimonials
        Route::get('/testimonials',                     [TestimonialsController::class, 'index'])->name('admin.testimonials');
        Route::get('/delete/testimonial/{id}',          [TestimonialsController::class, 'delete'])->name('admin.delete.testimonial');
        Route::post('/approve/testimonial/{id}',        [TestimonialsController::class, 'approve'])->name('admin.approve.testimonial');
       
        #Contact Us
        Route::get('/contact-us',                       [ContactUsController::class, 'index'])->name('admin.contact-us');
        Route::get('/delete/contact-us/{id}',           [ContactUsController::class, 'delete'])->name('admin.delete.contact-us');

    });
});
#################                           ADMIN                  ###################################




#################                           LAWYER                  ###################################
Route::group(['middleware' => ['web']], function () {
    Route::prefix('lawyer')->group(function () { 
        Route::get('/register',                    [LoginController::class, 'register'])->name('lawyer.register-page');
        Route::post('/registration',               [LoginController::class, 'registerLawyer'])->name('lawyer.register');
        
        Route::group(['middleware' => ['lawyerauth']], function () {
            Route::get('/logout',                 [LoginController::class, 'logout'])->name('logout');
            Route::get('/dashboard',              [LawyerDashboardController::class, 'index'])->name('lawyer.dashboard');
            Route::get('/profile',                [LawyerDashboardController::class, 'profile'])->name('lawyer.profile');
            Route::POST('/profile/update/{id}',   [LawyerDashboardController::class, 'updateProfile'])->name('lawyer.update_profile');
            
            Route::get('/scheduled-events',  [CalendlyController::class, 'scheduledEvents'])->name('lawyer.scheduled-events');

        });
    });
});

Route::get('/customer/login',    [HomeController::class, 'login'])->name('customer.login');
Route::get('/',                  [HomeController::class, 'home'])->name('home');
#################                           LAWYER                  ###################################







$controller_path = 'App\Http\Controllers';


// layout
Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');

// pages
Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');

// authentication
Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');
Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');

// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');

// User Interface
Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion');
Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts');
Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges');
Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons');
Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel');
Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse');
Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns');
Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer');
Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups');
Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals');
Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar');
Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

// extended ui
Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider');

// icons
Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons');

// form elements
Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');

// form layouts
Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');

// tables
Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');
