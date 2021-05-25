<h1>DETTAGLI OSPITE</h1>

<div>
    <ul>
        <li><h2>Nome:{{$ospite->name}}</h2></li>
        <li><h2>Cognome:{{$ospite->lastname}}</h2></li>
        <li><h4>documento:{{$ospite->document_type}} ---> Numero Documento:{{$ospite->document_number}}</h4></li>
        <li>Data DI Nascita:{{$ospite->date_of_birth}}<h5></h5></li>
    </ul>
</div>            
<span><a href="{{route('home')}}">torna alla homepage</a></span>   