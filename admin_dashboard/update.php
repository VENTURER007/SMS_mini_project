<?php 
session_start();
include "/home/venturer/SMS_mini_project/db.php";

?>


            <form method="post" action="update_insert.php">
            <label for="email" class="input__label"> id</label><input id="email"type="text" class="form__input" value = "<?php echo $_SESSION['id'];?>"><br>
            <label for="dob" class="input__label"> Name</label><input id="dob"type="text" class="form__input" value = "<?php echo $_SESSION['name'];?>"><br>
            <label for="father" class="input__label">Email</label><input id="father"type="text" class="form__input" value = "<?php echo $_SESSION['email'];?>"><br>
            <label for="mother" class="input__label">Date of birth</label><input id="mother"type="text" class="form__input" value = "<?php echo $_SESSION['dob'];?>"><br>
            <label for="blood" class="input__label"> Father name</label><input id="blood"type="text" class="form__input" value = "<?php echo $_SESSION['father_name'];?>"><br>
            <label for="blood" class="input__label"> Mother name</label><input id="blood"type="text" class="form__input" value = "<?php echo $_SESSION['mother_name'];?>"><br>
            <label for="blood" class="input__label"> Blood group </label><input id="blood"type="text" class="form__input" value = "<?php echo $_SESSION['blood_group'];?>"><br>
            <label for="blood" class="input__label"> Year of Admission</label><input id="blood"type="text" class="form__input" value = "<?php echo $_SESSION['year_of_admission'];?>"><br>
            <label for="blood" class="input__label"> Branch</label><input id="blood"type="text" class="form__input" value = "<?php echo $_SESSION['course_name'];?>"><br>
            <label for="blood" class="input__label"> Semester</label><input id="blood"type="text" class="form__input" value = "<?php echo $_SESSION['semester'];?>"><br>
            <input type="submit" class="button" name="update" value="update">
</form>
