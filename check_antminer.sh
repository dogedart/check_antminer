#config/check_antminer.sh
#S5 txt output to /config
#S1 txt output to  /dropbear

/usr/bin/cgminer-api stats      | egrep "temp" | grep -v "Reply was"  | tr -d " []><()" | tr "=" ":" | grep -v 0 | grep -v temp_num > stats-temp.txt
/usr/bin/cgminer-api coin       | egrep "Time|Difficulty" | grep -v "Reply was"  | tr -d " []><()" | tr "=" ":" > stats-diff.txt
/usr/bin/cgminer-api stats      | egrep "GHS" | grep -v "Reply was" | grep av | tr -d " []><()" | tr "=" ":" > stats-ghs.txt
