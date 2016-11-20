$(document).ready(function(){
        
        var page = 1;
    
        function getDataProject() {
        $.ajax({ 
            type: 'GET', 
            url: 'http://localhost:8080/project',
            data: {get_param: 'value'},
            dataType: 'json',
            success: function (data) {
                $('select[id="projectId"]').empty();
                $('select[id="projectId"]').append($('<option>').text(""));
                $.each(data, function(index, obj) {
                    $('select[id="projectId"]').append($('<option>').text(obj.projectCode +" - "+obj.projectName).attr('value', obj.projectId));
                });
                $('.chosen-select').chosen({width : "300px"});
            }
        });
        }
    
        function getDataReligion() {
        $.ajax({ 
            type: 'GET', 
            url: 'http://localhost:8080/religion',
            data: {get_param: 'value'},
            dataType: 'json',
            success: function (data) {
                $('select[id="religionId"]').empty();
                $('select[id="religionId"]').append($('<option>').text(""));
                $.each(data, function(index, obj) {
                    $('select[id="religionId"]').append($('<option>').text(obj.religionName).attr('value', obj.religionId));
                });
            }
        });
        }
    
        function getDataDivision() {
            $.ajax({
                type: 'GET',
                url: 'http://localhost:8080/division',
                data: {get_param: 'value'},
                dataType: 'json',
                success: function (data) {
                $('select[id="divisionId"]').empty();
                $('select[id="divisionId"]').append($('<option>').text(""));
                $.each(data, function(index, obj) {
                    $('select[id="divisionId"]').append($('<option>').text(obj.divisionName).attr('value', obj.divisionId));
                });
            } 
            })
        }
    
        function getDataPaymentMethod() {
            $.ajax({
                type: 'GET',
                url: 'http://localhost:8080/payment-method',
                data: {get_param: 'value'},
                dataType: 'json',
                success: function (data) {
                $('select[id="paymentMethodId"]').empty();
                $('select[id="paymentMethodId"]').append($('<option>').text(""));
                $.each(data, function(index, obj) {
                    $('select[id="paymentMethodId"]').append($('<option>').text(obj.paymentMethodName).attr('value', obj.paymentMethodId));
                });
            } 
            })
        }
    
        function getDataJob() {
            $.ajax({
                type: 'GET',
                url: 'http://localhost:8080/job',
                data: {get_param: 'value'},
                dataType: 'json',
                success: function (data) {
                $('select[id="jobId"]').empty();
                $('select[id="jobId"]').append($('<option>').text(""));
                $.each(data, function(index, obj) {
                    $('select[id="jobId"]').append($('<option>').text(obj.jobName).attr('value', obj.jobId));
                });
            } 
            })
        }
    
        function getDataEmployee(value) {
            $.ajax({
                type: 'GET',
                url: 'http://localhost:8080/employee',
                data: {tableName: value},
                dataType: 'json',
                success: function (data) {
                $.each(data, function(index, obj) {
                    $('table[id="table-emp"]').append($('<tr><td>'+obj.employeeCode+'</td><td>'+obj.employeeName+'</td><td>'+obj.beginDate+'</td><td>'+obj.projectName+'</td><td>'+obj.jobName+'</td><td>'+obj.bankAccountNumber+'</td><td>'+obj.bpjsTkNumber+'</td><td>'+obj.bpjsKsNumber+'</td><td></td></tr>'));
                });
            } 
            })
        }
        /* Employee */
        
        $('#create_employee').click(function(){
            // first view
            $('#page-content').fadeOut('fast', function(){
                $('#page-content').load('/carefast_project/views/employee/form/form.php', function(){
                $('#page-content').fadeIn('fast');
                getDataReligion();
                getDataPaymentMethod();
                getDataDivision();
                getDataJob();
                getDataProject();
            });
            });          
        });
    
        $('#show_cso_one').click(function(){
            $('#page-content').fadeOut('fast', function(){
                var value = 'V_CSO_1';
                $('#page-content').load('/carefast_project/views/employee/show.php', function(){
                $('#page-content').fadeIn('fast');
                getDataEmployee(value);
                });
            });
        });
    
        $('#show_cso_two').click(function(){
            $('#page-content').fadeOut('fast', function(){
                var value = 'V_CSO_2';
                $('#page-content').load('/carefast_project/views/employee/show.php', function(){
                $('#page-content').fadeIn('fast');
                getDataEmployee(value);
                });
            });
        });
        
        $('#show_cso_three').click(function(){
            $('#page-content').fadeOut('fast', function(){
                var value = 'V_CSO_3';
                $('#page-content').load('/carefast_project/views/employee/show.php', function(){
                $('#page-content').fadeIn('fast');
                getDataEmployee(value);
                });
            });
        });
        
        $('#show_cso_four').click(function(){
            $('#page-content').fadeOut('fast', function(){
                var value = 'V_CSO_4';
                $('#page-content').load('/carefast_project/views/employee/show.php', function(){
                $('#page-content').fadeIn('fast');
                getDataEmployee(value);
                });
            });
        });
    
        $('#show_cso_five').click(function(){
            $('#page-content').fadeOut('fast', function(){
                var value = 'V_CSO_5';
                $('#page-content').load('/carefast_project/views/employee/show.php', function(){
                $('#page-content').fadeIn('fast');
                getDataEmployee(value);
                });
            });
        });
        
        $(document).on('submit', '#form-create-emp', function() {
			var employeeType = $("#employeeType").val();
			var employeeCode = $("#employeeCode").val();
			var employeeName = $("#employeeName").val();
            var beginDate = $('#beginDate').val();
            var address = $("#address").val();
			var phone = $("#phone").val();
            var birthDate = $("#birthDate").val();
            var birthPlace = $("#birthPlace").val();
            var idNumber = $('#idNumber').val();
            var isMale = $('#isMale').val();
            var isMarried = $('#isMarried').val();
            var religionId = $('#religionId').val();
            var paymentMethodId = $('#paymentMethodId').val();
            var bankAccountNumber = $('#bankAccountNumber').val();
            var bpjsTkNumber = $('#bpjsTkNumber').val();
            var bpjsKsNumber = $('#bpjsKsNumber').val();
            var jobId = $('#jobId').val();
            var projectId = $('#projectId').val();
            
            var jsonObj = new Object();
            jsonObj.employeeType = employeeType;
            jsonObj.employeeCode = employeeCode;
            jsonObj.employeeName = employeeName;
            jsonObj.address = address;
            jsonObj.phone =  phone;
            jsonObj.beginDate = beginDate;
            jsonObj.birthDate = birthDate;
            jsonObj.birthPlace = birthPlace;
            jsonObj.idNumber = idNumber;
            jsonObj.isMale = isMale;
            jsonObj.isMarried = isMarried;
            jsonObj.religionId = religionId;
            jsonObj.paymentMethodId = paymentMethodId;
            jsonObj.bankAccountNumber = bankAccountNumber;
            jsonObj.bpjsTkNumber = bpjsTkNumber;
            jsonObj.bpjsKsNumber = bpjsKsNumber;
            jsonObj.jobId = jobId;
            jsonObj.projectId = projectId;
            
            var jsonData = JSON.stringify(jsonObj);
    
            $.ajax({ 
                beforeSend: function(xhrObj){
                    xhrObj.setRequestHeader("Content-Type", "application/json");
                    xhrObj.setRequestHeader("Accept", "application/json");
                },
                async: true,
                crossDomain: true,
                type: 'POST',
                url: 'http://localhost:8080/input-emp',
                data: jsonData,
                dataType: 'json',
                success: function (json) {
                    console.log(json);
                }
            });
            
        });
});