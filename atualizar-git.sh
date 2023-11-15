#!/bin/bash

#Set git repository
#git remote set-url origin https://github.com/7miguelsilva7/leituracrista.git

# Copia pastas de projetos
cp -r zap /opt/lampp/htdocs/leituracrista-online/
cp -r tests/ /opt/lampp/htdocs/leituracrista-online/
cp -r hinario/ /opt/lampp/htdocs/leituracrista-online/
cp -r hinos_espanhol /opt/lampp/htdocs/leituracrista-online/
cp -r tests /opt/lampp/htdocs/leituracrista-online/
cp -r img /opt/lampp/htdocs/leituracrista-online/
cp -r resetGit /opt/lampp/htdocs/leituracrista-online/
cp -r manifest /opt/lampp/htdocs/leituracrista-online/
cp -r linktobible /opt/lampp/htdocs/leituracrista-online/
cp -r biblia/ /opt/lampp/htdocs/leituracrista-online/
cp -r app/leituracrista/public/* /opt/lampp/htdocs/leituracrista-online/app/
cp -r app/readinenglish/public/* /opt/lampp/htdocs/leituracrista-online/app/readinenglish/
cp -r interlinear/ /opt/lampp/htdocs/leituracrista-online/
cp -r js/ /opt/lampp/htdocs/leituracrista-online/

git pull
#git add --all
git add --all :/
git commit -m "update"
git push

cd /opt/lampp/htdocs/leituracrista-online/

# sed -i 's/\&key=.*.\"/\&key\=\"/g' assembleias/index.php

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
