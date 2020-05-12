<?php

namespace App\Http\Controllers;

use App\Shop;
use App\Order;
use App\Product;
use App\Charts\OrderChart;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = auth()->user()->orders()->with('items')->get(); // fix n + 1 issues

        // $orders = Order::all();
        // // $products = $orders->products;

        // $months = Order::select(
        //     DB::raw("DATE_FORMAT(created_at, '%M %Y') as months"),
        //     DB::raw('sum(grand_total) as `sums`'),
        //     DB::raw('avg(grand_total) as average'),
        //     DB::raw('count(grand_total) as total'),
        //     DB::raw('max(created_at) as createdAt')

        // )
        //     // ->where("created_at", ">", \Carbon\Carbon::now()->subMonths(6))
        //     ->where("status", "completed")
        //     ->orderBy('createdAt', 'desc')
        //     ->groupBy('months')
        //     ->get();
        //     // ->mapWithKeys(function ($item) {
        //     //     return [$item['createdAt'] => collect($item)->only(['months', 'sums'])->all()];
        //     // });

        // // $orderOptions = array('' => 'Select Month') + $months->map(function ($item) {
        // //     return array($item, ['months', 'sums']);
        // // });

        // // pluck('months')->toArray();

        return view('my-orders')->with([
            'orders' => $orders,
            // 'products' => $products,
            // 'months' => $months,
            // 'orderOptions' => $orderOptions
            ]);
    }

    public function stats(){

        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];


        $fillColors = [
            "rgba(255,0,0, 0.5)",
            "rgba(255,69,0, 0.5)",
            "rgba(255, 205, 86, 0.5)",
            "rgba(51,105,232, 0.5)",
            "rgba(244,67,54, 0.5)",
            "rgba(34,198,246, 0.5)",
            "rgba(153, 102, 255, 0.5)",
            "rgba(255, 159, 64, 0.5)",
            "rgba(233,30,99, 0.5)",
            "rgba(22,160,133, 0.5)",
            "rgba(205,220,57, 0.5)",
            "rgba(10,186,181, 0.5)"

        ];
        $orders = DB::table('orders')
                    ->select('shop_id',
                        DB::raw("DATE_FORMAT(created_at, '%M %Y') as months"),
                        DB::raw('sum(grand_total) as sums'),
                        DB::raw('avg(grand_total) as average'),
                        DB::raw('count(grand_total) as total'),
                        DB::raw('max(created_at) as createdAt'),


                    )
                    // ->where("created_at", ">", \Carbon\Carbon::now()->subMonths(6))
                    ->where("status", "completed")
                    ->orderBy('createdAt', 'desc')
                    ->groupBy('shop_id', 'months');


        $shops = DB::table('shops')
                    ->joinSub($orders,'orders', function($join) {
                        $join->on('shops.id', '=', 'orders.shop_id');
                    })->get();
            //         ->select('shops.*','orders.*'
            //         // DB::raw("DATE_FORMAT(orders.created_at, '%M %Y') as months"),

            //         // DB::raw('avg(orders.grand_total) as average'),
            //         // DB::raw('count(orders.grand_total) as total'),
            //         // DB::raw('max(orders.created_at) as createdAt'),

            // )


        $months = DB::table('orders')

            ->select(
                DB::raw("DATE_FORMAT(created_at, '%M %Y') as months"),
                DB::raw('sum(grand_total) as sums'),
                DB::raw('avg(grand_total) as average'),
                DB::raw('count(grand_total) as total'),
                DB::raw('max(created_at) as createdAt'),


            )
            // ->where("created_at", ">", \Carbon\Carbon::now()->subMonths(6))
            ->where("status", "completed")
            ->orderBy('createdAt')
            ->groupBy('months')
            ->get();

        $chartMonths = Order::select(
            DB::raw("DATE_FORMAT(created_at, '%M %Y') as months"),
            DB::raw('sum(grand_total) as `sums`'),
            DB::raw('sum(item_count) as items'),
            DB::raw('avg(grand_total) as average'),
            DB::raw('count(grand_total) as total'),
            DB::raw('max(created_at) as createdAt')

        )
            // ->where("created_at", ">", \Carbon\Carbon::now()->subMonths(6))
            ->where("status", "completed")
            ->orderBy('createdAt')
            ->groupBy('months')
            ->get();

            //monthly orders chart
        $mOrders = $chartMonths->pluck('sums', 'months');

        // return $orders->keys();
        // return $orders->values();

        $mChart = new OrderChart;
        $mChart->minimalist(false);
        $mChart->displayLegend(true);
        $mChart->displayAxes(true);
        $mChart->labels($mOrders->keys());

        $mChart->dataset('Monthly Sales(QAR) ', 'bar', $mOrders->values())

                ->backgroundcolor('#0abab5');




        //item orders chart
        $iMonths = Order::select(
            DB::raw("DATE_FORMAT(created_at, '%M %Y') as months"),
            DB::raw('sum(grand_total) as `sums`'),
            DB::raw('sum(item_count) as items'),
            DB::raw('avg(grand_total) as average'),
            DB::raw('count(grand_total) as total'),
            DB::raw('max(created_at) as createdAt')

        )
            ->where("status", "completed")
            ->orderBy('items')
            ->groupBy('months')
            ->get();

        $iOrders = $iMonths->pluck('items', 'months');
        // return $orders->keys();
        // return $orders->values();

        $iChart = new OrderChart;

        $iChart->minimalist(true);
        $iChart->displayLegend(true);
        $iChart->title('Number of Item Purchased', $font_size = 14, $color = '#666', $bold = true, $font_family = "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif");
        $iChart->labels($iOrders->keys());
        $iChart->dataset('Monthly item Orders', 'doughnut', $iOrders->values())

                ->backgroundcolor($fillColors)
                ->fill(true)
                ->linetension(0.1);



        $dailySales = Order::where("status", "completed")
            ->orderBy('created_at')

            ->pluck('grand_total', DB::raw('DATE(`created_at`)'));

        // $dOrders = $dailySales->pluck('grand_total','created_at');

        $dChart = new OrderChart;

        $dChart->minimalist(false);
        $dChart->displayLegend(true);
        $dChart->labels($dailySales->keys());
        $dChart->dataset('daily Orders(QAR) ', 'line', $dailySales->values())

                ->color('#0abab5')
                ->fill(true);
                // ->linetension(0.8);

        return view('stats')->with([

            'mChart' => $mChart,
            'iChart' => $iChart,
            'dChart' => $dChart,
            'months' => $months,
            'shops' => $shops

            ]);

    }

    public function pdfReport() {
        $months = Order::select(
            DB::raw("DATE_FORMAT(created_at, '%M %Y') as months"),
            DB::raw('sum(grand_total) as `sums`'),
            DB::raw('avg(grand_total) as average'),
            DB::raw('count(grand_total) as total'),
            DB::raw('max(created_at) as createdAt')

        )
            // ->where("created_at", ">", \Carbon\Carbon::now()->subMonths(6))
            ->where("status", "completed")
            ->orderBy('createdAt')
            ->groupBy('months')
            ->get();
        $pdf = PDF::loadView('report', compact('months'));


        return $pdf->download('report.pdf');

}

    public function downloadPDF($id) {
        $order = Order::find($id);
        $products = $order->products;
        $pdf = PDF::loadView('invoice', compact('order', 'products'));


        return $pdf->download('invoice.pdf');
}

    // public function invoice()
    // {
    //     $pdf = PDF::loadView('pdf', compact('invoice'));
    //     return $pdf->download('invoice.pdf');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = Product::all();
        //check if products has already been purchased 'as in fastest finger first'
        if ($this->productsAreNoLongerAvailable()) {
            return back()->withErrors('Sorry! One of the items in your cart is no longer available.');
        }

        $emailValidation = auth()->user() ? 'required|email' : 'required|email|unique:users';

        $request->validate([
            'email'=> $emailValidation,
            'shipping_fullname' => 'required',
            'shipping_city' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',

        ]);

        $order = new Order();

        $order->order_number = \uniqid('OrderNumber-');

        $order->shipping_fullname = $request->input('shipping_fullname');
        $order->shipping_state = $request->input('shipping_state');
        $order->shipping_city = $request->input('shipping_city');
        $order->shipping_address = $request->input('shipping_address');
        $order->shipping_phone = $request->input('shipping_phone');
        $order->shipping_zipcode = $request->input('shipping_zipcode');

        if (!$request->has('billing_fullname')) {

            $order->billing_fullname = $request->input('shipping_fullname');
            $order->billing_state = $request->input('shipping_state');
            $order->billing_city = $request->input('shipping_city');
            $order->billing_address = $request->input('shipping_address');
            $order->billing_phone = $request->input('shipping_phone');
            $order->billing_zipcode = $request->input('shipping_zipcode');
        }else {
            $order->billing_fullname = $request->input('billing_fullname');
            $order->billing_state = $request->input('billing_state');
            $order->billing_city = $request->input('billing_city');
            $order->billing_address = $request->input('billing_address');
            $order->billing_phone = $request->input('billing_phone');
            $order->billing_zipcode = $request->input('billing_zipcode');
        }




        $order->grand_total = \Cart::getTotal();
        $order->item_count = \Cart::getContent()->count();

        $order->user_id = auth()->id();
        $order->shop_id = auth()->id();


        $order->save();

        //save order item
        $cartItems = \Cart::getContent();

        foreach ($cartItems as  $item) {
            $order->items()->attach($item->id, ['price' => $item->price, 'quantity' =>$item->quantity]);
        }

        // decrease the quantity of all the products ordered
        $this->decreaseQuantities();

       //empty the cart after completion of order
       \Cart::clear();

       //send email to customer

       //take user to thank you page or just return a string

       return redirect()->route('confirmation.index')->with('success_message','Order has been placed successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        if (auth()->id() !== $order->user_id) {
            return back()->withErrors('You do not have access to this!');
        }

        $products = $order->products;



        return view('my-order')->with([
            'order' => $order,
            'products' => $products,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    protected function decreaseQuantities()
    {
        foreach (\Cart::getcontent() as $item ) {
            $product = Product::find($item->model->id);

            $product->update(['quantity' => $product->quantity - $item->quantity]);
        }
    }

    protected function productsAreNoLongerAvailable()
    {
        foreach (\Cart::getcontent() as $item ) {
            $product = Product::find($item->model->id);

            if ($product->quantity < $item->quantity) {
                return true;
            }

        }

        return false;
    }
}

