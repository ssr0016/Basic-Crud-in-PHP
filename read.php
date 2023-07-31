
<?php
//read/retrieve - displaying in the table
//import and database dito sa read
require('./database.php');

//SORT
    $sort = "DESC";
    $column = "id";


    if(isset($_GET['column']) && isset($_GET['sort'])){
        $sort = $_GET['sort'];
        $column = $_GET['column'];
    }

    //tenary operator
    $sort == 'ASC' ? $sort = 'DESC' : $sort = 'ASC';

//END SORT

$queryAccounts = "SELECT * FROM accounts ORDER BY $column $sort";
$sqlAccounts = mysqli_query($connection, $queryAccounts );




?>