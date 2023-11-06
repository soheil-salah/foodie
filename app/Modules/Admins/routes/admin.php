<?php

// Dashboard Routes
use App\Modules\Admins\Http\Controllers\DashboardController;
use App\Modules\Admins\Http\Controllers\ProfileController;

// Kitchen Routes
use App\Modules\Admins\Http\Controllers\Kitchen\Sections\SectionController;
use App\Modules\Admins\Http\Controllers\Kitchen\Categories\CategoryController;
use App\Modules\Admins\Http\Controllers\Kitchen\Items\ItemController;
use App\Modules\Admins\Http\Controllers\Kitchen\Extras\ExtrasController;

// User Routes
use App\Modules\Admins\Http\Controllers\Users\UserController;
use App\Modules\Admins\Http\Controllers\Users\Ajax\CreateUserController;
use App\Modules\Admins\Http\Controllers\Users\Ajax\DeleteUserController;
use App\Modules\Admins\Http\Controllers\Users\Ajax\UpdateUserController;
use App\Modules\Admins\Http\Controllers\Users\Ajax\BanUserController;
use App\Modules\Admins\Http\Controllers\Users\Ajax\ChangeUserRoleController;
use App\Modules\Admins\Http\Controllers\Users\BannedUsersController;

// Operator Routes
use App\Modules\Admins\Http\Controllers\Operator\OperatorController;

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'admin.auth', 'admin.verified']], function() {

    Route::group(['as' => 'admin.', 'prefix' => '/admin'], function() {
        
        // Dashboard
        Route::get('/', DashboardController::class)->name('dashboard');
        
        Route::group(['as' => 'user.', 'prefix' => '/user'], function(){

            // Users
            Route::get('/all', [UserController::class, 'index'])->name('all');
            Route::get('/show/{slug}', [UserController::class, 'show'])->name('show');
            Route::get('/show/{slug}/password', [UserController::class, 'showPassword'])->name('show.password');
            // Route::get('/show/{slug}/role', [UserController::class, 'role'])->name('show.role');
            Route::get('/show/{slug}/ban', [UserController::class, 'ban'])->name('show.ban');
            Route::get('/show/{slug}/remove', [UserController::class, 'remove'])->name('show.remove');
            Route::get('/create', [UserController::class, 'create'])->name('create');
            // Route::get('/roles', UserRoleController::class)->name('roles.all');
            Route::get('/banned', BannedUsersController::class)->name('banned.all');

            // ajax to choose ban type <daterange or duration>
            Route::post('/ajax/ban/type', [UserController::class, 'banType'])->name('ajax.ban.type');
            // ajax to create new user
            Route::post('/ajax/create', CreateUserController::class)->name('ajax.create');
            // ajax to delete user
            Route::post('/ajax/delete', DeleteUserController::class)->name('ajax.delete');
            // ajax to update user info <fname, lname, email>
            Route::post('/ajax/update/info', [UpdateUserController::class, 'update'])->name('ajax.update.info');
            // ajax to update user personal info
            Route::post('/ajax/update/personal-info', [UpdateUserController::class, 'updatePersonalInfo'])->name('ajax.update.personal-info');
            // ajax to update user password
            Route::post('/ajax/update/password', [UpdateUserController::class, 'updatePassword'])->name('ajax.update.password');
            // ajax to change user role
            Route::post('/ajax/change/role', ChangeUserRoleController::class)->name('ajax.change.role');
            // ajax to update user personal image
            Route::post('/ajax/update/image', [UpdateUserController::class, 'updateImage'])->name('ajax.update.image');
            // ajax to remove user personal image
            Route::post('/ajax/remove/image', [UpdateUserController::class, 'removeImage'])->name('ajax.remove.image');
            // ajax to ban user
            Route::post('/ajax/ban', [BanUserController::class, 'ban'])->name('ajax.ban');
            // ajax to remove ban from user
            Route::post('/ajax/ban/remove', DeleteUserController::class)->name('ajax.ban.remove');
        });

        // Kitchen Routes
        Route::group(['as' => 'kitchen.', 'prefix' => '/kitchen'], function(){

            // kitchen section routes
            Route::group(['as' => 'section.', 'prefix' => '/section'], function(){

                Route::get('/all', [SectionController::class, 'index'])->name('all');
            });

            // kitchen categories routes
            Route::group(['as' => 'category.', 'prefix' => '/category'], function(){

                Route::get('/all', [CategoryController::class, 'index'])->name('all');
            });

            // kitchen items routes
            Route::group(['as' => 'item.', 'prefix' => '/item'], function(){

                Route::get('/all', [ItemController::class, 'index'])->name('all');
            });

            // kitchen extras routes
            Route::group(['as' => 'extras.', 'prefix' => '/extras'], function(){

                Route::get('/all', [ExtrasController::class, 'index'])->name('all');
            });
        });

        // Operators Routes
        Route::group(['as' => 'operator.', 'prefix' => '/operator'], function(){

            Route::get('/place-new-order', [OperatorController::class, 'newOrder'])->name('place-new-order');
            Route::get('/checkout', [OperatorController::class, 'checkout'])->name('checkout');
        });

        // Shipping Routes
        Route::group(['as' => 'operator.', 'prefix' => '/operator'], function(){
            
        });
    });
});


Route::group(['as' => 'admin.', 'prefix' => '/admin', 'middleware' => ['web', 'admin.auth']], function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware(['web', 'admin.auth', 'admin.verified'])->get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');

require __DIR__.'/auth.php';
