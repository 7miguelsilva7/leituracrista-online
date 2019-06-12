#!/bin/bash
for file in ./*.jpeg; do
Novo="$(echo "$file" | sed 's:.jpeg:.jpeg:')"
echo "$Novo"
convert "$file" -resize 30% "$file"
done


