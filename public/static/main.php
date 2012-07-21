var ffhack = '';
var ffhack2 = '0';
var ffhack3 = '';
var moderator = '0';
var dark = '';
var sendReq = getXmlHttpRequestObject();
var receiveReq = getXmlHttpRequestObject();
var sendReq2 = getXmlHttpRequestObject();
var receiveReq2 = getXmlHttpRequestObject();
var sendReq3 = getXmlHttpRequestObject();
var receiveReq3 = getXmlHttpRequestObject();
var receiveReq9 = getXmlHttpRequestObject();
var blockwrite = '0';
var hashmark = '';
var ie = '0';
var printsshifttimer;
var dolike = '0';
var frontcountdown;
var docomment = '0';
var globaltimeloop = 0;
var printsfullsizebg = '#fff';
var fotomotosetup = '';
var reply = '0';
var activereply = '0';
var activereply2 = '0';
var cartdisplay = '0';
var searchtimeout;
var postlastsearch;
var topsearchtimeout;
var cart_active_item;
var cart_active_price;
var cart_active_curr;
var voting_autoswap = '0';
var searchtoplink = '';
var selsearchhit = '0';
var anchornavenabled = '0';
var lastsearch = '';
var savingsettings = '0';
var badgechange = '0';
var loop = 0;
var menuopen = '';
var newnotifications = '';
var newmails = '';
var selectedsize = '0';
var sound_newmsg = 'http://1x.com/img/newmsg.mp3';
var currency = 'eur';

function keypress(e) {
        var evtobj=window.event? event : e //distinguish between IE's explicit event object (window.event) and Firefox's implicit.
        var unicode=evtobj.charCode? evtobj.charCode : evtobj.keyCode
        var actualkey=String.fromCharCode(unicode)

        if (evtobj.keyCode == 27) {
                closeOpen();
		if(chat_active_with != '0') { openChat(chat_active_with); }
	}
}

document.onkeyup=keypress


function notificationsToggle() {
			location.href = '/notifications';
	}

function forceLogin() {
	setTimeout('loginToggle();',200);
	document.getElementById('mustlogin').style.display = 'block';
	Effect.ScrollTo('pnavilogin', { duration:'0.2', offset:-15 });
}

function loginToggle() {
        if(document.getElementById('pnavilogintable').style.display != 'block') {
                document.getElementById('pnavilogintable').style.display = 'block';
                document.getElementById('pnavilogin').setAttribute("class", "pnaviloginactive");
		document.getElementById('login_username').focus();
        } else {
                document.getElementById('pnavilogintable').style.display = 'none';
                document.getElementById('pnavilogin').setAttribute("class", "pnavilogin");
        }

}

function mailToggle() {
			location.href = '/mail';
	}

function accountToggle() {
	stopSearch();
        if(document.getElementById('pnavimailtable').style.display == 'block') { 
                document.getElementById('pnavimailtable').style.display = 'none';
                document.getElementById('pnavimail').setAttribute("class", "pnaviicon");
        }

        if(document.getElementById('pnavinotificationstable').style.display == 'block') {
                document.getElementById('pnavinotificationstable').style.display = 'none';
                document.getElementById('pnavinotifications').setAttribute("class", "pnaviicon");
        }

	if(document.getElementById('pnaviaccounttable').style.display != 'block') {
		document.getElementById('pnaviaccounttable').style.display = 'block';
		document.getElementById('pnaviaccount').setAttribute("class", "pnaviaccountactive");
	} else {
		document.getElementById('pnaviaccounttable').style.display = 'none';
		document.getElementById('pnaviaccount').setAttribute("class", "pnaviaccount");
	}
}

function submenuprint4() {
        var menudiv = 'submenuprint4';
        var buttondiv = 'subbuttonprint4';

        if(document.getElementById(menudiv).style.display != 'block') {
                closeOpen();
                document.getElementById(menudiv).style.display = 'block';
        } else {
                document.getElementById(menudiv).style.display = 'none';
        }
}


function submenuprint3() {
        var menudiv = 'submenuprint3';
        var buttondiv = 'subbuttonprint3';

        if(document.getElementById(menudiv).style.display != 'block') {
                closeOpen();
                document.getElementById(menudiv).style.display = 'block';
        } else {
                document.getElementById(menudiv).style.display = 'none';
        }
}

function submenuprint2() {
        var menudiv = 'submenuprint2';
        var buttondiv = 'subbuttonprint2';

        if(document.getElementById(menudiv).style.display != 'block') {
		closeOpen();
                document.getElementById(menudiv).style.display = 'block';
        } else {
                document.getElementById(menudiv).style.display = 'none';
        }
}


function submenuprint1() {
	var menudiv = 'submenuprint1';
	var buttondiv = 'subbuttonprint1';

        if(document.getElementById(menudiv).style.display != 'block') {
		closeOpen();
                document.getElementById(menudiv).style.display = 'block';
        } else {
                document.getElementById(menudiv).style.display = 'none';
        }
}

function submenu() {
        if(document.getElementById('submenu2') != null) {
                if(document.getElementById('submenu2').style.display == 'block') {
                        submenu2();
                }
        }

        if(document.getElementById('submenu').style.display != 'block') {
                document.getElementById('submenu').style.display = 'block';
                document.getElementById('submenubutton').setAttribute("class", "submenubuttonactive");
        } else {
                document.getElementById('submenu').style.display = 'none';
                document.getElementById('submenubutton').setAttribute("class", "submenubutton");
        }
}

function submenu2() {
        if(document.getElementById('submenu') != null) {
                if(document.getElementById('submenu').style.display == 'block') {
                        submenu();
                }
        }

        if(document.getElementById('submenu2').style.display != 'block') {
                document.getElementById('submenu2').style.display = 'block';
                document.getElementById('submenubutton2').setAttribute("class", "submenubuttonactive");
        } else {
                document.getElementById('submenu2').style.display = 'none';
                document.getElementById('submenubutton2').setAttribute("class", "submenubutton");
        }
}



function pnaviToggle() {

	if(document.getElementById('pnavi2') != null) {
		if(document.getElementById('pnavi2').style.display == 'block') {
			pnavi2Toggle();
		}
	}

	if(document.getElementById('pnavi').style.display != 'block') {
		document.getElementById('pnavi').style.display = 'block';
		document.getElementById('pnavicurr').setAttribute("class", "pnavicurractive");
	} else {
		document.getElementById('pnavi').style.display = 'none';
		document.getElementById('pnavicurr').setAttribute("class", "pnavicurr");
	}
}

function pnavi2Toggle() {

        if(document.getElementById('pnavi').style.display == 'block') {
                pnaviToggle();
        }

        if(document.getElementById('pnavi2').style.display != 'block') {
                document.getElementById('pnavi2').style.display = 'block';
                document.getElementById('pnavi2curr').setAttribute("class", "pnavicurractive");
        } else {
                document.getElementById('pnavi2').style.display = 'none';
                document.getElementById('pnavi2curr').setAttribute("class", "pnavicurr");
        }
}

function reloadShoppingcart() {
        if(anchornavenabled == '1') {
                document.location.hash = '!/shoppingcart';
                currentAnchor = 'foo';
                checkAnchor();
        } else {
                location.href = '/shoppingcart';
        }
}

function reloadSeries(seriesid,uploadid) {
        if(anchornavenabled == '1') {
                document.location.hash = '!/series/edit/' + seriesid + '/' + uploadid;
                currentAnchor = 'foo';
                checkAnchor();
        } else {
                location.href = '/series/edit/' + seriesid + '/' + uploadid;
        }
}

function reloadPhotodir(queueid) {
	if(anchornavenabled == '1') {
		document.location.hash = '!/photodirectory/uploaded/' + queueid;
		currentAnchor = 'foo';
		checkAnchor();
	} else {
		location.href = '/photodirectory';
	}
}

function previewP(size,x,y,realx,realy) {
	x = Math.round(x*1.2);
	y = Math.round(y*1.2);
	if(selectedsize != '0') {
		var deselectbutton = 'sizebutton-' + selectedsize;
		document.getElementById(deselectbutton).setAttribute("class", "sizebutton");
	}

	var selectbutton = 'sizebutton-' + size;
	document.getElementById(selectbutton).setAttribute("class", "sizebuttonactive");

	var top = 95-(y/2);
	var left = 230-(x/2);
	document.getElementById('printpreview').style.display = 'none';
	document.getElementById('printpreviewwall').style.display = 'block';
	document.getElementById('printpreview2').style.display = 'block';
	
	$('printpreview2').morph('width: ' + x + 'px; top: ' + top + 'px;' + 'left:' + left + 'px;');
	
	selectedsize = size;

	document.getElementById('buybutton').style.display = 'block';
	document.getElementById('returnImage').style.display = 'block';

}


function setTitle() {
	var newtitle;
	var extras = '';

	if(document.getElementById('set_title') != null) {
		newtitle = document.getElementById('set_title').value; 
	} else {
		if(document.getElementById('cleantitle') != null) { 
			newtitle = document.getElementById('cleantitle').value;
		}
	}

	if(!newtitle) {
		newtitle = 'In Pursuit of the Sublime';
	}

	var total = parseInt(newnotifications) + parseInt(newmails);

	if(total > 0) {
		extras = '(' + total + ') ';
	}
	
	//var online = ' [' + document.getElementById('onlinecount').innerHTML + ']';

	

	document.title = '1x.com ' + extras + '- ' + newtitle; // + online;
	
}


if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    myWidth = window.innerWidth;
    myHeight = window.innerHeight;
} else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
    myWidth = document.documentElement.clientWidth;
    myHeight = document.documentElement.clientHeight;
} else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
    myWidth = document.body.clientWidth;
    myHeight = document.body.clientHeight;
}

document.onclick = function (e) {
	e = e || event
	var target = e.target || e.srcElement
		while(target) {
		if (target == document.getElementById('submenuprint4') || target == document.getElementById('submenuprintbutton4') || target == document.getElementById('submenuprint2') || target == document.getElementById('submenuprintbutton2') || target == document.getElementById('submenuprint3') || target == document.getElementById('submenuprintbutton3') || target == document.getElementById('submenuprint1') || target == document.getElementById('submenuprintbutton1') || target == document.getElementById('submenubutton') || target == document.getElementById('submenubutton2') || target == document.getElementById('submenu') || target == document.getElementById('submenu2') || target == document.getElementById('chat_contacts') || target == document.getElementById('chat_contactlist') || target == document.getElementById('search_q') || target == document.getElementById('topsearchresults') || target == document.getElementById('pnavimail') || target == document.getElementById('pnavimailtable') || target == document.getElementById('pnavinotifications') || target == document.getElementById('pnavinotificationstable') || target == document.getElementById('pnaviaccount') || target == document.getElementById('pnaviaccounttable') || target == document.getElementById('pnavi2curr') || target == document.getElementById('pnavi2') || target == document.getElementById('pnavicurr') || target == document.getElementById('pnavi') || target == document.getElementById('artistbutton1') || target == document.getElementById('artistbutton2') || target == document.getElementById('v-menu5') || target == document.getElementById('v-menu6') || target == document.getElementById('v-menu4') || target == document.getElementById('v-menu3') || target == document.getElementById('v-menu') || target == document.getElementById('v-menu2') || target == document.getElementById('notificationbutton') || target == document.getElementById('accountbutton') || target == document.getElementById('notificationbadge') || target == document.getElementById('friendbadge') || target == document.getElementById('mailbadge') || target == document.getElementById('mailbutton') || target == document.getElementById('pnavilogin') || target == document.getElementById('pnavilogintable')) {
			return
		}
		target = target.parentNode
	}
	// stopSearch();
	closeOpen(); 
	if(document.getElementById('chat_contactlist') != null) {
		if(document.getElementById('chat_contactlist').style.display == 'block') { chat_contactlisttoggle(); }
	}
}

function autoResize(element) {
	var maxheight = parseInt(myHeight) - 100;
	document.getElementById(element).style.maxHeight = maxheight + 'px';
}

function startPage() {
	if(document.location.hash == '#!/') {
		currentAnchor = 'foo';
		checkAnchor();
	}
}

function relocatePopup(where) {
	var left = (myWidth/2)-where; document.getElementById('floatingwindow').style.left = left + 'px';
}

function showElement(layer){
	var myLayer = document.getElementById(layer);
	if(myLayer.style.display=="none"){
		if(menuopen != '') {
			if(menuopen == 'v-menu2') { document.getElementById('notificationbutton').setAttribute("class", "notificationimg"); }
			if(menuopen == 'v-menu4') { document.getElementById('mailbutton').setAttribute("class", "notificationimg"); }
			var closeLayer = document.getElementById(menuopen);
			closeLayer.style.display="none";
			menuopen = '';
		}
		myLayer.style.display="block";
		menuopen = layer;
		if(layer == 'v-menu2') { document.getElementById('notificationbutton').setAttribute("class", "notificationimgactive");  getNotifications(); }
		if(layer == 'v-menu4') { document.getElementById('mailbutton').setAttribute("class", "notificationimgactive"); getMail(); }

	} else {
		if(menuopen == 'v-menu2') { document.getElementById('notificationbutton').setAttribute("class", "notificationimg"); }
		if(menuopen == 'v-menu4') { document.getElementById('mailbutton').setAttribute("class", "notificationimg"); }
		menuopen = '';
		myLayer.style.display="none";
	}
}

function closeOpen() {
	if(menuopen != '') {
                if(menuopen == 'v-menu2') { document.getElementById('notificationbutton').setAttribute("class", "notificationimg"); }
                if(menuopen == 'v-menu4') { document.getElementById('mailbutton').setAttribute("class", "notificationimg"); }
		var closeLayer = document.getElementById(menuopen);
		closeLayer.style.display="none";
		menuopen = '';
	}

	if(document.getElementById('submenuprint1') != null) {
        	if(document.getElementById('submenuprint1').style.display == 'block') {
			submenuprint1();
        	}
	}

        if(document.getElementById('submenuprint2') != null) {
                if(document.getElementById('submenuprint2').style.display == 'block') {
                        submenuprint2();
                }
        }

        if(document.getElementById('submenuprint3') != null) {
                if(document.getElementById('submenuprint3').style.display == 'block') {
                        submenuprint3();
                }
        }

        if(document.getElementById('submenuprint4') != null) {
                if(document.getElementById('submenuprint4').style.display == 'block') {
                        submenuprint4();
                }
        }

        if(document.getElementById('submenu') != null) {
                if(document.getElementById('submenu').style.display == 'block') {
                        submenu();
                }
        }
        if(document.getElementById('submenu2') != null) {
                if(document.getElementById('submenu2').style.display == 'block') {
                        submenu2();
                }
        }

	if(document.getElementById('pnavi') != null) {
		if(document.getElementById('pnavi').style.display == 'block') {
			pnaviToggle();
		}
	}
	if(document.getElementById('pnavi2') != null) {
	        if(document.getElementById('pnavi2').style.display == 'block') {
        	        pnavi2Toggle();
        	}
	}
	if(document.getElementById('pnaviaccounttable') != null) {
		if(document.getElementById('pnaviaccounttable').style.display == 'block') {
			accountToggle();
		}
	}
	if(document.getElementById('pnavinotificationstable') != null) {
        	if(document.getElementById('pnavinotificationstable').style.display == 'block') {
			notificationsToggle();
        	}
	}
	if(document.getElementById('pnavimailtable') != null) {
	        if(document.getElementById('pnavimailtable').style.display == 'block') {
        	        mailToggle();
        	}
	}
        if(document.getElementById('pnavilogintable') != null) {
                if(document.getElementById('pnavilogintable').style.display == 'block') {
                        loginToggle();
                }
        }

}

function nl2br (str, is_xhtml) {
    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '' : '<br>';
    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
}

function getXmlHttpRequestObject() {
        if (window.XMLHttpRequest) {
                return new XMLHttpRequest();
        } else if(window.ActiveXObject) {
                        return new ActiveXObject("Microsoft.XMLHTTP");
        } else {
                document.getElementById('p_status').innerHTML = 'Status: Cound not create XmlHttpRequest Object.  Consider upgrading your browser.';
        }
}

function like(id) {
	if(dolike == '0')
	{
		dolike = '1';
        	document.getElementById('likebutton').innerHTML = '<img src="/ajax-loader.gif">';
        	if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                	receiveReq.open("GET", '/backend/like.php?id=' + id, true);
                	receiveReq.onreadystatechange = handleLike;
                	receiveReq.send(null);
        	}
	}
}

function closeTopBanner() {
	document.getElementById('topbanner').style.display = 'none';

                if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                        receiveReq.open("GET", '/backend/closetopbanner.php', true);
                        receiveReq.onreadystatechange = handleCloseTopBanner;
                        receiveReq.send(null);
                }

}

function handleCloseTopBanner() {
	if (receiveReq.readyState == 4) {
	}
}

function subNavi(target) {
	document.getElementById('navi-' + target).style.display = 'block';
}

function subNaviOff(target) {
	document.getElementById('navi-' + target).style.display = 'none';
}

function commentFocus() {
                if(document.getElementById('commenttext').value == 'Write a comment') {
                        document.getElementById('commenttext').value = '';
                }
}

function addToCart(what,picid,country,desc,price) {
	if(country != '') {
	//var incart = document.getElementById('cartcount').innerHTML;
	
	//var newamount = parseInt(incart) + 1;

	//document.getElementById('cartcount').innerHTML = newamount;

	//if(document.getElementById('itemscart').innerHTML == "No items in cart") {
	//	document.getElementById('itemscart').innerHTML = '';
	//}

	cart_active_item = desc;
	cart_active_price = price;

	//document.getElementById('itemscart').innerHTML += '<div style="margin-bottom: 5px; float: right; font-size: 12px;">' + price + '</div><div style="margin-bottom: 5px; font-size: 12px;">' + desc + '</div>';

	//openCart();
	
	//if(newamount == 1) { document.getElementById('carts').innerHTML = ''; } else { document.getElementById('carts').innerHTML = 's'; }

	if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
		receiveReq.open("GET", '/backend/cart.php?itemid=' + what + '&picid=' + picid + '&country=' + country, true);
		receiveReq.onreadystatechange = handleAddToCart;
       		receiveReq.send(null);
        }
	} else {
		if(parseInt(what) > 4) {
			Effect.Appear('shippingloc');
			Effect.ScrollTo('shippingloc');
		}
	}
}

function handleAddToCart() {
	if (receiveReq.readyState == 4) {
       	        var xmldoc = receiveReq.responseXML;
               	var status_node = xmldoc.getElementsByTagName("status");
		var error_node = xmldoc.getElementsByTagName("error");
               	if(status_node[0].firstChild.nodeValue == 'ok') {
			if(cart_active_item != '' && cart_active_price != '') {
		        	var incart = document.getElementById('cartcount').innerHTML;
        			var newamount = parseInt(incart) + 1;
        			document.getElementById('cartcount').innerHTML = newamount;
        			if(document.getElementById('itemscart').innerHTML == "No items in cart") {
                			document.getElementById('itemscart').innerHTML = '';
        			}
				document.getElementById('itemscart').innerHTML += '<div style="margin-bottom: 5px; float: right; font-size: 12px;">' + cart_active_price + '</div><div style="margin-bottom: 5px; font-size: 12px;">' + cart_active_item + '</div>';
				openCart();
				if(newamount == 1) { document.getElementById('carts').innerHTML = ''; } else { document.getElementById('carts').innerHTML = 's'; }
			}
		} else {
			alert('Could not place your item in cart: ' + error_node[0].firstChild.nodeValue);
		}
		cart_active_item = '';
		cart_active_price = '';
	}
}

function printBadgeChange() {
	if(badgechange == '0')
	{
		document.getElementById('buyprintbadge').innerHTML = '<center><div style="font-size: 16px;">+<img style="position: relative; top: 5px;" src="/img/shop.png">&nbsp; <b>Add to cart</b></div><div style="font-size: 12px; margin-top: 13px;">Add this print to your shopping cart</div></center>';
		document.getElementById('buyprintbadge').setAttribute("class", "printsizebadge3"); 
		// new Effect.Highlight('buyprintbadge', { startcolor: '#ffff99', endcolor: '#ffff99' });
		badgechange = '1';
	} 
}

function printBadgeChange2() {
        if(badgechange == '1')
        {
                document.getElementById('buyprintbadge').innerHTML = '<center><div style="font-size: 16px;" onclick="cancelPrint();"><b>Added to cart!</b></div><div onclick="cancelPrint();" style="font-size: 12px; margin-top: 13px;">Click here to exit print mode</div></center>';
                document.getElementById('buyprintbadge').setAttribute("class", "printsizebadge3");
                badgechange = '0';
        } 
}

function discardNReply() {

        if(activereply != '0')
        {
                var abort = 'commentreplyeditor-' + activereply;
                document.getElementById(abort).innerHTML = '';
                activereply = '0';
                document.getElementById('reply_to').value = '0';
                document.getElementById('commentbutton').style.opacity = '0.9';
                blockwrite = '0';
        }
}

function discardReply() {

        if(activereply2 != '0')
        {
                var abort = 'commentreplyeditor-' + activereply2;
                document.getElementById(abort).innerHTML = '';
		activereply2 = '0';
		document.getElementById('reply_to').value = '0';
		document.getElementById('commentbutton').style.opacity = '0.9';
		blockwrite = '0';
	}
}

function doNReply(id) {
        if(activereply != '0' && activereply != id)
        {
                var abort = 'commentreplyeditor-' + activereply;
		if(document.getElementById(abort) != null) {
                	document.getElementById(abort).innerHTML = '';
		} else {
			activereply = '0';
		}
        }
        document.getElementById('reply_to').value = id;
        var editor = 'commentreplyeditor-' + id;        
	var textarea = 'commenttext-' + id;        
	document.getElementById(editor).innerHTML = '<div class="container4" style=\"margin: 5px 0px 0px 20px; width: 400px; margin-bottom: 20px;\"><div style="padding: 10px;"><textarea class="replyeditor" style="font-family: Arial; width: 100%; height: 50px; font-size: 12px; border: 0px;" id="commenttext-' + id + '"></textarea><div style="padding: 10px 0px 5px 0px;"><span class="squarebutton1" onclick="doWriteWallComment();" id="commentbutton-' + id + '">Write</span> &nbsp; <span style="font-size: 11px;">or <a href="javascript:void(0);" class="bblue" onclick="discardNReply();">abort</a></span></div></div></div>';
        document.getElementById(textarea).focus();
        activereply = id;
}

function doReply(id) {
	if(activereply2 != '0' && activereply2 != id)
	{
		var abort = 'commentreplyeditor-' + activereply2;
		document.getElementById(abort).innerHTML = '';
	}
	document.getElementById('reply_to').value = id;
	var editor = 'commentreplyeditor-' + id;
	var textarea = 'commenttext-' + id;
	document.getElementById(editor).innerHTML = '<img src="/img/pilupp2.png" style="position: relative; left: 20px; margin-top: 5px;"><div class="container4" style="width: 650px; padding: 10px;"><textarea style="resize: none; font-family: Arial; width: 100%; background: #fcfcfc; color: #000; height: 50px; font-size: 12px; border: 0px;" id="commenttext-' + id + '"></textarea><div style="padding: 10px 0px 5px 0px;"><span class="squarebutton1" onclick="addComment(\'' + document.getElementById('picid').value + '\',\'reply\');" id="commentbutton-' + id + '">Write</span> &nbsp; <span style="font-size: 11px;">or <a href="javascript:void(0);" class="bblue" onclick="discardReply();">abort</a></span></div></div></div>';
	document.getElementById(textarea).focus();
	activereply2 = id;
	document.getElementById('commentbutton').style.opacity = '0.2';
	blockwrite = '1';
}

function handleLike() {
        if (receiveReq.readyState == 4)
        {
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("like");
                var n_messages = topnavi_nodes.length;
                for (k = 0; k < n_messages; k++) {
                        var likestate_node = topnavi_nodes[k].getElementsByTagName("likestate");
			var likebutton_node = topnavi_nodes[k].getElementsByTagName("likebutton");
			var likelist_node = topnavi_nodes[k].getElementsByTagName("likedata");
			likelist_node[0].normalize();
			document.getElementById('likebutton').innerHTML = likebutton_node[0].firstChild.nodeValue;
			document.getElementById('likes').innerHTML = likelist_node[0].firstChild.nodeValue;
			dolike = '0';
			//if(likestate_node[0].firstChild.nodeValue == 'Like') { document.getElementById('favscount').innerHTML = parseInt(document.getElementById('favscount').innerHTML) - 1; }
			//if(likestate_node[0].firstChild.nodeValue == 'Unlike') { document.getElementById('favscount').innerHTML = parseInt(document.getElementById('favscount').innerHTML) + 1; }
                }
        }
}

