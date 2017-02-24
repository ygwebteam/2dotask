<?php
include('/includes/config.php');

if(isset($_POST['submit']))
{
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$client_name = $request->name;
echo $client_name;
$sql = "INSERT INTO client (admin_id, client_name)
VALUES ('17', $client_name)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Client

    </h1>
    <ol class="breadcrumb">
        <li><a><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Client</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-info" style="min-height:453px;">
                <div class="panel-heading">
                    Client Lists
                </div>
                <div class="panel-body">
                    <ul class="clients_name">
                        <li> {{datas.name}}
                            <ul class="projects_name">
                                <li>

                                </li>
                            </ul>
                        </li>  
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-info" style="min-height:453px;">
                <div class="panel-heading">
                    Add Client
                </div>

                <div class="panel-body">
                    <form data-ng-submit="vm.submitForm();" name="vm.clientForm">
                        <md-content class="autoScroll">
                            <md-input-container class="md-icon-float md-block">
                                <label>Name</label>
                                <md-icon class="fa fa-user"></md-icon>
                                <input type="text" required name="name" data-ng-model="vm.message.name">
                            </md-input-container>


                            <div class="pull-right">
                                <md-button class="md-raised md-primary" type="submit" name="submit" value="submit" ng-click="insertData()">Send <i class="fa fa-angle-double-right"></i></md-button>
                                <md-button class="md-raised md-warn" type="reset">Clear <i class="fa fa-trash-o"></i></md-button>
                            </div>
                        </md-content>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.content -->


