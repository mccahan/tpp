
#!/bin/bash

#Edit the following lines to your instance
myloc="$HOME/sites/tpp_signup"
mymysqldump="/Applications/MAMP/Library/bin"
mymysql="/Applications/MAMP/Library/bin"

Color_Off='\033[0m'       # Text Reset
Black='\033[30;1m'        # Black
Red='\033[31;1m'          # Red
Green='\033[32;1m'        # Green
Yellow='\033[33;1m'       # Yellow
Blue='\033[34;1m'         # Blue
Purple='\033[35;1m'       # Purple
Cyan='\033[36;1m'         # Cyan
White='\033[37;1m'        # White

abbr="tpp"

local_db="tpp_signup"
local_pw="root"
local_user="root"
env="local"

version="0.0.1"


#Add the following lines to your bash_profile
# demdep(){
#	cd $HOME/path/to/folder
#	bash demdep.sh $1 $2 $3 $4
# }
# 

cd $myloc

if [ "$1" == "test" ]; then

	echo -e ${Yellow} "test" ${Color_Off}

elif [ "$1" == "gulp" ]; then
	
	gulp watch
	echo ''

elif [[ "$1" == "gulp"  &&  "$2" == "prod" ]]; then	

	gulp --production

elif [ "$1" == "backup" ]; then	

	${mymysqldump}/mysqldump -h localhost -u ${local_user} -p${local_pw} ${local_db} --complete-insert --replace --no-create-info  > $myloc/backups/${env}_backup_${version}.sql


elif [ "$1" == "help" ]; then	
	echo -e ${Yellow}
	echo -e ${Yellow} "  *	${abbr} dump local db            	- Dumps local db tables (according to blacklist) into /db/*.sql files" ${Color_Off}
	echo -e ${Yellow} "  *	${abbr} pull to local            	- Pulls production content tables to local" ${Color_Off}
	echo -e ${Yellow} "  *	${abbr} pull to staging         	- Pulls production content tables to stage" ${Color_Off}
	echo -e ${Yellow} "  *	${abbr} grunt                    	- Starts your local instance of grunt" ${Color_Off}
	echo -e ${Yellow} "  *	${abbr} backup staging [vX.X.X] 	- Builds a DB backup of your staging environment" ${Color_Off}
	echo -e ${Yellow} "  *	${abbr} backup local             	- Builds a DB backup of your local environment" ${Color_Off}
	echo -e ${Yellow} "  *	${abbr} backup production[vX.X.X]	- Builds a DB backup of your production environment" ${Color_Off}
	echo -e ${Yellow} "  *	${abbr} deploy to staging        	- Capistrano deploys master branch to staging environment" ${Color_Off}
	echo -e ${Yellow} "  *	${abbr} read into local          	- Runs the sql files in the db folder locally to add admin settings back in" ${Color_Off}	
	echo -e ${Yellow} "  *	                            	- Fires a Jenkins test and will only commit if test on master is correct" ${Color_Off}
	echo -e ${Yellow} "  *	${abbr} deploy to production    	- NOT FUNCTIONING" ${Color_Off}
	echo -e ${Yellow} "  *	${abbr} help                     	- Lists all the commands" ${Color_Off}

else 
	echo -e ${Red} "**** That is not a known command!" ${Color_Off}
	echo -e ${Red} "**** Use \"${abbr} help\" to see more commands." ${Color_Off}
fi


