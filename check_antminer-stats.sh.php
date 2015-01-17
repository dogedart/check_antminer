#pnp4nagios template to make RRD graphs look nicer
#work in progress
#store in pnp4nagios template directory /opt/omd/versions/1.20/share/pnp4nagios/htdocs/templates
<?php

$ds_name[1] = "Temperature 1&2";
$opt[1] = "--vertical-label 'Dew' -X0 --upper-limit " . ($MAX[1] * 120 / 100) . " -l0  --title \"Temperature $hostname\" ";

$def[1] =  "DEF:S5_TEMP1=$RRDFILE[1]:$DS[1]:MAX " ;
$def[1] .=  "DEF:S5_TEMP2=$RRDFILE[2]:$DS[1]:MAX " ;

$def[1] .= "LINE:S5_TEMP1#CC0000:\"Temperature1     \" " ;
$def[1] .= "GPRINT:S5_TEMP1:LAST:\"%6.0lf  last\" " ;
$def[1] .= "GPRINT:S5_TEMP1:AVERAGE:\"%6.0lf  avg\" " ;
$def[1] .= "GPRINT:S5_TEMP1:MAX:\"%6.0lf  max\\n\" ";

$def[1] .= "LINE:S5_TEMP2#0066CC:\"Temperature2\" " ;
$def[1] .= "GPRINT:S5_TEMP2:LAST:\"        %6.0lf  last\" " ;
$def[1] .= "GPRINT:S5_TEMP2:AVERAGE:\"%6.0lf  avg\" " ;
$def[1] .= "GPRINT:S5_TEMP2:MAX:\"%6.0lf  max\\n\" " ;



$ds_name[2] = "Accept Discard";
$opt[2] = "--vertical-label 'Dew' -X0 --upper-limit " . ($MAX[1] * 120 / 100) . " -l0  --title \"Work Accept & Discard $hostname\" ";

$def[2] =  "DEF:S5_Accepted=$RRDFILE[8]:$DS[1]:MAX " ;
$def[2] .=  "DEF:S5_Discarded=$RRDFILE[9]:$DS[1]:MAX " ;
$def[2] .=  "DEF:S5_Rejected=$RRDFILE[7]:$DS[1]:MAX " ;


$def[2] .= "LINE:S5_Accepted#CC0000:\"Accepted     \" " ;
$def[2] .= "GPRINT:S5_Accepted:LAST:\"%6.0lf  last\" " ;
$def[2] .= "GPRINT:S5_Accepted:AVERAGE:\"%6.0lf  avg\" " ;
$def[2] .= "GPRINT:S5_Accepted:MAX:\"%6.0lf  max\\n\" ";

$def[2] .= "LINE:S5_Discarded#0066CC:\"Discarded\" " ;
$def[2] .= "GPRINT:S5_Discarded:LAST:\"        %6.0lf  last\" " ;
$def[2] .= "GPRINT:S5_Discarded:AVERAGE:\"%6.0lf  avg\" " ;
$def[2] .= "GPRINT:S5_Discarded:MAX:\"%6.0lf  max\\n\" " ;

$def[2] .= "LINE:S5_Rejected#0067CC:\"Rejected\" " ;
$def[2] .= "GPRINT:S5_Rejected:LAST:\"        %6.0lf  last\" " ;
$def[2] .= "GPRINT:S5_Rejected:AVERAGE:\"%6.0lf  avg\" " ;
$def[2] .= "GPRINT:S5_Rejected:MAX:\"%6.0lf  max\\n\" " ;



$ds_name[3] = "Hashrate";
$opt[3] = "--vertical-label 'Dew' -X0 --upper-limit " . ($MAX[1] * 120 / 100) . " -l0  --title \"Hashrate $hostname\" ";

$def[3] =  "DEF:S5_GHS=$RRDFILE[5]:$DS[1]:MAX " ;
#$def[3] .=  "DEF:S5_TEMP2=$RRDFILE[2]:$DS[1]:MAX " ;

$def[3] .= "LINE:S5_GHS#CC0000:\"Temperature1     \" " ;
$def[3] .= "GPRINT:S5_GHS:LAST:\"%6.0lf  last\" " ;
$def[3] .= "GPRINT:S5_GHS:AVERAGE:\"%6.0lf  avg\" " ;
$def[3] .= "GPRINT:S5_GHS:MAX:\"%6.0lf  max\\n\" ";

#$def[3] .= "LINE:S5_TEMP2#0066CC:\"Temperature2\" " ;
#$def[3] .= "GPRINT:S5_TEMP2:LAST:\"        %6.0lf  last\" " ;
#$def[3] .= "GPRINT:S5_TEMP2:AVERAGE:\"%6.0lf  avg\" " ;
#$def[3] .= "GPRINT:S5_TEMP2:MAX:\"%6.0lf  max\\n\" " ;



$ds_name[4] = "BTC Difficulty";
$opt[4] = "--vertical-label 'Dew' -X0 --upper-limit " . ($MAX[1] * 120 / 100) . " -l0  --title \"BTC Difficulty $hostname\" ";

$def[4] =  "DEF:btc_diff=$RRDFILE[3]:$DS[1]:MAX " ;
#$def[4] .=  "DEF:S5_TEMP2=$RRDFILE[2]:$DS[1]:MAX " ;

$def[4] .= "LINE:btc_diff#CC0000:\"Temperature1     \" " ;
$def[4] .= "GPRINT:btc_diff:LAST:\"%6.0lf  last\" " ;
$def[4] .= "GPRINT:btc_diff:AVERAGE:\"%6.0lf  avg\" " ;
$def[4] .= "GPRINT:btc_diff:MAX:\"%6.0lf  max\\n\" ";

