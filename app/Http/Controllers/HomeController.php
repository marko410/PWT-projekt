<?php

namespace App\Http\Controllers;

use App\Models\Prihlasenie;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;


class HomeController extends Controller
{

    public function jePrazdnaCiNie(Request $request){
        //$jePrazdna = Prihlasenie::all()->sortBy('created_at');
       // $jePrazdna->score = $score;
        //return view('select-all',['prihlaseniee'=>$prihlaseniee]);
      //  $users = DB::table('score')->count();
       // $prihlasen->score = $score;
        return view('prazdna');
    }

public function vlozScore(Request $request){
    sleep(2);

    $score = $request->input('score', '');

    $prihlasenie = Prihlasenie::latest('id')->first();
    $prihlasenie->score = $score;
    $prihlasenie->update();

    return redirect()->route('select-all');
}

    public function list2()
    {

        $prihlasenie = Prihlasenie::orderBy('id', 'DESC')->first();
        return view('list', ['prihlasenie' => $prihlasenie]);
    }

    public function showGame()
    {
        return view('game');
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

        $prihlasenie = new Prihlasenie();
        $prihlasenie->meno = $meno;

        if($request->input('meno','')==null){
            return back()->with('error', 'Zadajte používateľské meno!');
        }
        if ($prihlasenie::where('meno', '=', $request->input('meno',''))->first()) {
            return back()->with('error', 'Používateľské meno je obsadené!');

        }
        if(strlen($request->input('meno',''))>9){
            return back()->with('error', 'Maximálny povolený počet znakov je 9');
        }
        else{
            $prihlasenie = new Prihlasenie();
            $prihlasenie->meno = $meno;

            $prihlasenie->save();
            return redirect()->route('list');
        }
    }



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


        $prihlasenie = Prihlasenie::findOrFail($id);
        $prihlasenie->meno = $meno;
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
