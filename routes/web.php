Route::get('/', function () {
    return view('welcome');
});

Route::post('/shorten', [App\Http\Controllers\ShortLinkController::class, 'store'])->name('shorten');
Route::get('{shortCode}', [App\Http\Controllers\ShortLinkController::class, 'show'])->name('shortlink.show');
