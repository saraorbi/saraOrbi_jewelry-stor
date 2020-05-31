<?php



Route::get('/', 'PagesController@home');
Route::get('category/{cat_name}', 'PagesController@ShowCat');
Route::get('product/{product_id}', 'PagesController@ShowProduct');
Route::get('home2', 'PagesController@Showhome2');


Route::prefix('shop')->group(function () {
    Route::get('AddToCart', "shopController@AddToCart");
    Route::get('DeleteProduct', "shopController@DeleteProduct");
    Route::get('UpdateCart', "shopController@UpdateCart");
    Route::get('ViewCart', "shopController@ViewCart");
    Route::get('Save_Order', "shopController@SaveOrder");
});

Route::prefix('user')->group(function () {
    Route::get('login', "UserController@ShowLoginForm");
    Route::get('my_page', "UserController@ShowMyPage");
    Route::get('signup', "UserController@ShowSignUpForm");
    Route::get('logout', "UserController@LogOut");
    Route::post('login', "UserController@ValidatUser");
    Route::post('signup', "UserController@SignUpUser");
});

Route::group(['middleware' => ['CmsDashbord']], function () {
    Route::prefix('cms')->group(function () {
        Route::get('dashbord', "PagesController@ShowDashbord");
        Route::resource('categories', 'CmsCategories');
        Route::resource('products', 'CmsProducts');
    });
});
