dashboard.controller('NotCompleted', function ($scope, $http) {
    getnotCompleted();
    $scope.notcompleted = [];
    function getnotCompleted() {
// Sending request to EmpDetails.php files
        $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/not-completed.php').success(function (data) {
// Stored the returned data into scope

            $scope.notcompleted = data;
            console.log(data);
        });
    }
});
