<?php

// Route::get('/', function () {
//     return view('homepage');
// });
// Route::get('admin', function () {
//     return view('admin');
// });
// Route::get('list-cate', function () {
//     return view('list-cate');
// });

Route::get('/home', 'HomeController@index')->name('home');
// Product
Route::get('product', 'ProductController@productList')->name('product');
Route::get('product/add', 'ProductController@addForm')->name('product.add');
Route::post('product/add', 'ProductController@saveAdd');
Route::get('product/edit/{id}', 'ProductController@editForm')->name('product.edit');
Route::post('product/edit/{id}', 'ProductController@saveEdit');
Route::get('product/remove/{id}', 'ProductController@remove')->name('product.remove');
Route::post('myproductsDeleteAll', 'ProductController@deleteAll')->name('product.deleteall');
// category
Route::get('category', 'CategoryController@categoryList')->name('category');
Route::get('category/edit/{id}', 'CategoryController@editForm')->name('category.edit');
Route::post('category/edit/{id}', 'CategoryController@saveEdit');
Route::get('category/remove/{id}', 'CategoryController@remove')->name('category.remove');



