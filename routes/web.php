<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [DashboardController::class,'index']);
Route::get('/master-barang', [BarangController::class, 'index']);
Route::get('/tambah-barang', [BarangController::class, 'addbarang']);
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');


Route::get('/routes', function() {
    $routeCollection = Route::getRoutes();
    echo "<table style='width:100%'>";
    echo "<tr>";
    echo "<td width='10%'><h4>HTTP Method</h4></td>";
    echo "<td width='10%'><h4>Route</h4></td>";
    echo "<td width='80%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
        echo "<td>" . $value->methods()[0] . "</td>";
        echo "<td>" . $value->uri() . "</td>";
        echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
});

Route::get('/test-barang', [BarangController::class, 'test']);
