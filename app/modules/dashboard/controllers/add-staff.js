
dashboard.controller('staffController', function ($scope, $http) {

    $scope.errors = [];
    $scope.msgs = [];
    $scope.insertStaff = function (info) {
        console.log(info);
        if (info.pass === info.cpass) {
            $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/add-staff.php', {"data": info})

                    .success(function (data) {
                        $('#addStaff').modal('hide');
                    });
            swal("Succesfully added Staff", '', 'success');
        }else{
            $scope.msgs = 'Password Mismatched';
        }
    };

});