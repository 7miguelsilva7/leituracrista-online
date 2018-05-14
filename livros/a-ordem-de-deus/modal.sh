#!/bin/bash

#Raiz ############################################################################################################################

# Diretório a partir do qual estão todas as pastas
#cd /opt/lampp/htdocs/leituracrista/public
basedir=`pwd` 
# é possível colocar o link direto,
# ou copiar o .sh para todas as pastas,
# o que é necessário nesse exemplo

# Salva uma lista de diretórios
cd $basedir
ls --format single-column >lista.txt 
# imprime uma lista linear com todos os 
# diretórios presentes na pasta em que o script está

# Loop para execução do comando
for subpastas in `cat lista.txt`
  do
  cd $basedir/$subpastas/     
# vai entrar um por um nos diretórios do arquivo 
# gerado acima, adentrar a pasta em negrito,
# no caso edit_dir, que está dentro de cada
# um dos diretórios e concomitantemente...
sed -i "s/<a href\=\"http\:\/\/bibliaonline/<a data-toggle\=\"modal\" href\=\"\#myModal\" onclick\=\'loadURL\(\"http\:\/\/bibliaonline/g" *.html 
sed -i "s/1\">/1\"\)\'>/g" *.html
sed -i "s/2\">/2\"\)\'>/g" *.html
sed -i "s/3\">/3\"\)\'>/g" *.html
sed -i "s/4\">/4\"\)\'>/g" *.html
sed -i "s/5\">/5\"\)\'>/g" *.html
sed -i "s/6\">/6\"\)\'>/g" *.html
sed -i "s/7\">/7\"\)\'>/g" *.html
sed -i "s/8\">/8\"\)\'>/g" *.html
sed -i "s/9\">/9\"\)\'>/g" *.html
sed -i "s/0\">/0\"\)\'>/g" *.html                                                                              
# ...executar o comando desejado, no caso, phredPhrap,
# para outros comandos basta editar a parte em negrito
  done

# Fecha o Script
#exit 0


# Fecha o Script

exit 0


