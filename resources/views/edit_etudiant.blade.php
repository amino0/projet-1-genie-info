<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification etduiant </title>
</head>
<body>
<h1>modification des etudiants </h1>
    <center>
        
        <form  method="POST" action="{{url('/edit')}}">
            @csrf
            
  
            @foreach ($etudiants as $row)
      
    <input type="text" name="prenom" value="{{$row->prenom}}"> 
    <br>
    <input type="text" name="nom" value="{{$row->nom}}"> <br>
    <input type="date" name="date" value="{{$row->date}}"> <br>
    <input type="hidden" name="id" value="{{$row->id}}"> <br>
<br>
    <input type="submit" value="modifier">
    @endforeach
</center>


</form>
    
</body>
</html>