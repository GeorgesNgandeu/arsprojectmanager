
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>ARSProject Manager</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
       body{
            font-family: "AVENIR NEXT", Times, serif;
            background-color: hsl(0, 0%, 95%);
       }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .content {
        width:1000px;
        margin:0 auto;
        background-color: hsl(0, 0%, 100%)
      }

      .borderless td, .borderless th {
          border: none;
      }
    </style>
    <!-- Custom styles for this template -->
  </head>
  <body>
    <div class="content">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal"><img src="/img/logo.png" alt="logo" width="125" height="25"></h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="{{ route('main') }}">Acceuil</a>
                <a class="p-2 text-dark" href="#">Mes projets</a>
                <a class="p-2 text-dark" href="#">Mes devis</a>
                <a class="p-2 text-dark" href="#">Nos réalisations</a>
            </nav>
            <a class="btn btn-outline-danger" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                Se deconnecter
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" style="background: url(/img/femme.png) no-repeat; background-repeat: no-repeat; background-position: center top; height: 27rem; width: 62.6rem; margin-top: -1rem;">
            <h1 class="display-4" style="margin-top: 6rem; color: white; font-size: 3rem; text-decoration-line: underline;">Acceuil</h1>
        </div>

        <div class="container h-100 mt-3">
            <div class="row h-100 justify-content-center align-items-center"">
                <div>
                    <a class="btn btn-outline-danger" href="{{ route('addproject') }}">Nouveau projet</a>
                    <a class="btn btn-outline-danger ml-5" href="{{ route('addproject') }}">Dévis non traités</a>
                    <a class="btn btn-danger ml-5" href="{{ route('addproject') }}">Les dévis traités</a>
                </div>
            </div>

            <div class="row" style="margin-top: 5rem;">
                <div class="col-lg-6">
                    <p style="margin-left: 17rem; color: red; font-weight: bold; font-size: 1.2rem;">Roma</p>
                    <div class="table-responsive-lg" style="margin-left: 10rem;">
                        <table class="table borderless">
                            <tr>
                                <td>fonction 1</td>
                                <td></td>
                                <td>service 1</td>
                            </tr>
                            <tr>
                                <td>fonction 2</td>
                                <td></td>
                                <td>service 2</td>
                            </tr>
                            <tr>
                                <td>fonction 3</td>
                                <td></td>
                                <td>service 3</td>
                            </tr>
                            <tr>
                                <td>fonction 4</td>
                                <td></td>
                                <td>service 4</td>
                            </tr>
                        </table>
                    </div>
                    <button type="button" class="btn btn-danger" style="margin-left: 16rem;">Valider</button>
                </div>
                <div class="col-lg-6">
                    <div style="margin-top: 2rem;">
                        <img src="/img/roma.jpeg" alt="" class="roma" style="width: 15rem; width: 4rem; border-radius: 2rem;">
                        <img src="/img/tablette1.jpeg" alt="" class="tab1">
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 5rem;">
                <div class="col-lg-6">
                    <div style="margin-top: 2rem; margin-left: 2rem;">
                        <img src="/img/clickontyler.jpeg" alt="" class="tab1"> 
                        <img src="/img/roma.jpeg" alt="" class="roma" style="width: 15rem; width: 4rem; border-radius: 5rem; margin-left: 5rem;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <p style="margin-left: 12rem; color: red; font-weight: bold; font-size: 1.2rem;">Roma</p>
                    <div class="table-responsive-lg" style="margin-left: 4rem;">
                        <table class="table borderless">
                            <tr>
                                <td>fonction 1</td>
                                <td></td>
                                <td>service 1</td>
                            </tr>
                            <tr>
                                <td>fonction 2</td>
                                <td></td>
                                <td>service 2</td>
                            </tr>
                            <tr>
                                <td>fonction 3</td>
                                <td></td>
                                <td>service 3</td>
                            </tr>
                            <tr>
                                <td>fonction 4</td>
                                <td></td>
                                <td>service 4</td>
                            </tr>
                        </table>
                    </div>
                    <button type="button" class="btn btn-danger" style="margin-left: 12rem;">Valider</button>
                </div>
            </div>

            <div class="row" style="margin-top: 5rem;">
                <div class="col-lg-6">
                    <div style="margin-top: 2rem; margin-left: 2rem;">
                        <img src="/img/tablette2.jpeg" alt="" class="tab1" style="width: 17rem;"> 
                        <img src="/img/roma.jpeg" alt="" class="roma" style="width: 15rem; width: 4rem; border-radius: 5rem; margin-left: 5rem;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <p style="margin-left: 12rem; color: red; font-weight: bold; font-size: 1.2rem;">Roma</p>
                    <div class="table-responsive-lg" style="margin-left: 4rem;">
                        <table class="table borderless">
                            <tr>
                                <td>fonction 1</td>
                                <td></td>
                                <td>service 1</td>
                            </tr>
                            <tr>
                                <td>fonction 2</td>
                                <td></td>
                                <td>service 2</td>
                            </tr>
                            <tr>
                                <td>fonction 3</td>
                                <td></td>
                                <td>service 3</td>
                            </tr>
                            <tr>
                                <td>fonction 4</td>
                                <td></td>
                                <td>service 4</td>
                            </tr>
                        </table>
                    </div>
                    <button type="button" class="btn btn-danger" style="margin-left: 12rem;">Valider</button>
                </div>
            </div>

            <div class="row mt-5" style="background: url(/img/laptop1.png) no-repeat; background-repeat: no-repeat; background-position: center top; height: 27rem; width: 62.6rem; margin-top: -1rem; padding:2rem;">
                <div class="col-lg-6">
                    <h1 class="text-center" style="font-size: 2.5rem;  color: white; margin-top: 1rem;">Nous contacter</h1>
                    <p class="text-center" style="font-size: 1rem;  color: white;">Tel: +237784512</p>  
                    <p class="text-center" style="font-size: 1rem;  color: white;">Email: azerty@azerty.com</p>  
                    <p class="text-center" style="font-size: 1rem;  color: white;">Adresse: douala bonapriso</p>  
                </div>
                <div class="col-lg-6">
                    <div class="bd-example">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">Nom</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Nom" name="nom">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="inputPassword4">Prenom</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Prenom" name="prenom">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">email</label>
                                <input type="email" class="form-control" id="inputAddress" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="comment">Message:</label>
                                <textarea class="form-control" rows="5" id="comment" placeholder="Message" name="message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>

            <footer class="pt-4 my-md-5 pt-md-5 container h-100">
                <div class="row h-100">
                    <div class="col-6 col-md">
                        <h5>A propos</h5>
                        <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Cool stuff</a></li>
                        <li><a class="text-muted" href="#">Random feature</a></li>
                        <li><a class="text-muted" href="#">Team feature</a></li>
                        <li><a class="text-muted" href="#">Stuff for developers</a></li>
                        <li><a class="text-muted" href="#">Another one</a></li>
                        <li><a class="text-muted" href="#">Last time</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Projet</h5>
                        <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Resource</a></li>
                        <li><a class="text-muted" href="#">Resource name</a></li>
                        <li><a class="text-muted" href="#">Another resource</a></li>
                        <li><a class="text-muted" href="#">Final resource</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Projet</h5>
                        <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Team</a></li>
                        <li><a class="text-muted" href="#">Locations</a></li>
                        <li><a class="text-muted" href="#">Privacy</a></li>
                        <li><a class="text-muted" href="#">Terms</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Projet</h5>
                        <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Team</a></li>
                        <li><a class="text-muted" href="#">Locations</a></li>
                        <li><a class="text-muted" href="#">Privacy</a></li>
                        <li><a class="text-muted" href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