function handleDoWriteWallComment() {
	if (sendReq.readyState == 4) { 
        	if(activereply != '0')
        	{
			var msg = document.getElementById('commenttext-' + activereply).value;
			loop = parseInt(loop) + 1;
			var newid = 'newcomment-' + activereply + '-' + loop;
			document.getElementById('newcomments-' + activereply).innerHTML += '<div id="' + newid + '" class="feedcomments"><table border="0" cellpadding="0" cellspacing="0"><tr><td valign="top" style="padding: 5px 8px 5px 8px; font-size: 13px; line-height: 18px;"><b><a href="/artist/' + document.getElementById('auth_userid').value + '">' + document.getElementById('auth_realname').value + ' &nbsp; </a></b>' + nl2br(msg,false) + '</td></tr></table></div>';

                	var abort = 'commentreplyeditor-' + activereply;
	                document.getElementById(abort).innerHTML = '';
			if(document.getElementById('morecounter-' + activereply) == null) {
				//document.getElementById('arrowfirst-' + activereply).style.display = 'block';
			} else {
				if(document.getElementById('morecounter-' + activereply).innerHTML == '0') {
				//	document.getElementById('arrowfirst-' + activereply).style.display = 'block';
				}
			}
			document.getElementById('morecounter-' + activereply).innerHTML = parseInt(document.getElementById('morecounter-' + activereply).innerHTML) + 1;
                	activereply = '0';
                	document.getElementById('reply_to').value = '0';
                	document.getElementById('commentbutton').style.opacity = '0.9';
                	blockwrite = '0';
			//Effect.Appear(newid);
		}
        }
}

function doWriteWallComment()
{
	if(activereply != '0')
	{
        	var msg = document.getElementById('commenttext-' + activereply).value;
        	var reply_to = document.getElementById('reply_to').value;
        	if(msg != '' && reply_to != '0')
        	{
                	if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                        	sendReq.open("POST", '/backend/wallcomment.php?id=' + reply_to, true);
                        	sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                        	sendReq.onreadystatechange = handleDoWriteWallComment;
                        	var param = 'text=' + encodeURIComponent(msg);
                        	sendReq.send(param);
                	}
        	}
	}
}

function doMailReply() {
	var msg = document.getElementById('message').value;
	if(msg != '') {
		var mailid = document.getElementById('mailid').value;
		if(mailid)
		{
			if (sendReq.readyState == 4 || sendReq.readyState == 0) {
				sendReq.open("POST", '/backend/mailreply.php?id=' + mailid, true);
				sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				sendReq.onreadystatechange = handleDoMailReply;
				var param = 'text=' + encodeURIComponent(msg);
				sendReq.send(param);
			}
		}
	}
}

function handleDoMailReply() {
	if (sendReq.readyState == 4)
	{
		//var status = 'nok';
                //var xmldoc = sendReq.responseXML;
                //var topnavi_nodes = xmldoc.getElementsByTagName("result");
                //var n_messages = topnavi_nodes.length;
                //for (k = 0; k < n_messages; k++) {
                //        var status_node = topnavi_nodes[k].getElementsByTagName("status");
		//	if(status_node[0].firstChild.nodeValue == 'ok')
		//	{
		//		status = 'ok';
		//	}
		//}
		//
		//if(status == 'ok') {
			finishWriteReply();
		//} else {
		//	alert('Your message could not be sent at this time. Try again later.');
		//}
	}
}

function doWriteWall()
{
        var msg = document.getElementById('walltext').value;
	var target = document.getElementById('userid').value;
	if(msg != '' && target != '')
	{
		if (sendReq.readyState == 4 || sendReq.readyState == 0) {
			sendReq.open("POST", '/backend/wall.php?id=' + target, true);
			sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			sendReq.onreadystatechange = handleDoWriteWall;
			var param = 'text=' + encodeURIComponent(msg);
			sendReq.send(param);
		}
	}
}

function handleDoWriteWall()
{
	if (sendReq.readyState == 4) { writeWall(); }
}

function addComment(id,from) {
	if(from == 'reply' || from == 'noreply' && blockwrite != '1')
	{

	if(docomment == '0')
	{
		docomment = '1';

		reply = document.getElementById('reply_to').value;

		if(reply != '0')
		{
			var button = 'commentbutton-' + reply;
			var textarea = 'commenttext-' + reply;
		} else {
			var button = 'commentbutton';
			var textarea = 'commenttext';
		}

		document.getElementById(button).innerHTML = '<img src="/ajax-loader.gif">';

		var comment = document.getElementById(textarea).value;
		document.getElementById(textarea).disable = true;

		if(comment && comment != "Write a comment")
		{
	        	if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                		sendReq.open("POST", '/backend/comment.php?id=' + id, true);
                		sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                		sendReq.onreadystatechange = handleAddComment;
                		var param = 'text=' + encodeURIComponent(comment);
				param += '&reply=' + reply;
                		sendReq.send(param);
        		}
		} else {
			document.getElementById(button).innerHTML = 'Write';
			alert('No comment written. Aborting!');
			docomment = '0';
		}
	}

	}
}

function handleAddComment() {
	if(sendReq.readyState == 4)
	{
                if(reply != '0')
                {
			var editor = 'commentreplyeditor-' + reply;
			document.getElementById(editor).innerHTML = '';
			var picid = document.getElementById('picid').value;
			document.getElementById('reply_to').value = 0;
			docomment = '0';
	                document.getElementById('commentbutton').style.opacity = '0.9';
        	        blockwrite = '0';
			activereply2 = '0';
			getComments(picid);

                } else {
                        var button = 'commentbutton';
                        var textarea = 'commenttext';
			document.getElementById(button).innerHTML = 'Write';
			document.getElementById(textarea).value = 'Write a comment';
			var picid = document.getElementById('picid').value;
			docomment = '0';
			//var oldcommentamount = parseInt(document.getElementById('noofcomments').innerHTML);
			//var newcommentamount = parseInt(oldcommentamount) + 1;
			//document.getElementById('noofcomments').innerHTML = newcommentamount;
			//if(newcommentamount == 1) { document.getElementById('grammars').innerHTML = ''; } else { document.getElementById('grammars').innerHTML = 'S'; }
			activereply2 = '0';
			getComments(picid);
                }
	}
}

function getMail() {
        if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                        receiveReq.open("GET", '/backend/mail.php', true);
                        receiveReq.onreadystatechange = handleGetMail;
                        receiveReq.send(null);
        }
}

function handleGetMail() {
        if (receiveReq.readyState == 4)  {
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("mail");
                var n_messages = topnavi_nodes.length;
                var elementcount = 0;
                var put = '';
		// <li style="border-bottom: 1px solid #ddd;"><div style="float: right; font-size: 10px; font-weight: bold; padding: 9px 8px 0px 0px; cursor: pointer;" onclick="location.href=\'/mail/compose\';">Compose mail</div><div style="background: #eee; padding: 1px; color: #444; font-size: 13px;"><div style="font-weight: bold; padding: 5px;">Mail</div></div></li>';
                for (k = 0; k < n_messages; k++) {
			var preview_node = topnavi_nodes[k].getElementsByTagName("preview");
			var title_node = topnavi_nodes[k].getElementsByTagName("title");
			var from_node = topnavi_nodes[k].getElementsByTagName("from");
			var realname_node = topnavi_nodes[k].getElementsByTagName("realname");
			var between_node = topnavi_nodes[k].getElementsByTagName("between");
			var mailid_node = topnavi_nodes[k].getElementsByTagName("mailid");
			var seen_node = topnavi_nodes[k].getElementsByTagName("seen");
			var picid_node = topnavi_nodes[k].getElementsByTagName("picid");
			var profilepic_node = topnavi_nodes[k].getElementsByTagName("profilepic");
			var random_node = topnavi_nodes[k].getElementsByTagName("random");

			put += '<tr><td ';
			put += 'onclick="closeOpen(); location.href=\'/mail/read/' + mailid_node[0].firstChild.nodeValue + '/' + random_node[0].firstChild.nodeValue + '\';" style="cursor: pointer;" ';
			if(seen_node[0].firstChild.nodeValue != '1') { put += 'color: #A9D0F5;'; }
			put += '>';
			//put += 'border="0" cellspacing="0" class="notificationtable"><tr>';
			if(profilepic_node[0].firstChild.nodeValue != 'false')
			{
				put += '<img src="/u/profile/' + profilepic_node[0].firstChild.nodeValue + '-square.jpg" width="35" style="float: left; margin-right: 10px;">';
			} else {
				if(picid_node[0].firstChild.nodeValue != 'false') {
					put += '<img src="http://1x.com/pictures/' + picid_node[0].firstChild.nodeValue + '-square.jpg" width="35" style="float: left; margin-right: 10px;">';
				} else {
					put += '<div style="float: left; margin-right: 10px; background: #3a3a3a; width: 35px; height: 35px; border: 1px solid #888;">&nbsp;</div>';
				}
			}
			put += '<div style="';
			if(seen_node[0].firstChild.nodeValue != '1') { put += 'color: #A9D0F5;'; }
			put += 'font-weight: bold; font-size: 13px; margin-bottom: 5px; ">' + realname_node[0].firstChild.nodeValue + '</div><div style="';
			if(seen_node[0].firstChild.nodeValue != '1') { put += 'color: #A9D0F5;'; }
			put += 'font-size: 10px; height: 13px; overflow: hidden;"><b>' + title_node[0].firstChild.nodeValue + '</b>&nbsp; <span class="mailtd">' + preview_node[0].firstChild.nodeValue + '</span></div></td></tr>';
		}
                put += '<tr><td onclick="closeOpen(); location.href=\'/mail\';"><center><a href="/mail" onclick="closeOpen();" style="padding: 10px; font-size: 10px; "><b>SHOW ALL</b></a></center></td></tr>';

                document.getElementById('pnavimailtable').innerHTML = put;
		newmails = 0;
                document.getElementById('mailbadge').style.display = 'none';
                document.getElementById('mailbadge').innerHTML = '0';

		setTitle();
	}
}


function getNotifications() {
	document.getElementById('pnavinotificationstable').innerHTML = '<tr><td><img style="padding: 10px;" src="/ajax-loader.gif"></td></tr>';
	if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                        receiveReq.open("GET", '/backend/notifications.php', true);
                        receiveReq.onreadystatechange = handleGetNotifications;
                        receiveReq.send(null);
	}
}

function handleGetNotifications() {
	if (receiveReq.readyState == 4)	 {
                var xmldoc = receiveReq.responseXML;

		var put = '';

                var topnavi_nodes = xmldoc.getElementsByTagName("friendrequest");
                var n_messages = topnavi_nodes.length;
                var elementcount = 0;
                var put = '';
                for (k = 0; k < n_messages; k++) {
                        var from_node = topnavi_nodes[k].getElementsByTagName("from");
			var total_node = topnavi_nodes[k].getElementsByTagName("total");
			if(total_node[0].firstChild.nodeValue == '1') {
				var sword = ''; 
			} else {
				var sword = 's';
			}
			if(from_node[0].firstChild.nodeValue != 'false') { 
				put += '<div onclick="location.href=\'/friends\'; closeOpen();" style="cursor: pointer; color: #eee; padding: 5px 8px 5px 8px; border-bottom: 2px solid #444;"><div style="font-size: 13px; font-weight: bold; margin-bottom: 5px; color: #f6f6f6;">' + total_node[0].firstChild.nodeValue + ' new friend request' + sword + '</div><div style="font-size: 11px;">From ' + from_node[0].firstChild.nodeValue + '. Click here.</div></div>';
			}
		}

                var topnavi_nodes = xmldoc.getElementsByTagName("notification");
                var n_messages = topnavi_nodes.length;
                var elementcount = 0;

                for (k = 0; k < n_messages; k++) {
                        var text_node = topnavi_nodes[k].getElementsByTagName("text");
			var picid_node = topnavi_nodes[k].getElementsByTagName("picid");
			var link_node = topnavi_nodes[k].getElementsByTagName("link");
			var from_node = topnavi_nodes[k].getElementsByTagName("from");
			var fromname_node = topnavi_nodes[k].getElementsByTagName("fromname");
			var profilepic_node = topnavi_nodes[k].getElementsByTagName("profilepic");
			var seen_node = topnavi_nodes[k].getElementsByTagName("seen");
			var type_node = topnavi_nodes[k].getElementsByTagName("type");
			var photo_node = topnavi_nodes[k].getElementsByTagName("photo");
			var nottime_node = topnavi_nodes[k].getElementsByTagName("nottime");
			var random_node = topnavi_nodes[k].getElementsByTagName("random");

			if(type_node[0].firstChild.nodeValue == '1') { var picmode = '2'; }
			
			if(!picmode) { var picmode = '2'; }
			
			put += '<tr><td style="'; 
			
			if(seen_node[0].firstChild.nodeValue == 'false') { put += 'color: #A9D0F5;'; } else { put += 'color: #dddddd;'; }

			put += 'font-size: 11px;"';

			if(link_node[0].firstChild.nodeValue != 'false') {
				put += ' onclick="closeOpen(); forceLoad(\'' + link_node[0].firstChild.nodeValue + '\'); location.href=\'#!' + link_node[0].firstChild.nodeValue + '\';" style="cursor: pointer;" ';
			}

			put += '>';

			if(picid_node[0].firstChild.nodeValue != 'false' && picmode == '1') {
				put += '<img src="http://1x.com/pictures/' + picid_node[0].firstChild.nodeValue + '-square.jpg" width="35" style="float: left; margin-right: 10px;">';
			}

                        if(profilepic_node[0].firstChild.nodeValue != 'false' && picmode == '2') {
                                put += '<img src="/u/profile/' + profilepic_node[0].firstChild.nodeValue + '-square.jpg" width="35" style="float: left;margin-right: 10px;"> ';
                        }


			if(profilepic_node[0].firstChild.nodeValue == 'false' && picmode == '2' && photo_node[0].firstChild.nodeValue == 'false') {
				put += '<div style="float: left; margin-right: 10px; background: #3a3a3a; width: 35px; height: 35px; border: 1px solid #888;">&nbsp;</div>';
			}

                        if(profilepic_node[0].firstChild.nodeValue == 'false' && picmode == '2' && photo_node[0].firstChild.nodeValue != 'false') {
                                put += '<img src="http://1x.com/pictures/' + photo_node[0].firstChild.nodeValue + '-square.jpg" width="35" style="float: left;margin-right: 10px;">';
                        }

			put += '<div style="line-height: 17px;">';

			if(type_node[0].firstChild.nodeValue == '1') {
				put += '<b>' + fromname_node[0].firstChild.nodeValue + '</b> ' + text_node[0].firstChild.nodeValue;
			}

			if(type_node[0].firstChild.nodeValue == '2') {
				put += '<b>' + fromname_node[0].firstChild.nodeValue + '</b> commented on your activity';
			}

			if(type_node[0].firstChild.nodeValue == '3') {
				put += '<b>' + fromname_node[0].firstChild.nodeValue + '</b> ' + text_node[0].firstChild.nodeValue;
			}

			if(type_node[0].firstChild.nodeValue == '4') {
				put += '<b>' + fromname_node[0].firstChild.nodeValue + '</b> replied to your comment';
			}

			if(type_node[0].firstChild.nodeValue == '5') {
				put += '<b>' + fromname_node[0].firstChild.nodeValue + '</b> posted something on your wall';
			}

			if(type_node[0].firstChild.nodeValue == '6') {
				put += '<b>' + fromname_node[0].firstChild.nodeValue + '</b> ' + text_node[0].firstChild.nodeValue;
			}

                        if(type_node[0].firstChild.nodeValue == '7') {
                                put += '<b>' + fromname_node[0].firstChild.nodeValue + '</b> ' + text_node[0].firstChild.nodeValue;
                        }

                        if(type_node[0].firstChild.nodeValue == '8') {
                                put += '<b>' + fromname_node[0].firstChild.nodeValue + '</b> ' + text_node[0].firstChild.nodeValue;
                        }


			if(type_node[0].firstChild.nodeValue == '9') {
				put += '<b>' + fromname_node[0].firstChild.nodeValue + '</b> ' + text_node[0].firstChild.nodeValue;
			}


                        if(parseInt(type_node[0].firstChild.nodeValue) > 9) {
                                put += '<b>' + fromname_node[0].firstChild.nodeValue + '</b> ' + text_node[0].firstChild.nodeValue;
                        }


			put += ' &nbsp;<span style="font-size: 9px; margin-top: 3px;color: #aaa;">' + nottime_node[0].firstChild.nodeValue + '</span></div>';
			put += '</td></tr>';
		}
		put += '<tr><td onclick="closeOpen(); location.href=\'/notifications\';"><center><a href="/notifications" onclick="closeOpen();" style="padding: 10px; font-size: 10px; "><b>SHOW ALL</b></a></center></td></tr>';
		document.getElementById('pnavinotificationstable').innerHTML = put;
		document.getElementById('notificationbadge').style.display = 'none';
		document.getElementById('notificationbadge').innerHTML = '0';
		newnotifications = '0';
		setTitle();
	}
}


function getComments(id) {
        //if(docomment == '0')
        //{
                //docomment = '1';
                //document.getElementById('commentbutton').innerHTML = '<img src="/ajax-loader.gif">';
                if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
			var gofrom = document.getElementById('latestcomment').value;
			if(gofrom == '0') { gofrom = '1'; }
                        receiveReq.open("GET", '/backend/comments.php?id=' + id + '&from=' + gofrom, true);
                        receiveReq.onreadystatechange = handleGetComments;
                        receiveReq.send(null);
                }
        //}
}

function handleGetComments() {
        if (receiveReq.readyState == 4)
        {
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("comment");
                var n_messages = topnavi_nodes.length;
		var appeararray = new Array();
		var elementcount = 0;
                for (k = 0; k < n_messages; k++) {
                        var commentid_node = topnavi_nodes[k].getElementsByTagName("commentid");
                        var fromname_node = topnavi_nodes[k].getElementsByTagName("fromname");
                        var fromuserid_node = topnavi_nodes[k].getElementsByTagName("fromuserid");
                        var comment_node = topnavi_nodes[k].getElementsByTagName("commenttext");
                        var date_node = topnavi_nodes[k].getElementsByTagName("date");
                        var reply_node = topnavi_nodes[k].getElementsByTagName("reply");
			var photourl_node = topnavi_nodes[k].getElementsByTagName("photourl");
                        if(comment_node[0].firstChild.nodeValue)
			{
				comment_node[0].normalize();
				if(reply_node[0].firstChild.nodeValue != '0')
				{
					var replytarget = 'commentr-' + reply_node[0].firstChild.nodeValue;
					document.getElementById(replytarget).innerHTML = '<div id="comment-' + commentid_node[0].firstChild.nodeValue + '" class="container4" style="display: none;width: 670px;margin-top: 5px;"><table border="0" cellpadding="0" cellspacing="0"><tr><td valign="top" style="padding: 10px; font-size: 11px;line-height: 20px;"><b><a href="/artist/' + fromuserid_node[0].firstChild.nodeValue + '">' + fromname_node[0].firstChild.nodeValue + '&nbsp; </a></b>' + comment_node[0].firstChild.nodeValue + '</td></tr></table><div style="position: absolute; margin-top: -23px; margin-left: 627px; font-size: 9px;"><a href="javascript:void(0);" onclick="doReply(\'' + commentid_node[0].firstChild.nodeValue + '\');" class="ggray">Reply</a></div></div><div id="commentreplyeditor-' + commentid_node[0].firstChild.nodeValue + '"></div><div id="commentr-' + commentid_node[0].firstChild.nodeValue + '"></div>' + document.getElementById(replytarget).innerHTML;
					appeararray[elementcount] = 'comment-' + commentid_node[0].firstChild.nodeValue;
					elementcount++;

				} else {
					document.getElementById('commentcontainer').innerHTML = '<div id="comment-' + commentid_node[0].firstChild.nodeValue + '" class="container7" style="display: none;width: 670px;"><table border="0" cellpadding="0" cellspacing="0"><tr><td valign=\"top\" style="padding: 10px;"><img src="' + photourl_node[0].firstChild.nodeValue + '" width="50" style=""></td><td valign="top" style="padding: 10px; font-size: 13px;"><div style="margin-bottom: 5px;"><b><a href="/artist/' + fromuserid_node[0].firstChild.nodeValue + '">' + fromname_node[0].firstChild.nodeValue + '</a></b></div>' + comment_node[0].firstChild.nodeValue + '</td></tr></table><div style="position: absolute; margin-top: -23px; margin-left: 627px; font-size: 11px;"><a href="javascript:void(0);" onclick="doReply(\'' + commentid_node[0].firstChild.nodeValue + '\');" class="ggray">Reply</a></div></div><div id="commentreplyeditor-' + commentid_node[0].firstChild.nodeValue + '"></div><div id="commentr-' + commentid_node[0].firstChild.nodeValue + '"></div>' + document.getElementById('commentcontainer').innerHTML;
					appeararray[elementcount] = 'comment-' + commentid_node[0].firstChild.nodeValue;
					elementcount++;
				}
				if(parseInt(document.getElementById('latestcomment').value) < parseInt(date_node[0].firstChild.nodeValue)) { document.getElementById('latestcomment').value = date_node[0].firstChild.nodeValue; }
                        }
		}

                if(reply != '0')
                {
                        var button = 'commentbutton-' + reply;
                } else {
                        var button = 'commentbutton';
                }

		//document.getElementById(button).innerHTML = 'Write';
                //docomment = '0';
		Effect.multiple(appeararray,Effect.Appear);
		Effect.multiple(appeararray,Effect.Highlight);
        }
}


// FOR ARTIST //

function deleteNews(id) {
        var newscontainer = 'newscontainer-f-' + id;
        Effect.Fade(newscontainer, { duration: 0.5 });

                if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                        receiveReq.open("GET", '/backend/deletenews.php?id=' + id, true);
                        receiveReq.onreadystatechange = handleDeleteNews;
                        receiveReq.send(null);
                }
}

function handleDeleteNews() {
        if (receiveReq.readyState == 4) {
        }
}

function clearStatus() {
        //Effect.Fade('statustext', { duration: 0.3 });
        document.getElementById('statustext').innerHTML = '';
        //document.getElementById('statustext').style.display = 'block';

                if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                        receiveReq.open("GET", '/backend/deletestatus.php', true);
                        receiveReq.onreadystatechange = handleDeleteNews;
                        receiveReq.send(null);
                }

}

function writeWall(id) {
        var msg = document.getElementById('walltext').value;
	var p_realname = document.getElementById('p_realname').value;
	var p_userid = document.getElementById('p_userid').value;
	var auth_username = document.getElementById('auth_realname').value;
	var auth_userid = document.getElementById('auth_userid').value;
	globaltimeloop = globaltimeloop + 1;
	var time = globaltimeloop;
        document.getElementById('walltext').focus();
	if(document.getElementById('wallempty') != null) {
		document.getElementById('wallempty').style.display = 'none';
	}
        if(document.getElementById('emptywall') != null) { document.getElementById('newsdiv').innerHTML = ''; }
        document.getElementById('newsdiv').innerHTML = '<div class="container2news" id="wallpost-' + time + '" style="display: none;"><table border="0" cellpadding="0" width="100%" cellspacing="0"><tr><td valign="top" style="padding: 10px; border-right: 1px solid #eee;" width="50"><img src="" width="50"></td><td valign="top" style="padding: 5px 10px 10px 10px; font-size: 13px;"><div style="margin-bottom: 5px;"><b><a href="/artist/"></a></b></div><div style="margin-bottom: 5px;"><b><a href="/artist/"></a></b>&nbsp; ' + nl2br(msg,false) + '</div><div title="20120722 01:29:21" style="font-size: 11px; margin: 3px 0px 0px 0px; color: #aaa;"><img src="/icons/comment.png" style="opacity: .6; position: relative; top: 3px;">&nbsp; 1 second ago</div></td></tr></table></div>' + document.getElementById('newsdiv').innerHTML;
        Effect.Appear('wallpost-' + time, { duration: 0.7 });
	if(auth_userid && auth_userid == p_userid) {
                document.getElementById('walltext').value = 'What\'s on your mind?';
        } else { 
                document.getElementById('walltext').value = 'Write on ' + p_realname + '\'s wall';
        }
}

function forceLoad(what) {
	what = '#!' + what;
	if(what == currentAnchor) {
		currentAnchor = 'foo';
		checkAnchor();
	}
}

function endSelProfilePic() {
                                location.href = location.href;
                
}

