/**
 * Created by Dion on 18/01/2015.
 */
angular
    .module('app',['ui.router','ngAnimate'])
    .config(['$urlRouterProvider', '$stateProvider', function($urlRouterProvider, $stateProvider){
        $urlRouterProvider.otherwise('/');

        $stateProvider
            .state('home', {
                url: '/',
                templateUrl: 'view/home.php',
                controller: 'HomeCtrl'
            })
            .state('doctors', {
                url: '/doctors',
                templateUrl: 'view/about.php'
            })
    }])