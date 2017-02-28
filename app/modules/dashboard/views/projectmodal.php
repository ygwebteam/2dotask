     <div id="addProjects" class="modal fade" role="dialog" >
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                    <form class="ng-submitted" name="projectform" id="projectform" ng-submit="insertProject(data);">
                        <md-content class="autoScroll">
                            <md-input-container class="md-icon-float md-block hidden">
                                <label>Id</label>
                                <md-icon class="fa fa-user"></md-icon>
                                <input type="text" required name="id" value="{{id}}" ng-model="data.id">
                            </md-input-container>
                            <md-input-container class="md-icon-float md-block">
                                <label>Project Name</label>
                                <md-icon class="fa fa-user"></md-icon>
                                <input type="text" required name="name" ng-model="data.pname">
                            </md-input-container>
                            <md-input-container class="md-icon-float md-block">
                                <label>Project Description</label>
                                <md-icon class="fa fa-user"></md-icon>
                                <textarea required name="desc" ng-model="data.desc"></textarea>
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