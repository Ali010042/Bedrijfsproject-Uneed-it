<x-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@csrf
  @if(Session::get('success'))
<div class="alert alert-success">
    {{ Session::get('success')}}
</div>
@endif

@if(Session::get('fail'))
<div class="alert alert-danger">
    {{ Session::get('fail')}}
</div>
@endif

<div class="drpdwnSection">
  <div class="info">
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>&#10004; Alle Windows producten
    <br><br>&#10004; 100% Klanttevredenheid<br><br>&#10004; 
    30+ Jaren werkervaring <br><br>Geen reparaties voor <br> Chineze afkomstige<p>
        
  </div>

  <form action="add" method="POST" class="drpdwnForm" name="drpdwnForm">
  @csrf
 <h1>Reparatieverzoek</h1>
    <ul class="noBullet">
      <li>
        <label for="Voornaam:"></label>
        <input type="text" class="inputFields" id="naam" 
        name="naam" placeholder="Naam" value="{{ old('naam') }}">
        <br>
        <span style="color:red">@error('naam'){{ $message }} @enderror</span>
      </li>

      <li>
        <label for="Achternaam:"></label>
        <input type="text" class="inputFields" id="achternaam" 
        name="achternaam" placeholder="Achternaam" value="{{ old('naam') }}">
        <br>
        <span style="color:red">@error('naam'){{ $message }} @enderror</span>
      </li>

      <li>
        <label for="Woonadres:"></label>
        <input type="text" class="inputFields" id="woonadres" 
        name="woonadres" placeholder="Woonadres" value="{{ old('naam') }}">
        <br>
        <span style="color:red">@error('naam'){{ $message }} @enderror</span>
      </li>

      <li>
        <label for="Telefoonnummer:"></label>
        <input type="tel" class="inputFields" id="telefoonnummer" 
        name="telefoonnummer" placeholder="Telefoonnummer"  value="{{ old('tel') }}">
        <br>
        <span style="color:red">@error('naam'){{ $message }} @enderror</span>
      </li>

      <li>
        <label for="E-mail"></label>
        <input type="email" class="inputFields" id="email" 
        name="email" placeholder="E-mail" value="{{ old('email') }}">
        <br>
        <span style="color:red">@error('email'){{ $message }} @enderror</span>
      </li>

      <li>
        <label for="Onderwerp:"></label>
        <input type="text" class="inputFields" id="onderwerp" 
        name="onderwerp" placeholder="Onderwerp" value="">
      </li>


      <li>
        <label for="Omschrijving:"></label>
        <textarea class="omschrijvingFields" id="omschrijving" 
        name="omschrijving" placeholder="Omschrijving" value=""></textarea>
      </li>

     <li>
        <input type="submit" id="drpdwn-btn" name="Verstuur" value="Verstuur">
      </li>
    </ul>
  </form>
</div>


</body>
</html>

</x-layout>