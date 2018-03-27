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


<div class="accueil" style=" height: 300px; background-color: #ffa702; position: relative; padding: 20px; font-family: 'Amatic SC', cursive;">
<div class="container">
<span>
    <h1 style="font-size: 6em;">HomEat</h1>
    <h2>Commander Des plats faits maison </h2>
    </span>
    <img src="http://www.juniperbarnyc.com/images/about_large_plate.png" class="responsive-img"   alt="" style="position: absolute; bottom: 0; right: 15%; width: 30%;">


</div>
</div>
<div class="container">
<div class="filtre-accueil">
<ul class="collapsible" data-collapsible="accordion">
    <li>
        <div class="collapsible-header"><i class="material-icons">search</i>Recherche avancé</div>
        <div class="collapsible-body">
            <form action="#">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" class="timepicker" id="timepicker">
                        <label for="timepicker"><i class="material-icons">access_time</i>Horaires</label>
                    </div>
                    <div class="input-field col s12">
                        <select multiple>
                            <option value="" disabled selected>Prix €</option>
                            <option value="2">2 euros</option>
                            <option value="3">3 euros</option>
                            <option value="4">4 euros</option>
                            <option value="5">5 euros</option>
                            <option value="6">6 euros</option>
                            <option value="7">7 euros</option>
                            <option value="8">8 euros</option>
                            <option value="9">9 euros</option>
                        </select>

                    </div>
                    <div class="input-field col s12">
                        <select multiple>
                            <option value="" disabled selected>Ingredients</option>
                            <option value="viande">Viande</option>
                            <option value="poisson">poisson</option>
                            <option value="vegetarien">vegetarien</option>
                            <option value="sans-gluten">sans-gluten</option>
                            <option value="halal">halal</option>
                            <option value="casher">casher</option>

                        </select>

                    </div>

                    <div class="input-field col s12">
                        <input placeholder="Veuillez mettre votre adresse" id="first_name" type="text" class="validate">
                        <label for="first_name">Adresse</label>
                    </div>
                    <div class="col s12">
                        <p class="range-field">
                            <label for="distance">Distance</label>
                            <input type="range" id="distance" min="0" max="10" />
                        </p>
                    </div>
                </div>


            </form>
        </div>
    </li>

</ul>
</div>
</div>


