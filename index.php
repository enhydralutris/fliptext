<html>
	<head>
	
		<meta name="viewport" content="user-scalable=yes, initial-scale=1.0, maximum-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">

	
		<link href="style.css" rel="stylesheet" type="text/css">
		<title>FlipText</title>
		<script language="JavaScript1.5">
		
		function flip(){
			/*var result = flipStr(document.f.original.value.toLowerCase(), flipTable);*/
			var result2 = flipStr(document.f.original.value.toLowerCase(), flipTable2);
			/*document.f.flipped.value = result;*/
			document.f.flipped2.value = result2;
		}
		
		function flipStr(aString, tbl){
			var last = aString.length - 1;
			var result = new Array(aString.length);
			for (var i = last; i >= 0; --i){
				var c = aString.charAt(i);
				var r = tbl[c];
				result[last - i] = r != undefined ? r : c
			}
			return result.join('');
		}
		
		function initFlipTable(tbl){
		for(i in tbl){tbl[tbl[i]] = i;}
		}
		
		var flipTable = {
		a : '\u0250',
		b : 'q',
		c : '\u0254', //open o -- from pne
		d : 'p',
		e : '\u04d9', //'\u01DD',
		f : '\u025F', //from pne
		g : '\u0183',
		h : '\u10A1',
		i : '!', //from pne
		j : '\u027E',
		k : '\u029E',
		l : '\u10A8',
		m : '\u026F',
		n : 'u',
		r : '\u0279',
		t : '\u0287',
		v : '\u028C',
		w : '\u028D',
		y : '\u028E',
		'.' : '\u02D9',
		'[' : ']',
		'(' : ')',
		'{' : '}',
		'?' : '\u00BF', //from pne
		'!' : '\u00A1',
		"\'" : ',',
		'<' : '>',
		'_' : '\u203E',
		';' : '\u061B',
		'\u203F' : '\u2040',
		'\u2045' : '\u2046',
		'\u2234' : '\u2235',
		'\r' : '\u2029', 
		'\n' : '\u0085.', 
		'\r' : '\n'
		}
		
		
		var flipTable2 = {
		a : '\u0250',
		b : 'q',
		c : '\u0254',
		d : 'p',
		e : '\u01DD',
		f : '\u025F',
		g : '\u0183',
		h : '\u0265',
		i : '\u0131',
		j : '\u027E',
		k : '\u029E',
		l : 'l',
		m : '\u026F',
		n : 'u',
		o : 'o',
		p : 'd',
		q : 'b',
		r : '\u0279',
		s : 's',
		t : '\u0287',
		u : 'n',
		v : '\u028C',
		w : '\u028D',
		y : '\u028E',
		z : 'z',
		1 : '\u21C2',
		2 : '\u1105',
		3 : '\u1110',
		4 : '\u3123',
		5 : '\u078E',  /* or u03DB */
		6 : '9',
		7 : '\u3125',
		8 : '8',
		9 : '6',
		0 : '0',
		'.' : '\u02D9',
		',' : "\'",
		"\'" : ',',
		"\"" : ',,',
		"´" : ',',
		"`" : ',',
		';' : '\u061B',
		'!' : '\u00A1',
		'\u00A1' : '!',
		'?' : '\u00BF',
		'\u00BF' : '?',
		'[' : ']',
		']' : '[',
		'(' : ')',
		')' : '(',
		'{' : '}',
		'}' : '{',
		'<' : '>',
		'>' : '<',
		'_' : '\u203E',
		'\r' : '\n'
		};
		
		function flip_init()
		{
			var sDefText = 'Enter your text in here';
			var oInput = document.getElementById('original');
			oInput.value = sDefText;
			oInput.onclick=function(){if(oInput.value==sDefText) oInput.value=''; }
			oInput.onblur=function(){if(oInput.value=='') oInput.value=sDefText; }
		
			/*initFlipTable(flipTable);*/
			initFlipTable(flipTable2);
		}
		</script>
	</head>
	<body>
		<center>
		
			<h1>FlipText</h1>
			
			<form name="f" action="">
				<div class="input">
					<div>
						<textarea rows="3" cols="45" name="original" id="original" onkeyup="flip()"></textarea><!--<input value="Flip" onclick="flip()" type="button">-->
					</div>
				</div>
				<div class="clear"></div>
							
				<!--
				<h2>Flip Text Results:</h2>
				<div class="result">
				<p>Use this text <b>for Messenger</b> (MSN and Live Messenger):</p>
				<div><textarea readonly="readonly" rows="4" cols="45" name="flipped"></textarea></div>
				</div>
				<div class="clear"></div>
				-->
				
				<div class="result">
					<div>
						<textarea readonly="readonly" rows="3" cols="45" name="flipped2"></textarea>
					</div>
				</div>
				<div class="clear"></div>
				<hr>
				<br>
			</form>
		</center>
	</body>
</html>