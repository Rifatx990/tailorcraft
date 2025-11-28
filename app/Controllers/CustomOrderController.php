namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomOrder;

class CustomOrderController extends Controller
{
    public function index()
    {
        $customOrders = CustomOrder::all();

        return view('custom_orders.index', compact('customOrders'));
    }

    public function create()
    {
        return view('custom_orders.create');
    }

    public function store(Request $request)
    {
        $customOrder = CustomOrder::create($request->all());

        return redirect()->route('custom_orders.index');
    }

    public function show(CustomOrder $customOrder)
    {
        return view('custom_orders.show', compact('customOrder'));
    }

    public function edit(CustomOrder $customOrder)
    {
        return view('custom_orders.edit', compact('customOrder'));
    }

    public function update(Request $request, CustomOrder $customOrder)
    {
        $customOrder->update($request->all());

        return redirect()->route('custom_orders.index');
    }

    public function destroy(CustomOrder $customOrder)
    {
        $customOrder->delete();

        return redirect()->route('custom_orders.index');
    }
}
