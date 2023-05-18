/* Archivo con funcionalidad JS */

function putHand(item) {
	item.style.cursor = 'hand';
}

function hide_unHide(item) {

   var elem = document.getElementById(item);
   
  if (elem.style.visibility == 'visible') {
     elem.style.visibility = 'hidden';
  } else {
     elem.style.visibility = 'visible';
  }
}
