

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>


        <div id="filtre"></div>

		<div class="container">

         	<div class="row row1">

        		<div class="col s12 m12">
		        	<div class="card-panel teal" id="bloc1">
		        		<div class="card-header" id="cardmodal"> <h2>Gestion du compte</h2></div>
		          		<!--  -->
		          		<div class="row"> 
							<div class="col s12 m12">
							    <form action="#" style="margin: 10px;padding: 0; border-top: ridge; border-bottom: ridge;">
							    	<table id="vertical-1" class="striped highlight">

                                        <tr>
                                            <th style="width: 200px">Adresse email</th>
                                            <td style="width: 1500px">
                                                <?php
                                                echo Controller::getMainUser()->getMail();
                                                ?>

                                            </td><td style="padding-right: 5px"><a id="mailmodal" class="waves-effect waves-light btn">Modifier</a></td>
                                            <!-- bootbox modal -->
                                            <div class="form-content" style="display:none;">
                                                <form class="form" role="form">
                                                    <div class="form-group">
                                                        <p><label>Ancien mail:</label></p>
                                                        <span><?= Controller::getMainUser()->getMail() ?></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="newemail">Tapez votre nouveau mail</label>
                                                        <input type="email" class="form-control" id="email" name="newemail">
                                                    </div>
                                                </form>
                                            </div>
                                        </tr>
							            <tr>
							                <th style="width: 200px">Pays</th>
							                <td style="width: 1500px">    <?php
                                                echo Controller::getMainUser()->getPaysdomicile();
                                                ?>
                                            </td><td style="padding-right: 5px"><a id="paysmodal" class="waves-effect waves-light btn">Modifier</a></td>



							            </tr>
                                        <tr>
                                            <th style="width: 200px">Ville</th>
                                            <td style="width: 1500px">    <?php
                                                echo Controller::getMainUser()->getVilledomicile();
                                                ?>
                                            </td><td style="padding-right: 5px"><a id="villemodal" class="waves-effect waves-light btn">Modifier</a></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 200px">Code postal</th>
                                            <td style="width: 1500px">    <?php
                                                echo Controller::getMainUser()->getCodepostal();
                                                ?>
                                            </td><td style="padding-right: 5px"><a id="codepostalmodal" class="waves-effect waves-light btn">Modifier</a></td>
                                        </tr>
							            <tr>
							                <th style="width: 200px">Mot de Passe</th>
                                            <td style="width: 1500px">**********
                                            </td><td style="padding-right: 5px"><a id="mdpmodal" class="waves-effect waves-light btn">Modifier</a></td>
							            </tr>
                                        <tr>
                                            <th style="width: 200px">Téléphone fixe </th>
                                            <td style="width: 1500px">    <?php
                                                echo Controller::getMainUser()->getTelephone();
                                                ?>
                                            </td><td style="padding-right: 5px"><a id="telmodal" class="waves-effect waves-light btn">Modifier</a></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 200px">Téléphone mobile </th>
                                            <td style="width: 1500px">    <?php
                                                echo Controller::getMainUser()->getTelephonemobile();
                                                ?>
                                            </td><td style="padding-right: 5px"><a id="mobilemodal" class="waves-effect waves-light btn">Modifier</a></td>
                                        </tr>
							        </table>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</div>


		</div>    	<!-- FIN CONTAINER -->

