<h1>Appointment Data</h1>
<br/>
<style>
    .ngViewport.ng-scope {
        height: auto !important;
        max-height: 500px;
    }
    .peopleNameFilter {
        height:auto !important;
    }
</style>
<script type="text/javascript">
    var app = angular.module('adminApp', ['ngGrid','angular-loading-bar']);

    app.factory('GridService', ['$http', '$q',
        function($http, $q) {
            var contributorsFile = 'appointment/get';
            var contributors = [];

            function getContributors() {
                var deferred = $q.defer();

                $http.get(contributorsFile)
                    .then(function(result) {
                        contributors = result.data;
                        deferred.resolve(contributors);
                    }, function(error) {
                        deferred.reject(error);
                    });

                return deferred.promise;
            }

            function saveContributor(contributor) {
                var data_contributor = JSON.stringify( contributor );
                $http.post('admin/appointment/set', { postdata:data_contributor }).success(function(data) {
                    console.log("SAVE success !!!!");
                    console.log(data);
                    console.log(data_contributor);
                }).error(function() {
                    console.log("SAVE Error !!!!");
                });
            }


            return {
                getContributors: getContributors,
                saveContributor: saveContributor
            };

        }
    ]);



    app.controller('HomeController', ['$http', '$q','$scope','GridService', function($http, $q, $scope, gridService) {

        gridService.getContributors().then(function(data) {
            $.each(data,function(key, val) {
                data[key]['option']=val['id'];
            });
            $scope.myData = data;
        });

        $scope.filterOptions = {
            filterText: ''
        };

        $scope.gridOptions = {
            data: 'myData',
            /*enablePaging: true,
             showFooter: true,
             totalServerItems: 'totalServerItems',
             pagingOptions: $scope.pagingOptions,*/
            enablePinning: true,
            enableCellSelection: false,
            enableRowSelection: true,
            enableCellEdit: false,
            multiSelect:false,
            columnDefs: [
                {field:'option', displayName:'Option', width: 200, cellTemplate: '<div> <div class="ngCellText" style="text-align:center;"><a href="<?php echo site_url('admin/appointment/delete'); ?>/{{row.getProperty(col.field)}}"><input type="button" class="btn btn-danger inp_delete" value="Delete" data-description="{{row.getProperty(col.field)}}" style="padding: 0px 5px;"/></a> <a href="<?php echo site_url('admin/appointment/edit'); ?>/{{row.getProperty(col.field)}}"><input type="button" class="btn btn-warning" value="Edit" style="padding: 0px 5px;"/></a> </div> </div>',pinned:true},
                {field:'id', displayName: 'No.', width: 35},
                {field:'name', displayName:'Name', width: 150},
                {field:'email', displayName:'Email', width: 150},
                {field:'phone', displayName:'Phone Number', width: 150},
                {field:'address', displayName:'Address', width:200},
                {field:'city', displayName:'City', width: 150/*, cellTemplate:'<div> <div class="ngCellText" style="text-align: center;">{{row.getProperty(col.field)}}</div> </div>'*/},
                {field:'state', displayName:'State', width: 150},
                {field:'appointment_day', displayName:'Appointment Day', width: 150},
                {field:'appointment_time', displayName:'Appointment Time', width: 150},
                {field:'appointment_nature', displayName:'Appointment Nature', width: 150},
                {field:'status', displayName:'Status', width: 120},
                {field:'create_date', displayName:'Submitted At', width: 150},
                /*{field:'otp_status', displayName:'Status OTP', width: 100, cellTemplate:'<div ng-class="{green: row.getProperty(col.field) == 1}" class="red"> <div class="ngCellText" style="text-align:center;">{{row.getProperty(col.field)}}</div></div>', enableCellEdit: true},*/
                /*{field:'delete', displayName: 'Option', enableCellEdit: false, width: 300, cellTemplate: '<div> <div class="ngCellText" style="text-align:center;"><input type="button" class="btn btn-danger inp_delete" value="Delete" data-description="" ng-click="foo({{row.getProperty(col.field)}})" style="padding: 0px 5px;"/> <a href="http://lol.garena.co.id/eventtracking/staff/otpconfirmation.php?id={{row.getProperty(col.field)}}"><input type="button" class="btn btn-warning" value="OTP Confirmation" style="padding: 0px 5px;"/></a> <a href="http://lol.garena.co.id/eventtracking/staff/controller/cn_resendotp.php?id={{row.getProperty(col.field)}}"><input type="button" class="btn btn-info" value="Send OTP" style="padding: 0px 5px;"/></a> </div> </div>'}*/
            ],
            filterOptions: $scope.filterOptions,
            plugins: [new ngGridCsvExportPlugin()],
            showFooter: true
        };

        $scope.foo = function(delete_id) {
            /*var delete_id=$(this).attr('data-description');*/
//            alert("test");

            $('#confirmDelete .btn-delete-link').attr('href',"delete/"+delete_id);
            $('#confirmDelete').modal("show");
        };

        $scope.filterBy = "id";
        $scope.nameFilter = "";

        $scope.filterName = function() {
            var filterText = $scope.filterBy+':' + $scope.nameFilter;
            if ($scope.nameFilter !== '') {
                $scope.filterOptions.filterText = filterText;
            } else {
                $scope.filterOptions.filterText = '';
            }
        };

        $scope.$on('ngGridEventEndCellEdit', function(evt){
            console.log(evt.targetScope.row.entity);  // the underlying data bound to the row
            // Detect changes and send entity to REST server

            gridService.saveContributor(evt.targetScope.row.entity);
        });

        $scope.addItem = function() {
            $scope.myData.push({});
        }
    }]);
