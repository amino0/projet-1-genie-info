<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet GI</title>
</head>
<body>
    <center><h1>Projet 1</h1></center>

<br>
<br>
<label for=""> Aller à la page 2 </label> 
<a href="{{url("https://facebook.com")}}"> Click ici </a>
    
<br><br>
<label for="">Aller a la page 3</label>
<a href="{{url('/bonsoir')}}">click ici</a>


<br><br>
<form method="POST" action="{{url('/insert')}}">
    @csrf
    <input type="text" name='prenom' placeholder="veuillez saisir votre prenom ?">
    <input type="text" name='nom' placeholder="veuillez saisir votre nom ?">
    <br>
    <input type="date" name='date' >
    <input type="submit">

</form>
</body>
</html>