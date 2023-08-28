<?php
 
 class Product{

public $id;
public $name;
public static $price;
public static $total=0;
public static function total_price($price){
    Product::$price=$price;
Product::$total+=$price;   
return (Product::$total);
}

}

 

 
 $ll= new Product ();
Product::total_price(5);
var_dump($ll);


 //,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
 function is_anagram($a, $b)
 {
       if (count_chars($a, 1) == count_chars($b, 1))
    {
        return "This two strings are anagram";
    }
    else
    {
        return "This two strings are not anagram";
    }
 }
print_r(is_anagram('anagram','nagaram')."\n");
print_r(is_anagram('cat','rat')."\n");
//,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,



function Palindrome($MyString) {
    $l = 0;
    $r = strlen($MyString) - 1;
    $flag = 0;
  
    while($r > $l){
      if ($MyString[$l] != $MyString[$r]){
        $flag = 1;
        break;
      }
      $l++;
      $r--;
    }
  
    if ($flag == 0){
      echo $MyString." is a Palindrome string.\n";
    } else {
      echo $MyString." is not a Palindrome string.\n";
    }
  }
  
  Palindrome("radar");
  Palindrome("rubber");
  Palindrome("malayalam");
  //,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,

  //PHP supports multiple inheritances only by using interfaces or Traits 

  trait Geeks {
    public function sayhello() {
       echo "Hello";
     }
   }
    
  // trait forGeeks
  trait forGeeks {
    public function sayfor() {
       echo " Geeks";
     }
   }
    
  class Sample {
    use Geeks;
    use forGeeks;
    public function geeksforgeeks() {
        echo "\nGeeksforGeeks";
     } 
  }
    
  $test = new Sample();
  $test->sayhello();
  $test->sayfor();
  $test->geeksforgeeks();













?>