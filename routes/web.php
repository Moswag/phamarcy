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


    Route::get('/', 'UserController@index')->name('index');
    Route::get('/forgotpassword','UserController@forgotPassword')->name('forgotpassword');


    Route::get('/changepassword','UserController@changePassword')->name('changepassword');
    Route::post('/login','UserController@login')->name('login');
    Route::get('/logout','UserController@logout')->name('logout');
    Route::post('/resetpassword','UserController@resetPassword')->name('reset_password');

    Route::group(
    ['middleware' => ['roles'],'roles' => ['admin']], function () {
        Route::get('/users','UserController@users')->name('users');
        Route::post('/save_user','UserController@saveUser')->name('save_user');
        Route::get('/add_user','UserController@addUser')->name('add_user');


        Route::get('/add_drug','DrugController@addDrug')->name('add_drug');
        Route::post('/save_drug','DrugController@saveDrug')->name('save_drug');
        Route::get('/drugs','DrugController@viewDrugs')->name('drugs');
        Route::get('/edit_drug/{id}','DrugController@editDrug')->name('edit_drug');
        Route::post('/update_drug','DrugController@updateDrug')->name('update_drug');
        Route::get('/getDeleteDrug/{id}','DrugController@getDeleteDrug')->name('getDeleteDrug');
        Route::get('/delete_drug/{id}','DrugController@deleteDrug')->name('delete_drug');


        Route::get('/stock','StockController@getStock')->name('stock');
        Route::get('/add_stock','StockController@addStock')->name('add_stock');
        Route::post('/save_stock','StockController@saveStock')->name('save_stock');

        Route::get('/prices','PriceController@getPrices')->name('prices');
        Route::get('/add_price','PriceController@addPrice')->name('add_price');
        Route::post('/save_price','PriceController@savePrice')->name('save_price');
        Route::get('/edit_price/{id}','PriceController@editPrice')->name('edit_price');
        Route::post('/update_price','PriceController@updatePrice')->name('update_price');

        Route::get('/permissions','RoleController@getPermissions')->name('permissions');
        Route::post('/assignroles','RoleController@assignRoles')->name('assignroles');
    });

    Route::group(
    ['middleware' => ['roles'],'roles' => ['teller']], function () {
        Route::get('/sales','SalesController@getSales')->name('sales');
        Route::get('/sell','SalesController@getSellPage')->name('sell');
        Route::post('/sell_drug','SalesController@sellDrug')->name('sell_drug');
        Route::post('/confirm_sell_drug','SalesController@confirmSellOfDrug')->name('confirm_sell_drug');
});
    Route::group(
    ['middleware' => ['roles'],'roles' => ['accounts']], function () {

});















