for file in ./*.png; do
Novo="$(echo "$file" | sed 's:.png:.jpeg:')"
echo "$Novo"
convert "$file" "$Novo"
done
