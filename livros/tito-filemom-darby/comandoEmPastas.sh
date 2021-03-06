#!/bin/bash
 
#livretes ############################################################################################################################
sed -i "s/<\/body>/<script type\=\"text\/javascript\" src\=\"\/\/s7\.addthis\.com\/js\/300\/addthis\_widget\.js\#pubid\=ra\-59d4445a35d0aa43\"><\/script>/" *.html
# Diretório a partir do qual estão todas as pastas

(
echo 'Executando tarefa, aguarde... '

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

###### Digite seus comandos aqui ########
sed -i 's/{#.*}//g' *.md
sed -i "s/<\/body>/<script type\=\"text\/javascript\" src\=\"\/\/s7\.addthis\.com\/js\/300\/addthis\_widget\.js\#pubid\=ra\-59d4445a35d0aa43\"><\/script>/" *.html

sed -i "s/<\/body>/<script type\=\"text\/javascript\" src\=\"\/\/s7\.addthis\.com\/js\/300\/addthis\_widget\.js\#pubid\=ra\-59d4445a35d0aa43\"><\/script>/" *.html
sed -i 's/<body class\=\"light\">/<body onscroll\=\"onscrolling\(\)\" class\=\"light\">/g' *.html
sed -i 's/<body /<body onload\=\"loadLastPage\(\)\" /g' index.html
########################################
                                                                           
# ...executar o comando desejado, no caso, phredPhrap
  done

# Fecha o Script
exit 0

#echo '   Tarefas finalizadas!!!    '
sleep 1
) | zenity --progress --width 300 --height 100 --title "Informação do Sistema" --text "Executando tarefa, aguarde... !!!" --pulsate --auto-close

