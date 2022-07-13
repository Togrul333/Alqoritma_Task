<?php

namespace App\Http\Controllers;

use App\Models\Bond;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Request $request, $id)
    {
        $this->validate($request, [
            'count' => ['required', 'min:1']
        ]);

        $bond = Bond::findOrFail($id);


        $order = Order::create([
            'bond_id' => $bond->id,
            'date' => now(),
            'count' => $request->get('count')
        ]);

        return response()->json($order);
    }

}
