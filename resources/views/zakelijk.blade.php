<x-layout>
  
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

<div class="offerteSection">
  <div class="info">
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>&#10004; 24/7 Servicedienst
    <br><br>&#10004; 100% Klanttevredenheid<br><br>&#10004; 
    30+ Jaren werkervaring<p>
  </div>

  <form action="add" method="POST" class="offerteForm" name="offerteForm">
  @csrf
 <h1>Offerte aanvragen</h1>
    <ul class="noBullet">
      <li>
        <label for="Naam:"></label>
        <input type="text" class="inputFields" id="naam" 
        name="naam" placeholder="Naam" value="{{ old('naam') }}">
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
        <label for="Bericht:"></label>
        <textarea class="inputFields" id="bericht" 
        name="bericht" placeholder="Bericht" value="">
    </textarea>
      </li>



      <li id="center-btn">
        <input type="submit" id="offerte-btn" name="Verstuur" value="Verstuur">
      </li>
    </ul>
  </form>
</div>


</body>
</html>
</x-layout>