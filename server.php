<?php
session_start();
parse_str( file_get_contents( "php://input" ), $answer ); //riceve le richieste 
$request = $answer[ "Request" ];
if ( !strcmp( $request, "registration" ) ) {
	$mkey = $answer[ "MnemonicKey" ];
	$pass = $answer[ "Password" ];
	$name = $answer[ "Name" ];
	$address = $answer[ "Address" ];
	$image = $answer[ "Image" ];
	$id = $answer[ "Id" ];
	//scrivo i dati nel file
	$str = file_get_contents( 'storeUser.json' );
	$arr = json_decode( $str, true );
	if ( array_key_exists( $mkey, $arr ) ) { //controllo che la chiave mnemonica debba essere univoco e che quindi non esista già un indice del json corrispondente
		$control = "false";
	} else {
		$arr[ $mkey ][ 0 ][ "Password" ] = $pass;
		$arr[ $mkey ][ 0 ][ "Name" ] = $name;
		$arr[ $mkey ][ 0 ][ "Address" ] = $address;
		$arr[ $mkey ][ 0 ][ "Image" ] = $image;
		$arr[ $mkey ][ 0 ][ "Id" ] = $id;
		$str = json_encode( $arr );
		$file = fopen( 'storeUser.json', 'w+' ); //inserire i nuovi utenti
		fwrite( $file, $str );
		fclose( $file );
		$_SESSION[ 'MnemonicKey' ] = $mkey;
		$_SESSION[ 'Name' ] = $name;
		$_SESSION[ 'Address' ] = $address;
		$_SESSION[ 'Image' ] = $image;
		$_SESSION[ 'Id' ] = $id;
		$control = "true";

	}

	echo $control;
} else if ( !strcmp( $request, "login" ) ) {
	$mkey = $answer[ 'MnemonicKey' ];
	$password = $answer[ 'Password' ];
	$user = file_get_contents( 'storeUser.json' );
	$arr = json_decode( $user, true );
	$control = false;
	if ( $arr[ $mkey ] != "" ) { //controllo che ci sia una rispondenza nel json dell'username inserito, 
		if ( $arr[ $mkey ][ 0 ][ "Password" ] == $password ) { //controllo password
			//in caso positivo inserisco i valori all'interno delle sessioni
			$_SESSION[ 'MnemonicKey' ] = $mkey;
			$_SESSION[ 'Name' ] = $arr[ $mkey ][ 0 ][ "Name" ];
			$_SESSION[ 'Address' ] = $arr[ $mkey ][ 0 ][ "Address" ];
			$_SESSION[ 'Image' ] = $arr[ $mkey ][ 0 ][ "Image" ];
			$_SESSION[ 'Id' ] = $arr[ $mkey ][ 0 ][ "Id" ];
			$control = "true";
		}
	}
	echo $control;
} else if ( !strcmp( $request, "logout" ) ) {
	//elimino le sessioni esistenti
		unset( $_SESSION[ 'MnemonicKey' ] );
		unset( $_SESSION[ 'Password' ] );
		unset( $_SESSION[ 'Name' ] );
		unset( $_SESSION[ 'Address' ] );
		unset( $_SESSION[ 'Image' ] );
		unset( $_SESSION[ 'Id' ] );
	
	$control = "true";
	echo $control;
}
?>