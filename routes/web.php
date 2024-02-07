    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\SiswaController;

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

    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
    Route::get('/tambah', [SiswaController::class, 'tambah'])->name('siswa.tambah');
    Route::post('/siswa', [SiswaController::class, 'entri'])->name('siswa.entri');
    Route::get('/siswa/{datasiswa}/ubah', [SiswaController::class, 'ubah'])->name('siswa.ubah');
    Route::put('/siswa/{datasiswa}/perbarui', [SiswaController::class, 'perbarui'])->name('siswa.perbarui');
    Route::delete('/siswa/{datasiswa}/hapus', [SiswaController::class, 'hapus'])->name('siswa.hapus');
