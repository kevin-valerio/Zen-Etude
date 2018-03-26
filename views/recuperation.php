<div class="container container-fluid">
    <div class="row">
        <div class="card-panel inscription col m4 push-m4 s12 center-align">
             <form class="col formulaire s10 push-s1"
                  action="?controller=passwordForget&action=sendNewPasswordMail"
                  method="POST" onsubmit="">

                 <div class="card-header header-small"><h2>Récupération de mot de passe</h2></div>

                 <?php

                 $info = filter_input(INPUT_GET, 'info');

                 if($info == '0'){
                     Alerte::printAlert(Alerte::INFO, "L'adresse mail rentrée n'existe pas");
                 }
                 if($info == '1'){

                     $pass = filter_input(INPUT_GET, 'p');
                     Alerte::printAlert(Alerte::SUCCESS, "Voici votre nouveau mot de passe <b>" . $pass .
                         PHP_EOL . "</b>Un mail vous a par ailleurs été envoyé.");
                 }

                 ?>
                 <div class="card-content">

                     <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" name="mail" required="required">
                            <label for="email">Entrer l'adresse email de récupération </label>
                        </div>
                    </div>
                    <div id="result"></div>
                </div>

                 <div class="card-action bouton-connection">
                    <input class="btn center-align" type="submit" value="Valider"/>
                </div>

            </form>
        </div>
    </div>
</div>
