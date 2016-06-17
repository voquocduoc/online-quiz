<?php /* Smarty version 2.6.14, created on 2007-03-18 20:54:05
         compiled from test-questions.tpl.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['g_vars']['page']['test_time']['use']): ?>
<script language=JavaScript type="text/javascript"><!--
var dStopTime = new Date();
dStopTime.setHours(dStopTime.getHours()<?php if ($this->_tpl_vars['g_vars']['page']['test_time']['hours']): ?>+<?php echo $this->_tpl_vars['g_vars']['page']['test_time']['hours'];  endif; ?>,dStopTime.getMinutes()<?php if ($this->_tpl_vars['g_vars']['page']['test_time']['minutes']): ?>+<?php echo $this->_tpl_vars['g_vars']['page']['test_time']['minutes'];  endif; ?>,dStopTime.getSeconds()<?php if ($this->_tpl_vars['g_vars']['page']['test_time']['seconds']): ?>+<?php echo $this->_tpl_vars['g_vars']['page']['test_time']['seconds'];  endif; ?>);
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

var isCtrl = false;
document.onkeyup=function(e)
{
if(e.which == 17)
isCtrl=false;
}
document.onkeydown=function(e)
{
if(e.which == 17)
isCtrl=true;
if((e.which == 85) || (e.which == 67) &amp;&amp; isCtrl == true)
{
// alert(&#8216;Keyboard shortcuts are cool!&#8217;);
return false;
}
}
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
return false;
}
function mousehandler(e){
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
//--></script>
<?php endif; ?>

<p><form name=testqForm method=post action="test.php"><table cellpadding=0 cellspacing=5 border=0 width="100%">
<tr><td>

<table class=rowtable3 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr class=rowtwo valign=top><td id=vtimer align=center title="<?php echo $this->_tpl_vars['lngstr']['page_test']['test_timer_hint']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_test']['no_time_limit']; ?>
</td><td width="80%" id=testname align=center title="<?php echo $this->_tpl_vars['lngstr']['page_test']['testname_hint']; ?>
"><?php echo $this->_tpl_vars['g_vars']['page']['test_name']; ?>
</td></tr>
<tr><td class=rowone colspan=2>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_notifications.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['g_vars']['page']['errors']): ?></td></tr><tr><td class=rowone colspan=2><?php endif; ?>

<table cellpadding=0 cellspacing=0 border=0 width="100%">
<?php $_from = $this->_tpl_vars['g_vars']['page']['question']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['g_questionno'] => $this->_tpl_vars['question']):
?>
<tr vAlign=top><td width=10 style="padding-top: 8px;"><b><?php echo $this->_tpl_vars['g_questionno']; ?>
.&nbsp;</b></td><td width="100%">

<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><?php echo $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['text']; ?>
</td></tr></table>
<?php $_from = $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['answerno'] => $this->_tpl_vars['answer']):
?>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<?php if ($this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['type'] == QUESTION_TYPE_MULTIPLECHOICE || $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['type'] == QUESTION_TYPE_TRUEFALSE): ?>
<td width="20"><input type=radio name=answer[<?php echo $this->_tpl_vars['g_questionno']; ?>
] value=<?php echo $this->_tpl_vars['answerno'];  if ($this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer'][$this->_tpl_vars['answerno']]['selected']): ?> checked<?php endif;  if ($_SESSION['MAIN']['yt_state'] == TEST_STATE_QFEEDBACK): ?> disabled=disabled<?php endif; ?>></td>
<td class=answer width="100%"><?php echo $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer'][$this->_tpl_vars['answerno']]['text']; ?>
</td></tr>
<?php elseif ($this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['type'] == QUESTION_TYPE_MULTIPLEANSWER): ?>
<td width="20"><input type=checkbox name=answer[<?php echo $this->_tpl_vars['g_questionno']; ?>
][] value=<?php echo $this->_tpl_vars['answerno'];  if ($this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer'][$this->_tpl_vars['answerno']]['selected']): ?> checked<?php endif;  if ($_SESSION['MAIN']['yt_state'] == TEST_STATE_QFEEDBACK): ?> disabled=disabled<?php endif; ?>></td>
<td class=answer width="100%"><?php echo $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer'][$this->_tpl_vars['answerno']]['text']; ?>
</td></tr>
<?php elseif ($this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['type'] == QUESTION_TYPE_FILLINTHEBLANK || $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['type'] == QUESTION_TYPE_ESSAY): ?>
<td colspan=2><textarea name=answer[<?php echo $this->_tpl_vars['g_questionno']; ?>
][] cols=60 rows=5<?php if ($_SESSION['MAIN']['yt_state'] == TEST_STATE_QFEEDBACK): ?> disabled=disabled<?php endif; ?>><?php echo $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer'][$this->_tpl_vars['answerno']]['selected']; ?>
</textarea></td></tr>
<?php endif; ?>
<?php if ($_SESSION['MAIN']['yt_state'] == TEST_STATE_QFEEDBACK && $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer'][$this->_tpl_vars['answerno']]['selected'] && $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer'][$this->_tpl_vars['answerno']]['feedback']): ?>
<tr><td></td><td class=feedback width="100%"><?php echo $this->_tpl_vars['g_vars']['page']['question'][$this->_tpl_vars['g_questionno']]['answer'][$this->_tpl_vars['answerno']]['feedback']; ?>
</td></tr>
<?php endif; ?>
</table>
<?php endforeach; endif; unset($_from); ?>

</td></tr>
<?php endforeach; endif; unset($_from); ?>
</table>

</td></tr>

<tr><td class=rowtwo colspan=2>
<?php if ($_SESSION['MAIN']['yt_state'] == TEST_STATE_QFEEDBACK): ?>
<input class=btn type=submit name=bsubmit value=" <?php echo $this->_tpl_vars['lngstr']['button_continue']; ?>
 ">
<?php elseif ($this->_tpl_vars['g_vars']['page']['errors_fatal']): ?>
<input class=btn type=submit name=bcancel value=" <?php echo $this->_tpl_vars['lngstr']['button_cancel']; ?>
 ">
<?php else: ?>
<table cellpadding=0 cellspacing=0 border=0 width="100%"><tr vAlign=top>
<td width="100%"><input class=btn type=submit name=bsubmit value=" <?php echo $this->_tpl_vars['lngstr']['button_answer']; ?>
 "></td>
<td><input class=btn type=submit name=bfinish value=" <?php echo $this->_tpl_vars['lngstr']['page_test']['finish_test']; ?>
 " onclick="f=document.testqForm;if (confirm('<?php echo $this->_tpl_vars['lngstr']['page_test']['qst_finish_test']; ?>
')) { f.action='test.php?action=finish&confirmed=1';f.submit();} else {return false;}"></td></tr></table>
<?php endif; ?>
</td></tr></table>
</td></tr></table></form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>