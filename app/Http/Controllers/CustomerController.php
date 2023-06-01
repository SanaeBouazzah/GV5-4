<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $customers = Customer::all();
      return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           $name = $request->name;
           $details = $request->details;

          //  2 actions necessary: validation et insertion
          // 1 validation
          $request->validate([
            'name' => 'required',
            'details' => 'required',
          ]);

          // 2 insertion
          Customer::create([
            'name' => $name,
            'details' => $details
          ]);
          

          return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
      $customer = Customer::find($id);
      return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer->delete();
        return redirect()->route('customers.inex', compact('customer'));
    }
}
