// Marcar livros como lido ou não
var aStatus='Status'
var bookNameStatus = document.getElementsByTagName("title")[0].innerHTML;
var livroStatus = bookNameStatus.concat(aStatus)

if (localStorage.getItem(livroStatus) === null) {
localStorage.setItem(livroStatus, 0)
}

function setLivroStatus0()
{
localStorage.setItem(livroStatus, 0)
}
function setLivroStatus1()
{
localStorage.setItem(livroStatus, 1)
}

if (localStorage.getItem(livroStatus) == 0)
{
document.write("<div align='center'><a href='../' onclick='setLivroStatus1();removeNameBookActived()'>Marcar Livro Como Lido</a></div><br><br>")
}
else
{
document.write("<div align='center'><a href='../' onclick='setLivroStatus0();removeNameBookActived()'>Desmarcar Livro Como Lido</a></div><br><br")
}