function changePic() {
        document.getElementById('lightsoff').style.display = 'block';
        document.getElementById('fwindowcontent').innerHTML = '<img src="/unknown.jpg" class="sqthumb" id="profilepreview" style="float: right; margin: 10px 10px 30px 30px;"><div style="margin-top: 0px; font-weight: bold; font-size: 17px;">Change profile picture</div><div style="margin: 15px 0px 0px 0px; font-size: 13px; line-height: 18px;"><b>Rules for profile pictures:</b><ul><li>You must own the copyright of the image or have a permission from the owner</li><li>A profile picture must be a portrait of you</li><li>Profile picture should be 330 pixels wide and not more than 400px high.</li></ul></div><iframe frameborder="0" scrolling="no" src="/backend/profilepicupload.php" style="border: 0px;" border="0" width="350" height="50"></iframe><div style="font-weight: bold; margin: 10px 0px 10px 0px;">Edit thumbnail</div>';
	
		document.getElementById('fwindowcontent').innerHTML += '<div id="thumbiframe"></div>';
		        Effect.Appear('floatingwindow', { duration: 0.4 });
}

// FOR PRINTS

	var setspan = 'featured';

	var setartist = 'all';
	var setcolor = 'all';
	var setsize = 'all';
	var settag = 'all';

	var color_selected = '';
	var tag_selected = ''; 
	var size_selected = '';

	var nodisablecolor = '0';
	var nodisabletags = '0';
	var nodisableartists = '0';

	var page = 1;
	var nextpageenabled = 1;
	var prevpageenabled = 1;

function setArtist() {
        if(document.getElementById('which_artist').value != '') {
                setartist = document.getElementById('which_artist').value;
        }
	nodisableartists = '1';
	updatePrints();
}

function setSpan() {
	if(document.getElementById('which_featured').checked == 1) {
		setspan = 'featured';
	}
	
	if(document.getElementById('which_new').checked == 1) { 
		setspan = 'new';
	}
	page = '1';
	updatePrints();
}

function setTag(tag,id) {
        var prevtag = settag;
        if(settag != 'all') {
                document.getElementById(tag_selected).setAttribute("class", "button4");
		tag_selected = '';
                settag = 'all';
        }
        if(tag != prevtag)
        {
                document.getElementById(id).setAttribute("class", "button4marked");
                tag_selected = id;
                settag = tag;
        }
	nodisableartists = '1';
	nodisabletags = '1';
        updatePrints();
}

function setSize(size) {

        var prevsize = setsize;
	var sizebutton = 'sizebutton' + size;

        if(setsize != 'all') {
                document.getElementById(size_selected).setAttribute("class", "button4");
                setsize = 'all';
		size_selected = '';
        }

        if(size != prevsize)
        {
                document.getElementById(sizebutton).setAttribute("class", "button4marked");
                size_selected = sizebutton;
                setsize = size;
        }
	nodisableartists = '1';
	nodisablecolor = '1';
        updatePrints();
}

function setColor(color,id,button) {
	var disabled = 'colorbutton' + color + 'disabled';
	if(document.getElementById(id).getAttribute("class") != disabled) {
		var prevcolor = setcolor;
		if(setcolor != 'all') {
			var deselectclass = 'colorbutton' + setcolor;
			document.getElementById(color_selected).setAttribute("class", deselectclass);
			setcolor = 'all';
			color_selected = '';
		} 
		if(color != prevcolor)
		{
			document.getElementById(id).setAttribute("class", button);
			color_selected = id;
			setcolor = color;
		}
		nodisableartists = '1';
		nodisablecolor = '1';
		updatePrints();
	}
}

function nextPage() {
	if(nextpageenabled == '1') {
		page = parseInt(page) + 1;
		updatePrints();
	}
}

function prevPage() {
	if(prevpageenabled == '1') {
		if(parseInt(page) > 1) {
			page = parseInt(page) - 1;
			updatePrints();
		}
	}
}

function updatePrints() {
	if(nodisablecolor == '0') {
		} else {
		nodisablecolor = '0';
	}
		var sendstring = '/backend/prints.php?span=' + setspan + '&artist=' + setartist + '&color=' + setcolor + '&size=' + setsize + '&tags=' + settag;
	if(nodisabletags == '0') {
		document.getElementById('tagtarget').innerHTML = '<img src="/ajax-loader.gif" style="margin: 10px 0px 0px 10px;">';
	}
        if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                receiveReq.open("GET", sendstring, true);
                receiveReq.onreadystatechange = handleUpdatePrints;
                receiveReq.send(null);
        }
}

function handleUpdatePrints() {
        if (receiveReq.readyState == 4)
        {
		// TAGS

                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("ptag");
                var n_messages = topnavi_nodes.length;
                var put = '';
                var taghit = 0;
                for (k = 0; k < n_messages; k++) {
                        var tagname_node = topnavi_nodes[k].getElementsByTagName("tagname");
			taghit++;
			var tagbutton = 'tagbutton-' + tagname_node[0].firstChild.nodeValue;
			if(tag_selected == tagbutton) { var tagselected = 'marked'; } else { var tagselected = ''; }
			put += '<nobr><span class="button4' + tagselected + '" id="tagbutton-' + tagname_node[0].firstChild.nodeValue + '" onclick="setTag(\'' + tagname_node[0].firstChild.nodeValue + '\',\'tagbutton-' + tagname_node[0].firstChild.nodeValue + '\');">' + tagname_node[0].firstChild.nodeValue + '</span>&nbsp;&nbsp;</nobr> ';
                }
                if(nodisabletags == '0') {
			document.getElementById('tagtarget').innerHTML = put;
		} else {
			nodisabletags = '0';
		}

		// PHOTOGRAPHERS

                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("pphotographer");
                var n_messages = topnavi_nodes.length;
		put = '<select onchange="setArtist();" name="artist_id" id="which_artist"><option value="0">All artists</option>';
                for (k = 0; k < n_messages; k++) {
                        var userid_node = topnavi_nodes[k].getElementsByTagName("userid");
			var realname_node = topnavi_nodes[k].getElementsByTagName("realname");
			put += '<option value="' + userid_node[0].firstChild.nodeValue + '"';
			if(userid_node[0].firstChild.nodeValue == setartist) {
				put += ' selected';
			}
			put += '>' + realname_node[0].firstChild.nodeValue + '</option>';
                }
		put += '</select>';
		if(nodisableartists == '0') { document.getElementById('artistspan').innerHTML = put; } else { nodisableartists = '0'; }


		// COLOR

                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("pcolor");
                var n_messages = topnavi_nodes.length;
                var put = '';
                var taghit = 0;
		var foundmarked = '0';
                for (k = 0; k < n_messages; k++) {
                        var color_node = topnavi_nodes[k].getElementsByTagName("color");
			var activatebutton = 'color-'+ color_node[0].firstChild.nodeValue;
			if(document.getElementById(activatebutton) != null) {
				var activateclass = 'colorbutton' + color_node[0].firstChild.nodeValue;
				if(color_selected == activatebutton) { foundmarked = '1'; activateclass += 'marked'; }
				document.getElementById(activatebutton).setAttribute("class", activateclass);
			}
		}

		if(foundmarked == '0' && color_selected != '') {
			color_selected = '';
			setcolor = 'all';
		}

		// SIZE

                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("psize");
                var n_messages = topnavi_nodes.length;
                var put = '';
                var taghit = 0;
                var highest = 0;
                for (k = 0; k < n_messages; k++) {
                        var size_node = topnavi_nodes[k].getElementsByTagName("size");
                        if(parseInt(size_node[0].firstChild.nodeValue) > parseInt(highest))    
                        {
                                highest = size_node[0].firstChild.nodeValue;
                        }
                }
                if(parseInt(highest) > 0) {
                        var loop = 1;
                        while(parseInt(loop) <= parseInt(highest)) {
                                var activatebutton = 'sizebutton'+ loop;
                                var activateclass = 'button4';
                                if(size_selected == activatebutton) { activateclass += 'marked'; }
                                document.getElementById(activatebutton).setAttribute("class", activateclass);
                                loop++;
                        }
                }


		// THUMBS

                var topnavi_nodes = xmldoc.getElementsByTagName("thumb");
                var n_messages = topnavi_nodes.length;
                var put = '<table border="0" width="100%" cellpadding="25">';
                var hit = 0;
		var hitdisplay = 0;
		var totalhit = 0;
		var ignored = 0;
		var low = (30*page)-30;
		var high = low + 30;
		if(parseInt(low) < 1) {
			document.getElementById('prevpagebutton').setAttribute("class", "buttonv5disabled");
			prevpageenabled = '0';
		} else {
			document.getElementById('prevpagebutton').setAttribute("class", "buttonv5");
			prevpageenabled = '1';
		}
		document.getElementById('page_from').innerHTML = low;
		document.getElementById('page_to').innerHTML = high;
                for (k = 0; k < n_messages; k++) {
			totalhit++;
			if(totalhit > low && totalhit <= high) {
				hit++;
				hitdisplay++;
                        	if(hit == 1) {
                                	put += '<tr>';
                        	}
                        	var picid_node = topnavi_nodes[k].getElementsByTagName("picid");
                        	put += '<td width="33%"><center><a href="javascript:void(0);" onclick="showImage(\'' + picid_node[0].firstChild.nodeValue + '\');"><img src="http://1x.com/OEfullSize/medium/' + picid_node[0].firstChild.nodeValue + '.jpg" class="miniprintspic" style="max-width: 240px; max-height: 240px; " border="0"></a></center></td>';

				if(hit == 3) {
					put += '</tr>'; hit = 0;
				}
			} else {
				ignored++;
			}
		}
		if(parseInt(hitdisplay) > 29) {
			document.getElementById('nextpagebutton').setAttribute("class", "buttonv5");
			nextpageenabled = '1';
		} else {
			document.getElementById('nextpagebutton').setAttribute("class", "buttonv5disabled");
			nextpageenabled = '0';
		}
		put += '</table>';

		if(totalhit) {
			document.getElementById('printbrowser').innerHTML = put;
		} else {
			//document.getElementById('printbrowser').innerHTML = '<div style="padding: 20px;">No images found with the selected filters. Click here to reset them.</div>';
			setcolor = 'all';
			color_selected = '';
			settag = 'all';
			tag_selected = '';
			setsize = 'all';
			size_selected = '';
			nodisableartists = '1';
			updatePrints();
		}
	}
}

var selected2 = '0';
var swappic;

function startAutoswap() {
	if(document.getElementById('push_iframe') != null) {
	selected2 = '0';
	if(swappic) { clearInterval(swappic); }
	swappic = setInterval('autoSwap();', 4000);
	}
}

function autoSwap() {
	if(document.getElementById('prints_pc') != null) {
		var next = parseInt(selected2) + 1;
		if(next == document.getElementById('prints_pc').value) {
			var next = '0';
		}
		swapTo2(next);
	}
}

function swapTo2(id) {
        if(id != selected2)
        {
                var source2 = 'swapbox-' + selected2;
                var target = 'swapbox-' + id;
		var hideimage = 'image-' + selected2;
		var showimage = 'image-' + id;
		document.getElementById('frame').onclick = function () { showImage(printspic[id]); }; 
                document.getElementById(source2).setAttribute("class", "swapbox");
                document.getElementById(target).setAttribute("class", "swapboxactive");
		document.getElementById(hideimage).style.display = 'none';
		Effect.Appear(showimage, { duration: 0.5 });
		selected2 = id;
        }
}

function swapTo(id) {
	if(swappic) { clearInterval(swappic); }
        if(id != selected2)
        {
                var source2 = 'swapbox-' + selected2;
                var target = 'swapbox-' + id;
                var hideimage = 'image-' + selected2;
                var showimage = 'image-' + id;
		document.getElementById('frame').onclick = function () { showImage(printspic[id]); }; 
                document.getElementById(source2).setAttribute("class", "swapbox");
                document.getElementById(target).setAttribute("class", "swapboxactive");
                document.getElementById(hideimage).style.display = 'none';
                Effect.Appear(showimage, { duration: 0.5 });
                selected2 = id;
        }
}

	var cat_selected = '';
	var tag_selected = '';
	var photographer_selected = '';
	var selected = '';

	var header = '';

	var morelink = '';

function catSwap(catid,catshort,catname) {
	if(selected != '') {
		document.getElementById(selected).setAttribute("class", "button4");
	}
	var target = 'catbutton-' + catid;
	document.getElementById(target).setAttribute("class", "button4marked");
	document.getElementById('mini-target').innerHTML = '<br /><br /><center><img src="/ajax-loader.gif"></center>';
	selected = 'catbutton-' + catid;
	header = catname + ' prints';
	morelink = '/photos/' + catshort + '/prints';
        if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
       		receiveReq.open("GET", '/backend/prints_cat.php?cat=' + catid, true);
        	receiveReq.onreadystatechange = handleCatSwap;
        	receiveReq.send(null);
        }
}

function handleCatSwap() {
        if (receiveReq.readyState == 4)
        {
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("thumb");
                var n_messages = topnavi_nodes.length;
		var put = '<div style="font-family: arial; font-weight: bold; display: none;" id="minipics"><div style="margin: 15px; color: #888;">' + header + '</div><table border="0" width="100%" cellpadding="10">';
		var hit = 0;
                for (k = 0; k < n_messages; k++) {
                        hit++;
			if(hit == 1) {
				put += '<tr>';
			}
                        var picid_node = topnavi_nodes[k].getElementsByTagName("picid");
			
			put += '<td width="20%"><center><a href="javascript:void(0);" onclick="showImage(\'' + picid_node[0].firstChild.nodeValue + '\');"><img src="http://1x.com/pictures/' + picid_node[0].firstChild.nodeValue + '-thumb.jpg" class="miniprintspic" border="0"></a></center></td>';
			if(hit == 3) {
				put += '</tr>';
				hit = 0;
			}
		}
		put += '</table><div style="margin: 10px 30px 30px 0px;" align="right"><span class="buttonv2" onclick="location.href=\'' + morelink + '\';">See more</span></div>';
		document.getElementById('mini-target').innerHTML = put;
		Effect.Appear('minipics');
	}
}

function tagSwap(tagid) { 
        if(selected != '') {
                document.getElementById(selected).setAttribute("class", "button4");
        }
        var target = 'tagbutton-' + tagid;
        document.getElementById(target).setAttribute("class", "button4marked");
	document.getElementById('mini-target').innerHTML = '<br /><br /><center><img src="/ajax-loader.gif"></center>';
        selected = 'tagbutton-' + tagid;
	header = 'Prints tagged with ' + tagid;
	morelink = '/photos/tag/' + tagid + '/prints';
        if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                receiveReq.open("GET", '/backend/prints_tag.php?tag=' + tagid, true);
                receiveReq.onreadystatechange = handleTagSwap;
                receiveReq.send(null);
        }
}

function handleTagSwap() {
        if (receiveReq.readyState == 4)
        {
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("thumb");
                var n_messages = topnavi_nodes.length;
		var put = '<div style="font-family: arial; font-weight: bold; display: none;" id="minipics"><div style="margin: 15px; color: #888;">' + header + '</div><table border="0" width="100%" cellpadding="10">';
                var hit = 0;
                for (k = 0; k < n_messages; k++) {
                        hit++;
                        if(hit == 1) {
                                put += '<tr>';
                        }
                        var picid_node = topnavi_nodes[k].getElementsByTagName("picid");

			put += '<td width="20%"><center><a href="javascript:void(0);" onclick="showImage(\'' + picid_node[0].firstChild.nodeValue + '\');"><img src="http://1x.com/pictures/' + picid_node[0].firstChild.nodeValue + '-thumb.jpg" class="miniprintspic" border="0"></a></center></td>';
                        if(hit == 3) {
                                put += '</tr>';
                                hit = 0;
                        }
                }
		put += '</table><div style="margin: 10px 30px 30px 0px;" align="right"><span class="buttonv2" onclick="location.href=\'' + morelink + '\';">See more</span></div>';
                document.getElementById('mini-target').innerHTML = put;
		Effect.Appear('minipics');
        }
}

function photographerSwap(userid,realname) {
        if(selected != '') {
                document.getElementById(selected).setAttribute("class", "button4");
        }
        var target = 'photographerbutton-' + userid;
        document.getElementById(target).setAttribute("class", "button4marked");
        selected = 'photographerbutton-' + userid;
	header = 'Prints by ' + realname;
	morelink = '/photos/portfolio/' + userid + '/prints';
        if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                receiveReq.open("GET", '/backend/prints_photographer.php?user=' + userid, true);
                receiveReq.onreadystatechange = handlePhotographerSwap;
                receiveReq.send(null);
        }
}

function handlePhotographerSwap() {
        if (receiveReq.readyState == 4)
        {
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("thumb");
                var n_messages = topnavi_nodes.length;
                var put = '<div style="font-family: arial; font-weight: bold; display: none;" id="minipics"><div style="margin: 15px; color: #888;">' + header + '</div><table border="0" width="100%" cellpadding="10">';
                var hit = 0;
                for (k = 0; k < n_messages; k++) {
                        hit++;
                        if(hit == 1) {
                                put += '<tr>';
                        }
                        var picid_node = topnavi_nodes[k].getElementsByTagName("picid");
			put += '<td width="20%"><center><a href="javascript:void(0);" onclick="showImage(\'' + picid_node[0].firstChild.nodeValue + '\');"><img src="http://1x.com/pictures/' + picid_node[0].firstChild.nodeValue + '-thumb.jpg" class="miniprintspic" border="0"></a></center></td>';

                        if(hit == 3) {
                                put += '</tr>';
                                hit = 0;
                        }
                }
		put += '</table><div style="margin: 10px 30px 30px 0px;" align="right"><span class="buttonv2" onclick="location.href=\'' + morelink + '\';">See more</span></div>';
                document.getElementById('mini-target').innerHTML = put;
		Effect.Appear('minipics');
        }
}

var buyprint_id = '0';
var buyprint_size = '0';

function showImage(id) {
	Effect.Appear('shippingloc');
	Effect.ScrollTo('shippingloc', { duration: 0.5 });
}

function handleShowImage() {
	if (receiveReq.readyState == 4)
	{
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("photodata");
                var n_messages = topnavi_nodes.length;
                var put = '';
                var taghit = 0;
                for (k = 0; k < n_messages; k++) {
                        var picid_node = topnavi_nodes[k].getElementsByTagName("picid");
			var picname_node = topnavi_nodes[k].getElementsByTagName("picname");
			var realname_node = topnavi_nodes[k].getElementsByTagName("realname");
			var height_node = topnavi_nodes[k].getElementsByTagName("height");
			var width_node = topnavi_nodes[k].getElementsByTagName("width");
			var printsize_node = topnavi_nodes[k].getElementsByTagName("printsize");

                        var res1_node = topnavi_nodes[k].getElementsByTagName("res1");
			var res2_node = topnavi_nodes[k].getElementsByTagName("res2");
			var res3_node = topnavi_nodes[k].getElementsByTagName("res3");
			var res4_node = topnavi_nodes[k].getElementsByTagName("res4");

			put += '<center><div id="imgcontainer" class="viewmode" style="height: ' + height_node[0].firstChild.nodeValue + ';width: ' + width_node[0].firstChild.nodeValue + ';background-image: url(\'http://imghost.1x.com/' + picid_node[0].firstChild.nodeValue + '.jpg\');">&nbsp;</div></center><div style="font-size: 13px; margin: 25px 0px 0px 0px;">&copy; ' + realname_node[0].firstChild.nodeValue + '</div><div style="margin-top: 10px; border-top: 1px solid #ddd; padding: 15px 0px 0px 0px; margin-bottom: 10px;"><table width="100%" border="0"><tr><td id="sizebuttontd">';
if(document.getElementById('shipping_ok').value == '1') { 			
			put += '<table border="0"><tr><td style="font-size: 12px; font-weight: bold;">AVAILABLE IN: &nbsp; &nbsp; </td>';
			var sizeloop = '0';
			while(sizeloop != printsize_node[0].firstChild.nodeValue) {
				sizeloop++;
if(sizeloop == '1') { var thumbwidth = res1_node[0].firstChild.nodeValue; var sizename = 'Small'; var sizeprice = '49'; }
if(sizeloop == '2') { var thumbwidth = res2_node[0].firstChild.nodeValue; var sizename = 'Medium'; var sizeprice = '99'; }
if(sizeloop == '3') { var thumbwidth = res3_node[0].firstChild.nodeValue; var sizename = 'Large'; var sizeprice = '149'; }
if(sizeloop == '4') { var thumbwidth = res4_node[0].firstChild.nodeValue; var sizename = 'X-Large'; var sizeprice = '199'; }
if(sizeloop == '19') { var thumbwidth = res19_node[0].firstChild.nodeValue; var sizename = 'Small'; var sizeprice = '79'; }
if(sizeloop == '20') { var thumbwidth = res20_node[0].firstChild.nodeValue; var sizename = 'Medium'; var sizeprice = '99'; }
if(sizeloop == '21') { var thumbwidth = res21_node[0].firstChild.nodeValue; var sizename = 'Large'; var sizeprice = '159'; }
if(sizeloop == '22') { var thumbwidth = res22_node[0].firstChild.nodeValue; var sizename = 'X-Large'; var sizeprice = '349'; }
if(sizeloop == '11') { var thumbwidth = res11_node[0].firstChild.nodeValue; var sizename = 'Small'; var sizeprice = '99'; }
if(sizeloop == '12') { var thumbwidth = res12_node[0].firstChild.nodeValue; var sizename = 'Medium'; var sizeprice = '179'; }
if(sizeloop == '13') { var thumbwidth = res13_node[0].firstChild.nodeValue; var sizename = 'Large'; var sizeprice = '279'; }
if(sizeloop == '14') { var thumbwidth = res14_node[0].firstChild.nodeValue; var sizename = 'X-Large'; var sizeprice = '579'; }
if(sizeloop == '15') { var thumbwidth = res15_node[0].firstChild.nodeValue; var sizename = 'Small'; var sizeprice = '99'; }
if(sizeloop == '16') { var thumbwidth = res16_node[0].firstChild.nodeValue; var sizename = 'Medium'; var sizeprice = '179'; }
if(sizeloop == '17') { var thumbwidth = res17_node[0].firstChild.nodeValue; var sizename = 'Large'; var sizeprice = '279'; }
if(sizeloop == '18') { var thumbwidth = res18_node[0].firstChild.nodeValue; var sizename = 'X-Large'; var sizeprice = '579'; }
if(sizeloop == '23') { var thumbwidth = res23_node[0].firstChild.nodeValue; var sizename = 'Small'; var sizeprice = '69'; }
if(sizeloop == '24') { var thumbwidth = res24_node[0].firstChild.nodeValue; var sizename = 'Medium'; var sizeprice = '139'; }
				put += '<td width="80"><div id="sizebutton' + sizeloop + '" class="sizebutton" onclick="previewPrint(\'' + picid_node[0].firstChild.nodeValue + '\',\'' + sizeloop + '\',\'' + thumbwidth + '\');">' + sizename + '<div style="font-weight: normal; font-size: 12px; margin-top: 5px;">' + sizeprice + '&euro;</div></div></td>';
			}
			put += '</tr></table>';
} else { 
			put += '<div style="padding: 5px 10px 5px 10px; border: 1px solid #F6E3CE; background: #FBF5EF;margin: 2px 25px 0px 0px; font-size: 13px; color: #666; line-height: 20px;">Unfortunately we are not yet able to send prints to <b></b>. We are working hard on making this possible.</div>';
}
			put += '</td><td width="100"><center><div id="buybutton" class="buybutton" style="display: none;" onclick="buyPrint();">BUY</div><div onclick="location.href=\'/shoppingcart\';" id="checkoutbutton2" class="checkoutbutton" style="display: none;">CHECK<br />OUT</div></center></td><td width="60" align="right"><div class="continueshoppingbutton" onclick="closeShowImage()">CONTINUE<br />SHOPPING</div></td></tr></table></div>';
		}
        	document.getElementById('fwindowcontent').innerHTML = put;
	}
}

var sizeactive = '0';

function buyPrint(buyprint_id,buyprint_country) {
	var buyprint_size = selectedsize;
	if(buyprint_size != '0' && buyprint_id != '0') {
		returnToImage();
		document.getElementById('printconfirm').innerHTML = '<div style="font-size: 13px; line-height: 20px;border-bottom: 1px solid #eee; padding: 10px; background: #E0F8E0;"><b>One item successfully placed in your shopping cart!</b><div style="margin-top: 5px;">You can now either <b><a href="/shoppingcart">check out</a></b> or <b><a href="javascript:history.go(-1)">continue shopping</a></b>.</div></div>';
		addToCart(buyprint_size,buyprint_id,buyprint_country);
	}
}

