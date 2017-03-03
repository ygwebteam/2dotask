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
                <div class="panel-body" >
                    <md-card ng-repeat="template in templates" style="margin-bottom: 20px;">
                        <md-card-title>
                            <md-card-title-text>
                                <span class="md-headline">{{template.text}}</span>
                            </md-card-title-text>
                        </md-card-title>
                        <md-card-actions layout="row" layout-align="end center">
                            <md-button id="{{template.id}}" onclick="editTemplate(this.id)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></md-button>
                            <md-button><i class="fa fa-trash-o" aria-hidden="true"></i></md-button>
                        </md-card-actions>
                    </md-card>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-info" style="min-height:453px;">
                <div class="panel-heading">
                    Add New Template
                </div>
                <div class="panel-body">

                    <form class="ng-submitted" name="templateForm" id="templateForm" ng-submit="insertData(data);">
                        <md-content class="autoScroll">

                            <md-input-container class="md-icon-float md-block">
                                <label>Template</label>
                                <input type="text" required name="addtemp" ng-model="data.addtemp">
                            </md-input-container>

                            <div class="col-md-12">
                                <div class="pull-right">
                                    <md-button class="md-raised md-primary" type="submit" name="submit">Add <i class="fa fa-save"></i></md-button>
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
<div id="updateTemplates" class="modal fade" role="dialog" >
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Project</h4>
            </div>
            <div class="modal-body">
                <form class="ng-submitted" name="templateeditform" id="projectform" ng-submit="updateTemplate(data);">
                    <md-content class="autoScroll">
                        <md-input-container class="md-icon-float md-block hidden">
                            <label>Id</label>
                            <md-icon class="fa fa-user"></md-icon>
                            <input type="text" id="template_id" name="template_id" ng-model="data.tid">
                        </md-input-container>
                        <md-input-container class="md-icon-float md-block">
                            <label>Template</label>
                            <md-icon class="fa fa-user"></md-icon>
                            <textarea required name="updateTemplate" ng-model="data.updatetemplate">{{template.text}}</textarea>
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
<script>
    function editTemplate(templateId) {
        var $modal = $('#updateTemplates'),
                $clientID = $modal.find('#template_id');
        $clientID.val(templateId);
        $modal.modal("show");

    }
</script>
