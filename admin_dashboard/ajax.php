
<?php           
                session_start();    
                include "/home/venturer/SMS_mini_project/db.php";
                
                 if(isset($_POST['branch'])){

                    $_SESSION['branch']=$_POST['branch'];
                    exit();
                    
                 }

                 if(isset($_POST['semester'])){

                $_SESSION['semester']=$_POST['semester'];
                   
                 }

                 if(isset($_SESSION['branch'])&&isset($_SESSION['semester'])){
                     
                    $branch=$_SESSION['branch'];
                    $semester=$_SESSION['semester'];
                 

                $query=$conn->query("SELECT * FROM users WHERE course_name='".$branch."' AND current_semester='".$semester."';");
                
                if($query->num_rows>0){
                  // echo "working";
                  // exit();

                    ?>
                  
                 <h1 style="color:#1963ec;; margin: 12px;">STUDENT RECORDS</h1>
                 <table id="fl-table"  class="fl-table">
                    <thead>
                    <tr>
                     <th>id</th>
                     <th>name</th>
                     <th>email</th>
                     <th>Date of birth</th>
                     <th>Father name</th>
                     <th>Mother name</th>
                     <th>blood group</th>
                     <th>year of admission</th>
                     <th>branch</th>
                     <th>semester</th>     
                     <th>gender</th>
                     <th>mobile</th>
                     <th>address</th>
                     <th>operations</th>
                    </tr>
                    </thead><tbody>
                
<?php

                     $id=1;
                     $row=1;
                    while($row=$query->fetch_assoc()):

                        
                    
                    echo "<tr id='"; echo $id++; ?><?php echo "'>";                
                    echo "<td  id='id"; echo $id++; ?><?php echo "'>";?><?php echo $row['id']; ?> <?php echo "</td>";
                    echo "<td id='name"; echo $id++; ?><?php echo "'>";?><?php echo $row['name'];  ?><?php  echo "</td>";
                    echo "<td id='email"; echo $id++; ?><?php echo "'>";?><?php echo $row['email'];  ?><?php  echo"</td>";
                   
                    echo "<td id='dob"; echo $id++; ?><?php echo "'>";?><?php echo $row['dob'];  ?><?php echo "</td>";
                    echo "<td id='father_name"; echo $id++; ?><?php echo "'>";?><?php echo $row['father_name'];  ?><?php  echo "</td>";
                    echo "<td id='mother_name"; echo $id++; ?><?php echo "'>";?><?php echo $row['mother_name'];  ?><?php  echo "</td>";
                    echo "<td id='blood"; echo $id++; ?><?php echo "'>";?><?php echo $row['blood_group'];  ?><?php  echo "</td>";
                    echo "<td id='yoa"; echo $id++; ?><?php echo "'>";?><?php echo $row['year_of_admission'];  ?><?php  echo "</td>";
                    echo "<td id='branch"; echo $id++; ?><?php echo "'>";?><?php echo $row['course_name'];  ?><?php  echo "</td>";
                    echo "<td id='semester"; echo $id++; ?><?php echo "'>";?><?php echo $row['current_semester'];  ?><?php echo "</td>";
                    echo "<td id='gender"; echo $id++; ?><?php echo "'>";?><?php echo $row['gender'];  ?><?php echo "</td>";
                    echo "<td id='mobile"; echo $id++; ?><?php echo "'>";?><?php echo $row['mobile_no'];  ?><?php echo "</td>";
                    echo "<td id='address"; echo $id++; ?><?php echo "'>";?><?php echo $row['address'];  ?><?php echo "</td>";
                    echo "<td>";?><?php echo "<a data-toggle='tooltip' title='update'id='update"; echo $id++; ?><?php echo "' data-value='";?><?php echo $row['email']; ; ?><?php echo "'";?><?php echo " onclick='update(this.id);' class='uil-edit'>
                    <a  data-toggle='tooltip' onclick='delete_records(";?><?php echo $row['id']; ?><?php echo ");' title='delete' id='delete'  class='uil-trash-alt'>";?><?php echo "</td>";
                    echo "</tr>";?><?php
                    

               
                     endwhile;echo "</tbody>";
                     echo "</table>";
                    }else{
                       echo "<p class='container'>No records available!";
                    }

        }
    


?>
