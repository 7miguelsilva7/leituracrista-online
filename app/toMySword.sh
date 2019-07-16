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

###### Digite seus comando aqui ########
###### Digite seus comando aqui ########
###### Digite seus comando aqui ########
###### Digite seus comando aqui ########
 
sed -i 's/{style\=\"font\-\weight\: normal\"}//g' *.html
sed -i 's:\:\:g' *.html
sed -i 's:\/):):g' *.html
#resolve problema para abrir me MySword
sed -i "/biblia/ s/href\=\"http/onclick\=\"window.open('http/g" *.html
sed -i "/biblia/ s/\">/')\">/g" *.html
sed -i "s/onclick/href='..\/closeWindow.html' target='closeWindow' onclick/g" *.html
#sed -i 's///g' *.html

#mudar link para mysword
sed -i 's:www::g' *.html
sed -i 's:bibliaonline.com.br\/acf\/1co\/:mysword.info\/b?r\=1Co_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/1cr\/:mysword.info\/b?r\=1Ch_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/1jo\/:mysword.info\/b?r\=1Jo_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/1pe\/:mysword.info\/b?r\=1Pe_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/1rs\/:mysword.info\/b?r\=1Ki_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/1sm\/:mysword.info\/b?r\=1Sa_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/1ts\/:mysword.info\/b?r\=1Th_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/1tm\/:mysword.info\/b?r\=1Ti_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/2cr\/:mysword.info\/b?r\=2Cr_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/2co\/:mysword.info\/b?r\=2Co_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/2jo\/:mysword.info\/b?r\=2Jo_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/2pe\/:mysword.info\/b?r\=2Pe_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/2rs\/:mysword.info\/b?r\=2Ki_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/2sm\/:mysword.info\/b?r\=2Sa_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/2ts\/:mysword.info\/b?r\=2Th_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/2tm\/:mysword.info\/b?r\=2Ti_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/3jo\/:mysword.info\/b?r\=3Jo_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/ag\/:mysword.info\/b?r\=Hag_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/am\/:mysword.info\/b?r\=Amo_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/ap\/:mysword.info\/b?r\=Rev_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/atos\/:mysword.info\/b?r\=Act_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/at\/:mysword.info\/b?r\=Act_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/cl\/:mysword.info\/b?r\=col_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/ct\/:mysword.info\/b?r\=son_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/dn\/:mysword.info\/b?r\=Dan_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/dt\/:mysword.info\/b?r\=Deu_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/ec\/:mysword.info\/b?r\=Ecc_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/ed\/:mysword.info\/b?r\=Ezr_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/ef\/:mysword.info\/b?r\=Eph_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/et\/:mysword.info\/b?r\=Est_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/ex\/:mysword.info\/b?r\=Exo_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/ez\/:mysword.info\/b?r\=Eze_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/fp\/:mysword.info\/b?r\=Php_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/fm\/:mysword.info\/b?r\=Phm_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/gl\/:mysword.info\/b?r\=Gal_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/gn\/:mysword.info\/b?r\=Gen_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/hb\/:mysword.info\/b?r\=Heb_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/hc\/:mysword.info\/b?r\=Hab_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/is\/:mysword.info\/b?r\=Isa_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/jd\/:mysword.info\/b?r\=Jud_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/jl\/:mysword.info\/b?r\=Joe_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/jn\/:mysword.info\/b?r\=Jon_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/jo\/:mysword.info\/b?r\=Joh_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/jó\/:mysword.info\/b?r\=Job_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/j%C3%B3\/:mysword.info\/b?r\=Job_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/jr\/:mysword.info\/b?r\=Jer_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/js\/:mysword.info\/b?r\=Jos_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/jz\/:mysword.info\/b?r\=Jdg_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/lc\/:mysword.info\/b?r\=Luk_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/lm\/:mysword.info\/b?r\=Lam_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/lv\/:mysword.info\/b?r\=Lev_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/mc\/:mysword.info\/b?r\=Mar_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/ml\/:mysword.info\/b?r\=Mal_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/mq\/:mysword.info\/b?r\=Mic_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/mt\/:mysword.info\/b?r\=Mat_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/na\/:mysword.info\/b?r\=Nah_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/ne\/:mysword.info\/b?r\=Neh_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/nm\/:mysword.info\/b?r\=Num_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/ob\/:mysword.info\/b?r\=Oba_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/os\/:mysword.info\/b?r\=Hos_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/pv\/:mysword.info\/b?r\=Pro_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/rm\/:mysword.info\/b?r\=Rom_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/rt\/:mysword.info\/b?r\=Rut_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/sf\/:mysword.info\/b?r\=Zep_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/sl\/:mysword.info\/b?r\=Psa_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/tg\/:mysword.info\/b?r\=Jas_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/tt\/:mysword.info\/b?r\=Tit_:g' *.html
sed -i 's:bibliaonline.com.br\/acf\/zc\/:mysword.info\/b?r\=Zec_:g' *.html

#configurar link corretamente

sed -i '/mysword/ s/\/1/\:1/g' *.html
sed -i '/mysword/ s/\/2/\:2/g' *.html
sed -i '/mysword/ s/\/3/\:3/g' *.html
sed -i '/mysword/ s/\/4/\:4/g' *.html
sed -i '/mysword/ s/\/5/\:5/g' *.html
sed -i '/mysword/ s/\/6/\:6/g' *.html
sed -i '/mysword/ s/\/7/\:7/g' *.html
sed -i '/mysword/ s/\/8/\:8/g' *.html
sed -i '/mysword/ s/\/9/\:9/g' *.html
sed -i '/mysword/ s/\/0/\:0/g' *.html

sed -i '/mysword/ s/\//g' *.html
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




















