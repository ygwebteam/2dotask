dashboard.controller('acknowledged', function ($scope, $http) {
    getAcknowledgedTask();
    $scope.acknowledged = [];
    function getAcknowledgedTask() {
// Sending request to EmpDetails.php files
        $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/acknowleged.php').success(function (data) {
// Stored the returned data into scope

            $scope.acknowledged = data;
            console.log(data);
        });
    }
});
