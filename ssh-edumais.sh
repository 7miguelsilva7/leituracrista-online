#xterm -e ssh u418947634@153.92.6.106 -p 65002

ssh -t u109863032@153.92.6.22 -p 65002 "

cd domains/edumais.com.br/edumais && 
git pull &&
cp -ur public_html/css/ ../public_html/ && 
cp -ur public_html/js/ ../public_html/ && 
cp -ur gabfacil/ ../public_html/ && 
cp -ur gabarito/ ../public_html/ && 
cp -ur gerarprovas/ ../public_html/ && 
cp -ur gerarProvas/ ../public_html/ && 
cp -ur eduquiz/img ../public_html/gerarprovas/ && 
cp -ur eduquiz/ ../public_html/ && 
cp -ur busqueaqui/ ../public_html/ && 
cp -ur cadAlunos/ ../public_html/ &&
cp -ur atvjclic/ ../public_html/ && 
cp -ur resultado/ ../public_html/ &&
cp -ur jclicMoodle/ ../public_html/ &&
cp -ur edumais/* ../public_html/edumais
"

exit

