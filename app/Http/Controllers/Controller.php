<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){

    $trains = Trains::all();
    

   if(!Trains::where("codice_treno", "83993662")->first()) { 
      $interegionale = new Trains();
      $interegionale->azienda = 'Trenitalia';
      $interegionale->stazione_di_partenza = 'L aquila';
      $interegionale->stazione_di_arrivo = 'Sulmona';
      $interegionale->orario_di_partenza = '10:00:00';
      $interegionale->orario_di_arrivo = '11:0:00';
      $interegionale->codice_treno = '83993662';
      $interegionale->numero_carrozze = '5';
      $interegionale->in_orario = '1';
      $interegionale->cancellato = '0';
      $interegionale->save();
   }

    return view('welcome', compact('trains') );

   }
}