<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- materialize icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- style css -->
    <link rel="stylesheet" href="../../../public/css/templates/template-01/style.css">
    <link rel="stylesheet" href="../../../public/css/templates/template-01/mesplats.css">
    <link rel="stylesheet" href="../../../public/css/templates/template-01/_slidebar.css">
    <link rel="stylesheet" href="../../../public/css/templates/template-01/platscommander.css">
    <link rel="stylesheet" href="../../../public/css/templates/template-01/histoire.css">
</head>

<body>

<!-- ---------------------------------- menu navigation ---------------------------------- -->

<ul id="slide-out" class="side-nav fixed">
    <!-- whenlogged
       <li><div class="background-logged">
               <div class="user-view">

               <a href="#!user"><img class="circle" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-1/c0.0.160.160/p160x160/20767735_1634982593192961_209014930482741611_n.jpg?oh=05cdc29ff8b2698d5d8c0927a15c5a51&oe=5B36D7D2"></a>
               <a href="#!name"><span class="white-text name">John Doe</span></a>
               <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
               </div>
           </div></li>  -->
    <!-- when non logged -->

    <li><div class="background">
            <a class="waves-effect waves-light btn " id="connexion">Connexion</a>
            <a class="waves-effect waves-light btn " id="inscription">inscription</a>
        </div></li>

    <!-- connexion
    <li><div class="background-connexion">
            <form action="">
                <div class="row" id="row-connexion">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row" id="row-connexion">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light"  type="submit" name="action">Connexion

                </button>
            </form>
        </div></li> -->
    <li><a class="waves-effect tooltipped " data-tooltip="Ici vous pouvez mettre en vente vos plats fait maison :)" href="#!">Partagez vos plats !</a></li>
    <li><a class="waves-effect" href="#!">Vos ventes en cours</a></li>
    <li><a class="waves-effect" href="#!"><i class="material-icons">perm_identity</i>Votre Profil</a></li>
    <li><a class="waves-effect" href="#!"><i class="material-icons">timeline</i>Satistique</a></li>
    <li><a class="waves-effect" href="#!"><i class="material-icons">search</i>Recherche</a></li>

</ul>
<a href="#" data-activates="slide-out" class="button-collapse" style="position: fixed; top: 0; left: 0; z-index: 10"><i class="material-icons">menu</i></a>






<main>
    <!-- ---------------------------------- filtre accueil---------------------------------- -->

    <div class="parallax" style="width: 100%; height: 200px">

    </div>

    <div class="section white">
        <div class="row container"id="container">
            <h1> Notre Histoire</h1>
            <h5>Salut moi c'est Sam !</h5>
            <p>L'histoire de HomEat a commencé un lundi soir...</p>
            <p> Après une longue journée de cours, affalé sur mon canapé devant Netflix, est venu
                le moment de se poser LA  question du soir, que vais-je manger ???</p>
            <p>Pâtes, Macdo ou kébab ? Quand soudain une merveilleuse odeur de Rizotto envahit l'appartement.
                2 options s'offrent à moi. La première : me lever du canapé et entamer une longue discussion téléphonique avec ma mère pour apprendre les bases de la cuisine en un temps record.</p>
            <p>OU : Trouver un prétexte pour sonner chez ma voisine, une mignone métisse séduisante, passionnée d'émissions de cuisine. Qui depuis mon arrivée dans l'immeuble me rappel tous les soirs que je suis flemmard et fauché, lui sous entendre discrètement
                que son plat me donne drôlement envie et finir par rentrer chez moi dépité et me résoudre à manger des pâtes.
                C'est à ce moment précis que l'idée de HomEat m'est venu à l'esprit.</p>
            <h2>Vous l'aurez compris, Sam c'est un peu nous tous !  <h2/>

        </div>
    </div>
    <div class="parallax-container"  style="width: 100%; height: 200px">
        <div class="parallax"></div>
    </div>









    <h1 id="creat"> Les créateurs du projet </h1>


    <div class="row">
        <div class="col s12" id="profilH" >
            <div class="col s4 z-depth-5" id="photoH">

            </div>

            <h4> Hedi Mokrani</h4>
            <h6>King of CSS</h6>
            <p></p>
        </div>
        <div class="col s12" id="profilE">
            <div class="col s4 z-depth-5" id="photoE">

            </div>

            <h4>Emilie Follin</h4>
            <h6>Queen of API</h6>

            <p></p>
        </div>
        <div class="col s12" id="profilJ">
            <div class="col s4 z-depth-5" id="photoJ">

            </div>

            <h4>Jérôme Ballue</h4>
            <h6>Prince of  CSS</h6>
        </div>
        <div class="col s12" id="profilL">
            <div class="col s4 z-depth-5" id="photoL">

            </div>

            <h4>Lou Lemarié</h4>
            <h6>Queen of BDD</h6>
        </div>



        <div class="col s12" id="profilET">
            <div class="col s4 z-depth-5" id="photoET">
            </div>

            <h4>Etienne De Bazelaire de Ruppierre</h4>
            <h6>King of Back</h6>
        </div>







