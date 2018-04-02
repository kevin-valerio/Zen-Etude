<div id="filtre"></div>

<div class="container">
    <div class="row row1">

        <div class="col s12 m12">
            <div class="card-panel teal" id="bloc1">
                <div class="card-header"><h2>Tableau de bords</h2></div>
                <!--  -->
                <div id="swipeable" class="section scrollspy row">
                    <div class="col m12">
                        <ul id="dasboard" class="tabs" style="padding: 0px">
                            <li class="tab col s3 m3"><a class="active" href="#Notes" style="color: white">Mes Notes</a>
                            </li>
                            <li class="tab col s3 m3"><a href="#Absences" style="color: white">Mes absences</a></li>
                        </ul>
                        <div id="Notes" class="col s12" style="padding: 0px">
                            <table class="table striped highlight centered">
                                <thead>
                                <tr>
                                    <th>Matière</th>
                                    <th>Coefficient</th>
                                    <th>Note</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>

                                    <?php

                                    foreach (Controller::getMainUser()->getNotes() as $note) {
                                        echo '<td data-title="Matière">' . $note->getMatiere() . '</td>';
                                        echo '<td data-title="Coefficient">' . $note->getCoeff() . '</td>';
                                        echo '<td data-title="Note">' . $note->getNote() . '</td><tr>';
                                    }

                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <div id="Absences" class="col s12" style="padding: 0px">
                            <table class="table striped highlight centered">
                                <thead>
                                <tr>
                                    <th>Demi-journée</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>

                                    <?php

                                    foreach (Controller::getMainUser()->getAbsences() as $absence) {
                                        if($absence->getDemijournee()){
                                            echo '<td data-title="Demi-journée">' . 1 . '</td>';
                                        }
                                        else {
                                            echo '<td data-title="Demi-journée">' . 2 . '</td>'; //journée entière

                                        }
                                        echo '<td data-title="Date">' . $absence->getDate() . '</td><tr>';
                                    }

                                    ?>

                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>


        </div>
