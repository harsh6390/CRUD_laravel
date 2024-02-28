<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Providers\AppServiceProvider;


class ProductController extends Controller
{
    public function index(){

        return view('index',['products'=>Product::paginate(5)]);
    }
    
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        $imagename = time().'.'.$request->image->extension();
        $request->image->move(public_path('product'),$imagename);
        $product = new Product;
        $product->image=$imagename;
        $product->name = $request->name;
        $product->description = $request->description ;
        $product->save();
        return back()->withSuccess('product Created!!!!');

    }

    public function edit($id){
        $product = Product::where('id',$id)->first();
        return view('edit',['product'=>$product]);
    }

    public function update(Request $request,$id){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        $product=Product::where('id',$id)->first();

        if(isset($request->image)){

            $imagename = time().'.'.$request->image->extension();
            $request->image->move(public_path('product'),$imagename);
            $product->image=$imagename;

        }

       
        $product->name = $request->name;
        $product->description = $request->description ;
        $product->save();
        return back()->withSuccess('product Update!!!!');

    }


    public function destroy($id){
        $product = Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('product Delete!!!!');

    }

    public function show($id){
        $product = Product::where('id',$id)->first();
        return view('show',['product'=>$product]);

    }
    

    
}
