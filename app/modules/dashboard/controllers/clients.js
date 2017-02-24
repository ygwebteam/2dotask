/*==========================================================
 Author      : 2dotask
 Date Created: 23-02-2017
 Description : Controller to handle Client page
 Change Log
 s.no      date    author     description     
 
 
 ===========================================================*/

        dashboard.controller('ClientController', function ($scope, $http) {
            $scope.errors = [];
            $scope.msgs = [];
            $scope.insertData = function (client) {
                $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/clients.php', {"bname": client.cname})

                        .success(function (data) {
                            if (data === true) {
                              
                            }
                            console.log(data);
                        });
                        swal("Succesfully added Client",'','success');
                        //$location.reload();
            };
        });
