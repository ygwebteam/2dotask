dashboard.controller('ongoing', function ($scope, $http) {
    onGoing();
    $scope.ongoing = [];
    function onGoing() {
// Sending request to EmpDetails.php files
        $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/ongoing.php').success(function (data) {
// Stored the returned data into scope

            $scope.ongoing = data;
            console.log(data);
        });
    }
});
