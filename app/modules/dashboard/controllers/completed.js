
dashboard.controller('Completed', function ($scope, $http) {
    getCompletedTask();
    $scope.completed = [];
    function getCompletedTask() {
// Sending request to EmpDetails.php files
        $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/completed.php').success(function (data) {
// Stored the returned data into scope

            $scope.completed = data;
            console.log(data);
        });
    }
});