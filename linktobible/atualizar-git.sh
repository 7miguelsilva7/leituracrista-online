#!/bin/bash
git pull
git add --all
echo "Descreva sua Atualização:"
read descricao
git commit -m "$descricao"
git push

