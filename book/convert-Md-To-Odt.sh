for file in ./*.md; do
Novo="$(echo "$file" | sed 's:.md:.odt:')"
echo "$Novo"
pandoc "$file" -o "$Novo"
done
