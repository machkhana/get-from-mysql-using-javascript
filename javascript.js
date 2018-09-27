$(document).ready(function(){
	$('input').keyup(function(){
		if(($('#spa').val().length > 0) && ($('#eng').val().length > 0))
			$("#submit").prop('disabled', false);
		else
			$("#submit").prop('disabled', true);
	});
    $('#button').click(function(){
        var a=20;
        var p =$(this).attr('id');
        if(p > a){
            $('#test').innerHTML=('cheshmaritia');
        }else{
            $('#test').innerHTML=('mcdaria');
        }
    });
});
	function selectcar(str) {
		if (str == "") {
			document.getElementById("models").innerHTML = "";
			return;
		} else {
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("models").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","getmodel.php?carid="+str,true);
			xmlhttp.send();
		}
	}