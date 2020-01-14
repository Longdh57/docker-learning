#!/bin/bash

sshuser=${sshuser:-sshuser}
password=${password:-pass}
sshgroup="sshgroup"

useradd $sshuser
groupadd $sshgroup
usermod -a -G $sshgroup $sshuser
echo "$sshuser:$password" | chpasswd

echo "user: $sshuser /gr $sshgroup";
echo "pass: $password";
 

mkdir -p /data
chmod 755 /data

chown $sshuser:$sshgroup /data

/usr/sbin/sshd -D
