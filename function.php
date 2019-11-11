<html>
<body>

<?php $choice=$_GET["choice"]; 

if($choice==1){
    
    $Errors=array(" "," "," "); 
    $email=$_GET['email'];
    $name=$_GET['name'];
    $reg=$_GET['reg'];
    $title=$_GET['title'];
    
    if(!preg_match("/^[a-zA-Z. ]*$/",$name) || !is_numeric($reg) ||!filter_var($email,FILTER_VALIDATE_EMAIL) ){
        if (!preg_match("/^[a-zA-Z. ]*$/",$name)) {
            echo "Only letters and white space allowed";
            $Errors[0]="*";
        }
        if(!is_numeric($reg)){
            echo "Includes lettrs \n";
            $Errors[1]="*";
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "Error Email\n";
            $Errors[2]="*";
        }
        header("Location: form1.php?id1=$Errors[0] & id2=$Errors[1] & id3=$Errors[2]");

    }
    else
    header("Location: result.php?result=1 & email=$email & name=$name & reg=$reg & title=$title");
    
    
    

}

if($choice==2){
    $Errors=array(" "," "," "); 
    $email=$_GET['email'];
    $name=$_GET['name'];
    $reg=$_GET['reg'];
    $title=$_GET['title'];
    
    if(!preg_match("/^[a-zA-Z. ]*$/",$name) || !is_numeric($reg) ||!filter_var($email,FILTER_VALIDATE_EMAIL) ){
        if (!preg_match("/^[a-zA-Z. ]*$/",$name)) {
            echo "Only letters and white space allowed";
            $Errors[0]="*";
        }
        if(!is_numeric($reg)){
            echo "Includes lettrs \n";
            $Errors[1]="*";
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "Error Email\n";
            $Errors[2]="*";
        }
        header("Location: form2.php?id1=$Errors[0] & id2=$Errors[1] & id3=$Errors[2]");

    }
    else
    header("Location: result.php?result=1 & email=$email & name=$name & reg=$reg & title=$title");
}


?>


</body>
</html>