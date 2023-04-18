<?php

namespace App\Http\Controllers;

use App\Models\Automobiliai;
use Illuminate\Http\Request;

class AutomobiliaiController extends Controller
{

   public function index()
   {
    return view("automobiliais.index",[
        "automobiliais"=>Automobiliai::with('savininkai')->get()
    ]);
   }

   public function create()
   {
    return view("automobiliais.create");
   }

   public function store(Request $request)
   {
    $automobiliai=new Automobiliai();
    $automobiliai->marke=$request->marke;
    $automobiliai->modelis=$request->modelis;
    $automobiliai->numeris=$request->numeris;
    $automobiliai->save();
    return redirect()->route('automobilais.index');

   }

   public function show(Automobiliai $automobiliai)
   {

   }

   public function edit(Automobiliai $automobiliai)
   {
    return view("automobiliais.index",[
        "automobiliai"=>$automobiliai
    ]);
   }

   public function update(Request $request, Automobiliai $automobiliai)
   {
    $automobiliai->marke=$request->marke;
    $automobiliai->modelis=$request->modelis;
    $automobiliai->numeris=$request->numeris;
    $automobiliai->save();
    return redirect()->route('automobiliais.index');

   }

   public function destroy(Automobiliai $automobiliai)
   {
    $automobiliai->delete();
    return redirect()->route('automobiliais.index');
   }

}