<?php if($_SERVER['REMOTE_ADDR'] != '::1') exit();?><div id='codeigniter_profiler' style='clear:both;background-color:#fff;padding:10px;'>

<fieldset id="ci_profiler_uri_string" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee">
<legend style="color:#000;">&nbsp;&nbsp;URI STRING&nbsp;&nbsp;</legend>
<div style='color:#000;font-weight:normal;padding:4px 0 4px 0'>mycal/display</div></fieldset>

<fieldset id="ci_profiler_controller_info" style="border:1px solid #995300;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee">
<legend style="color:#995300;">&nbsp;&nbsp;CLASS/METHOD&nbsp;&nbsp;</legend>
<div style='color:#995300;font-weight:normal;padding:4px 0 4px 0'>mycal/display</div></fieldset>

<fieldset id="ci_profiler_memory_usage" style="border:1px solid #5a0099;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee">
<legend style="color:#5a0099;">&nbsp;&nbsp;MEMORY USAGE&nbsp;&nbsp;</legend>
<div style='color:#5a0099;font-weight:normal;padding:4px 0 4px 0'>1,570,696 bytes</div><div style='color:#5a0099;font-weight:normal;padding:4px 0 4px 0'>1,592,872 bytes (peak)</div></fieldset>

<fieldset id="ci_profiler_benchmarks" style="border:1px solid #900;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee">
<legend style="color:#900;">&nbsp;&nbsp;BENCHMARKS&nbsp;&nbsp;</legend>


<table style='width:100%'>
<tr><td style='padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;'>Loading Time: Base Classes&nbsp;&nbsp;</td><td style='padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;'>0.0208</td></tr>
<tr><td style='padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;'>Generate&nbsp;&nbsp;</td><td style='padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;'>0.0079</td></tr>
<tr><td style='padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;'>Controller Execution Time ( Mycal / Display )&nbsp;&nbsp;</td><td style='padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;'>0.0307</td></tr>
<tr><td style='padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;'>Total Execution Time&nbsp;&nbsp;</td><td style='padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;'>0.0517</td></tr>
</table>
</fieldset>

<fieldset id="ci_profiler_get" style="border:1px solid #cd6e00;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee">
<legend style="color:#cd6e00;">&nbsp;&nbsp;GET DATA&nbsp;&nbsp;</legend>
<div style='color:#cd6e00;font-weight:normal;padding:4px 0 4px 0'>No GET data exists</div></fieldset>

<fieldset id="ci_profiler_post" style="border:1px solid #009900;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee">
<legend style="color:#009900;">&nbsp;&nbsp;POST DATA&nbsp;&nbsp;</legend>
<div style='color:#009900;font-weight:normal;padding:4px 0 4px 0'>No POST data exists</div></fieldset>

<fieldset style="border:1px solid #0000FF;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee">
<legend style="color:#0000FF;">&nbsp;&nbsp;DATABASE:&nbsp; ci_series&nbsp;&nbsp;&nbsp;QUERIES: 1&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_queries_db_1').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Hide'?'Show':'Hide';">Hide</span>)</legend>


<table style='width:100%;' id='ci_profiler_queries_db_1'>
<tr><td style='padding:5px; vertical-align: top;width:1%;color:#900;font-weight:normal;background-color:#ddd;'>0.0006&nbsp;&nbsp;</td><td style='padding:5px; color:#000;font-weight:normal;background-color:#ddd;'><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">memo</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700"><strong>(</strong>`</span><span style="color: #DD0000">calendar</span><span style="color: #007700">`<strong>)</strong><br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date</span><span style="color: #007700">`&nbsp;&nbsp;</span><span style="color: #0000BB"><strong>LIKE</strong>&nbsp;</span><span style="color: #DD0000">'2013-11%'&nbsp;</span>
</span>
</code></td></tr>
</table>
</fieldset></div>