<main>
    <!-- ---------------------------------- filtre accueil---------------------------------- -->




    <!-- ---------------------------------- liste des plats disponibles ---------------------------------- -->
    <div class="liste-plat">
        <div class="row">

          <div class="col s12 m6 l6 xl4" id="div-card" style="margin: 30px 0px 30px 0px">

                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light activator" style=" background: url(http://assets.kraftfoods.com/recipe_images/opendeploy/502447_1_1_retail-274041f785c231074b544b5a450fa55d9ad00cde_642x428.jpg); background-position: center;
    background-size: cover">

                        <div class="cuisto">
                            <a href="#!user">
                                <img id="profil-cuisto-card" class="circle" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-1/c0.0.160.160/p160x160/20767735_1634982593192961_209014930482741611_n.jpg?oh=05cdc29ff8b2698d5d8c0927a15c5a51&oe=5B36D7D2">
                            </a>
                            <div class="note">
                                <i class="material-icons tiny">star</i>
                                <i class="material-icons tiny">star</i>
                                <i class="material-icons tiny">star</i>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4 ">Nom du plat<p class="right activator">3 euros/part</p></span>
                        <span><p><a href="#"><em>2 Parts disponibles</em></a></p><a class="waves-effect waves-light btn right activator" style="position: absolute; right: 5px;">Commander</a></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Nom du plat<i class="material-icons right">close</i></span>

                        <a href="#!user">
                            <img style="width: 40px;" class="circle" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-1/c0.0.160.160/p160x160/20767735_1634982593192961_209014930482741611_n.jpg?oh=05cdc29ff8b2698d5d8c0927a15c5a51&oe=5B36D7D2">
                            Jerome Ballue   <em>3 étoiles</em></a>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col s6">
                                <h6>Ingredients</h6>
                                <hr>
                                <ul>
                                    <li>Mozzarela</li>
                                    <li>Parmesan</li>
                                    <li>Tomate</li>
                                    <li>Oeufs</li>
                                    <li>Riz</li>
                                    <a href=""><li><em>Montrer plus ...</em></li></a>
                                </ul>
                            </div>
                            <div class="col s6">
                                <h6>Alèrgenes</h6>
                                <hr>
                                <ul>
                                    <em>
                                        <li>Cacahuètes</li>
                                        <li>Lactose</li>
                                        <li>Oeufs</li>

                                    </em>

                                </ul>
                            </div>
                        </div>
                        <div  style="background-color: rgba(176,176,176,0.16)">
                            <div class="row">
                                <div class="col s8"> <strong><p>24 bis rue du champs des oiseaux, Rouen 76000</p></strong></div> <div class="col s4"><strong><p>DateTime</p></strong></div>
                            </div>

                        </div>




                            <form action="">
                                <div class="input-field col s12 validate">
                                    <select class="input-field col s12 validate error">
                                        <option value="" disabled selected>Combien de parts voulez-vous ? </option>
                                        <option value="1">1 part</option>
                                        <option value="2">2 parts</option>
                                        <option value="3">3 parts</option>
                                    </select>

                                </div>
                                <div class="col s12">
                                    <button type="submit" class="waves-effect waves-light btn" style="width: 100%">Commander</button>
                                </div>
                            </form>


                    </div>
                </div>

            </div>
            <div class="col s12 m6 l6 xl4" id="div-card" style="margin: 30px 0px 30px 0px">

                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light activator" style=" background: url(http://assets.kraftfoods.com/recipe_images/opendeploy/502447_1_1_retail-274041f785c231074b544b5a450fa55d9ad00cde_642x428.jpg); background-position: center;
    background-size: cover">

                        <div class="cuisto">
                            <a href="#!user">
                                <img id="profil-cuisto-card" class="circle" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-1/c0.0.160.160/p160x160/20767735_1634982593192961_209014930482741611_n.jpg?oh=05cdc29ff8b2698d5d8c0927a15c5a51&oe=5B36D7D2">
                            </a>
                            <div class="note">
                                <i class="material-icons tiny">star</i>
                                <i class="material-icons tiny">star</i>
                                <i class="material-icons tiny">star</i>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4 ">Nom du plat<p class="right activator">3 euros/part</p></span>
                        <span><p><a href="#"><em>2 Parts disponibles</em></a></p><a class="waves-effect waves-light btn right activator" style="position: absolute; right: 5px;">Commander</a></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Nom du plat<i class="material-icons right">close</i></span>

                        <a href="#!user">
                            <img style="width: 40px;" class="circle" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-1/c0.0.160.160/p160x160/20767735_1634982593192961_209014930482741611_n.jpg?oh=05cdc29ff8b2698d5d8c0927a15c5a51&oe=5B36D7D2">
                            Jerome Ballue   <em>3 étoiles</em></a>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col s6">
                                <h6>Ingredients</h6>
                                <hr>
                                <ul>
                                    <li>Mozzarela</li>
                                    <li>Parmesan</li>
                                    <li>Tomate</li>
                                    <li>Oeufs</li>
                                    <li>Riz</li>
                                    <a href=""><li><em>Montrer plus ...</em></li></a>
                                </ul>
                            </div>
                            <div class="col s6">
                                <h6>Alèrgenes</h6>
                                <hr>
                                <ul>
                                    <em>
                                        <li>Cacahuètes</li>
                                        <li>Lactose</li>
                                        <li>Oeufs</li>

                                    </em>

                                </ul>
                            </div>
                        </div>
                        <div  style="background-color: rgba(176,176,176,0.16)">
                            <div class="row">
                                <div class="col s8"> <strong><p>24 bis rue du champs des oiseaux, Rouen 76000</p></strong></div> <div class="col s4"><strong><p>DateTime</p></strong></div>
                            </div>

                        </div>




                        <form action="">
                            <div class="input-field col s12">
                                <select>
                                    <option value="" disabled selected>Nombre de parts</option>
                                    <option value="1">1 part</option>
                                    <option value="2">2 parts</option>
                                    <option value="3">3 parts</option>
                                </select>

                            </div>
                            <div class="col s12">
                                <button type="submit" class="waves-effect waves-light btn" style="width: 100%">Commander</button>
                            </div>
                        </form>


                    </div>
                </div>

            </div>
            <div class="col s12 m6 l6 xl4" id="div-card" style="margin: 30px 0px 30px 0px">

                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light activator" style=" background: url(http://assets.kraftfoods.com/recipe_images/opendeploy/502447_1_1_retail-274041f785c231074b544b5a450fa55d9ad00cde_642x428.jpg); background-position: center;
    background-size: cover">

                        <div class="cuisto">
                            <a href="#!user">
                                <img id="profil-cuisto-card" class="circle" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-1/c0.0.160.160/p160x160/20767735_1634982593192961_209014930482741611_n.jpg?oh=05cdc29ff8b2698d5d8c0927a15c5a51&oe=5B36D7D2">
                            </a>
                            <div class="note">
                                <i class="material-icons tiny">star</i>
                                <i class="material-icons tiny">star</i>
                                <i class="material-icons tiny">star</i>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4 ">Nom du plat<p class="right activator">3 euros/part</p></span>
                        <span><p><a href="#"><em>2 Parts disponibles</em></a></p><a class="waves-effect waves-light btn right activator" style="position: absolute; right: 5px;">Commander</a></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Nom du plat<i class="material-icons right">close</i></span>

                        <a href="#!user">
                            <img style="width: 40px;" class="circle" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-1/c0.0.160.160/p160x160/20767735_1634982593192961_209014930482741611_n.jpg?oh=05cdc29ff8b2698d5d8c0927a15c5a51&oe=5B36D7D2">
                            Jerome Ballue   <em>3 étoiles</em></a>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col s6">
                                <h6>Ingredients</h6>
                                <hr>
                                <ul>
                                    <li>Mozzarela</li>
                                    <li>Parmesan</li>
                                    <li>Tomate</li>
                                    <li>Oeufs</li>
                                    <li>Riz</li>
                                    <a href=""><li><em>Montrer plus ...</em></li></a>
                                </ul>
                            </div>
                            <div class="col s6">
                                <h6>Alèrgenes</h6>
                                <hr>
                                <ul>
                                    <em>
                                        <li>Cacahuètes</li>
                                        <li>Lactose</li>
                                        <li>Oeufs</li>

                                    </em>

                                </ul>
                            </div>
                        </div>
                        <div  style="background-color: rgba(176,176,176,0.16)">
                            <div class="row">
                                <div class="col s8"> <strong><p>24 bis rue du champs des oiseaux, Rouen 76000</p></strong></div> <div class="col s4"><strong><p>DateTime</p></strong></div>
                            </div>

                        </div>




                        <form action="">
                            <div class="input-field col s12">
                                <select>
                                    <option value="" disabled selected>Nombre de parts</option>
                                    <option value="1">1 part</option>
                                    <option value="2">2 parts</option>
                                    <option value="3">3 parts</option>
                                </select>

                            </div>
                            <div class="col s12">
                                <button type="submit" class="waves-effect waves-light btn" style="width: 100%">Commander</button>
                            </div>
                        </form>


                    </div>
                </div>

            </div>
            <div class="col s12 m6 l6 xl4" id="div-card" style="margin: 30px 0px 30px 0px">

                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light activator" style=" background: url(http://assets.kraftfoods.com/recipe_images/opendeploy/502447_1_1_retail-274041f785c231074b544b5a450fa55d9ad00cde_642x428.jpg); background-position: center;
    background-size: cover">

                        <div class="cuisto">
                            <a href="#!user">
                                <img id="profil-cuisto-card" class="circle" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-1/c0.0.160.160/p160x160/20767735_1634982593192961_209014930482741611_n.jpg?oh=05cdc29ff8b2698d5d8c0927a15c5a51&oe=5B36D7D2">
                            </a>
                            <div class="note">
                                <i class="material-icons tiny">star</i>
                                <i class="material-icons tiny">star</i>
                                <i class="material-icons tiny">star</i>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4 ">Nom du plat<p class="right activator">3 euros/part</p></span>
                        <span><p><a href="#"><em>2 Parts disponibles</em></a></p><a class="waves-effect waves-light btn right activator" style="position: absolute; right: 5px;">Commander</a></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Nom du plat<i class="material-icons right">close</i></span>

                        <a href="#!user">
                            <img style="width: 40px;" class="circle" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-1/c0.0.160.160/p160x160/20767735_1634982593192961_209014930482741611_n.jpg?oh=05cdc29ff8b2698d5d8c0927a15c5a51&oe=5B36D7D2">
                            Jerome Ballue   <em>3 étoiles</em></a>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col s6">
                                <h6>Ingredients</h6>
                                <hr>
                                <ul>
                                    <li>Mozzarela</li>
                                    <li>Parmesan</li>
                                    <li>Tomate</li>
                                    <li>Oeufs</li>
                                    <li>Riz</li>
                                    <a href=""><li><em>Montrer plus ...</em></li></a>
                                </ul>
                            </div>
                            <div class="col s6">
                                <h6>Alèrgenes</h6>
                                <hr>
                                <ul>
                                    <em>
                                        <li>Cacahuètes</li>
                                        <li>Lactose</li>
                                        <li>Oeufs</li>

                                    </em>

                                </ul>
                            </div>
                        </div>
                        <div  style="background-color: rgba(176,176,176,0.16)">
                            <div class="row">
                                <div class="col s8"> <strong><p>24 bis rue du champs des oiseaux, Rouen 76000</p></strong></div> <div class="col s4"><strong><p>DateTime</p></strong></div>
                            </div>

                        </div>




                        <form action="">
                            <div class="input-field col s12">
                                <select>
                                    <option value="" disabled selected>Nombre de parts</option>
                                    <option value="1">1 part</option>
                                    <option value="2">2 parts</option>
                                    <option value="3">3 parts</option>
                                </select>

                            </div>
                            <div class="col s12">
                                <button type="submit" class="waves-effect waves-light btn" style="width: 100%">Commander</button>
                            </div>
                        </form>


                    </div>
                </div>

            </div>
            <div class="col s12 m6 l6 xl4" id="div-card" style="margin: 30px 0px 30px 0px">

                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light activator" style=" background: url(http://assets.kraftfoods.com/recipe_images/opendeploy/502447_1_1_retail-274041f785c231074b544b5a450fa55d9ad00cde_642x428.jpg); background-position: center;
    background-size: cover">

                        <div class="cuisto">
                            <a href="#!user">
                                <img id="profil-cuisto-card" class="circle" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-1/c0.0.160.160/p160x160/20767735_1634982593192961_209014930482741611_n.jpg?oh=05cdc29ff8b2698d5d8c0927a15c5a51&oe=5B36D7D2">
                            </a>
                            <div class="note">
                                <i class="material-icons tiny">star</i>
                                <i class="material-icons tiny">star</i>
                                <i class="material-icons tiny">star</i>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4 ">Nom du plat<p class="right activator">3 euros/part</p></span>
                        <span><p><a href="#"><em>2 Parts disponibles</em></a></p><a class="waves-effect waves-light btn right activator" style="position: absolute; right: 5px;">Commander</a></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Nom du plat<i class="material-icons right">close</i></span>

                        <a href="#!user">
                            <img style="width: 40px;" class="circle" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-1/c0.0.160.160/p160x160/20767735_1634982593192961_209014930482741611_n.jpg?oh=05cdc29ff8b2698d5d8c0927a15c5a51&oe=5B36D7D2">
                            Jerome Ballue   <em>3 étoiles</em></a>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col s6">
                                <h6>Ingredients</h6>
                                <hr>
                                <ul>
                                    <li>Mozzarela</li>
                                    <li>Parmesan</li>
                                    <li>Tomate</li>
                                    <li>Oeufs</li>
                                    <li>Riz</li>
                                    <a href=""><li><em>Montrer plus ...</em></li></a>
                                </ul>
                            </div>
                            <div class="col s6">
                                <h6>Alèrgenes</h6>
                                <hr>
                                <ul>
                                    <em>
                                        <li>Cacahuètes</li>
                                        <li>Lactose</li>
                                        <li>Oeufs</li>

                                    </em>

                                </ul>
                            </div>
                        </div>
                        <div  style="background-color: rgba(176,176,176,0.16)">
                            <div class="row">
                                <div class="col s8"> <strong><p>24 bis rue du champs des oiseaux, Rouen 76000</p></strong></div> <div class="col s4"><strong><p>DateTime</p></strong></div>
                            </div>

                        </div>




                        <form action="">
                            <div class="input-field col s12 validate">
                                <select>
                                    <option value="" disabled selected>Nombre de parts</option>
                                    <option value="1">1 part</option>
                                    <option value="2">2 parts</option>
                                    <option value="3">3 parts</option>
                                </select>

                            </div>
                            <div class="col s12">
                                <button type="submit" class="waves-effect waves-light btn" style="width: 100%">Commander</button>
                            </div>
                        </form>


                    </div>
                </div>

            </div>









</div>

        </div>

    <div id="overlay">
    <div class="row">
    <div class="box-inscription col s8 m6 z-depth-3" id="box-inscription" style="background-color: white">


            <div class="col s10 m6">
                <a href="#" id="overlay-off"><i class="material-icons right">close</i></a>
            <form action="" class="col s12" style="padding: 30px">

                <h5>Inscription</h5>
                <br>

                    <div class="input-field col s12">
                        <input id="email" type="text" class="validate">
                        <label for="email">Pseudo</label>
                    </div>


                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>



                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate" style="margin-bottom: 0px;">
                        <label for="password">Password</label>
                    </div>


                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>


                <button class="btn waves-effect waves-light"  type="submit" name="action">Go !</button>


            </form>
            </div>
            <div class="col s2 m6" id="right-panel" >




            </div>

    </div>
        </div>
    </div>

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
    });

    $(document).ready(function(){
        $('.collapsible').collapsible();
    });




</script>
</body>
</html>