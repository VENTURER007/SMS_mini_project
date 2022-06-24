//inserting ce mark

INSERT INTO `ce_marks` (`ce_mark_table_id`, `student_id`, `ce_marks`, `subject_id`) VALUES (NULL, '3', '30', '7');


$sql = "INSERT INTO `ce_marks` (`ce_mark_table_id`, `student_id`, `ce_marks`, `subject_id`) VALUES (NULL, \'3\', \'30\', \'7\');";


//inserinting subject

INSERT INTO `subject_table` (`subject_id`, `subject_name`) VALUES (NULL, 'mechanical engineering');

$sql = "INSERT INTO `subject_table` (`subject_id`, `subject_name`) VALUES (NULL, \'mechanical engineering\');";



function subject(){

  
var elements = document.getElementById("subject_form").elements;

var obj ={};
  for(var i = 0 ; i < elements.length ; i++){
      var item = elements.item(i);
      obj[item.name] = item.value;
  }

  console.log(obj);

}


<form onsubmit="subject(event);" id="subject_form">



let nameClasses = document.getElementsByClassName("ce_mark_input");
  
  for(let i=0;i<n;i++){
  let ce_marks[i] = nameClasses[0].value;
  console.log(ce_marks[i]);
  }