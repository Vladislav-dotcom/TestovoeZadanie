function hideButtonClick(n, id) {
	var trID = 'tr' + n;
	var elem = document.getElementById(trID);
    elem.parentNode.removeChild(elem);
   	$.ajax({
	    url : 'ajaxHandler.php',
	    type : 'POST',
	    data : {'id': id, 'sob': 'hide'},
	    success : function(data){
	        alert('YES');
	        alert(data);
	    }
	});
}

function plusButtonClick(n, id, k) {
	var tdID = 'td' + n;
	k = k + 1;
	var elem = document.getElementById(tdID);
	var newHTML = "<td class='tabletd' id='" + tdID + "'>" + "<input type='button' value='-' class='btnplusminus' onclick='minusButtonClick(" + n + ", " + id + ", " + k + ")'> " + k ;
	newHTML +=	" <input type='button' value='+' class='btnplusminus' onclick='plusButtonClick(" + n + ", " + id + ", " + k + ")'></td>";
    elem.innerHTML = newHTML;
   	$.ajax({
	    url : 'ajaxHandler.php',
	    type : 'POST',
	    data : {'id': id, 'sob': 'plus'},
	    success : function(data){
	    }
	});
}

function minusButtonClick(n, id, k) {
	var tdID = 'td' + n;
	k = k - 1;
	var elem = document.getElementById(tdID);
	var newHTML = "<td class='tabletd' id='" + tdID + "'>" + "<input type='button' value='-' class='btnplusminus' onclick='minusButtonClick(" + n + ", " + id + ", " + k + ")'> " + k ;
	newHTML +=	" <input type='button' value='+' class='btnplusminus' onclick='plusButtonClick(" + n + ", " + id + ", " + k + ")'></td>";
    elem.innerHTML = newHTML;
   	$.ajax({
	    url : 'ajaxHandler.php',
	    type : 'POST',
	    data : {'id': id, 'sob': 'minus'},
	    success : function(data){
	    }
	});
}