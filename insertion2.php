<?php

require 'function.php';
require 'header.php';
session_start();

$pdo = connexion();


$sous_categorie=null;
$succes=null;
$erreur=null;

if(isset($_GET['categorie']))

{
     $categorie=htmlspecialchars($_GET['categorie']);
    
    if(isset($_POST['submit']))
    {
        if(!empty($_POST['titre']) && !empty($_POST['prix']) && !empty($_POST['etat']) && !empty($_POST['region']) && !empty($_POST['ville']) && !empty($_POST['descriptif'])&& !empty($_POST['plus']) )
        {
            
            
            // && isset($_FILES['file1']) && isset($_FILES['file2']) &&isset($_FILES['file3'])



            $titre=htmlspecialchars($_POST['titre']);
            $prix=htmlspecialchars($_POST['prix']);
            $etat=htmlspecialchars($_POST['etat']);
            $region=htmlspecialchars($_POST['region']);
            $ville=htmlspecialchars($_POST['ville']);
            $descriptif=htmlspecialchars($_POST['descriptif']);
            $plus=htmlspecialchars($_POST['plus']);
            $now = new DateTime();
            $date=$now->format('Y-d-m');
            $heure=date('H')+2;
            $min=date('i');
            $second=date('s');
            $heure_exact=$heure.':'.$min.':'.$second;


           

            if(isset($_POST['sous_categorie']))

            {

            $sous_categorie=htmlspecialchars($_POST['sous_categorie']);

            }

            else 
            {
                $sous_categorie='NON';
            }
            
            
            //     if($_FILES['file1']['error'] == 0)
            //     {
            //         if($_FILES['file1']['size'] <= 300000)
            //         {
                    
            //             $infofichier1 = pathinfo($_FILES['file1']['name']);
            //             $extension1 = $infofichier1['extension'];
            //             $filename1 = $infofichier1['filename'];
            //             $extensions_autorisees= array('jpg', 'jpeg', 'gif', 'png');
            //             //extension
            //             if(in_array($extension1, $extensions_autorisees))
            //             {
                        
            //             $filenewname1 = $filename1.time().'.'.$extension1;

                        
            //             $resultat = move_uploaded_file($_FILES['file1']['tmp_name'], 'images/'.$filenewname1);
            //             //probleme de deplacement
            //             if(!$resultat)
            //                 {
            //                     $erreur = 'Une erreur est survenue lors de deplacement photo 1.';
            //                 } 
            //             }
            //             //problem extension
            //             else 
            //             {
            //                 $erreur = 'L\'extension de la photo1 n\'est pas autorisée.';
            //             }
            //         }

            //         //problem taille
            //         else 
            //         {
            //             $erreur = 'La photo1 uploadé est trop gros';
            //         }

            //     }

            //     //problem recevoir fichier
            //     else 
            //     {
            //         $erreur = 'Une erreur est survenue lors de l\'upload photo 1';
            //     }
            



            // // //deuxime photo
            //   if($_FILES['file2']['error'] == 0)
            //     {
            //         if($_FILES['file2']['size'] <= 300000)
            //         {
                    
            //             $infofichier2 = pathinfo($_FILES['file']['name']);
            //             $extension2 = $infofichier2['extension'];
            //             $filename2 = $infofichier2['filename'];
            //             $extensions_autorisees= array('jpg', 'jpeg', 'gif', 'png');
            //             //extension
            //             if(in_array($extension2, $extensions_autorisees))
            //             {
                        
            //             $filenewname2 = $filename2.time().'.'.$extension1;

                        
            //             $resultat = move_uploaded_file($_FILES['file2']['tmp_name'], 'images/'.$filenewname2);
            //             //probleme de deplacement
            //                 if(!$resultat)
            //                 {
            //                     $erreur = 'Une erreur est survenue lors de deplacemant photo 2.';
            //                 }
            //             }
            //             //problem extension
            //             else 
            //             {
            //                 $erreur = 'L\'extension de la photo2 n\'est pas autorisée.';
            //             }
            //         }

            //         //problem taille
            //         else 
            //         {
            //             $erreur = 'La photo2 uploadé est trop gros';
            //         }

            //     }

            //     //problem recevoir fichier
            //     else 
            //     {
            //         $erreur = 'Une erreur est survenue lors de l\'upload photo 2';
            //     }
            



            // // //photo3

            
            //     if($_FILES['file3']['error'] == 0)
            //     {
            //         if($_FILES['file3']['size'] <= 300000)
            //         {
                    
            //             $infofichier3 = pathinfo($_FILES['file3']['name']);
            //             $extension3 = $infofichier3['extension'];
            //             $filename3 = $infofichier3['filename'];
            //             $extensions_autorisees= array('jpg', 'jpeg', 'gif', 'png');

            //             //extension
            //             if(in_array($extension3, $extensions_autorisees))
            //             {
                        
            //             $filenewname3 = $filename3.time().'.'.$extension1;

                        
            //             $resultat = move_uploaded_file($_FILES['file1']['tmp_name'], 'images/'.$filenewname3);
            //             //probleme de deplacement
            //                 if(!$resultat)
            //                 {
            //                     $erreur = 'Une erreur est survenue lors de deplacement photo3.';
            //                 }
            //             }
            //             //problem extension
            //             else 
            //             {
            //                 $erreur = 'L\'extension de la photo3 n\'est pas autorisée.';
            //             }
            //         }

            //         //problem taille
            //         else 
            //         {
            //             $erreur = 'La photo3 uploadé est trop gros';
            //         }

            //     }

            //     //problem recevoir fichier
            //     else 
            //     {
            //         $erreur = 'Une erreur est survenue lors de l\'upload photo3';
            //     }
            
            

            





                
                $info_photo1=pathinfo($_FILES['photo1']['name']);
                $extension_is1=$info_photo1['extension'];
                $size1=$_FILES['photo1']['size'];
                $filename1=$info_photo1['filename'];
                $filenewname1=$filename1.time().'.'.$extension_is1;
                $resultat1=move_uploaded_file($_FILES['photo1']['tmp_name'],'images/'.$filenewname1);


                $info_photo2=pathinfo($_FILES['photo2']['name']);
                $extension_is2=$info_photo1['extension'];
                $size2=$_FILES['photo2']['size'];
                $filename2=$info_photo2['filename'];
                $filenewname2=$filename2.time().'.'.$extension_is2;
                $resultat2=move_uploaded_file($_FILES['photo2']['tmp_name'],'images/'.$filenewname2);

                $info_photo3=pathinfo($_FILES['photo3']['name']);
                $extension_is3=$info_photo3['extension'];
                $size3=$_FILES['photo3']['size'];
                $filename3=$info_photo3['filename'];
                $filenewname3=$filename3.time().'.'.$extension_is3;
                $resultat3=move_uploaded_file($_FILES['photo3']['tmp_name'],'images/'.$filenewname3);
            



            $sql = "INSERT INTO test (titre,prix,etat,region,ville,categorie,sous_categorie,descriptif,photo1,photo2,photo3,date_creation,heure,premium,photo4,photo5) VALUES (:titre,:prix,:etat,:region,:ville,:categorie,:sous_categorie,:descriptif,:photo1,:photo2,:photo3,:date_creation,:heure,:premium,:photo4,:photo5)";
            // $test = $database->insert_user_id();
            
            $requete = $pdo->prepare($sql);
            $resultat=$requete->execute(array(

                'titre'=>$titre,
                'prix'=>$prix,
                'etat'=>$etat,
                'region'=>$region,
                'ville'=>$ville,
                'categorie'=>$categorie,
                'sous_categorie'=>$sous_categorie,
                'descriptif'=>$descriptif,
                'photo1'=>$filenewname1,
                'photo2'=>$filenewname2,
                'photo3'=>$filenewname3,
                'date_creation'=>$date,
                'heure'=>$heure_exact,
                'premium'=>0,
                'photo4'=>'non',
                'photo5'=>'non'

            ));
            
            $sql="SELECT id FROM `test` ORDER BY id DESC LIMIT 1";
            $requete2 = $pdo->query($sql);
            while($donnees = $requete2->fetch())
            {
               $id=$donnees['id'];
               $_SESSION['id'] =$id;
            }


            echo $titre.'<br>';
            echo $prix.'<br>';
            echo $etat.'<br>';
            echo $region.'<br>';
            echo $ville.'<br>';
            echo $categorie.'<br>';
            echo $sous_categorie.'<br>';
            echo $descriptif.'<br>';
            echo $filenewname1.'<br>';
            echo $filenewname2.'<br>';
            echo $filenewname3.'<br>';
            echo $plus.'<br>';
            echo $date.'<br>';
            echo $heure;
            
            //verification d'insertion des donnees a la base de donnees
            if($resultat) 
                {
                    if($plus=='payment1')
                    {
                        header("refresh:3;url=paiment1.php");
                    }

                    else if($plus =='payment2')
                    {

                        header("refresh:3;url=paiment2.php");
                    }

                    else if($plus =='payment3')
                    {
                        header("refresh:3;url=paiment3.php");
                    } 
                    else if($plus =='question')
                    {
                        header("refresh:3;url=formquestion.php");
                    }
                    else 
                    {
                
                    $succes = "Votre annonce a bien été ajoutée.";
                    }
                }

            else
                {
                $erreur = "Une erreur est survenue lors de l'ajout de votre annonce.";
                }
            

            }
            else 
            {
                $erreur='remplissez tous les champs';
            }
        
        }
        }

