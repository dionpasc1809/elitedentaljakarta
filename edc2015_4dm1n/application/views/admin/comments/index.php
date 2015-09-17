<?php
/**
 * Created by IntelliJ IDEA.
 * User: DELL
 * Date: 9/16/2015
 * Time: 8:22 AM
 */
?>

<h1>Comments Data</h1>
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
			var contributorsFile = 'comments/get';
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
				$http.post('comments/set', { postdata:data_contributor }).success(function(data) {
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
				/*{field:'option', displayName:'Option', width: 100, cellTemplate: '<div> <div class="ngCellText" style="text-align:center;"> <a href="<?php // echo site_url('admin/comments/delete'); ?>/{{row.getProperty(col.field)}}"><input type="button" class="btn btn-danger" value="Delete" style="padding: 0px 5px;"/></a> </div> </div>',pinned:true},*/
				/* <a href="<?php /*echo site_url('admin/doctors/delete'); */?>/{{row.getProperty(col.field)}}"><input type="button" class="btn btn-danger inp_delete" value="Delete" data-description="{{row.getProperty(col.field)}}" style="padding: 0px 5px;"/></a> */
				{field:'id', displayName: 'No.', width: 35},
				{field:'nama', displayName:'Name', width: 150},
				{field:'status', displayName:'Status', width: 150},
				{field:'star_rating', displayName:'Rating Star', width: 150},
				/*{field:'small_title', displayName:'Thumbnail Title', width: 150, cellTemplate:'<div> <div class="ngCellText" style="text-align: center;">{{row.getProperty(col.field)}}</div> </div>'},*/
				{field:'comments', displayName:'Comments', width: 150},
				{field:'approved', displayName:'Approved?', width: 150, cellTemplate:'<div ng-class="{green: row.getProperty(col.field) == 1}" class="red"> <div class="ngCellText" style="text-align:center;">{{row.getProperty(col.field)}}</div></div>', enableCellEdit:true},
				{field:'created_date', displayName:'Date Created', width: 150},
				{field:'modified_date', displayName:'Date Modified', width: 150},
			],
			filterOptions: $scope.filterOptions,
			plugins: [new ngGridCsvExportPlugin()],
			showFooter: true
		};

		$scope.foo = function(delete_id) {
			/*var delete_id=$(this).attr('data-description');*/
			$('#confirmDelete .btn-delete-link').attr('href',"controller/cn_delete.php?id="+delete_id);
			$('#confirmDelete').modal("show");
		};

		$scope.filterBy = "nama";
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

<style>
	.green {
		color: #FFF;
		font-weight: bold;
		background-color: green !important;
	}

	.red {
		color: #FFF;
		font-weight: bold;
		background-color: #D43F3A;
	}
</style>
<div ng-app="adminApp">
	<div ng-controller="HomeController">
		<select id="filterBy" name="filterBy" ng-model="filterBy" ng-change="filterName()">
			<option value="nama">Name</option>
			<option value="status">Status</option>
			<option value="star_rating">Rating Star</option>
			<option value="comments">Comments</option>
			<option value="created_date">Date Created</option>
			<option value="modified_date">Date Modified</option>
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