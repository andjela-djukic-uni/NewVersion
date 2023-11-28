<?php
function missingfields($ime,$mejl,$lozinka,$ponovoloz){
    $fin;
    if (empty($ime)|| empty($mejl)|| empty($lozinka)|| empty($ponovoloz)) {$fin=true;}
 else {$fin=false;}
 return $fin;
}
function samepass($lozinka,$ponovoloz) {
    $fin;
if ($lozinka !== $ponovoloz){$fin= true;}
else {$fin=false;}
return $fin;
}






function AddNewUser($conn,$ime,$mejl,$lozinka) {
    // noviclanovi je naziv baze u kojoj se nalaze clanovi PREIMENUJ U ADMIN
    $tabela = "INSERT INTO admininfo (username,email,pass) VALUES (?, ?, ?);" ;
    $stmt= mysqli_stmt_init($conn); //using prepared stmt to make it more secure- user can write code in input and change our db
    if (!mysqli_stmt_prepare($stmt, $tabela)){
        header("location: ../register.php?error=fejlovde2");
    exit();
    }

    $skrivenalozinka= password_hash($lozinka, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $ime, $mejl, $skrivenalozinka); // data bound to the stms
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../register.php?error=sveradi");
    exit();
}

function sameun($conn, $ime) {

    // proveravamo da li u nasoj bazi postoji vec registrovan user sa usernamom koji je unet
    $tabela = "SELECT * FROM admininfo WHERE username= ?;" ;
    $stmt= mysqli_stmt_init($conn); //using prepared stmt to make it more secure- user can write code in input and change our db
    
    if (!mysqli_stmt_prepare($stmt,$tabela)){
        header("location: ../signup.php?error=ovdegreska1");
    exit();
    }


    mysqli_stmt_bind_param($stmt, "s", $ime); // data bound to the stms
    mysqli_stmt_execute($stmt);


    $finaldata= mysqli_stmt_get_result($stmt);

    // final data je ili null ako nema tog usera ili ceo njegov row 
    if ($row=mysqli_fetch_assoc($finaldata)) {
        return $row; // if it exists we return everything about this user - this row of table 
    }
    else {
        $final= false;
         return $final;
    }
    mysqli_stmt_close($stmt);
}

//////////////////////////////////////////////

function missingfieldlog($ime,$lozinka) {
    $fin;
    if (empty($ime)||empty($lozinka)) {$fin=true;}
 else {$fin=false;}
 return $fin;
}

function  ExistingUser($conn, $ime, $lozinka){
    $validusername= sameun($conn, $ime); 

    if ($validusername === false) 
    { header("location: ../login.php?error=UsernameNotFound");
    exit(); }

// u validusername sad imas [id username mail pass]
$skrivenalozinka= $validusername["pass"];
$tacnalozinka= password_verify($lozinka,$skrivenalozinka);
if ($tacnalozinka === false) {
    header("location: ../login.php?error=wrongpassword");
    exit();
}
else if ($tacnalozinka === true) {
    session_start();
    // session variables - super variable
    $_SESSION["sessid"] = $validusername["id"];
    $_SESSION["sessusername"] = $validusername["uusername"]; //username
    header("location: ../welcome.blade.php");
    exit();
}
}





