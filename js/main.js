/**
 * Created by Dion on 18/01/2015.
 */
angular
    .module('app',[
        'ui.router'
    ])
    .config(['$urlRouterProvider', '$stateProvider', function($urlRouterProvider, $stateProvider){
        $urlRouterProvider.otherwise('/');

        $stateProvider
            .state('home', {
                url: '/',
                templateUrl: 'view/home.php',
                controller: 'HomeCtrl'
            })
            .state('about', {
                url: '/about',
                templateUrl: 'view/about.php'
            })
    }])