<?php

require 'function.php';
require 'header.php';

$pdo = connexion();






$succes=null;
$point=0;

if(isset($_GET['question']))
{
    $question=htmlspecialchars($_GET['question']);


    //capitaux et pays

    if (isset($_POST['submit1']))
    {
        if (!empty($_POST['iran']) && !empty($_POST['Austria']) && !empty($_POST['Germany']) && !empty($_POST['France']) && !empty($_POST['Luxembourg']) && !empty($_POST['Japan']) && !empty($_POST['Kuwait']) && !empty($_POST['Peru']) && !empty($_POST['Sweden']) && !empty($_POST['Jordan']) )

        {

            $Sweden=htmlspecialchars($_POST['Sweden']);
            $iran=htmlspecialchars($_POST['iran']);
            $Austria=htmlspecialchars($_POST['Austria']);
            $Germany=htmlspecialchars($_POST['Germany']);
            $France=htmlspecialchars($_POST['France']);
            $Luxembourg=htmlspecialchars($_POST['Luxembourg']);
            $Japan=htmlspecialchars($_POST['Japan']);
            $Kuwait=htmlspecialchars($_POST['Kuwait']);
            $Peru=htmlspecialchars($_POST['Peru']);
            $Jordan=htmlspecialchars($_POST['Jordan']);

            if($Sweden=='Stokholm'){$point+=10;}
            if($iran=='Tehran'){$point+=10;}
            if($Austria=='Vienna'){$point+=10;}
            if($Germany=='berlin'){$point+=10;}
            if($France=='paris'){$point+=10;}
            if($Luxembourg=='Luxembourg'){$point+=10;}
            if($Japan=='tokyo'){$point+=10;}
            if($Kuwait=='Kuwait city'){$point+=10;}
            if($Peru=='lima'){$point+=10;}
            if($Jordan=='amman'){$point+=10;}
            


            $succes='Les points gagnés : ';


        }
    }


    //la geographie
    if (isset($_POST['submit2']))
    {
        if (!empty($_POST['lac']) && !empty($_POST['contient']) && !empty($_POST['Ocean']) && !empty($_POST['montagnes']) && !empty($_POST['etat']) && !empty($_POST['fleuve']) && !empty($_POST['sud']) && !empty($_POST['peuple']) && !empty($_POST['population']) && !empty($_POST['riviere']) )
        {

            $population=htmlspecialchars($_POST['population']);
            $lac=htmlspecialchars($_POST['lac']);
            $contient=htmlspecialchars($_POST['contient']);
            $Ocean=htmlspecialchars($_POST['Ocean']);
            $montagnes=htmlspecialchars($_POST['montagnes']);
            $etat=htmlspecialchars($_POST['etat']);
            $fleuve=htmlspecialchars($_POST['fleuve']);
            $sud=htmlspecialchars($_POST['sud']);
            $peuple=htmlspecialchars($_POST['peuple']);
            $riviere=htmlspecialchars($_POST['riviere']);

            if($population=='monaco'){$point+=10;}
            if($lac=='kaspienne'){$point+=10;}
            if($contient=='Asie'){$point+=10;}
            if($Ocean=='Pacifique'){$point+=10;}
            if($montagnes=='Andes'){$point+=10;}
            if($etat=='Vatican'){$point+=10;}
            if($fleuve=='Nil'){$point+=10;}
            if($sud=='Nicaragua'){$point+=10;}
            if($peuple=='chine'){$point+=10;}
            if($riviere=='belgique'){$point+=10;}


            $succes='Les points gagnés : ';


        }
    }

    //l'histoire
    if (isset($_POST['submit3']))
    {
        if (!empty($_POST['iran']) && !empty($_POST['Austria']) && !empty($_POST['Germany']) && !empty($_POST['France']) && !empty($_POST['Luxembourg']) && !empty($_POST['Japan']) && !empty($_POST['Kuwait']) && !empty($_POST['Peru']) && !empty($_POST['Sweden']) && !empty($_POST['Jordan']) )
        {

            $Sweden=htmlspecialchars($_POST['Sweden']);
            $iran=htmlspecialchars($_POST['iran']);
            $Austria=htmlspecialchars($_POST['Austria']);
            $Germany=htmlspecialchars($_POST['Germany']);
            $France=htmlspecialchars($_POST['France']);
            $Luxembourg=htmlspecialchars($_POST['Luxembourg']);
            $Japan=htmlspecialchars($_POST['Japan']);
            $Kuwait=htmlspecialchars($_POST['Kuwait']);
            $Peru=htmlspecialchars($_POST['Peru']);
            $Jordan=htmlspecialchars($_POST['Jordan']);

            if($Sweden=='Stokholm'){$point+=10;}
            if($iran=='Tehran'){$point+=10;}
            if($Austria=='Vienna'){$point+=10;}
            if($Germany=='berlin'){$point+=10;}
            if($France=='paris'){$point+=10;}
            if($Luxembourg=='Luxembourg'){$point+=10;}
            if($Japan=='tokyo'){$point+=10;}
            if($Kuwait=='Kuwait city'){$point+=10;}
            if($Peru=='lima'){$point+=10;}
            if($Jordan=='amman'){$point+=10;}


            $succes='Les points gagnés : ';
        }


    }

    //l'itterature
    if (isset($_POST['submit4']))
    {
        if (!empty($_POST['Misérables']) && !empty($_POST['auteur']) && !empty($_POST['personnage']) && !empty($_POST['Dostoievski']) && !empty($_POST['selon']) && !empty($_POST['Gloire']) && !empty($_POST['Iliade']) && !empty($_POST['Potter']) && !empty($_POST['Prince']) && !empty($_POST['jeunesse']) )
        {

            $Prince=htmlspecialchars($_POST['Prince']);
            $Misérables=htmlspecialchars($_POST['Misérables']);
            $auteur=htmlspecialchars($_POST['auteur']);
            $personnage=htmlspecialchars($_POST['personnage']);
            $Dostoievski=htmlspecialchars($_POST['Dostoievski']);
            $selon=htmlspecialchars($_POST['selon']);
            $Gloire=htmlspecialchars($_POST['Gloire']);
            $Iliade=htmlspecialchars($_POST['Iliade']);
            $Potter=htmlspecialchars($_POST['Potter']);
            $jeunesse=htmlspecialchars($_POST['jeunesse']);

            
            if($Misérables=='Emile Zola'){$point+=10;}
            if($auteur=='Maupassant'){$point+=10;}
            if($personnage=='Don Quichotte'){$point+=10;}
            if($Dostoievski=='Antigone'){$point+=10;}
            if($selon=='quatre'){$point+=10;}
            if($Gloire=='Marcel Pagnol'){$point+=10;}
            if($Iliade=='La guerre de Troie'){$point+=10;}
            if($Potter=='Rowling'){$point+=10;}
            if($Prince=='aviateur'){$point+=10;}
            if($jeunesse=='10000'){$point+=10;}


            $succes='Les points gagnés : ';
        }
        


    }


   

        
}
    






