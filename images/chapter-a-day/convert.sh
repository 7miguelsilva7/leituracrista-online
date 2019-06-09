#!/bin/bash
for file in ./*.png; do
Novo="$(echo "$file" | sed 's:.png:.jpeg:')"
echo "$Novo"
convert -quality 1 "$file" "$Novo"
done


