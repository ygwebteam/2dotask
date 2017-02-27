<section class="content-header">
    <h1>
        Task Templates
    </h1>
    <ol class="breadcrumb">
        <li><a><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Task Templates</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-info" style="min-height:453px;">
                <div class="panel-heading">
                    View Template
                </div>
                <div class="panel-body">


                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-info" style="min-height:453px;">
                <div class="panel-heading">
                   Add New Template
                </div>
                <div class="panel-body">
                    <form name="clientForm" ng-controller="ClientController">
                        <md-content class="autoScroll">

                            <md-input-container class="md-icon-float md-block">
                                <label>Template</label>
                                <input type="text" required name="dob" ng-model="fdate">
                            </md-input-container>

                            <div class="col-md-12">
                                <div class="pull-right">
                                    <md-button class="md-raised md-primary" type="submit" name="submit" ng-click="filterData()"><strong>Add </strong> <i class="fa fa-plus"></i></md-button>
                                    <md-button class="md-raised md-warn" type="reset">Clear <i class="fa fa-trash-o"></i></md-button>
                                </div>
                            </div>
                        </md-content>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

