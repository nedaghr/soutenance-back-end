<?php

require 'function.php';
require 'header.php';

$pdo = connexion();


?>






<form action="questionnaire.php" method="GET" >



        <div class="form-group">
            Des livres
            <input type="radio" name="question" value="livre" ><br>
            La geographie
            <input type="radio" name="question" value="geographie"><br>
            L'histoire
            <input type="radio" name="question" value="histoire"><br>
            Les capitales et les pays
            <input type="radio" name="question" value="capital">
        </div>


        <button type="submit" class="btn btn-danger">Envoyer</button>
</form>
