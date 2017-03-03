dashboard.controller('response', function ($scope, $http) {
    getResponseTask();
    $scope.response = [];
    function getResponseTask() {
// Sending request to EmpDetails.php files
        $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/response.php').success(function (data) {
// Stored the returned data into scope
        
            $scope.response = data;
            console.log(data);
        });
    }
});
