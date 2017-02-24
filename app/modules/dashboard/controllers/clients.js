/*==========================================================
 Author      : 2dotask
 Date Created: 23-02-2017
 Description : Controller to handle Client page
 Change Log
 s.no      date    author     description     
 
 
 ===========================================================*/

        dashboard.controller("ClientController", ['$rootScope', '$scope', '$state', '$location', 'dashboardService', 'Flash', '$http',
            function ($rootScope, $scope, $state, $location, dashboardService, Flash, $http) {
                var vm = this;
                vm.message = {};
//                        vm.submitForm = function () {
//                        var request = $http({
//                        method: "post",
//                                url: "/2dotask-angular/2dotask/#/app/clients",
//                                data:{name : vm.name},
//                                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
//                        }).success(function () {
//                        console.log(vm.message);
//                                $scope.datas = vm.message;
//                        });
//                        };

            }]);
dashboard.controller('ClientController', function ($scope, $http) {
    $scope.errors = [];
    $scope.msgs = [];
    $scope.insertData = function () {
        $http.post('clients.php', {'bname': $scope.cname})

                .success(function (data, status, headers, config) {
                    if (data.msg != '')
                    {
                        $scope.msgs.push(data.msg);
                    } else
                    {
                        $scope.errors.push(data.error);
                    }
                }).error(function (data, status) {
            $scope.errors.push(status);
        });
        console.log($scope.cname);
    };
});
