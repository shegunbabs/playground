<?php

use App\Domain\CapitalSageAcademy\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    $appList = [
        [
            "title" => "Tutor Demo for JetBrains License",
            "description" => "Full website for Capitalsage Tech School",
            "href" => \route("academy.home"),
        ],
        [
            "title" => "Merge institution & Bank Codes",
            "description" => "Method to merge Institution & Bank Codes",
            "href" => "/process-bank-codes",
        ],
    ];
    return view('welcome', ["appList" => $appList]);
});

Route::prefix("capitalsage-academy")->group(function(){
    Route::get("/", HomeController::class)->name('academy.home');
});

Route::get("process-bank-codes", function(){

    $filePath = storage_path("app/public/banks.csv");
    $file = new SplFileObject($filePath, "c");

    foreach(readNibssInstitutionCodeCsv() as $institutionRow) {
        if ( count($institutionRow) && strlen($institutionRow[0]) === 6 ) {

            $foundMatch = false;

            foreach (banksGenerator() as $item2) {
                //000001,Xyz Bank,034
                //institution_code,bank_name,bank_code
                if ( !empty($item2->alias) && strtolower(trim($institutionRow[1])) === strtolower(trim($item2->alias)) )
                {
                    $file->fwrite("{$institutionRow[0]},{$item2->cbn_code},{$institutionRow[1]}".PHP_EOL);
                    $foundMatch = true;
                    break;
                }

                if ( strtolower(trim($institutionRow[1])) === strtolower(trim($item2->bank_name)) )
                {
                    $file->fwrite("{$institutionRow[0]},{$item2->cbn_code},{$institutionRow[1]}".PHP_EOL);
                    $foundMatch = true;
                    break;
                }
            }

            if (! $foundMatch ) {
                $file->fwrite("{$institutionRow[0]},,{$institutionRow[1]}".PHP_EOL);
            }
        }
    }
    echo "done";
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
