<div id="filtre"></div>

<div class="container">
    <div class="row row1">

        <div class="col s12 m8">
            <div class="card-panel teal" id="bloc1">
                <div class="card-header"><h2>Accueil</h2></div>
                <p>Bienvenue !<br/><br/>
                    Zen'Etude est un LMS (Learning Management System) qui vous accompagnera dans votre processus
                    d'apprentissage.<br> La plateforme vous permettra notament d'accèder à vos notes et absences de
                    façon totalement transparente !
                    <br/><br/>

            </div>
        </div>

        <?php if (is_null(Controller::getMainUser())) { ?>
            <div class="col s12 m4">
                <div class="card-panel teal" id="aside1">
                    <div class="card-header"><h2>Connexion</h2></div>

                    <!-- Formulaire -->
                    <div class="formula">
                        <form class="col s10 push-s1" action="/?controller=user&action=connectionTry" method="POST">


                            <div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate" name="mail">
                                        <label for="email">Email</label>
                                    </div>
                                </div><!-- fin email -->

                                <!-- mot de passe -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="passe" type="password" class="validate" name="pass">
                                        <label for="passe">Mot de passe</label>
                                    </div>
                                </div><!-- fin mot de passe -->

                            </div><!-- Fin contenu card -->
                            <div id="result"></div><!-- Retour de l'erreur en json -->
                            <div class="card-action  center-align bouton-connection">
                                <input class="btn connexion" type="submit" value="Se connecter"/>
                            </div>

                        </form>
                    </div>
                    <!-- Fin formulaire -->
                    <p class="connexion"><a href="?controller=passwordForget&action=show" class="left">Mot de passe oublié</a></p>
                </div>
            </div>
        <?php } ?>

    </div>


</div>
<!-- FIN CONTAINER -->
