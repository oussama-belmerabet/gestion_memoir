<form action="/sujets/propose" method="POST">
    @csrf

    <div class="form-group">
      <label for="intitule">Intitulé:</label>
      <input type="text" name="intitulé" id="intitule" class="form-control">
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <textarea name="description" id="description" class="form-control" rows="5"></textarea>
    </div>

    

    <!-- Add other input fields for additional sujet fields -->

    <button type="submit" class="btn btn-primary">Propose Subject</button>
  </form>
