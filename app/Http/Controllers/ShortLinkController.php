namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShortLinkController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados da requisição
        $request->validate([
            'original_url' => 'required|url',
        ]);

        // Obtém a URL original da requisição
        $originalUrl = $request->input('original_url');

        // Gera um código curto único
        $shortCode = Str::random(6);
        while (ShortLink::where('short_code', $shortCode)->exists()) {
            $shortCode = Str::random(6);
        }

        // Salva o link no banco de dados
        ShortLink::create([
            'original_url' => $originalUrl,
            'short_code' => $shortCode,
        ]);

        // Retorna o link curto como resposta JSON
        return response()->json([
            'short_link' => route('shortlink.show', $shortCode)
        ]);
    }

    public function show($shortCode)
    {
        // Busca o link pelo código curto
        $shortLink = ShortLink::where('short_code', $shortCode)->firstOrFail();

        // Redireciona para a URL original
        return redirect($shortLink->original_url);
    }
}
