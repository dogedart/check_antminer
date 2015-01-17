#cronjob points to this file to pull cgminer stats every 5 minutes
#Antminer S5 writable FS location /config/ | Default username root password admin
#Antminer S1 writable FS location /etc/dropbear/ | Default username root password root
#sshpass -p admin == Password is admin, change this to your antminers ssh password

#!/usr/bin/expect -f
 sshpass -p admin ssh -n root@IP 'cd /config && ./check_antminer.sh'
 sshpass -p root ssh -n root@IP 'cd /etc/dropbear && ./check_antminer.sh'
sleep 1
# connect via scp
sshpass -p admin scp root@IP:/config/stats-temp.txt /home/antminer/stats-temp.txt
sshpass -p admin scp root@IP:/config/stats-diff.txt /home/antminer/stats-diff.txt
sshpass -p admin scp root@IP:/config/stats-ghs.txt /home/antminer/stats-ghs.txt
sshpass -p admin scp root@IP:/config/stats-summary.txt /home/antminer/stats-summary.txt
sshpass -p admin scp root@IP:/config/stats-totalmh.txt /home/antminer/stats-totalmh.txt


#/home/antminer/stats-diff.txt
