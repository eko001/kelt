<?php

use think\facade\Route;

Route::resource('portal/categories', 'portal/Categories');
Route::get('portal/categories/subCategories', 'portal/Categories/subCategories');
Route::resource('portal/articles', 'portal/Articles');
Route::resource('portal/pages', 'portal/Pages');
Route::resource('portal/userArticles', 'portal/UserArticles');
Route::resource('portal/area', 'portal/Area');
Route::resource('portal/company', 'portal/Company');

Route::get('portal/search', 'portal/Articles/search');
Route::get('portal/articles/my', 'portal/Articles/my');
Route::get('portal/articles/relatedArticles', 'portal/Articles/relatedArticles');
Route::post('portal/articles/doLike', 'portal/Articles/doLike');
Route::post('portal/articles/cancelLike', 'portal/Articles/cancelLike');
Route::post('portal/articles/doFavorite', 'portal/Articles/doFavorite');
Route::post('portal/articles/cancelFavorite', 'portal/Articles/cancelFavorite');
Route::get('portal/tags/:id/articles', 'portal/Tags/articles');
Route::get('portal/tags', 'portal/Tags/index');
Route::get('portal/tags/hotTags', 'portal/Tags/hotTags');
Route::get('portal/area/getAreaList', 'portal/Area/getAreaList');
Route::get('portal/company/getAllCompany', 'portal/Company/getAllCompany');
Route::get('portal/company/getCompanyById', 'portal/Company/getCompanyById');

Route::post('portal/userArticles/deletes', 'portal/UserArticles/deletes');