function returnToImage() {
                document.getElementById('buybutton').style.display = 'none';
                document.getElementById('printpreview2').style.display = 'none';
                document.getElementById('printpreview').style.display = 'block';
                document.getElementById('printpreviewwall').style.display = 'none';
                var deactivate = 'sizebutton-' + selectedsize;
                document.getElementById(deactivate).setAttribute("class","sizebutton");
                selectedsize = '0';
		document.getElementById('returnImage').style.display = 'none';
}

function previewPrint(id,size,thumbwidth) {
		if(sizeactive != '0') {
			var deactivate = 'sizebutton' + sizeactive;
			document.getElementById(deactivate).setAttribute("class","sizebutton");
		}

		buyprint_size = size;
		buyprint_id = id;

		var top = 130-thumbwidth;

		thumbwidth = thumbwidth*2.5;

		Effect.Appear('buybutton');

		var sizebutton = 'sizebutton' + size;

		document.getElementById(sizebutton).setAttribute("class", "sizebuttonactive");
                document.getElementById('imgcontainer').style.backgroundImage = 'url("/img/wallpreview.jpg")';
                document.getElementById('imgcontainer').style.height = '487px';
		document.getElementById('imgcontainer').style.width = '700px';
		if(sizeactive == '0') {
			document.getElementById('imgcontainer').innerHTML = '<img class="wallpreviewpic" id="smallpicture" src="http://1x.com/OEfullSize/medium/' + id + '.jpg" style="position: relative; top: ' + top + 'px; right: 50px;display: none;">';
			document.getElementById('smallpicture').style.width = thumbwidth + 'px';
			Effect.Appear('smallpicture');
		} else {
			$('smallpicture').morph('width: ' + thumbwidth + 'px; top: ' + top + 'px;');
		}
		sizeactive = size;
}
function closeShowImage() {
        // Effect.Fade('floatingwindow', { duration: 0.2 });
        document.getElementById('floatingwindow').style.display = 'none';
        document.getElementById('lightsoff').style.display = 'none';
}

// FOR TOPNAVI


function topSearchFindPre() {
        var search_q = document.getElementById('search_q').value;
        if(search_q != '' && search_q != 'Search 1x.com') {
		document.getElementById('searchstatus').innerHTML = 'Searching for "' + search_q + '"';
	}
        clearInterval(topsearchtimeout);
        topsearchtimeout = setTimeout('topSearchFind()',200);
}

function topSearchFind() {
	var search_q = document.getElementById('search_q').value;
	if(lastsearch != search_q) {
		lastsearch = search_q;
		if(search_q != '' && search_q != 'Search 1x.com') {
			if(document.getElementById('topsearchresults').style.display != 'block') {
				document.getElementById('topsearchresults').style.display = 'block';
			}
			if(search_q.length > 0) {
       	         		if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
       	                 		receiveReq.open("GET", '/backend/search.php?q=' + search_q, true);
                        		receiveReq.onreadystatechange = handleTopSearchFind;
                        		receiveReq.send(null);
                		}
			}
		} else {
			document.getElementById('searchstatus').innerHTML = 'Type to start searching for artists or photos';
			document.getElementById('topsearchresultsdiv').innerHTML = '';
		}
	}
}

function stopSearch() {
	document.getElementById('search_q').value = 'Search 1x.com';
	document.getElementById('topsearchresults').style.display = 'none';
	document.getElementById('topsearchresultsdiv').innerHTML = '';
	document.getElementById('searchstatus').innerHTML = 'Type to start searching for artists or photos';
	document.getElementById('search_q').blur();
	lastsearch = '';
}

function handleTopSearchFind() {
        if (receiveReq.readyState == 4)
        {
		var topsearchquery = document.getElementById('search_q').value;
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("search");
                var n_messages = topnavi_nodes.length;
                var put = '';
                var hit = 0;
		searchtoplink = '';
		selsearchhit = '0';
		var photos_count = 0;
		var artists_count = 0;
		var stypecache = '';
                var tophit = '0';
                for (k = 0; k < n_messages; k++) {
                        var link_node = topnavi_nodes[k].getElementsByTagName("link");
                        var type_node = topnavi_nodes[k].getElementsByTagName("type");
                        var photo_node = topnavi_nodes[k].getElementsByTagName("photo");
			var title_node = topnavi_nodes[k].getElementsByTagName("title");
			var stype_node = topnavi_nodes[k].getElementsByTagName("stype");

			if(stype_node[0].firstChild.nodeValue == 'photo') {
				photos_count++;
			}
			if(stype_node[0].firstChild.nodeValue == 'artist') {
				artists_count++;
			}

			if(stypecache != stype_node[0].firstChild.nodeValue && stypecache != '' && artists_count > 0)  {
				hit++;
				put += '<input type="hidden" id="link-' + hit + '" value="/search/artists/' + topsearchquery + '"><div id="hit-' + hit + '" onmousedown="location.href=\'/search/artists/' + topsearchquery + '\';" class="searchr' + sclass + '"><div style="font-size: 13px;">More artists matching ' + topsearchquery + '</div></div>';
			}

			hit++;

			if(hit == 1) { var sclass = 'selected'; selsearchhit = 1; searchtoplink = link_node[0].firstChild.nodeValue; } else { var sclass = 'notselected'; }

			put += '<input type="hidden" id="link-' + hit + '" value="' + link_node[0].firstChild.nodeValue + '"><div id="hit-' + hit + '" onmousedown="location.href=\'' + link_node[0].firstChild.nodeValue + '\';" class="searchr' + sclass + '"><img src="' + photo_node[0].firstChild.nodeValue + '" width="35" style="float: left; margin: 0px 10px 0px 0px;"><div style="font-weight: bold; margin-bottom: 5px; font-size: 13px;">' + title_node[0].firstChild.nodeValue + '</div><div style="font-size: 11px;">' + type_node[0].firstChild.nodeValue + '</div></div>';
			stypecache = stype_node[0].firstChild.nodeValue;
		}
		if(photos_count == 0 && artists_count > 0) {
			hit++;
			put += '<input type="hidden" id="link-' + hit + '" value="/search/artists/' + topsearchquery + '"><div id="hit-' + hit + '" onmousedown="location.href=\'/search/artists/' + topsearchquery + '\';" class="searchr' + sclass + '"><div style="font-size: 13px;">More artists matching ' + topsearchquery + '</div></div>';
		}
		if(photos_count > 0) {
			hit++;
			put += '<input type="hidden" id="link-' + hit + '" value="/search/photos/' + topsearchquery + '"><div id="hit-' + hit + '" onmousedown="location.href=\'/search/photos/' + topsearchquery + '\';" class="searchr' + sclass + '"><div style="font-size: 13px;">More photos matching ' + topsearchquery + '</div></div>';
		}
		document.getElementById('topsearchresultsdiv').innerHTML = put;
	}
}

function topSearchGo() {
	if(searchtoplink != '' && selsearchhit != '0') {
		location.href='' + searchtoplink;
	}
}

function topSearchUp() {
	if(selsearchhit > 1) {
        	var next = selsearchhit - 1;
        	if(document.getElementById('hit-' + next) != null) {
                	document.getElementById('hit-' + selsearchhit).setAttribute("class", "searchrnotselected");
                	document.getElementById('hit-' + next).setAttribute("class", "searchrselected");
			searchtoplink = document.getElementById('link-' + next).value;
			selsearchhit = next;
        	}
	}
}

function topSearchDown() {
	var next = selsearchhit + 1;
	if(document.getElementById('hit-' + next) != null) {
		document.getElementById('hit-' + selsearchhit).setAttribute("class", "searchrnotselected");
		document.getElementById('hit-' + next).setAttribute("class", "searchrselected");
		searchtoplink = document.getElementById('link-' + next).value;
		selsearchhit = next;
	}
}

// FOR FORUM 

function doSearch() {
	var q = document.getElementById('q').value;
	if(q.length > 3) {
		document.getElementById('results').innerHTML = '<img src="/ajax-loader.gif" style="padding: 10px;">';
		if(document.getElementById('results').style.display == 'none') {
			Effect.Appear('results');
		}
        	if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                	receiveReq.open("GET", '/backend/forumsearch.php?q=' + q + '&searchin=' + document.getElementById('searchin').value, true);
                	receiveReq.onreadystatechange = handleDoSearch;
                	receiveReq.send(null);
        	}
	}
}

function handleDoSearch() {
        if (receiveReq.readyState == 4)
        {
                var newmsgarray = new Array();
                var newmsgcount = 0;
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("searchresult");
                var n_messages = topnavi_nodes.length;
                var put = '';
		var hit = 0;
		var tophit = '0';
                for (k = 0; k < n_messages; k++) {
			hit++;
                        var topicname_node = topnavi_nodes[k].getElementsByTagName("topicname");
			var realname_node = topnavi_nodes[k].getElementsByTagName("realname");
			var tophit_node = topnavi_nodes[k].getElementsByTagName("tophit");
			var msg_node = topnavi_nodes[k].getElementsByTagName("msg");
			var sectionname_node = topnavi_nodes[k].getElementsByTagName("sectionname");
			var url_node = topnavi_nodes[k].getElementsByTagName("url");
			var posted_node = topnavi_nodes[k].getElementsByTagName("posted");
			if(tophit_node[0].firstChild.nodeValue == '1' && tophit == '0') {
				tophit = '1';
			}
			if(tophit_node[0].firstChild.nodeValue == '0' && tophit == '1') {
				tophit = '0';
				put += '<div style="font-size: 1px; border-bottom: 1px solid #ddd; margin: 10px 0px 10px 0px;">&nbsp;</div>';
			}
			put += '<div style="cursor: pointer;" onclick="location.href=\'' + url_node[0].firstChild.nodeValue + '\';">';
			if(tophit_node[0].firstChild.nodeValue == '1') {
				put += '<div style="font-weight: bold; font-size: 13px; margin-bottom: 5px;">' + topicname_node[0].firstChild.nodeValue + '</div><div style="color: #777; margin-bottom: 15px; font-size: 13px;">Started by <b>' + realname_node[0].firstChild.nodeValue + '</b> ' + posted_node[0].firstChild.nodeValue + ' in <b>' + sectionname_node[0].firstChild.nodeValue + '</b></div>';
			}
			if(tophit_node[0].firstChild.nodeValue == '0') {
				put += '<div style="font-weight: bold; font-size: 13px; margin-bottom: 5px;">' + topicname_node[0].firstChild.nodeValue + '</div><div style="color: #777; margin-bottom: 5px; font-size: 13px;">Posted by <b>' + realname_node[0].firstChild.nodeValue + '</b> ' + posted_node[0].firstChild.nodeValue + ' in <b>' + sectionname_node[0].firstChild.nodeValue + '</b></div><div style="font-size: 13px; margin-bottom: 15px; color: #999;">' + msg_node[0].firstChild.nodeValue + '</div>';
			}
			put += '</div>';
		}
		if(hit == 0) {
			put += '<div style="padding: 10px;">No posts found!</div>';
		}
		document.getElementById('results').innerHTML = put;
	}
}

function tutorialCreate() {
        var message = document.getElementById('edit').contentWindow.document.body.innerHTML;
	var photoid = document.getElementById('photoid').value;
	if(message != '') {
		if(parseInt(photoid) > 0) {
                        if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                document.getElementById('writebutton').innerHTML = '<img src="/ajax-loader.gif">';
                                sendReq.open("POST", '/backend/forumcreate.php?id=427', true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handleTutorialCreate;
                                var param = 'text=' + encodeURIComponent(message);
                                param += '&subject=Tutorial';
				param += '&photoid=' + encodeURIComponent(photoid);
                                sendReq.send(param);
                        }
		} else {
			alert('You must choose a photo');
		}
	} else {
		alert('No tutorial text found...');
	}
}

function handleTutorialCreate() {
        if (sendReq.readyState == 4) {
                location.href = '/tutorials/created';
        }
}


function forumCreate() {
        var message = document.getElementById('edit').contentWindow.document.body.innerHTML;
        var subject = document.getElementById('subject').value;
	var activesection = document.getElementById('activesectionid').value;
        if(message != '') {
                if(subject != '') {
                        if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                document.getElementById('writebutton').innerHTML = '<img src="/ajax-loader.gif">';
                                sendReq.open("POST", '/backend/forumcreate.php?id=' + activesection, true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handleForumCreate;
                                var param = 'text=' + encodeURIComponent(message);
                                param += '&subject=' + encodeURIComponent(subject);
                                sendReq.send(param);
                        }
                } else {
			document.getElementById('subject').style.background = '#ffeeee';
                        alert("You must write a topic title!");
                }
        } else {
                alert("You must write a message!");
        }
}

function handleForumCreate() {
	if (sendReq.readyState == 4) {
		var activesection = document.getElementById('activesection').value;
		location.href = '/forum/' + activesection + '/createdtopic';
	}
}

function Start() {
  document.getElementById('edit').contentWindow.document.designMode = "on";
  try {
  //document.getElementById('edit').contentWindow.document.execCommand("undo", false, null);
  }  catch (e) {
    alert("Error");
  }
}

function editBold() {
	var edit = document.getElementById("edit").contentWindow;
	edit.focus();
	edit.document.execCommand("bold", false, "");
	edit.focus();
}

function editItalic() {
        var edit = document.getElementById("edit").contentWindow;
        edit.focus();
        edit.document.execCommand("italic", false, "");
        edit.focus();
}

function editUnderline() {
        var edit = document.getElementById("edit").contentWindow;
        edit.focus();
        edit.document.execCommand("underline", false, "");
        edit.focus();
}

function endAddImage() {
        // Effect.Fade('floatingwindow', { duration: 0.2 });
        document.getElementById('floatingwindow').style.display = 'none';
        document.getElementById('lightsoff').style.display = 'none';
}

function doAddImage() {
	var edit = document.getElementById("edit").contentWindow;

		if(document.getElementById('selectedphoto').value != '0') {
			document.getElementById('floatingwindow').style.display = 'none';
			document.getElementById('lightsoff').style.display = 'none';
			//edit.document.execCommand('InsertImage', false, document.getElementById('selectedphotourl').value);
			var ihtml = '<a href="http://1x.com/' + document.getElementById('selectedphoto').value + '" target="new"><img src="' + document.getElementById('selectedphotourl').value + '" border="0"></a>';
			edit.document.execCommand('insertHTML', false, ihtml);
			edit.focus();
		}
}

function addImage() {
	document.getElementById('lightsoff').style.display = 'block';
        document.getElementById('fwindowcontent').innerHTML = '<h2 style="margin: 0px 0px 10px 0px;">Add an image</h2>';
	// <!--<h3><input type="radio" name="type" id="internet"> <label for="internet">&nbsp;From the internet</label></h3><table border="0" cellpadding="0" cellspacing="0"><tr><td><label for="internet">URL to image &nbsp; &nbsp;</label></td><td><input onfocus="document.getElementById(\'internet\').checked = 1;" type="text" id="image_url" class="mailcomposer" value="http://"></td></tr></table><h3><input type="radio" name="type" id="uploaded"> <label for="uploaded">&nbsp;Select from uploaded photos</h3>-->';
	document.getElementById('fwindowcontent').innerHTML += '<input type="hidden" id="selectedphoto" value="0"><input type="hidden" id="selectedphotourl" value="0"><iframe scrolling="yes" frameborder="0" src="/backend/selectphoto.php" style="width: 722px; height: 80%; border: 1px solid #ccc;"></iframe></label>';

	Effect.Appear('floatingwindow', { duration: 0.4 });
}

function showPost(id) {
	var full = 'full-' + id;
	var compressed = 'collapsed-' + id;
	if(document.getElementById(full) != null) {
		document.getElementById(compressed).style.display = 'none';
		Effect.Appear(full, { duration: 0.2 });
	}
}

function gotoPost(id) { 
        var full = 'full-' + id;
	var msg = 'msg-' + id;
	if(document.getElementById(full) == null) {
		showForumPost(id,'1');
	}
	Effect.ScrollTo(msg, { duration:'0.2', offset:-15 });
}

function addQuoteSel(from,postid,userid) {
    var txt;
    
    if (window.getSelection)
    {
    	txt = window.getSelection();
    }
    
    if(txt == '') {
    	if (document.getSelection)
    	{
        	txt = document.getSelection();
    	}
	if(txt == '') {
		if (document.selection)
		{
			txt = document.selection.createRange().text;
		}
	}
    }

	if(parseInt(userid) > 0) { var nextquote = parseInt(document.getElementById('totalquotes').value); nextquote = nextquote + 1; var hiddendiv = '<input type="hidden" id="quoteuserid-' + nextquote + '" value="' + userid + '">'; document.getElementById('totalquotes').value = nextquote; } else { var hiddendiv = ''; }
    
    if(txt)
    {
	document.getElementById('edit').contentWindow.document.getElementById('main').innerHTML += '<br /><div class="forumquote" contenteditable="false"><div contenteditable="false" style="margin-bottom: 10px;"><b>' + from + '</b> wrote <img src="/img/goto.png" onclick="gotoPost(\'' + postid + '\');" class="resize" border="0" style="position: relative; top: 3px; cursor: pointer;">' + hiddendiv + '</div>' +  txt + '</div><br>';
	var button = 'quotesel-' + postid;
	document.getElementById(button).innerHTML = 'Quote added!';
	setTimeout('changeLabel(\'quotesel-' + postid + '\',\'1\');',5000);
    } else {
	alert("No text selected");
    }
}

function addQuote(from,postid,message,userid) {
	var msg = 'msgcontent-' + postid;
	// document.getElementById('message')
	if(parseInt(userid) > 0) { var nextquote = parseInt(document.getElementById('totalquotes').value); nextquote = nextquote + 1; var hiddendiv = '<input type="hidden" id="quoteuserid-' + nextquote + '" value="' + userid + '">'; document.getElementById('totalquotes').value = nextquote; } else { var hiddendiv = ''; }
	document.getElementById('edit').contentWindow.document.getElementById('main').innerHTML += '<div class="forumquote" contenteditable="false"><div contenteditable="false" style="margin-bottom: 10px;"><b>' + from + '</b> wrote <img src="/img/goto.png" class="resize" border="0" onclick="gotoPost(\'' + postid + '\');" style="cursor: pointer; position: relative; top: 3px;">' + hiddendiv + '</div>' + document.getElementById(msg).innerHTML + '</div><br>';
	var button = 'quoteall-' + postid;
	document.getElementById(button).innerHTML = 'Quote added!';
	setTimeout('changeLabel(\'quoteall-' + postid + '\',\'2\');',5000);
}

function changeLabel(id,mode) {
	if(mode == '1') {
		document.getElementById(id).innerHTML = 'Quote selection';
	} else {
		document.getElementById(id).innerHTML = 'Quote all';
	}
}

function forumScroll(what) {
	if(what == 'unread') {
		if(document.getElementById('unread') != null) {
			Effect.ScrollTo('unread', { duration:'0.5', offset:-43 });
		}
	} else {
		var dmsg = 'msg-' + what;
		if(document.getElementById(dmsg) != null) {
			Effect.ScrollTo(dmsg, { duration:'0.5', offset:-43 });
		} else {
			showForumPost(what,'1');
		}
	}
}

var writenew = '0';
var bookmarkbutton = '';
var backtoforumindex = '';

function deletePost(id,mainpost,mail) {

	if(mail == '0') {
        	var agree=confirm("Are you sure you want to delete the comment?");
	}
	if(mail == '1') {
		var agree=confirm("Are you sure you want to delete the comment and send e-mail about spam?");
	}
        if(mail == '2') {
                var agree=confirm("Are you sure you want to delete the comment and send e-mail about insufficient quality?");
        }

        if(agree) {
		if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
		        var full = 'full-' + id;
			var buttons = 'buttons-' + id;
        		var compressed = 'collapsed-' + id;
			if(mainpost == '1') { backtoforumindex = '1'; }
			//Effect.Fade(full);
			if(document.getElementById(full) != null) {
			document.getElementById(full).style.display = 'none';
			}
			if(document.getElementById(buttons) != null) { 
			document.getElementById(buttons).style.display = 'none';
			}
			//Effect.Fade(compressed);
			receiveReq.open("GET", '/backend/forumdelete.php?id=' + id + '&sendmail=' + mail, true);
			receiveReq.onreadystatechange = handleDeletePost;
			receiveReq.send(null);

		}
	}
}

function handleDeletePost() {
	if (receiveReq.readyState == 4) {
		if(backtoforumindex == '1') {
			backtoforumindex = '0';
			location.href='/forum';
		}
	}
}

function bookmarkTopic() {
        if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
		bookmarkbutton = document.getElementById('bookmarkbutton').innerHTML;
		document.getElementById('bookmarkbutton').innerHTML = '...';
		receiveReq.open("GET", '/backend/forumbookmark.php?id=' + document.getElementById('viewtopic').value, true);
		receiveReq.onreadystatechange = handleBookmarkTopic;
		receiveReq.send(null);
	}
}

function handleBookmarkTopic() {
	if (receiveReq.readyState == 4)
	{
		if(bookmarkbutton == 'Bookmark topic') {
			document.getElementById('bookmarkbutton').innerHTML = 'Remove bookmark';
		} else {
			document.getElementById('bookmarkbutton').innerHTML = 'Bookmark topic';
		}
	}
}

function getPosts() {
        if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
		document.getElementById('lookforposts').innerHTML = '...';
                receiveReq.open("GET", '/backend/forumposts.php?id=' + document.getElementById('viewtopic').value + '&from=' + document.getElementById('latestpost').value, true);
                receiveReq.onreadystatechange = handleGetPosts;
                receiveReq.send(null);
        }
}

function handleGetPosts() {
        if (receiveReq.readyState == 4)
        {
		var newmsgarray = new Array();
		var newmsgarray2 = new Array();
		var newmsgcount = 0;
		var newmsgcount2 = 0;
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("comment");
                var n_messages = topnavi_nodes.length;
                var put = '';
                for (k = 0; k < n_messages; k++) {
                        var msgid_node = topnavi_nodes[k].getElementsByTagName("msgid");
			var realname_node = topnavi_nodes[k].getElementsByTagName("realname");
			var userid_node = topnavi_nodes[k].getElementsByTagName("userid");
			var profilepic_node = topnavi_nodes[k].getElementsByTagName("profilepic");
			var message_node = topnavi_nodes[k].getElementsByTagName("message");
			var date_node = topnavi_nodes[k].getElementsByTagName("date");
			var attachment_node = topnavi_nodes[k].getElementsByTagName("attachment");
			message_node[0].normalize();

			put += '<table border="0" cellpadding="0" cellspacing="0" width="100%" id="newmsg-' + msgid_node[0].firstChild.nodeValue + '" style="display: none;"><tr style="display: table-row;" id="full-' + msgid_node[0].firstChild.nodeValue + '"><td valign="top" style=""><div id="junk1-' + msgid_node[0].firstChild.nodeValue + '" class="forumpostheader"><table border="0" cellpadding="0" cellspacing="0"><tr><td width="48"><img src="' + profilepic_node[0].firstChild.nodeValue + '" width="35"></td><td><div id="msg-' + msgid_node[0].firstChild.nodeValue + '" style="font-weight: bold; font-size: 13px;"><a href="/artist/' + userid_node[0].firstChild.nodeValue + '">' + realname_node[0].firstChild.nodeValue + '</a></div><div style="font-size: 11px;margin-top: 5px; ">Posted now</div></td></tr></table></div><div class="forumpostbody" id="junk2-' + msgid_node[0].firstChild.nodeValue + '"><div style="max-width: 960px; overflow: auto; font-size: 13px; padding: 10px 10px 10px 10px; line-height: 24px;" id="msgcontent-' + msgid_node[0].firstChild.nodeValue + '">' + message_node[0].firstChild.nodeValue + '</div></div></td></tr><tr><td colspan="2" class="forumpostfooter"><div>' + attachment_node[0].firstChild.nodeValue + '<div class="forumsubbuttons"><div style="float: right;"><span onclick="showLikes3(\'2\',\'' + msgid_node[0].firstChild.nodeValue + '\');" id="liketarget-2-' + msgid_node[0].firstChild.nodeValue + '" style="cursor: pointer; font-size: 11px;"></span> &nbsp; <span onclick="likeObject(\'2\',\'' + msgid_node[0].firstChild.nodeValue + '\');" id="like-2-' + msgid_node[0].firstChild.nodeValue + '" class="squarebutton2">Like</span></div><table border="0" cellpadding="0" cellspacing="0"><tr><td><span class="squarebutton2" onclick="addQuote(\'' + realname_node[0].firstChild.nodeValue + '\',' + msgid_node[0].firstChild.nodeValue + ',\'\',\'' + userid_node[0].firstChild.nodeValue + '\');" id="quoteall-' + msgid_node[0].firstChild.nodeValue + '">Quote all</span> &nbsp; </td><td><span class="squarebutton2" onmousedown="addQuoteSel(\'' + realname_node[0].firstChild.nodeValue + '\',' + msgid_node[0].firstChild.nodeValue + ',\'' + userid_node[0].firstChild.nodeValue + '\');" id="quotesel-' + msgid_node[0].firstChild.nodeValue + '">Quote selected text</span> &nbsp; </td>';
			if(userid_node[0].firstChild.nodeValue == myuserid) { put += '<td><span class="squarebutton2" onclick="editPost(\'' + msgid_node[0].firstChild.nodeValue + '\');">Edit post</span> &nbsp; </td>'; }
			// put += '<td><span class="squarebutton2" onclick="deletePost(\'' + msgid_node[0].firstChild.nodeValue + '\',\'0\',\'0\');">Delete post</span> &nbsp; </td>';

                        if(userid_node[0].firstChild.nodeValue == myuserid) {
                                put += '<td><span onclick="startAttach(\'' + msgid_node[0].firstChild.nodeValue + '\');" id="attach-' + msgid_node[0].firstChild.nodeValue + '" class="squarebutton2">Attach image</span> &nbsp; </td>';
                        }

			put += '</tr></table></div></div></td></tr><tr><td colspan="2"><div style=" height: 30px;">&nbsp;</div></td></tr></table>';

                        document.getElementById('latestpost').value = msgid_node[0].firstChild.nodeValue;
			newmsgarray[newmsgcount] = 'newmsg-' + msgid_node[0].firstChild.nodeValue;
			newmsgcount++;
			newmsgarray2[newmsgcount2] = 'junk1-' + msgid_node[0].firstChild.nodeValue;
			newmsgcount2++;
			newmsgarray2[newmsgcount2] = 'junk2-' + msgid_node[0].firstChild.nodeValue;
			newmsgcount2++;
                }
		if(newmsgcount != 0 && writenew == '1') {
			alert("New posts have been added after you started writing yours. Your message will not be posted now, please review the new ones first. Then click \"Write\" again if you still want to post your message.");
		}
		if(newmsgcount == 0 && writenew == '1') {
			forumWriteDo();
		}
		if(newmsgcount == 0) {
			document.getElementById('lookforposts').innerHTML = 'No new posts';
			setTimeout('document.getElementById(\'lookforposts\').innerHTML = \'Look for new posts\';',2000);
		} else {
			document.getElementById('lookforposts').innerHTML = 'New posts loaded!';
			setTimeout('document.getElementById(\'lookforposts\').innerHTML = \'Look for new posts\';',2000);
		}
                document.getElementById('newposts').innerHTML += put;
		Effect.multiple(newmsgarray,Effect.Appear);
		Effect.multiple(newmsgarray2,Effect.Highlight);
		writenew = '0';
        }
}

