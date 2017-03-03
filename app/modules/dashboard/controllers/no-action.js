
dashboard.controller('NoAction', function ($scope, $http) {
    getNoactionTask();
    $scope.noaction = [];
    function getNoactionTask() {
// Sending request to EmpDetails.php files
        $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/no-action.php').success(function (data) {
// Stored the returned data into scope

            $scope.noaction = data;
            console.log(data);
        });
    }
});