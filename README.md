# check_antminer
Script for Checking Bitmain antminer with Nagios S1 and S5 stats - with performance data

for best results use OMD Open Monitoring Distro to quickly setup Nagios with pnp4nagios so you have great looking RRD tool graphs


Step 1
Copy pullstats.sh to Nagios, I created a user called antminer /home/antminer/pullstats.sh
pullstats.sh is a script that ssh's to antminers IP. executes check_antminer.sh which generates stats from cgminer-api summary and cgminer-api stats

the script then scp copies the resulting stats from the text file generated back to the Nagios File system for processing.


Step 2
Setup a cronjob On Nagios or the Computer you are storing the data from Antminer, will pull every 5 mins
eg 
*/5 * * * * /home/antminer/pullstats.sh


Step 3
Configure Antminer command host and service definitions on Nagios

nagios_check_antminer.sh is the command

If you are using OMD, edit the main.mk file and add hostname for antminer this will add define host section automatically. Then add the Command and service defintions.

# ----------------------------------------------------
# wpg-antminerS5
# ----------------------------------------------------

define host {
  host_name                     wpg-antminerS5
  use                           check_mk_host
  address                       172.31.132.235
  _TAGS                         PING
  hostgroups                    check_mk
  contact_groups                all
}


define service {
  service_description            check_antminer
  host_name                      wpg-antminerS5
  use                            srv-pnp
  check_command                  check_antminer-stats.sh
  check_interval                 3
  contact_groups                 check_mk
  max_check_attempts             3
  notification_interval          15
  retry_interval                 5
}

define command {
        command_name    check_antminer-stats.sh
        command_line    $USER1$/check_antminer-stats.sh
 }



Step 4
Add pnp4nagios template for nicer drawings of the stats.



