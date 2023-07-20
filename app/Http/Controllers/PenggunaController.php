<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\menu;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pengguna = Pengguna::all();
        return view("Pengguna.index", compact("Pengguna")); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $Pengguna = Pengguna::all();
        $menu = Menu::all();

        return view('Pengguna.tb_create', ['Pengguna'=>$Pengguna,'menu'=>$menu]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'menu_id'=>'required',
            'jmlh_pesan' => 'required',
            'nohp' =>'required',
            'keterangan' =>'required',
            ]);

            $input = $request->all();
            Pengguna::create($input);
        
            return redirect()->route('Pengguna.index')->with('success', 'product data created succecfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $pengguna, $id)
    {
        $Pengguna = Pengguna::findorFail($id);
        return view('Pengguna.tb_show', compact('Pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengguna $pengguna, $id)
    {
        $Pengguna = Pengguna::find($id);
        $menu = Menu::all();

        return view('Pengguna.tb_edit', compact(['menu','Pengguna']),["title"=>"table"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengguna $pengguna, $id)
    {
        // Pengguna::where('id', $id)->update([
        //     'user' => $request->user,
        //     'menu_id' => $request->menu_id,
        //     'jmlh_pesan' => $request->jmlh_pesan,
        //     'nohp' => $request->nohp,
        //     'keterangan' => $request->keterangan,
        // ]);
        // return redirect()->route('Pengguna.index')->with('success', 'data update sucecsfully');

        $Pengguna = Pengguna::findOrFail($id);
        $Pengguna->update($request->all());

        return redirect('Pengguna')->with('success', 'data update sucecsfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengguna $pengguna, $id)
    {
        Pengguna::find($id)->delete();
        return redirect()->route('Pengguna.index')
            ->with('success','Data deleted successfully');
    }
}
