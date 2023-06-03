<form action="/create-ra" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name" required>
    <input type="text" name="email" placeholder="email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="text" name="num_es" placeholder="Enseignant ID" required>
    <button type="submit">Create RA Account</button>
  </form>