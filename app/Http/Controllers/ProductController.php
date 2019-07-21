<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Validator;
use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\Product\ProductResource;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

public function __construct(){
    $this->middleware('auth:api')->except('index','show');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return ProductResource::collection(Product::all());
        
        //return new ProductCollection(Product::all());
    
       // return ProductCollection::collection(Product::all());
        return ProductCollection::collection(Product::paginate(10));
    }

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
    public function store(ProductRequest $request)
    {
        $prod= Product::create($request->all());
        return response()->json(new ProductResource($prod), 200); 

/* return \response([
    'data'=> new ProductResource($prod),
],200); */








    /*     $validator=Validator::make($request->all(), [
            'name' => 'required|unique:products|max:50',
            'detail' => 'required',
            'price' => 'required|max:10',
            'stock' => 'required|max:6',
            'discount' => 'required|max:2',
            
        ]); */

 
      /*   if ($validator->fails()){
         //   return  ['Error validation'   => $validator->errors()  ] ;
           // return response()->json($validator->errors(),'Error validation'  );
           return response()->json($validator->errors(), 200);

        }
 */

 




 
         
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }






    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {


       $product->update($request->all());

         // return response()->json(new ProductResource($product), 200); 

           return response([
              'data'=>new ProductResource($product)
          ],Response::HTTP_CREATED); 

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response([
            'data'=>['msg'=>'produit deleted']
        ],Response::HTTP_CREATED); 


    }
}
