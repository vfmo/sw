<?php


Route::get('/', function () {
    return view('pages.home');
});

Route::prefix('productController')->group(function () {
    
    Route::match(['get', 'post'], 'productForm', 'productController@productForm');
    Route::get('productEditForm/{id}', 'productController@productEditForm');
    Route::get('productViewForm/{id}', 'productController@productViewForm');
    Route::get('productMenu', 'productController@productMenu');
    Route::post('addProduct', 'productController@addProduct');
    Route::post('deleteProduct', 'productController@deleteProduct');    

    Route::get('orderMenu', 'productController@orderMenu');
    Route::get('orderForm', 'productController@orderForm');
    Route::get('orderViewDetail/{id}', 'productController@orderViewDetail');


    Route::post('addOrder', 'productController@addOrder');    
    Route::post('deleteOrder', 'productController@deleteOrder');    



});

