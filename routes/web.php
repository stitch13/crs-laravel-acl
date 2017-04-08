<?php

Route::group(['prefix' => 'painel'], function (){
    //PostController
    Route::get('posts','Painel\PostController@index');
    //PermissionController
    Route::get('permissions','Painel\PermissionController@index');
    //RoleController
    Route::get('roles','Painel\RoleController@index');
    Route::get('role/{id}/permissions','Painel\RoleController@permissions');
    //UserController
    Route::get('users','Painel\UserController@index');
    //PainelController
    Route::get('/', 'Painel\PainelController@index');
});

Route::auth();

Route::get('/', 'Portal\SiteController@index');
