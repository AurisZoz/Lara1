<?php

namespace App\Http\Controllers;

use App\Models\Savininkai;
use Illuminate\Http\Request;

class SavininkaiController extends Controller
{
  public function index(Request $request){

    $filter=$request->session()->get('filterSavininkai', (object)['vardas'=>null,'pavarde'=>null]);

    $savininkai=Savininkai::with(['automobiliai'])->filter($filter)->orderBy("vardas")->get();

    return view("savininkai.index",[
        "savininkai"=>$savininkai,
      //  "id"=>$id,
        "filter"=>$filter
    ]
    );

  }
 
  public function create()
  {
    return view("savininkai.creat");
  }

  public function save(Request $request)
  {
    $savininkais=new Savininkai();
    $savininkais->vardas=$request->vardas;
    $savininkais->pavarde=$request->pavarde;
    $savininkais->save();
    return redirect()->route("savininkai.index");

  }

  public function edit($id)
  {
   return view("savininkai.edit",[
    "savininkais"=>Savininkai::find($id)
   ]);
  }

  public function update($id, Request $request)
  {
    $savininkais=Savininkai::find($id);
    $savininkais->vardas=$request->vardas;
    $savininkais->pavarde=$request->pavarde;
    $savininkais->save();
    return redirect()->route("savininkai.index");
  }

  public function delete($id){
    Savininkai::destroy($id);
    return redirect()->route("savininkai.index");
  }

  public function search(Request $request)
  {
    $filterSavininkai=new \stdClass();
    $filterSavininkai->vardas=$request->vardas;
    $filterSavininkai->pavarde=$request->pavarde;

    $request->session()->put('filterSavininkai', $filterSavininkai);
    return redirect()->route('savininkai.index');

  }

}