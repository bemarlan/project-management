document.addEventListener("DOMContentLoaded", function() {
	var form = document.getElementById('addProject');
	//var submit = document.getElementById('submit');
	var fields = document.getElementsByTagName('input');

	if (window.addEventListener) {
    	form.addEventListener("submit", validate("submit"), false);
	} else if (window.attachEvent) {
		// handles IE8
    	form.attachEvent("submit", validate("submit"));
	} 

	function validate(evt) {
		var formValidity = true;

		if (evt.preventDefault) {
	   	evt.preventDefault();    // prevent from submitting
	   } else {
	   	evt.returnValue = false;    // prevent form from submitting in IE8
	   }
	   
	   formValidity = true;    // reset value for revalidation

		for (var i = 0; i < fields.length; i++) {
			if (fields[i].hasAttribute('required')) {
				try {
					if (fields[i] == "") {
						throw "All required fields must contain a value";
					}
				} catch(message) {
					formValidity = false;
				}
			}
		}
	}

});