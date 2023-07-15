#!/bin/bash
yum update -y
yum install httpd -y
service httpd start
chkconfig httpd on
sudo chkconfig httpd on
sudo /sbin/chkconfig httpd on
systemctl enable httpd
cd /var/www/html
echo "<html><h1>This is WebServer 01</h1></html>" > index.html