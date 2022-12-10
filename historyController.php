<?php
    function getHistory(): array {
        include_once ("bd.php");
        $id_user = $_SESSION['id'];

        if (!isset($_SESSION['loses'])) {
            $loses = 0;
        } else {
            $loses = $_SESSION['loses'];
        }

        if (!isset($_SESSION['wins'])) {
            $wins = 0;
        } else {
            $wins = $_SESSION['wins'];
        }

        if (!isset($_SESSION['ties'])) {
            $draws = 0;
        } else {
            $draws = $_SESSION['ties'];
        }

        $result = mysqli_query($db,"SELECT id_user FROM `stats` WHERE id_user='$id_user'");
        $myrow = $result->fetch_array();
        if (!empty($myrow['id_user'])) {
            $id_row = $myrow['id_user'];
            $result2 = mysqli_query ($db,"UPDATE `stats` SET `count_of_wins`='$wins',`count_of_loses`='$loses',`count_of_draws`='$draws' WHERE `id_user`='$id_row'");
        } else {
            $result2 = mysqli_query ($db,"INSERT INTO stats (id_user, count_of_wins, count_of_loses, count_of_draws) VALUES($id_user, '$loses', '$wins','$draws')");
        } 

        $result3 = mysqli_query($db, "SELECT count_of_wins, count_of_loses, count_of_draws FROM stats WHERE id_user='$id_user'");
        return mysqli_fetch_all($result3, MYSQLI_ASSOC);
    }
?>