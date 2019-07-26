#!/bin/bash

cp -ur zap /opt/lampp/htdocs/leituracrista-online/
cp -ur tests/ /opt/lampp/htdocs/leituracrista-online/

git pull
#git add --all
git add --all :/
git commit -m "update"
git push

cd /opt/lampp/htdocs/leituracrista-online/

git add .
git add --all
git add --all :/
git commit -m "update"
git push

if [ -e /opt/lampp/htdocs/ssh-leituracrista.sh ]; then 
/opt/lampp/htdocs/ssh-leituracrista.sh;

else 
chromium-browser https://cpanel.hostinger.com.br/git/index/aid/29500595; 
fi
