<form id="form-create-emp" action="javascript://" method="POST">
<table class='table table-hover table-responsive table-bordered'>
            </tr>
				<td>Employee Type</td>
				<td><select id="employeeType" class="form-control">
					<option value="CSO_1">CSO 1</option>
					<option value="CSO_2">CSO 2</option>
					<option value="CSO_3">CSO 3</option>
					<option value="CSO_4">CSO 4</option>
					<option value="CSO_5">CSO 5</option>
					</select>
				</td>
			</tr>
			</tr>
				<td>Employee Code</td>
				<td><input type="number" id="employeeCode" name="employeeCode" class="form-control" /></td>
			</tr>
			<tr>
				<td>Employee Name</td>
				<td><input type="text" id="employeeName" name="employeeName" class="form-control" /></td>
			</tr>
			<tr>
				<td>Begin Date</td>
				<td><input type="date" id="beginDate" name="beginDate" class="form-control" /></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" id="address" name="address" class="form-control" /></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" id="phone" name="phone" class="form-control" maxlength="50"/></td>
			<tr>
			<tr>
				<td>Birth Date</td>
				<td><input type="date" id="birthDate" name="birthDate" class="form-control" maxlength="50"/></td>
			<tr>
			<tr>
				<td>Birth Place</td>
				<td><input type="text" id="birthPlace" name="birthPlace" class="form-control" maxlength="50"/></td>
			<tr>
            <tr>
				<td>ID Number</td>
				<td>
                <input type="text" id="idNumber" name="idNumber" class="form-control" maxlength="20"/>
                </td>
            </tr>
            </tr>
				<td>Gender</td>
				<td><select id="isMale" name="isMale" class="form-control">
                        <option value="1">Male</option>
                        <option value="0">Female</option>
                    </select></td>
            </tr>
			<tr>
				<td>Marital Status</td>
				<td><select id="isMarried" name="isMarried" class="form-control">
                        <option value="1">Married</option>
                        <option value="0">Single</option>
                    </select></td>
            </tr>
            <tr>
				<td>Religion</td>
				<td><select id="religionId" name="religionId" class="form-control chosen-select">
                    </select></td>
            </tr>
            <tr>
				<td>Payment Method</td>
				<td><select id="paymentMethodId" name="paymentMethodId" class="form-control">
                    </select></td>
            </tr>
            <tr>
				<td>Bank Account Number</td>
				<td><input type="text" id="bankAccountNumber" name="bankAccountNumber" class="form-control" /></td>
            </tr>
            <tr>
				<td>BPJS TK Number</td>
				<td><input type="text" id="bpjsTkNumber" name="bpjsTkNumber" class="form-control" /></td>
            </tr>
            <tr>
				<td>BPJS KS Number</td>
				<td><input type="text" id="bpjsKsNumber" name="bpjsKsNumber" class="form-control" /></td>
            </tr>
            <tr>
				<td>Job</td>
				<td><select id="jobId" name="jobId" class="form-control chosen-select">
                    </select></td>
            </tr>
            <tr>
				<td>Project</td>
				<td><select id="projectId" name="projectId" class="form-control chosen-select">
                    </select></td>
            </tr>
			<tr>
                <td></td>
                <td><button type="submit" name="submit" class='btn btn-primary'><span class='glyphicon glyphicon-plus'></span> Submit</button></td>
            </tr>
</form>