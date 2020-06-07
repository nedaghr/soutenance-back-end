<?php

require 'header.php';

?>


 <form action="insertion2.php" method="GET">

    <div class="form-group">
        <label for="Categorie">Categorie</label>
            <select name="categorie" class="form-control"  id="Categorie" >
                <option value="divers">Divers</option>
                <option value="Immobilier">Immobilier</option>
                <option value="Loisir">Loisir</option>
                <option value="Multimedia">Multimedia</option>
                <option value="Mode">Mode</option>         
                 <option value="Vehicule">Vehicule</option>
            </select>

    </div>

            <button type="submit" class="btn btn-success">Continuer</button>

</form>
              

