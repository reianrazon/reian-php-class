<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=5, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


        class bio{
            public $name;
            public $age;
            public $class;
        }
        
        $student = new bio();
        
        $student->name="Reian";
        $student->age=18;
        $student->class=9;
        
        // echo"Student name is ".$student->name." "."Student age is ".$student->age." "."Student read in ".$student->class.".";
        
        echo"Student name is ".$student->name."</br>";
        echo"Student age is ".$student->age."</br>";
        echo"Student read in ".$student->class
        

    ?>
</body>
</html>