<?php

$user_id = $_SESSION['uid'];

$queryForAbout = "SELECT * FROM `about` WHERE id=1";
    
include "/AppServ/www/portfolio/database.php";        
if(!$connection){
    header("Location: ../index.php?=connectionFailed");
    exit();
}

$userA = mysqli_query($connection, $queryForAbout);
if(empty($userP)){
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

function getSkills($about){
    $skills = $about['skills'];
    if(empty($skills)){
        return "Null";
    }
    return $skills;
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

function getSkillss($connection){

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