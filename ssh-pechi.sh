#xterm -e ssh u418947634@153.92.6.106 -p 65002

ssh -t u605632911@153.92.6.22 -p 65002 "

cd domains/pechi.esy.es/pechi &&
git pull &&
cp -ur public/* ../public_html

"

#ssh -t u418947634@153.92.6.106 -p 65002 "cd simOnline && git pull"

exit

