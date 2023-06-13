<?php 

$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$email     = $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailEroor' => '',
];


if (isset($_POST['submit'])){






//تحقق الاسم الاول
    if(empty($firstName)){
        $errors['firstNameError'] = 'يرجى ادخال الاسم الاول  ';
    }
//تحقق الاسم الاخير
    if(empty($lastName)){
        $errors['lastNameError'] = 'يرجى ادخال الاسم الاخير  ';
    }
//تحقق الإيميل
    if(empty($email)){
        $errors['emailEroor'] = 'يرجى ادخال البريد الإلكتروني  ';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailEroor'] = 'يرجى ادخال  بريد صحيح  ';
    }
    
    
    //تحقق لا يوجد اخطاء

    if(!array_filter($errors)){
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName  = mysqli_real_escape_string($conn, $_POST['lastName']);
        $email     = mysqli_real_escape_string($conn, $_POST['email']);

        $sql = "INSERT INTO users(firstName, lastName, email) 
        VALUES ('$firstName', '$lastName', '$email') ";

        if(mysqli_query($conn, $sql)){
            header('location:' . $_SERVER['PHP_SELF']);
        }else{
            echo 'fail' .mysqli_error($conn) ;
        }
    }
}
