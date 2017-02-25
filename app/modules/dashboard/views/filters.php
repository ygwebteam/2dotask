<section class="content-header">
    <h1>
        Filters
    </h1>
    <ol class="breadcrumb">
        <li><a><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Filters</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-info" style="min-height:453px;">
                <div class="panel-heading">
                    Search Project
                </div>
                <div class="panel-body">
                    <form name="clientForm" ng-controller="ClientController">
                        <md-content class="autoScroll">

                            <md-input-container class="md-icon-float md-block">
                                <label>From Date</label>
                                <input type="text" required name="dob" ng-model="fdate">
                            </md-input-container>
                            <md-input-container class="md-icon-float md-block">
                                <label>End Date</label>
                                <input type="text" required name="dob" ng-model="edate">
                            </md-input-container>
                            <md-input-container>
                                <md-select ng-model="Sstaff" placeholder="Select a staff">
                                    <md-option ng-value="1" >1</md-option>
                                    <md-option ng-value="2" >2</md-option>
                                    <md-option ng-value="3" >3</md-option>
                                </md-select>
                            </md-input-container>
                            <md-input-container>
                                <md-select ng-model="Sclient" placeholder="Select a client">
                                    <md-option ng-value="1" >1</md-option>
                                    <md-option ng-value="2" >2</md-option>
                                    <md-option ng-value="3" >3</md-option>
                                </md-select>
                            </md-input-container>
                            <md-input-container>
                                <md-select ng-model="Sproject" placeholder="Select a project">
                                    <md-option ng-value="1" >1</md-option>
                                    <md-option ng-value="2" >2</md-option>
                                    <md-option ng-value="3" >3</md-option>
                                </md-select>
                            </md-input-container>
                            <div class="col-md-12"> 
                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                    <md-checkbox ng-model="isChecked" aria-label="All">
                                        All
                                    </md-checkbox>
                                </div>
                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                    <md-checkbox md-no-ink ng-model="ctodaytask" aria-label="Today's Tasks">
                                        Today's Tasks
                                    </md-checkbox>
                                </div>
                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                    <md-checkbox md-no-ink ng-model="cnotctask" aria-label="Not Completed Tasks">
                                        Not Completed Tasks
                                    </md-checkbox>
                                </div>
                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                    <md-checkbox md-no-ink ng-model="cacktask" aria-label="Acknowledged Tasks">
                                        Acknowledged Tasks
                                    </md-checkbox>
                                </div>
                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                    <md-checkbox md-no-ink ng-model="congotask" aria-label="Ongoing Task">
                                        Ongoing Task
                                    </md-checkbox>
                                </div>
                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                    <md-checkbox md-no-ink ng-model="cnoactask" aria-label="No Action Task">
                                        No Action Task
                                    </md-checkbox>
                                </div>
                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                    <md-checkbox md-no-ink ng-model="ccotask" aria-label="Completed Tasks">
                                        Completed Tasks
                                    </md-checkbox>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="pull-right">
                                    <md-button class="md-raised md-primary" type="submit" name="submit" ng-click="filterData()"><strong>Go</strong> <i class="fa fa-search"></i></md-button>
                                    <md-button class="md-raised md-warn" type="reset">Clear <i class="fa fa-trash-o"></i></md-button>
                                </div>
                            </div>
                        </md-content>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-info" style="min-height:453px;">
                <div class="panel-heading">
                    Search Result Project(s)
                </div>
                <div class="panel-body">
                    
                </div>
            </div>
        </div>

    </div>
</section>

