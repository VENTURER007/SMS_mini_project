<?php
session_start();    
include "/home/venturer/SMS_mini_project/db.php";

 if(isset($_POST['branch'])){

    $_SESSION['result_branch']=$_POST['branch'];
    exit();
    
 }

 if(isset($_POST['semester'])){

    $_SESSION['result_semester']=$_POST['semester'];
       
     

     if(isset($_SESSION['result_branch'])&&isset($_SESSION['result_semester'])){
         
       $branch = $_SESSION['result_branch'];
       $sem    = $_SESSION['result_semester'];

       $query=$conn->query("SELECT id,name FROM users WHERE course_name='".$branch."' AND current_semester='".$sem."';");
                
                if($query->num_rows>0){

                    ?>
               <div id='subject_div' style="padding-left: 24px;"><h1 style="color:#1963ec;font-size: calc(0.375rem + 1.5vw); margin: 12px;">ADD  Marks </h1> <input type='text' name='subject' class=' form-control' id="subject_input" placeholder='Subject name'><br>
               <input type='text' name='exam' style="margin-left:0px;margin-top: 10px;" class=' form-control exam_input' id="exam_input" placeholder='exam name'><br>
               <button class=" hvr-radial-out button button" id='subject_button' onclick="subject_result(event);" id="subject_button" >Add</button><br>  </div><br>
                 
                
                 <table id="fl-table"  class="fl-table">
                    <thead>
                    <tr>
                     <th>id</th>
                     <th>name</th>
                     
                     <th>CE MARKS</th>
                    
                    </tr>
                    </thead><tbody>
                
<?php

                     $id=1;
                     
                    while($row=$query->fetch_assoc()):

                        
                    
                    echo "<tr id='"; echo $id++; ?><?php echo "'>"; 
                    
                    echo "<td  id='id"; echo $id++; ?><?php echo "'>";?><?php echo $row['id']; ?> <?php echo "</td>";
                    
                    echo "<td id='name"; echo $id++; ?><?php echo "'>";?><?php echo $row['name'];  ?><?php  echo "</td>";

                    echo "<td id='ce_mark"; echo $id++; ?><?php echo "'>";?><?php echo "<input required='required' class='exam_mark_input' name='result_array[]' data-value='";?><?php echo $row['id']; ; ?><?php echo "' type='text' placeholder='enter marks'  >";  ?><?php  echo "</td>";
                    
                    
                    
                    echo "<td>";?><?php
                    

               
                     endwhile;echo "</tbody>";
                     echo "</table><br><button class=' hvr-radial-out button button' style='margin-left:93px;'  onclick='enter_result(event);' id='result_button";?><?php echo $id; ?><?php echo"' >Enter</button> ";
                    }

        }
    }



     
?>