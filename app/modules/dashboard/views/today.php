 <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Today's Task Details
        </h1>
        <ol class="breadcrumb">
            <li><a><i class="fa fa-dashboard"></i> Today's Task</a></li>
            <li class="active">Home</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-2 col-sm-6 col-xs-12">
               <accordion close-others="true">
                        <accordion-group ng-repeat="currenttasks in currenttask">
                            <accordion-heading>
                                <div id="{{currenttasks.id}}">{{currenttasks.project_name}} - {{currenttasks.task_details}}</div><i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': isopen, 'glyphicon-chevron-right': !isopen}"></i>
                            </accordion-heading>
                            <p ng-repeat="staff in currenttasks.staffs" ><a href="javascript:;" ng-click="showProjectDetails(projects.id)" id="{{projects.id}}" data="{{projects.id}}">{{staff.fname}} {{staff.lname}}</a></p><a href="#addProjects" data-toggle="modal" ng-click="addProject(projects.id);"></a>
                        </accordion-group>
                    </accordion>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
