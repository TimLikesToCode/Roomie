<?php   
 include 'config.php';  
 
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $delete=mysqli_query($conn, "DELETE FROM `user_form` WHERE 'id' = '$id'");  
      header("location:admin_manage_db");
      die();
}
 
 $query = "SELECT * FROM user_form WHERE user_type = 'user' ";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Manage Roomie Database</title>  
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
           <th>Operation</th>  
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                               <td>".$result['id']."</td>   
                               <td>".$result['name']."</td>                       
                               <td>".$result['email']."</td>  
                               <td>".$result['user_type']."</td>  
                               <td><a href='delete.php?id=".$result['id']."' id='btn'>Delete</a></td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  

     <div class="container">

          <div class="content">
          <a href="admin_view_database.php" class="btn">View Database</a>
          <a href="logout.php" class="btn">Logout</a>
          </div>

     </div> 

 </body>  
 </html>  