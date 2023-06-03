<form action="/create-em" method="POST">
  @csrf
  <input type="text" name="name" placeholder="name" required>
  <input type="text" name="email" placeholder="email" required>
  <input type="password" name="password" placeholder="Password" required>
  <input type="text" name="nom" placeholder="Nom" required>
  <input type="text" name="prenom" placeholder="Prenom" required>
  <input type="text" name="spécialité" placeholder="Specialité" required>
  <button type="submit">Create EM Account</button>
</form>

