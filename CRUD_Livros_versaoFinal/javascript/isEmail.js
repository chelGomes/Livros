function isEmail(text){
   var 	arroba = "@",
       	ponto = ".",
	   	posponto = 0,
	   	posarroba = 0;
	
	 if (text =="") return false;
	
	 for (var indice = 0; indice < text.length; indice++){
	 	if (text.charAt(indice) == arroba) {
	 		posarroba = indice;
	      	break;
		 }
	 }
	
	for (var indice = posarroba; indice < text.length; indice++){
		if (text.charAt(indice) == ponto) {
			posponto = indice;
	     	break;
		}
	}
	if (posponto == 0 || posarroba == 0) return false;
	if (posponto == (posarroba + 1)) return false;
	if ((posponto + 1) == text.length) return false;
	return true;
}