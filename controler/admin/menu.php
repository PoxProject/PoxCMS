<?php
include_once 'model/admin/main.php';
include_once 'model/admin/menu.php';

if($_SESSION['username'] != NULL)
{
    $siteId = $_GET['siteId'];

    $listSites = getListSites();
    $numberMessages = getNumberMessages();

    include_once 'view/admin/menu.php';
}
else
{
    header("HTTP/1.1 403 Forbidden");

    echo '<html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You don\'t have permission to access to this resource on this server.</p></body></html>';

    exit();
}