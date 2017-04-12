<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PrêtOutils.com</title>
        <meta name="description" content="Prêter des outils"/>
    </head>
    <body>
        <div id="app">
            <h1>Tout les outils : </h1>
            <br />
            <div>
                @foreach($outils as $outils)
                    <p class="NomOutil">
                        {{$outils->nom}}
                        <br />
                        Appartient à l'utilisateur : {{$outils->user}}
                    </p>
                @endforeach
            </div>
            <br />
            <button onclick="document.getElementById('FormAddOutil').style.display = 'block'; "> Prêter son propre outil</button>
            <br /><br />
            <form id="FormAddOutil" method="POST" action="/" style="display:none">
                <label for="inputNom">Ajouter le nom : </label>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input id="inputNom" type="text" name="nom" placeholder="ex: perceuse" />
                <br /><br />
                <input name="submit" type="submit" />
            </form>
        </div>
    </body>
</html>