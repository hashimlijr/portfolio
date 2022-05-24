<?php

$user_id = $_SESSION['uid'];

$query = "SELECT * FROM `info` WHERE id=1";
    
include "/AppServ/www/portfolio/database.php";        
if(!$connection){
    header("Location: ../index.php?=connectionFailed");
    exit();
}

$userP = mysqli_query($connection, $query);
if(empty($userP)){
    header("Location: ../index.php?status=userDoesNotExist");
    exit();
}
$pro = mysqli_fetch_assoc($userP);

function getName($profile){
    $name = $profile['name'];
    if(empty($name)){
        return "Null";
    }
    return $name;
}

function getSurname($profile){
    $surname = $profile['surname'];
    if(empty($surname)){
        return "Null";
    }
    return $surname;
}

function getUsername($profile){
    $username = $profile['username'];
    if(empty($username)){
        return "Null";
    }
    return $username;
}

function getNationality($profile){
    $nation = $profile['nationality'];
    if(empty($nation)){
        return "Null";
    }
    return $nation;
}

function getID($profile){
    $id = $profile['id'];
    if(empty($id)){
        return "Null";
    }
    return $id;
}

function getEmail($profile){
    $email = $profile['email'];
    if(empty($email)){
        return "Null";
    }
    return $email;
}    

function getAddress($profile){
    $address = $profile['address'];
    if(empty($address)){
        return "Null";
    }
    return $address;
} 

function getSlogan($profile){
    $slogan = $profile['slogan'];
    if(empty($slogan)){
        return "Null";
    }
    return $slogan;
}  

function getPicture($profile){
    $photo = $profile['profile_picture'];
    if(empty($photo)){
        return "Null";
    }
    return $photo;
}     

function getTwitter($profile){
    $twitter = $profile['twitter'];
    if(empty($twitter)){
        return "Null";
    }
    return $twitter;
}   

function getLinkedin($profile){
    $linkedin = $profile['linkedin'];
    if(empty($linkedin)){
        return "Null";
    }
    return $linkedin;
}   

function getGithub($profile){
    $github = $profile['github'];
    if(empty($github)){
        return "Null";
    }
    return $github;
}   

function getFacebook($profile){
    $facebook = $profile['facebook'];
    if(empty($facebook)){
        return "Null";
    }
    return $facebook;
}   

function getPhone($profile){
    $phone = $profile['phone'];
    if(empty($phone)){
        return "Null";
    }
    return $phone;
}   



$queryForAbout = "SELECT * FROM `about` WHERE id=1";
           
if(!$connection){
    header("Location: ../index.php?=connectionFailed");
    exit();
}

$userA = mysqli_query($connection, $queryForAbout);
if(empty($userA)){
    header("Location: ../index.php?status=userDoesNotExist");
    exit();
}
$abo = mysqli_fetch_assoc($userA);

function getBackground($about){
    $background = $about['background'];
    if(empty($background)){
        return "Null";
    }
    return $background;
}

function getEducation($about){
    $education = $about['education'];
    if(empty($education)){
        return "Null";
    }
    return $education;
}
  

$querySkills = "SELECT * FROM `skills`";
$querySkillsCount = "SELECT count(*) FROM `skills`";

$count = mysqli_query($connection, $querySkillsCount);
$userSkills = mysqli_query($connection, $querySkills);
if(empty($userSkills)){
    header("Location: ../index.php?status=useSkillsrDoesNotExist");
    exit();
}
$ski = mysqli_fetch_array($userSkills);

function getSkills($connection){

    $queryForSkills = "SELECT * FROM `skills`;";

    $skills = mysqli_query($connection, $queryForSkills);

    $arr = array();
    while($proSkills = mysqli_fetch_assoc($skills)){
        
        array_push($arr, array(
            'id' => $proSkills['id'],
            'skill' => $proSkills['skill_name'],
          ));
    }
    
    return $arr;
}
?>