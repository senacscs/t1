array1 = new Array ("img/pressaoestetica_x_gordofobia_1.png", "img/pressaoestetica_x_gordofobia_2.png", "img/pressaoestetica_x_gordofobia_3.png", "img/pressaoestetica_x_gordofobia_4.png", "img/pressaoestetica_x_gordofobia_5.png", "img/pressaoestetica_x_gordofobia_6.png", "img/pressaoestetica_x_gordofobia_7.png")

function comeco(){
document.getElementById('imgId').src = array1[0]
document.form.texto.value="0"
}

function mais(){
document.form.texto.value = Math.floor (1+ 1 - 2 + (document.form.texto.value) * 1 + 1)
if (document.form.texto.value > 2)
{document.form.texto.value = 0}
}

function mais(){
document.form.texto.value = Math.floor (1+ 1 - 2 + (document.form.texto.value) * 1 + 1)
if (document.form.texto.value > 3)
{document.form.texto.value = 0}
}
   
function mais(){
document.form.texto.value = Math.floor (1+ 1 - 2 + (document.form.texto.value) * 1 + 1)
if (document.form.texto.value > 4)
{document.form.texto.value = 0}
}

function mais(){
document.form.texto.value = Math.floor (1+ 1 - 2 + (document.form.texto.value) * 1 + 1)
if (document.form.texto.value > 5)
{document.form.texto.value = 0}
}

function mais(){
document.form.texto.value = Math.floor (1+ 1 - 2 + (document.form.texto.value) * 1 + 1)
if (document.form.texto.value > 6)
{document.form.texto.value = 0}
}

function menos(){
document.form.texto.value = Math.floor (1+ 1 - 2 + (document.form.texto.value) * 1 -1)
if (document.form.texto.value < 0)
{document.form.texto.value = 6}
}

function regular(){
document.getElementById('imgId').src = array1[document.form.texto.value];
setTimeout("regular()", 1)
}
