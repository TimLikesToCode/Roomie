<?php   
 include 'config.php';  
 $query = "select * from user_form";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>View Database</title>  
      <link rel="stylesheet" href="css/database.css">
      <link rel="stylesheet" href="css/style.css">
</head>  

 <body>  
 <header></header>  
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
           <th>UserID</th>  
           <th>Name</th>  
           <th>Email</th>  
           <th>User Type</th>  
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                          <td>".$i++."</td>  
                               <td>".$result['name']."</td>                       
                               <td>".$result['email']."</td>  
                               <td>".$result['user_type']."</td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  

     <div class="container">

          <div class="content">
          <a href="admin_manage_db.php" class="btn">Manage Database</a>
          <a href="logout.php" class="btn">Logout</a>
          </div>

     </div> 

 </body>  
 </html>  