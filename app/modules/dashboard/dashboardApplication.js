/*==========================================================
 Author      : Ranjithprabhu K
 Date Created: 24 Dec 2015
 Description : Base for Dashboard Application module
 
 Change Log
 s.no      date    author     description     
 
 
 ===========================================================*/

        var dashboard = angular.module('dashboard', ['ui.router', 'ngAnimate', 'ngMaterial']);

dashboard.config(["$stateProvider", function ($stateProvider) {

        //dashboard home page state
        $stateProvider.state('app.dashboard', {
            url: '/dashboard',
            templateUrl: 'app/modules/dashboard/views/home.html',
            controller: 'HomeController',
            controllerAs: 'vm',
            data: {
                pageTitle: 'Home'
            }
        });
        //team details page state
        $stateProvider.state('app.team-details', {
            url: '/team-details',
            templateUrl: 'app/modules/dashboard/views/team-details.php',
            controller: 'HomeController',
            controllerAs: 'vm',
            data: {
                pageTitle: 'Home'
            }
        });
        //dashboard home page state
        $stateProvider.state('app.task-template', {
            url: '/task-template',
            templateUrl: 'app/modules/dashboard/views/task-template.php',
            controller: 'taskTemplate',
            controllerAs: 'vm',
            data: {
                pageTitle: 'Home'
            }
        });
    //dashboard home page state
    $stateProvider.state('app.dashboard', {
        url: '/dashboard',
        templateUrl: 'app/modules/dashboard/views/home.html',
        controller: 'HomeController',
        controllerAs: 'vm',
        data: {
            pageTitle: 'Home'
        }
    });
    //team details page state
    $stateProvider.state('app.team-details', {
        url: '/team-details',
        templateUrl: 'app/modules/dashboard/views/team-details.php',
        controller: 'HomeController',
        controllerAs: 'vm',
        data: {
            pageTitle: 'Home'
        }
    });
    //dashboard home page state
    $stateProvider.state('app.task-template', {
        url: '/task-template',
        templateUrl: 'app/modules/dashboard/views/task-template.php',
        controller: 'taskTemplate',
        controllerAs: 'vm',
        data: {
            pageTitle: 'Template'
        }
    });

        //clients page state
        $stateProvider.state('app.Clients', {
            url: '/clients',
            templateUrl: 'app/modules/dashboard/views/clients.php',
            controller: 'ClientController',
            controllerAs: 'vm',
            data: {
                pageTitle: 'Clients'
            }
        });

        //filters page state
        $stateProvider.state('app.Filters', {
            url: '/filters',
            templateUrl: 'app/modules/dashboard/views/filters.php',
            controller: 'filters',
            controllerAs: 'vm',
            data: {
                pageTitle: 'Filters'
            }
        });

        //Achievements page state
        $stateProvider.state('app.today', {
            url: '/today',
            templateUrl: 'app/modules/dashboard/views/today.php',
            controller: 'CurrentTaskControler',
            controllerAs: 'vm',
            data: {
                pageTitle: 'Today Tasks'
            }
        });

        //Recent Projects page state
        $stateProvider.state('app.notcompleted', {
            url: '/not-completed',
            templateUrl: 'app/modules/dashboard/views/not-completed.php',
            controller: 'NotCompleted',
            controllerAs: 'vm',
            data: {
                pageTitle: 'Not-completed'
            }
        });

        //Experience page state
        $stateProvider.state('app.acknowledged', {
            url: '/acknowledged',
            templateUrl: 'app/modules/dashboard/views/acknowledged.php',
            controller: 'acknowledged',
            controllerAs: 'vm',
            data: {
                pageTitle: 'Acknowledged'
            }
        });

        // Portfolio page state
        $stateProvider.state('app.ongoing', {
            url: '/ongoing',
            templateUrl: 'app/modules/dashboard/views/ongoing.php',
            controller: 'ongoing',
            controllerAs: 'vm',
            data: {
                pageTitle: 'ongoing'
            }
        });

        //About Me page state
        $stateProvider.state('app.noaction', {
            url: '/no-action',
            templateUrl: 'app/modules/dashboard/views/no-action.php',
            controller: 'NoAction',
            controllerAs: 'vm',
            data: {
                pageTitle: 'No-action'
            }
        });

        //Contact page state
        $stateProvider.state('app.response', {
            url: '/response',
            templateUrl: 'app/modules/dashboard/views/response.php',
            controller: 'response',
            controllerAs: 'vm',
            data: {
                pageTitle: 'response'
            }
        });

        //Websites page state
        $stateProvider.state('app.completed', {
            url: '/completed',
            templateUrl: 'app/modules/dashboard/views/completed.php',
            controller: 'Completed',
            controllerAs: 'vm',
            data: {
                pageTitle: 'Completed Tasks'
            }
        });
//
//    //Gallery page state
//    $stateProvider.state('app.gallery', {
//        url: '/gallery',
//        templateUrl: 'app/modules/dashboard/views/gallery.html',
//        controller: 'GalleryController',
//        controllerAs: 'vm',
//        data: {
//            pageTitle: 'Gallery'
//        }
//    });
//
//    //Search page state
//    $stateProvider.state('app.search', {
//        url: '/search',
//        templateUrl: 'app/modules/dashboard/views/search.html',
//        controller: 'appCtrl',
//        controllerAs: 'vm',
//        data: {
//            pageTitle: 'Search'
//        }
//    });

    }]);

