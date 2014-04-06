<!doctype html>
<html>
<head>
	<!--
	Donation Address: 1NiNja1bUmhSoTXozBRBEtR8LeF9TGbZBN

	Notice of Copyrights and Licenses:
	***********************************
	The bitaddress.org project, software and embedded resources are copyright bitaddress.org (pointbiz). 
	The bitaddress.org name and logo are not part of the open source license.

	Portions of the all-in-one HTML document contain JavaScript codes that are the copyrights of others. 
	The individual copyrights are included throughout the document along with their licenses.
	Included JavaScript libraries are separated with HTML script tags.

	Summary of JavaScript functions with a redistributable license:
	JavaScript function		License
	*******************		***************
	Array.prototype.map		Public Domain
	window.Crypto			BSD License
	window.SecureRandom		BSD License
	window.EllipticCurve		BSD License
	window.BigInteger		BSD License
	window.QRCode			MIT License
	window.Bitcoin			MIT License
	window.Crypto_scrypt		MIT License

	The bitaddress.org software is available under The MIT License (MIT)
	Copyright (c) 2011-2013 bitaddress.org (pointbiz)

	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and 
	associated documentation files (the "Software"), to deal in the Software without restriction, including 
	without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or 
	sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject 
	to the following conditions:

	The above copyright notice and this permission notice shall be included in all copies or substantial 
	portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT 
	LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. 
	IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, 
	WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE 
	SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

	GitHub Repository: https://github.com/pointbiz/bitaddress.org
	-->

	<title>bitaddress.org</title>
	<meta charset="utf-8">

	<script type="text/javascript">
//array.map.js
	</script>
	<script type="text/javascript">
//cryptojs.js	
	</script>
	<script type="text/javascript">
//cryptojs.sha256.js	
	</script>
	<script type="text/javascript">
//cryptojs.pbkdf2.js 
	</script>
	<script type="text/javascript">
//cryptojs.hmac.js
	</script>
	<script type="text/javascript">
//cryptojs.aes.js
	</script>
	<script type="text/javascript">
//cryptojs.blockmodes.js
	</script>
	<script type="text/javascript">
//cryptojs.ripemd160.js
	</script>
	<script type="text/javascript">
//securerandom.js
	</script>
	<script type="text/javascript">
//ellipticcurve.js
	</script>
	<script type="text/javascript">
//biginteger.js
	</script>
	<script type="text/javascript">
//qrcode.js
	</script>
	<script type="text/javascript">
//bitcoinjs-lib.js
	</script>
	<script type="text/javascript">
//bitcoinjs-lib.base58.js
	</script>
	<script type="text/javascript">
//bitcoinjs-lib.address.js
	</script>
	<script type="text/javascript">
//bitcoinjs-lib.ecdsa.js
	</script>
	<script type="text/javascript">
//bitcoinjs-lib.eckey.js
	</script>
	<script type="text/javascript">
//bitcoinjs-lib.util.js
	</script>
	<script type="text/javascript">
//crypto-scrypt.js
	</script>
	<style type="text/css">
//main.css
	</style>
