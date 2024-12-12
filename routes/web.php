<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\DemoController;
Route::get('/', function () {
    return view('welcome');
});

Route::get("about", [AboutController::class, "index"]);
Route::get("about/{infoid}", [AboutController::class, "aboutInfo"]);

Route::get("aboutme", [AboutController::class, "index"]);

Route::get("profile/{name}/{age?}", [AboutController::class, "profile"]);

Route::get("task", [TaskController::class, "index"]);
Route::get("task/{taskid}", [TaskController::class, "show"]);

Route::get("tasks/{taskid}", [TaskController::class, "showing"]);

Route::get("file", [FileController::class, "index"]);
Route::get("file/invoice/{invoiceId}/{type?}", [FileController::class, "downloadInvoice"]);

Route::get("file/error", [FileController::class, "error"]);

Route::get("invoice", [InvoiceController::class, "index"]);
Route::get("invoices", [InvoiceController::class, "demo"]);
Route::get("invoices/{invoiceId}", [InvoiceController::class, "invoice"]);

Route::view("home", "home.index");
Route::view("home/about", "home.about");

Route::post("demo1", [DemoController::class, "demo1"]);
Route::post("demo2", [DemoController::class, "demo2"]);

Route::get("demo3/{number1}/{number2}", [DemoController::class, "demo3"]);

Route::get("sessionput", [DemoController::class, "sessionput"]);
Route::get("sessionget", [DemoController::class, "sessionget"]);
Route::get("sessionforget", [DemoController::class, "sessionforget"]);
Route::get("sessionpull", [DemoController::class, "sessionpull"]);
Route::get("sessionflush", [DemoController::class, "sessionflush"]);