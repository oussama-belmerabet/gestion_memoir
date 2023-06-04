<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <link href="../css/app.css" rel="stylesheet">


</head>
<body>


  <form action="/create-enseignant" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name" required>
    <input type="text" name="email" placeholder="email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="text" name="prenom" placeholder="Prenom" required>
    <input type="text" name="grade" placeholder="Grade" required>
    <input type="text" name="domaine" placeholder="Domaine" required>
    <input type="number" name="année_r" placeholder="Année de recrutement" required>
    <input type="number" name="nbr_sujet" placeholder="Nombre de sujets" required>
    <button type="submit">Create Enseignant Account</button>
  </form>




</body>
</html>
