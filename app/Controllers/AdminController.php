namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\CustomOrder;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::all();
        $products = Product::all();
        $orders = Order::all();
        $customOrders = CustomOrder::all();

        return view('admin.dashboard', compact('users', 'products', 'orders', 'customOrders'));
    }
}