function editPost(id) {
	document.getElementById('editpost').value = id;
        document.getElementById('composereply').innerHTML = '<b>Edit post</b>';
	document.getElementById('writebutton').innerHTML = 'Save changes';
	Effect.Appear('abortbutton');
        if(document.getElementById('editoptions') != null) {
                document.getElementById('editoptions').style.display = 'block';
        }
	Effect.ScrollTo('edit', { duration: 0.5 });
	document.getElementById('edit').contentWindow.location.href = '/backend/forumwriteinterface.php?id=' + id;
}

function abortEdit() {
	document.getElementById('editpost').value = '0';
        document.getElementById('composereply').innerHTML = '<b>Compose a reply</b>';
        document.getElementById('writebutton').innerHTML = 'Write';
	Effect.Fade('abortbutton');
	if(document.getElementById('editoptions') != null) {
		document.getElementById('editoptions').style.display = 'none';
	}
	if(document.getElementById('edit') != null) {
		document.getElementById('edit').contentWindow.location.href = '/backend/forumwriteinterface.php';
	} else {
		document.getElementById('edit_simple').value = '';
	}
}

function unixtime() {
	var foo = new Date; // Generic JS date object
	var unixtime_ms = foo.getTime(); // Returns milliseconds since the epoch
	return(parseInt(unixtime_ms / 1000));
}

function forumWrite() {
	var writeok = '0';

	if(document.getElementById('wordswritten') != null) {
		if(parseInt(document.getElementById('wordswritten').value) > 49) {
			writeok = '1';
		}
	} else {
		writeok = '1';
	}

	if(writeok == '1') {
		if(document.getElementById('editpost').value != '0') {
		        document.getElementById('writebutton').innerHTML = '<img src="/ajax-loader.gif">';
			if(document.getElementById('edit') != null) {
			var message = document.getElementById('edit').contentWindow.document.body.innerHTML;
			} else {
				var message = document.getElementById('edit_simple').value;
			}

			if(message != '' && message != '<br>') {
				if (sendReq.readyState == 4 || sendReq.readyState == 0) {
					var target = 'msgcontent-' + document.getElementById('editpost').value;
					document.getElementById(target).innerHTML = message;
					sendReq.open("POST", '/backend/forumedit.php?id=' + document.getElementById('editpost').value,true);
					sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
					sendReq.onreadystatechange = handleForumEdit;
					var param = 'text=' + encodeURIComponent(message);
					if(document.getElementById('edit_topictitle') != null) {
						param += '&title=' + encodeURIComponent(document.getElementById('edit_topictitle').value);
						document.getElementById('topicname').innerHTML = document.getElementById('edit_topictitle').value;
						param += '&photoid=' + encodeURIComponent(document.getElementById('edit_photoid').value);
					}
					sendReq.send(param);
				}
			}
		} else {
			writenew = '1';
			getPosts();
		}
	} else {
		alert('You have not written 50 words yet');
	}
}

function handleForumEdit() {
	if (sendReq.readyState == 4) {
		var target = 'msgcontent-' + document.getElementById('editpost').value;
		Effect.ScrollTo(target, { duration:'0.2', offset:-65 });
		abortEdit();
	}
}

function forumWriteDo() {
	var remainingw;
	document.getElementById('writebutton').innerHTML = '<img src="/ajax-loader.gif">';
	// document.getElementById('message').style.background = '#eee';
	writenew = '0';
	if(document.getElementById('edit') != null) {
		var message = document.getElementById('edit').contentWindow.document.body.innerHTML;
	} else {
		var message = document.getElementById('edit_simple').value;
	}
	if(document.getElementById('wordrequirement') != null) {
		var okproceed = '0';
        
	var y=message;
        var r = 0;
        a=y.replace(/\s/g,' ');
        a=a.split(' ');
        for (z=0; z<a.length; z++) {if (a[z].length > 0) r++;}

        remainingw = 70 - parseInt(r);


	if(remainingw < 1) { okproceed = '1'; }

	} else {
		var okproceed = '1'; 
	}
	if(okproceed == '1') {

		if(message != '' && message != '<br>') {



	var notifyquotes = '';

	if(document.getElementById('totalquotes') != null) {
		var totalquotes = parseInt(document.getElementById('totalquotes').value);
		document.getElementById('totalquotes').value = '0';
		var findquotesloop = 0;
		while(findquotesloop != totalquotes) {
			findquotesloop++;
			if(document.getElementById('edit').contentWindow.document.getElementById('quoteuserid-' + findquotesloop) != null) {
				notifyquotes += document.getElementById('edit').contentWindow.document.getElementById('quoteuserid-' + findquotesloop).value + ',';
			}
		}
	}

			if (sendReq.readyState == 4 || sendReq.readyState == 0) {
				sendReq.open("POST", '/backend/forumwrite.php?id=' + document.getElementById('viewtopic').value, true);
				sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				sendReq.onreadystatechange = handleForumWriteDo;
				var param = 'text=' + encodeURIComponent(message);
				param += '&notify=' + encodeURIComponent(notifyquotes);
				sendReq.send(param);
			}
		} else {
			alert("You must write a message!");
		}
	} else {
		alert('You must write at least 70 words in your first reply to a critique request. ' + remainingw + ' words remaining.');
		document.getElementById('writebutton').innerHTML = 'Write';
	}
}

function handleForumWriteDo() {
	if (sendReq.readyState == 4) {
		document.getElementById('writebutton').innerHTML = 'Write';
		// document.getElementById('message').style.background = '#fff';
		// document.getElementById('message').innerHTML = '';
		if(document.getElementById('edit') != null) {
			document.getElementById('edit').contentWindow.location.href = '/backend/forumwriteinterface.php';
			if(document.getElementById('wordcounterdiv') != null) {
				document.getElementById('wordcounterdiv').innerHTML = '';
				document.getElementById('writebutton').style.opacity = '1.0';
			}
		} else {
			document.getElementById('edit_simple').value = '';
		}
		getPosts();
	}
}

// FOR PHOTO

function endShowLikes3() {
        // Effect.Fade('floatingwindow', { duration: 0.2 });
        document.getElementById('floatingwindow3').style.display = 'none';
        document.getElementById('lightsoff3').style.display = 'none';
        showlikes = '0';
}

function endShowLikes() {
        // Effect.Fade('floatingwindow', { duration: 0.2 });
        document.getElementById('floatingwindow').style.display = 'none';
        document.getElementById('lightsoff').style.display = 'none';
	showlikes = '0';
}

var showlikes = '0'; 

function showLikes3(type,objectid) {
        if(showlikes == '0' && objectid && type) {
                document.getElementById('lightsoff3').style.display = 'block';
                document.getElementById('fwindowcontent3').innerHTML = '<center><img src="/ajax-loader.gif" style="padding: 40px;"></center>';
                Effect.Appear('floatingwindow3', { duration: 0.4 });
                showlikes = '1';
                if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                        receiveReq.open("GET", '/backend/objectlikes.php?id=' + objectid + '&type=' + type, true);
                        receiveReq.onreadystatechange = handleShowLikes3;
                        receiveReq.send(null);
                }
        }
}

function handleShowLikes3() {
        if (receiveReq.readyState == 4)  {
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("likes");                
		var n_messages = topnavi_nodes.length;
                var elementcount = 0;
		var put = '<div class="handleshowlikesheader">People who like this</div><div style="max-height: 550px;overflow-x: auto;"><table border="0" width="100%" cellpadding="0" cellspacing="0">';
		for (k = 0; k < n_messages; k++) {
                        var realname_node = topnavi_nodes[k].getElementsByTagName("realname");
                        var username_node = topnavi_nodes[k].getElementsByTagName("username");
                        var photourl_node = topnavi_nodes[k].getElementsByTagName("photourl");
                        elementcount++;
			if(elementcount == 1) {
				put += '<tr>';
			}
			put += '<td width="50%"><table onclick="location.href=\'/artist/' + username_node[0].firstChild.nodeValue + '\';" border="0" class="likestable" cellpadding="0" cellspacing="0"><tr><td width="35"><img src="' + photourl_node[0].firstChild.nodeValue + '" width="30"></td>';
			put += '<td style="font-size: 13px;">' + realname_node[0].firstChild.nodeValue + '</td></tr></table></td>';
			if(elementcount == 2) { put += '</tr>'; elementcount = 0; }
		}
		put += '</table></div><div class="handleshowlikesfooter" align="right"><span class="squarebutton1" onclick="endShowLikes3();">Close</span></div>';
		document.getElementById('fwindowcontent3').innerHTML = put;
		showlikes = '0';
	}
}

function showLikes(picid) {
        if(showlikes == '0') {
		if(!picid) { picid = document.getElementById('picid').value; }
                document.getElementById('lightsoff').style.display = 'block';
                document.getElementById('fwindowcontent').innerHTML = '<center><img src="/ajax-loader.gif" style="padding: 40px;"></center>';
                Effect.Appear('floatingwindow', { duration: 0.4 });
                showlikes = '1';
                if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                        receiveReq.open("GET", '/backend/likes.php?id=' + picid, true);
                        receiveReq.onreadystatechange = handleShowLikes;
                        receiveReq.send(null);
                }
        }
}

function handleShowLikes() {
        if (receiveReq.readyState == 4)  {
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("likes");
                var n_messages = topnavi_nodes.length;
                var elementcount = 0;
                var put = '<div class="handleshowlikesheader">People who like this photo</div><div style="max-height: 550px;overflow-x: auto;"><table border="0" width="100%" cellpadding="0" cellspacing="0">';
                for (k = 0; k < n_messages; k++) {
                        var realname_node = topnavi_nodes[k].getElementsByTagName("realname");
                        var username_node = topnavi_nodes[k].getElementsByTagName("username");
                        var photourl_node = topnavi_nodes[k].getElementsByTagName("photourl");
			elementcount++;
			if(elementcount == 1) {
                        	put += '<tr>';
			}
                        put += '<td width="50%"><table onclick="location.href=\'/artist/' + username_node[0].firstChild.nodeValue + '\';" border="0" class="likestable" cellpadding="0" cellspacing="0"><tr><td width="35"><img src="' + photourl_node[0].firstChild.nodeValue + '" width="30"></td>';
                        put += '<td style="font-size: 13px;">' + realname_node[0].firstChild.nodeValue + '</td></tr></table></td>';
                        if(elementcount == 2) { put += '</tr>'; elementcount = 0; }
                }
                put += '</table></div><div class="handleshowlikesfooter" align="right"><span class="squarebutton1" onclick="endShowLikes();">Close</span></div>';
                document.getElementById('fwindowcontent').innerHTML = put;
                showlikes = '0';
        }
}

function toggleSearch() {
	document.getElementById('mailsearch').style.display = 'table-row';
	document.getElementById('searchfor').focus();
}

function deleteMail(mailid) {
		var agree=confirm("Are you sure you want to delete this conversation?");
		if(agree)
		{
			var mailrow = 'mail-' + mailid;
			Effect.Fade(mailrow);
			if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
				receiveReq.open("GET", '/backend/deletemail.php?id=' + mailid, true);
                		receiveReq.onreadystatechange = handleDeleteMails;
               			receiveReq.send(null);
                	}
		}
}

function handleDeleteMails()
{
	if (receiveReq.readyState == 4)
	{
	}
}

var recs = 0;
var tophituserid = '';
var tophitrealname = '';

function subjectchange() {
	if(document.getElementById('subject').value != '') {
		document.getElementById('subjecttitle').innerHTML = document.getElementById('subject').value;
	} else {
		document.getElementById('subjecttitle').innerHTML = 'New mail';
	}
}

function searchto() {
	if(document.getElementById('search_to').value != '') {
        	if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
			var block = findrecipients();
        		receiveReq.open("GET", '/backend/searchto.php?stringa=' + document.getElementById('search_to').value + '&block=' + block, true);
        		receiveReq.onreadystatechange = handleSearchTo;
        		receiveReq.send(null);
        	}
	} else {
		if(document.getElementById('searchresults').style.display != 'none') { document.getElementById('searchresults').style.display = 'none'; }
	}
}

function findrecipients() {
	var to = '';
	var oDiv = document.getElementById('tocontainer');
	if(oDiv.firstChild) {
		var oChild = oDiv.firstChild;
		while(oChild) {
			if(oChild.nodeType==1) {
				if(oChild.value != '0') {
					to += oChild.value + ':';
				}
			}
			oChild = oChild.nextSibling;
		}
	}
	return(to);
}

function handleSearchTo() {
        if (receiveReq.readyState == 4)
        {
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("searchresult");
                var n_messages = topnavi_nodes.length;
		var put = '';
		var count = 0;
		tophituserid = '';
		tophitrealname = '';
                for (k = 0; k < n_messages; k++) {
                        var userid_node = topnavi_nodes[k].getElementsByTagName("userid");
                        var realname_node = topnavi_nodes[k].getElementsByTagName("realname");
                        var photo_node = topnavi_nodes[k].getElementsByTagName("photo");
			var profilepic_node = topnavi_nodes[k].getElementsByTagName("profilepic");
			var extra_node = topnavi_nodes[k].getElementsByTagName("extra");
			count = parseInt(count) + 1;
			if(count == 1) { tophituserid = userid_node[0].firstChild.nodeValue; tophitrealname = realname_node[0].firstChild.nodeValue; }
			if(profilepic_node[0].firstChild.nodeValue != 'false') {
				var photo = '/u/profile/' + profilepic_node[0].firstChild.nodeValue + '-square.jpg';
			} else {
				if(photo_node[0].firstChild.nodeValue != 'false')
				{
					var photo = 'http://1x.com/pictures/' + photo_node[0].firstChild.nodeValue + '-square.jpg';
				} else {
					var photo = '/unknown.jpg';
				}
			}
			put += '<table cellpadding="0" onclick="addRec(\'' + userid_node[0].firstChild.nodeValue + '\',\'' + realname_node[0].firstChild.nodeValue + '\');" cellspacing="0" border="0" width="100%" class="searchresult"><tr><td width="43" valign="top"><img width="40" src="' + photo + '"></td><td valign="top" style="font-size: 13px;"><div style="margin-top: 3px;"><b>' + realname_node[0].firstChild.nodeValue + '</b></div><div style="font-size: 11px; margin-top: 4px;">' + extra_node[0].firstChild.nodeValue + '</div></td></tr></table>';
                }
		if(put) {
			if(document.getElementById('searchresults').style.display == 'none') { Effect.Appear('searchresults'); }
		}
		document.getElementById('searchresults').innerHTML = put;
        }
}

function selectTopHit() {
	if(tophituserid != '' && tophitrealname != '') {
		addRec(tophituserid,tophitrealname);
	}
}

function addRec(userid,realname) {
	if(userid && realname) {
		var hiddenid = 'to-' + userid;
		var spanhiddenid = 'spanto-' + userid;
		if(document.getElementById(hiddenid) != null) {
			document.getElementById(hiddenid).value = userid;	
		} else {
			document.getElementById('tocontainer').innerHTML += '<input type="hidden" id="to-' + userid + '" value="' + userid + '">';
		}
		if(parseInt(recs) == 0) { document.getElementById('between').innerHTML = ''; } 
		if(document.getElementById(spanhiddenid) == null) {
			document.getElementById('between').innerHTML = document.getElementById('between').innerHTML + '<span onclick="removeRec(\'' + userid + '\');" id="spanto-' + userid + '" class="squarebutton1" style="padding: 5px 7px 5px 7px; margin-right: 5px;" title="Click to remove this recipient">' + realname + ' x</span>'; 
		} else {
			document.getElementById(spanhiddenid).style.display = 'inline';
		}
		recs = parseInt(recs) + 1;
		document.getElementById('search_to').value = '';
		searchto();
		document.getElementById('search_to').focus();
	}
}

function removeRec(userid) {
	var hiddenid = 'to-' + userid;
	var spanhiddenid = 'spanto-' + userid;
	document.getElementById(hiddenid).value = '0';
	document.getElementById(spanhiddenid).style.display = 'none';
	var to = findrecipients();
	if(!to) { document.getElementById('between').innerHTML = '<span style="font-size: 12px; color: #666;">No recipients added. Type a name below.</span>'; }
	recs = parseInt(recs) - 1;
}

function sendMail() {
	var to = findrecipients();
	if(to) {
		var subject = document.getElementById('subject').value;
		if(subject) {
			var msg = document.getElementById('message').value;
			if(msg)
			{
	                        if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                	sendReq.open("POST", '/backend/sendmail.php', true);
                                	sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                	sendReq.onreadystatechange = handleSendMail;
                                	var param = 'text=' + encodeURIComponent(msg);
					param += '&subject=' + encodeURIComponent(subject);
					param += '&to=' + to;
                                	sendReq.send(param);
                        	}
			} else {
				alert("You must enter a message!");
			}
		} else {
			alert("You must add a subject to your mail!");
		}
	} else {
		alert("You must add at least one recipient!");
	}
}

function handleSendMail() {
	if (sendReq.readyState == 4) {
		location.href='/mail/latest';
	}
}

var appear = new Array();

function showall() {
	document.getElementById('showmore').style.display = 'none';
	Effect.multiple(appear,Effect.Appear);
	Effect.ScrollTo('thetop');
}

var newcount123 = 0;

function finishWriteReply() {
	if(document.getElementById('message').value != '') {
		newcount123 = parseInt(newcount123) + 1;
		var msg = document.getElementById('message').value;
	
		if(ie != '1') {

		if(dark == '') {
			var bordercolormail = 'ddd';
			var namecolormail = '444';
		} else {
			var bordercolormail = '333';
			var namecolormail = 'ccc';
		}

		document.getElementById('conversation').innerHTML += '<tr style="display: none;" id="new-' + newcount123 + '"><td valign="top" width="47" id="td1-' + newcount123 + '" style="background: #ffff99;border-top: 1px solid #' + bordercolormail + '; border-right: 1px solid #' + bordercolormail + '; padding: 15px;"><img src="/u/profile/-square.jpg" width="45"></td><td id="td2-' + newcount123 + '" style="border-top: 1px solid #' + bordercolormail + '; background: #ffff99;padding: 15px;" valign="top"><div style="font-size: 13px; color: #' + namecolormail + '; font-weight: bold; margin-bottom: 10px;"><a href="/artist/" style="color: #' + namecolormail + ';"></a> &nbsp; <span style="color: #999; font-size: 11px; font-weight: normal;">now</span></div><div style="font-size: 13px; line-height: 20px;">' + nl2br(msg,false) + '</div></td></tr>';


		document.getElementById('message').value = '';
		Effect.Appear('new-' + newcount123, { duration: 0.2 });
		
		if(dark == '') {

		new Effect.Morph('td1-' + newcount123, {
		  style: 'background:#eee;', // CSS Properties
		  duration: 0.8 // Core Effect properties
		});

                
                new Effect.Morph('td2-' + newcount123, {
                  style: 'background:#eee;', // CSS Properties
                  duration: 0.8 // Core Effect properties
                });

		} else {

                new Effect.Morph('td1-' + newcount123, {
                  style: 'background:#222;', // CSS Properties
                  duration: 0.8 // Core Effect properties
                });


                new Effect.Morph('td2-' + newcount123, {
                  style: 'background:#222;', // CSS Properties
                  duration: 0.8 // Core Effect properties
                });


		}

		} else {
			location.href = location.href;
		}

	}
}
function resetMail() {
                document.getElementById('mailbadge').style.display = 'none';
                document.getElementById('mailbadge').innerHTML = '0';
}

function setRefunded(id) {
	var box = 'status-' + id;
	var ship = 'ship-' + id;
	var refund = 'refund-' + id;
	var tr = 'tr-' + id;
	document.getElementById(box).style.background = '#00ff00';
}

var currship = '0';

function setShipped(id) {
	currship = id;

                var ship = 'ship-' + id;
                var tr = 'tr-' + id;
                var state = document.getElementById(ship).innerHTML;

	if(state == 'Unmark shipped') { var set = 'not_shipped'; } else { var set = 'shipped'; }
	
        if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                receiveReq.open("GET", '/backend/crew_shipped2.php?id=' + id + '&change=' + set, true);
                receiveReq.onreadystatechange = handleDoSetShipped;
                receiveReq.send(null);
        }

}

function handleDoSetShipped() {
        if (receiveReq.readyState == 4)  {
		var id = currship;
        	var ship = 'ship-' + id;
		var tr = 'tr-' + id;
		var state = document.getElementById(ship).innerHTML;
	
		if(state == 'Mark as shipped') {
			document.getElementById(ship).innerHTML = 'Unmark shipped';
		} else {
			document.getElementById(ship).innerHTML = 'Mark as shipped';
		}

		currship = '0';
	}
}

function setRefunded(id) {
        currship = id;

                var box = 'status-' + id;
                var ship = 'ship-' + id;
                var refund = 'refund-' + id;
                var tr = 'tr-' + id;
                var state = document.getElementById(refund).innerHTML;

        if(state == 'Unmark refunded') { var set = 'not_refunded'; } else { var set = 'refunded'; }

        if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                receiveReq.open("GET", '/backend/crew_refunded.php?id=' + id + '&change=' + set, true);
                receiveReq.onreadystatechange = handleDoSetRefunded;
                receiveReq.send(null);
        }

}

function handleDoSetRefunded() {
        if (receiveReq.readyState == 4)  {
                var id = currship;

                var box = 'status-' + id;
                var ship = 'ship-' + id;
                var refund = 'refund-' + id;
                var tr = 'tr-' + id;
                var state = document.getElementById(refund).innerHTML;

                if(state == 'Mark as refunded') {
                        document.getElementById(refund).innerHTML = 'Unmark refunded';
                        document.getElementById(box).style.background = '#00ff00';
                        document.getElementById(tr).style.opacity = '0.4';
                } else {
                        document.getElementById(refund).innerHTML = 'Mark as refunded';
                        document.getElementById(box).style.background = '#ccc';
                        document.getElementById(tr).style.opacity = '1.0';
                }

                currship = '0';
        }
}

