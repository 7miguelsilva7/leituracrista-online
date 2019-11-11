#!/bin/bash
 
#livretes ############################################################################################################################

# Diretório a partir do qual estão todas as pastas

(
echo 'Executando tarefa, aguarde... '

basedir=`pwd` 
# é possível colocar o link direto,
# ou copiar o .sh para todas as pastas,
# o que é necessário nesse exemplo



# Salva uma lista de diretórios
cd $basedir
ls -d */ --format single-column > lista.txt 
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

###### Digite seus comando aqui ########
###### Digite seus comando aqui ########
###### Digite seus comando aqui ########
###### Digite seus comando aqui ########
 
sed -i 's/\\//g' index.html
sed -i '/mysword/ s/www\.//g' index.html
sed -i 's:\/):):g' index.html

#resolve problema para abrir referencias MySword
sed -i "/mysword/ s/href\=\"http/onclick\=\"window.open('http/g" index.html
sed -i "/mysword/ s/\">/')\">/g" index.html
sed -i "/mysword/ s/onclick/href='..\/closeWindow.html' target='closeWindow' onclick/g" index.html
#sed -i "<li><a href=\"#(.*.)')\"//g" index.html
sed -i "/<li>/ s/<a href\='\.\.\/closeWindow\.html'.*.')\">//g" index.html
sed -i "s/<\/a><\/a><\/li>/<\/a><\/li>/g" index.html
sed -i "/<li>/ s/')//g" index.html
sed -i "/id=\"/ s/')\"><a href='/\"><a href='/g" index.html
#sed -i 's///g' index.html

#sed -i '/mysword/ s/\//g' index.html



########################################
########################################
########################################
########################################
                                                                           
# ...executar o comando desejado, no caso, phredPhrap
  done

# Fecha o Script
exit 0

#echo '   Tarefas finalizadas!!!    '
sleep 1
) | zenity --progress --width 300 --height 100 --title "Informação do Sistema" --text "Executando tarefa, aguarde... !!!" --pulsate --auto-close

