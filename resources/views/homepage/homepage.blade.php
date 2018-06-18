@extends('layout.layout')

@section('page_title')
   BackOffice
@endsection

@section('main_section')
   <div id="goods_table">
      <div id="header_bar">
         <span class="col_header row_itms id">Id art.</span>
         <span class="col_header row_itms cod_art">Cod. art.</span>
         <span class="col_header row_itms name_art">Nome art.</span>
         <span class="col_header row_itms brand">Marca</span>
         <span class="col_header row_itms desc">Descrizione</span>
         <span class="col_header row_itms quantity">Quantità</span>
         <span class="col_header row_itms sell_price">Prezzo vendita</span>
         <span class="col_header row_itms buy_price">Prezzo acquisto</span>
         <span class="col_header row_itms actions">Azioni</span>
      </div>
      <div class="row_bar save_row">
         <form id="save_form" action="{{route('save')}}" method="post">

            @csrf
            <span class="row_itms id">&nbsp</span>
            <span class="row_itms cod_art"><input id="cod_art" type="text" name="cod_art" value=""></span>
            <span class="row_itms name_art"><input id="name_art" type="text" name="name_art" value=""></span>
            <span class="row_itms brand"><input id="brand" type="text" name="brand" value=""></span>
            <span class="row_itms desc"><textarea id="art_desc" name="art_desc" rows="1" cols="80"></textarea></span>
            <span class="row_itms quantity"><input id="amount" type="text" name="amount" value=""></span>
            <span class="row_itms sell_price"><input id="sell_price" type="text" name="sell_price" value=""></span>
            <span class="row_itms buy_price"><input id="buy_price" type="text" name="buy_price" value=""></span>
            <span class="row_itms actions">
               <span class="actions_itms"><input type="submit" name="add_btn" value="salva"></span>
            </span>
         </form>
      </div>
      @php
      $cont = 0;
      @endphp
      @foreach ($table as $table_row)
         @if($loop->iteration % 2 != 0)
            <div class="row_bar">
         @else
            <div class="row_bar colored">
         @endif
            <span class="row_itms id">{{$table_row['id']}}</span>
            <span class="row_itms cod_art">{{$table_row['codice_articolo']}}</span>
            <span class="row_itms name_art">{{$table_row['nome_articolo']}}</span>
            <span class="row_itms brand">{{$table_row['marca']}}</span>
            <span class="row_itms desc">{{$table_row['descrizione']}}</span>
            <span class="row_itms quantity">{{$table_row['quantità']}}</span>
            <span class="row_itms sell_price">{{$table_row['prezzo_vendita']}} €</span>
            <span class="row_itms buy_price">{{$table_row['prezzo_acquisto']}} €</span>
            <span class="row_itms actions">
               <span class="actions_itms"><a class="modify_btn" href="{{route('find', $table_row['id'])}}"><i class="fas fa-pencil-alt"></i></a></span>
               <span class="actions_itms"><a href="{{route('delete', $table_row['id'])}}"><i class="fas fa-times"></i></a></span>
            </span>
         </div>
      @endforeach
   </div>
@endsection

@section('form_cnt')
   <div id="modify_form_cnt">
      <form action="{{route('modify')}}" method="post">

         @csrf
         <ul>
            <li>
               <label for="cod_art">Codice articolo</label>
               <input class="data_cnt" id="cod_art" type="text" name="cod_art" value="">
               <label for="name_art">Nome articolo</label>
               <input class="data_cnt" id="name_art" type="text" name="name_art" value="">
            </li>
            <li>
               <label for="brand">Marca</label>
               <input class="data_cnt" id="brand" type="text" name="brand" value="">
               <label for="amount">Quantità</label>
               <input class="data_cnt" id="quantity" type="text" name="amount" value="">
            </li>
            <li>
               <label for="sell_price">Prezzo di vendita</label>
               <input class="data_cnt" id="sell_price" type="text" name="sell_price" value="">
               <label for="buy_price">Prezzo di acquisto</label>
               <input class="data_cnt" id="buy_price" type="text" name="buy_price" value="">
            </li>
         </ul>
         <ul>
            <li>
               <label for="art_desc">Descrizione articolo</label>
               <textarea class="data_cnt" id="desc" name="art_desc" rows="8" cols="70"></textarea>
            </li>
         </ul>
         <ul id="modify_btn_cnt">
            <li>
               <input type="submit" name="mod_btn" value="Conferma">
            </li>
         </ul>
      </form>
      <div id="esc_btn">
         <i class="fas fa-times"></i>
      </div>
   </div>
@endsection