function blockSearch() {
	return false;
}

function printSearch2() {
        var searchfor = document.getElementById('print_search').value;
        var param = searchfor.split(' ').join(':');
        param = escape(param);
        location.href='/prints2/search:' + param;
        return false;
}

function printSearch() {
	var searchfor = document.getElementById('print_search').value;
	var param = searchfor.split(' ').join(':');
	param = escape(param);
	location.href='/prints/search:' + param;
	return false;
}

function makePayment() {

        var proceed = '1';

	if(document.getElementById('agreeterms') != null) {
		if(document.getElementById('agreeterms').checked != '1') {
			alert("You must agree to the terms");
			proceed = '0';
		}
	}

        if(document.getElementById('pay_email').value == '') {
                alert("You must enter a valid e-mail address!");
                proceed = '0';
        }

        if(document.getElementById('pay_addr1').value == '') {
                alert("You must enter your street address the first address field!");
                proceed = '0';
        }

        if(document.getElementById('pay_city').value == '') {
                alert("You must enter a valid city!");
                proceed = '0';
        }

        if(document.getElementById('pay_postalcode').value == '') {
                alert("You must enter a valid postal code!");
                proceed = '0';
        }

        if(document.getElementById('pay_phone').value == '') {
                alert("You must enter your phone number so we can contact you in case there are problems with your order.");
                proceed = '0';
        }

        if(proceed == '1') {
               	document.getElementById('makepaymentform').submit();
        }
}

// FOR SETTINGS

function saveSettings() {

if(savingsettings == '0') {

	savingsettings = '1';

	document.getElementById('saved').style.display = 'none';
	document.getElementById('saving').style.display = 'inline';
	
	var error = '';

	if(document.getElementById('s1').value == '') { error += 'No firstname. '; }
	if(document.getElementById('s2').value == '') { error += 'No surname. '; }
	if(document.getElementById('s3').value == '') { error += 'No display name. '; }
	if(document.getElementById('s5').value == '') { error += 'No country. '; }
	if(document.getElementById('s4').value == '') { error += 'No e-mail. '; }

	if(error != '') {
		alert('Errors were encountered with your form: ' + error + 'Please correct this and then try saving again.');
		document.getElementById('saving').style.display = 'none';
		savingsettings = '0';
	} else {

			if(document.getElementById('s7').checked == 1) { var s7 = 'on'; } else { var s7 = 'off'; }
			if(document.getElementById('s8').checked == 1) { var s8 = 'on'; } else { var s8 = 'off'; }
			if(document.getElementById('s10').checked == 1) { var s10 = 'on'; } else { var s10 = 'off'; }

                        if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                sendReq.open("POST", '/backend/savesettings.php', true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handleSaveSettings;
                                var param = 'mode=general';
				param += '&s1=' + encodeURIComponent(document.getElementById('s1').value);
				param += '&s2=' + encodeURIComponent(document.getElementById('s2').value);
				param += '&s3=' + encodeURIComponent(document.getElementById('s3').value);
				param += '&s4=' + encodeURIComponent(document.getElementById('s4').value);
				param += '&s5=' + encodeURIComponent(document.getElementById('s5').value);
				param += '&s6=' + encodeURIComponent(document.getElementById('s6').value);
				param += '&s7=' + s7;
				param += '&s8=' + s8;
				param += '&s9=' + encodeURIComponent(document.getElementById('s9').value);
				param += '&s10=' + s10;
                                sendReq.send(param);
                        }


	}
}
}

function handleSaveSettings() {
	if (sendReq.readyState == 4) {
                var xmldoc = sendReq.responseXML;
                var created_node = xmldoc.getElementsByTagName("created");
                if(created_node[0].firstChild.nodeValue == 'YES') {
                	document.getElementById('saved').style.display = 'inline';
                	document.getElementById('saving').style.display = 'none';
                	savingsettings = '0';
                } else {
			if(created_node[0].firstChild.nodeValue == 'YESEMAIL') {
				location.href='http://1x.com/settings';
			} else {
                        	alert('Error: ' + created_node[0].firstChild.nodeValue);
				document.getElementById('saving').style.display = 'none';
				savingsettings = '0';
			}
                }
	}
}

function savePrivacy() {

if(savingsettings == '0') {

	if(document.getElementById('p1').value == '1' || document.getElementById('p1').value == '2') {
		savingsettings = '1';
                        if (sendReq.readyState == 4 || sendReq.readyState == 0) {
			        document.getElementById('savedp1').style.display = 'none';
        			document.getElementById('savingp1').style.display = 'inline';

                                sendReq.open("POST", '/backend/savesettings.php', true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handleSavePrivacy;
                                var param = 'mode=privacy1';
                                param += '&p1=' + encodeURIComponent(document.getElementById('p1').value);
                                sendReq.send(param);
                        }
	}
}
}

function savePrivacy3() {

if(savingsettings == '0') {

        if(document.getElementById('p3').value == '1' || document.getElementById('p3').value == '2') {
                savingsettings = '1';
                        if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                document.getElementById('savedp3').style.display = 'none';
                                document.getElementById('savingp3').style.display = 'inline';

                                sendReq.open("POST", '/backend/savesettings.php', true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handleSavePrivacy3;
                                var param = 'mode=privacy3';
                                param += '&p3=' + encodeURIComponent(document.getElementById('p3').value);
                                sendReq.send(param);
                        }
        }
}
}

function handleSavePrivacy3() {
        if (sendReq.readyState == 4) {
                document.getElementById('savingp3').style.display = 'none';
                document.getElementById('savedp3').style.display = 'inline';
                savingsettings = '0';
        }
}


function savePrivacy2() {

if(savingsettings == '0') {

	if(document.getElementById('p2').value == '1' || document.getElementById('p2').value == '2') {
		savingsettings = '1';
                        if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                document.getElementById('savedp2').style.display = 'none';
                                document.getElementById('savingp2').style.display = 'inline';

                                sendReq.open("POST", '/backend/savesettings.php', true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handleSavePrivacy2;
                                var param = 'mode=privacy2';
                                param += '&p2=' + encodeURIComponent(document.getElementById('p2').value);
                                sendReq.send(param);
                        }
	}
}
}

function handleSavePrivacy() {
	if (sendReq.readyState == 4) {
		document.getElementById('savingp1').style.display = 'none';
		document.getElementById('savedp1').style.display = 'inline';
		savingsettings = '0';
	}
}

function handleSavePrivacy2() {
        if (sendReq.readyState == 4) {
                document.getElementById('savingp2').style.display = 'none';
                document.getElementById('savedp2').style.display = 'inline';
		savingsettings = '0';
        }
}

function changePw() {
	document.getElementById('saving').style.display = 'inline';
	document.getElementById('pwstatus').innerHTML = '';

	if(document.getElementById('pw1').value != '' && document.getElementById('pw1').value != '' && document.getElementById('pw1').value != '') {

                        if (sendReq3.readyState == 4 || sendReq3.readyState == 0) {
                                sendReq3.open("POST", '/backend/savesettings.php', true);
                                sendReq3.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq3.onreadystatechange = handleChangePw;
                                var param = 'mode=pw';
                                param += '&pw1=' + encodeURIComponent(document.getElementById('pw1').value);
				param += '&pw2=' + encodeURIComponent(document.getElementById('pw2').value);
				param += '&pw3=' + encodeURIComponent(document.getElementById('pw3').value);
                                sendReq3.send(param);
                        }

	} else {
		document.getElementById('saving').style.display = 'none';
		document.getElementById('pwstatus').innerHTML = 'ERROR: Not all fields are filled in';
	}

}

function handleChangePw() {
        if (sendReq3.readyState == 4) {
                var xmldoc = sendReq3.responseXML;
                var status_node = xmldoc.getElementsByTagName("status");
                if(status_node[0].firstChild.nodeValue != 'ok') {
	                document.getElementById('saving').style.display = 'none';
       	        	document.getElementById('pwstatus').innerHTML = 'ERROR: ' + status_node[0].firstChild.nodeValue;
                } else {
			document.getElementById('saving').style.display = 'none';
			document.getElementById('pwstatus').innerHTML = '<span style="color: darkgreen;">Password changed!</span>';
			document.getElementById('pw1').value = '';
			document.getElementById('pw2').value = '';
			document.getElementById('pw3').value = '';
		}
        }
}

function revertPres() {
	document.getElementById('editpres').value = document.getElementById('presentationdivunformatted').innerHTML;
	document.getElementById('editpres').focus();
}

function editPresentation() {
	document.getElementById('lightsoff').style.display = 'block';
	document.getElementById('floatingwindow2').style.display = 'block';
	document.getElementById('fwindowcontent2').innerHTML = '<h3 style="margin-top: 0px;">Edit your presentation text</h3>';
	document.getElementById('fwindowcontent2').innerHTML += '<textarea id="editpres" style="border: 0px; height: 300px; width: 100%;">' + document.getElementById('presentationdivunformatted').innerHTML + '</textarea>';
	document.getElementById('editpres').focus();
}

function savePres() {
                        if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                sendReq.open("POST", '/backend/savepres.php', true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handleSavePres;
                                var param = 'text=' + encodeURIComponent(document.getElementById('editpres').value);
                                sendReq.send(param);
                        }
}

function handleSavePres() {
	if (sendReq.readyState == 4) {
				location.href = location.href;
			}
}

function closeSavePres() {
        document.getElementById('lightsoff').style.display = 'none';
        document.getElementById('floatingwindow2').style.display = 'none';
}

function tagsAdjust() {
	var tags = document.getElementById('pic_tags').value;
	tags = tags.split(' ').join(',');
	tags = tags.toUpperCase();
	tags = tags.split(',,').join(',');
	if(tags != document.getElementById('pic_tags').value) {
		document.getElementById('pic_tags').value = tags;
	}
	
}

function flashRules() {
	new Effect.Highlight('rules');
}

function deletePhoto() {

	var agree=confirm("Are you sure you want to delete this photo?");
 
	if(agree) {
		var queue_id = document.getElementById('queue_id').value;
		if(queue_id) {
			location.href = '/photodirectory/delete/' + queue_id;
		}
	}
}

function saveData() {

	document.getElementById('uploaderror').innerHTML = '&nbsp;';

	var pic_name = document.getElementById('pic_name').value;
        var pic_location = document.getElementById('pic_location').value;
        var pic_equipment = document.getElementById('pic_equipment').value;
        var pic_tags = document.getElementById('pic_tags').value;
        var pic_comment = document.getElementById('pic_comment').value;
        var pic_category = document.getElementById('pic_category').value;
	var pic_nude = document.getElementById('pic_nude').value;

	if(pic_nude != '1' && pic_nude != '2') {
		document.getElementById('uploaderror').innerHTML = 'You must select if the photo contains nude content'; 
	} else {
		if(!pic_category || pic_category == '0') {
			document.getElementById('uploaderror').innerHTML = 'You must select a category!';
		} else {
                        if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                sendReq.open("POST", '/backend/savequeuedata.php', true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handleSaveData;
                                var param = 'pic_name=' + encodeURIComponent(pic_name);
				param += '&pic_location=' + encodeURIComponent(pic_location);
				param += '&pic_equipment=' + encodeURIComponent(pic_equipment);
				param += '&pic_tags=' + encodeURIComponent(pic_tags);
				param += '&pic_comment=' + encodeURIComponent(pic_comment);
				param += '&pic_category=' + encodeURIComponent(pic_category);
				param += '&pic_nude=' + encodeURIComponent(pic_nude);
				param += '&queue_id=' + document.getElementById('queue_id').value;
                                sendReq.send(param);
                        }

		}
	}
}

function handleSaveData() {
	if(sendReq.readyState == 4) {
		//Effect.Fade('editdetails', { duration: 0.2 });
		document.getElementById('editdetails').style.display = 'none';
		document.getElementById('photostatus').innerHTML = '<div style="margin-bottom: 10px;"><b>Successfully posted to selection process</b></div>This photo is <b style="color: #5FB404;">in the selection process</b>. It can take up to several weeks for a decision to be made depending on the workload of the curator team.<br /><br /><a href="/photodirectory" class="bblue">Return to photo directory</a>';
		new Effect.ScrollTo('photostatus', {offset: -24});
	}
}

function saveData2() {

        document.getElementById('savechangesstatus').innerHTML = '&nbsp;';

        var pic_name = document.getElementById('pic_name').value;
        var pic_location = document.getElementById('pic_location').value;
        var pic_equipment = document.getElementById('pic_equipment').value;
        var pic_comment = document.getElementById('pic_comment').value;

	if(1) {

                        if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                sendReq.open("POST", '/backend/savequeuedata2.php', true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handleSaveData2;
                                var param = 'pic_name=' + encodeURIComponent(pic_name);
                                param += '&pic_location=' + encodeURIComponent(pic_location);
                                param += '&pic_equipment=' + encodeURIComponent(pic_equipment);
                                param += '&pic_comment=' + encodeURIComponent(pic_comment);
                                param += '&queue_id=' + document.getElementById('queue_id').value;
                                sendReq.send(param);

                        }
	}
}

function handleSaveData2() {
        if(sendReq.readyState == 4) {
		document.getElementById('savechangesstatus').innerHTML = 'Changes saved';
        }
}

function reloadCritique() {
        if(anchornavenabled == '1') {
                document.location.hash = '!/critique/upload/done';
                currentAnchor = 'foo';
                checkAnchor();
        } else {
                location.href = '/critique/upload/done';
        }
}

function startCritiqueUpload() {
        document.getElementById('uploader').style.display = 'none';
        document.getElementById('uploading').style.display = 'block';
}

function stopCritiqueUpload() {
        document.getElementById('uploading').style.display = 'none';
        document.getElementById('uploader').style.display = 'block';
}


function startUpload() {
	document.getElementById('uploader').style.display = 'none';
	document.getElementById('uploading').style.display = 'block';
}

function stopUpload() {
        document.getElementById('uploading').style.display = 'none';
        document.getElementById('uploader').style.display = 'block';
}

function stopUploadFM() {
        document.getElementById('uploading').style.display = 'none';
        document.getElementById('uploader').style.display = 'block';
}


function stopUploadS() {
        document.getElementById('uploading').style.display = 'none';
        document.getElementById('uploader').style.display = 'block';
}

function startHDUpload() {
	document.getElementById('hduploader').style.display = 'none';
	document.getElementById('uploaderprogress').style.display = 'block';
}

function stopHDUpload() {
        document.getElementById('hduploader').style.display = 'block';
        document.getElementById('uploaderprogress').style.display = 'none';
}

function hdUploader() {
	document.getElementById('hduploadertarget').innerHTML = '<div style="display: none; padding: 25px 20px 15px 20px; font-size: 11px; text-align: center; height: 60px; width: 390px;" id="uploaderprogress"><img src="/ajax-loader.gif"><br /><br />Uploading. Do not close this window or navigate away from this page.</div><iframe scrolling="no" frameborder="0" id="hduploader" src="/backend/hdupload.php?id=' + document.getElementById('queue_id').value + '" style="border: 0px;overflow: none;" scrolling="no" border="0" width="430" height="100"></iframe>';
}

function startreUpload() {
        document.getElementById('reuploader').style.display = 'none';
        document.getElementById('reuploaderprogress').style.display = 'block';
}

function stopreUpload() {
        document.getElementById('reuploader').style.display = 'block';
        document.getElementById('reuploaderprogress').style.display = 'none';
}

function reUploader() {
        document.getElementById('reuploadertarget').innerHTML = '<div style="display: none; padding: 25px 20px 15px 20px; font-size: 11px; text-align: center; height: 60px; width: 390px;" id="reuploaderprogress"><img src="/ajax-loader.gif"><br /><br />Uploading. Do not close this window or navigate away from this page.</div><iframe scrolling="no" frameborder="0" id="reuploader" src="/backend/reupload.php?id=' + document.getElementById('queue_id').value + '" style="border: 0px;overflow: none;" scrolling="no" border="0" width="430" height="100"></iframe>';
}


function doVote() {
	document.getElementById('voteerror').innerHTML = '';
	document.getElementById('votebutton').innerHTML = '<img src="/ajax-loader.gif">';
	if(document.getElementById('queue_id') != null) {
		if(document.getElementById('queue_id').value != '') {
			var setvote = '0';
			if(document.getElementById('vote-1').checked == 1) { setvote = '1'; }
			if(document.getElementById('vote-2').checked == 1) { setvote = '2'; }
			if(document.getElementById('vote-3').checked == 1) { setvote = '3'; }
			if(document.getElementById('vote-4').checked == 1) { setvote = '4'; }
			if(document.getElementById('vote-5').checked == 1) { setvote = '5'; }
			if(document.getElementById('vote-6').checked == 1) { setvote = '6'; }

			if(setvote != '0') {
	                        if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                	sendReq.open("POST", '/backend/voting.php', true);
                                	sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                	sendReq.onreadystatechange = handleDoVote;
                                	var param = 'queue_id=' + encodeURIComponent(document.getElementById('queue_id').value);
					param += '&vote=' + encodeURIComponent(setvote);
					param += '&comment=' + encodeURIComponent(document.getElementById('votecomment').value);
					sendReq.send(param);
				}
			}

			if(document.getElementById('vote-skip').checked == 1) {
				location.href = '/voting/skip/' + encodeURIComponent(document.getElementById('queue_id').value);
			}

			if(document.getElementById('vote-skip').checked != 1 && setvote == '0') {
				document.getElementById('voteerror').innerHTML = '<div style="padding: 10px; color: darkred; font-weight: bold;">You must either vote or click "Skip for now"!</div>';
				document.getElementById('votebutton').innerHTML = 'Next image';
			}
		}
	}
}

function handleDoVote() {
	if (sendReq.readyState == 4) {
		location.href = '/voting';
                currentAnchor = 'foo';
                checkAnchor();
	}
}

function aSetCookie(cookieName,cookieValue,nDays) {
 var today = new Date();
 var expire = new Date();
 if (nDays==null || nDays==0) nDays=1;
 expire.setTime(today.getTime() + 3600000*24*nDays);
 document.cookie = cookieName+"="+escape(cookieValue)
                 + ";expires="+expire.toGMTString();
}

function toggleClickSwap() {
        if(document.getElementById('autoswap').checked == '1') {
		voting_autoswap='1';
		aSetCookie('1xVoteAutoswap','1','10000');
        } else {
		voting_autoswap='0';
		aSetCookie('1xVoteAutoswap','0','10000');
        }
}

function checkAutoVote() {
	if(document.getElementById('autoswap').checked == '1') {
        	if(document.getElementById('vote-1').checked == 1 || document.getElementById('vote-2').checked == 1 || document.getElementById('vote-3').checked == 1 || document.getElementById('vote-4').checked == 1 || document.getElementById('vote-5').checked == 1 || document.getElementById('vote-6').checked == 1 || document.getElementById('vote-skip').checked == 1) {
			doVote();
		}	
	}
}

function addAlbum() {
	if(document.getElementById('albumname').value != '') {
                        if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                sendReq.open("POST", '/backend/createalbum.php', true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handleAddAlbum;
                                var param = 'album_name=' + encodeURIComponent(document.getElementById('albumname').value);
				sendReq.send(param);
			}
	} else {
		alert('Please enter an album name');
	}
}

function handleAddAlbum() {
	if (sendReq.readyState == 4) {
		location.href='/artist//albums/created';
	}
}

function addToAlbum(picid) {
                if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
			document.getElementById('addalbumbutton').style.display = 'none';
                        receiveReq.open("GET", '/backend/albums.php?id=' + picid, true);
                        receiveReq.onreadystatechange = handleAddToAlbum;
                        receiveReq.send(null);
                }
}

function handleAddToAlbum() {
        if (receiveReq.readyState == 4)
        {
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("album");
                var n_messages = topnavi_nodes.length;
                var put = '<div style="padding: 10px 0px 10px 0px; font-size: 11px; font-weight: bold;"><div style="margin-bottom: 10px;">Select an album</div><select style="margin: 0px; padding: 0px;" id="album_id">';
		var hidden = '';
                for (k = 0; k < n_messages; k++) {
                        var albumid_node = topnavi_nodes[k].getElementsByTagName("albumid");
                        var name_node = topnavi_nodes[k].getElementsByTagName("name");
                        put += '<option value="' + albumid_node[0].firstChild.nodeValue + '">' + name_node[0].firstChild.nodeValue + '</option>'; 
			hidden += '<input type="hidden" id="albumname_' + albumid_node[0].firstChild.nodeValue + '" value="' + name_node[0].firstChild.nodeValue + '">';
		}
		put += '</select><div style="margin-top: 15px;"><span class="squarebutton1" onclick="doAddToAlbum();">Add to album</span> <span class="squarebutton1" onclick="location.href=\'/artist//albums/new\';">Create a new album</span></div></div>';
		document.getElementById('albumtarget').innerHTML = put + hidden;
	}
}

function doAddToAlbum() {
	if(document.getElementById('album_id').value != '0' && document.getElementById('album_id').value != '') {
                if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                        receiveReq.open("GET", '/backend/addtoalbum.php?id=' + document.getElementById('picid').value + '&album_id=' + document.getElementById('album_id').value, true);
                        receiveReq.onreadystatechange = handleDoAddToAlbum;
                        receiveReq.send(null);
                }
	} else {
		alert('Please select an album in the list!');
	}
}

function handleDoAddToAlbum() {
	if (receiveReq.readyState == 4)
	{
		var albumid = document.getElementById('album_id').value;
		var albumname = 'albumname_' + albumid;

		document.getElementById('albumdiv').innerHTML = '<div style="padding: 0px 0px 0px 0px; margin-top: 8px; font-size: 11px; display: none;" id="album_' + albumid + '"><a href="/artist/' + myuserid + '/albums/' + albumid + '"><b>' + document.getElementById(albumname).value + '</b><div style="margin-top: 2px; color: #777;">Your album. <a href="javascript:void(0)" onclick="removeAlbum(\'' + albumid + '\');" class="bblue">Remove</a></div></div>' + document.getElementById('albumdiv').innerHTML;

		Effect.Appear('album_' + albumid);
		document.getElementById('albumtarget').innerHTML = '';
		document.getElementById('addalbumbutton').style.display = 'block';
	}
}


function deleteAlbum(albumid) {
        var agree=confirm("Are you sure you want to delete this album?");
        if(agree) {
		location.href = '/artist//albums/delete/' + albumid;
	}
}

function removeAlbum(albumid) {
	Effect.Fade('album_' + albumid);
                if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                        receiveReq.open("GET", '/backend/removefromalbum.php?picid=' + document.getElementById('picid').value + '&albumid=' + albumid, true);
                        receiveReq.onreadystatechange = handleRemoveAlbum;
                        receiveReq.send(null);
                }
}

function handleRemoveAlbum() {
}

function deleteComment(commentid) {
        var agree=confirm("Are you sure you want to delete this comment?");
        if(agree) {
                if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {

			if(document.getElementById('comm-replies-' + commentid) != null) {
				Effect.Fade('comm-replies-' + commentid);
			}
			Effect.Fade('comm-' + commentid);

                        receiveReq.open("GET", '/backend/deletecomment.php?id=' + commentid, true);
                        receiveReq.onreadystatechange = handleDeleteComment;
                        receiveReq.send(null);
                }
        }
}

function handleDeleteComment() {
	if (receiveReq.readyState == 4) {
	}
}

function editComment(commentid) {

	var commenttext = document.getElementById('actualcomment-' + commentid).innerHTML;
	commenttext = commenttext.stripTags();
	
        document.getElementById('lightsoff').style.display = 'block';
        document.getElementById('floatingwindow2').style.display = 'block';
        document.getElementById('fwindowcontent2').innerHTML = '<input type="hidden" id="editcommentid" value="' + commentid + '"><h3 style="margin-top: 0px;">Edit comment</h3>';
        document.getElementById('fwindowcontent2').innerHTML += '<textarea id="editcomment" style="border: 0px; height: 300px; width: 100%;">' + commenttext + '</textarea>';
        document.getElementById('editcomment').focus();
}

function saveEditComment() {
	if(document.getElementById('editcommentid') != null) {
		var actualcomment = 'actualcomment-' + document.getElementById('editcommentid').value;
		document.getElementById(actualcomment).innerHTML = nl2br(document.getElementById('editcomment').value,false);

                if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                	sendReq.open("POST", '/backend/editcomment.php', true);
                	sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                	sendReq.onreadystatechange = handleSaveEditComment;
                	var param = 'text=' + encodeURIComponent(document.getElementById('editcomment').value);
			param += '&id=' + document.getElementById('editcommentid').value;
			alert(param);
                	sendReq.send(param);
		}
	}
}

