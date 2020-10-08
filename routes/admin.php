<?php

    Route::GET('/home', 'AdminController@index')->name('admin.home');
    // Login and Logout
    Route::GET('/', 'LoginController@showLoginForm')->name('admin.login');
    Route::POST('/', 'LoginController@login');
    Route::POST('/logout', 'LoginController@logout')->name('admin.logout');

    Route::view('/profile', 'multiauth::admin.profile')->name('admin.profile')->middleware('auth:admin');
    Route::put('/profile', function (\Illuminate\Http\Request $request){
       $data = $request->validate([
           'name' => 'string|required|min:5',
           'email' => 'email|required',
       ]);
       auth('admin')->user()->update($data);
       return back()->with(['status' => 'Information Updated Successfully']);
    })->middleware('auth:admin')->name('admin.profile.update');
    Route::put('/profile/password', function (\Illuminate\Http\Request $request){
       $data = $request->validate([
           'old_password' => 'string|required|password:admin',
           'password' => 'string|min:5|required|confirmed',
       ]);
       auth('admin')->user()->password = \Illuminate\Support\Facades\Hash::make($data['password']);
       return back()->with(['password_status' => 'Password Updated Successfully']);
    })->middleware('auth:admin')->name('admin.profile.password');

    // Password Resets
    Route::POST('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::GET('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::POST('/password/reset', 'ResetPasswordController@reset');
    Route::GET('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::GET('/password/change', 'AdminController@showChangePasswordForm')->name('admin.password.change');
    Route::POST('/password/change', 'AdminController@changePassword');

    // Register Admins
    Route::get('/register', 'RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'RegisterController@register');
    Route::get('/{admin}/edit', 'RegisterController@edit')->name('admin.edit');
    Route::delete('/{admin}', 'RegisterController@destroy')->name('admin.delete');
    Route::patch('/{admin}', 'RegisterController@update')->name('admin.update');

    // Admin Lists
    Route::get('/show', 'AdminController@show')->name('admin.show');
    Route::get('/me', 'AdminController@me')->name('admin.me');

    // Admin Roles
    Route::post('/{admin}/role/{role}', 'AdminRoleController@attach')->name('admin.attach.roles');
    Route::delete('/{admin}/role/{role}', 'AdminRoleController@detach');

    // Roles
    Route::get('/roles', 'RoleController@index')->name('admin.roles');
    Route::get('/role/create', 'RoleController@create')->name('admin.role.create');
    Route::post('/role/store', 'RoleController@store')->name('admin.role.store');
    Route::delete('/role/{role}', 'RoleController@destroy')->name('admin.role.delete');
    Route::get('/role/{role}/edit', 'RoleController@edit')->name('admin.role.edit');
    Route::patch('/role/{role}', 'RoleController@update')->name('admin.role.update');

    // active status
    Route::post('activation/{admin}', 'ActivationController@activate')->name('admin.activation');
    Route::delete('activation/{admin}', 'ActivationController@deactivate');
    Route::resource('permission', 'PermissionController');

    // Playlists
    Route::middleware('auth:admin')->prefix('playlists')->name('admin.playlist.')->group(function(){
       Route::get('/', [\App\Http\Controllers\Admin\PlaylistController::class, 'index'])->name('index');
       Route::get('/{playlist}', [\App\Http\Controllers\Admin\PlaylistController::class, 'show'])->name('show');
       Route::post('/', [\App\Http\Controllers\Admin\PlaylistController::class, 'create'])->name('create');
       Route::put('/{playlist}', [\App\Http\Controllers\Admin\PlaylistController::class, 'update'])->name('update');
       Route::delete('/{playlist}', [\App\Http\Controllers\Admin\PlaylistController::class, 'delete'])->name('delete');
    });

    Route::fallback(function () {
        return abort(404);
    });
