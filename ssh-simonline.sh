#xterm -e ssh u418947634@153.92.6.106 -p 65002

ssh -t u418947634@153.92.6.106 -p 65002 "
cd simOnline && 
git pull &&
cp -ur img/ ../public_html/ && 
cp -ur gabarito/ ../public_html/ && 
cp -ur gerarprovas/ ../public_html/ && 
cp -ur gerarProvas/ ../public_html/ && 
cp -ur eduquiz/img ../public_html/gerarprovas/ && 
cp -ur eduquiz/ ../public_html/ && 
cp -ur inicio/* ../public_html/ && 
cp -ur cadAlunos/ ../public_html/ && 
cp -ur atvjclic/ ../public_html/ && 
cp -ur resultado/ ../public_html/ &&
cp -ur public_html/ ../

"

#ssh -t u418947634@153.92.6.106 -p 65002 "cd simOnline && git pull"

exit

