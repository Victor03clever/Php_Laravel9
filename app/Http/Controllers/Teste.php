<?php
//CRUD
//CRUD
//CRUD
//CRUD
//CRUD
//CRUD
namespace App\Http\Controllers;

use App\Models\Teste as ModelsTeste;
use Illuminate\Http\Request;

class Teste extends Controller
{
    public function index()
    {
        // echo 'ola mundo';
        // dd('ola mundo');

      $teste=ModelsTeste::all();
    //   dd($teste);
          
        return view('play.jogos',['teste'=>$teste]);
    }
    public function create()
    {
        return view('play.create');
    }
    public function store(Request $filter)
    {
        ModelsTeste::create($filter->all());
        return redirect()->route('controllerTeste');
    }
    public function edit($id)
    {
       $teste= ModelsTeste::where('id',$id)->first();
       if(!empty($teste)):
       return view('play.edit',['dados'=>$teste]);
       else:
        return redirect()->route('controllerTeste');
       endif;
    }
    public function update(Request $filter, $id)
    {
        $data=['nome'=>$filter->nome];
        ModelsTeste::where('id',$id)->update($data);
        return redirect()->route('controllerTeste');
    }
    public function destroy($id)
    {
        ModelsTeste::where('id',$id)->delete();
        return redirect()->route('controllerTeste');
    }
}
