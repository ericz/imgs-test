var frontenabled = 4;
var fronttimer;
var current = 1;
var frontcacheloaded = '0';
var maintainstop = '0';
var block_username = '';
var block_email = '';

var signupok = '0';

var signupactive = '0';

function echeck(str){
var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
if (filter.test(str))
testresults=true
else{
testresults=false
}
return (testresults)
}

function doCreateAccount() {
	
	var firstname = document.getElementById('firstname').value;
	var lastname = document.getElementById('lastname').value;
	var email = document.getElementById('email').value;
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var promocode = document.getElementById('promocode').value;

	if(document.getElementById('password_dontsend').checked == '1') {
		var sendpw = 'no';
	} else {
		var sendpw = 'yes';
	}

	if(signupok == '1' && signupactive == '1') {
		if(firstname != '' && lastname != '' && email != '' && username != '' && password != '') {
			if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                sendReq.open("POST", '/backend/signupcreate1.php', true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handleDoCreateAccount;
                                var param = 'firstname=' + encodeURIComponent(firstname);
				param += '&lastname=' + encodeURIComponent(lastname);
				param += '&username=' + encodeURIComponent(username);
				param += '&password=' + encodeURIComponent(password);
				param += '&email=' + encodeURIComponent(email);
				param += '&promocode=' + encodeURIComponent(promocode);
				param += '&sendpw=' + sendpw;
                                sendReq.send(param);
                        }
		}
	}
}

function handleDoCreateAccount() {
	if (sendReq.readyState == 4) {
                var xmldoc = sendReq.responseXML;
                var created_node = xmldoc.getElementsByTagName("created");
                if(created_node[0].firstChild.nodeValue == 'YES') {
			if(signupok == '1' && signupactive == '1') {
				document.getElementById('createaccount').innerHTML = 'Created!';
	                	document.getElementById('createstatus').innerHTML = 'Your account is created... Logging in...';
                		document.getElementById('createstatus').style.color = 'darkgreen';
				setTimeout('autoLogin();',2000);
			}
		} else {
                                document.getElementById('createaccount').innerHTML = 'Not created';
                                document.getElementById('createstatus').innerHTML = 'Error: ' + created_node[0].firstChild.nodeValue;
                                document.getElementById('createstatus').style.color = 'red';
		}
	}
}

function autoLogin() {
	document.getElementById('login_username').value = document.getElementById('username').value;
	document.getElementById('login_pass').value = document.getElementById('password').value;
	document.getElementById('login_form').submit();
}

function createAccount() {
	if(signupok == '1' && signupactive == '0') {
                document.getElementById('createstatus').innerHTML = '';
                document.getElementById('createstatus').style.color = '#666';

		signupactive = '1';
        	if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                        receiveReq.open("GET", '/backend/signupcheck.php?username=' + document.getElementById('username').value + '&email=' + document.getElementById('email').value + '&promo=' + document.getElementById('promocode').value, true);
                        receiveReq.onreadystatechange = handleCreateAccount;
                        receiveReq.send(null);
        	}
	} else {
		document.getElementById('createstatus').innerHTML = '<span style="color: red;">Please fill in all fields, check that they are green and accept terms</span>';
	}
}

function handleCreateAccount() {
        if (receiveReq.readyState == 4 && signupactive == '1')  {
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("response");
		var username_node = topnavi_nodes[0].getElementsByTagName("username");
		var email_node = topnavi_nodes[0].getElementsByTagName("email");
		var promo_node = topnavi_nodes[0].getElementsByTagName("promo");
		var errormsg = '';
		if(username_node[0].firstChild.nodeValue == 'OK' && email_node[0].firstChild.nodeValue == 'OK' && promo_node[0].firstChild.nodeValue == 'OK') {
			document.getElementById('createaccount').innerHTML = 'Creating...';
			document.getElementById('createaccount').style.opacity = '0.5';
			doCreateAccount();
		} else {
			if(username_node[0].firstChild.nodeValue != 'OK') {
				signupok = '0';
				document.getElementById('username').style.background = '#F8E0E0';
				signupactive = '0';
				block_username = document.getElementById('username').value;
				errormsg += 'Username'; 
				if(email_node[0].firstChild.nodeValue != 'OK') { } else { errormsg += ' already taken'; }
			}
			if(email_node[0].firstChild.nodeValue != 'OK') {
				signupok = '0';
				document.getElementById('email').style.background = '#F8E0E0';
				signupactive = '0';
				block_email = document.getElementById('email').value;
				if(errormsg == '') {
					errormsg = 'E-mail already taken';
				} else {
					errormsg += ' and e-mail already taken';
				}
			}

			if(promo_node[0].firstChild.nodeValue != 'OK') {
				signupok = '0';
				document.getElementById('promocode').style.background = '#F8E0E0';
				signupactive = '0';
				errormsg = 'Promotion code invalid';
			}

			if(errormsg) {
				document.getElementById('createstatus').innerHTML = errormsg;
				document.getElementById('createstatus').style.color = 'red';
			}
		}
	}
}

