<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Good;

class GeneralController extends Controller
{
   public function load(){
      $table_content = Good::All();
      return view('homepage.homepage', ['table' => $table_content]);
   }

    public function save(Request $request){

      $new_good = new Good();

      $new_good->codice_articolo = $request->cod_art;
      $new_good->nome_articolo = $request->name_art;
      $new_good->quantità = $request->amount;
      $new_good->prezzo_acquisto = $request->buy_price;
      $new_good->prezzo_vendita = $request->sell_price;
      $new_good->marca = $request->brand;
      $new_good->descrizione = $request->art_desc;

      $new_good->save();

      return redirect()->route('home');
   }

   public function delete($elementId){
      $row_to_delete = Good::where('id', $elementId)->delete();
      return redirect()->route('home');
   }
}
