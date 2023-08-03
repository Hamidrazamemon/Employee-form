
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    <title>insert Data</title>
<style>
body{
    font-family: arial;
    background: #b2bec3;
    padding: 0;
    margin: 0;
}
h1{
    text-align: center;
    margin: 15px;
    
}
#main{
    width: 800px;
    margin: 0 auto;
    background-color: white;
    font-size: 19px;
}
#load-button{
    background-color: green;
    font-size: 20px;
    color: #ffff;
    border: 0;
    padding: 10px 10px;
    border: 1px solid black;
    border-radius: 10px;
    cursor: pointer; 
    
}
#header{
    background: #f7d794;
}
#table-form{
    background: #55efc4;
    padding: 20px 10px;
}
#table-data{
    padding: 15px;
    height: 500px;
    vertical-align: top;
}
#table-data th{
    background: #74b9ff;
}
#table-data tr:nth-child(odd){
    background: #ecf0f1;
}
#success-message{
    background: #DEF1D8;
    color: green;
    padding: 10px;
    margin: 10px;
    display: none;
    position: absolute;
    right: 15px;
    top: 15px;
}
#error-message{
    background: #EFDCDD;
    color: red;
    padding: 10px;
    margin: 10px;
    display: none;
    position: absolute;
    right: 15px;
    top: 15px;
}
.delete_btn{
    background-color: red;
    color: #ffff;
    border: 0;
    padding: 4px 10px;
    border-radius: 3px;
    cursor: pointer;
}
.edit-btn{
    background-color: green;
    color: #ffff;
    border: 0;
    padding: 4px 10px;
    border-radius: 3px;
    cursor: pointer;
}
#modal{
    background-color: rgba(0, 0, 0, 0.7);
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 100;
    display: none;
}
#modal-form {
    background-color: #fff;
    width: 30%;
    position: relative;
   
    left: calc(50% - 15%);
    padding: 15px;
    border-radius: 4px;
}
#modal-form h2{
    margin: 0 0 15px;
    padding-bottom: 10px;
    border-bottom: 1px solid #000 ;
}
#close-btn{
    background-color: red;
    color: white;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    border-radius: 50%;
    position: absolute;
    top: -15px;
    right: -15px;
    cursor: pointer;

}
nav,.nav{
    background-color: white;
    color: black;
    padding: 10px;
    font-size: 20px;
    text-decoration: none;
}
.nav:hover{
    background-color: #b2bec3;
    color: white;
    border: #000 1px solid;

    
}


</style>
</head>
<body>
    <header>
        <nav class="nav">
            <a href="Employe.php" class="nav">Add New Employee</a>
            <a href="index.php" class="nav">Employee list</a>
        </nav>
    </header>
<h1>Employee Details</h1>
<div class="table-responsive-sm">
    <table id="main" class="table">
        <thead style="border: #000 solid 1px;">
            <!-- <table width="100px" cellspacing="0" cellpadding="10px"> -->
            <th >id</th>
            <th>Name</th>
            <th>Father-Name</th>
            <th>Email</th>
            <th>Grade</th>
            <th>Department</th>
            <th>NIC No</th>
            <th>Phone Number</th>
            <th>Salary</th>
            <th>Date Of Joining</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
    </table>
</div>
        
<div style="padding-top: 10px;">
    <label>Total salary</label>
    <input type="number" name="totalsalary" id="total" value="" readonly >
