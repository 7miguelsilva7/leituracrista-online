$(document).ready(function(){

  $books = "1 Cor.ntios,1 Cr.nicas,1 Jo.o,1 Pedro,1 Reis,1 Samuel,1 Tessalonicenses,1 Tim.teo,2 Cor.ntios,2 Cr.nicas,2 Jo.o,2 Pedro,2 Reis,2 Samuel,2 Tessalonicenses,2 Tim.teo,3 Jo.o,Ageu,Am.s,Apocalipse,Atos dos Ap.stolos,Atos,Cantares,Colossenses,Daniel,Deuteron.mio,Eclesiastes,Ef.sios,Esdras,Ester,.xodo,Exodo,.x,Ex,Ezequiel,Filemom,Filipenses,Gálatas,G.nesis,Genesis,Habacuque,Hebreus,Isa.as,Jeremias,Jó,Jo.o,Joel,Jonas,Josu.,Judas,Ju.zes,Lamenta..es,Lev.tico,Lucas,Malaquias,Marcos,Mateus,Miqueias,Naum,Neemias,N.meros,N.mero,Obadias,Oseias,Prov.rbios,Romanos,Rute,Salmos,Salmo,Sofonias,Tiago,Tito,Zacarias,1Cor.ntios,1Cr.nicas,1Jo.o,1Pedro,1Reis,1Samuel,1Tessalonicenses,1Tim.teo,2Cor.ntios,2Cr.nicas,2Jo.o,2Pedro,2Reis,2Samuel,2Tessalonicenses,2Tim.teo,3Jo.o,1 Co,1 Cr,1 Jo,1 Pe,1 Rs,1 Sm,1 Ts,1 Tm,2 Co,2 Cr,2 Jo,2 Pe,2 Rs,2 Sm,2 Ts,2 Tm,3 Jo,1Co,1Cr,1Jo,1Pe,1Pd,1 Pd,2Pd,2 Pd,1Rs,1Sm,1Ts,1Tm,2Co,2Cr,2Jo,2Pe,2Rs,2Sm,2Ts,2Tm,3Jo,Ag,Am,Ap,At,Ct,Cl,Dn,Dt,Ec,Ef,Ed,Et,.x,Ez,Fm,Fp,Gl,Gn,Hc,Hb,Is,Jr,Jó,Jo,Jl,Jn,Js,Jd,Jz,Lm,Lv,Lc,Ml,Mc,Mt,Mq,Na,Ne,Nm,Ob,Os,Pv,Rm,Rt,Sl,Sf,Tg,Tt,Zc,1 Co.,1 Cr.,1 Jo.,1 Pe.,1 Rs.,1 Sm.,1 Ts.,1 Tm.,2 Co.,2 Cr.,2 Jo.,2 Pe.,2 Rs.,2 Sm.,2 Ts.,2 Tm.,3 Jo.,1Co.,1Cr.,1Jo.,1Pe.,1Rs.,1Sm.,1Ts.,1Tm.,2Co.,2Cr.,2Jo.,2Pe.,2Rs.,2Sm.,2Ts.,2Tm.,3Jo.,Ag.,Am.,Ap.,At.,Ct.,Cl.,Dn.,Dt.,Ec.,Ef.,Ed.,Et.,.x.,Ez.,Fm.,Fp.,Gl.,Gn.,Hc.,Hb.,Is.,Jr.,Jó.,Jo.,Jl.,Jn.,Js.,Jd.,Jz.,Lm.,Lv.,Lc.,Ml.,Mc.,Mt.,Mq.,Na.,Ne.,Nm.,Ob.,Os.,Pv.,Rm.,Rt.,Sl.,Sf.,Tg.,Tt.,Zc."
  var searchTerm = $books.split(",");
  host = "https://bibliaonline.com.br/acf/"
  
$("#content").each(function() {
  capTerms = '(([0-9]{1,3}(\.|:)[0-9]{1,3}((,| ,|, |-| e )[0-9]{1,3}){1,});|([0-9]{1,3}(\.|:)[0-9]{1,3}(;|)))( [0-9]{1,3}(\.|:))'
  var html = $(this).html().toString();
  var pattern = "(" + searchTerm.join('|') + ") " + capTerms;
  var rg = new RegExp(pattern, 'ig');
      var match = rg.exec(html);
  
  html = html
  .replace(/.xodo/ig, "Exodo")
  .replace(/Êxodo/ig, "Exodo")
  .replace(/Êx /gi, "Ex ")
  .replace(/G.nesis/gi, "Genesis")
  .replace(/([0-9]{1,3}), ([0-9]{1,3}:[0-9]{1,3})/gi, "$1; $2")
  .replace(/([0-9]{1,3}:[0-9]{1,3}) e ([0-9]{1,3}:[0-9]{1,3})/gi,"$1; $2")
      
  .replace(rg, '$1 $2; $1$10')
  .replace(rg, '$1 $2; $1$10')
  .replace(rg, '$1 $2; $1$10')
  .replace(rg, '$1 $2; $1$10')
  .replace(rg, '$1 $2; $1$10')
  .replace(rg, '$1 $2; $1$10')
  .replace(rg, '$1 $2; $1$10')
  .replace(rg, '$1 $2; $1$10')
  .replace(rg, '$1 $2; $1$10')
  .replace(rg, '$1 $2; $1$10')

  // solve problem twice dot commom 
  .replace(/;;/ig, ";")

      ;
      $(this).html(html);
  });

  $("#content").each(function() {
    var cap = "(([0-9]{1,3}(\.|:)[0-9]{1,3}((,| ,|, |-)[0-9]{1,3}){1,})|([0-9]{1,3}(\.|:)[0-9]{1,3})|([0-9]{1,3}))"
    var html = $(this).html().toString();
        var pattern = "\\b(" + searchTerm.join('|') + ")( " + cap + ")\\b";
        var rg = new RegExp(pattern, 'ig');
        var match = rg.exec(html);
    
        html = html.replace(rg, '<a href="'+host+'$1$2" target="_blank" style="color:red">$1$2</a>')
        .replace(/.xodo/gi, "Êxodo")
        .replace(/G.nesis/gi, "Gênesis")
        ;
        $(this).html(html);
    });

// solve references
  $('a[href^="https://"]').each(function(){ 
              var oldUrl = $(this).attr("href"); 
              var newUrl = oldUrl
              .replace(/Jó/gi,"_Jo_")
              .replace(/ /g, "")
              .normalize('NFD')
              .replace(/[\u0300-\u036f]/g, "")
              .replace(/([a-z])([0-9]{1,3})/i,"$1/$2")
              .replace(/(\.|:)([0-9]{1,3})/g,"/$2")
              .replace(/([0-9]{1,3})e([0-9]{1,3})/,"$1,$2")
              .replace(/_Jo_/gi,"Jó/")
              // .replace(/(\/[0-9]{1,3})-[0-9]{1,3}/, '$1')
              .replace(/\/1pd\//gi,"/1pe/")
              .replace(/\/2pd\//gi,"/2pe/")
              .replace(/\/N.mero\//gi, "/Numeros/")

              ; 
              $(this).attr("href", newUrl); 
  });


// verifica valor de session e determina referencias 
var session = localStorage.ref;
if ( session == 1 )
{
  $('a[href^="https://"]').each(function(){ 
    var oldUrl = $(this).attr("href"); 
    var newUrl = oldUrl
   
    .replace(/bibliaonline.com.br\/acf\/rm\//gi, "mysword.info\/b?r\=Rom_") 
    .replace(/bibliaonline.com.br\/acf\/1co\//gi, "mysword.info\/b?r\=1Co_")
    .replace(/bibliaonline.com.br\/acf\/1cr\//gi, "mysword.info\/b?r\=1Ch_")
    .replace(/bibliaonline.com.br\/acf\/1pe\//gi, "mysword.info\/b?r\=1Pe_")
    .replace(/bibliaonline.com.br\/acf\/1rs\//gi, "mysword.info\/b?r\=1Ki_")
    .replace(/bibliaonline.com.br\/acf\/1sm\//gi, "mysword.info\/b?r\=1Sa_")
    .replace(/bibliaonline.com.br\/acf\/1co\//gi, "mysword.info\/b?r\=1Co_")
    .replace(/bibliaonline.com.br\/acf\/1cr\//gi, "mysword.info\/b?r\=1Ch_")
    .replace(/bibliaonline.com.br\/acf\/1jo\//gi, "mysword.info\/b?r\=1Jo_")
    .replace(/bibliaonline.com.br\/acf\/1pe\//gi, "mysword.info\/b?r\=1Pe_")
    .replace(/bibliaonline.com.br\/acf\/1rs\//gi, "mysword.info\/b?r\=1Ki_")
    .replace(/bibliaonline.com.br\/acf\/1sm\//gi, "mysword.info\/b?r\=1Sa_")
    .replace(/bibliaonline.com.br\/acf\/1ts\//gi, "mysword.info\/b?r\=1Th_")
    .replace(/bibliaonline.com.br\/acf\/1tm\//gi, "mysword.info\/b?r\=1Ti_")
    .replace(/bibliaonline.com.br\/acf\/2cr\//gi, "mysword.info\/b?r\=2Cr_")
    .replace(/bibliaonline.com.br\/acf\/2co\//gi, "mysword.info\/b?r\=2Co_")
    .replace(/bibliaonline.com.br\/acf\/2jo\//gi, "mysword.info\/b?r\=2Jo_")
    .replace(/bibliaonline.com.br\/acf\/2pe\//gi, "mysword.info\/b?r\=2Pe_")
    .replace(/bibliaonline.com.br\/acf\/2rs\//gi, "mysword.info\/b?r\=2Ki_")
    .replace(/bibliaonline.com.br\/acf\/2sm\//gi, "mysword.info\/b?r\=2Sa_")
    .replace(/bibliaonline.com.br\/acf\/2ts\//gi, "mysword.info\/b?r\=2Th_")
    .replace(/bibliaonline.com.br\/acf\/2tm\//gi, "mysword.info\/b?r\=2Ti_")
    .replace(/bibliaonline.com.br\/acf\/3jo\//gi, "mysword.info\/b?r\=3Jo_")
    .replace(/bibliaonline.com.br\/acf\/ag\//gi, "mysword.info\/b?r\=Hag_")
    .replace(/bibliaonline.com.br\/acf\/am\//gi, "mysword.info\/b?r\=Amo_")
    .replace(/bibliaonline.com.br\/acf\/ap\//gi, "mysword.info\/b?r\=Rev_")
    .replace(/bibliaonline.com.br\/acf\/atos\//gi, "mysword.info\/b?r\=Act_")
    .replace(/bibliaonline.com.br\/acf\/at\//gi, "mysword.info\/b?r\=Act_")
    .replace(/bibliaonline.com.br\/acf\/cl\//gi, "mysword.info\/b?r\=col_")
    .replace(/bibliaonline.com.br\/acf\/ct\//gi, "mysword.info\/b?r\=son_")
    .replace(/bibliaonline.com.br\/acf\/dn\//gi, "mysword.info\/b?r\=Dan_")
    .replace(/bibliaonline.com.br\/acf\/dt\//gi, "mysword.info\/b?r\=Deu_")
    .replace(/bibliaonline.com.br\/acf\/ec\//gi, "mysword.info\/b?r\=Ecc_")
    .replace(/bibliaonline.com.br\/acf\/ed\//gi, "mysword.info\/b?r\=Ezr_")
    .replace(/bibliaonline.com.br\/acf\/ef\//gi, "mysword.info\/b?r\=Eph_")
    .replace(/bibliaonline.com.br\/acf\/et\//gi, "mysword.info\/b?r\=Est_")
    .replace(/bibliaonline.com.br\/acf\/ex\//gi, "mysword.info\/b?r\=Exo_")
    .replace(/bibliaonline.com.br\/acf\/ez\//gi, "mysword.info\/b?r\=Eze_")
    .replace(/bibliaonline.com.br\/acf\/fp\//gi, "mysword.info\/b?r\=Php_")
    .replace(/bibliaonline.com.br\/acf\/fm\//gi, "mysword.info\/b?r\=Phm_")
    .replace(/bibliaonline.com.br\/acf\/gl\//gi, "mysword.info\/b?r\=Gal_")
    .replace(/bibliaonline.com.br\/acf\/gn\//gi, "mysword.info\/b?r\=Gen_")
    .replace(/bibliaonline.com.br\/acf\/hb\//gi, "mysword.info\/b?r\=Heb_")
    .replace(/bibliaonline.com.br\/acf\/hc\//gi, "mysword.info\/b?r\=Hab_")
    .replace(/bibliaonline.com.br\/acf\/is\//gi, "mysword.info\/b?r\=Isa_")
    .replace(/bibliaonline.com.br\/acf\/jd\//gi, "mysword.info\/b?r\=Jud_")
    .replace(/bibliaonline.com.br\/acf\/jl\//gi, "mysword.info\/b?r\=Joe_")
    .replace(/bibliaonline.com.br\/acf\/jn\//gi, "mysword.info\/b?r\=Jon_")
    .replace(/bibliaonline.com.br\/acf\/jo\//gi, "mysword.info\/b?r\=Joh_")
    .replace(/bibliaonline.com.br\/acf\/jó\//gi, "mysword.info\/b?r\=Job_")
    .replace(/bibliaonline.com.br\/acf\/j%C3%B3\//gi, "mysword.info\/b?r\=Job_")
    .replace(/bibliaonline.com.br\/acf\/J%C3%B3\//gi, "mysword.info\/b?r\=Job_")
    .replace(/bibliaonline.com.br\/acf\/J%C3%93\//gi, "mysword.info\/b?r\=Job_")
    .replace(/bibliaonline.com.br\/acf\/jr\//gi, "mysword.info\/b?r\=Jer_")
    .replace(/bibliaonline.com.br\/acf\/js\//gi, "mysword.info\/b?r\=Jos_")
    .replace(/bibliaonline.com.br\/acf\/jz\//gi, "mysword.info\/b?r\=Jdg_")
    .replace(/bibliaonline.com.br\/acf\/lc\//gi, "mysword.info\/b?r\=Luk_")
    .replace(/bibliaonline.com.br\/acf\/lm\//gi, "mysword.info\/b?r\=Lam_")
    .replace(/bibliaonline.com.br\/acf\/lv\//gi, "mysword.info\/b?r\=Lev_")
    .replace(/bibliaonline.com.br\/acf\/mc\//gi, "mysword.info\/b?r\=Mar_")
    .replace(/bibliaonline.com.br\/acf\/ml\//gi, "mysword.info\/b?r\=Mal_")
    .replace(/bibliaonline.com.br\/acf\/mq\//gi, "mysword.info\/b?r\=Mic_")
    .replace(/bibliaonline.com.br\/acf\/mt\//gi, "mysword.info\/b?r\=Mat_")
    .replace(/bibliaonline.com.br\/acf\/na\//gi, "mysword.info\/b?r\=Nah_")
    .replace(/bibliaonline.com.br\/acf\/ne\//gi, "mysword.info\/b?r\=Neh_")
    .replace(/bibliaonline.com.br\/acf\/nm\//gi, "mysword.info\/b?r\=Num_")
    .replace(/bibliaonline.com.br\/acf\/ob\//gi, "mysword.info\/b?r\=Oba_")
    .replace(/bibliaonline.com.br\/acf\/os\//gi, "mysword.info\/b?r\=Hos_")
    .replace(/bibliaonline.com.br\/acf\/pv\//gi, "mysword.info\/b?r\=Pro_")
    .replace(/bibliaonline.com.br\/acf\/rm\//gi, "mysword.info\/b?r\=Rom_")
    .replace(/bibliaonline.com.br\/acf\/rt\//gi, "mysword.info\/b?r\=Rut_")
    .replace(/bibliaonline.com.br\/acf\/sf\//gi, "mysword.info\/b?r\=Zep_")
    .replace(/bibliaonline.com.br\/acf\/sl\//gi, "mysword.info\/b?r\=Psa_")
    .replace(/bibliaonline.com.br\/acf\/tg\//gi, "mysword.info\/b?r\=Jas_")
    .replace(/bibliaonline.com.br\/acf\/tt\//gi, "mysword.info\/b?r\=Tit_")
    .replace(/bibliaonline.com.br\/acf\/zc\//gi, "mysword.info\/b?r\=Zec_")
    
    .replace(/bibliaonline.com.br\/acf\/Romanos\//gi, "mysword.info\/b?r\=Rom_") 
    .replace(/bibliaonline.com.br\/acf\/1cor.ntios\//gi, "mysword.info\/b?r\=1Co_")
    .replace(/bibliaonline.com.br\/acf\/1pedro\//gi, "mysword.info\/b?r\=1Pe_")
    .replace(/bibliaonline.com.br\/acf\/1reis\//gi, "mysword.info\/b?r\=1Ki_")
    .replace(/bibliaonline.com.br\/acf\/1samuel\//gi, "mysword.info\/b?r\=1Sa_")
    .replace(/bibliaonline.com.br\/acf\/1cr.nicas\//gi, "mysword.info\/b?r\=1Ch_")
    .replace(/bibliaonline.com.br\/acf\/1jo.o\//gi, "mysword.info\/b?r\=1Jo_")
    .replace(/bibliaonline.com.br\/acf\/1pedro\//gi, "mysword.info\/b?r\=1Pe_")
    .replace(/bibliaonline.com.br\/acf\/1Tessalonicenses\//gi, "mysword.info\/b?r\=1Th_")
    .replace(/bibliaonline.com.br\/acf\/1tim.teo\//gi, "mysword.info\/b?r\=1Ti_")
    .replace(/bibliaonline.com.br\/acf\/2cr.nicas\//gi, "mysword.info\/b?r\=2Cr_")
    .replace(/bibliaonline.com.br\/acf\/2cor.ntios\//gi, "mysword.info\/b?r\=2Co_")
    .replace(/bibliaonline.com.br\/acf\/2jo.o\//gi, "mysword.info\/b?r\=2Jo_")
    .replace(/bibliaonline.com.br\/acf\/2pedro\//gi, "mysword.info\/b?r\=2Pe_")
    .replace(/bibliaonline.com.br\/acf\/2reis\//gi, "mysword.info\/b?r\=2Ki_")
    .replace(/bibliaonline.com.br\/acf\/2samuel\//gi, "mysword.info\/b?r\=2Sa_")
    .replace(/bibliaonline.com.br\/acf\/2Tessalonicenses\//gi, "mysword.info\/b?r\=2Th_")
    .replace(/bibliaonline.com.br\/acf\/2tim.teo\//gi, "mysword.info\/b?r\=2Ti_")
    .replace(/bibliaonline.com.br\/acf\/3jo.o\//gi, "mysword.info\/b?r\=3Jo_")
    .replace(/bibliaonline.com.br\/acf\/ageu\//gi, "mysword.info\/b?r\=Hag_")
    .replace(/bibliaonline.com.br\/acf\/am.s\//gi, "mysword.info\/b?r\=Amo_")
    .replace(/bibliaonline.com.br\/acf\/apocalipse\//gi, "mysword.info\/b?r\=Rev_")
    .replace(/bibliaonline.com.br\/acf\/atos\//gi, "mysword.info\/b?r\=Act_")
    .replace(/bibliaonline.com.br\/acf\/at\//gi, "mysword.info\/b?r\=Act_")
    .replace(/bibliaonline.com.br\/acf\/Colossenses\//gi, "mysword.info\/b?r\=col_")
    .replace(/bibliaonline.com.br\/acf\/C.nticos\//gi, "mysword.info\/b?r\=son_")
    .replace(/bibliaonline.com.br\/acf\/Cantares\//gi, "mysword.info\/b?r\=son_")
    .replace(/bibliaonline.com.br\/acf\/daniel\//gi, "mysword.info\/b?r\=Dan_")
    .replace(/bibliaonline.com.br\/acf\/Deuteron.mio\//gi, "mysword.info\/b?r\=Deu_")
    .replace(/bibliaonline.com.br\/acf\/Eclesiastes\//gi, "mysword.info\/b?r\=Ecc_")
    .replace(/bibliaonline.com.br\/acf\/Esdras\//gi, "mysword.info\/b?r\=Ezr_")
    .replace(/bibliaonline.com.br\/acf\/ef.sios\//gi, "mysword.info\/b?r\=Eph_")
    .replace(/bibliaonline.com.br\/acf\/ester\//gi, "mysword.info\/b?r\=Est_")
    .replace(/bibliaonline.com.br\/acf\/.x.do\//gi, "mysword.info\/b?r\=Exo_")
    .replace(/bibliaonline.com.br\/acf\/ezequiel\//gi, "mysword.info\/b?r\=Eze_")
    .replace(/bibliaonline.com.br\/acf\/Filipenses\//gi, "mysword.info\/b?r\=Php_")
    .replace(/bibliaonline.com.br\/acf\/filemom\//gi, "mysword.info\/b?r\=Phm_")
    .replace(/bibliaonline.com.br\/acf\/g.latas\//gi, "mysword.info\/b?r\=Gal_")
    .replace(/bibliaonline.com.br\/acf\/g.nesis\//gi, "mysword.info\/b?r\=Gen_")
    .replace(/bibliaonline.com.br\/acf\/hebreus\//gi, "mysword.info\/b?r\=Heb_")
    .replace(/bibliaonline.com.br\/acf\/Habacuque\//gi, "mysword.info\/b?r\=Hab_")
    .replace(/bibliaonline.com.br\/acf\/isa.as\//gi, "mysword.info\/b?r\=Isa_")
    .replace(/bibliaonline.com.br\/acf\/judas\//gi, "mysword.info\/b?r\=Jud_")
    .replace(/bibliaonline.com.br\/acf\/joel\//gi, "mysword.info\/b?r\=Joe_")
    .replace(/bibliaonline.com.br\/acf\/jonas\//gi, "mysword.info\/b?r\=Jon_")
    .replace(/bibliaonline.com.br\/acf\/jo.o\//gi, "mysword.info\/b?r\=Joh_")
    .replace(/bibliaonline.com.br\/acf\/jó\//gi, "mysword.info\/b?r\=Job_")
    .replace(/bibliaonline.com.br\/acf\/jeremias\//gi, "mysword.info\/b?r\=Jer_")
    .replace(/bibliaonline.com.br\/acf\/josu.\//gi, "mysword.info\/b?r\=Jos_")
    .replace(/bibliaonline.com.br\/acf\/ju.zes\//gi, "mysword.info\/b?r\=Jdg_")
    .replace(/bibliaonline.com.br\/acf\/lucas\//gi, "mysword.info\/b?r\=Luk_")
    .replace(/bibliaonline.com.br\/acf\/lamenta..es\//gi, "mysword.info\/b?r\=Lam_")
    .replace(/bibliaonline.com.br\/acf\/lev.tico\//gi, "mysword.info\/b?r\=Lev_")
    .replace(/bibliaonline.com.br\/acf\/marcos\//gi, "mysword.info\/b?r\=Mar_")
    .replace(/bibliaonline.com.br\/acf\/malaquias\//gi, "mysword.info\/b?r\=Mal_")
    .replace(/bibliaonline.com.br\/acf\/miqu.ias\//gi, "mysword.info\/b?r\=Mic_")
    .replace(/bibliaonline.com.br\/acf\/mateus\//gi, "mysword.info\/b?r\=Mat_")
    .replace(/bibliaonline.com.br\/acf\/naum\//gi, "mysword.info\/b?r\=Nah_")
    .replace(/bibliaonline.com.br\/acf\/neemias\//gi, "mysword.info\/b?r\=Neh_")
    .replace(/bibliaonline.com.br\/acf\/n.meros\//gi, "mysword.info\/b?r\=Num_")
    .replace(/bibliaonline.com.br\/acf\/obadias\//gi, "mysword.info\/b?r\=Oba_")
    .replace(/bibliaonline.com.br\/acf\/os.ias\//gi, "mysword.info\/b?r\=Hos_")
    .replace(/bibliaonline.com.br\/acf\/prov.rbios\//gi, "mysword.info\/b?r\=Pro_")
    .replace(/bibliaonline.com.br\/acf\/rute\//gi, "mysword.info\/b?r\=Rut_")
    .replace(/bibliaonline.com.br\/acf\/sofonias\//gi, "mysword.info\/b?r\=Zep_")
    .replace(/bibliaonline.com.br\/acf\/salmos\//gi, "mysword.info\/b?r\=Psa_")
    .replace(/bibliaonline.com.br\/acf\/salmo\//gi, "mysword.info\/b?r\=Psa_")
    .replace(/bibliaonline.com.br\/acf\/tiago\//gi, "mysword.info\/b?r\=Jas_")
    .replace(/bibliaonline.com.br\/acf\/tito\//gi, "mysword.info\/b?r\=Tit_")
    .replace(/bibliaonline.com.br\/acf\/zacarias\//gi, "mysword.info\/b?r\=Zec_")
    .replace(/1\//g,"1\:")
    .replace(/2\//g,"2\:")
    .replace(/3\//g,"3\:")
    .replace(/4\//g,"4\:")
    .replace(/5\//g,"5\:")
    .replace(/6\//g,"6\:")
    .replace(/7\//g,"7\:")
    .replace(/8\//g,"8\:")
    .replace(/9\//g,"9\:")
    .replace(/0\//g,"0\:")

    ; 
    $(this).attr("href", newUrl); 
    console.log(newUrl)
});  
}

}); // fim de read function

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
document.write("</div><div align='center'><a href='../' onclick='setLivroStatus1();removeNameBookActived()'>Marcar Livro Como Lido</a></div><br><br>")
}
else
{
document.write("<div align='center'><a href='../' onclick='setLivroStatus0();removeNameBookActived()'>Desmarcar Livro Como Lido</a></div><br><br")
}
//Fim Marcar livros como lido ou não



function removeNameBookActived(){
localStorage.removeItem('NameBookActivedKey');
}

// scrooling
var aScroll = 'scroll-'
var positionScrollKey = document.getElementsByTagName("title")[0].innerHTML;

function onscrolling(){
}

$(document).ready(function(){
$(window).scroll(function(){
positionScrollValue = $(window).scrollTop();
localStorage.setItem(positionScrollKey, positionScrollValue);
// console.log(positionScrollKey)
// console.log(localStorage.getItem(positionScrollKey));  
});  
});


// referencia em BOl ou MySword
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
|| /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))){
      
    var session = localStorage.ref;
    if ( session == 1 ){
     document.write('<a id="desktop" onclick="linkToBol()"  ><img style="cursor:pointer;width:40px;height:40px;;display:scroll;position:fixed;bottom:20px;left:20px;color:#f00;font-weight:bold;"  src="https://www.bibliaonline.com.br/apple-touch-icon.png"/></a>');

    }else{
     document.write('<a id="mobile" onclick="linkToMysword()" ><img style="width:40px;height:40px;;display:scroll;position:fixed;bottom:20px;left:20px;color:#f00;font-weight:bold;"  src="https://www.mysword.info/images/mysword2.png?v=2"/></a>');
    }

}else{
   
}

function linkToMysword() {
localStorage.setItem("ref", 1);
window.location.reload()
alert('Referências em MySword')
}

function linkToBol() {
localStorage.setItem("ref", 0);
window.location.reload()
alert('Referências em BíbliaOnline')

}

