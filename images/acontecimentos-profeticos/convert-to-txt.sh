for file in ./*.gif; do
Novo="$(echo "$file" | sed 's:.gif:.png:')"
echo "$Novo"
convert "$file" "$Novo"
done
