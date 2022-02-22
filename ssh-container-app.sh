#!/bin/bash
red=`tput setaf 1`
green=`tput setaf 2`
yellow=`tput setaf 3`
cyan=`tput setaf 6`
reset=`tput sgr0`

echo "${yellow}"
cat << "EOF" 


______                            _     _____ 
|  _  \                          | |   |  _  |
| | | |_ __ _   _ _ __   __ _  __| |   | |_| |
| | | | '__| | | | '_ \ / _` |/ _` |   \____ |
| |/ /| |  | |_| | |_) | (_| | (_| |   .___/ /
|___/ |_|   \__,_| .__/ \__,_|\__,_|   \____/ 
                 | |                          
                 |_|                          

=========================================================================
|		   SSH source drupad_9_admin				|
=========================================================================
EOF
echo "${reset}"

print_end_application () {
	echo -n "${green}Press Any Key To Exit...${reset}"
	read VAR
	exit
}

main_script(){
	local environment=$1
	echo $environment
	echo "${green}Start ssh to ${cyan} $environment ${reset}"
	{
		winpty docker-compose exec app bash -c "cd $environment && /bin/bash"
		exit
	} || {
		echo "${red}ssh Fail${reset}"
	}
	echo "${green}End ssh with source${cyan} $environment ${reset}"
}

main_script "drupad_9_admin"
