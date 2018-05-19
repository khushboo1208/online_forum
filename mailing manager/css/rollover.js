//<script src="rollover.js"></script>



function chkall() {
$(function(){
//alert("hello");
var v = document.getElementById('chk');// document.getElementsByClassName('chk');// $(".chk");
//alert(v);
/*for(var i=0;i<v.length;i++) {
alert(v[i].val());
}*/
  $(".chk").attr('checked',"checked");
});
}

function unchk() {
$(function(){
 $(".chk").removeAttr('checked');
  //$(".chk").checked = false;
});
}


/*<input type ="checkbox" class = "chk">
<input type ="checkbox" class = "chk">
<button class = "chkall" onclick = "chkall()" id="chkall">chk al</button>
<button  class = "unchk" onclick = "unchk()" id="unchk">unchk</button>
*/