<?php /* Smarty version 2.6.18, created on 2007-10-20 18:43:02
         compiled from test-question.tpl.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['g_vars']['page']['test_time']['use']): ?>
<script language=JavaScript type="text/javascript"><!--
var dStopTime = new Date();
dStopTime.setHours(dStopTime.getHours()<?php if ($this->_tpl_vars['g_vars']['page']['test_time']['hours']): ?>+<?php echo $this->_tpl_vars['g_vars']['page']['test_time']['hours']; ?>
<?php endif; ?>,dStopTime.getMinutes()<?php if ($this->_tpl_vars['g_vars']['page']['test_time']['minutes']): ?>+<?php echo $this->_tpl_vars['g_vars']['page']['test_time']['minutes']; ?>
<?php endif; ?>,dStopTime.getSeconds()<?php if ($this->_tpl_vars['g_vars']['page']['test_time']['seconds']): ?>+<?php echo $this->_tpl_vars['g_vars']['page']['test_time']['seconds']; ?>
<?php endif; ?>);
var clockID = 0;
function UpdateClock() {
 if(clockID) {
  clearTimeout(clockID);
  clockID  = 0;
 }
 var dNow = new Date();
 if(dNow<dStopTime) {
  dNow.setHours(dStopTime.getHours()-dNow.getHours(),dStopTime.getMinutes()-dNow.getMinutes(),dStopTime.getSeconds()-dNow.getSeconds());
  strContent = "&nbsp;<b>"+setLeadingZero(dNow.getHours())+":"+setLeadingZero(dNow.getMinutes())+":"+setLeadingZero(dNow.getSeconds())+"</b>&nbsp;";
  if(dNow.getMinutes()<1) strContent="<font color=#ff0000>"+strContent+"</font>";
  document.getElementById("vtimer").innerHTML=strContent;
  clockID = setTimeout("UpdateClock()", 500);
 } else {
  clearTimeout(clockID);
  clockID = 0;
  document.getElementById("vtimer").innerHTML = "<b>00:00:00</b>";
 }
}
function setLeadingZero(i) {
 return (i<10) ? "0"+i : i;
}
clockID = setTimeout("UpdateClock()", 500);
//--></script>
<?php endif; ?>

<script language=JavaScript type="text/javascript"><!--
function checkAnswer(ctlToggleAllCB, nAnswersAllowedToSelect) {
	var bAllowTheAnswerCheck = false;
	var nAnswersSelected = 0;
	var ctlForm = ctlToggleAllCB.form;
	var ctlTR = null;
	for (var i = 0; i < ctlForm.elements.length; i++) {
	        var ctl = ctlForm.elements[i];
	        if (ctl.name.indexOf("answer") == 0) {
					if (ctl.checked)
					 nAnswersSelected = nAnswersSelected + 1;
	        }
	}
	if ((nAnswersAllowedToSelect > 0) && (nAnswersSelected > nAnswersAllowedToSelect)) {
		return false;
	} else {
		return true;
	}
}
//--></script>

<p><form name=testqForm method=post action="test.php"><table cellpadding=0 cellspacing=5 border=0 width="100%">
<tr><td>

<table class=rowtable3 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr class=rowtwo valign=top><td id=vtimer align=center title="<?php echo $this->_tpl_vars['lngstr']['page_test']['test_timer_hint']; ?>
" width=150><?php echo $this->_tpl_vars['lngstr']['page_test']['no_time_limit']; ?>
</td><td id=qcounter align=center title="<?php echo $this->_tpl_vars['g_vars']['page']['questionindicator_hint']; ?>
"><nobr>&nbsp;<?php echo $this->_tpl_vars['g_vars']['page']['questionindicator_hint']; ?>
&nbsp;</nobr></td><td width="60%" id=testname align=center title="<?php echo $this->_tpl_vars['lngstr']['page_test']['testname_hint']; ?>
"><?php echo $this->_tpl_vars['g_vars']['page']['test_name']; ?>
</td></tr>
<tr><td class=rowone colspan=3>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_notifications.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['g_vars']['page']['errors']): ?></td></tr><tr><td class=rowone colspan=3><?php endif; ?>

<table cellpadding=0 cellspacing=0 border=0 width="100%"><tr vAlign=top><td width=1><img src="images/1x1.gif" width=1 height=260></td><td>

<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><?php echo $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['text']; ?>
</td></tr></table>
<?php $_from = $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['answerno'] => $this->_tpl_vars['answer']):
?>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<?php if ($this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['type'] == QUESTION_TYPE_MULTIPLECHOICE || $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['type'] == QUESTION_TYPE_TRUEFALSE): ?>
<td width="20"><input type=radio name=answer[<?php echo $this->_tpl_vars['g_questionno']; ?>
] value=<?php echo $this->_tpl_vars['answerno']; ?>
<?php if ($this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer'][$this->_tpl_vars['answerno']]['selected']): ?> checked<?php endif; ?><?php if ($_SESSION['MAIN']['yt_state'] == TEST_STATE_QFEEDBACK): ?> disabled=disabled<?php endif; ?>></td>
<td class=answer width="100%"><?php echo $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer'][$this->_tpl_vars['answerno']]['text']; ?>
</td></tr>
<?php elseif ($this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['type'] == QUESTION_TYPE_MULTIPLEANSWER): ?>
<td width="20"><input type=checkbox name=answer[<?php echo $this->_tpl_vars['g_questionno']; ?>
][] value=<?php echo $this->_tpl_vars['answerno']; ?>
<?php if ($this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer'][$this->_tpl_vars['answerno']]['selected']): ?> checked<?php endif; ?><?php if ($_SESSION['MAIN']['yt_state'] == TEST_STATE_QFEEDBACK): ?> disabled=disabled<?php endif; ?><?php if (IGT_MULTIPLE_ANSWER_DO_NOT_ALLOW_MORE_ANSWERS_THAN_MARKED_AS_CORRECT): ?> onclick="return checkAnswer(this, <?php echo $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['correct_answer_count']; ?>
);"<?php endif; ?>></td>
<td class=answer width="100%"><?php echo $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer'][$this->_tpl_vars['answerno']]['text']; ?>
</td></tr>
<?php elseif ($this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['type'] == QUESTION_TYPE_FILLINTHEBLANK || $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['type'] == QUESTION_TYPE_ESSAY): ?>
<td colspan=2><textarea name=answer[<?php echo $this->_tpl_vars['g_questionno']; ?>
][] cols=60 rows=5<?php if ($_SESSION['MAIN']['yt_state'] == TEST_STATE_QFEEDBACK): ?> disabled=disabled<?php endif; ?>><?php echo $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer'][$this->_tpl_vars['answerno']]['text']; ?>
</textarea></td></tr>
<?php endif; ?>
<?php if ($_SESSION['MAIN']['yt_state'] == TEST_STATE_QFEEDBACK && $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer'][$this->_tpl_vars['answerno']]['selected'] && $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer'][$this->_tpl_vars['answerno']]['feedback']): ?>
<tr><td></td><td class=feedback width="100%"><?php echo $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer'][$this->_tpl_vars['answerno']]['feedback']; ?>
</td></tr>
<?php endif; ?>
</table>

<?php endforeach; endif; unset($_from); ?>

</td></tr></table></td></tr>

<?php if ($this->_tpl_vars['g_vars']['page']['review']['mode'] == IGT_TEST_REVIEW_ALLOWED): ?>
<tr><td class=rowtwo colspan=3>
<select class=inp name="review_questionno" id="review_questionno">
<option value="" selected><?php echo $this->_tpl_vars['lngstr']['label_none']; ?>
</option>
<?php $_from = $this->_tpl_vars['g_vars']['page']['review']['question']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['questionno'] => $this->_tpl_vars['question']):
?>
<option value="<?php echo $this->_tpl_vars['questionno']; ?>
"<?php if ($this->_tpl_vars['questionno'] == $this->_tpl_vars['g_vars']['page']['variables']['yt_questionno_current']): ?> selected=selected<?php endif; ?>><?php echo $this->_tpl_vars['questionno']; ?>
 - <?php echo $this->_tpl_vars['g_vars']['page']['review']['question'][$this->_tpl_vars['questionno']]['text_truncated']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>&nbsp;<input class=btn type=submit name=breview value=" <?php echo $this->_tpl_vars['lngstr']['page_test']['review_question']; ?>
 ">
</td></tr>
<?php endif; ?>

<tr><td class=rowtwo colspan=3>
<?php if ($_SESSION['MAIN']['yt_state'] == TEST_STATE_QFEEDBACK): ?>
<input class=btn type=submit name=bsubmit value=" <?php echo $this->_tpl_vars['lngstr']['button_continue']; ?>
 ">
<?php elseif ($this->_tpl_vars['g_vars']['page']['errors_fatal']): ?>
<input class=btn type=submit name=bcancel value=" <?php echo $this->_tpl_vars['lngstr']['button_cancel']; ?>
 ">
<?php else: ?>
<table cellpadding=0 cellspacing=0 border=0 width="100%"><tr vAlign=top>
<td width="100%"><?php if ($this->_tpl_vars['g_vars']['page']['review']['mode'] == -1): ?><input class=btn type=submit name=bsubmit_prev value=" <?php echo $this->_tpl_vars['lngstr']['button_prev']; ?>
 "> <input class=btn type=submit name=bsubmit_next value=" <?php echo $this->_tpl_vars['lngstr']['button_next']; ?>
 "><?php else: ?><?php if ($this->_tpl_vars['g_vars']['page']['variables']['yt_questionno'] >= $this->_tpl_vars['g_vars']['page']['variables']['yt_questioncount']): ?><?php if ($this->_tpl_vars['g_vars']['page']['review']['mode'] == IGT_TEST_REVIEW_ALLOWED): ?><input class=btn type=submit name=bsubmit_answer value=" <?php echo $this->_tpl_vars['lngstr']['button_answer']; ?>
 ">&nbsp;<?php endif; ?><input class=btn_important type=submit name=bsubmit value=" <?php echo $this->_tpl_vars['lngstr']['button_submit']; ?>
 "><?php else: ?><input class=btn type=submit name=bsubmit_answer value=" <?php echo $this->_tpl_vars['lngstr']['button_answer']; ?>
 "><?php endif; ?><?php endif; ?></td>
<td><?php if (IGT_TEST_ALLOW_TO_FINISH_TESTS): ?><table cellpadding=2 cellspacing=0 border=0 width="100%"><tr vAlign=middle><td><a href="test.php?action=finish" onclick="return confirmMessage(this, '<?php echo $this->_tpl_vars['lngstr']['page_test']['qst_finish_test']; ?>
')"><img width=20 height=20 border=0 src="images/button-cross.gif" title="<?php echo $this->_tpl_vars['lngstr']['page_test']['finish_test']; ?>
"></a></td><td><nobr>&nbsp;<a href="test.php?action=finish" onclick="return confirmMessage(this, '<?php echo $this->_tpl_vars['lngstr']['page_test']['qst_finish_test']; ?>
')"><?php echo $this->_tpl_vars['lngstr']['page_test']['finish_test']; ?>
</a></nobr></td></tr></table><?php endif; ?></td></tr></table>
<?php endif; ?>
</td></tr>

</table>

</td></tr></table></form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>