<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user', function () {
//     return view('user',['user'=>'Shahid','city'=>'Lahore']);
// });



    //    We can also use second method to pass values route to view

    // Route::get('/user', function () {
    // return view('user')
    // ->with('user','Shahid')
    // ->with('city','Lahore');


        //  We can also use shot method
        
        // Route::get('/user', function () {
        //     return view('user')
        //     ->withUser('Shahid')
        //     ->withCity('Lahore');
            // ->withCity('');


            // if you can show multidimensional array values then use this code

            Route::get('/user', function (){

                $names=[
                    1=>['name'=>'Shahid','Phone'=>'03244535679','city'=>'Lahore'],
                    2=>['name'=>'Abdullah','Phone'=>'032445--','city'=>'Islmabad']
                ];
                return view('user',[
                    'user'=>$names,
                    'city'=>'Lahore'
                ]);

            });
         
    