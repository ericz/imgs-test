if(document.location.hash != '' && document.location.hash != '#') {
	var currentAnchor = document.location.hash;
	var urlanchor = currentAnchor.replace("#!/","");
	location.href='/' +urlanchor;
}
