namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\CustomOrder;

class CustomerController extends Controller
{
    public function dashboard()
    {
        $products = Product::all();
        $orders = Order::all();
        $customOrders = CustomOrder::all();

        return view('customer.dashboard', compact('products', 'orders', 'customOrders'));
    }
}
