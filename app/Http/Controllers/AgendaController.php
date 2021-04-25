<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agenda = Agenda::all();
        return view('admin.agenda.index', compact(['agenda']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agenda.create');
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
            'nama_event' => 'required',
            'tgl_acara' => 'required',
            'waktu_acara' => 'required',
            'keterangan' => 'required'
        ]);
        // dd($request->all());
        Agenda::create($request->all());
        return redirect('/agenda')->with('status', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        return view('admin.agenda.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_event' => 'required',
            'tgl_acara' => 'required',
            'waktu_acara' => 'required',
            'keterangan' => 'required'
        ]);
        // DB::table('agendas')->where('id', $id)->update($request->except('_method', '_token'));
        // dd($request->all());
        $agenda = Agenda::find($id);
        $agenda->nama_event = $request->nama_event;
        $agenda->tgl_acara = $request->tgl_acara;
        $agenda->waktu_acara = $request->waktu_acara;
        $agenda->keterangan = $request->keterangan;
        $agenda->save();
        return redirect('/agenda')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agenda::destroy($id);
        return redirect('/agenda')->with('status', 'Data berhasil dihapus');
    }
}
