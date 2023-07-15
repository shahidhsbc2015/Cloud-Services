#!/bin/bash
yum update -y
yum install httpd -y
service httpd start
chkconfig httpd on
systemctl enable httpd
cd /var/www/html
echo "<html><h1>Hello Guys Welcome To My Website</h1></html>" > index.html
aws s3 mb s3://YOURBUCKETNAMEHERE
aws s3 cp index.html s3://YOURBUCKETNAMEHERE