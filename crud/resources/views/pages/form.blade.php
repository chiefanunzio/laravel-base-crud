@extends('layouts.main-layout')
@section('content')
<h1>    FORM NEW OSPITE</h1>   

<form>

    <input type="text" placeholder="inserisci il tuo nome" name="name" id="name">
    <input type="text" placeholder="inserisci il tuo cognome" name="lastname" id="lastname">
    <input type="text" placeholder="inserisci il tuo tipo documento" name="document_type" id="document_type">
    <input type="text" placeholder="inserisci il tuo numero documento" name="document_number" id="document_number">
    <input type="text" placeholder="inserisci il tuo data di nascita" name="date_of_birth" id="date_of_birth">
    <input type="submit" value="aggiungi nuovo ospite">
</form>

   
   

   


@endsection   