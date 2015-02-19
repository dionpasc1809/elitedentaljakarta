/**
 * Created by Dion on 18/01/2015.
 */
angular
    .module('app')
    .controller('HomeCtrl',['$scope',function(a) {
        a.title="Home";
        a.items = ['Doctor','Nurse','Tools'];
    }]);

