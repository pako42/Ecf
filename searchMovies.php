<?php

include (__DIR__ ."./../view/header.php");

?>

<h1>Rechercher un film</h1>

<div class="content">

    <div class="form-group">
        <label for="name">Nom du film</label>
        <input type="text" name="name" href="?page=searchMovies" class="form-control" id="name"
               placeholder="Rechercher un film..." required>
    </div>
    <button class="btn btn-primary" href="?page=searchMovies" id="btn_search">Rechercher</button>

    <div class="SearchMovieController" id="SearchMovieController">
    </div>

</div>


<?php

include (__DIR__ ."./../view/footer.php");