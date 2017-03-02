/*==========================================================
 Author      : 2dotask
 Date Created: 23-02-2017
 Description : Controller to handle Client page
 Change Log
 s.no      date    author     description     
 
 
 ===========================================================*/

        dashboard.controller('ClientController', function ($scope, $http) {
            getInfo();
            $scope.clientdetails = [];
            function getInfo() {
// Sending request to EmpDetails.php files
                $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/getclients.php').success(function (data) {
// Stored the returned data into scope

                    $scope.clientdetails = data;
                    //console.log(data);
                });
            }
            $scope.errors = [];
            $scope.msgs = [];
            $scope.insertData = function (info) {
                $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/clients.php', {"bname": info.cname})

                        .success(function (data) {
                            console.log(data);
                            $('#myModal').modal('hide');
                            getInfo();
                        });
                swal("Succesfully added Client", '', 'success');
            };
            $scope.showProjectDetails = function (data)
            {
                //console.log(data); 
                $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/getprojectdetail.php', {"id": data}).success(function (res)
                {
                    $scope.getprojectdetail = res;
                    //console.log($scope.getprojectdetail);
                    //console.log(res);
                });
            };
            $scope.insertProject = function (info) {
                    console.log(info);
                    var client_id = document.getElementsByName('client_id')[0].value;
                $http.post('/2dotask-angular/2dotask/app/modules/dbhandler/addproject.php', {"pname": info.pname, "client_id": client_id, "desc": info.desc})

                        .success(function (data) {
                            console.log(data);
                            $('#addProjects').modal('hide');
                            getInfo();
                        });
                swal("Succesfully added Project", '', 'success');
            };
        })