?>






                <div class="col-sm-6">


                    
                         <?php 
                        if($erreur)
                        {
                            echo $erreur;
                        }
                        if($succes)
                        {
                            echo $succes;
                        }
                        else 
                        {
                        ?>
                        <h4>Conmpletez votre annonce</h4>
                    <form action="" method="POST" enctype="multipart/form-data">  

                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" name="titre" class="form-control" id="titre" placeholder="Titre">
                        </div>
                        <div class="form-group">
                            <label for="prix">Prix €</label>
                            <input type="number" name="prix" class="form-control" id="prix" placeholder="prix">
                        </div>
                        <div class="form-group">
                            <label for="etat">Etat</label>
                            <select  name="etat" class="form-control" id="etat" placeholder="etat">
                                <option value="neuf">Neuf</option>
                                <option value="bon etat">Bon etat</option>
                                <option value="tres bon etat">Tres bon etat</option>
                            
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="region">Region</label>
                            <select type="text" name="region" class="form-control" id="region" placeholder="Region">
                                <option value="Auvergne-Rhône-Alpes">Auvergne-Rhône-Alpes</option>
                                <option value="Bourgogne-Franche-Comte">Bourgogne-Franche-Comte</option>
                                <option value="Bretagne">Bretagne</option>
                                <option value="Centre-Val de Loire">Centre-Val de Loire</option>
                                <option value="Corse">Corse</option>
                                <option value="Grand Est">Grand Est</option>
                                <option value="Hauts-de-France">Hauts-de-France</option>
                                <option value="Île-de-France">Île-de-France</option>
                                <option value="Normandie">Normandie</option>
                                <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
                                <option value="Occitanie">Occitanie</option>
                                <option value="Pays de la Loire">Pays de la Loire</option>
                                <option value="Provence-Alpes-Côte d'Azur">Provence-Alpes-Côte d'Azur</option>

                            </select>
                        </div>


                        
                            <?php if($categorie =='Mode'){?>

                                <div class="form-group">
                                    <label for="Sous_categorie">Mode</label>
                                    <select  name="sous_categorie" class="form-control"  id="Sous_categorie" >

                                        <option value="Vetement Homme">Vetement Homme</option>
                                        <option value="Vetement Femme">Vetement Femme</option>
                                        <option value="Montre_bijou">Montre_bijou</option>
                                        <option value="Vetement Bebe">Vetement Bebe</option>
                                        
                                    </select>

                                </div>
                                <?php 
                                }
                                ?>

                                <?php 
                                if($categorie =='Immobilier'){?>
                                <div class="form-group">
                                    <label for="Sous_categorie">Immobilier</label>
                                    <select  name="sous_categorie" class="form-control"  id="Sous_categorie" >

                                        <option value="Maison">Maison</option>
                                        <option value="Appartement">Appartement</option>
                                        <option value="Terrain">Terrain</option>
                                        <option value="Magasin">Magasin</option>
                                        
                                    </select>

                                </div>
                                <?php 
                                }
                                ?>


                                <?php 

                                if($categorie =='Loisir'){?>
                                <div class="form-group">
                                    <label for="Sous_categorie">Loisir</label>
                                    <select  name="sous_categorie" class="form-control"  id="Sous_categorie" >

                                        <option value="Velo">Velo</option>
                                        <option value="Livre">Livre</option>
                                        <option value="Instrument de musique">Instrument de musique</option>
                                        
                                    </select>

                                </div>
                                <?php
                                }
                                ?>

                                <?php 

                                if($categorie =='Multimedia'){?>
                                <div class="form-group">
                                    <label for="Sous_categorie">Multimedia</label>
                                    <select  name="sous_categorie" class="form-control"  id="Sous_categorie" >

                                        <option value="Informatique">Informatique</option>
                                        <option value="Consoles">Consoles</option>
                                        <option value="Telephonie">Telephonie</option>
                                        
                                    </select>

                                </div>


                                <?php
                                }
                                ?>

                                <?php 

                                if($categorie =='Vehicule'){?>
                                <div class="form-group">
                                    <label for="Sous_categorie">Vehicule</label>
                                    <select name="sous_categorie" class="form-control"  id="Sous_categorie" >

                                        <option value="Voiture">Voiture</option>
                                        <option value="Moto">Moto</option>
                                        <option value="Camion">Camion</option>
                                        <option value="Caravaning">Caravaning</option>
                                        <option value="Utilitaires">Utilitaires</option>
                                    </select>

                                </div>
                                    <?php }
                                    ?>
    

                       
                        <div class="form-group">
                            <label for="ville">Ville</label>
                            <input type="text" name="ville" class="form-control" id="ville" >
                        </div>
                        <div class="form-group">
                            <label for="descriptif">Description</label>
                            <textarea name="descriptif" class="form-control" id="descriptif" row="3" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="photo1">Photo 1</label>
                            <input type="file" name="photo1" id="photo1" placeholder="photo1" required>
                        </div>
                        <div class="form-group">
                            <label for="photo2">Photo 2</label>
                            <input type="file" name="photo2" id="photo2" placeholder="photo2" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="photo3">Photo 3</label>
                            <input type="file" name="photo3" id="photo3" placeholder="photo3" required>
                        </div>


                        <div class="form-group">
                                    A- 2 photos de plus pour 5 euro
                                    <input type="radio" name="plus" value="payment1" ><br>
                                    B- Annonce Premieum pour 25 euro
                                    <input type="radio" name="plus" value="payment2"><br>
                                    A+B pour 30 euro
                                    <input type="radio" name="plus" value="payment3"><br>
                                    Repondez a un questionaire pour ajouter deux photos
                                    <input type="radio" name="plus" value="question">
                                    Non,merci
                                    <input type="radio" name="plus" value="rien">
                        </div>
                        

                    <button type="submit" name="submit">submit</button>









        </form>

                                <?php }?>
                        