</main>


<div class="row">

    <div class="col s2 offset-s12 z-depth-3 hide-on-med-and-down"id="sidebar">
        <img src="https://i.imgur.com/LZUvLF5.png" alt="" class="circle responsive-img" id="logo"> <!-- notice the "circle" class -->
        <div class="meilleurcuisto" id="meilleur" >
            <h4 style="text-align: center;"> Top <i class="small material-icons">looks_one</i></h4>
            <h4>Les lasagnes au saumon de Frederic</h4>
            <div style=" width: 100%;">
                <a href="">
                    <img  style=" width: 100%;" class="responsive-img z-depth-1" src="https://www.enviedebienmanger.fr/sites/default/files/styles/bandeau_recette/public/lasagnes_de_saumon_aux_asperges_0.png?itok=kkV2Ct4W" alt="">
                </a>

            </div>

        </div>
        <div class="recettedumoment" id="recette">

            <h4 style="text-align: center;"> LA Recette <i class="small material-icons">restaurant_menu</i> </h4>
            <h5> retouver ici les recettes du moment en détail et leurs créateurs</h5>
            <div style=" width: 100%;">
                <a href="" class="tooltipped" data-position="left" data-tooltip="Le gatin dauphinois d'Emily">
                    <img  style=" width: 100%;" class="responsive-img z-depth-1" src="https://cac.img.pmdstatic.net/fit/http.3A.2F.2Fwww.2Ecuisineactuelle.2Efr.2Fvar.2Fcui.2Fstorage.2Fimages.2Frecettes-de-cuisine.2Frecettes-pour-tous.2Ffamiliale.2Fgratin-dauphinois-traditionnel.2F1089980-2-fre-FR.2Fgratin-dauphinois-traditionnel.2Ejpg/748x372/quality/80/crop-from/center/gratin-dauphinois-traditionnel.jpeg" alt="">
                </a>


            </div>
            <div style=" width: 100%;">
                <a href="" class="tooltipped" data-position="left" data-tooltip="Le poulet coco de Terry">
                    <img  style=" width: 100%;" class="responsive-img z-depth-1" src="https://www.cookomix.com/wp-content/uploads/2016/06/poulet-coco-3-epices-800x600.jpg" alt="">
                </a>
            </div>

        </div>




    </div>



</div>










<!-- -------------------------------- Script jquery ----------------------------------- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script>

    $('.button-collapse').sideNav({
        menuWidth: 200, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true, // Choose whether you can drag to open on touch screens,

    });


    $(document).ready(function() {
        $('select').material_select();
    });
    //Script pour heure de dejeuner
    $('.timepicker').pickatime({
        default: 'now', // Set default time: 'now', '1:30AM', '16:30'
        fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
        twelvehour: false, // Use AM/PM or 24-hour format
        donetext: 'OK', // text for done-button
        cleartext: 'Clear', // text for clear-button
        canceltext: 'Cancel', // Text for cancel-button
        autoclose: false, // automatic close timepicker
        ampmclickable: true, // make AM PM clickable
        aftershow: function(){} //Function for after opening timepicker
    });


    //------------------------------------------------ remplacement du bouton connexion par le formulaire de connexion

    $('#connexion').click(function(){

        $( "div.background" ).replaceWith( "<div class=\"background-connexion\">\n" +
            "            <form action=\"\">\n" +
            "                <div class=\"row\" id=\"row-connexion\">\n" +
            "                    <div class=\"input-field col s12\">\n" +
            "                        <input id=\"email\" type=\"email\" class=\"validate\">\n" +
            "                        <label for=\"email\">Email</label>\n" +
            "                    </div>\n" +
            "                </div>\n" +
            "                <div class=\"row\" id=\"row-connexion\">\n" +
            "                    <div class=\"input-field col s12\">\n" +
            "                        <input id=\"password\" type=\"password\" class=\"validate\">\n" +
            "                        <label for=\"password\">Password</label>\n" +
            "                    </div>\n" +
            "                </div>\n" +
            "                <button class=\"btn waves-effect waves-light\"  type=\"submit\" name=\"action\">Connexion\n" +
            "\n" +
            "                </button>\n" +
            "            </form>\n" +
            "        </div>" );
    });
    $('#inscription').click(function(){
        document.getElementById("overlay").style.display = "block";
    });
    $('#overlay-off').click(function(){
        document.getElementById("overlay").style.display = "none";
    });

    $(document).ready(function(){
        $('.collapsible').collapsible();
    });




</script>
</body>
</html>