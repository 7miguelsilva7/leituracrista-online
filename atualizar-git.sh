#!/bin/bash

# Copia pastas de projetos
cp -ur zap /opt/lampp/htdocs/leituracrista-online/
cp -ur tests/ /opt/lampp/htdocs/leituracrista-online/
cp -ur hinario/ /opt/lampp/htdocs/leituracrista-online/
cp -ur hinos_espanhol /opt/lampp/htdocs/leituracrista-online/
cp -ur tests /opt/lampp/htdocs/leituracrista-online/
cp -ur img /opt/lampp/htdocs/leituracrista-online/
cp -ur resetGit /opt/lampp/htdocs/leituracrista-online/
cp -ur manifest /opt/lampp/htdocs/leituracrista-online/
cp -ur linktobible /opt/lampp/htdocs/leituracrista-online/
cp -ur assembleias /opt/lampp/htdocs/leituracrista-online/
cp -ur app/leituracrista /opt/lampp/htdocs/leituracrista-online/
cp -ur app/readinenglish /opt/lampp/htdocs/leituracrista-online/

git pull
#git add --all
git add --all :/
git commit -m "update"
git push

cd /opt/lampp/htdocs/leituracrista-online/

sed -i 's/\&key=.*.\"/\&key\=\"/g' assembleias/index.php

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
