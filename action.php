<?php
if (empty ($_POST['name'])){
  echo "Name is required";
}
else{
  if (!preg_match('#^\w+\s\w+#' , $_POST['name'])){
    echo "Must Contaion at least two words";
  }
  else{
    if(!preg_match('#^[A-Za-z_.]{1}#',$_POST['name'])){
      echo "Must start with letter.";
    }
    else{
      if(!preg_match('#[0-9]#',$_POST['name'])){
        echo $_POST['name'];
      }else{
        echo "Cant contain numeric values";
      }

    }
  }
}



if(empty($_POST['email'])){
  echo "Email is required.";
}
else{
  if (!preg_match("#^[A-Za-z]*@[A-Za-z]#",$_POST['email'])){
    echo "Email not valid.";
  }
  else{
    echo "Valid.";
  }
}


if(empty($_POST['username'])){
  echo "Username Required";
}else{
  if(empty($_POST['pwd'])){
    echo "Password Required";
  }else{
    if(!preg_match('#^[A-Za-z_.]{1}#',$_POST['username'])){
      echo "Must Start with letter";
    }
    else if(!preg_match('#^[A-Za-z]{2}#',$_POST['username'])){
      echo "Contain At least two letter";
    }
    else{
      if(!preg_match('#^[A-Za-z]{8}#',$_POST['pwd'])){
        echo "Password shoud minimum 8 characters";
      }else{
          if(!preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/',$_POST['pwd'])){
            echo "Must Contain 1 special character";
          }else{
            echo $_POST['username'];
          }
      }
    }
  }
}


if(empty($_POST['gender'])){
  echo "Select Your Gender";
}else{
  if ($_POST['gender']=="Male"){
    echo "Male";
  }
  else if($_POST['gender']=="Female"){
    echo "Female";
  }else{
    echo "Others";
  }
}


if(empty($_POST['dd'])){
  echo "Date is required.";
}
else if(empty($_POST['mm'])){
  echo "Month is required.";
}
else if(empty($_POST['yy'])){
  echo "Year is required.";
}
else{
  if(checkdate($_POST['mm'],$_POST['dd'],$_POST['yy'])===false){
    echo "Incorrect Date.";
  }else{
    if($_POST['yy']>=1953 and $_POST['yy']<=1998){
      echo "Your DOB " . $_POST['dd'] ." ".$_POST['mm']." ".$_POST['yy'];
    }else{
      echo "Date Should Be Between 1953 to 1998";
    }
  }
}
?>
