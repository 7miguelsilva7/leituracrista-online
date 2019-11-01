#!/bin/bash

#para minúsculo 
 for a in *.odt
 do
 mv -f $a `echo $a | tr "[A-Z]" "[a-z]"`
 done

#renomear ODT
rename 's/\.odt/\.zip/g' *.odt
rename 's/mysword//g' *.zip

#extrair imagens de zip

for a in *.zip
 do
 unzip $a '*.png' $a
 done


