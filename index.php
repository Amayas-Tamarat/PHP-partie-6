<?php
// Exo1part1
// var_dump($_GET);

//Exo2part1
// if (isset ($_GET['age']) && $_GET['age'] != ''){
//     echo $_GET['age'];
// }else {
//     echo 'erreur';
// }

//Exo3part1
// if (isset ($_GET['startDate']) && $_GET['startDate'] != '') {
//     echo $_GET['startDate'] ,"<br>";
// }else {
//     echo 'erreur';
// }
// if (isset ($_GET['endDate']) && $_GET['endDate'] != '') {
//     echo $_GET ['endDate'];
// }else {
//     echo 'erreur';
// }

//exo4part1
// if (isset($_GET['language])&& $_GET['language'] != '') {
//     echo $_GET['language'] ,"<br>";
// }else {
//     echo 'erreur';
// }
// if (isset ($_GET['server']) && $_GET['server'] != '') {
//     echo $_GET ['server'];
// }else {
//     echo 'erreur';
// }

//exo5part1
// if (isset ($_GET['week']) && $_GET['week'] != '') {
//     echo $_GET['week'] ,"<br>";
// }else {
//     echo 'erreur';
// }


//exo6part1
if (isset ($_GET['building']) && $_GET['building'] != '') {
    echo $_GET['building'] ,"<br>";
}else {
    echo 'erreur';
}
if (isset ($_GET['room']) && $_GET['room'] != '') {
    echo $_GET['room'] ,"<br>";
}else {
    echo 'erreur';
}

?>