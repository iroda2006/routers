<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/



// 1. Shahar nomini ko‘rsatadigan marshrut
Route::get('/city/{name}', function ($name) {
    return "Welcome to {$name}!";
})->name('city.show');

// 2. 
Route::prefix('admin')->group(function () {
    Route::get('/users/{id}', function ($id) {
        return "User ID: {$id}";
    })->name('admin.users.show');
});

// 3. Profile prefiksi bilan marshrutlar guruhi
Route::prefix('profile')->group(function () {
    Route::get('/view', function () {
        return "Profile View";
    })->name('profile.view');

    Route::get('/edit', function () {
        return "Profile Edit";
    })->name('profile.edit');

    Route::get('/settings', function () {
        return "Profile Settings";
    })->name('profile.settings');
});

// 4. Products prefiksi bilan marshrutlar guruhi
Route::prefix('products')->group(function () {
    Route::get('/', function () {
        return "Products List";
    });

    Route::get('/{id}', function ($id) {
        return "Product ID: {$id}";
    });

    Route::get('/{id}/edit', function ($id) {
        return "Edit Product ID: {$id}";
    })->name('products.edit');
});

// 5. Redirect funksiyasi
Route::redirect('/old-url', '/new-url');

