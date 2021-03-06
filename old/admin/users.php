<?php
include "function.php";
if ($_SESSION['pseudo'] == null) {
    echo '<script type="text/javascript">window.location="index.php"</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Lise - PoxAdmin</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="../css/uniform.css"/>
    <link rel="stylesheet" href="../css/select2.css"/>
    <link rel="stylesheet" href="../css/unicorn.main.css"/>
    <link rel="stylesheet" href="../css/unicorn.grey.css" class="skin-color"/>
    <link rel="stylesheet" href="../css/jquery.gritter.css">
</head>
<body>
<?php include "interface.php"; ?>

<div id="content">
    <div id="content-header">
        <h1>User List</h1>

        <div class="btn-group">
            <a class="btn btn-large tip-bottom" title="Manage Pages" href="pages.php"><i class="icon-file"></i></a>
            <a class="btn btn-large tip-bottom" title="Manage Users" href="users.php"><i class="icon-user"></i></a>
            <a class="btn btn-large tip-bottom" title="Manage Files" href="filemanagment.php"><i class="icon-folder-open"></i></a>
        </div>
    </div>
    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#" class="current">User List</a>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <a href="newUser.php" class="btn btn-success"><i class="icon-plus-sign"></i> Ajouter un utilisateur</a>

                <div class="widget-box">
                    <div class="widget-title">

                        <h5>User List</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>rang</th>
                                <th>Action(s)</th>
                            </tr>
                            </thead>
                            <tbody><?php
                            $list = get_user_list();
                            foreach ($list as $users) {
                                echo '<tr><td>' . $users['pseudo'] . '</td><td>' . $users['email'] . '</td><td>' . $users['ran'] . '</td><td><a href="#alertDelete" onclick="deleteavert(\''.$users['id'].'\');" data-toggle="modal" class="btn btn-danger"><i class="icon-remove"></i>Suprimer</a><a href="newUser.php?a=edit&id=' . $users['id'] . '" class="btn btn-info"><i class="icon-pencil"></i>Editer</a></td></tr>';
                            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="alertDelete" class="modal hide fade">
                    <div class="modal-header">
                        <button data-dismiss="modal" class="close" type="button">×</button>
                        <h3>Modal header</h3>
                    </div>
                    <div class="modal-body">
                        <div id="returne" class="warning">
                            <center><img src="../old/images/loading4.gif"></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.ui.custom.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.uniform.js"></script>
<script src="../js/select2.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/unicorn.js"></script>
<script src="../js/unicorn.tables.js"></script>
<script src="../js/jquery.gritter.min.js"></script>
<script src="../js/ajax.js"></script>

</body>
</html>