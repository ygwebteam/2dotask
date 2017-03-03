 <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Today's Assigned / Deadline Task Details
        </h1>
        <ol class="breadcrumb">
            <li><a><i class="fa fa-dashboard"></i> Today's Assigned / Deadline Task Details</a></li>
            <li class="active">Home</li>
        </ol>
    </section>
   <!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-info" style="min-height:453px;">
                <div class="panel-heading">
                    <span>Today Assigned Task</span>
                   
                </div>
                <div class="panel-body" style="overflow: scroll; height: 410px;">
               <accordion close-others="true">
                        <accordion-group ng-repeat="currenttasks in currenttask ">
                            <accordion-heading>
                                <div id="{{currenttasks.id}}">{{currenttasks.project_name}} - {{currenttasks.task_details}}</div><i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': isopen, 'glyphicon-chevron-right': !isopen}"></i>
                            </accordion-heading>
                            <a href="#addProjects" data-toggle="modal" ng-click="edittask(currenttasks.id);"></a>
                            <p ng-repeat="staff in currenttasks.staffs" > Assigned Staff(s) - {{staff.fname}} {{staff.lname}}</p>
                        </accordion-group>
                    </accordion>
           </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-info" style="min-height:453px;">
                <div class="panel-heading">
                    Today Deadline Task
                </div>
                <div class="panel-body">
                    <accordion close-others="true">
                        <accordion-group ng-repeat="currenttasks in currenttask ">
                            <accordion-heading>
                                <div id="{{currenttasks.id}}">{{currenttasks.project_name}} - {{currenttasks.task_details}}</div><i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': isopen, 'glyphicon-chevron-right': !isopen}"></i>
                            </accordion-heading>
                            <a href="#addProjects" data-toggle="modal" ng-click="addProject(projects.id);"></a>
                            <p ng-repeat="staff in currenttasks.staffs" >Assigned Staff(s) - {{staff.fname}} {{staff.lname}}</p>
                        </accordion-group>
                    </accordion>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.content -->
    