$ds_name[5] = "Time Ticks";
$opt[5] = "--vertical-label 'Dew' -X0 --upper-limit " . ($MAX[1] * 120 / 100) . " -l0  --title \"Time Elapsed $hostname\" ";

$def[5] =  "DEF:S5_Time_Elap=$RRDFILE[6]:$DS[1]:MAX " ;

$def[5] .= "LINE:S5_Time_Elap#CC0000:\"Time ticks     \" " ;
$def[5] .= "GPRINT:S5_Time_Elap:LAST:\"%6.0lf  last\" " ;
$def[5] .= "GPRINT:S5_Time_Elap:AVERAGE:\"%6.0lf  avg\" " ;
$def[5] .= "GPRINT:S5_Time_Elap:MAX:\"%6.0lf  max\\n\" ";


$ds_name[6] = "Difficulty Accepted";
$opt[6] = "--vertical-label 'Dew' -X0 --upper-limit " . ($MAX[1] * 120 / 100) . " -l0  --title \"Difficulty Accepted $hostname\" ";

$def[6] =  "DEF:S5_Diff_Accept=$RRDFILE[10]:$DS[1]:MAX " ;

$def[6] .= "LINE:S5_Diff_Accept#CC0000:\"Difficulty Accepted     \" " ;
$def[6] .= "GPRINT:S5_Diff_Accept:LAST:\"%6.0lf  last\" " ;
$def[6] .= "GPRINT:S5_Diff_Accept:AVERAGE:\"%6.0lf  avg\" " ;
$def[6] .= "GPRINT:S5_Diff_Accept:MAX:\"%6.0lf  max\\n\" ";



$ds_name[7] = "S5_Reject_percent";
$opt[7] = "--vertical-label 'Dew' -X0 --upper-limit " . ($MAX[1] * 120 / 100) . " -l0  --title \"S5_Reject_percent $hostname\" ";

$def[7] =  "DEF:S5_Reject_percent=$RRDFILE[11]:$DS[1]:MAX " ;

$def[7] .= "LINE:S5_Reject_percent#CC0000:\"Percent Rejected     \" " ;
$def[7] .= "GPRINT:S5_Reject_percent:LAST:\"%6.0lf  last\" " ;
$def[7] .= "GPRINT:S5_Reject_percent:AVERAGE:\"%6.0lf  avg\" " ;
$def[7] .= "GPRINT:S5_Reject_percent:MAX:\"%6.0lf  max\\n\" ";


$ds_name[8] = "S5_Blocktime";
$opt[8] = "--vertical-label 'Dew' -X0 --upper-limit " . ($MAX[1] * 120 / 100) . " -l0  --title \"S5_Blocktime $hostname\" ";

$def[8] =  "DEF:S5_Blocktime=$RRDFILE[4]:$DS[1]:MAX " ;

$def[8] .= "LINE:S5_Blocktime#CC0000:\"Blocktime  \" " ;
$def[8] .= "GPRINT:S5_Blocktime:LAST:\"%6.0lf  last\" " ;
$def[8] .= "GPRINT:S5_Blocktime:AVERAGE:\"%6.0lf  avg\" " ;
$def[8] .= "GPRINT:S5_Blocktime:MAX:\"%6.0lf  max\\n\" ";

$ds_name[9] = "BTCHash";
$opt[9] = "--vertical-label 'Dew' -X0 --upper-limit " . ($MAX[1] * 120 / 100) . " -l0  --title \"BTCHash $hostname\" ";

$def[9] =  "DEF:BTCHash=$RRDFILE[12]:$DS[1]:MAX " ;

$def[9] .= "LINE:BTCHash#CC0000:\"BTC Hash  \" " ;
$def[9] .= "GPRINT:BTCHash:LAST:\"%6.0lf  last\" " ;
$def[9] .= "GPRINT:BTCHash:AVERAGE:\"%6.0lf  avg\" " ;
$def[9] .= "GPRINT:BTCHash:MAX:\"%6.0lf  max\\n\" ";


/* HACK: Avoid error if RRD does not contain two data
 sources which .XML file *does*. F..ck. This does not
 work with multiple RRDs... */
$retval = -1;
system("rrdtool info $RRDFILE[1] | fgrep -q 'ds[5]'", $retval);
if ($retval == 0)
{
 if (count($NAME) >= 4 and $NAME[4] == "mapped") {
   $def[1] .= "DEF:mapped=$RRDFILE[4]:$DS[4]:MAX " ;
   $def[1] .= "LINE2:mapped#8822ff:\"Memory mapped\" " ;
   $def[1] .= "GPRINT:mapped:LAST:\"%6.0lf MB last\" " ;
   $def[1] .= "GPRINT:mapped:AVERAGE:\"%6.0lf MB avg\" " ;
   $def[1] .= "GPRINT:mapped:MAX:\"%6.0lf MB max\\n\" " ;
  }

 if (count($NAME) >= 5 and $NAME[5] == "committed_as") {
   $def[1] .= "DEF:committed=$RRDFILE[5]:$DS[5]:MAX " ;
   $def[1] .= "LINE2:committed#cc00dd:\"Committed    \" " ;
   $def[1] .= "GPRINT:committed:LAST:\"%6.0lf MB last\" " ;
   $def[1] .= "GPRINT:committed:AVERAGE:\"%6.0lf MB avg\" " ;
   $def[1] .= "GPRINT:committed:MAX:\"%6.0lf MB max\\n\" " ;
  }
 }

?>

