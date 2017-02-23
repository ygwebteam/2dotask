dashboard.controller("ClientsController", ['$rootScope', '$scope', '$state', '$location', 'dashboardService', 'Flash',
    function ($rootScope, $scope, $state, $location, dashboardService, Flash) {
        var vm = this;

        vm.message = {};

        vm.submitForm = function () {
            console.log(vm.message);
            var request = $http({
                method: "post",
                url: "",
                data: vm.message,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });

            /* Check whether the HTTP Request is successful or not. */
            request.success(function (data) {
                console.log(data);
                if (data == "success") {
                    Flash.create('success', 'Message Sent Succesfully', 'large-text');
                    vm.message = {};
                    vm.clientForm.$pristine();
                    vm.clientForm.$setUntouched();

                }
            });
        };
        console.log("coming to Contact controller");
    }]);