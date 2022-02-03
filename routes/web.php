<?php

use Illuminate\Support\Facades\Route;
use App\models\uriel;
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
Route::get('/index', function () {
   
   
  $uriel= new uriel();
  $uriel->nombre= 'Pedro Uriel';
  $uriel->apellidop='Rivero';
  $uriel->apellidom='Enciso';
  $uriel->edad='19';
  $uriel -> nacimiento='4 de julio del 2002';
   $uriel -> lugardenacimiento='pachuca';
    $uriel-> papa='Oscar Rivero';
       $uriel -> mama='maricela Enciso';
       $uriel -> hermano= 'luis albero enciso';
       $uriel-> primaria= 'justo sierra';
       $uriel -> secundaria= 'sor juana ines de la cruz';
       $uriel-> prepa= 'prepa 1';
       $uriel -> universidad= 'politecnica de tecamac';
    
       return view ('blog.index',['uriel'=>$uriel]);
     //echo ("hola mundo");
   
   }) ->name('index');
 
  

   Route::get('/generic', function () {
   
   
    
    
    return view ('blog.generic');
  //echo ("hola mundo");

}) ->name('generic');


Route::get('/elements', function () {
  
   
    
    
    return view ('blog.elements');
  //echo ("hola mundo");

}) ->name('elements');