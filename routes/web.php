<?php

use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\ProjetController;
use App\Models\Competence;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Projet;
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

Route::get('a', function () {
    return view('welcome');
});

Route::get('/', function () {

    $competences = Competence::all();
    $experiences = Experience::all();
    $educations = Education::all();
    $projets = Projet::all();

    return view('portfolio.portfolio', compact('competences','experiences','educations','projets'));

})->name('dashboard');

Route::get('/competences', function(){
    $competences = Competence::all();
    return view('lib.competence.more', compact('competences'));
})->name('competences.more');


Route::middleware(['auth'])->group(function () {

    Route::resource('competence', CompetenceController::class);
    Route::resource('experience', ExperiencesController::class);
    Route::resource('education', EducationController::class);
    Route::resource('projet', ProjetController::class);

    Route::get('imgSup/{image}', [ProjetController::class, 'imageDel'])->name('imageDel');

});

require __DIR__.'/auth.php';
