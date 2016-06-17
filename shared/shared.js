var confirmEnabled = true;
var useHighlighting = true;
var strToggleColor = '#f0fff2';
var strRollColor = '#fffff0';
var strRowOneColor = '#ffffff';
var strRowTwoColor = '#e7ecf8';
var strRowOne2Color = '#ffffff';
var strRowTwo2Color = '#e3f6e8';

function confirmMessage(ctlATag, strMessage) {
	// Confirmation is not required or browser is Opera:
	if (!confirmEnabled || typeof(window.opera) != 'undefined') {
		ctlATag.href += '&confirmed=1';
		return true;
	}
	// Everyting looks like we could ask using js:
	var bConfirmed = confirm(strMessage);
	if (bConfirmed)
	 ctlATag.href += '&confirmed=1';
	return bConfirmed;
} // end confirmMessage()' function

function isAllChecked(ctlForm) {
	for (var i=0; i < ctlForm.elements.length; i++) {
		var ctl = ctlForm.elements[i];
		if (ctl.id.indexOf("cb_") == 0 && !ctl.checked)
		return false;
	}
	return true;
}

function getTRFromCB(ctlCB) {
	var ctlTR = null;
	if (ctlCB.parentNode && ctlCB.parentNode.parentNode)
	 ctlTR = ctlCB.parentNode.parentNode;
	 else if (ctlCB.parentElement && ctlCB.parentElement.parentElement)
	  ctlTR = ctlCB.parentElement.parentElement;
	return ctlTR;
}

// <!> <body ... onload="restoreSelection();">
function restoreSelection() {
	for (var i=0; i < document.forms.length; i++) {
		var ctlForm = document.forms[i];
		if (ctlForm.className == 'iactive' && ctlForm.toggleAll) {
			for (var j=0; j < ctlForm.elements.length; j++) {
				var ctl = ctlForm.elements[j];
				if (ctl.id.indexOf("cb_") == 0 && ctl.checked)
				 toggleCB(ctl);
			}
                	ctlForm.toggleAll.checked = isAllChecked(ctlForm);
		}
	}
}


function toggleCBs(ctlToggleAllCB) {
	var ctlForm = ctlToggleAllCB.form;
	var ctlTR = null;
	for (var i = 0; i < ctlForm.elements.length; i++) {
	        var ctl = ctlForm.elements[i];
	        if (ctl.id.indexOf("cb_") == 0 && ctl.checked != ctlToggleAllCB.checked) {
					ctl.checked = ctlToggleAllCB.checked;
					ctlTR = getTRFromCB(ctl);
					if (ctlTR)
					 changeAppearance(ctlTR, ctl.checked, 0, strToggleColor);
	        }
	}
}

function toggleCB(ctlCB) {
	var ctlForm = ctlCB.form;
	var ctlTR = null;
	if (ctlForm && ctlForm.toggleAll)
	 if (ctlCB.checked)
	  ctlForm.toggleAll.checked = isAllChecked(ctlForm);
	  else ctlForm.toggleAll.checked = false;
	ctlTR = getTRFromCB(ctlCB);
	if (ctlTR)
	 changeAppearance(ctlTR, ctlCB.checked, 0, strToggleColor);
}

function InsertRelativeDate(ctlInput, strDate) {
	if ((strDate!='') && (strDate!='0')) {
		ctlInput.disabled = true;
		ctlInput.value = '';
	} else {
		ctlInput.disabled = false;
		ctlInput.value = '';
	}
}

function activateTheControl(ctlControl, bEnable) {
	if (bEnable) {
		ctlControl.disabled = true;
	} else {
		ctlControl.disabled = false;
	}
//	ctlInput.value = '';
}

// <!> If checked using checkbox, it causes automatic uncecking (both are triggered - toggleCB and toggleTR: unchecked -> checked -> unchecked)
function toggleTR(strID) {
	var ctlCB = document.getElementById('cb_' + strID);
	if (ctlCB) {
		ctlCB.checked = !ctlCB.checked;
		toggleCB(ctlCB);
	}
}

function rollTR(strID, nState) {
	var ctlCB = document.getElementById('cb_' + strID);
	var ctlTR = document.getElementById('tr_' + strID);
	if ((!ctlCB || !ctlCB.checked) && ctlTR)
	 changeAppearance(ctlTR, false, nState, strRollColor);
}

function changeAppearance(ctlTR, bIsRowChecked, nState, strOnColor) {
	if (useHighlighting) {
		if (ctlTR && ctlTR.className == "rowone")
		 ctlTR.style.backgroundColor = bIsRowChecked || (nState == 1) ? strOnColor : strRowOneColor;
		 else if (ctlTR && ctlTR.className == "rowtwo")
		  ctlTR.style.backgroundColor = bIsRowChecked || (nState == 1) ? strOnColor : strRowTwoColor;
		if (ctlTR && ctlTR.className == "rowone2")
		 ctlTR.style.backgroundColor = bIsRowChecked || (nState == 1) ? strOnColor : strRowOne2Color;
		 else if (ctlTR && ctlTR.className == "rowtwo2")
		  ctlTR.style.backgroundColor = bIsRowChecked || (nState == 1) ? strOnColor : strRowTwo2Color;
	}
}

function toggleSection(strID) {
	var ctlDIV = document.getElementById(strID);
	document.cookie = strID + "=" + (ctlDIV.style.display != 'none' ? 'N' : 'Y') + "; expires=Thu, 31 Dec 2035 23:59:59 GMT; path=/;";
	ctlDIV.style.display = (ctlDIV.style.display != 'none' ? 'none' : 'block');
}

function showDIV(strID, bShow, bSetCookie) {
	var ctlDIV = document.getElementById(strID);
	if(bSetCookie)
	 document.cookie = strID + "=" + (bShow ? 'N' : 'Y') + "; expires=Thu, 31 Dec 2035 23:59:59 GMT; path=/;";
	ctlDIV.style.display = (bShow ? 'block' : 'none');
}

function showDialog(URL, width, height) {
	id = window.open(URL, "", "location=no,statusbar=yes,status=yes,scrollbars=yes,menubar=no,toolbar=no,directories=no,resizable=yes,width=" + width + ",height=" + height);
}

function changeChoicePercents(ctlCB, strNo) {
	var ctlInput = document.getElementsByName('answer_percents[' + strNo + ']')[0];
	if(ctlCB.checked)
	 ctlInput.value = '100';
	 else ctlInput.value = '0';
}

function writeTag(strTag) {
	document.etemplateForm.etemplate_body.value += strTag;
}

function ShowInfoBar(bShow)
{
	document.cookie = "igt_showinfobar=" + (bShow ? "Y" : "N") + "; expires=Thu, 31 Dec 2035 23:59:59 GMT; path=/;";
	ctlInfoBar = document.getElementById("infobar");
	if(ctlInfoBar)
	 ctlInfoBar.style.display = (bShow ? "block" : "none");
	ctlInfoBar_button = document.getElementById("infobar_button");
	if(ctlInfoBar_button && ctlInfoBar_button.href)
	 ctlInfoBar_button.href = "javascript:ShowInfoBar(" + (bShow ? "false" : "true") + ");"; 
}
