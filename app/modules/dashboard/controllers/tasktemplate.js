
dashboard.controller('taskTemplateController', function ($scope, $http) {

    $scope.errors = [];
    $scope.msgs = [];
    $scope.insertData = function (info) {
        //console.log(info);
        $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/task-template.php', {"text": info.addtemp})

                .success(function (data) {
                    //console.log(data);
                    getTemplate();
                    //getInfo();
                });
        swal("Succesfully added Template", '', 'success');
    };
    getTemplate();
    $scope.templates = [];
    function getTemplate() {
// Sending request to EmpDetails.php files
        $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/get-template.php').success(function (data) {
// Stored the returned data into scope
            //console.log(data);
            $scope.templates = data;
            getTemplate();
            //console.log(data);
        });
    }
});