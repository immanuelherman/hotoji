	<section>
		<div><span class="pageHeader">User List</span></div>
	</section>
	
	<section class="sectionContent">
		<div class="listTop">
			<button name="btn-add">Add</button>
			<button name="btn-import" disabled>Import(CSV)</button>
		</div>
		<div class="listContent">
			<table id="mainList" class="table-standard">
				<thead>
					<tr>
						<th hName="index">#</th>
						<th hName="1">Username</th>
						<th hName="2">Role</th>
						<th hName="3">Fullname</th>
						<th hName="4">Email</th>
						<th hName="5">Phone</th>
						<th hName="6" class="col-xs-3 hidden-xs hidden-sm">Address</th>
						<th hName="7"></th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</section>
	
	
	<section id="templates" class="hidden">
		<table>
			<tr id="template-mainList-row">
				<td colName="index"></td>
				<td colName="1"></td>
				<td colName="2"></td>
				<td colName="3"></td>
				<td colName="4"></td>
				<td colName="5"></td>
				<td colName="6" class="col-xs-3 hidden-xs hidden-sm"></td>
				<td colName="7" class="td-center"><button name="btn-edit">Edit</button> <button name="btn-delete">Delete</button></td>
			</tr>
		</table>
	</section>
	
	
	<!-- DO NOT CHANGE -->
	<script type="text/javascript" src="pages/user/user_list.js"></script>
	<!-- DO NOT CHANGE -->
	
	
	