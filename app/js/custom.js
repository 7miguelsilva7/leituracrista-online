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

function removeNameBookActived(){
    localStorage.removeItem('NameBookActivedKey');
    }
    
    
    var aScroll = 'scroll-'
    var positionScrollKey = document.getElementsByTagName("title")[0].innerHTML;
    
    function onscrolling(){
    positionScrollValue = $(window).scrollTop();
    localStorage.setItem(positionScrollKey, positionScrollValue);
    // End get and Set Scroll Position
    }
    
    console.log(positionScrollKey)
    console.log(localStorage.getItem(positionScrollKey));
    
    if(localStorage.hasOwnProperty(positionScrollKey)){
      var target = $('#scroll');
      target.css('overflow-y', 'hidden');
      $(window).scrollTop(localStorage.getItem(positionScrollKey));
      target.css('overflow-y', 'auto');
    }