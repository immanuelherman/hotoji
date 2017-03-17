	<section>
		<div>
			<h1>DVR <span name="action"><?php echo($actionType);?></span></h1> 
			<button name="btn-back" style="margin-left:10px;">Back to List</button>
		</div>
	</section>
	
	<section class="sectionContent">
		<div class="formContent">
			<input type="hidden" name="id" value="<?php echo($id);?>" disabled />
			<table class="mainForm">
				<tr>
					<td class="col-xs-4"><span>Serial Number</span></td>
					<td><input type="text" name="serialNumber" placeholder="Serial Number" required="true"/> <span class="mainForm-requiredText">* Required</span></td>
				</tr>
				<tr>
					<td><span>Brand</span></td>
					<td><input type="text" name="brand" placeholder="Brand name"/></td>
				</tr>
				<tr>
					<td><span>Vendor</span></td>
					<td><input type="text" name="vendor" placeholder="Coordinator"/></td>
				</tr>
				<tr>
					<td><span>Location</span></td>
					<td><textarea rows="4" cols="50" type="text" name="location" placeholder="Address"></textarea></td>
				</tr>
				<tr>
					<td><span>Username</span></td>
					<td><input rows="4" cols="50" type="text" name="dvr_username" placeholder="Username"></input></td>
				</tr>
				<tr>
					<td><span>Password</span></td>
					<td><input rows="4" cols="50" type="text" name="dvr_password" placeholder="Password"></input></td>
				</tr>
				<tr>
					<td><span>Channels</span></td>
					<td class="multifield">
						<div>
							<span>1:</span>
							<input type="hidden" id="channel_0_id"/>
							<input type="text" name="channel_0" placeholder="WSID Ch 1"/>
							<span id="channel_0_status" class="statusIcon"></span>
						</div>
						<div>
							<span>2:</span>
							<input type="hidden" id="channel_1_id"/>
							<input type="text" name="channel_1" placeholder="WSID Ch 2"/>
							<span id="channel_1_status" class="statusIcon"></span>
						</div>
						<div>
							<span>3:</span>
							<input type="hidden" id="channel_2_id"/>
							<input type="text" name="channel_2" placeholder="WSID Ch 3"/>
							<span id="channel_2_status" class="statusIcon"></span>
						</div>
						<div>
							<span>4:</span>
							<input type="hidden" id="channel_3_id"/>
							<input type="text" name="channel_3" placeholder="WSID Ch 4"/>
							<span id="channel_3_status" class="statusIcon"></span>
						</div>
					</td>
				</tr>
				
				
			</table>
			<div class="submissionBar">
				<div class="submissionResult inlineAlert hidden"></div>
				<button name="btn-create" class="hidden">Create Another DVR</button>
				<button name="btn-save">Save</button>
				<button name="btn-reset">Reset</button>
			</div>
		</div>
	</section>
	
	<section id="templates" class="hidden">
	</section>
	
	
	<!-- DO NOT CHANGE -->
	<script type="text/javascript" src="pages/dvr/dvr_get.js"></script>
	<!-- DO NOT CHANGE -->
	
	
	