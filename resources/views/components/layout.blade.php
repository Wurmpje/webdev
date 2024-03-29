<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
      <header> 
        <div class="navbar">
            <nav> 
                <ul>
                    <li> 
                        <a href="/app"> 
                            Home 
                        </a>
                    </li>
                    <li> 
                        <a href="#Categoriën"> 
                            Categorie 
                        </a> 
                    </li> 
                    <li> 
                        <a href="/about"> 
                            About   
                        </a>
                    </li> 
                </ul>
                    <div class="search"> 
                        <input type="text" 
                            placeholder="Zoek product"> 
                    <button>Zoek</button> 
                    </div>  
            <div class="navbar right">
            </nav>
            <nav>
                <ul>
                    <li>
                                              
                        <a href="/login">Login</a>
                        <a href="registreren">Registreer </a>

                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>   



{{$slot}}


<footer>

      <div class="footer-content">
    <div class="footer-logo">
      <img src="logo.png" alt="Logo">
    </div>
    <div class="footer-info">
      <p>Contacteer ons:</p>
      <p>Email: info@example.com</p>
      <p>Telefoon: +1234567890</p>
    </div>
    <div class="footer-social">
      <p>Volg ons:</p>
      <a href="#" class="social-link">Facebook</a>
      <a href="#" class="social-link">Twitter</a>
      <a href="#" class="social-link">Instagram</a>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2024 Mijn Bedrijfsnaam. Alle rechten voorbehouden.</p>
  </div>

</footer>

</html>