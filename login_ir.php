<?php

    session_start() ;

    print_r( $_POST ) ;

    include( "kapcsolat.php" ) ;

	$pw = md5( $_POST['pw'] ) ;

	$userek = mysqli_query( $adb , "
					SELECT * FROM user 
					WHERE  (uemail='$_POST[email]' OR unick='$_POST[email]')
					AND     upw   ='$pw'
	" ) ;

	if( mysqli_num_rows($userek)==0 )
	{
	    print "<script> alert('Hibás belépési adatok!') </script>" ;
	}
	else
	{
	    $user = mysqli_fetch_array($userek) ;
	    $_SESSION['uid']  = $user['uid'] ;
	}


    mysqli_close( $adb ) ;

    print "<script> parent.location.href = './' </script>" ;

?>