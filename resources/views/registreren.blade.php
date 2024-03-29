<x-layout>
<body>
  <div class="input-group">
    <h2>Registreer</h2>
    <form action="/register" method="POST" id="registration-form">
      @csrf
      <div class="form-group">
        {{-- Label en input voor het vullen van velden in een form. In de route gebruiken we de post method ipv de get methode. Tevens maken we gebruik van de CSRF (Cross-site request forgery). Als we dit niet opnemen werkt de publicatie niet van je form(laravel) --}}
        {{-- DIENT NOG GEOPTIMALISEERD TE WORDEN MET CSS --}}
        <label for="username-register" class="text-muted mb-1"><small>Gebruikersnaam</small></label>
        <input value="{{old('username')}}" name="username" id="username-register" class="form-control" type="text" placeholder="Kies een gebruikersnaam" autocomplete="off" />
        {{-- Laat een error zien wanneer het veld niet of goed gevuld is --}}
        @error('username')
        <div id="error-message">Gelieve het gebruikersnaamveld in te vullen</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="email-register" class="text-muted mb-1"><small>Email</small></label>
        <input value="{{old('email')}}" name="email" id="email-register" class="form-control" type="text" placeholder="test@hotmail.com" autocomplete="off" />
        @error('email')
        <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="password-register" class="text-muted mb-1"><small>Wachtwoord</small></label>
        <input name="password" id="password-register" class="form-control" type="password" placeholder="Maak een wachtwoord" />
        @error('password')
        <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="password-register-confirm" class="text-muted mb-1"><small>Bevestig wachtwoord</small></label>
        <input name="password_confirmation" id="password-register-confirm" class="form-control" type="password" placeholder="Bevestig wachtwoord" />
        @error('password_confirmation')
        <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
        @enderror
      </div>

      <button type="submit">Registreer</button>
    </form>
  </div>
</div>
</div>
</body>
</x-layout>