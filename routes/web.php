<?php
use Illuminate\Http\Request;
use Pacerini\Models\TextPortuguese;
use Pacerini\Models\TextEnglish;
use Pacerini\Models\Contact;

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




/////////////////**ADMIN**//////////////////////
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::resource('usuarios', 'UsersController');
    Route::resource('consultorios', 'PlacesController');
    Route::resource('convenios', 'HealthInsurancesController');
    Route::resource('agendamentos', 'SchedulesController');
    Route::resource('configuracoes', 'ConfigsController');
    Route::resource('texto-ingles', 'TextEnglishController');
    Route::resource('texto-portugues', 'TextPortugueseController');
    Route::resource('configuracoes-orientacao', 'ConfigsOrientationController');
    Route::resource('configuracoes-contato', 'ConfigsContactController');

    Route::get('home', function () {
        return view('admin.home');
    })->name('home');
});

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();

    Route::get('logout', [
        'namespace' => 'Admin',
        'uses' => 'Auth\LoginController@logout'
    ]);
});

Route::get('/admin', function () {
    return redirect()->route('login');
})->name('admin');
/////////////////**ADMIN**//////////////////////

//////////////////**REQUISIÇÕES**///////////////
Route::post('site-requests', function (Request $request) {
    $app = app();
    $controller = $app->make('Pacerini\Http\Controllers\Site\SiteController');

    return $controller->callAction($request->action, [$request]);
});
//////////////////**REQUISIÇÕES**///////////////


Route::get('/{language?}', function ($language = 'pt') {
	App::setLocale($language);
    $contact = (new Contact)->find(1);

    switch ($language) {
        case 'pt':
            $text = (new TextPortuguese)->find(1);
            break;
        
        case 'en':
            $text = (new TextEnglish)->find(1);
            break;

        default:
            $text = (new TextPortuguese)->find(1);
            break;
    }

    return view('site.index')
        ->with('language', $language)
        ->with('text', $text)
        ->with('contact', $contact);
});
