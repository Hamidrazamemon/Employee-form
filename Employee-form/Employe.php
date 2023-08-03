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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
.select2-container {
            font-family: 'Arial', sans-serif; /* Replace 'Arial' with your desired font */
            font-size: 14px;}
.select2-dropdown {
            font-family: 'Arial', sans-serif; /* Replace 'Arial' with your desired font */
            font-size: 14px;}
.select2-selection{
            font-family: 'Arial', sans-serif; /* Replace 'Arial' with your desired font */
            font-size: 14px;
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
    position: absolute;
    right: 15px;
    top: 15px;
}
#error-message{
    background: #EFDCDD;
    color: red;
    padding: 10px;
    margin: 10px;
    position: absolute;
    right: 15px;
    top: 15px;
}
.delete-btn{
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
    top: 20%;
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
select, input , input:focus{
    outline: none;
    border: none;
    
}

</style>
</head>
<body>
    <header>
        <nav class="nav">
            <a href="Employe.php" class="nav"   >Add New Employee</a>
            <a href="index.php" class="nav">Employee list</a>
        </nav>
    </header>
    <section>
        
    <h1>Employee Details</h1>
<div class="table-responsive-sm" >
    <table id="main" class="table">
        <thead>
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
        </thead>
            
    <form id="employee-form">
        <tr id="row">
            <!-- Employee details inputs -->
            
            <td><input type="text" name="name[]" placeholder="Name" id="name" required></td>
            <td><input type="text" name="father_name[]" placeholder="Father Name" id="fname" required></td>
        <td> <input type="email" name="email[]" placeholder="Email" id="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required></td>
        <td> <select name="grade[]" id="grade" class="js-example-basic-single" required>
        <option value='A'>A</option><option value='b'>B</option><option value='c'>C</option><option value='d'>D</option><option value='e'>E</option><option value='f'>F</option>
            </select></td>
            <td><select name="department[]" id="department" class='js-example-basic-single' required>
                <option value="Admin">Admin</option>
                <option value="IT">IT</option>
                <option value="PHP">Senior PHP</option>
                <option value="frontend">Frontend</option>
                <option value="backend">Backend</option>
                <option value="Senior">Junior PHP</option>
                
            </select></td>
            <td><input type="text" id="cnic" name="cnic[]" placeholder="NIC NO" pattern="\d{5}-\d{7}-\d" required></td>
        <td><input type="tel" id="phone" name="phone[]" placeholder="phone number" pattern="(\+92)\d{9}" required></td>
            <td><input type="number" step="0.01" name="salary[]" placeholder="Salary" id="sal" class="sal" required></td>
            <td><input type="date" name="date_of_joining[]" placeholder="Date of Joining" id="doj" required></td>
            <td><input type="text" name="address[]" placeholder="Address" id="add" required></textarea></td>
        <td><button type="button" id="remove-row-btn" class="rem">-</button></td>
            <br>
            </tr>
            <tr>
                
            </form>
            
            
        <p id="error-message"></p>
            <center>
            <button type="button"id="add-row-btn">Add Row</button>
            <button type="submit" id="submit-btn">Add Employee</button>
            <p type="text" id="error_message"></p>
            </center>
            </tr>
    </table>
</div>

<div style="padding-top: 10px;">
    <label>Total salary</label>
    <input type="number" name="totalsalary" id="total" value="" readonly >
</div>

</section>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    
       
     $('.js-example-basic-single').select2();

    var i = 0;
    $("#add-row-btn").on("click", function() {
        var html_code = "<tr id='row" + i + "'>";
        html_code += "<td><input type='text' name='name[]' placeholder='Name' id='name'" + i + "'></td>";
        html_code += "<td><input type='text' name='father_name[]' placeholder='Father Name' id='fname" + i + "' required></td>";
        html_code += "<td><input type='email' name='email[]' placeholder='Email' id='email" + i + "'pattern='[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$' required></td>";
        html_code += "<td><select name='grade[]' id='grade" + i + "' class='js-example-basic-single' required><option value='A'>A</option><option value='b'>B</option><option value='c'>C</option><option value='d'>D</option><option value='e'>E</option><option value='f'>F</option> </select></td>";
        html_code += "<td><select name='department[]' id='department" + i + "'class='js-example-basic-single' required><option value='Admin'>Admin</option><option value='IT'>IT</option><option value='PHP'>Senior PHP</option><option value='frontend'>Frontend</option><option value='backend'>Backend</option><option value='Senior'>Junior PHP</option></select></td>";
        html_code += "<td><input type='text' id='cnic" + i + "' name='cnic[]' placeholder='NIC NO' pattern='\\d{5}-\\d{7}-\\d' required></td>";
        html_code += "<td><input type='tel' id='phone" + i + "' name='phone[]' placeholder='phone number' pattern='(\\+92)\\d{9}' required></td>";
        html_code += "<td><input type='number' step='0.01' name='salary[]' id='sal" + i + "' class='sal' placeholder='Salary' required></td>";
        html_code += "<td><input type='date' name='date_of_joining[]' placeholder='Date of Joining' id='doj" + i + "' required></td>";
        html_code += "<td><input type='text' name='address[]' placeholder='Address' id='add" + i + "' required></td>";
        html_code += "<td><button type='button' class='rem'>-</button></td>";
        html_code += "</tr>";

        // Append the cloned row to the table's body
        $("#main").append(html_code);
        i++    
        $('.js-example-basic-single').select2();
    });

    // Remove Row button functionality
    $("#main").on("click", ".rem", function() {
            $(this).closest("tr").remove();
            
    });
    $('#submit-btn').on("click", function(e) {
    e.preventDefault();
    var rowcount = $('#employee-form').length;
    if (rowcount > 3) {
        
    
    var formdata = new FormData(this);
    var name = $("#name").val();
    var father_name = $("#fname").val();
    var email = $("#email").val();
    var grade = $("#grade").val();
    var department = $("#department").val();
    var nic_no = $("#cnic").val();
    var phone_no = $("#phone").val();
    var salary = $("#sal").val();
    var date_of_joining = $("#doj").val();
    var address = $("#add").val();}
        if (name == "" || father_name == "" || email == "" || grade == "" || department == "" || nic_no == "" || phone_no == "" || salary == "" || date_of_joining == "" || address == "") {
            $("#error-message").html("All fields are required.").slideDown().delay(2000).slideUp();
            $("#success-message").slideUp();
        } else {
            $.ajax({
                url: "insert_emp.php",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    if (data === "success") {
                        $("#success-message").html("Employee data added successfully.").slideDown().delay(2000).slideUp();
                        $("#error-message").slideUp();
                    
                         $("#employee-form")[0].reset();
                        } else {
                        $("#error-message").html("Failed to insert data. Please try again.").slideDown().delay(2000).slideUp();
                        $("#success-message").slideUp();
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    $("#error-message").html("An error occurred while processing the request. Please try again.").slideDown().delay(2000).slideUp();
                    $("#success-message").slideUp();
                }
            });
        }
    });
                    
$('#main').on("keyup", ".sal", function () {

var sum = 0;

$('.sal').each(function () {
    sum += Number($(this).val());
});

$('#total').val(sum);
});


});

</script>

