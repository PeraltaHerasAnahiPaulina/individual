<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index(){
        $producto = producto::all();
        //return $user
        return view ('producto.index', compact('producto'));
    }


    public function create()
    {
        
        return view('producto.add');
    }

    public function store(Request $request)
    {
        $input=$request->all();
        producto::create($input);
        return redirect('producto')->with('message','Se creo correctamenete');
    }

    public function edit($id)
    {
        $producto = producto::findOrFail($id); 
        return view ('producto.edit', compact('producto'));
    }

    public function show($id)
    {
        $producto = producto::find($id);
        return view('producto.show')->with('producto',$producto);

    } 

 public function update(Request $request, $id)
    {
        $producto = producto::findOrFail($id);
        $input=$request->all();
        $producto->update($input);
        return redirect('producto')->with('info','Se ha actualizado el registro correctamente');
 
    } 
    public function destroy($id)
    {
        //


        $producto = producto::findOrFail($id);

        $producto->delete();
        return redirect('producto')->with('danger','correctamente el grupo');
   



}
}