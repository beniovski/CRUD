<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<form class="form-horizontal" method="post" action="../Model/EditUser.php">
    <fieldset>

        <!-- Form Name -->
        <legend>Edytuj kontakt</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">IMIE : </label>
            <div class="col-md-4">
                <input id="imie" name="imie" type="text" placeholder="Jan" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">NAZWISKO : </label>
            <div class="col-md-4">
                <input id="nazwisko" name="nazwisko" type="text" placeholder="Kowalski" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">numer telefonu : </label>
            <div class="col-md-4">
                <input id="telefon" name="telefon" type="text" placeholder="123456789" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">miejscowość : </label>
            <div class="col-md-4">
                <input id="miejscowosc" name="miejscowosc" type="text" placeholder="Warszawa" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Ulica, numer domu i mieszkania</label>
            <div class="col-md-4">
                <input id="adres" name="adres" type="text" placeholder="Opolska 47/20" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Data Urodzenia</label>
            <div class="col-md-4">
                <input id="dataUrodzenia" name="dataUrodzenia" type="date" class="form-control input-md">
            </div>
        </div>

        <div class="form-inline">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button  id="dodaj" name="dodaj" type="submit" class="btn btn-primary">Edytuj !</button>
                <button  id="reset" name="reset" type="RESET" class="btn btn-warning">Resetuj </button>
            </div>
        </div>




    </fieldset>
</form>








</body>
</html>