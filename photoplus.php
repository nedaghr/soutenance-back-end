<?php

require 'function.php';
require 'header.php';
session_start();
$pdo = connexion();
$erreur=array();
$succes=null;
$filenewname4=null;
$filenewname5=null;

if(isset($_POST['submit']))
 {
    if(isset($_FILES['photo4']) && isset($_FILES['photo5']))
    {

        //premier photo de cette page ou bien 4eme 
            if($_FILES['photo4']['error'] == 0)
            {
                
                //On vérifie si le fichier n'est pas trop gros
                if($_FILES['photo4']['size'] <= 300000)
                {
                    //On vérifie si l'utilisateur a bien uploadé un fichier avec une extension autorisée
                    $infofichier = pathinfo($_FILES['photo4']['name']);

                    //On récupère l'extension (.png, .jpg etc.) et le filename (nom du fichier sans extension (soleil))
                    $extension = $infofichier['extension'];
                    $filename4 = $infofichier['filename'];

                    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

                    //In array permet de voir si une valeur est présente dans un tableau
                    //Dans notre cas on regarde si $extension est présent dans le tableau d'extensions autorisees
                    if(in_array($extension, $extensions_autorisees))
                    {
                        //On va réecrire le nom du fichier.
                        //On a le nom du fichier de l'utilisateur grâce à $_FILES['monfichier']['name'];
                        //Ci-dessus on avait, grâce à la fonction pathinfo récupéré l'extension du fichier ainsi que son nom sans extension
                        $filenewname4 = $filename4.time().'.'.$extension;

                        //On place le fichier qui est pour le moment stocké temporairement sur le serveur à l'endroit de notre choix.
                        $resultat = move_uploaded_file($_FILES['photo4']['tmp_name'], 'images/'.$filenewname4);
                        if(!$resultat)
                        {
                            $erreur[] = 'Une erreur est survenue lors de l\'upload photo 4.';
                        }
                    }
                    else 
                    {
                        $erreur[] = 'L\'extension de la photo 4 n\'est pas autorisée .';
                    }
                }  
                else 
                {
                    $erreur[] = 'La photo 4 uploadé est trop gros';
                }  
            }
            else 
            {
                $erreur[] = 'Une erreur est survenue lors de l\'upload de photo 4';
            }


            //second photo de cette page ou bien 5eme
            if($_FILES['photo4']['error'] == 0)
            {
                if($_FILES['photo5']['size'] <= 300000)
                    {
                        //On vérifie si l'utilisateur a bien uploadé un fichier avec une extension autorisée
                        $infofichier = pathinfo($_FILES['photo5']['name']);
                        
                        //On récupère l'extension (.png, .jpg etc.) et le filename (nom du fichier sans extension (soleil))
                        $extension = $infofichier['extension'];
                        $filename5 = $infofichier['filename'];

                        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

                        //In array permet de voir si une valeur est présente dans un tableau
                        //Dans notre cas on regarde si $extension est présent dans le tableau d'extensions autorisees
                        if(in_array($extension, $extensions_autorisees))
                        {
                            //On va réecrire le nom du fichier.
                            //On a le nom du fichier de l'utilisateur grâce à $_FILES['monfichier']['name'];
                            //Ci-dessus on avait, grâce à la fonction pathinfo récupéré l'extension du fichier ainsi que son nom sans extension
                            $filenewname5 = $filename5.time().'.'.$extension;

                            //On place le fichier qui est pour le moment stocké temporairement sur le serveur à l'endroit de notre choix.
                            $resultat = move_uploaded_file($_FILES['photo4']['tmp_name'], 'images/'.$filenewname5);
                            if(!$resultat)
                            {
                                $erreur[] = 'Une erreur est survenue lors de l\'upload photo 5.';
                            }
                        }
                        else 
                        {
                            $erreur[] = 'L\'extension de la photo 5 n\'est pas autorisée .';
                        }
                    }  
                    else 
                    {
                        $erreur[] = 'La photo 5 uploadé est trop gros';
                    }  
            }    
            else 
            {
                $erreur[] = 'Une erreur est survenue lors de l\'upload de photo 5';
            }

            $id=$_SESSION['id'] ;

            $sql = 'UPDATE test SET photo4 = :photo4,photo5 = :photo5 WHERE id = :id';
            $requete = $pdo->prepare($sql);
            $resultat = $requete->execute(array(
                'id' => $id,
                'photo4' => $filenewname4,
                'photo5' => $filenewname5

            )); 


            if($resultat)
            {
                $succes='Vos photos sont ajoutés';

                // header("refresh:3;url=index.php");
            }
            else
            {
                $erreur[]='une erreur lors de l\'ajout des photos';
            }
    }
    else
    {
        $erreur[]='veillez ajouter des photos supplementaire';
    }
}


  
    
 

?>

        <!-- fin de code principal -->

        <!-- //Formmulaire  -->

        <?php 
            if($erreur)
            {
            var_dump($erreur);
            }
            if($succes)
            {
            echo $succes;
            }
            else 
            {
            ?>


            <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="photo4">Photo 4</label>
                            <input type="file" name="photo4" id="photo4" placeholder="photo4">
                        </div>
                        
                        <div class="form-group">
                            <label for="photo5">Photo 5</label>
                            <input type="file" name="photo5" id="photo5" placeholder="photo5">
                        </div>

                        <button type="submit" name="submit">Ajouter photo</button>


            </form>

        <?php } ?>
            