?>






Vous devez obtenir plus de 50% de points pour ajouter des photos (2)


<div class="col-sm-6 mb-5 mt-3" >

<h1 style="color:red;" class="text-center ">Do you know .... ?</h1>
</div>

    
    

    
    <?php 
    if ($succes)
    {

     echo $succes.$point.'<br>';
      //50% gagné => 
        if($point > 50 )
        {

        header("refresh:3;url=photoplus.php");
        
        }

        //sinon 

        else{

        echo 'desolé ,les points ne sont pas suffisants , mais vous povez recommencez ! recommencez ?';
        //un button pour oui et un button pour non

        //--->oui
        header("refresh:3;url=formquestion.php");

        //--->non 
        //header("refresh:3;url=index.php");
        }


    }
    else {

        if ( $question =='capital')
    {?>

    <form action="" method="POST" style="font-family: \'Pacifico\', cursive;margin-left:5%;" class="m-5">


            <div class="form-group">
            1- Quelle est la capital d'iran?
            <br>
                <input type="radio" value="Tehran" name="iran">Teheran
                <input type="radio" value="tokyo" name="iran">Isphahan
                <input type="radio" value="nice" name="iran">Chiraz
            </div>


            <div class="form-group"> 
            2- Quelle est la capital d'autriche?
            <br>
            <input type="radio" value="Amman" name="Austria">Amman
                <input type="radio" value="kuwait city" name="Austria">Munchen
                <input type="radio" value="Vienna" name="Austria">Vienne
            </div>


            <div class="form-group">
            3- Quelle est la capital d'allmagne?
            <br>
            <input type="radio" value="lima" name="Germany">Bon
                <input type="radio" value="paris" name="Germany">Kohln
                <input type="radio" value="berlin" name="Germany">berlin
            </div>


            <div class="form-group">
            4- Quelle est la capital de France?
            <br>
            <input type="radio" value="strasbourg" name="France">Strasbourg
                <input type="radio" value="paris" name="France">Paris
                <input type="radio" value="nice" name="France">Nante
            </div>


            <div class="form-group">
            5- Quelle est la capital de Luxembourg?
            <br>
            <input type="radio" value="brussel" name="Luxembourg">Brussel
                <input type="radio" value="Luxembourg" name="Luxembourg">Luxembourg
                <input type="radio" value="stokholm" name="Luxembourg">Amesterdam
            </div>

            <div class="form-group">
            6- Quelle est la capital de Japan?
            <br>
            <input type="radio" value="Kuwait city" name="Japan">Kuwait city
                <input type="radio" value="tokyo" name="Japan">tokyo
                <input type="radio" value="stokholm" name="Japan">stokholm
            </div>

            <div class="form-group">
            7- Quelle est la capital de Jordan?
            <br>
            <input type="radio" value="amman" name="Jordan">amman
                <input type="radio" value="tokyo" name="Jordan">tokyo
                <input type="radio" value="tehran" name="Jordan">tehran
            </div>

            <div class="form-group">
            8- Quelle est la capital de Kuwait?
            <br>
            <input type="radio" value="istanbul" name="Kuwait">istanbul
                <input type="radio" value="Riad" name="Kuwait">Riad
                <input type="radio" value="Kuwait city" name="Kuwait">Kuwait city
            </div>

            <div class="form-group"> 
            9- Quelle est la capital de  Peru?
            <br>
            <input type="radio" value="abadan" name="Peru">abadan
                <input type="radio" value="lima" name="Peru">lima
                <input type="radio" value="london" name="Peru">london
            </div>

            <div class="form-group">
            10- Quelle est la capital de Swede?
            <br>
            <input type="radio" value="Stokholm" name="Sweden">Stokholm
                <input type="radio" value="brussel" name="Sweden">brussel
                <input type="radio" value="vienna" name="Sweden">vienna
            </div>


        <button type="submit" name="submit1" class="btn btn-danger">Submit</button>


    </form>


    <?php
    
    }
     if ($question =='geographie')
    {?>
    <h1>La geographie :)</h1>

    <form action="" method="POST" style="font-family: \'Pacifico\', cursive;margin-left:5%;" class="m-5">
        1- Quel est le plus grand lac du monde  ?
            <br>
                <input type="radio" value="baikal" name="lac">Lac Baikal
                <input type="radio" value="kaspienne" name="lac">La mer Kaspienne
                <input type="radio" value="victoria" name="lac">Lac victoria</div>


            <div class="form-group"> 
            2- Quel est le continent qui a la plus grande superficie ?
            <br>
            <input type="radio" value="Amerique " name="continent">L'Amerique du sud
                <input type="radio" value="Amerique du nord" name="continent">L'Amerique du nord
                <input type="radio" value="Asie" name="continent">L'Asie</div>


            <div class="form-group">
            3- Quel est l’océan qui possède la plus grande superficie ?
            <br>
            <input type="radio" value="Atlantique" name="Ocean">Ocean Atlantique
                <input type="radio" value="Pacifique" name="Ocean">Ocean Pacifique
                <input type="radio" value="Indien" name="Ocean">Ocean Indien 
            </div>


            <div class="form-group">
            4- Quelle est la chaîne de montagnes la plus longue du monde ?
            <br>
            <input type="radio" value="Andes" name="montagnes">Les Cordilleres des Andres
                <input type="radio" value="Australienne" name="montagnes">La Cordilleres Australienne
                <input type="radio" value="Himalaya" name="montagnes">L'Himalaya</div>


            <div class="form-group">
            5- Quel est le plus petit État du monde ?
            <br>
            <input type="radio" value="Gibraltar" name="etat">Gibraltar
                <input type="radio" value="vatican" name="etat">Le Vatican
                <input type="radio" value="Andorre" name="etat">Andorre
            </div>

            <div class="form-group">
            6- Quel est le fleuve le plus long du monde ?
            <br>
            <input type="radio" value="Nil" name="fleuve">Le Nil
                <input type="radio" value="Mississippi" name="fleuve">Le Mississippi
                <input type="radio" value="Amazone" name="fleuve">L'Amazone
            </div>

            <div class="form-group">
            7- Quel pays ne fait pas partie de l’Amérique du Sud ?
            <br>
            <input type="radio" value="Nicaragua" name="sud">Nicaragua
                <input type="radio" value="Venezuela" name="sud">Venezuela
                <input type="radio" value="Uruguay" name="sud">Uruguay
            </div>

            <div class="form-group">
            8- Quel est le pays le plus peuplé du monde ?
            <br>
            <input type="radio" value="inde" name="peuple">L'Inde
                <input type="radio" value="chine" name="peuple">Le Chine
                <input type="radio" value="mexique" name="peuple">Le Mexique
            </div>

            <div class="form-group"> 
            9- Quel État a la plus grande densité de population ?
            <br>
            <input type="radio" value="inde" name="population">Inde
                <input type="radio" value="monaco" name="population">Monaco
                <input type="radio" value="japon" name="population">Japon
            </div>

            <div class="form-group">
            10- La riviere L'Oise court dans quel pays?
            <br>
            <input type="radio" value="france" name="riviere">La France
                <input type="radio" value="allemagne" name="riviere">L'Allemagne
                <input type="radio" value="belgique" name="riviere">La Belgique
            </div>


        <button type="submit" name="submit2" class="btn btn-danger">Submit</button>


    </form>

    <?php
    }
    if ($question =='histoire')
    {?>


<form action="" method="POST" style="font-family: \'Pacifico\', cursive;margin-left:5%;" class="m-5">
    1- En quelle année l'Empire Romain d'Occident tomba-t-il ? 
            <br>
                <input type="radio" value="476" name="romain">476
                <input type="radio" value="592" name="romain">592
                <input type="radio" value="334" name="romain">334</div>


            <div class="form-group"> 
            2- Qui fut sacré empereur à Aix-la-Chapelle en l'an 800 ?
            <br>
            <input type="radio" value="Clovis " name="sacre">Clovis
                <input type="radio" value="Louix XIV" name="sacre">Louix XIV
                <input type="radio" value="Charlemagne" name="sacre">Charlemagne</div>


            <div class="form-group">
            3- Qui fut surnommé "le Roi Soleil" ?
            <br>
            <input type="radio" value="Hugues Capet" name="roisoleil">Hugues Capet
                <input type="radio" value="Napoléon" name="roisoleil">Napoléon
                <input type="radio" value="Louis XIV" name="roisoleil">Louis XIV
            </div>


            <div class="form-group">
            4- En quelle année le mur de Berlin a-t-il été construit ?
            <br>
            <input type="radio" value="1961" name="mur">1961
                <input type="radio" value="1946" name="mur">1946
                <input type="radio" value="1998" name="mur">1998</div>


            <div class="form-group">
            5- En quelle année la première guerre du Golfe a-t-elle pris fin ?
            <br>
            <input type="radio" value="1980" name="guerre">1980
                <input type="radio" value="1991" name="guerre"> 1991
                <input type="radio" value="2004" name="guerre">2004
            </div>

            <div class="form-group">
            6- Jacques Chirac fut président de la République de :
            <br>
            <input type="radio" value="a" name="president">1981 à 1995
                <input type="radio" value="b" name="president">1995 à 2007 
                <input type="radio" value="c" name="president">2007 à 2012
            </div>

            <div class="form-group">
            7-Qui a dit « Veni, vidi, vici » ?
            <br>
            <input type="radio" value="Jules César" name="parole">Jules César
                <input type="radio" value="Attila" name="parole">Attila
                <input type="radio" value="James Bond" name="parole">James Bond
            </div>

            <div class="form-group">
            8-  Qui prononça l'appel du 18 Juin 1940 ? 
            <br>
            <input type="radio" value="Staline" name="1940">Staline
                <input type="radio" value="Mussolini" name="1940">Mussolini
                <input type="radio" value="Charles de Gaulle" name="1940">Charles de Gaulle
            </div>

            <div class="form-group"> 
            9- En quelle année l'homme posa le pied sur la Lune ? 
            <br>
            <input type="radio" value="1924" name="Lune">1924
                <input type="radio" value="1969" name="Lune">1969
                <input type="radio" value="1988" name="Lune">1988
            </div>

            <div class="form-group">
            10-  De quel pays était originaire Platon ?
            <br>
            <input type="radio" value="Italie" name="Platon">Italie
                <input type="radio" value="Egypte" name="Platon">Egypte
                <input type="radio" value="Grèce" name="Platon">Grèce  
            </div>


        <button type="submit" name="submit3" class="btn btn-danger">Submit</button>


    </form>

    <?php 
    }
     if($question=='livre')
    {
    ?>
            <form action="" method="POST" style="font-family: \'Pacifico\', cursive;margin-left:5%;" class="m-5">


            1- Qui a écrit Les Misérables ?
            <br>
                <input type="radio" value="Emile Zola" name="Misérables">Emile Zola
                <input type="radio" value="Voltaire" name="Misérables">Voltaire
                <input type="radio" value="Victor Hugo" name="Misérables">Victor Hugo</div>


            <div class="form-group"> 
            2- Quel est l'auteur du roman Le Rouge et le Noir ?
            <br>
            <input type="radio" value="Maupassant" name="auteur">Maupassant  
                <input type="radio" value="Stendhal" name="auteur">Stendhal
                <input type="radio" value="Ravaillac" name="auteur">Ravaillac</div>


            <div class="form-group">
            3- Quel personnage de roman chasse les moulins à vent ?
            <br>
            <input type="radio" value="Don Quichotte" name="personnage">Don Quichotte
                <input type="radio" value="Barbe Noire" name="personnage">Barbe Noire
                <input type="radio" value="Hercule Poirot" name="personnage">Hercule Poirot
            </div>


            <div class="form-group">
            4- Lequel de ces romans n'a pas été écrit par Dostoïevski ?
            <br>
            <input type="radio" value="Crime et Châtiment" name="Dostoievski">Crime et Châtiment
                <input type="radio" value="Les frères Karamazov" name="Dostoievski">Les frères Karamazov
                <input type="radio" value="Antigone" name="Dostoievski">Antigone</div>


            <div class="form-group">
            5- Combien y avait-il de mousquetaires selon un titre de roman d'Alexandre Dumas ? 
            <br>
            <input type="radio" value="quatre" name="selon">Quatre  
                <input type="radio" value="deux" name="selon">Deux
                <input type="radio" value="huit" name="selon">Huit
            </div>

            <div class="form-group">
            6- La Gloire de mon père est un roman écrit par : 
            <br>
            <input type="radio" value="Marcel Pagnol" name="Gloire">Marcel Pagnol 
                <input type="radio" value="Diderot" name="Gloire">Diderot 
                <input type="radio" value="Paul Valéry" name="Gloire">Paul Valéry
            </div>

            <div class="form-group">
            7-L’Iliade d’Homère raconte :
            <br>
            <input type="radio" value="La naissance de Rome" name="Iliade">La naissance de Rome
                <input type="radio" value="La guerre de Troie" name="Iliade">La guerre de Troie
                <input type="radio" value="James Bond" name="Iliade">James Bond
            </div>

            <div class="form-group">
            8-  Qui a écrit la série littéraire "Harry Potter" ? 
            <br>
            <input type="radio" value="Rowling" name="Potter">J. K. Rowling
                <input type="radio" value="Heston" name="Potter">Charlton Heston
                <input type="radio" value="Tell" name="Potter">Guillaume Tell
            </div>

            <div class="form-group"> 
            9- Qui est le personnage principal du "Petit Prince de Saint-Exupéry ? 
            <br>
            <input type="radio" value="explorateur" name="Prince">Un explorateur assoiffé
                <input type="radio" value="aviateur" name="Prince">Un aviateur en panne
                <input type="radio" value="chanteur" name="Prince">Un chanteur d'opéra
            </div>

            <div class="form-group">
            A votre avis, combien de livres jeunesse sont publiés chaque année ?
            <br>
            <input type="radio" value="1000" name="jeunesse">Plus de 1000
                <input type="radio" value="5000" name="jeunesse">Plus de 5000
                <input type="radio" value="10000" name="jeunesse">Plus de 10.000  
            </div>


        <button type="submit" name="submit4" class="btn btn-danger">Submit</button>


    </form>

    <?php 
    }
}
    ?>

</div>