function signupCheck() {
	
	signupok = '1';

	if(document.getElementById('firstname').value == '') { signupok = '0'; document.getElementById('firstname').style.background = '#fff'; } else { document.getElementById('firstname').style.background = '#ECF8E0'; }
	if(document.getElementById('lastname').value == '') { signupok = '0'; document.getElementById('lastname').style.background = '#fff'; } else { document.getElementById('lastname').style.background = '#ECF8E0'; }

	if(document.getElementById('email').value == '') { signupok = '0'; document.getElementById('email').style.background = '#fff'; } else {

		if(echeck(document.getElementById('email').value) && document.getElementById('email').value != block_email) {
			document.getElementById('email').style.background = '#ECF8E0';
		} else {
			document.getElementById('email').style.background = '#F8E0E0';
			signupok = '0';
		}

	}

	var username = document.getElementById('username').value;
	//username = 'foo';

                var re = /^[0-9A-z]*$/;
                if (!re.test(username)) {      
                        username = username.replace(/[^0-9A-z]/g,""); 
                }

		username = username.replace(/_/g,"");
		username = username.toLowerCase();
		document.getElementById('username').value = username;


	if(username == '') { signupok = '0'; document.getElementById('username').style.background = '#fff'; } else {

		if(username.length > 4 && username != block_username) {
			document.getElementById('username').style.background = '#ECF8E0';
		} else {
			document.getElementById('username').style.background = '#F8E0E0';
			signupok = '0';
		}

	}

	if(document.getElementById('have_promo').checked == 1) { document.getElementById('promodiv').style.display = 'block'; } else { document.getElementById('promodiv').style.display = 'none'; }

	if(document.getElementById('password').value == '') { signupok = '0'; document.getElementById('password').style.background = '#fff'; } else {

		var password = document.getElementById('password').value;

                if(password.length > 7) {
                        document.getElementById('password').style.background = '#ECF8E0';
                } else {
                        document.getElementById('password').style.background = '#F8E0E0';
                        signupok = '0';
                }



	}
	if(document.getElementById('terms_agree').checked != '1') { signupok = '0'; }

	if(signupok == '1') {
		document.getElementById('createaccount').style.opacity = '1';
	} else {
		document.getElementById('createaccount').style.opacity = '0.5';
	}
}

function loadFrontCache() {

if(document.getElementById('frontenabled') != null) {
        frontenabled = parseInt(document.getElementById('frontenabled').value);
}


	if(frontcacheloaded == '0') {
		frontcacheloaded = '1';
		var frontcache = '';

		var cacheloop = 1;

		if(myuserid == '0') {
			var frontmode = '1';
		} else {
			var frontmode = '2';
		}

		while(cacheloop != frontenabled) {
			var cachesrc = document.getElementById('coversrc-' + cacheloop).value;
			frontcache += '<img src="' + cachesrc + '">';
			cacheloop++;
		}
		
		document.getElementById('frontcachetarget').innerHTML = frontcache;

	}
}

function frontReset() {
	current = 1;
}

