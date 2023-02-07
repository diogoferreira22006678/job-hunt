<?php

use App\Http\Controllers\ListingController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\CommonMark\Node\Block\Heading;
use App\Models\Listing;

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

    // index
    // show
    // create
    // store
    // edit
    // update
    // destroy

// All listings
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data
Route::get('/listings', [ListingController::class, 'store']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// *****EXAMPLE ROUTES******
// standard route with headers to alter the response
//Route::get('/hello', function(){
//    return response('<h1>Hello World</h1>')
//    -> header('Content-Type', 'text/plain')
//    -> header('foo','bar');
//});
//
//// Route with constrains and a wild card $id
//Route::get('/posts/{id}', function($id){
//    dd($id);
//    return response('Post ' . $id);
//})-> where('id', '[0-9]+');
//
//// Route with requests and get the arguments stored in request
//Route::get ('/search', function(HttpRequest $request){
//    return $request-> name . ' ' . $request-> city;
//});