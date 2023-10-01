<?php   
$name=$_POST["name"];
$password=$_POST["password"];
$registrovani=["Marko"=>'123', "Nikola"=>'1234', "Dimitrije"=>'1234'];
$registrovan=false;
foreach ($registrovani as $keyReg => $valueReg) {
    if ($keyReg==$name&&$valueReg==$password) {
        $registrovan=true;
    }
    
}

if(isset($_POST["name"])){
    echo "Vase ime je $name".'<br>' ;
}
if (isset($_POST["password"])) {
    echo "Vas izabrani password je $password".'<br>' ;
}

/*if (in_array($name, $keyReg)) {
    echo 'Vi ste registrovan clan' ;
}else{
    echo'Niste registrovan clan ERROR';
}
*/

if ($registrovan) {
    echo 'Vase ime se nalazi u protokolu'.'<br>' ;
}else{
    echo 'ERROR vase ime nije u protokolu'.'<br>' ;
}


?>