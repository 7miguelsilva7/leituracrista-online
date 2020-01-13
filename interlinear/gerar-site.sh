#!/bin/bash
hugo 
# copia head e foot para juntar ao index
cp script.head.html script.foot.html docs/

# Junta arquivos
cd docs
cat script.head.html index.html script.foot.html > index2.html
mv index2.html index.html
