dashboard.controller('NotCompleted', function ($scope, $http) {
    getcurrentTask();
    $scope.currenttask = [];
    function getcurrentTask() {
// Sending request to EmpDetails.php files
        $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/not-completed.php').success(function (data) {
// Stored the returned data into scope

            $scope.currenttask = data;
            console.log(data);
        });
    }
});
