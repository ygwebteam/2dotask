
dashboard.controller('taskTemplateController', function ($scope, $http) {
    getTemplate();
    $scope.templates = [];
    function getTemplate() {
// Sending request to EmpDetails.php files
        $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/get-template.php').success(function (data) {
// Stored the returned data into scope
            //console.log(data);
            $scope.templates = data;
            console.log(data);
        });
    }
    ;
    $scope.errors = [];
    $scope.msgs = [];
    $scope.insertData = function (info) {
        //console.log(info);
        $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/task-template.php', {"text": info.addtemp})

                .success(function (data) {
                    console.log(data);
                    getTemplate();
                    //getInfo();
                });
        swal("Succesfully added Template", '', 'success');
    };
    $scope.updateTemplate = function (info) {
        //console.log(info);
        var template_id = document.getElementsByName('client_id')[0].value;
        $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/updatetask-template.php', {"id": template_id, "text": info.updatetemplate})

                .success(function (data) {
                    console.log(data);
                    getTemplate();
                    //getInfo();
                });
        swal("Succesfully added Template", '', 'success');
    };



});
dashboard.directive('regularCard', function () {
    return {
        restrict: 'E',
        templateUrl: '/2dotask-angular/2dotask/app/modules/dashboard/views/regularcard.php',
        scope: {
            name: '=',
        }
    }
});

