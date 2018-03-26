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
    <link rel="stylesheet" href="../../../public/css/templates/template-01/style.css">
    <link rel="stylesheet" href="..\..\..\public\css\templates\template-01\mesplats.css">
    <link rel="stylesheet" href="..\..\..\public\css\templates\template-01\_slidebar.css">
    <link rel="stylesheet" href="..\..\..\public\css\templates\template-01\platscommander.css">
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
<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

<main>
<!--
<div class="row">
    <div class="container">

        <div class="box-auteur col s12 m12 z-depth-3" id="box-auteur" style="background-color: white">


            <div class="col s12 m6" style="padding-bottom: 40px; border-right: 1px solid rgba(128,128,128,0.16)">

                <img style="width: 30%; padding: 10px;" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/23795538_1650975411690508_364041306487306684_n.jpg?_nc_cat=0&oh=2322e6a982435ed2c7a7093fa557cdcd&oe=5B73C98E" class="circle img-responsive" alt="photo de profil auteur">

                <h5>Nom de l'auteur</h5>
                <br>

                <div class="col s12">
                    <p>Ici vous pouvez trouvez l'email</p>

                    <hr>
                </div>


                <div class="col s12">
                    <p>Ici vous pouvez trouver la note</p>

                    <hr>
                </div>

                <div class="col s12">
                    <p>ici vous pouvez trouver le niveau d'exp</p>

                    <hr>
                </div>

                <div class="col s12">
                    <p>ici vous pouvez trouver le plat le plus populaire</p>

                    <hr>
                </div>


                <div class="col s12">
                    <p>ici vous pouvez trouver une bio ecrite par l'auteur</p>

                    <hr>
                </div>






            </div>
            <div class="col s12 m6" id="right-panel-message">

                <div class="col s12" style="background-color: rgba(128,128,128,0.05); margin-top:10px; overflow: auto; max-height:500px;">

                    <div class="container">
                        <div class="col s12 z-depth-2 un-commentaire" style="margin: 5px;">
                            <span><img style="width: 15%; padding: 5px;" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/23795538_1650975411690508_364041306487306684_n.jpg?_nc_cat=0&oh=2322e6a982435ed2c7a7093fa557cdcd&oe=5B73C98E" class="circle img-responsive" alt="photo de profil commentaire"> <em> Nom du commentateur </em></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium aut distinctio ducimus hic ipsam, laboriosam, magni necessitatibus neque numquam obcaecati officiis quidem quod voluptas voluptatibus? Corporis modi nesciunt reprehenderit!</p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col s12 z-depth-2 un-commentaire" style="margin: 5px;">
                            <span><img style="width: 15%; padding: 5px;" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/23795538_1650975411690508_364041306487306684_n.jpg?_nc_cat=0&oh=2322e6a982435ed2c7a7093fa557cdcd&oe=5B73C98E" class="circle img-responsive" alt="photo de profil commentaire"> <em> Nom du commentateur </em></span>
                            <p>neque numquam obcaecati officiis quidem quod voluptas voluptatibus? Corporis modi nesciunt reprehenderit!</p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col s12 z-depth-2 un-commentaire" style="margin: 5px;">
                            <span><img style="width: 15%; padding: 5px;" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/23795538_1650975411690508_364041306487306684_n.jpg?_nc_cat=0&oh=2322e6a982435ed2c7a7093fa557cdcd&oe=5B73C98E" class="circle img-responsive" alt="photo de profil commentaire"> <em> Nom du commentateur </em></span>
                            <p>neque numquam obcaecati officiis quidem quod voluptas voluptatibus? Corporis modi nesciunt reprehenderit!</p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col s12 z-depth-2 un-commentaire" style="margin: 5px;">
                            <span><img style="width: 15%; padding: 5px;" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/23795538_1650975411690508_364041306487306684_n.jpg?_nc_cat=0&oh=2322e6a982435ed2c7a7093fa557cdcd&oe=5B73C98E" class="circle img-responsive" alt="photo de profil commentaire"> <em> Nom du commentateur </em></span>
                            <p>neque numquam obcaecati officiis quidem quod voluptas voluptatibus? Corporis modi nesciunt reprehenderit!</p>
                        </div>
                    </div>



                </div>

                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12 valign-wrapper">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea id="icon_prefix2" class="materialize-textarea" data-length="140" maxlength="140"></textarea>
                                <label for="icon_prefix2">Votre commentaire</label>
                                <a class="btn-floating btn waves-effect waves-light"><i class="material-icons">send</i></a>
                            </div>

                        </div>
                    </form>
                </div>


            </div>

        </div>





    </div>