function swapFront(to,stop) {

	if(stop == '1') { maintainstop = '1'; }

	if(document.getElementById('coverappear') != null) {

		document.getElementById('covercopyright').innerHTML = '';

	loadFrontCache();
	clearInterval(fronttimer);	

        if(myuserid == '0') {
                        var frontmode = '1';
        } else {
                        var frontmode = '2';
        }

	if(to == '0' || !to) {

		var nextfront = current + 1;
	
		if(nextfront == frontenabled) {
			nextfront = 1;
		}

	} else {
		var nextfront = parseInt(to);
	}

	//document.getElementById('coverdiv').style.backgroundImage = 'url(/img/front/cover-' + nextfront + '.jpg)';

	//if(document.getElementById('countdown') != null) {
	//	if(nextfront != 2) {
	//		document.getElementById('countdown').style.display = 'none';
	//	} else {
	//		document.getElementById('countdown').style.display = 'block';
	//	}
	//}

	var checkcoverlink = 'coverlink-' + nextfront;
	
	var coverlink = '<a href="';

	if(document.getElementById(checkcoverlink) != null) {
		if(document.getElementById('internalblock-' + nextfront) != null) {
			coverlink += document.getElementById(checkcoverlink).value;
		} else {
			coverlink += hashmark + document.getElementById(checkcoverlink).value;
		}
	}

	coverlink += '">';

	var currentsrc = document.getElementById('coversrc-' + current).value;
	var nextfrontsrc = document.getElementById('coversrc-' + nextfront).value;

	if(nextfront == '-1') {
		document.getElementById('coverdiv2').innerHTML = '<img border="0" src="' + currentsrc + '">';
		document.getElementById('coverdiv').innerHTML = coverlink + '<img border="0" src="' + nextfrontsrc + '" id="coverappear" style="display: none;"><img src="/img/welcome-white.png" style="display: none; opacity: .7; margin: -160px 0px 0px 700px;" id="foobar"></a>';
		Effect.Appear('foobar', { to: 0.7 });
		setTimeout('Effect.Fade(\'foobar\');',10000);
	} else {
		document.getElementById('coverdiv2').innerHTML = '<img border="0" src="' + currentsrc + '">';
		document.getElementById('coverdiv').innerHTML = coverlink + '<img src="' + nextfrontsrc + '" id="coverappear" style="display: none;" border="0"></a>';
	}
	
	
	
	Effect.Appear('coverappear', { duration: 0.3 });

	var checkcopyrightname = 'covercopyrightname-' + nextfront;
	var checkcopyrightlink = 'covercopyrightlink-' + nextfront;
	var checkprintavailable = 'printavailable-' + nextfront;

	if(document.getElementById(checkcopyrightname) != null) {
		if(document.getElementById(checkcopyrightname).value != '') {
			document.getElementById('covercopyright').innerHTML = '<a href="' + hashmark + document.getElementById(checkprintavailable).value + '" style="font-weight: normal; color: #ddd;">Print available</a> - <a href="' + hashmark + document.getElementById(checkcopyrightlink).value + '" style="color: #ddd;">' + document.getElementById(checkcopyrightname).value + '</a>';
			Effect.Appear('covercopyright', { duration: 0.3 });
		} else {
			document.getElementById('covercopyright').style.display = 'none';
		}
	}
	
	if(document.getElementById(checkprintavailable) != null && 0) {
		document.getElementById('printavailable2').innerHTML = '<a href="' + hashmark + document.getElementById(checkprintavailable).value + '" style="font-weight: normal; color: #888;">Print available</a>';
	} else {
		document.getElementById('printavailable2').innerHTML = '';
	}

	current = nextfront;

	var sbloop = 1;
	var switchboxes = '<center><table border="0"><tr>';

	while(sbloop != frontenabled) {
		if(sbloop != current) {
			switchboxes += '<td><img src="/img/piloff' + dark + '.png" style="cursor: pointer; margin: 0px 1px 0px 1px;" onclick="swapFront(\'' + sbloop + '\',\'1\');"></td>';
		} else {
			switchboxes += '<td><img src="/img/pilon' + dark + '.png" style="cursor: pointer; margin: 0px 1px 0px 1px;" onclick="swapFront(\'' + sbloop + '\',\'1\');"></td>';
		}
		sbloop++;
	}

	switchboxes += '</tr></table></center>';

	document.getElementById('switchboxes').innerHTML = switchboxes;

	if(stop != '1' && maintainstop == '0') {
		fronttimer = setTimeout('swapFront(\'0\',\'0\');',8000);
	}

	} else {
		clearInterval(fronttimer);
	}
}
