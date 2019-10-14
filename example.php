<?php


	require 'curve.php';
	
	// Create the ECDSA curve that bitcoin uses
	$curve = new Curve();
	
	// We need a private key to hold our bitcoins
	// You can either create this private key randomly...
	//$curve->generateRandomPrivateKey();
	
	// ... or create it from the big random number of your choice
	$bigNum = '5657875457887678887555513466557866688766886468886576556567777';
	$curve->setPrivateKeyNumber($bigNum);
	
	// Two versions of bitcoin public addresse are available: Compressed or Uncompressed
	$compressed = false;
	
	// Get the bitcoin Address of above private key
	$address = $curve->getAddress($compressed);
	
	// Get the above private key in WIF (Wallet Import Format) for importing into wallets like Mycelium
	$wif = $curve->getWif($compressed);
	
	echo 'Address: ' . $address;
	echo '<br>';
	echo 'WIF: ' . $wif;
	
	// OUTPUT
	// Address: 13anpZuJZA24SjHhveLfXK5PEFmfZNvVbP
	// WIF: 5HpHagT65TahBHna79BG64fPig5NYF6dwJ6GGbcGhzNEnD79KuC
	
?>