</div>
-->
    <div class="container">
    <div class="card">
        <div class="card-content center-align">
            <img style="width: 10%; padding: 10px;" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/23795538_1650975411690508_364041306487306684_n.jpg?_nc_cat=0&oh=2322e6a982435ed2c7a7093fa557cdcd&oe=5B73C98E" class="circle responsive-img" alt="photo de profil auteur">
            <h5>Nom de l'auteur</h5>
        </div>
        <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
                <li class="tab"><a href="#plat">Mes plats</a></li>
                <li class="tab"><a class="active" href="#messages">Mes messages</a></li>
                <li class="tab"><a href="#profil">Mon profil</a></li>
            </ul>
        </div>
        <div class="card-content grey lighten-4">
            <div id="plat">

                <div class="button2">
                    <a href="!#" class="waves-effect waves-light btn-large z-depth-3" id="button2">Mettez en vente votre nouveau plat :)</a>
                </div>
                <div class="ajoutplats col s12 z-depth-3">
                    <div class="row  valign-wrapper">
                        <div class="col s2"><img class="responsive-img " src="https://www.rd.com/wp-content/uploads/2017/10/12_Citrus_Healthy-Holiday-Food-Gifts-Instead-of-Fruit-Cake_524210419-ch_ch.jpg" id="logo2"></div>
                        <div class="col s2">
                            <p>Nom du plat</p>

                        </div>
                        <div class="col s2">
                            <p><em>Ingrédient :</em></p>
                        </div>
                        <div class="col s2">
                            <p> <a class="btn-floating btn-large waves-effect waves-light blue" style="font-size: 0.7em">2/parts</a></p>
                        </div>
                        <div class="col s2">
                            <p>Heure</p>
                        </div>
                        <div class="col s2">
                            <p> <a class="btn-floating btn-large waves-effect waves-light green" style="font-size: 0.7em">2€</a></p>
                        </div>
                    </div>
                    <a class="waves-effect waves-light btn button-remettre">Remettre ce plat en vente</a>

                </div>




            </div>
            <div id="messages">
                <div class="col s12 m6" id="right-panel-message">

                    <div class="col s12" style="background-color: rgba(128,128,128,0.05); margin-top:10px; overflow: auto; max-height:500px;">

                        <div class="container">
                            <div class="col s12 z-depth-2 un-commentaire" style="margin: 5px;">
                                <span><img style="width: 15%; padding: 5px;" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/23795538_1650975411690508_364041306487306684_n.jpg?_nc_cat=0&oh=2322e6a982435ed2c7a7093fa557cdcd&oe=5B73C98E" class="circle img-responsive" alt="photo de profil commentaire"> <em> Nom du commentateur </em></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium aut distinctio ducimus hic ipsam, laboriosam, magni necessitatibus neque numquam obcaecati officiis quidem quod voluptas voluptatibus? Corporis modi nesciunt reprehenderit!</p>
                            </div>
                        </div>
                        <div class="container">
                            <div class="col s12 z-depth-2 un-commentaire" style="margin: 5px;">
                                <span><img style="width: 15%; padding: 5px;" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/23795538_1650975411690508_364041306487306684_n.jpg?_nc_cat=0&oh=2322e6a982435ed2c7a7093fa557cdcd&oe=5B73C98E" class="circle img-responsive" alt="photo de profil commentaire"> <em> Nom du commentateur </em></span>
                                <p>neque numquam obcaecati officiis quidem quod voluptas voluptatibus? Corporis modi nesciunt reprehenderit!</p>
                            </div>
                        </div>
                        <div class="container">
                            <div class="col s12 z-depth-2 un-commentaire" style="margin: 5px;">
                                <span><img style="width: 15%; padding: 5px;" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/23795538_1650975411690508_364041306487306684_n.jpg?_nc_cat=0&oh=2322e6a982435ed2c7a7093fa557cdcd&oe=5B73C98E" class="circle img-responsive" alt="photo de profil commentaire"> <em> Nom du commentateur </em></span>
                                <p>neque numquam obcaecati officiis quidem quod voluptas voluptatibus? Corporis modi nesciunt reprehenderit!</p>
                            </div>
                        </div>
                        <div class="container">
                            <div class="col s12 z-depth-2 un-commentaire" style="margin: 5px;">
                                <span><img style="width: 15%; padding: 5px;" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/23795538_1650975411690508_364041306487306684_n.jpg?_nc_cat=0&oh=2322e6a982435ed2c7a7093fa557cdcd&oe=5B73C98E" class="circle img-responsive" alt="photo de profil commentaire"> <em> Nom du commentateur </em></span>
                                <p>neque numquam obcaecati officiis quidem quod voluptas voluptatibus? Corporis modi nesciunt reprehenderit!</p>
                            </div>
                        </div>



                    </div>
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12 valign-wrapper">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea id="icon_prefix2" class="materialize-textarea" data-length="140" maxlength="140"></textarea>
                                <label for="icon_prefix2">Votre commentaire</label>
                                <a class="btn-floating btn waves-effect waves-light"><i class="material-icons">send</i></a>
                            </div>

                        </div>
                    </form>
                </div>

        </div>
            <div id="profil">


                <div class="col s12 m12" style="padding-bottom: 40px;">


                    <br>

                    <div class="col s12">
                        <p>Ici vous pouvez trouvez l'email</p>

                        <hr>
                    </div>


                    <div class="col s12">
                        <p>Ici vous pouvez trouver la note</p>

                        <hr>
                    </div>

                    <div class="col s12">
                        <p>ici vous pouvez trouver le niveau d'exp</p>

                        <hr>
                    </div>

                    <div class="col s12">
                        <p>ici vous pouvez trouver le plat le plus populaire</p>

                        <hr>
                    </div>


                    <div class="col s12">
                        <p>ici vous pouvez trouver une bio ecrite par l'auteur</p>

                        <hr>
                    </div>






                </div>
            </div>
    </div>

    </div>

</main>










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
    })

    $(document).ready(function() {
        $('textarea#icon_prefix2').characterCounter();
    });



</script>
</body>
</html>