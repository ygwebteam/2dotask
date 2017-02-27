

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
                    <span>Client Lists</span>
                    <span class="pull-right">
                        <a href="javascript:;" class="btn btn-success btn-xs" onclick="openModel();"><i class="fa fa-plus"></i></a>
                    </span>
                </div>
                <div class="panel-body">
                    <accordion close-others="true">
                        <accordion-group ng-repeat="clientdetail in clientdetails">
                            <accordion-heading id="{{clientdetail.id}}">
                                {{clientdetail.client_name}} <i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': isopen, 'glyphicon-chevron-right': !isopen}"></i>
                            </accordion-heading>
<!--                            <p> 2dotask</p>-->
                        </accordion-group>
                        <!--                        <accordion-group>
                                                    <accordion-heading>
                                                        Qatar karthik <i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': isopen, 'glyphicon-chevron-right': !isopen}"></i>
                                                    </accordion-heading>
                                                    <p>Telp</p>
                                                    <p>Thirukural</p>
                                                </accordion-group>-->

                    </accordion>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-info" style="min-height:453px;">
                <div class="panel-heading">
                    Client Project(s)
                </div>
                <div class="panel-body">
                    <p>Project Details</p>

                </div>
            </div>
        </div>
    </div>
</section><!-- /.content -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" >
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Client</h4>
            </div>
            <div class="modal-body">
                <form name="clientForm" id="clientForm" ng-submit="insertData(data);">
                    <md-content class="autoScroll">
                        <md-input-container class="md-icon-float md-block">
                            <label>Client Name</label>
                            <md-icon class="fa fa-user"></md-icon>
                            <input type="text" required name="name" ng-model="data.cname">
                        </md-input-container>

                        <div class="pull-right">
                            <md-button class="md-raised md-primary" type="submit" name="submit">Add <i class="fa fa-save"></i></md-button>
                            <md-button class="md-raised md-warn" type="reset">Clear <i class="fa fa-trash-o"></i></md-button>
                        </div>
                    </md-content>
                </form>
            </div>
            <!--<div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>-->
        </div>
    </div>
</div>
<script type="text/javascript">
    function openModel() {
        $('#myModal').modal('show');
    }

</script>
