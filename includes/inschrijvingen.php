<?php include("scripts/Functions.php"); ?>
<div class="jumbotron">
            <h1 class="display-4">Inschrijvingen</h1>
            </div class="row">
            <form method = "post" action = "begin.php?page=inschrijvingen">
        <div class="left">
        <table class="table">
            
            
        <thead>
                <tr>
                    <th>ID</th>
                    <th>Naam</th>
                    <th>Adres</th>
                    <th>Postcode</th>
                    <th>Gemeente</th>
                    <th>Telefoon</th>
                    <th>E=mail</th>
                    <th>Geboorte Datum</th>
                    <th>foto titel</th>
                    <th>Camera</th>
                    <th>Lens</th>
                    <th>Beschrijving</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                         ShowDB();
                    ?>
                </tbody>
        </table>
        </div>
    </form> 
</div>
        </div>