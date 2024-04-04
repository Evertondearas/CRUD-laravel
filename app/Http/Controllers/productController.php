<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelProduct;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 
    private $objProduct;

    public function __construct(){    	
        $this->objProduct = new ModelProduct;

    }

     public function index()
    {
        $product=$this->objProduct->all();
        return view('index', compact('product')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cad=$this->objProduct->create([
            
            'name'=>$request->name,
            'description'=>$request->description,
            'brand'=>$request->brand,
            'price'=>$request->price 
        ]);
        if($cad){
            return redirect('products');
        }
        else
        echo"Error";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product=$this->objProduct->find($id);
        return view('show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product=$this->objProduct->find($id);
        return view('create', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->objProduct->where(['id'=>$id])->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'brand'=>$request->brand,
            'price'=>$request->price 
        
        ]);
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->objProduct->find($id)->delete();
        return redirect('products');
    }
}
