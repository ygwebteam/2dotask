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

//    vm.submitForm = function () {
//       // console.log(vm.message);
//        var request = $http({
//            method: "post",
//            url: "/2dotask-angular/2dotask/#/app/clients",
//            data: vm.message,
//            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
//        });
//
//        /* Check whether the HTTP Request is successful or not. */
//        request.success(function (data) {
//            //console.log(data);
//            if (data == "success") {
//                Flash.create('success', 'Message Sent Succesfully', 'large-text');
//                vm.message = {};
//                vm.clientForm.$pristine();
//                vm.clientForm.$setUntouched();
//
//            }
//        });
//    };
    $scope.postdata = function (){
        $http.post('/2dotask-angular/2dotask/#/app/clients').success(function (data) {
             console.log(data);
        $scope.posts = data;
        $scope.loading = false;
    })
    .error(function () {
        $scope.error = "An Error has occured while loading posts!";
        $scope.loading = false;
    });
//            
//        var postdatas = $http({
//            method: "get",
//            url: "/2dotask-angular/2dotask/#/app/clients",
//            data: $scope.message,
//            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
//        });
//        postdatas.success(function (data) {
//            //$scope.postdatas = $scope.message;
//            console.log(data.name);
//        });
//        
   };
    console.log("coming to Contact controller");

}]);

