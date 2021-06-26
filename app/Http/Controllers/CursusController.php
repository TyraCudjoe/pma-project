<?php

namespace App\Http\Controllers;

use App\cursusweb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursusweb = DB::table('cursussen')->get();
        return view('cursussen.index')
            ->with('cursusweb', $cursusweb);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $klassen = DB::table('klassen')->get()->pluck('name', 'id')->prepend('none');
        $docenten = DB::table('docenten')->get()->pluck('name', 'id')->prepend('none');
        return view('cursussen.create')
            ->with('klassen', $klassen)
            ->with('docenten', $docenten);
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = DB::table('cursussen')->insertGetId([
            'naam_cursus' => $request->input('naam_cursus'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'commentaar' => $request->input('commentaar'),

        ]);
        DB::table('cursus_users')->insert([
            'cursus_id' => $id
        ]);
        return redirect()->action('CursusController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cursusWeb  $cursusWeb
     * @return \Illuminate\Http\Response
     */
    public function show(cursusWeb $cursusWeb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cursusWeb  $cursusWeb
     * @return \Illuminate\Http\Response
     */
    public function edit(cursusWeb $cursusWeb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cursusWeb  $cursusWeb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cursusWeb $cursusWeb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cursusWeb  $cursusWeb
     * @return \Illuminate\Http\Response
     */
    public function destroy(cursusWeb $cursusWeb)
    {
        //
    }
}
