<?php
include_once 'model/admin/main.php';
include_once 'model/admin/page.php';

if($_SESSION['username'] != NULL)
{
    if($_GET['a'] == 'showPreviewPage')
    {
        if($_POST['path'] != NULL)
        {
            echo getPreviewPage($_POST['path']);

            exit();
        }
        else
        {
            echo 'Erreur du chargement du fichier.';

            exit();
        }
    }
    if($_GET['a'] == 'deletePage')
    {
        deletePage($_GET['pageId']);
    }

    $siteId = $_GET['siteId'];

    $listSites = getListSites();
    $numberMessages = getNumberMessages();

    $listPages = getListPages($siteId);

    include_once 'view/admin/page.php';
}
else
{
    header("HTTP/1.1 403 Forbidden");

    echo '<html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You don\'t have permission to access to this resource on this server.</p></body></html>';

    exit();
}