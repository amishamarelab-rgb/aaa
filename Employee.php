<?php

            // class Employee{   //1. Class + Property + Method
            //     public $name;
            //     public $email;

            //     public function showEmployee(){
            //         echo "Name ". $this->name ."<br>";
            //         echo "Email ". $this->email ."<br>";
            //     }
            // }


// class Employee{    //2. Constructor
//     public $name;
//     public $email;

//     public function __construct($name,$email){
//             $this->name =$name;
//             $this->email =$email;
//     }

//     public function showEmployee(){
//         echo "Name: ". $this->name ."<br>";
//         echo "Email: ". $this->email ."<br>";
//     }
// }


            // class Employee{    //3. Encapsulation 
            //     private $name;
            //     private $email;

            //     public function __construct($name,$email){
            //             $this->name =$name;
            //             $this->email =$email;
            //     }

            //     public function setName($name){
            //         $this->name = $name;
            //     }
            //      public function getName(){
            //         return $this->name;
            //     }
            //      public function setEmail($email){
            //         $this->email = $email;
            //     }
            //      public function getEmail(){
            //         return $this->email;
            //     }

            //     public function showEmployee(){
            //         echo "Name: ". $this->getName() ."<br>";
            //         echo "Email: ". $this->getEmail() ."<br>";
            //     }
            // }

// class Employee{    //4. inheritance
//     public $name;

//     public function showName(){
//         echo "Name: " .$this->name ."<br>";
//     }
// }
// class Developer extends Employee{
//     public function work(){
//         echo "Developer write code";
//     }
// }


            // class Employee{    //5. Polymorphism/ overriding - Same method
            //     public $name;

            //     public function work(){
            //         echo "employee is working";
            //     }
            // }
            // class Developer extends Employee{
            //     public function work(){
            //         echo "Developer write code";
            //     }
            // }

// interface Employee{  //6. interface = Contract / Rules
//     public function work();
// }
// class Developer implements Employee{
//     public function work(){
//         echo "employee working ";
//     }
// }

            // abstract class Employee{     //7. Abstract = Base + Rules
            //     abstract public function work();
            // }
            // class Developer extends Employee{
            //     public function work(){
            //         echo "employee working";
            //     }
            // }

//8. Traits 
// trait Logger{
//     public function log(){
//         echo "user logged";
//     }
// }
// class Employee{
//     use Logger;
// }


//9. static

        // class Employee {
        //     public static $project ="EmployeeMs";
        // }
        // echo Employee::$project;

//11. Polymorphism
// class Dog{
//     public function sound(){
//         echo "dog eat";
//     }
// }
// class cat{
//      public function sound(){
//         echo "cat eat";
//      }
// }
// $dog =new Dog();
// $cat =new Cat();

// $dog->sound();
// echo "<hr>";
// $cat->sound();

        //13. Dynamic Overloading
        // class Calculator{
        //     public function __call($name, $arguments)
        //     {
        //         if($name == "add"){
        //             return array_sum($arguments);
        //         }
        //     }
        // }
        // $calculator = new Calculator();
        // echo $calculator->add(10,20);

//14.iterable

// function getEmployees(): iterable{
//     return[
//         ["name"=>"asd"],
//         ["name"=>"qwa"]
//     ];
// }
// foreach(getEmployees() as $employee) {
//     echo $employee["name"] ."<br>";
// }

//12. final keyword
// class Employee
// {
//     final public const COMPANY = "EmployeeMS";
// }

// class Developer extends Employee
// {
// }


//10. namespace  
    // Admin/User.php
        //use Admin/User
            // namespace Admin;

            // class user{
            //     public function login{
            //         echo "admin login";
            //     }
            // }

    // // Employee/User.php
            // namespace Employee;
            // class user{
            //     public function login{
            //         echo "admin login";
            //     }
            // }

// try/catch 
class Employee
{
    public function getEmployee($id)
    {
        if ($id <= 0) {
            throw new Exception("Invalid employee ID");
        }

        return "Employee ID: " . $id;
    }
}
$employee = new Employee();
try {
    echo $employee->getEmployee(0);
} catch (Exception $e) {
    echo $e->getMessage();
}


?>


