# Printserver
A php script that can run as a pseudo printserver.
If you want to print basic text from anywhere on your cheapish thermal printer this is your script!
You might use one of your spare raspberry pis you had no use for yet.
Hook it up in the network with raspbian or something and you are good to go!

## Installation
### Webserver basic installation
As a base you obviously want to use an apache http server! 
It does all the hard work, like waiting for people to send printtasks.
Get connected to your raspberry pi, somehow like  `ssh pi@192.168.3.14` (raspbian passwort ist `raspberry`)
```shell
sudo su
apt-get update
apt-get install apache2 php5
adduser www-data lp
a2enmod rewrite
```
Now we have installed apache2 and php5, added the apache user (www-data) to the printer group ... we should allow him to print!
Mod rewrite is enabled and important for further configuration of apache webserver.
One thing missing is, where to put this script. so, what you want to do is (git needs to be installed):
```shell
cd /var/www
git clone 
```


## Configuration


## Usage
