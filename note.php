<?php 
// 
get_declared_classes();
class_exists($string);


/**
 *  * Class instances
 */

/**
 * * There are two functions that are helpful when working with instances.
 * ? 1. get_class($object); // it takes an instance as an argument and it returns the name of that class
 * ? 1. is_a($object, $string); // it returns true or false if the object has the same class name as the string.
 */

/**
 * * Three functions that are useful for working with properties, properties inside the class
 * ? 1. get_class_vars($string) //return a list of properties that are defined in the class in a assoative array; return default values for that class
 * ? 2. get_object_vars($object) // return a list of properties that are defined in the class in a assoative array, return the current values for that instance
 * ? 3. property_exists($mixed, $string) // return true or false based on whether a property exists on the class or on the object. 
 */

 /**
  * * There are also some functions that are useful for working with methods
  * ? 1. get_class_methods($mixed) // which either takes a class name as a string, or an instance of an object ans returns the different methods that re available on it.
  * ? 2. method_exists($mixed, $string) $mixed: either class an string or instance of a class. $string: would be the method that you wanns know if it exists or not.
  */


/**
 * * Inheritance or also know subclasses
 * ? Remeber: Behavior of a class are shared with subclasses and add new behavior to parent and all subclasses  gain them
 * ? Remeber: Subclasses can override parent behaviors. Subclasses can extend parent behaviors
 *  ! Note: the real power of subclasses is their ability to extend and override behaviors that they inherit from parent class.
 *  ! Note: remember that the purpose of Inheritance is to keep your code well-organize and to keep you from repeating yourself.
 *  Todo: PHP has several built-in functions which are useful when working wiht inheritance.
 *  ? 1. get_parent_class($mixed) which either take the name of the class or an inheritance of the class as an argument.
 *  ? 2. is_subclass_of($mixed, $string) which also take the name of a class or an instance as its first argument, and then the parent class.
 *  ? 3. class_parents($mixed) return an array. pass either the name of the class or we can pass in an instance and it'll tell us all of the parent.
 */

class Parent {}
class Subclass extends Parent {}

class Vehicle {}
class Car extends Vehicle {}
class Motorcyle extends Vehicle {}
class CompactCar extends Car {} // it gets all the properties and methods of Vehicle,  but also any additional or overridden behaviors in that Car class.
// its perfectly fine for subclasses to also have additional subclasses.



/**
 * * Visibility modifiers
 * ? public => you can access anywhere
 * ? protected => works like private, but it also allow sub classes to be able to access the property or method.
 * ? private => accessible onlu inside the class code.
 * Todo: Best Practices
 * * 1. Always use visibility modifiers, not defaults
 * * 2. Consider visibility when cooding.
 * * 3. Make properties and methods public only when necessary. 
 *    * Note: If it needs to be accessible from outside the class, then make it public. 
 *    * Or if it needs to be available to its sub classes, make it protected.
 *    * but it its going to be used for internal purposes, then mark it as being private.
 *  * 4. Group properties and methods with similar visibility.
 */

/**
 * * Setter and Getter Methods idea
 * ? Note: The way you decide to utilize setter and getter methods inside your own projects is going to depend on what you need to accomplish in each project.
 * ? --- The fundamenta idea is that the property remains private but we still have access to it through public methods.
 * * 1. Set property visibility to private 
 * * 2. Define a method to set the property's value in private visibility.
 * * 3. Define a method to get the property's value
 * * 4. Allow access to otherwise private properties
 * * 5. Useful to regulate access 
 * * 6. Useful for read-only or write-only properties
 * * 7. Useful for pre-processing values. Note: 
 * * 8. Avoid "naive setter" and "naive getter" methods
 */

/**
 * * Static modifier
 * Todo: Best practice to use the class name when your outside the class and use self when your're writing code inside the class.
 * ? Student::$grades, Student::motto()
 * 
 */

//  objects are always assingned by reference

class Student {

  public static $grades = ['Freshman', 'Sophomore', 'Junior', 'Senior'];
  private static $total_students = 0;

  public static function motto() {
    return "To learn PHP OOP!";
  }

  public static function count() {
    return self::$total_students;
  }

  public static function add_student() {
    self::$total_students++;
  }

}

echo Student::$grades[0] . "<br />";
echo Student::motto() . "<br />";


/**
 * * Magic Methods
 * Todo: Magic Methods methods must always be marked public.
 * 
 */

 class Product {
   public $name;
   public $color;

   public function __construct() {
     Logger::log('Creating new product');
     $this->color = 'blue';
   }
 }

 $shirt = new Product();
 echo $shirt->color;