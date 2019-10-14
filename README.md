# bitcoinCurve
Simple standalone bitcoin ECDSA Curve written in PHP.

About
=====
Now you can generate bitcoin addresses in PHP without any hassles. This curve is 99.999% of [BitcoinECDSA](https://github.com/BitcoinPHP/BitcoinECDSA.php). Even though I don't understand 99.999% of what is written in [BitcoinECDSA](https://github.com/BitcoinPHP/BitcoinECDSA.php), I managed to add a `setPrivateKeyNumber()` function into it, which lets you set your big random numbers as your bitcoin private keys.

Usage Example
=============

- Use PHP 5.4 (which has `gmp` extension already installed).
- Get the `curve.php`.

And then, start generating bitcoin addresses and private keys (in `WIF` format) like below:

```php
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
	
```
Feeling Tipsy?
==============
Useful and feeling tipsy? You can tip me: <a href="bitcoin:16adEf81iiCo26MEi3hUiJyawZKREwGZQc">16adEf81iiCo26MEi3hUiJyawZKREwGZQc</a>

What Is More
============

I have a php scripts setup that randomly generate bitcoins addresses and check their balances from Blockchin API. The scripts are designed to run non-stop on normal web hosting. They can check about 576000 addresses per day, ie. 100 address per every 15 seconds (due to API request limitation). If there is any bitcoin address(es) with balance in the generated addresses, it logs( or records) the address and private key (wif) of those addresses in a file for you. Let me know if you want to order the setup at dguyonthenet[at]gmail[dot]com.


License
========
This is free and unencumbered software released into the public domain.

Anyone is free to copy, modify, publish, use, compile, sell, or
distribute this software, either in source code form or as a compiled
binary, for any purpose, commercial or non-commercial, and by any
means.

In jurisdictions that recognize copyright laws, the author or authors
of this software dedicate any and all copyright interest in the
software to the public domain. We make this dedication for the benefit
of the public at large and to the detriment of our heirs and
successors. We intend this dedication to be an overt act of
relinquishment in perpetuity of all present and future rights to this
software under copyright law.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR
OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.

For more information about the license, please refer to [here](http://unlicense.org/)
