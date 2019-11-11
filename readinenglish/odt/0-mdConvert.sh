(
echo 'Executando tarefa, aguarde... '

#para minúsculo 
 for a in *.odt
 do
 mv -f $a `echo $a | tr "[A-Z]" "[a-z]" `
 done

 rename 's/ /-/g' *.odt
 rename 's/--/-/g' *.odt
 rename 's/\?//g' *.odt
 rename 's/\!//g' *.odt
 rename 's/\,//g' *.odt

arquivo=$NAUTILUS_SCRIPT_SELECTED_FILE_PATHS
XTERM="xterm"

### Localizando e abrindo o arquivo
entra=`zenity --title="Selecione o arquivo de texto" --file-selection --file-filter="*.odt"`

nameFile=`basename $entra`



	gitbook-convert --max-depth 0 $nameFile .

	#cria metatag	
	echo "---" > metaTag
	echo "title: title" >> metaTag
	echo "Author: author" >> metaTag
	echo "Translator: translator" >> metaTag
	echo "slug: /$nameFile" | tr '[:upper:]' '[:lower:]' | sed 's/\///g' | sed 's/\.odt//g' >> metaTag
	echo "---" >> metaTag	
        cat metaTag README.md > $nameFile.md
	
	#renomeia arquivo
	#mv $nameFile2.md $nameFile.md
	sed -i 7d $nameFile.md
	rename 's/\.odt\.md/\.md/g' $nameFile.md


#remove arquivos desnecessários
rm -r assets/ SUMMARY.md metaTag README.md


        


) | zenity --progress --width 300 --height 100 --title "Informação do Sistema" --text "Executando tarefa, aguarde... !!!" --pulsate --auto-close
