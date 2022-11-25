<?php

namespace App\Http\Controllers;

use App\Models\venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    //
    public function index(){
        $venta = venta::all();
        //return $user
        return view ('venta.index', compact('venta'));
    }


    public function create()
    {
        
        return view('venta.add');
    }

    public function store(Request $request)
    {
        $input=$request->all();
        venta::create($input);
        return redirect('venta')->with('message','Se creo correctamenete');
    }

    public function edit($id)
    {
        $producto = venta::findOrFail($id); 
        return view ('venta.edit', compact('venta'));
    }

    public function show($id)
    {
        $venta = venta::find($id);
        return view('venta.show')->with('venta',$venta);

    } 

 public function update(Request $request, $id)
    {
        $venta = venta::findOrFail($id);
        $input=$request->all();
        $venta->update($input);
        return redirect('venta')->with('info','Se ha actualizado el registro correctamente');
 
    } 
    public function destroy($id)
    {
        //


        $venta = venta::findOrFail($id);

        $venta->delete();
        return redirect('venta')->with('danger','se agrego correctamente ');


}
}
