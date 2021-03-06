<?php
include_once 'model/admin/main.php';
include_once 'model/admin/editPage.php';

if($_SESSION['username'] != NULL)
{
    if($_GET['a'] == 'editPage')
    {
        $resultEditPage = editPage($_GET['pageId'], $_POST['main'], $_POST['fileName'], $_POST['content'], $_GET['siteId']);
    }

    $siteId = $_GET['siteId'];
    $pageId = $_GET['pageId'];

    $listSites = getListSites();
    $numberMessages = getNumberMessages();

    $page = getInfoPage($pageId);

    include_once 'view/admin/editPage.php';
}
else
{
    header("HTTP/1.1 403 Forbidden");

    echo '<html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You don\'t have permission to access to this resource on this server.</p></body></html>';

    exit();
}