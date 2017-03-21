<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <h3>Lista Kontaktów</h3>
    </div>
    <div class="row">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>imie</th>
                <th>nazwisko</th>
                <th>numer kontaktowy</th>
                <th>data urodzenia</th>
                <th>miejscowość</th>
                <th>adres</th>
                <th>akcja</th>
            </tr>
            <?php include ('../Controller/GetUsersController.php'); ?>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div> <!-- /container -->
</body>
</html>