<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Katagory;
use Illuminate\Http\Request;
use PDF;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Menu = Menu::all();
        return view("Menu.index", compact("Menu")); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Menu = Menu::all();
        $katagory = katagory::all();

        return view('Menu.tb_create', ['menu'=>$Menu,'katagory'=>$katagory]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->foto) {
            $foto = $request->foto;
            $new_foto = date('YmdHis').'.'.$foto->getClientOriginalExtension();
            $foto->move('foto/foto/', $new_foto);
            Menu::create([
            'nama' => $request->nama,
            'katagory_id'=>$request->katagory_id,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'foto' => $new_foto,
            ]);
        }
        
        return redirect()->route('Menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu, $id)
    {
        $Menu = Menu::findorFail($id);
        return view('Menu.tb_show', compact('Menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu, $id)
    {
        $Menu = Menu::find($id);
        $katagory = katagory::all();

        return view('Menu.tb_edit', compact(['Menu','katagory']),["title"=>"table"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu, $id)
    {
        if($request->file('Menu') == "") {
    
            $product = Menu::where('id', $id)->update([
                'nama'     => $request->nama,
                'katagory_id'     => $request->katagory_id,
                'harga'   => $request->harga,
                'stock'   => $request->stock
            ]);
    
        } else { 
            $foto = $request->Menu;
            $new_foto = date('YmdHis').'.'.$foto->getClientOriginalExtension();
            $foto->move('foto/foto', $new_foto);
            Menu::where('id', $id)->update([
            'nama' => $request->nama,
            'katagory_id'=> $request->katagory_id,
            'harga' => $request->harga,
            'foto' => $new_foto,
            ]);
        }
        return redirect()->route('Menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu, $id)
    {
        Menu::find($id)->delete();
        return redirect()->route('Menu.index')
            ->with('success','Data deleted successfully');
    }

   
}
