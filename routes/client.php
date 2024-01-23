<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Order\UserOrderController;
use App\Http\Controllers\Client\ClientTeamController;
use App\Http\Controllers\Client\SupportCaseController;
use App\Http\Controllers\Client\ClientSupportController;
use App\Http\Controllers\Client\ForgotPasswordController;
use App\Http\Controllers\Client\ClientSupportMessageController;


$client = !empty(Auth::guard('client')->user()->client_type) ? Auth::guard('client')->user()->client_type : 'client';


Route::group(['prefix' => $client, 'middleware' => 'guest'], function () {
    Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
});


Route::get('/job-applicant/login',     [ClientController::class, 'jobApplicantLogin'])->name('job-applicant.login');
Route::get('/client/login',     [ClientController::class, 'ClientLogin'])->name('client.login');
Route::post('client/register',  [ClientController::class, 'clientRegisterStore'])->name('clientRegister.store');
Route::post('client/login',     [ClientController::class, 'clientLoginStore'])->name('client.loginstore');

Route::group(['prefix' => $client, 'middleware' => ['auth:client']], function () {

    Route::get('dashboard',       [ClientController::class, 'ClientDashboard'])->name('client.dashboard');
    Route::get('profile',         [ClientController::class, 'ClientProfile'])->name('client.profile');
    // Route::get ('profile_update',  [ClientController::class, 'ClientProfileUpdate'])->name('client.profile_update');
    Route::post('profile/store',   [ClientController::class, 'ClientProfileStore'])->name('client.profile.store');
    Route::put('profile/update/{id}',   [ClientController::class, 'ClientProfileUpdate'])->name('client.profile.update');
    Route::get('change/password',  [ClientController::class, 'ClientChangePassword'])->name('client.change.password');
    Route::post('update/password', [ClientController::class, 'ClientUpdatePassword'])->name('client.update.password');
    Route::get('logout',     [ClientController::class, 'clientDestroy'])->name('client.logout');

    Route::get('rfq-product', [ClientController::class, 'rfqProductIndex'])->name('rfq.product.index');



    Route::get('track',       [ClientController::class, 'ClientTrack'])->name('client.track');
    Route::get('project',       [ClientController::class, 'clientProject'])->name('client.project');
    Route::get('project/overview',       [ClientController::class, 'projectOverview'])->name('client.project.overview');
    Route::get('support',       [ClientController::class, 'clientSupport'])->name('client.support');
    Route::get('support-case',       [ClientController::class, 'clientCase'])->name('client.case');
    Route::get('project/{id}',       [ClientController::class, 'projectDetails'])->name('client.project.details');
    Route::get('support/{id}',       [ClientController::class, 'supportDetails'])->name('client.support.details');
    Route::get('support-case/{id}',       [ClientController::class, 'supportCase'])->name('client.case.details');
    // Route::post ('support/add',  [ClientSupportController::class, 'store'])->name('client.support.add');
    Route::post('support-case/add',  [SupportCaseController::class, 'store'])->name('client.case.add');
    Route::get('deals',       [ClientController::class, 'ClientDeals'])->name('client.deals');
    Route::get('RFQs',       [ClientController::class, 'ClientRfq'])->name('client.rfq');
    Route::get('orders',       [ClientController::class, 'ClientOrders'])->name('client.orders');
    Route::post('case/message',  [ClientSupportMessageController::class, 'store'])->name('client.message.store');
    Route::post('case/add',  [SupportCaseController::class, 'caseStore'])->name('client.case.store');

    Route::resource('client-team', ClientTeamController::class);

    // User Dashboard All Route
    Route::controller(UserOrderController::class)->group(function () {
        Route::get('/user/account/page', 'UserAccount')->name('user.account.page');
        Route::get('/user/change/password', 'UserChangePassword')->name('user.change.password');

        Route::get('/user/order/page', 'UserOrderPage')->name('user.order.page');

        Route::get('/user/order_details/{order_id}', 'UserOrderDetails');
        Route::get('/user/invoice_download/{order_id}', 'UserOrderInvoice');

        Route::post('/return/order/{order_id}', 'ReturnOrder')->name('return.order');

        Route::get('/return/order/page', 'ReturnOrderPage')->name('return.order.page');

        // Order Tracking
        Route::get('/user/track/order', 'UserTrackOrder')->name('user.track.order');
        Route::post('/order/tracking', 'OrderTracking')->name('order.tracking');
    });
});
