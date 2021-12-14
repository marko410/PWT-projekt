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
//funkcia na pozorovanie či je databáza prázdna alebo nie
    public function jePrazdnaCiNie(Request $request){
        return view('prazdna');
    }

public function vlozScore(Request $request){  //funkcia na vložene score
    sleep(2);

    $score = $request->input('score', ''); //nahranie score do DB

    $prihlasenie = Prihlasenie::latest('id')->first();// zaradenie an koniec
    $prihlasenie->score = $score; // vložiť score do tabulky
    $prihlasenie->update(); //update

    return redirect()->route('select-all'); //zobrazenie rebríčka
}

    public function list2()       //funkcia zodpovedná za zobrazenie prihláseného užívateľa
    {

        $prihlasenie = Prihlasenie::orderBy('id', 'DESC')->first();
        return view('list', ['prihlasenie' => $prihlasenie]);
    }


    public function getInsertForm(){     //prihlasovanie vložiť meno
        return view('insert');

    }
    public function insertTask(Request $request)       // funkcia prihlásenia
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

    public function selectAll()       //funkcia zobrazenia skóre
    {

        $prihlaseniee = Prihlasenie::all()->sortBy('created_at');
        return view('select-all',['prihlaseniee'=>$prihlaseniee]); //zobraz select-all a používateľov
    }

}
