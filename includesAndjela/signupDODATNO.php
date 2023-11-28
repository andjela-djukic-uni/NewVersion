<?php
// na klik dugmeta koje je nazvano submit uradi 
if (isset($_POST["submit"])) {
$ime=$_POST["ime"];
$mejl=$_POST["mejl"];
$lozinka=$_POST["lozinka"];
$ponovoloz=$_POST["ponovolozinka"];


// mi cemo sad da ubacujemo unete podatke u bazu sto znaci da nam treba pristup toj bazi 
require_once 'bazakonekcija.php';
require_once 'testovi.php';

// some fields are not filled
if (missingfields($ime,$mejl,$lozinka,$ponovoloz) !== false) {
header("location: ../register.php?error=missingfield1");
exit();
}

// matching password

if (samepass($lozinka,$ponovoloz) !== false) {
    header("location: ../register.php?error=passwordmissmatch");
    exit(); 
}





AddNewUser($conn,$ime,$mejl,$lozinka);}





    // LOGIN 


    if (isset($_POST["login"])) {
        $ime=$_POST["name"];
        $lozinka=$_POST["pass"];
       
        
        require_once 'bazakonekcija.php';
        require_once 'testovi.php';
    
    
        if (missingfieldlog($ime,$lozinka) !== false) {
            header("location: ../login.php?error=emptyinp");
            exit();
            }
    
            ExistingUser($conn, $ime, $lozinka);
    }
    
    else {
        header("location: ../login.php");
        exit(); 
    }