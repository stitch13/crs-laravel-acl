<?php

Route::group(['prefix' => 'painel'], function (){
    //PostController
    Route::get('posts','Painel\PostController@index');
    //PermissionController
    
    //RoleController
    
    //PainelController
    Route::get('/', 'Painel\PainelController@index');
});

Route::auth();

Route::get('/', 'Portal\SiteController@index');
