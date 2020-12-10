<?php

include (__DIR__ ."./../view/header.php");

?>

<h1>Ajouter un film</h1>

<div class="content">
    <form action="?page=addMovie" method="post">
        <div class="form-group">
            <label for="name">Titre du film</label>
            <input type="text" name="name" class="form-control" id="name"
                   required>
        </div>
        <div class="form-group">
            <label for="img">Affiche du film</label>
            <input type="text" name="img" class="form-control" id="img"
                   required>
        </div>
        <div class="form-group">
            <label for="year">Année du film</label>
            <input type="number" name="year" class="form-control" id="year" min="1891" max="2020" required>
        </div>

        <button type="submit" class="btn btn-primary">Sauvegarder ce film</button>
    </form>
</div>

<?php

include (__DIR__ ."./../view/footer.php");