</div>
<div id="modal">
    <div id="modal-form">
        <h2>Edit Form</h2>
        <form id="update_form">
            <table cellspacing = "10px" width="100%">
                <tr>
                    <th>id</th>
                    <td><input type="id" name="id" value="" id="edit-id" readonly></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><input type='text' name='name' id='edit-name' required></td>
                </tr>
                <tr>
                    <th>Father Name</th>
                    <td><input type='text' name='father_name' id='edit-fname' required></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type='email' name='email' id='edit-email'pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required></td>
                </tr>
                <tr>
                    <th>Grade</th>
                    <td>
                        <select name='grade' id='edit-grade' required>
                            <option value='A'>A</option>
                            <option value='B'>B</option>
                            <option value='C'>C</option>
                            <option value='D'>D</option>
                            <option value='E'>E</option>
                            <option value='F'>F</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Department</th>
                    <td>
                        <select name='department' id='edit-department' required>
                            <option value='Admin'>Admin</option>
                            <option value='IT'>IT</option>
                            <option value='Senior PHP'>Senior PHP</option>
                            <option value='Frontend'>Frontend</option>
                            <option value='Backend'>Backend</option>
                            <option value='Junior PHP'>Junior PHP</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>NIC NO</th>
                    <td><input type='text' name='nic_number' id='edit-cnic' pattern="\d{5}-\d{7}-\d" required></td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td><input type='tel' name='phone_number' id='edit-phone'pattern="(\+92)\d{10}" required></td>
                </tr>
                <tr>
                    <th>Salary</th>
                    <td><input type='number' step='0.01' name='salary' id='edit-sal' required></td>
                </tr>
                <tr>
                    <th>Date of Joining</th>
                    <td><input type='date' name='date_of_joining' id='edit-doj' required></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><input type='text' name='address' id='edit-add' required></td>
                </tr>
                <tr>
                    <td><button type='submit' id='edit-submit'>Update Employee</button></td>
                </tr>
            </table>
        </form>
        <div id="close-btn">X</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
        <script type="text/javascript">
  function result() {
    // Your logic for the result function goes here
  }

  $(document).ready(function(){
    
    var tabledata1 = $('#main').DataTable();
    
    $('#main').dataTable().fnDestroy();
    table = $('#main').DataTable({
        dom: 'Bfrtip',
        orderCellsTop: true,
        fixedHeader: true,

        buttons: [
            'copy', 'csv', 'excel', 'pdf','print',
        ]
    });
    $('#main thead tr:eq(1) th').each(function(i) {
        var title = $(this).text();
        $(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
        $('input', this).on('keyup change', function() {
            if (table.column(i).search() !== this.value) {
                table
                    .column(i)
                    .search(this.value)
                    .draw();
            }
        });
    });
        // } ); 
      $.ajax({
        url: "emp.php",
        type: "POST",
        data : {action:"view"},
        success: function(data){
            
            btn='<button >edit</button>';
            for (let i = 0; i < data.length; i++) {
                table.row.add( [
                    data[i].id,
                    data[i].name,
                    data[i].father_name,
                    data[i].email,
                    data[i].grade,
                    data[i].Department,
                    data[i].nic_number,
                    data[i].phone_number,
                    data[i].salary,
                    data[i].date_of_joining,
                    data[i].address,
                                '<button class="edit-btn" id="edt_btn'+data[i].id+'">Edit</button>',
                                '<button class="delete_btn" id="'+data[i].id+'">Delete</button>',
                ] )
                table.draw();
            }
            
        },
        error: function(e){
            console.log(e);
        }
      });

      // Create a function to clear the form fields


$("#main").on('click','.delete_btn',function(){
    if(confirm("Do you really want to delete this record?")){
        var employId = $(this).attr("id");
        $.ajax({
            url: 'delete.php',
            type: 'POST',
            data: {action:'delete', id:employId },
            dataType: 'json', // Expecting JSON response
            success: function (data1) {
                
                if (data1=='1') { 
                    $.ajax({
                        url: "emp.php",
                        type: "POST",
                        data : {action:"view"},
                        success: function(data){
                            $('#main').dataTable().fnClearTable(); 
                            $.fn.dataTable.ext.errMode = 'none';
                            var tabledata1 = $('#main').DataTable();
                            // $('#main').dataTable().fnDestroy();
                            table = $('#main').DataTable({
                                dom: 'Bfrtip',
                                orderCellsTop: true,
                                fixedHeader: true,
                
                                buttons: [
                                    'copy', 'csv', 'excel', 'pdf','print',
                                ]
                            });
                            $('#main thead tr:eq(1) th').each(function(i) {
                                var title = $(this).text();
                                $(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
                                $('input', this).on('keyup change', function() {
                                    if (table.column(i).search() !== this.value) {
                                        table
                                            .column(i)
                                            .search(this.value)
                                            .draw();
                                    }
                                });
                            });
    
                            for (let i = 0; i < data.length; i++) {
                                
                            
                            table.row.add( [
                                data[i].id,
                                data[i].name,
                                data[i].father_name,
                                data[i].email,
                                data[i].grade,
                                data[i].Department,
                                data[i].nic_number,
                                data[i].phone_number,
                                data[i].salary,
                                data[i].date_of_joining,
                                data[i].address,
                                            '<button class="edit-btn" id="edt_btn'+data[i].id+'">Edit</button>',
                                            '<button class="delete_btn" id="'+data[i].id+'">Delete</button>',
                            ] )
                        table.draw();
                        }
                        //   $("#table-data").html(data);
                    },
                        error: function(e){
                            console.log(e);
                        }
                    })
                    
                    
                }else{
                    $("#error-message").html("Cannot Delete.").slideDown();
                    $("#success-message").slideUp();
                }
            },
            error: function(e){
                console.log(e);
            }
        });
        
    }
});


            $(document).on('click', '.edit-btn', function () {
                        // console.log('data');
                $("#modal").show();
                var employIdraw  = $(this).attr("id");
                var employIdraws = employIdraw.split("edt_btn");
                var employId=employIdraws[1];
                $.ajax({
                    url: "data.php",
                    type: "POST",
                    data: {action:'edit', id: employId},
                    success: function (data) {
                        
                        //    var employeeData = JSON.parse(data);
                        // Update the input fields in the modal with the retrieved data
                        $("#edit-id").val(data.id);
                        $("#edit-name").val(data.name);
                        $("#edit-fname").val(data.father_name);
                        $("#edit-email").val(data.email);
                        $("#edit-grade").val(data.grade);
                        $("#edit-department").val(data.Department);
                        $("#edit-cnic").val(data.nic_number);
                        $("#edit-phone").val(data.phone_number);
                        $("#edit-sal").val(data.salary);
                        $("#edit-doj").val(data.date_of_joining);
                        $("#edit-add").val(data.address);
                        
                    },
                    error: function(e){
                        console.log(e);
                    }

                    
                });
            })
        
            $("#close-btn").on('click', function (){
                $("#modal").hide();
            }) 

            $('#update_form').on('submit',function (e) {
              
                e.preventDefault();
                var formdata = new FormData(this);
                var name = $("#edit-name").val();
                var father_name = $("#edit-fname").val();
                var email = $("#edit-email").val();
                var grade = $("#edit-grade").val();
                var department = $("#edit-department").val();
                var nic_no = $("#edit-cnic").val();
                var phone_no = $("#edit-phone").val();
                var salary = $("#edit-sal").val();
                var date_of_joining = $("#edit-doj").val();
                var address = $("#edit-add").val();
                // console.log(name);
                // console.log(father_name);
                // console.log(email);
                // console.log(grade);
                // console.log(department);
                // console.log(nic_no);
                // console.log(phone_no);
                // console.log(salary);
                // console.log(date_of_joining);
                // console.log(address);
                if (name != "" || father_name != "" || email != "" || grade != "" || department != "" || nic_no != "" || phone_no != "" || salary != "" || date_of_joining != "" || address != "") {
                   
                    formdata.append('action','update');
                    $.ajax({
                        url: "data.php",
                        type: "POST",
                        data: formdata,
                        contentType: false,
                        cache: false,
                        processData: false,
                        
                        success: function(data){
                            if(data == '1'){
                            $("#modal").hide();
                            table.clear().draw(); 
                            $.ajax({
                            url: "emp.php",
                            type: "POST",
                            data : {action:"view"},
                            success: function(data){
                                btn='<button >edit</button>';
                                for (let i = 0; i < data.length; i++) {
                                    table.row.add( [
                                        data[i].id,
                                        data[i].name,
                                        data[i].father_name,
                                        data[i].email,
                                        data[i].grade,
                                        data[i].Department,
                                        data[i].nic_number,
                                        data[i].phone_number,
                                        data[i].salary,
                                        data[i].date_of_joining,
                                        data[i].address,
                                                    '<button class="edit-btn" id="edt_btn'+data[i].id+'">Edit</button>',
                                                    '<button class="delete_btn" id="'+data[i].id+'">Delete</button>',
                                    ] )
                                    table.draw();
                                }
                            },
                            error: function(e){
                                console.log(e);
                            }
                        });
                        }
                            
                        },
                        error: function(e){
                            console.log(e);
                        }
                    })
                }else{console.log("error");}
            });
            calculateTotalSalary();
            $('#main').on("input", 'input[name="salary"]', function () {

var sum = 0;

    sum += Number($(this).val());
});

$('#total').val(sum);
});
                 
       
</script>

</body>

</html>