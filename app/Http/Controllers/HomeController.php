<?php

namespace App\Http\Controllers;

use App\Models\Prihlasenie;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\Console\Input\Input;


class HomeController extends Controller
{


    public function list2()
    {
        //echo 5555555;
        //$task=Task::all();
        $prihlasenie = Prihlasenie::orderBy('id', 'DESC')->first();
        return view('list', ['prihlasenie' => $prihlasenie]);
    }

    public function test()
    {
        echo 222;
    }

    public function getInsertForm(){
        return view('insert');
    }
    public function insertTask(Request $request)
    {
        $meno = $request->input('meno', '');
        // $skore = $request->input('skore', '');

        $prihlasenie = new Prihlasenie();
        $prihlasenie->meno = $meno;
        //$prihlasenie->skore = $skore;
        if($request->input('meno','')==null){
            return back()->with('error', 'Zadajte používateľské meno!');
        }
        if ($prihlasenie::where('meno', '=', $request->input('meno',''))->first()) {
            return back()->with('error', 'Používateľské meno je obsadené!');

        }
        else{
            $prihlasenie = new Prihlasenie();
            $prihlasenie->meno = $meno;

            $prihlasenie->save();
            return redirect()->route('list');
        }
    }

       // $prihlasenie->save();

       // return redirect()->route('list');
        //return redirect()->route('select-all');
  //  }

    public function selectTask($id)
    {
        $prihlasenie = Prihlasenie::find($id);
        return view('select',['prihlasenie'=>$prihlasenie]);

    }

    public function selectAll()
    {

        $prihlaseniee = Prihlasenie::all()->sortBy('created_at');
        return view('select-all',['prihlaseniee'=>$prihlaseniee]);
    }

    public function updateTask(Request $request)
    {
        $id = $request ->input('id', 1);

        $meno = $request->input('meno', '');
       // $skore = $request->input('skore', '');

        $prihlasenie = Prihlasenie::findOrFail($id);
        $prihlasenie->meno = $meno;
       // $prihlasenie->skore =$skore;
        $prihlasenie->update();

        return redirect()->route('select', ['id'=>$id]);
    }

    public function getUpdateForm($id){
        $prihlasenie = Prihlasenie::find($id);
        return view('update', ['prihlasenie'=>$prihlasenie]);
    }

    public function deleteTask($id)
    {
        $prihlasenie = Prihlasenie::findOrFail($id);
        $prihlasenie->delete();
        return redirect()->route('select-all');

    }
}
