<?php
	session_start() ;
?>
<html>
<head>
    <meta charset='utf-8'>
    <title> Tanárvagyok.hu - ahol a diákok értékelnek </title>
    <link href='/tanarvagyok.css' type='text/css' rel='stylesheet'>
</head>

<body>

    <div id='cimsor'>

	<span id='login'>
<?php

    if( !isset( $_SESSION['uid']) )
    {
       print " <input type='button' value='Bejelentkezés' onclick=' location.href=\"./?p=login\" '> ";
    }
    else 
    {
       print " <input type='button' value='Kilépés' onclick=' kisablak.location.href=\"logout.php\" '> ";
    }

?>
	</span>

	<a href='/' title='Kezdőlap'>
		<img  id='ikon' src='favicon32.ico'> 
		<span id='cim1' > <b>Tanárvagyok.hu </b>                </span>
		<span id='cim2' > <i>&nbsp;ahol a diákok értékelnek</i> </span>
	</a>

    </div>


    <div id='keret'>
    <div id='tartalom'>

<?php

    if( isset( $_GET['p'] ) )  $p = $_GET['p'] ;
    else                       $p = ""         ;

    if( $p==""             )  include( "kezdolap.php"   ) ;
    if( $p=="regisztracio" )  include( "reg_form.php"   ) ;
    if( $p=="login"        )  include( "login_form.php" ) ;


?>

    </div>
    </div>


<iframe name='kisablak' frameborder=0></iframe>

</body>

</html>