function handleSaveEditComment() {
	if (sendReq.readyState == 4) {
                        document.getElementById('lightsoff').style.display = 'none';
                        document.getElementById('floatingwindow2').style.display = 'none';
                        document.getElementById('fwindowcontent2').innerHTML = '';
	}
}

function mailSearch() {
        if(document.getElementById('searchfor').value != '') {
                document.location='#!/mail/dosearch/' + document.getElementById('searchfor').value;
        }
}

var profilesave = '0';

function saveAboutMe() {
	if(profilesave == '0') {
		profilesave = '1';
		document.getElementById('savebutton1').innerHTML = '<img src="/ajax-loader.gif" style="position: relative; top: 1px;">';
		document.getElementById('savebutton2').innerHTML = '<img src="/ajax-loader.gif" style="position: relative; top: 1px;">';

		var birthday = document.getElementById('edit_year').value + '-' + document.getElementById('edit_month').value + '-' + document.getElementById('edit_day').value;

		if(document.getElementById('edit_showage').checked == '1') { var showage = '1'; } else { var showage = '0'; }

                if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                sendReq.open("POST", '/backend/savepres.php', true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handleSaveAboutMe;
                                var param = 'text=' + encodeURIComponent(document.getElementById('edit_presentation').value);
				param += '&edit_hobbies=' + encodeURIComponent(document.getElementById('edit_hobbies').value);
				param += '&edit_books=' + encodeURIComponent(document.getElementById('edit_books').value);
				param += '&edit_movies=' + encodeURIComponent(document.getElementById('edit_movies').value);
				param += '&edit_music=' + encodeURIComponent(document.getElementById('edit_music').value);
				param += '&edit_inspiration=' + encodeURIComponent(document.getElementById('edit_inspiration').value);
				param += '&edit_quotes=' + encodeURIComponent(document.getElementById('edit_quotes').value);
				param += '&edit_equipment=' + encodeURIComponent(document.getElementById('edit_equipment').value);
				param += '&edit_birthday=' + encodeURIComponent(birthday);
				param += '&edit_gender=' + encodeURIComponent(document.getElementById('edit_gender').value);
				param += '&edit_showage=' + encodeURIComponent(showage);
				param += '&edit_languages=' + encodeURIComponent(document.getElementById('edit_languages').value);
                                sendReq.send(param);
                }

	}
}


function handleSaveAboutMe() {
	if (sendReq.readyState == 4) {
		profilesave = '0';
                setTimeout('document.getElementById(\'savebutton1\').innerHTML = \'Save\';',1000);
                setTimeout('document.getElementById(\'savebutton2\').innerHTML = \'Save\';',1000);
		setTimeout('profilesave = \'0\';',1000);
	}
}

function markBad(post) {
	var slink = 'bad-' + post;
	document.getElementById(slink).innerHTML = '<img src="/ajax-loader.gif" style="position: relative; top: 1px;">';

                if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                        receiveReq.open("GET", '/backend/markbad.php?id=' + post, true);
                        receiveReq.onreadystatechange = handleMarkBad;
                        receiveReq.send(null);
                }
}

function handleMarkBad() {
        if (receiveReq.readyState == 4) {
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("bad");
                var n_messages = topnavi_nodes.length;
                for (k = 0; k < n_messages; k++) {
                        var post_node = topnavi_nodes[k].getElementsByTagName("post");
                        var spantitle_node = topnavi_nodes[k].getElementsByTagName("spantitle");
                        var slink = 'bad-' + post_node[0].firstChild.nodeValue;
			document.getElementById(slink).innerHTML = spantitle_node[0].firstChild.nodeValue;
		}
	}
}

function likeObject(type,objectid) {
	var slink = 'like-' + type + '-' + objectid;
	var likebox = 'likebox-' + type + '-' + objectid;
	document.getElementById(slink).innerHTML = '<img src="/ajax-loader.gif" style="position: relative; top: 1px;">';
	
	if(type == '1') {
		if(document.getElementById(likebox).style.display == 'none') {
			Effect.Appear(likebox, { duration: 0.2 });
		}
	}

                if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                        receiveReq.open("GET", '/backend/likeobject.php?type=' + type + '&id=' + objectid, true);
                        receiveReq.onreadystatechange = handleLikeObject;
                        receiveReq.send(null);
                }
}

function handleLikeObject() {
	if (receiveReq.readyState == 4) {
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("like");
                var n_messages = topnavi_nodes.length;
                for (k = 0; k < n_messages; k++) {
                        var type_node = topnavi_nodes[k].getElementsByTagName("type");
                        var objectid_node = topnavi_nodes[k].getElementsByTagName("objectid");
			var spantitle_node = topnavi_nodes[k].getElementsByTagName("spantitle");
			var people_node = topnavi_nodes[k].getElementsByTagName("people");
			var totallikes_node = topnavi_nodes[k].getElementsByTagName("totallikes");
                        // albumid_node[0].firstChild.nodeValue
		        var slink = 'like-' + type_node[0].firstChild.nodeValue + '-' + objectid_node[0].firstChild.nodeValue;
        		var likebox = 'likebox-' + type_node[0].firstChild.nodeValue + '-' + objectid_node[0].firstChild.nodeValue;
			var liketarget = 'liketarget-' + type_node[0].firstChild.nodeValue + '-' + objectid_node[0].firstChild.nodeValue;
			if(type_node[0].firstChild.nodeValue == '1' && spantitle_node[0].firstChild.nodeValue == 'Unlike') {	
			        if(document.getElementById(likebox).style.display == 'none') {
                			Effect.Appear(likebox, { duration: 0.2 });
        			}
			}

			if(type_node[0].firstChild.nodeValue == '1' && spantitle_node[0].firstChild.nodeValue == 'Like' && people_node[0].firstChild.nodeValue == ' like this') {
				if(document.getElementById(likebox).style.display != 'none') {
					Effect.Fade(likebox, { duration: 0.2 });
				}
			}
	
			document.getElementById(slink).innerHTML = spantitle_node[0].firstChild.nodeValue;
			if(people_node[0].firstChild.nodeValue != '0' && type_node[0].firstChild.nodeValue != '3') { 
				if(people_node[0].firstChild.nodeValue == ' like this') { people_node[0].firstChild.nodeValue = ''; }
				document.getElementById(liketarget).innerHTML = people_node[0].firstChild.nodeValue;
			}
			if(type_node[0].firstChild.nodeValue == '3') {
				if(people_node[0].firstChild.nodeValue == ' like this') { document.getElementById(liketarget).innerHTML = ''; } else {
					document.getElementById(liketarget).innerHTML = '<img src="/img/thumbsup.png" style="width: 10px;"> ' + totallikes_node[0].firstChild.nodeValue;
				}
			}
                }

	}
}

function postCritique() {
	var critiquetitle = document.getElementById('critiquetitle').value;
	var critiqueinfo = document.getElementById('critiqueinfo').value;

	if(parseInt(critiqueinfo.length) > 250) {
                if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                sendReq.open("POST", '/backend/critiquepost.php', true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handlePostCritique;
                                var param = 'text=' + encodeURIComponent(critiqueinfo);
				param += '&title=' + encodeURIComponent(critiquetitle);
                                sendReq.send(param);
		}
	}
}

function handlePostCritique() {
	if (sendReq.readyState == 4) {
	        if(anchornavenabled == '1') {
        	        document.location.hash = '!/critique/my/done';
                	currentAnchor = 'foo';
                	checkAnchor();
        	} else {
                	location.href = '/critique/my/done';
        	}
	}
}

function critiqueWrite() {
	var reqchars = 250;
	var critiqueinfo = document.getElementById('critiqueinfo').value;
	var remaining = 250 - parseInt(critiqueinfo.length);
	if(remaining < 0) { remaining = 0; }
	if(remaining != 1) {
		var sword = 's'; 
	} else {
		var sword = '';
	}
	document.getElementById('charsleftinfo').innerHTML = remaining + ' character' + sword + ' remaining';
	if(remaining == 0) { 
		document.getElementById('critiquebutton').style.opacity = '1'; 
		document.getElementById('charsleftinfo').style.display = 'none';
	} else {
		document.getElementById('critiquebutton').style.opacity = '0.5';
		document.getElementById('charsleftinfo').style.display = 'inline';
	}
}

var showprint = '0';

function showPrint(id) {
	var mediumimg = 'mediumimg-' + id;
	var mediumdiv = 'mediumdiv-' + id;
	
	document.getElementById(mediumdiv).style.textAlign = 'left';
	
	document.getElementById(mediumimg).style.maxHeight = '700px';
	document.getElementById(mediumimg).style.maxWidth = '700px';

        var mediumheight = document.getElementById(mediumimg).offsetHeight;
        var mediumwidth = document.getElementById(mediumimg).offsetWidth;

	//alert(mediumwidth);

        var jumpleft = parseInt(mediumwidth)/2;
        var jumpbottom = parseInt(mediumheight)/2;

        var margin = (180-parseInt(mediumwidth))/2;
	var margin2 = (parseInt(mediumheight)/2)/2;

	document.getElementById(mediumimg).style.marginLeft = margin + 'px';
	document.getElementById(mediumimg).style.marginTop = '-' + margin2 + 'px';
	document.getElementById(mediumimg).style.zIndex = '1';
	document.getElementById(mediumimg).style.position = 'absolute';
	showprint = id;
}

function hidePrint() {
	if(showprint != '0') {
		var mediumimg = 'mediumimg-' + showprint;
		var mediumdiv = 'mediumdiv-' + showprint;

		document.getElementById(mediumimg).style.zIndex = '0';
		document.getElementById(mediumimg).style.marginLeft = '0' + 'px';
		document.getElementById(mediumimg).style.marginTop = '0' + 'px';

	        document.getElementById(mediumimg).style.maxHeight = '100px';
        	document.getElementById(mediumimg).style.maxWidth = '150px';

		document.getElementById(mediumdiv).style.textAlign = 'center';


		document.getElementById(mediumimg).style.position = 'relative';
		showprint = '0';
	}
}

function darkness() {
	if(document.getElementById('darkness').style.display != 'block') {
		document.getElementById('darkness').style.display = 'block';
		document.getElementById('chatbar_container').style.opacity = '.2';	
		document.getElementById('toplogo').src = '/img/1xtop-new-57d.png';
		document.getElementById('toplogo').style.zIndex = '5';
		document.getElementById('bigimage2').style.boxShadow = '#222 0px 1px 2px'; //0px 0px 0px #000';
	} else {
		document.getElementById('darkness').style.display = 'none';
		document.getElementById('chatbar_container').style.opacity = '1';
		if(dark != 'd') { document.getElementById('toplogo').src = '/img/1xtop-new-57.png'; }
		document.getElementById('bigimage2').style.boxShadow = '#ccc 0px 1px 2px';
	}
}

function printPopup(id) {
        if(document.getElementById('printscurrent') != null) {
		clearInterval(printsshifttimer);
	}
	if(document.getElementById('artistprintstab') == null) {
		hidePrint();
	}
	if(document.getElementById('getlocation') == null) {
		document.getElementById('lightsoffprint').style.display = 'block';
		document.getElementById('printpopup').style.opacity = '0';
		document.getElementById('printpopup').style.display = 'block';
		document.getElementById('printloading').style.display = 'block';
		document.getElementById('printpopuptarget').innerHTML = '<table border="0" height="650" width="800"><tr><td><center><img src="/ajax-loader.gif"></center></td></tr></table>';
	
       		if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
                	receiveReq.open("GET", '/backend/photo.php?id=' + id, true);
                	receiveReq.onreadystatechange = handlePrintPopup;
                	receiveReq.send(null);
        	}
	} else {
		document.getElementById('shippingloc').style.display = 'block';
		Effect.ScrollTo('shippingloc', { duration:'0.2', offset:-3005 });
		Effect.Shake('shippingloc');
	}
}

function handlePrintPopup() {
        if (receiveReq.readyState == 4)        
	{                
		var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("photodata");
                var n_messages = topnavi_nodes.length;
                var put = '';
                var taghit = 0;
                for (k = 0; k < n_messages; k++) {
                        var picid_node = topnavi_nodes[k].getElementsByTagName("picid");
                        var picname_node = topnavi_nodes[k].getElementsByTagName("picname");
                        var realname_node = topnavi_nodes[k].getElementsByTagName("realname");
                        var height_node = topnavi_nodes[k].getElementsByTagName("height");
                        var width_node = topnavi_nodes[k].getElementsByTagName("width");
                        var printsize_node = topnavi_nodes[k].getElementsByTagName("printsize");
			var userid_node = topnavi_nodes[k].getElementsByTagName("userid");
			var shipok_node = topnavi_nodes[k].getElementsByTagName("shipok");

                        var res1_node = topnavi_nodes[k].getElementsByTagName("res1");
                        var res2_node = topnavi_nodes[k].getElementsByTagName("res2");
                        var res3_node = topnavi_nodes[k].getElementsByTagName("res3");
                        var res4_node = topnavi_nodes[k].getElementsByTagName("res4");

                        var printsize1_node = topnavi_nodes[k].getElementsByTagName("printsizes1");
                        var printsize2_node = topnavi_nodes[k].getElementsByTagName("printsizes2");
                        var printsize3_node = topnavi_nodes[k].getElementsByTagName("printsizes3");
                        var printsize4_node = topnavi_nodes[k].getElementsByTagName("printsizes4");


                        put += '<table border="0" cellpadding="0" cellspacing="0"><tr><td style="background: #fff; padding: 30px;"><div><img onload="doTableWidth();" onclick="fullsizeImage(\'' + picid_node[0].firstChild.nodeValue + '\',\'' + width_node[0].firstChild.nodeValue + '\',\'' + height_node[0].firstChild.nodeValue + '\');" class="photothumb" src="http://1x.com/OEfullSize/large/' + picid_node[0].firstChild.nodeValue + '.jpg" style="margin: 0px 0px 0px 0px;"></div>';
			put += '<div style="margin: 15px 0px 0px 0px;"><img src="/img/zoom2.png" onclick="fullsizeImage(\'' + picid_node[0].firstChild.nodeValue + '\',\'' + width_node[0].firstChild.nodeValue + '\',\'' + height_node[0].firstChild.nodeValue + '\');" style="cursor: pointer; position: relative; top: 3px;"></div>';
			put += '</td>';

			put += '<td valign="top" style="padding: 30px; color: #fff; background: #000;">';
			put += '<img onclick="printPopupStop();" src="/img/closeblack.png" style="cursor: pointer; float: right; margin: -15px -15px 0px 0px;">';
			put += '<div style="width: 300px;color: #ffc600; font-size: 22px; font-weight: bold;">' + picname_node[0].firstChild.nodeValue + '</div><div style="margin: 5px 0px 20px 0px; font-size: 16px;"><a style="color: #fff;" href="/prints/all/' + userid_node[0].firstChild.nodeValue + '">' + realname_node[0].firstChild.nodeValue + ' &nbsp;<span style="position: relative; bottom: 1px; font-size: 13px;">(See more)</span></a></div>';

			if(shipok_node[0].firstChild.nodeValue != 'ok') {
				put += '<div style="width: 300px;">Unfortunately we cannot ship to your location at this moment. We are working hard to extend our shipping destinations.</div>';
			} else {

			var sizeloop = 0;

			while(sizeloop != parseInt(printsize_node[0].firstChild.nodeValue)) {
				sizeloop++;

				if(sizeloop == 1) { var size = printsize1_node[0].firstChild.nodeValue; var sizename = 'Small'; }
				if(sizeloop == 2) { var size = printsize2_node[0].firstChild.nodeValue; var sizename = 'Medium'; }
				if(sizeloop == 3) { var size = printsize3_node[0].firstChild.nodeValue; var sizename = 'Large'; }
				if(sizeloop == 4) { var size = printsize4_node[0].firstChild.nodeValue; var sizename = 'X-large'; }
				
if(sizeloop == '1') { var sizeid = '1'; var sizeprice = '49&euro;'; }
if(sizeloop == '2') { var sizeid = '2'; var sizeprice = '99&euro;'; }
if(sizeloop == '3') { var sizeid = '3'; var sizeprice = '149&euro;'; }
if(sizeloop == '4') { var sizeid = '4'; var sizeprice = '199&euro;'; }
if(sizeloop == '19') { var sizeid = '19'; var sizeprice = '79&euro;'; }
if(sizeloop == '20') { var sizeid = '20'; var sizeprice = '99&euro;'; }
if(sizeloop == '21') { var sizeid = '21'; var sizeprice = '159&euro;'; }
if(sizeloop == '22') { var sizeid = '22'; var sizeprice = '349&euro;'; }
if(sizeloop == '11') { var sizeid = '11'; var sizeprice = '99&euro;'; }
if(sizeloop == '12') { var sizeid = '12'; var sizeprice = '179&euro;'; }
if(sizeloop == '13') { var sizeid = '13'; var sizeprice = '279&euro;'; }
if(sizeloop == '14') { var sizeid = '14'; var sizeprice = '579&euro;'; }
if(sizeloop == '15') { var sizeid = '15'; var sizeprice = '99&euro;'; }
if(sizeloop == '16') { var sizeid = '16'; var sizeprice = '179&euro;'; }
if(sizeloop == '17') { var sizeid = '17'; var sizeprice = '279&euro;'; }
if(sizeloop == '18') { var sizeid = '18'; var sizeprice = '579&euro;'; }
if(sizeloop == '23') { var sizeid = '23'; var sizeprice = '69&euro;'; }
if(sizeloop == '24') { var sizeid = '24'; var sizeprice = '139&euro;'; }

        			put += '<div style="margin: 10px 0px 0px 0px;"><table border="0" width="100%"><tr><td width="70"><div style="font-size: 14px; font-weight: bold;">' + sizename + '</div><div style="font-size: 13px; margin-top: 4px;">' + size + '</div></td><td width="120"><center><div style="font-size: 19px;">' + sizeprice + '</div></center></td><td align="right"><span class="addtocartbutton" onclick="this.innerHTML = \'One added!\'; addToCart(\'' + sizeid + '\',\'' + picid_node[0].firstChild.nodeValue + '\',\'\',\'Printed photo, ' + sizename + ' size\',\'' + sizeprice + '\');">Add to cart</span></td></tr></table></div>';
			}

			}

			put += '<div style="width: 300px; line-height: 20px; margin: 30px 0px 10px 0px; font-size: 13px;">Premium quality matte print exposed in a high-end lambda printer and chemically developed on real photographic paper. Delivered to your doorstep.</div></td></tr>';
			put += '</table>';

		}
		document.getElementById('printpopuptarget').innerHTML = put;
	}
}

function doTableWidth() {
	setTimeout('tableWidth();',100);
}

function tableWidth() {
        var twidth = document.getElementById('printpopup').offsetWidth;
	var twidth2 = parseInt(twidth)/2;
        var theight = document.getElementById('printpopup').offsetHeight;
        var theight2 = parseInt(theight)/2;

	document.getElementById('printpopup').style.marginLeft = '-' + twidth2 + 'px';
	document.getElementById('printpopup').style.marginTop = '-' + theight2 + 'px';
	document.getElementById('printloading').style.display = 'none';
	Effect.Appear('printpopup', { duration: 0.2 });
	//document.getElementById('printpopup').style.opacity = '1';
}

function fullsizeImage(id,width,height) {
        document.getElementById('lightsoff2').style.display = 'block';
        document.getElementById('fullsizeimage').style.display = 'block';
	document.getElementById('fullsizeimage').style.height = height + 'px';
	document.getElementById('fullsizeimage').style.width = width + 'px';
	var twidth2 = parseInt(width)/2;
	var theight2 = parseInt(height)/2;
	document.getElementById('fullsizeimage').style.marginLeft = '-' + twidth2 + 'px';
	document.getElementById('fullsizeimage').style.marginTop = '-' + theight2 + 'px';
	document.getElementById('fullsizeimage').style.backgroundImage='url(http://imghost.1x.com/' + id + '.jpg)';
        document.getElementById('printslightsoff').style.display = 'block';

}

function fullsizeImageStop() {
        document.getElementById('lightsoff2').style.display = 'none';
        document.getElementById('fullsizeimage').style.display = 'none';
	document.getElementById('printslightsoff').style.display = 'none';

}

function printPopupStop() {
        if(document.getElementById('printscurrent') != null) {
		printsShift();
        }
	document.getElementById('lightsoffprint').style.display = 'none';
	document.getElementById('printpopup').style.display = 'none';
	document.getElementById('printpopuptarget').innerHTML = '';
}

function closeCart() {
	if(parseInt(document.getElementById('cartcount').innerHTML) > 0) {
		document.getElementById('cart_hidden').style.display = 'block';
	} else {
		document.getElementById('cart_hidden').style.display = 'none';
	}
	document.getElementById('cart_full').style.display = 'none';
}

function openCart() {
        document.getElementById('cart_hidden').style.display = 'none'; 
        document.getElementById('cart_full').style.display = 'block';
}

function printsLightsoff() {
	if(printsfullsizebg == '#000') {
		document.getElementById('lightsoff2').style.background = '#fff'; 
		printsfullsizebg = '#fff';
	} else {
		document.getElementById('lightsoff2').style.background = '#000';
		printsfullsizebg = '#000';
	}
}

function getWallPosts() {
	var wallmode = document.getElementById('wallmode').value;
	var walllatest = document.getElementById('walllatest').value;

	if(document.getElementById('getpost') != null) {
		var getpost = document.getElementById('getpost').value;
	} else {
		var getpost = '0';
	}

	document.getElementById('getmorewallpostsbutton').innerHTML = '<img src="/ajax-loader.gif">';

                if (receiveReq9.readyState == 4 || receiveReq9.readyState == 0) {
                        receiveReq9.open("GET", '/backend/feed.php?id=' + wallmode + '&from=' + walllatest + '&getpost=' + getpost, true);
                        receiveReq9.onreadystatechange = handleGetWallPosts;
                        receiveReq9.send(null);
                }
}

function handleGetWallPosts() {
        if (receiveReq9.readyState == 4)
        {
                var xmldoc = receiveReq9.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("feed");
                var n_messages = topnavi_nodes.length;
                var put = '';
		var pcounter = 0;
                for (k = 0; k < n_messages; k++) {
                        var data_node = topnavi_nodes[k].getElementsByTagName("data");
			var newsid_node = topnavi_nodes[k].getElementsByTagName("newsid");
                        put += data_node[0].firstChild.nodeValue;
			document.getElementById('walllatest').value = newsid_node[0].firstChild.nodeValue;
			pcounter++;
		}
		if(pcounter > 0) {
			if(document.getElementById('getwallposts') != null) {
				document.getElementById('newsdiv').innerHTML = put;
				document.getElementById('getmorewallposts').style.display = 'block';
			} else {
				document.getElementById('newsdiv').innerHTML += put;
				document.getElementById('getmorewallposts').style.display = 'block';
			}
			if(document.getElementById('totalwallposts') != null) {
				document.getElementById('totalwallposts').value = parseInt(document.getElementById('totalwallposts').value) + pcounter;
				if(parseInt(document.getElementById('totalwallposts').value) < 10 && parseInt(document.getElementById('totalwallposts').value) != 1) {
					setTimeout('getWallPosts();',500);
				}
			}
		} else {
			if(document.getElementById('getwallposts') != null) {
				document.getElementById('newsdiv').innerHTML = '<div id="wallempty" style="padding: 40px 20px 20px 20px; font-size: 13px; color: #999;"><center>Wall is empty</center></div>';
			} else {
				document.getElementById('getmorewallposts').style.display = 'none';
				document.getElementById('newsdiv').innerHTML += '<div id="wallempty" style="padding: 40px 20px 20px 20px; font-size: 13px; color: #999;"><center>No more posts to show</center></div>';
			}
		}
		document.getElementById('getmorewallpostsbutton').innerHTML = 'Get older posts';
	}
}

function preSearch() {
	postlastsearch = '';
	clearInterval(searchtimeout);
	searchtimeout = setTimeout('postSearch();',200);
}

function postSearchMore() {
        var s_query = document.getElementById('s_query').value;
	var postsearchmode = document.getElementById('postsearchmode').value;
	document.getElementById('oldestphoto').value = parseInt(document.getElementById('oldestphoto').value)+1;
	var oldestphoto = document.getElementById('oldestphoto').value;
        clearInterval(searchtimeout);
        if(s_query == postlastsearch) {
                if (receiveReq9.readyState == 4 || receiveReq9.readyState == 0) {
                        receiveReq9.open("GET", '/backend/bigsearch.php?mode=' + postsearchmode + '&q=' +  s_query + '&from=' + oldestphoto, true);
                        receiveReq9.onreadystatechange = handlePostSearch;
                        receiveReq9.send(null);
                }
	}
}

