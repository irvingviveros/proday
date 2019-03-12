<?php

namespace Proday\Http\Controllers;

use Proday\Http\Requests\StorePromoRequest;
use Proday\Establecimiento;
use Proday\Promo;
use Proday\PromoDia;
use Proday\Http\Request;
use Illuminate\Support\Facades\DB;

class PromocionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $promos = Promo::all();
        return view ('prodaydata.index', compact('promos'));
    }

    public function query(){
        $query = DB::table('users')
            ->select(['users.name', 'communities.title', 'communities.content'])
            ->join('communities', 'communities.user_id', '=', 'users.id')
            ->where('users.name', 'like', '%' . $request->name . '%')
            ->get();
        return $query;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $establecimiento = Establecimiento::orderBy('nombre_est')->get();
        return view ('formulario.promocion', compact('establecimiento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePromoRequest $request)
    {

        if ($request -> hasFile('imagen_p')){
            $file = $request -> file('imagen_p');
            $name = time().$file -> getClientOriginalName();
            $file -> move(public_path().'/images/uploads/promos', $name);
        }

        $promocion = new Promo();

        $promocion -> titulo_p = $request -> input ('titulo_p');
        $promocion -> imagen_p = $name;
        $promocion -> birthday_p = $request -> input ('birthday_p');
        $promocion -> id_est1 = $request -> input ('id_est1');
        $promocion -> save();

        $id = DB::table('promos')->max('id_p');

        $dias = $request -> input ('id_d1');

        foreach ($dias as $dia) {
            $promo_dia = new PromoDia();
            $promo_dia -> id_p1 = $id;
            $promo_dia -> id_d1 = $dia;
            $promo_dia -> save();
        }

        return redirect()->route('proday.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promo = Promo::findOrFail($id);
        return view('prodaydata.show', compact('promo'));
        //return $promo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
