<?

use Illuminate\Support\Facades\Request;

function setActiveMenu($route)
{
    // Verifica se a URL atual é exatamente a mesma da rota fornecida
    return Request::is($route) ? 'active' : '';
}
