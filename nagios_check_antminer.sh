#Nagios Script to parse text generated from pullstats.sh & check_antminer.sh on the antminer
#This script will always show status ok until some Extra Nagios return code is added

var_asict1=` cat "/home/antminer/stats-temp.txt"  | grep temp1 | awk '{print substr($1,7); }' `

var_asict2=`cat "/home/antminer/stats-temp.txt"  | grep temp2 | awk '{print substr($1,7); }' `


var_asicc=`cat "/home/antminer/stats-diff.txt"  | grep Current |  awk '{print substr($1,18); }' `

#root@cam-xpy:/home/antminer# cat "/home/antminer/stats-diff.txt"  | grep Current |  awk '{print substr($1,18); }' `

#1420950880.406974


var_asicd=`cat "/home/antminer/stats-diff.txt"  | grep Diff |  awk '{print substr($1,19); }' `

var_asicghs=`cat "/home/antminer/stats-ghs.txt" | awk '{print substr($1,7); }' `

#S5_TEMP1=$var_asict1;;;; S5_TEMP2=$var_asict2;;;; btc_diff=$var_asicd;;;; S5_Blocktime=$var_asic


var_telasped=`cat "/home/antminer/stats-summary.txt" | grep Elap |  awk '{print substr($1,9); }' `
var_rejected=`cat "/home/antminer/stats-summary.txt"  | grep -m 1 Rejected | awk '{print substr($1,10); }' `
var_accepted=`cat "/home/antminer/stats-summary.txt"  | grep -m 1 Accepted  |  awk '{print substr($1,10); }' `
var_discarded=`cat "/home/antminer/stats-summary.txt" | grep Discarded |  awk '{print substr($1,11); }' `
var_diffaccepted=`cat "/home/antminer/stats-summary.txt"  | grep DifficultyAccepted |  awk '{print substr($1,20); }' `
var_devicerejected=`cat "/home/antminer/stats-summary.txt"  | grep DeviceRejected |  awk '{print substr($1,17); }' `
var_totalmh=`cat "/home/antminer/stats-totalmh.txt"  | grep MH |  awk '{print substr($1,9); }'`


MESSAGE="Antminer OK "
#PERFDATA="S5_TEMP1=$var_asict1;;;; S5_TEMP2=$var_asict2;;;; btc_diff=$var_asicd;;;; S5_Blocktime=$var_asicc;;;; S5_GHS=$var_asicghs"

PERFDATA="S5_TEMP1=$var_asict1;;;; S5_TEMP2=$var_asict2;;;; btc_diff=$var_asicd;;;; S5_Blocktime=$var_asicc;;;; S5_GHS=$var_asicghs;;;; S5_Time_Elap=$var_telasped;;;; S5_Rejected=$var_rejected;;;; S5_Accepted=$var_accepted;;;; S5_Discarded=$var_discarded;;;; S5_Diff_Accept=$var_diffaccepted;;;; S5_Reject_percent=$var_devicerejected;;;; BTCHash=$var_totalmh"

echo   $MESSAGE " |" $PERFDATA

