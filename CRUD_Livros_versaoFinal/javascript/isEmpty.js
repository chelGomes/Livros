function isEmpty(pStrText){
	var	len = pStrText.length;
	var pos;
	var vStrnewtext = "";

	for (pos=0; pos<len; pos++){
		if (pStrText.substring(pos, (pos+1)) != " "){
			vStrnewtext = vStrnewtext + pStrText.substring(pos, (pos+1));
		}
	}

	if (vStrnewtext.length > 0)
		return false;
	else
		return true;
}