<?php

//rota para a home da aplicação
Route::get('/', function () {
    return view('index');
});

// grupo de rotas utilizadas para a manipulação das view, com o '[]' são criadas as 
// 	rotas de create, edit, delete, update,show.

Route::group([],function (){
    Route::resource('produtos', 'produtoController');
});

Route::group([],function (){
    Route::resource('pessoas', 'pessoaController');
});

Route::group([],function (){
    Route::resource('item_pedidos', 'ItemPedidosController');
});

Route::group([],function (){
    Route::resource('pedidos', 'pedidoController');
});
