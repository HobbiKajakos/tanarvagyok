<?php

    print_r( $_POST ) ;

    if( $_POST['unick']=="" )
	die("<script> alert('Nem adtad meg a felhasználóneved!') </script>");


    include( "kapcsolat.php" ) ;


//	var_dump( $adb  ) ;

	$upw = md5( $_POST['upw1'] ) ; 

	mysqli_query( $adb , "

		INSERT INTO user ( uid ,         uemail   ,         unick   ,   upw  , uszuldatum, udatum, uip, usession, ustatusz, ukomment) 
		VALUES           (NULL , '$_POST[uemail]' , '$_POST[unick]' , '$upw' , ''        , NOW() ,  '',       '',       '',       '')

	" ) ;

    mysqli_close( $adb ) ;
?>