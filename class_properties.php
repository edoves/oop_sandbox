<?php

class Student {

  var $first_name;
  var $last_name;
  var $country = 'None';

}

$student1 = new Student;
$student1->first_name = 'Lucy';
$student1->last_name = 'Ricardo';

$student2 = new Student;
$student2->first_name = 'Ethel';
$student2->last_name = 'Mertz';

echo $student1->first_name . " " . $student1->last_name . "<br />";
echo $student2->first_name . " " . $student2->last_name . "<br />";
// get_class_vars — Get the default properties of the class
// Returns an associative array of declared properties visible from the current scope, with their default value. The resulting array elements are in the form of varname => value. In case of an error, it returns FALSE.
$class_vars = get_class_vars('Student');
echo "Class vars:<br />";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

// get_object_vars — Gets the properties of the given object
// Returns an associative array of defined object accessible non-static properties for the specified object in scope. If a property has not been assigned a value, it will be returned with a NULL value.
$object_vars = get_object_vars($student1);
echo "Object vars:<br />";
echo "<pre>";
print_r($object_vars);
echo "</pre>";

if(property_exists('Student', 'first_name')) {
  echo "Property first_name exists in Student class.<br />";
} else {
  echo "Property first_name does not exist in Student class.<br />";
}
?>