</script>
<div ng-app="adminApp">
    <div ng-controller="HomeController">
        <select id="filterBy" name="filterBy" ng-model="filterBy" ng-change="filterName()">
            <option value="id">No</option>
            <option value="name">Name</option>
            <option value="email">Email</option>
            <option value="phone">Phone</option>
            <option value="address">Address</option>
            <option value="city">City</option>
            <option value="state">State</option>
            <option value="appointment_day">Appointment Day</option>
            <option value="appointment_time">Appointment Time</option>
            <option value="appointment_nature">Appointment Nature</option>
            <option value="status">Status</option>
        </select>
        <input class="peopleNameFilter form-control" id="personNameFilter" type="text" ng-model="nameFilter" placeholder="Filter" ng-change="filterName()">
        <div class="gridStyle" ng-grid="gridOptions"></div>
        <!--<table class="table table-bordered">
            <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Appointment Day</th>
                <th>Appointment Time</th>
                <th>Appointment Nature</th>
                <th>Status</th>
                <th>Submitted at</th>
            </tr>
            </thead>
            <tbody>
            <?php /*foreach($appointment as $ap): */?>
                <tr>
                    <td><?php /*echo $ap->id; */?></td>
                    <td><?php /*echo $ap->name; */?></td>
                    <td><?php /*echo $ap->email; */?></td>
                    <td><?php /*echo $ap->phone; */?></td>
                    <td><?php /*echo $ap->address; */?></td>
                    <td><?php /*echo $ap->city; */?></td>
                    <td><?php /*echo $ap->state; */?></td>
                    <td><?php /*echo $ap->appointment_day; */?></td>
                    <td><?php /*echo $ap->appointment_time; */?></td>
                    <td><?php /*echo $ap->appointment_nature; */?></td>
                    <td><?php /*echo $ap->status; */?></td>
                    <td><?php /*echo $ap->create_date; */?></td>
                </tr>
            <?php /*endforeach; */?>
            </tbody>
        </table>-->
    </div>
</div>

<script type="text/javascript">
    function

    $('.inp_delete').click(function() {
        var id_del = $(this).attr('data-description');
        alert('test');
//        $('#confirmDelete .btn-delete-link').attr('href',"delete/"+id_del);
//        $('#confirmDelete').modal("show");
    });
</script>

<!-- Modal -->
<div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Deleting Data..
                </h4>
            </div>
            <div class="modal-body">
                Are you sure to delete this appointment data
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <a href="#" class="btn-delete-link">
                    <button type="button" class="btn btn-primary">
                        Submit changes
                    </button>
                </a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>