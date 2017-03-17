	<section>
		<div><h1>DVR List</h1></div>
	</section>
	
	<section class="sectionContent">
		<div class="listTop">
			<button name="btn-add"><i class="fa fa-plus" aria-hidden="true"></i> Add</button>
			<button name="btn-import" class="hidden" disabled>Import(CSV)</button>
		</div>
		<div class="listContent">
			<table id="mainList" class="table-standard">
				<thead>
					<tr>
						<th>#</th>
						<th>Serial Number</th>
						<th>Brand</th>
						<th>Vendor</th>
						<th>Username</th>
						<th>Password</th>
						<th class="col-xs-3 hidden-xs hidden-sm">Address</th>
						<th></th>
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
				<td class="td-center">
					<button name="btn-edit"><i class="fa fa-pencil" aria-hidden="true" title="Edit"></i>
					</button> <button name="btn-delete"> <i class="fa fa-times" aria-hidden="true" title="Delete"></i></button>
				</td>
			</tr>
		</table>
	</section>
	
	
	<!-- DO NOT CHANGE -->
	<script type="text/javascript" src="pages/dvr/dvr_list.js"></script>
	<!-- DO NOT CHANGE -->
	
	
	