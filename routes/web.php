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
    return view('Olá, mundo!');
});

Route::post('/shorten', [App\Http\Controllers\ShortLinkController::class, 'store'])->name('shorten');

Route::get('{shortCode}', [App\Http\Controllers\ShortLinkController::class, 'show'])->name('shortlink.show');
