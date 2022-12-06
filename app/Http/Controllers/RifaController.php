<?php

namespace App\Http\Controllers;

use App\Models\Rifa;
use Illuminate\Http\Request;

class RifaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_a()
    {
        $rifas = Rifa::orderByDesc('id')->get();
        return view('admin.rifa_a', compact('rifas'));
    }
    public function index_ac()
    {
        $rifas = Rifa::where('estatus_rifa', 1)->orderByDesc('id')->get();
        return view('admin.rifa_ac', compact('rifas'));
    }
    public function index_af()
    {
        $rifas = Rifa::where('estatus_rifa', 2)->orderByDesc('id')->get();
        return view('admin.rifa_af', compact('rifas'));
    }
    public function index_ai()
    {
        $rifas = Rifa::where('estatus_rifa', 0)->orderByDesc('id')->get();
        return view('admin.rifa_ai', compact('rifas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_a()
    {
        return view('admin.rifa_a_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_a(Request $request)
    {
        $request->validate([
            'nombre_rifa' => 'required|max:50',
            'descripcion_rifa' => 'required|max:255',
            'precio_rifa' => 'required|max:50',
            'num_boletos_rifa' => 'required',
            'imagen_rifa' => 'required|mimes:png,jpg,jpeg|max:5048',
            'fecha_cierre_rifa' => 'required'
            ]);

        $nombreimagen = time() . '-' . $request->nombre_rifa . '.' . $request->imagen_rifa->extension();

        $request->imagen_rifa->move(public_path('img_rifa'), $nombreimagen);

        $rifa = Rifa::create([
            'nombre_rifa'          => $request->input('nombre_rifa'),
            'descripcion_rifa'     => $request->input('descripcion_rifa'),
            'precio_rifa'          => $request->input('precio_rifa'),
            'num_boletos_rifa'     => $request->input('num_boletos_rifa'),
            'imagen_rifa'          => $nombreimagen,
            'fecha_cierre_rifa'    => $request->input('fecha_cierre_rifa')
        ]);
        return redirect()->route('admin.rifa_a');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rifa  $rifa
     * @return \Illuminate\Http\Response
     */
    public function show(Rifa $rifa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rifa  $rifa
     * @return \Illuminate\Http\Response
     */
    public function edit_a(Rifa $id)
    {
        return view('admin.rifa_a_edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rifa  $rifa
     * @return \Illuminate\Http\Response
     */
    public function update_a(Request $request, Rifa $id)
    {
        // dd($request->all());
        $nombreimagen = time() . '-' . $request->nombre_rifa . '.' . $request->imagen_rifa->extension();

        $request->imagen_rifa->move(public_path('img_rifa'), $nombreimagen);

        $id->nombre_rifa=$request->nombre_rifa;
        $id->descripcion_rifa=$request->descripcion_rifa;
        $id->precio_rifa=$request->precio_rifa;
        $id->num_boletos_rifa=$request->num_boletos_rifa;
        $id->imagen_rifa=$nombreimagen;
        $id->fecha_cierre_rifa=$request->fecha_cierre_rifa;
        $id->estatus_rifa=$request->estatus_rifa;
        $id->save();
        return redirect()->route('admin.rifa_a');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rifa  $rifa
     * @return \Illuminate\Http\Response
     */
    public function destroy_a(Rifa $id)
    {
        $id->delete();
        return back()->with('succes', 'Rifa Eliminada');
    }
}
