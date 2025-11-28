namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

class Helper
{
    public static function isAdmin()
    {
        return Auth::check() && Auth::user()->role == 'admin';
    }

    public static function isCustomer()
    {
        return Auth::check() && Auth::user()->role == 'customer';
    }
}
