	<section>
		<div>
			<h1>Workstation <span name="action"><?php echo($actionType);?></span></h1> 
			<button name="btn-back" style="margin-left:10px;">Back to List</button>
		</div>
	</section>
	
	<section class="sectionContent">
		<div class="formContent">
			<input type="hidden" name="id" value="<?php echo($id);?>" disabled />
			<table class="mainForm">
				<tr>
					<td class="col-xs-4"><span>WSID</span></td>
					<td><input type="text" name="wsid" placeholder="WSID" required="true"/> <span class="mainForm-requiredText">* Required</span></td>
				</tr>
				<tr>
					<td><span>Machine</span></td>
					<td><input type="text" name="machine" placeholder="Machine"/></td>
				</tr>
				<tr>
					<td><span>Type</span></td>
					<td><input type="text" name="type" placeholder="Type"/></td>
				</tr>
				<tr>
					<td><span>Brand</span></td>
					<td><input type="text" name="brand" placeholder="Brand name"/></td>
				</tr>
				<tr>
					<td><span>Coordinator</span></td>
					<td><input type="text" name="coordinator" placeholder="Coordinator"/></td>
				</tr>
				<tr>
					<td><span>Location</span></td>
					<td><textarea rows="4" cols="50" type="text" name="location" placeholder="Address"></textarea></td>
				</tr>
			</table>
			<div class="submissionBar">
				<div class="submissionResult inlineAlert hidden"></div>
				<button name="btn-create" class="hidden">Create Another Workstation</button>
				<button name="btn-save">Create</button>
				<button name="btn-reset">Reset</button>
			</div>
		</div>
	</section>
	
	<section id="templates" class="hidden">
	</section>
	
	
	<!-- DO NOT CHANGE -->
	<script type="text/javascript" src="pages/workstation/workstation_get.js"></script>
	<!-- DO NOT CHANGE -->
	
	
	