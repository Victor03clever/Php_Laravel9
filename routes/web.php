<?php

use App\Http\Controllers\Teste;
use Egulias\EmailValidator\Parser\FoldingWhiteSpace;
use Illuminate\Support\Facades\Route;

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
//CRUD
//CRUD
Route::prefix('teste')->group(function(){
    Route::get('/', [Teste::class, 'index'] )->name('controllerTeste');
    Route::get('/create', [Teste::class, 'create'] )->name('create');
    Route::post('/', [Teste::class, 'store'] )->name('store');
    Route::get('/{id}/edit', [Teste::class, 'edit'] )->where('id','[0-9]+')->name('edit');
    Route::patch('/{id}', [Teste::class, 'update'] )->where('id','[0-9]+')->name('update');
    Route::delete('/{id}', [Teste::class, 'destroy'] )->where('id','[0-9]+')->name('destroy');
});


//Bootstrap


Route::fallback(function(){
    return 'Erro ao realizar a rota!';
});

 

























// Route::get('/', function () {
//     return view('welcome');
    
// });

// // Route::get('/victor',function(){
// //     return view('jogos');
// // });

// // retornando textos com a nomenclatura
// Route::get('/tese', function(){
//     return 'Deu certo';
// })->name('teste');

// // Route::view('/victor', 'jogos', ['name'=>'victor clever']);  

// //retornando parametros
// // Route::get('/victor/{name}', function($name){
// //     return view('jogos',['nome'=>$name]);
// // }); 

// // //retornando parametros com filtros, aceitando apenas numeros
// // Route::get('/victor/{id?}', function($igd=null){
// //     return view('jogos',['id'=>$igd]);
// // })-> where('id','[0-9]+'); 

// // //retornando parametros com filtros, aceitando apenas caracteres
// // Route::get('/victor/{name?}', function($name=null){
// //     return view('jogos',['id'=>$name]);
// // })-> where(['name'=>'[A-Za-z]+']); 


// // // nomenclatura das rotas
// // Route::get('/teste', function(){
// //     return view('jogos');
// // })->name('test');
