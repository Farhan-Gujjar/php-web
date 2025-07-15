<?php
 $name = $_REQUEST['fname'];
 $email = $_REQUEST['email'];
 $phone = $_REQUEST['number'];
 $passward = $_REQUEST['passward'];
 $ID = $_REQUEST['ID'];
// $name =name;
// $passward =passward;
// $email =email;
// $phone =phone;
// $ID =ID;
echo " <!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>[Fitness club]</title>
    <link rel='stylesheet' href='style.css'>
<style>
   
    .divtab{
    display: grid;
    text-align: center;
    justify-content: center;
    background-color: aliceblue;
    margin: 20%;
    padding: 20px;
    height: 300px;
    background-color: rgba(0,0,0,0.4);

}
.tabl1{
    width: 100%;
    padding: 10px;

}
th{
    padding: 10px;
    width: 100%;
    background-color: aquamarine;
        
}
td{
    color: aquamarine;
}

.divtab h2{
    margin: 10px;
    border-bottom: 2px solid aquamarine;
    padding: 0;
    color: aquamarine;
    
}
.btn1{
    padding: 5px;
    font-size: 20px;
    margin-top: 20px;
    border-radius: 20px;
    padding-left: 20px;
    padding-right: 20px;
    background-color: rgba(0, 0, 0, 0.3);
}
a{
    text-decoration: none;
    color: aquamarine;
   
}
</style>
</head>
<body>
    <div class='container'>
        <nav class='navbar'>
            <div class='logo'>
           <a href='index.html' class='anker'> <h1>[Fit<span>ness</span>  Cl<span>ub]</span></h1></a>
        </div>
        <!-- <div class='divli'> -->
        <ul class='navli'>
            <li><a href='#' class='ankr'>Home</a></li>
            <li><a href='registration.html' class='ankr'>Registration</a></li>
            <li><a href='schedule.html' class='ankr'>Schedule</a></li>
            <li><a href='table.html' class='ankr'>Profile</a></li>
        </ul>
    <!-- </div> -->
        </nav>
       <div class='divtab'>
        <h2>Your Submitted Data</h2>
        <table class='tabl1'>
            <tr>
             <th>GYM ID</th>
             <th>Name</th>
             <th>Passward</th>
             <th>Email</th>
             <th>Phone</th>
             </tr>
            <tr>
                <td>$ID</td>
                <td>$name</td>
                <td>$passward</td>
                <td>$email</td>
                <td>$phone</td>
            </tr>
            
        </table>
        
        <center>
            <button class='btn1'>
                <a href='index.html'>ok</a>
            </button>
        </center>
    </div>
       </div>
        </div>
</body>
</html> ";

?>