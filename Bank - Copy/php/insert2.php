

<?php
if(isset($_POST['submit'])){
    $NAME=$_POST['NAME'];
    $EMAIL=$_POST['EMAIL'];
    $ACCOUNT_BALANCE=$_POST['ACCOUNT_BALANCE'];

    mail($to,$subject,$message,$headers);
  
 echo "<script type='text/javascript'>";
 echo "swal({
    title: 'Your Message Was Sent Successfully',
    type: 'success',

    confirmButtonColor: '#DD6B55',
    confirmButtonText: 'CLOSE',
  }).then(() => {
    if (result.value) {
      // handle Confirm button click
    } else {
      // result.dismiss can be 'cancel', 'overlay', 'esc' or 'timer'
    }
  });";
 echo "</script>";


        }
?>