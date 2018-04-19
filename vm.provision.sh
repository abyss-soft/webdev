echo 'Start "vm.provision.sh"'
vmip=192.168.33.33

echo 'Init apache vhosts'
for vhFile in /var/www/*.conf
do
    sudo cp /var/www/*.conf /etc/apache2/sites-available/ -R
    vhConf=${vhFile##*/}
    sudo a2ensite ${vhConf}
    vhost=${vhConf%.*}
    sudo sed -i "2i${vmip}    ${vhost}" /etc/hosts
done
sudo chmod -R 755 /var/www
sudo service apache2 restart
echo '--------'