</head>
<body onclick="SecureRandom.seedTime();" onmousemove="ninja.seeder.seed(event);">
	<div id="busyblock"></div>
	<div id="main">
		<div id="culturemenu">
			<span><a href="?culture=en" id="cultureen" class="selected">English</a></span> | 
			<span><a href="?culture=es" id="culturees">Español</a></span> | 
			<span><a href="?culture=fr" id="culturefr">Français</a></span> | 
			<span><a href="?culture=el" id="cultureel">ελληνικά</a></span> | 
			<span><a href="?culture=it" id="cultureit">italiano</a></span> | 
			<span><a href="?culture=de" id="culturede">Deutsch</a></span> | 
			<span><a href="?culture=cs" id="culturecs">Česky</a></span>
		</div>
		<img alt="bitaddress.org" title="bitaddress.org" id="logo" src="data:image/png;base64,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" />
		<div id="tagline">Open Source JavaScript Client-Side Bitcoin Wallet Generator</div>
		<div id="seedpoolarea"><textarea rows="16" cols="62" id="seedpool"></textarea></div>
		<div id="testnet"></div>
		<div class="menu" id="menu">
			<div class="tab selected" id="singlewallet" onclick="ninja.tabSwitch(this);">Single Wallet</div>
			<div class="tab" id="paperwallet" onclick="ninja.tabSwitch(this);">Paper Wallet</div>
			<div class="tab" id="bulkwallet" onclick="ninja.tabSwitch(this);">Bulk Wallet</div>
			<div class="tab" id="brainwallet" onclick="ninja.tabSwitch(this);">Brain Wallet</div>
			<div class="tab" id="vanitywallet" onclick="ninja.tabSwitch(this);">Vanity Wallet</div>
			<div class="tab" id="detailwallet" onclick="ninja.tabSwitch(this);">Wallet Details</div>
		</div>
		
		<div id="generate">
			<span id="generatelabelbitcoinaddress">Generating Bitcoin Address...</span><br />
			<span id="generatelabelmovemouse">MOVE your mouse around to add some extra randomness... </span><span id="mousemovelimit"></span><br />
			<span id="generatelabelkeypress">OR type some random characters into this textbox</span> <input type="text" id="generatekeyinput" onkeypress="ninja.seeder.seedKeyPress(event);" /><br />
			<div id="seedpooldisplay"></div>
		</div>

		<div id="wallets">
			<div id="singlearea" class="walletarea">
				<div class="commands">
					<div id="singlecommands" class="row">
						<span><input type="button" id="newaddress" value="Generate New Address" onclick="ninja.wallets.singlewallet.generateNewAddressAndKey();" /></span>
						<span class="print"><input type="button" name="print" value="Print" id="singleprint" onclick="window.print();" /></span>
					</div>
				</div>
				<div id="keyarea" class="keyarea">
					<div class="public">
						<div class="pubaddress">
							<span class="label" id="singlelabelbitcoinaddress">Bitcoin Address</span>
						</div>
						<div id="qrcode_public" class="qrcode_public"></div>
						<div class="pubaddress">
							<span class="output" id="btcaddress"></span>
						</div>
						<div id="singleshare">SHARE</div>
					</div>
					<div class="private">
						<div class="privwif">
							<span class="label" id="singlelabelprivatekey">Private Key (Wallet Import Format)</span>
						</div>
						<div id="qrcode_private" class="qrcode_private"></div>
						<div class="privwif">
							<span class="output" id="btcprivwif"></span>
						</div>
						<div id="singlesecret">SECRET</div>
					</div>				
				</div>
				
				<div id="singlesafety">
					<p id="singletip1"><b>A Bitcoin wallet</b> is as simple as a single pairing of a Bitcoin address with its corresponding Bitcoin private key. Such a wallet has been generated for you in your web browser and is displayed above.</p>
					<p id="singletip2"><b>To safeguard this wallet</b> you must print or otherwise record the Bitcoin address and private key. It is important to make a backup copy of the private key and store it in a safe location. This site does not have knowledge of your private key. If you are familiar with PGP you can download this all-in-one HTML page and check that you have an authentic version from the author of this site by matching the SHA1 hash of this HTML with the SHA1 hash available in the signed version history document linked on the footer of this site. If you leave/refresh the site or press the "Generate New Address" button then a new private key will be generated and the previously displayed private key will not be retrievable.	Your Bitcoin private key should be kept a secret. Whomever you share the private key with has access to spend all the bitcoins associated with that address. If you print your wallet then store it in a zip lock bag to keep it safe from water. Treat a paper wallet like cash.</p>
					<p id="singletip3"><b>Add funds</b> to this wallet by instructing others to send bitcoins to your Bitcoin address.</p>
					<p id="singletip4"><b>Check your balance</b> by going to blockchain.info or blockexplorer.com and entering your Bitcoin address.</p>
					<p id="singletip5"><b>Spend your bitcoins</b> by going to blockchain.info or mtgox.com and sweep the full balance of your private key into your account at their website. You can also spend your funds by downloading one of the popular bitcoin p2p clients and importing your private key to the p2p client wallet. Keep in mind when you import your single key to a bitcoin p2p client and spend funds your key will be bundled with other private keys in the p2p client wallet. When you perform a transaction your change will be sent to another bitcoin address within the p2p client wallet. You must then backup the p2p client wallet and keep it safe as your remaining bitcoins will be stored there. Satoshi advised that one should never delete a wallet.</p>
				</div>
			</div>

			<div id="paperarea">
				<div class="commands">
					<div id="papercommands" class="row">
						<span><label id="paperlabelhideart" for="paperart">Hide Art?</label> <input type="checkbox" id="paperart" onchange="ninja.wallets.paperwallet.toggleArt(this);" /></span>
						<span><label id="paperlabeladdressestogenerate" for="paperlimit">Addresses to generate:</label> <input type="text" id="paperlimit" /></span>
						<span><input type="button" id="papergenerate" value="Generate" onclick="ninja.wallets.paperwallet.build(document.getElementById('paperlimit').value * 1, document.getElementById('paperlimitperpage').value * 1, !document.getElementById('paperart').checked, document.getElementById('paperpassphrase').value);" /></span>
						<span class="print"><input type="button" name="print" value="Print" id="paperprint" onclick="window.print();" /></span>
					</div>
					<div id="paperadvancedcommands" class="row extra">
						<span><label id="paperlabelencrypt" for="paperencrypt">BIP38 Encrypt?</label> <input type="checkbox" id="paperencrypt" onchange="ninja.wallets.paperwallet.toggleEncrypt(this);" /></span>
						<span><label id="paperlabelBIPpassphrase" for="paperpassphrase">Passphrase:</label> <input type="text" id="paperpassphrase" /></span>
						<span><label id="paperlabeladdressesperpage" for="paperlimitperpage">Addresses per page:</label> <input type="text" id="paperlimitperpage" /></span>
					</div>
				</div>
				<div id="paperkeyarea"></div>
			</div>
			
			<div id="bulkarea" class="walletarea">
				<div class="commands">
					<div id="bulkcommands" class="row">
						<span><label id="bulklabelstartindex" for="bulkstartindex">Start index:</label> <input type="text" id="bulkstartindex" value="1" /></span>
						<span><label id="bulklabelrowstogenerate" for="bulklimit">Rows to generate:</label> <input type="text" id="bulklimit" value="3" /></span>
						<span><label id="bulklabelcompressed" for="bulkcompressed">Compressed addresses?</label> <input type="checkbox" id="bulkcompressed" /></span>
						<span><input type="button" id="bulkgenerate" value="Generate" onclick="ninja.wallets.bulkwallet.buildCSV(document.getElementById('bulklimit').value * 1, document.getElementById('bulkstartindex').value * 1, document.getElementById('bulkcompressed').checked);" /> </span>
						<span class="print"><input type="button" name="print" id="bulkprint" value="Print" onclick="window.print();" /></span>
					</div>
				</div>
				<div class="body">
					<span class="label" id="bulklabelcsv">Comma Separated Values:</span> <span class="format" id="bulklabelformat">Index,Address,Private Key (WIF)</span>
					<textarea rows="20" cols="88" id="bulktextarea"></textarea>
				</div>
				<div class="faqs">
					<div id="bulkfaq1" class="faq"> 
						<div id="bulkq1" class="question" onclick="ninja.wallets.bulkwallet.openCloseFaq(1);">
							<span id="bulklabelq1">Why should I use a Bulk Wallet to accept bitcoins on my website?</span>
							<div id="bulke1" class="more"></div>
						</div>
						<div id="bulka1" class="answer">The traditional approach to accepting bitcoins on your website requires that you install the official bitcoin client daemon ("bitcoind"). Many website hosting packages don't support installing the bitcoin daemon. Also, running the bitcoin daemon on your web server means your private keys are hosted on the server and could get stolen if your web server is hacked. When using a Bulk Wallet you can upload only the bitcoin addresses and not the private keys to your web server. Then you don't have to worry about your bitcoin wallet being stolen if your web server is hacked. </div>
					</div>
					<div id="bulkfaq2" class="faq"> 
						<div id="bulkq2" class="question" onclick="ninja.wallets.bulkwallet.openCloseFaq(2);">
							<span id="bulklabelq2">How do I use a Bulk Wallet to accept bitcoins on my website?</span>
							<div id="bulke2" class="more"></div>
						</div>
						<div id="bulka2" class="answer">
							<ol>
							<li id="bulklabela2li1">Use the Bulk Wallet tab to pre-generate a large number of bitcoin addresses (10,000+). Copy and paste the generated comma separated values (CSV) list to a secure text file on your computer. Backup the file you just created to a secure location.</li>
							<li id="bulklabela2li2">Import the bitcoin addresses into a database table on your web server. (Don't put the wallet/private keys on your web server, otherwise you risk hackers stealing your coins. Just the bitcoin addresses as they will be shown to customers.)</li>
							<li id="bulklabela2li3">Provide an option on your website's shopping cart for your customer to pay in Bitcoin. When the customer chooses to pay in Bitcoin you will then display one of the addresses from your database to the customer as his "payment address" and save it with his shopping cart order.</li>
							<li id="bulklabela2li4">You now need to be notified when the payment arrives. Google "bitcoin payment notification" and subscribe to at least one bitcoin payment notification service. There are various services that will notify you via Web Services, API, SMS, Email, etc. Once you receive this notification, which could be programmatically automated, you can process the customer's order. To manually check if a payment has arrived you can use Block Explorer. Replace THEADDRESSGOESHERE with the bitcoin address you are checking. It could take between 10 minutes to one hour for the transaction to be confirmed.<br />http://www.blockexplorer.com/address/THEADDRESSGOESHERE<br /><br />Unconfirmed transactions can be viewed at: http://blockchain.info/ <br />You should see the transaction there within 30 seconds.</li>
							<li id="bulklabela2li5">Bitcoins will safely pile up on the block chain. Use the original wallet file you generated in step 1 to spend them.</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			
			<div id="brainarea" class="walletarea">
				<div id="braincommands" class="commands">
					<div class="row">
						<span id="brainlabelenterpassphrase" class="label"><label for="brainpassphrase">Enter Passphrase: </label></span>
						<input tabindex="1" type="password" id="brainpassphrase" value="" onfocus="this.select();" onkeypress="if (event.keyCode == 13) ninja.wallets.brainwallet.view();" />
						<span><label id="brainlabelshow" for="brainpassphraseshow">Show?</label> <input type="checkbox" id="brainpassphraseshow" onchange="ninja.wallets.brainwallet.showToggle(this);" /></span>
						<span class="print"><input type="button" name="print" id="brainprint" value="Print" onclick="window.print();" /></span>
					</div>
					<div class="row extra">
						<span class="label" id="brainlabelconfirm"><label for="brainpassphraseconfirm">Confirm Passphrase: </label></span>
						<input tabindex="2" type="password" id="brainpassphraseconfirm" value="" onfocus="this.select();" onkeypress="if (event.keyCode == 13) ninja.wallets.brainwallet.view();" />
						<span><input tabindex="3" type="button" id="brainview" value="View" onclick="ninja.wallets.brainwallet.view();" /></span>
						<span id="brainalgorithm" class="notes right">Algorithm: SHA256(passphrase)</span>
					</div>
					<div class="row extra"><span id="brainwarning"></span></div>
				</div>
				<div id="brainkeyarea" class="keyarea">
					<div class="public">
						<div id="brainqrcodepublic" class="qrcode_public"></div>
						<div class="pubaddress">
							<span class="label" id="brainlabelbitcoinaddress">Bitcoin Address:</span>
							<span class="output" id="brainbtcaddress"></span>
						</div>
					</div>
					<div class="private">
						<div id="brainqrcodeprivate" class="qrcode_private"></div>
						<div class="privwif">
							<span class="label" id="brainlabelprivatekey">Private Key (Wallet Import Format):</span>
							<span class="output" id="brainbtcprivwif"></span>
						</div>
					</div>
				</div>
			</div>
			
			<div id="vanityarea" class="walletarea">
				<div id="vanitystep1label" class="commands expandable" onclick="ninja.wallets.vanitywallet.openCloseStep(1);">
					<span><label id="vanitylabelstep1">Step 1 - Generate your "Step1 Key Pair"</label> <input type="button" id="vanitynewkeypair" 
						value="Generate" onclick="ninja.wallets.vanitywallet.generateKeyPair();" /></span>
					<div id="vanitystep1icon" class="more"></div>
				</div>
				<div id="vanitystep1area">
					<div>
						<span class="label" id="vanitylabelstep1publickey">Step 1 Public Key:</span>
						<div class="output pubkeyhex" id="vanitypubkey"></div>
						<br /><div class="notes" id="vanitylabelstep1pubnotes">Copy and paste the above into the Your-Part-Public-Key field in the Vanity Pool Website.</div>
					</div>
					<div>
						<span class="label" id="vanitylabelstep1privatekey">Step 1 Private Key:</span>
						<span class="output" id="vanityprivatekey"></span>
						<br /><div class="notes" id="vanitylabelstep1privnotes">Copy and paste the above Private Key field into a text file. Ideally save to an encrypted drive. You will need this to retrieve the Bitcoin Private Key once the Pool has found your prefix.</div>
					</div>
				</div>
				<div id="vanitystep2label" class="expandable" onclick="ninja.wallets.vanitywallet.openCloseStep(2);">
					<span id="vanitylabelstep2calculateyourvanitywallet">Step 2 - Calculate your Vanity Wallet</span>
					<div id="vanitystep2icon" class="more"></div>
				</div>
				<div id="vanitystep2inputs">
					<div>
						<span id="vanitylabelenteryourpart">Enter Your Part Private Key (generated in Step 1 above and previously saved):</span>
						<br /><span class="notes" id="vanitylabelnote1">[NOTE: this input box can accept a public key or private key]</span>
					</div>
					<div><textarea id="vanityinput1" rows="2" cols="90" onfocus="this.select();"></textarea></div>
					<div>
						<span id="vanitylabelenteryourpoolpart">Enter Pool Part Private Key (from Vanity Pool):</span>
						<br /><span class="notes" id="vanitylabelnote2">[NOTE: this input box can accept a public key or private key]</span>
					</div>
					<div><textarea id="vanityinput2" rows="2" cols="90" onfocus="this.select();"></textarea></div>
					<div>
						<label for="vanityradioadd" id="vanitylabelradioadd">Add</label> <input type="radio" id="vanityradioadd" name="vanityradio" value="add" checked />
						<label for="vanityradiomultiply" id="vanitylabelradiomultiply">Multiply</label> <input type="radio" id="vanityradiomultiply" name="vanityradio" value="multiply" />
					</div>
					<div><input type="button" id="vanitycalc" value="Calculate Vanity Wallet" onclick="ninja.wallets.vanitywallet.addKeys();" /></div>
				</div>
				<div id="vanitystep2area">
					<div>
						<span class="label" id="vanitylabelbitcoinaddress">Vanity Bitcoin Address:</span>
						<span class="output" id="vanityaddress"></span>
						<br /><div class="notes" id="vanitylabelnotesbitcoinaddress">The above is your new address that should include your required prefix.</div>
					</div>
					
					<div>
						<span class="label" id="vanitylabelpublickeyhex">Vanity Public Key (HEX):</span>
						<span class="output pubkeyhex" id="vanitypublickeyhex"></span>
						<br /><div class="notes" id="vanitylabelnotespublickeyhex">The above is the Public Key in hexadecimal format. </div>
					</div>

					<div>
						<span class="label" id="vanitylabelprivatekey">Vanity Private Key (WIF):</span>
						<span class="output" id="vanityprivatekeywif"></span>
						<br /><div class="notes" id="vanitylabelnotesprivatekey">The above is the Private Key to load into your wallet. </div>
					</div>
				</div>
			</div>

			<div id="detailarea" class="walletarea">	
				<div id="detailcommands" class="commands">
					<span><label id="detaillabelenterprivatekey" for="detailprivkey">Enter Private Key</label></span>
					<input type="text" id="detailprivkey" value="" onfocus="this.select();" onkeypress="if (event.keyCode == 13) ninja.wallets.detailwallet.viewDetails();" />
					<span><input type="button" id="detailview" value="View Details" onclick="ninja.wallets.detailwallet.viewDetails();" /></span>
					<span class="print"><input type="button" name="print" id="detailprint" value="Print" onclick="window.print();" /></span>
					<div class="row extra">
						<span><label id="detailkeyformats">Key Formats: WIF, WIFC, HEX, B64, B6, MINI, BIP38</label></span>
					</div>
					<div id="detailbip38commands">
						<span><label id="detaillabelpassphrase">Enter BIP38 Passphrase</label> <input type="text" id="detailprivkeypassphrase" value="" onfocus="this.select();" onkeypress="if (event.keyCode == 13) ninja.wallets.detailwallet.viewDetails();" /></span>
						<span><input type="button" id="detaildecrypt" value="Decrypt BIP38" onclick="ninja.wallets.detailwallet.viewDetails();" /></span>
					</div>
				</div>
				<div id="detailkeyarea">
					<div class="notes">
						<span id="detaillabelnote1">Your Bitcoin Private Key is a unique secret number that only you know. It can be encoded in a number of different formats. Below we show the Bitcoin Address and Public Key that corresponds to your Private Key as well as your Private Key in the most popular encoding formats (WIF, WIFC, HEX, B64, MINI).</span>
						<br /><br />
						<span id="detaillabelnote2">Bitcoin v0.6+ stores public keys in compressed format. The client now also supports import and export of private keys with importprivkey/dumpprivkey. The format of the exported private key is determined by whether the address was generated in an old or new wallet.</span>
					</div>
					<div class="pubqr">
						<div class="item">
							<span class="label" id="detaillabelbitcoinaddress">Bitcoin Address</span>
							<div id="detailqrcodepublic" class="qrcode_public"></div>
							<span class="output" id="detailaddress"></span>
						</div>					
						<div class="item right">
							<span class="label" id="detaillabelbitcoinaddresscomp">Bitcoin Address Compressed</span>
							<div id="detailqrcodepubliccomp" class="qrcode_public"></div>
							<span class="output" id="detailaddresscomp"></span>
						</div>
					</div>
					<br /><br />
					<div class="item clear">
						<span class="label" id="detaillabelpublickey">Public Key (130 characters [0-9A-F]):</span>
						<span class="output pubkeyhex" id="detailpubkey"></span>
					</div>
					<div class="item">
						<span class="label" id="detaillabelpublickeycomp">Public Key (compressed, 66 characters [0-9A-F]):</span>
						<span class="output" id="detailpubkeycomp"></span>
					</div>
					<hr />
					<div class="privqr">
						<div class="item">
							<span class="label"><span id="detaillabelprivwif">Private Key WIF<br />51 characters base58, starts with a</span> <span id="detailwifprefix">'5'</span></span>
							<div id="detailqrcodeprivate" class="qrcode_private"></div>
							<span class="output" id="detailprivwif"></span>
						</div>
						<div class="item right">
							<span class="label"><span id="detaillabelprivwifcomp">Private Key WIF Compressed<br />52 characters base58, starts with a</span> <span id="detailcompwifprefix">'K' or 'L'</span></span>
							<div id="detailqrcodeprivatecomp" class="qrcode_private"></div>
							<span class="output" id="detailprivwifcomp"></span>
						</div>
					</div>
					<br /><br />
					<div class="item clear">
						<span class="label" id="detaillabelprivhex">Private Key Hexadecimal Format (64 characters [0-9A-F]):</span>
						<span class="output" id="detailprivhex"></span>
					</div>
					<div class="item">
						<span class="label" id="detaillabelprivb64">Private Key Base64 (44 characters):</span>
						<span class="output" id="detailprivb64"></span>
					</div>
					<div class="item" style="display: none;" id="detailmini">
						<span class="label" id="detaillabelprivmini">Private Key Mini Format (22, 26 or 30 characters, starts with an 'S'):</span>
						<span class="output" id="detailprivmini"></span>
					</div>
					<div class="item" style="display: none;" id="detailb6">
						<span class="label" id="detaillabelprivb6">Private Key Base6 Format (99 characters [0-5]):</span>
						<span class="output" id="detailprivb6"></span>
					</div>
					<div class="item" style="display: none;" id="detailbip38">
						<span class="label" id="detaillabelprivbip38">Private Key BIP38 Format (58 characters base58, starts with '6P'):</span>
						<span class="output" id="detailprivbip38"></span>
					</div>
				</div>
				<div class="faqs">
					<div id="detailfaq1" class="faq"> 
						<div id="detailq1" class="question" onclick="ninja.wallets.detailwallet.openCloseFaq(1);">
							<span id="detaillabelq1">How do I make a wallet using dice? What is B6?</span>
							<div id="detaile1" class="more"></div>
						</div>
						<div id="detaila1" class="answer">An important part of creating a Bitcoin wallet is ensuring the random numbers used to create the wallet are truly random. Physical randomness is better than computer generated pseudo-randomness. The easiest way to generate physical randomness is with dice. To create a Bitcoin private key you only need one six sided die which you roll 99 times. Stopping each time to record the value of the die. When recording the values follow these rules: 1=1, 2=2, 3=3, 4=4, 5=5, 6=0. By doing this you are recording the big random number, your private key, in B6 or base 6 format. You can then enter the 99 character base 6 private key into the text field above and click View Details. You will then see the Bitcoin address associated with your private key. You should also make note of your private key in WIF format since it is more widely used.</div>
					</div>
				</div>
			</div>
		</div>

		<div id="footer" class="footer">
			<div class="authorbtc">
				<div>
					<span class="item"><span id="footerlabeldonations">Donations:</span> <b>1NiNja</b>1bUmhSoTXozBRBEtR8LeF9TGbZBN</span>
					<span class="item"></span>
					<span class="item" id="footerlabeltranslatedby"></span>
				</div>
			</div>
			<div class="authorpgp">
				<span class="item">
					<a href="pgpsignedmsg.txt" target="_blank"><span id="footerlabelversion">Version History</span> (v2.8.1)</a>
					(<a href="ninja_bitaddress.org.txt" target="_blank" id="footerlabelpgp">PGP</a>)
				</span>
				<span class="item">527B 5C82 B1F6 B2DB 72A0<br />ECBF 8749 7B91 6397 4F5A</span>
				<span class="item"><a href="https://github.com/pointbiz/bitaddress.org" target="_blank" id="footerlabelgithub">GitHub Repository</a></span>
			</div>
			<div class="copyright">
				<span id="footerlabelcopyright1">Copyright bitaddress.org.</span>
				<span id="footerlabelcopyright2">JavaScript copyrights are included in the source.</span>
				<span id="footerlabelnowarranty">No warranty.</span>
			</div>
		</div>
	</div>

	<script type="text/javascript">
//ninja.key.js
	</script>
	<script type="text/javascript">
//ninja.misc.js
	</script>
	<script type="text/javascript">
//ninja.translator.js
	</script>
	<script type="text/javascript">
//ninja.singlewallet.js
	</script>
	<script type="text/javascript">
//ninja.paperwallet.js
	</script>
	<script type="text/javascript">
//ninja.bulkwallet.js
	</script>
	<script type="text/javascript">
//ninja.brainwallet.js
	</script>
	<script type="text/javascript">
//ninja.vanitywallet.js
	</script>
	<script type="text/javascript">
//ninja.detailwallet.js
	</script>
	<script type="text/javascript">
//ninja.unittests.js
	</script>
	<script type="text/javascript">
//ninja.onload.js
	</script>
</body>
</html>
