 <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Ongoing Task
        </h1>
        <ol class="breadcrumb">
            <li><a><i class="fa fa-dashboard"></i> Ongoing Task</a></li>
            <li class="active">Home</li>
        </ol>
    </section>
   <!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info" style="min-height:453px;">
                <div class="panel-heading">
                    <span>Ongoing Task</span>
                   
                </div>
                <div class="panel-body" style="overflow: scroll; height: 410px;">
               <accordion close-others="true">
                        <accordion-group ng-repeat="currenttasks in ongoing">
                            <accordion-heading>
                                <div id="{{currenttasks.id}}">{{currenttasks.project_name}} - {{currenttasks.task_details}}</div><i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': isopen, 'glyphicon-chevron-right': !isopen}"></i>
                            </accordion-heading>
                            <p ng-repeat="staff in currenttasks.staffs" ><a href="javascript:;" ng-click="showProjectDetails(projects.id)" id="{{projects.id}}" data="{{projects.id}}">{{staff.fname}} {{staff.lname}}</a></p><a href="#addProjects" data-toggle="modal" ng-click="addProject(projects.id);"></a>
                        </accordion-group>
                   <h2 ng-show="!ongoing.length" class="md-display-3" layout="row" layout-align="center center">No Task Found</h2>
                    </accordion>
           </div>
            </div>
        </div>
     
    </div>
</section><!-- /.content -->