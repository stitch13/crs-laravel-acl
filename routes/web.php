<?php

Route::group(['prefix' => 'painel'], function (){
    //PostController
    
    //PermissionController
    
    //RoleController
    
    //PainelController
    Route::get('/', 'Painel\PainelController@index');
});

Route::auth();

Route::get('/', 'SiteController@index');
