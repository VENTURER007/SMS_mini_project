<?php
session_start();    
include "/home/venturer/SMS_mini_project/db.php";

 if(isset($_POST['branch'])){

    $_SESSION['branch_ce_mark']=$_POST['branch'];
    exit();
    
 }

 if(isset($_POST['semester'])){

    $_SESSION['semester_ce_mark']=$_POST['semester'];
       
     

     if(isset($_SESSION['branch_ce_mark'])&&isset($_SESSION['semester_ce_mark'])){
         
       $branch = $_SESSION['branch_ce_mark'];
       $sem    = $_SESSION['semester_ce_mark'];

       $query=$conn->query("SELECT id,name FROM users WHERE course_name='".$branch."' AND current_semester='".$sem."';");
                
                if($query->num_rows>0){

                    ?>
               <div id='subject_div' style="padding-left: 24px;"> <label class='dashcolour1' >Subject name</label><input type='text' name='subject' class='subject_input' id="subject_input" placeholder='Subject name'>
               <button class="button" id='subject_button' onclick="subject(event);" id="subject_button" >Add</button>  </div>
                 <h1 style="color:#1963ec;font-size: calc(0.375rem + 1.5vw); margin: 12px;">ADD CE Marks </h1>
                
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

                    echo "<td id='ce_mark"; echo $id++; ?><?php echo "'>";?><?php echo "<input required='required' class='ce_mark_input' name='array[]' data-value='";?><?php echo $row['id']; ; ?><?php echo "' type='text' placeholder='enter marks'  >";  ?><?php  echo "</td>";
                    
                    
                    
                    echo "</tr>";?><?php
                    

               
                     endwhile;echo "</tbody>";
                     echo "</table><button class='button' style='margin-left: 161px;'  onclick='enter_ce_mark(event);' id='ce_button";?><?php echo $id; ?><?php echo"' >Enter</button> ";
                    }

        }
    }



     
?>