function postSearch() {
	var s_query = document.getElementById('s_query').value;
	var postsearchmode = document.getElementById('postsearchmode').value;
	document.getElementById('oldestphoto').value = '0';
	clearInterval(searchtimeout);
	if(s_query != postlastsearch && s_query != '') {
		postlastsearch = s_query;
                if (receiveReq9.readyState == 4 || receiveReq9.readyState == 0) {
                        receiveReq9.open("GET", '/backend/bigsearch.php?mode=' + postsearchmode + '&q=' +  s_query, true);
                        receiveReq9.onreadystatechange = handlePostSearch;
                        receiveReq9.send(null);
                }
	}
}

function handlePostSearch() {
        if (receiveReq9.readyState == 4)
        {       
		var postsearchmode = document.getElementById('postsearchmode').value;
	        var xmldoc = receiveReq9.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("search");
                var n_messages = topnavi_nodes.length;
                var put = '<table border="0" width="100%">';
		var searchresultcounter = 0;
		var searchresultloop = 0;
                for (k = 0; k < n_messages; k++) {
			searchresultcounter++;
			searchresultloop++;
			if(searchresultloop == 1) {
				put += '<tr>';
			}
                        var title_node = topnavi_nodes[k].getElementsByTagName("title");
                        var realname_node = topnavi_nodes[k].getElementsByTagName("realname");
                        var photo_node = topnavi_nodes[k].getElementsByTagName("photo");
			var picid_node = topnavi_nodes[k].getElementsByTagName("picid");
                        var link_node = topnavi_nodes[k].getElementsByTagName("link");
			if(postsearchmode == 'photos') {
				put += '<td width="20%"><center><a href="' + link_node[0].firstChild.nodeValue + '"><img border="0" class="printspic3" src="' + photo_node[0].firstChild.nodeValue + '" style="margin: 20px 0px 20px 0px;" title="' + title_node[0].firstChild.nodeValue + ' by ' + realname_node[0].firstChild.nodeValue + '"></center></td>';

                        	//put += '<td width="20%"><center><a target="new" href="' + link_node[0].firstChild.nodeValue + '/fromsearch"><img border="0" class="printspic3" src="' + photo_node[0].firstChild.nodeValue + '" style="margin: 20px 0px 20px 0px;" title="' + title_node[0].firstChild.nodeValue + ' by ' + realname_node[0].firstChild.nodeValue + '"></center></td>';
			} else {
				put += '<td width="20%"><center><a href="' + link_node[0].firstChild.nodeValue + '"><img border="0" class="printspic3" src="' + photo_node[0].firstChild.nodeValue + '" style="margin: 20px 0px 0px 0px; height: 100px; width: 100px;"><div style="margin: 10px 0px 20px 0px; font-size: 13px;">' + realname_node[0].firstChild.nodeValue + '</div></center></td>';
			}
                        if(searchresultloop == 5) {
                                searchresultloop = 0;
                                put += '</tr>';
                        }
		}
		while(searchresultloop) {
			searchresultloop++;
			if(searchresultloop == 5) {
				searchresultloop = 0;
				put += '</tr>';
			}
		}
		put += '</table>';
		if(searchresultcounter > 0) {
			document.getElementById('postsearchbutton').style.display = 'block';
		} else {
			document.getElementById('postsearchbutton').style.display = 'none';
		}
	        var s_query = document.getElementById('s_query').value;
        	var oldestphoto = document.getElementById('oldestphoto').value;
        	if(s_query == postlastsearch && parseInt(oldestphoto) > 0) {
			document.getElementById('s_results').innerHTML += put;
		} else {
			document.getElementById('s_results').innerHTML = put;
		}
	}
}

function showForumPost(id,scroll) {
	if(id > 0) {
		var compresseddiv = 'compressed2-' + id;
		document.getElementById(compresseddiv).innerHTML = '<center><span style="font-size: 11px;">Fetching post...</span> &nbsp; <img style="position: relative; top: 2px;" src="/ajax-loader.gif">';
                receiveReq.open("GET", '/backend/forumpostget.php?id=' + id + '&scroll=' + scroll, true);
                receiveReq.onreadystatechange = handleShowForumPost;
                receiveReq.send(null);
	}
}

function handleShowForumPost() {
        if (receiveReq.readyState == 4)
        {
                var newmsgarray = new Array();
                var newmsgarray2 = new Array();
                var newmsgcount = 0;
                var newmsgcount2 = 0;
                var xmldoc = receiveReq.responseXML;
                var topnavi_nodes = xmldoc.getElementsByTagName("comment");
                var n_messages = topnavi_nodes.length;
                var put = '';
		var scroll = '0';
		var replaceid = 0;
		var activesection = document.getElementById('sectionid').value;
                for (k = 0; k < n_messages; k++) {
                        var msgid_node = topnavi_nodes[k].getElementsByTagName("msgid");
                        var realname_node = topnavi_nodes[k].getElementsByTagName("realname");
                        var userid_node = topnavi_nodes[k].getElementsByTagName("userid");
                        var profilepic_node = topnavi_nodes[k].getElementsByTagName("profilepic");
                        var message_node = topnavi_nodes[k].getElementsByTagName("message");
                        var date_node = topnavi_nodes[k].getElementsByTagName("date");
			var scroll_node = topnavi_nodes[k].getElementsByTagName("scroll");
			var likebox_node = topnavi_nodes[k].getElementsByTagName("likebox");
			var markbad_node = topnavi_nodes[k].getElementsByTagName("markbad");
			var posted_node = topnavi_nodes[k].getElementsByTagName("posted");
			var title_node = topnavi_nodes[k].getElementsByTagName("title");
			var level_node = topnavi_nodes[k].getElementsByTagName("level");
			var attachment_node = topnavi_nodes[k].getElementsByTagName("attachment");

			message_node[0].normalize();
			if(title_node[0].firstChild.nodeValue == 'false') { title_node[0].firstChild.nodeValue = ''; }
                        put = '<table style="margin: 10px 0px 10px 0px;" border="0" cellpadding="0" cellspacing="0" width="100%" id="full-' + msgid_node[0].firstChild.nodeValue + '"><tr style="display: table-row;" id="full-' + msgid_node[0].firstChild.nodeValue + '"><td valign="top" style=""><div id="junk1-' + msgid_node[0].firstChild.nodeValue + '" class="forumpostheader"><table border="0" cellpadding="0" cellspacing="0"><tr><td width="48"><img src="' + profilepic_node[0].firstChild.nodeValue + '" width="35"></td><td><div id="msg-' + msgid_node[0].firstChild.nodeValue + '" style="font-weight: bold; font-size: 13px;"><a href="' + hashmark + '/artist/' + userid_node[0].firstChild.nodeValue + '">' + realname_node[0].firstChild.nodeValue + '</a>&nbsp;<a href="/artist/' + userid_node[0].firstChild.nodeValue + '/awards" title="Level ' + level_node[0].firstChild.nodeValue + ' of 6"><img src="/img/stars/lvl' + level_node[0].firstChild.nodeValue + '-XS.png" style="width: 12px;" border="0"></a> <span style=\"font-weight: normal; color: #555; font-size: 10px; position: relative; bottom: 1px; margin: 0px 0px 0px 0px;\">' + title_node[0].firstChild.nodeValue + '</span></div><div style="font-size: 11px;margin-top: 5px; ">Posted ' + posted_node[0].firstChild.nodeValue + '</div></td></tr></table></div><div class="forumpostbody" id="junk2-' + msgid_node[0].firstChild.nodeValue + '"><div style="font-size: 13px; max-width: 960px; overflow: auto; padding: 10px 10px 10px 10px; line-height: 24px;" id="msgcontent-' + msgid_node[0].firstChild.nodeValue + '">' + message_node[0].firstChild.nodeValue + '</div></div></td></tr><tr><td colspan="2" class="forumpostfooter"><div> ' + attachment_node[0].firstChild.nodeValue + '<div class="forumsubbuttons"><div style="float: right;">' + likebox_node[0].firstChild.nodeValue + '</div><table border="0" cellpadding="0" cellspacing="0"><tr id="buttons' + msgid_node[0].firstChild.nodeValue + '"><td><span class="squarebutton2" onclick="addQuote(\'' + realname_node[0].firstChild.nodeValue + '\',' + msgid_node[0].firstChild.nodeValue + ',\'\',\'' + userid_node[0].firstChild.nodeValue + '\');" id="quoteall-' + msgid_node[0].firstChild.nodeValue + '">Quote all</span> &nbsp; </td><td><span class="squarebutton2" onmousedown="addQuoteSel(\'' + realname_node[0].firstChild.nodeValue + '\',' + msgid_node[0].firstChild.nodeValue + ',\'' + userid_node[0].firstChild.nodeValue + '\');" id="quotesel-' + msgid_node[0].firstChild.nodeValue + '">Quote selected text</span> &nbsp; </td>';

			if(moderator == '1') {
				if(activesection != '62') {
					put += '<td><span class="squarebutton2" onclick="editPost(\'' + msgid_node[0].firstChild.nodeValue + '\');">Edit post</span> &nbsp; </td><td><span class="squarebutton2" onclick="deletePost(\'' + msgid_node[0].firstChild.nodeValue + '\',\'0\',\'0\');">Delete post</span> &nbsp; </td>';
				} else {
					put += '<td><span class="squarebutton2" onclick="editPost(\'' + msgid_node[0].firstChild.nodeValue + '\');">Edit post</span> &nbsp; </td><td><span class="squarebutton2" onclick="deletePost(\'' + msgid_node[0].firstChild.nodeValue + '\',\'0\',\'1\');">Delete (spam)</span> &nbsp;<span class="squarebutton2" onclick="deletePost(\'' + msgid_node[0].firstChild.nodeValue + '\',\'0\',\'2\');">Delete (insufficient)</span> &nbsp;</td>';
				}
				//put += '<td>' + markbad_node[0].firstChild.nodeValue + '</td>';
			}
			if(userid_node[0].firstChild.nodeValue == myuserid || moderator == '1') {
				put += '<td><span onclick="startAttach(\'' + msgid_node[0].firstChild.nodeValue + '\');" id="attach-' + msgid_node[0].firstChild.nodeValue + '" class="squarebutton2">Attach image</span> &nbsp; </td>';
			}
			put += '</tr></table>';
			replaceid = msgid_node[0].firstChild.nodeValue;
			scroll = scroll_node[0].firstChild.nodeValue;
		}
		if(replaceid > 0) {
			document.getElementById('compressed-' + replaceid).innerHTML = put;
		}
                if(scroll == '1') {
                        var scrollto = 'full-' + replaceid;
                        Effect.ScrollTo(scrollto);
			//Effect.Highlight(scrollto);
                }

	}
}

function printsShift() {
	clearInterval(printsshifttimer);
	printsshifttimer = setTimeout('shiftPrint()',7000);
}

function shiftPrint() {
	clearInterval(printsshifttimer);
	if(document.getElementById('printscurrent') != null) {
		var currentprint = document.getElementById('current').value;
		var next = parseInt(currentprint) + 1;
		var nextid = '';
		if(next == '7') { next = '1'; }
		if(next == '1') { nextid = '31689'; }
		if(next == '2') { nextid = '35885'; }
		if(next == '3') { nextid = '36672'; }
		if(next == '4') { nextid = '38812'; }
		if(next == '5') { nextid = '35992'; }
		if(next == '6') { nextid = '36444'; }
		var next2 = next + 1;
		document.getElementById('printswindow').style.backgroundImage='url("/img/printsroom-slide' + currentprint + '.jpg")';
		document.getElementById('printscache').innerHTML = '<img src="/img/printsroom-slide' + next2 + '.jpg">';
		document.getElementById('printswindow').innerHTML = '<input type="hidden" id="current" value="' + next + '"><img id="printscurrent" style="display: none;" onclick="printPopup(\'' + nextid + '\');" style="cursor: pointer;" src="/img/printsroom-slide' + next + '.jpg" onload="printsShift();">';
		Effect.Appear('printscurrent');
	}
}

function promoteUpdate() {
	if(document.getElementById('buyprintbutton-1').checked == 1) {
		var imgurl = 'http://1x.com/buttons/buyprint_large_white.png';
	}
        if(document.getElementById('buyprintbutton-2').checked == 1) {
                var imgurl = 'http://1x.com/buttons/buyprint_large_black.png';
        }       
        if(document.getElementById('buyprintbutton-3').checked == 1) {
                var imgurl = 'http://1x.com/buttons/buyprint_small_white.png';
        }       
        if(document.getElementById('buyprintbutton-4').checked == 1) {
                var imgurl = 'http://1x.com/buttons/buyprint_small_black.png';
        }       
	if(document.getElementById('buyprintbutton-5').checked == 1) {
		var imgurl = '';
	}

	document.getElementById('firstthumb').src = '/pictures/' + document.getElementById('buyprintbutton-photo').value + '-square.jpg';

	if(imgurl != '') {
		var code = '<tt>&lt;a title="Click to buy a print of this photo" target="_blank" href="http://1x.com/artist/' + myuserid + '/prints/view/' + document.getElementById('buyprintbutton-photo').value + '"&gt;&lt;img src="' + imgurl + '" border="0"&gt;&lt/a&gt;</tt>';
	} else { 
		var code = '<tt>&lt;a title="Click to buy a print of this photo" target="_blank" href="http://1x.com/artist/' + myuserid + '/prints/view/' + document.getElementById('buyprintbutton-photo').value + '"&gt;Click here to buy a print of this photo&lt/a&gt;</tt>';
	}

	document.getElementById('buyprintbutton-code').innerHTML = code;


}

function seriesCreate() {
	// series_name series_desc series_create
	document.getElementById('series_create').innerHTML = '<img src="/ajax-loader.gif">';

                        if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                sendReq.open("POST", '/backend/seriescreate.php', true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handleSeriesCreate;
                                var param = 'name=' + encodeURIComponent(document.getElementById('series_name').value);
				param += '&desc=' + encodeURIComponent(document.getElementById('series_desc').value);
                                sendReq.send(param);
                        }

}

function handleSeriesCreate() {
	if (sendReq.readyState == 4) {
        	if(anchornavenabled == '1') {
                	document.location.hash = '!/series/uploaded';;
                	currentAnchor = 'foo';
                	checkAnchor();
        	} else {
                	location.href = '/series/uploaded';
        	}
	}

}

function seriesOrder() {
                Sortable.create('dragdrop', {
                        tag:'div',overlap:'horizontal',constraint: false,
                        onUpdate:function(){
                }
                });

}

function saveSeries() {
	// series_edit_desc series_edit_name

	var seriesid = document.getElementById('series_id').value;

	if(seriesid) {

                var uoDiv = document.getElementById('dragdrop');
                var loop = 0;
                var order = '';
                if(uoDiv.firstChild) {
                        var uoChild = uoDiv.firstChild;
                        while(uoChild) {
                                if(uoChild.nodeType==1 && uoChild.id != 'undefined') {
                                        order += uoChild.id + ':';
                                }
                                uoChild = uoChild.nextSibling;
                        }
                }

                        if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                sendReq.open("POST", '/backend/seriessave.php?id=' + seriesid, true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handleSeriesSave;
                                var param = 'name=' + encodeURIComponent(document.getElementById('series_edit_name').value);
                                param += '&desc=' + encodeURIComponent(document.getElementById('series_edit_desc').value);
				param += '&order=' + order;
                                sendReq.send(param);
                        }
	}
}

function handleSeriesSave() {
	if (sendReq.readyState == 4) {
		document.getElementById('series_edit_status').innerHTML = 'Info and order saved!';	
		setTimeout('document.getElementById(\'series_edit_status\').innerHTML = \'\';',2000);
	}
}

function postSeries(seriesid) {
        var agree=confirm("Are you sure? Once you have posted your series to the curators you will no longer be able to change image order, name or description. Continue?");
        if(agree) {
		location.href='/series/edit/' + seriesid + '/post';
	}	
}

function checkPaymentMethod() {
	if(document.getElementById('pay_paypal').checked == 1) {
		document.getElementById('makepaymentform').action = '/shoppingcart/makepayment/paypal';
	} else {
		document.getElementById('makepaymentform').action = '/shoppingcart/makepayment';
	}
}

function startAttach(msgid) {
	Effect.Appear('attached-' + msgid);
	if(document.getElementById('activeattach') != null) {
		var removeattach = document.getElementById('activeattach').value; 
		document.getElementById('attachbrowser-' + removeattach).innerHTML = '';
	}

	document.getElementById('attachbrowser-' + msgid).innerHTML = '<input type="hidden" id="activeattach" value="' + msgid + '"><div style="display: none; text-align: center; width: 410px; height: 90px; font-size: 13px; padding: 30px 20px 10px 20px;" id="uploading"><img src="/ajax-loader.gif"><br /><br />Uploading, please wait...</div><iframe id="uploader" src="/backend/forummsgupload.php?msgid=' + msgid + '" style="border: 0px;overflow: none;" frameborder="0" scrolling="no" border="0" width="450" height="90"></iframe>';
	
}

function finishFMupload(msgid,uploadid) {
	if(document.getElementById('attachtarget-' + msgid).innerHTML == 'No images attached') {
		document.getElementById('attachtarget-' + msgid).innerHTML = ''; 
	}
	document.getElementById('attachtargettr-' + msgid).innerHTML += '<td id="attachtd-' + msgid + '-' + uploadid + '"><center><img src="/fmpics/' + uploadid + '-T.jpg" onclick="viewForumAttachment(\'' + uploadid + '\');" class="framepic" style="max-height: 50px;"><div style="margin: 4px 0px 0px 0px; font-size: 13px;"><a href="javascript:void(0);" class="bblue" onclick="deleteFM(\'' + msgid + '\',\'' + uploadid + '\');">&times;</a></div></center></td><td width="10">&nbsp;</td>  ';
        document.getElementById('uploading').style.display = 'none';
        document.getElementById('uploader').style.display = 'block';

        if(document.getElementById('activeattach') != null) {
                var removeattach = document.getElementById('activeattach').value;
                document.getElementById('attachbrowser-' + removeattach).innerHTML = '';
        }


}

function deleteFM(msgid,uploadid) {

			document.getElementById('attachtd-' + msgid + '-' + uploadid).innerHTML = '<div style="font-size: 11px;"><i><center>Deleted</center></i></div>';

                        if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                sendReq.open("POST", '/backend/deleteforumattach.php', true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handleDeleteFM;
                                var param = 'msgid=' + msgid;
                                param += '&uploadid=' + uploadid;
                                sendReq.send(param);
                        }
}

function handleDeleteFM() {
	if (sendReq.readyState == 4) {

	}
}


function viewForumAttachment(attachid) {
	document.getElementById('lightsoff').style.display = 'block';
	document.getElementById('forumattachmenttarget').innerHTML = '<img id="fattachment" src="/fmpics/' + attachid + '-F.jpg" onclick="document.getElementById(\'lightsoff\').style.display = \'none\'; document.getElementById(\'forumattachmenttarget\').innerHTML = \'\';" style="position: fixed; top: 50%; left: 50%; display: none;z-index: 20; cursor: pointer;" onload=\"showForumattachment(\'' + attachid + '\');" class="framepic">';
}

function showForumattachment(attachid) {
	var pwidth = document.getElementById('fattachment').width;
	var pheight = document.getElementById('fattachment').height;
	pwidth = parseInt(pwidth)/2;
	pheight = parseInt(pheight)/2;
	document.getElementById('fattachment').style.marginLeft = '-' + pwidth + 'px';
	document.getElementById('fattachment').style.marginTop = '-' + pheight + 'px';
	document.getElementById('fattachment').style.display = 'block';
}

function countdownStart() {
	clearInterval(frontcountdown);
	if(document.getElementById('countdown') != null) {

		var set_secs = parseInt(document.getElementById('countdown-seconds').innerHTML);
		var set_mins = parseInt(document.getElementById('countdown-minutes').innerHTML);
		var set_hours = parseInt(document.getElementById('countdown-hours').innerHTML);
		var set_days = parseInt(document.getElementById('countdown-days').innerHTML);

		set_secs = set_secs - 1;

		if(set_secs < 0) { set_secs = 59; set_mins = set_mins - 1; }
		if(set_mins < 0) { set_mins = 59; set_hours = set_hours - 1; }
		if(set_hours < 0) { set_hours = 23; set_days = set_days - 1; }
		if(set_days < 0) { set_hours = 0; set_days = 0; set_mins = 0; set_secs = 0; }

		if(set_secs == 1) { var s_s = ''; } else { var s_s = 's'; }
		if(set_mins == 1) { var s_m = ''; } else { var s_m = 's'; }
		if(set_hours == 1) { var s_h = ''; } else { var s_h = 's'; }
		if(set_days == 1) { var s_d = ''; } else { var s_d = 's'; }


		document.getElementById('countdown-seconds').innerHTML = set_secs;
		document.getElementById('countdown-minutes').innerHTML = set_mins;
		document.getElementById('countdown-hours').innerHTML = set_hours;
		document.getElementById('countdown-days').innerHTML = set_days;

		document.getElementById('s_s').innerHTML = s_s;
		document.getElementById('s_m').innerHTML = s_m;
		document.getElementById('s_h').innerHTML = s_h;
		document.getElementById('s_d').innerHTML = s_d;

		if(set_secs != '0' || set_mins != '0' || set_hours != '0' || set_days != '0') {
			frontcountdown = setTimeout('countdownStart();',1000);
		} else {
			if(document.getElementById('preorder_container') != null) {
				document.getElementById('preorder_container').innerHTML = '<span class="preorderbutton" onclick="location.href=\'/books/beyond\';">Click here to pre-order</span>';
			}
		}
	}
}

function fotomotoEnable() {
	//document.getElementById('fotomotostatus').innerHTML = '<div style="padding: 10px;"><center><img src="/ajax-loader.gif"></center></div>';
	document.getElementById('fm_lightsoff').style.display = 'block';
	document.getElementById('fm_messagewindow').style.display = 'block';
	document.getElementById('fm_message').innerHTML = 'Registering an account at Fotomoto. If this takes longer than 2 minutes, please reload and try again.';
	fotomotosetup = 'Setup is complete. You will receive an e-mail from Fotomoto with instructions how to complete the setup.<br /><br /><span class="squarebutton1" onclick="location.href=\'' + hashmark + '/settings/done\';">Close</span>';
                        if (sendReq.readyState == 4 || sendReq.readyState == 0) {
                                sendReq.open("POST", '/fotomoto/backend/register.php', true);
                                sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                sendReq.onreadystatechange = handleFotomotoEnable;
                                var param = 'status=ok';
                                sendReq.send(param);
                        }
}

function handleFotomotoEnable() {
        if (sendReq.readyState == 4) {
                var xmldoc = sendReq.responseXML;
                var result_node = xmldoc.getElementsByTagName("result");
		var id_node = xmldoc.getElementsByTagName("id");
                if(result_node[0].firstChild.nodeValue == 'OK') {
			document.getElementById('fmp-id').value = id_node[0].firstChild.nodeValue;
			fotomotoCheckin();
		} else {
			document.getElementById('fotomotostatus').innerHTML = '<b>There was an error setting up your account with Fotomoto. Try again later.</b>';
		}
	}
}

function fotomotoSyncPhotos() {
	fotomotosetup = 'Sync complete.<br /><br /><span class="squarebutton1" onclick="location.href=\'' + hashmark + '/settings/done\';">Close</span>';
        document.getElementById('fm_lightsoff').style.display = 'block';
        document.getElementById('fm_messagewindow').style.display = 'block';
        document.getElementById('fm_message').innerHTML = 'Syncing...';
	fotomotoCheckin();
}

function fotomotoCheckin() {
	if(document.getElementById('fmp-id').value != '') {
		var fmp_now = parseInt(document.getElementById('fmp-now').value);
		var fmp_total = parseInt(document.getElementById('fmp-total').value);
	
		fmp_now = fmp_now + 1
		document.getElementById('fmp-now').value = fmp_now;
	
		var fmp_transferid = 'fmp-' + fmp_now;
		
		if(document.getElementById(fmp_transferid) == null) {
			document.getElementById('fm_message2').innerHTML = '<div style="padding: 40px;">' + fotomotosetup + '</div>';
		} else {
			var fmp_picid = document.getElementById(fmp_transferid).value;
			document.getElementById('fm_message').innerHTML = 'Registering image ' + fmp_picid + ' on Fotomoto<br /><br ><img src="/OEfullSize/tiny/' + fmp_picid + '.jpg">';

			FOTOMOTO.API.checkinImage('http://1x.com/OEfullSize/large/' + fmp_picid + '.jpg',"fotomotoCheckin",null,document.getElementById('fmp-id').value);
		}
	}
}
