<html>

    <h1>INICIO

<?php


    $database = new SQLite3('db.db');
    $database -> exec('CREATE TABLE IF NOT EXISTS patients (patient_name varchar(255), notes varchar(255))');

?>

<form method='POST'>
<br>
<br>
    <input type='text' name='patient_name'>
    <br>
    <br>
    <input type='text' name='notes'>
    <br>
    <br>
    <input type='submit' value='save'>

</form>

<?php

    if (isset ($_POST['patient_name']) && isset($_POST['notes']))
    {

        $patient_name = $_POST['patient_name'];
        $notes = $_POST['notes'];
        $database -> exec("INSERT INTO patients (patient_name, notes) VALUES ('1', '2')"); 

    }
?>
</html>