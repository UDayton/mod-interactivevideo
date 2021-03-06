<?php
require_once "../../config.php";
require_once('../dao/IV_DAO.php');

use \Tsugi\Core\LTIX;
use \IV\DAO\IV_DAO;

$LAUNCH = LTIX::requireData();

$p = $CFG->dbprefix;

$IV_DAO = new IV_DAO($PDOX, $p);

if ( $USER->instructor && isset($_SESSION["videoId"])) {

    $videoTitle = $_POST['videoTitle'];

    if (!empty($videoTitle)) {
        $IV_DAO->updateVideoTitle($_SESSION["videoId"], $videoTitle);
    }
}
