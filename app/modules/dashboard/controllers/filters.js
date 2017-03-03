dashboard.controller("filters", ['$rootScope', '$scope', '$state', '$location', 'dashboardService', 'Flash',
    function ($rootScope, $scope, $state, $location, dashboardService, Flash) {
        var vm = this;

        console.log("coming to About controller");
        $scope.displayDialog = function () {
            mdcDateTimeDialog.show({
                maxDate: $scope.maxDate,
                time: true
            })
                    .then(function (date) {
                        $scope.selectedDateTime = date;
                        console.log('New Date / Time selected:', date);
                    }, function () {
                        console.log('Selection canceled');
                    });
        };

    }]);
