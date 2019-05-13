// function linkToMysword() {
//    //adicionar target blank
//     var str = document.body.innerHTML;
//     var res = str.replace(/bibliaonline.com.br\/acf\/rm\//g, "mysword.info\/b?r\=Rom_");
//     document.body.innerHTML = res;
// }


 if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
     || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))){
         var share = window.location.href;
         var title = document.title;
    
    

    
        document.write('<a id="mobile" onclick="linkToMysword()"  href="#"><img style="width:40px;height:40px;;display:scroll;position:fixed;bottom:8px;right:60px;color:#f00;font-weight:bold;"  src="https://www.mysword.info/images/mysword2.png?v=2"/></a>');
        document.write('<a id="desktop" onclick="linkToBol()"  ><img style="cursor:pointer;width:40px;height:40px;;display:scroll;position:fixed;bottom:8px;right:160px;color:#f00;font-weight:bold;"  src="https://www.bibliaonline.com.br/apple-touch-icon.png"/></a>');

     }else{
         var share = window.location.href;
         var title = document.title;



        
       document.write('<a id="desktop" onclick="linkToMysword()"  ><img style="cursor:pointer;width:40px;height:40px;;display:scroll;position:fixed;bottom:8px;right:80px;color:#f00;font-weight:bold;"  src="https://www.mysword.info/images/mysword2.png?v=2"/></a>');
       document.write('<a id="desktop" onclick="linkToBol()"  ><img style="cursor:pointer;width:40px;height:40px;;display:scroll;position:fixed;bottom:8px;right:160px;color:#f00;font-weight:bold;"  src="https://www.bibliaonline.com.br/apple-touch-icon.png"/></a>');

     }

     document.write('<a  target="_self" onclick="home()" ><img style="cursor:pointer;width:35px;height:35px;display:scroll;position:fixed;bottom:12px;left:8px;color:#f00;font-weight:bold;"  src="books.png"/></a>');
    //  document.write('<a  target="_self" onclick="home()" href="https:leituracrista.com"><img style="width:35px;height:35px;display:scroll;position:fixed;bottom:12px;left:8px;color:#f00;font-weight:bold;"  src="books.png"/></a>');

function linkToMysword() {
sessionStorage.setItem("ref", 1);
location.replace(location.href)
alert('Referências em MySword')
}

function linkToBol() {
  sessionStorage.setItem("ref", 0);
  location.replace(location.href)
  alert('Referências em Bíblia Online')

  }

var session = sessionStorage.ref;

if ( session == 1 )
{
  var str = document.getElementById("content").innerHTML;
  var res = str.replace(/bibliaonline.com.br\/acf\/rm\//g, "mysword.info\/b?r\=Rom_") 
  .replace(/bibliaonline.com.br\/acf\/1co\//g, "mysword.info\/b?r\=1Co_")
  .replace(/bibliaonline.com.br\/acf\/1cr\//g, "mysword.info\/b?r\=1Ch_")
  .replace(/bibliaonline.com.br\/acf\/1pe\//g, "mysword.info\/b?r\=1Pe_")
  .replace(/bibliaonline.com.br\/acf\/1rs\//g, "mysword.info\/b?r\=1Ki_")
  .replace(/bibliaonline.com.br\/acf\/1sm\//g, "mysword.info\/b?r\=1Sa_")
  .replace(/bibliaonline.com.br\/acf\/1co\//g, "mysword.info\/b?r\=1Co_")
  .replace(/bibliaonline.com.br\/acf\/1cr\//g, "mysword.info\/b?r\=1Ch_")
  .replace(/bibliaonline.com.br\/acf\/1jo\//g, "mysword.info\/b?r\=1Jo_")
  .replace(/bibliaonline.com.br\/acf\/1pe\//g, "mysword.info\/b?r\=1Pe_")
  .replace(/bibliaonline.com.br\/acf\/1rs\//g, "mysword.info\/b?r\=1Ki_")
  .replace(/bibliaonline.com.br\/acf\/1sm\//g, "mysword.info\/b?r\=1Sa_")
  .replace(/bibliaonline.com.br\/acf\/1ts\//g, "mysword.info\/b?r\=1Th_")
  .replace(/bibliaonline.com.br\/acf\/1tm\//g, "mysword.info\/b?r\=1Ti_")
  .replace(/bibliaonline.com.br\/acf\/2cr\//g, "mysword.info\/b?r\=2Cr_")
  .replace(/bibliaonline.com.br\/acf\/2co\//g, "mysword.info\/b?r\=2Co_")
  .replace(/bibliaonline.com.br\/acf\/2jo\//g, "mysword.info\/b?r\=2Jo_")
  .replace(/bibliaonline.com.br\/acf\/2pe\//g, "mysword.info\/b?r\=2Pe_")
  .replace(/bibliaonline.com.br\/acf\/2rs\//g, "mysword.info\/b?r\=2Ki_")
  .replace(/bibliaonline.com.br\/acf\/2sm\//g, "mysword.info\/b?r\=2Sa_")
  .replace(/bibliaonline.com.br\/acf\/2ts\//g, "mysword.info\/b?r\=2Th_")
  .replace(/bibliaonline.com.br\/acf\/2tm\//g, "mysword.info\/b?r\=2Ti_")
  .replace(/bibliaonline.com.br\/acf\/3jo\//g, "mysword.info\/b?r\=3Jo_")
  .replace(/bibliaonline.com.br\/acf\/ag\//g, "mysword.info\/b?r\=Hag_")
  .replace(/bibliaonline.com.br\/acf\/am\//g, "mysword.info\/b?r\=Amo_")
  .replace(/bibliaonline.com.br\/acf\/ap\//g, "mysword.info\/b?r\=Rev_")
  .replace(/bibliaonline.com.br\/acf\/atos\//g, "mysword.info\/b?r\=Act_")
  .replace(/bibliaonline.com.br\/acf\/at\//g, "mysword.info\/b?r\=Act_")
  .replace(/bibliaonline.com.br\/acf\/cl\//g, "mysword.info\/b?r\=col_")
  .replace(/bibliaonline.com.br\/acf\/ct\//g, "mysword.info\/b?r\=son_")
  .replace(/bibliaonline.com.br\/acf\/dn\//g, "mysword.info\/b?r\=Dan_")
  .replace(/bibliaonline.com.br\/acf\/dt\//g, "mysword.info\/b?r\=Deu_")
  .replace(/bibliaonline.com.br\/acf\/ec\//g, "mysword.info\/b?r\=Ecc_")
  .replace(/bibliaonline.com.br\/acf\/ed\//g, "mysword.info\/b?r\=Ezr_")
  .replace(/bibliaonline.com.br\/acf\/ef\//g, "mysword.info\/b?r\=Eph_")
  .replace(/bibliaonline.com.br\/acf\/et\//g, "mysword.info\/b?r\=Est_")
  .replace(/bibliaonline.com.br\/acf\/ex\//g, "mysword.info\/b?r\=Exo_")
  .replace(/bibliaonline.com.br\/acf\/ez\//g, "mysword.info\/b?r\=Eze_")
  .replace(/bibliaonline.com.br\/acf\/fp\//g, "mysword.info\/b?r\=Php_")
  .replace(/bibliaonline.com.br\/acf\/fm\//g, "mysword.info\/b?r\=Phm_")
  .replace(/bibliaonline.com.br\/acf\/gl\//g, "mysword.info\/b?r\=Gal_")
  .replace(/bibliaonline.com.br\/acf\/gn\//g, "mysword.info\/b?r\=Gen_")
  .replace(/bibliaonline.com.br\/acf\/hb\//g, "mysword.info\/b?r\=Heb_")
  .replace(/bibliaonline.com.br\/acf\/hc\//g, "mysword.info\/b?r\=Hab_")
  .replace(/bibliaonline.com.br\/acf\/is\//g, "mysword.info\/b?r\=Isa_")
  .replace(/bibliaonline.com.br\/acf\/jd\//g, "mysword.info\/b?r\=Jud_")
  .replace(/bibliaonline.com.br\/acf\/jl\//g, "mysword.info\/b?r\=Joe_")
  .replace(/bibliaonline.com.br\/acf\/jn\//g, "mysword.info\/b?r\=Jon_")
  .replace(/bibliaonline.com.br\/acf\/jo\//g, "mysword.info\/b?r\=Joh_")
  .replace(/bibliaonline.com.br\/acf\/jó\//g, "mysword.info\/b?r\=Job_")
  .replace(/bibliaonline.com.br\/acf\/j%C3%B3\//g, "mysword.info\/b?r\=Job_")
  .replace(/bibliaonline.com.br\/acf\/jr\//g, "mysword.info\/b?r\=Jer_")
  .replace(/bibliaonline.com.br\/acf\/js\//g, "mysword.info\/b?r\=Jos_")
  .replace(/bibliaonline.com.br\/acf\/jz\//g, "mysword.info\/b?r\=Jdg_")
  .replace(/bibliaonline.com.br\/acf\/lc\//g, "mysword.info\/b?r\=Luk_")
  .replace(/bibliaonline.com.br\/acf\/lm\//g, "mysword.info\/b?r\=Lam_")
  .replace(/bibliaonline.com.br\/acf\/lv\//g, "mysword.info\/b?r\=Lev_")
  .replace(/bibliaonline.com.br\/acf\/mc\//g, "mysword.info\/b?r\=Mar_")
  .replace(/bibliaonline.com.br\/acf\/ml\//g, "mysword.info\/b?r\=Mal_")
  .replace(/bibliaonline.com.br\/acf\/mq\//g, "mysword.info\/b?r\=Mic_")
  .replace(/bibliaonline.com.br\/acf\/mt\//g, "mysword.info\/b?r\=Mat_")
  .replace(/bibliaonline.com.br\/acf\/na\//g, "mysword.info\/b?r\=Nah_")
  .replace(/bibliaonline.com.br\/acf\/ne\//g, "mysword.info\/b?r\=Neh_")
  .replace(/bibliaonline.com.br\/acf\/nm\//g, "mysword.info\/b?r\=Num_")
  .replace(/bibliaonline.com.br\/acf\/ob\//g, "mysword.info\/b?r\=Oba_")
  .replace(/bibliaonline.com.br\/acf\/os\//g, "mysword.info\/b?r\=Hos_")
  .replace(/bibliaonline.com.br\/acf\/pv\//g, "mysword.info\/b?r\=Pro_")
  .replace(/bibliaonline.com.br\/acf\/rm\//g, "mysword.info\/b?r\=Rom_")
  .replace(/bibliaonline.com.br\/acf\/rt\//g, "mysword.info\/b?r\=Rut_")
  .replace(/bibliaonline.com.br\/acf\/sf\//g, "mysword.info\/b?r\=Zep_")
  .replace(/bibliaonline.com.br\/acf\/sl\//g, "mysword.info\/b?r\=Psa_")
  .replace(/bibliaonline.com.br\/acf\/tg\//g, "mysword.info\/b?r\=Jas_")
  .replace(/bibliaonline.com.br\/acf\/tt\//g, "mysword.info\/b?r\=Tit_")
  .replace(/bibliaonline.com.br\/acf\/zc\//g, "mysword.info\/b?r\=Zec_")
  .replace(/\/1\//g,"1")
  .replace(/\/2\//g,"2")
  .replace(/\/3\//g,"3")
  .replace(/\/4\//g,"4")
  .replace(/\/5\//g,"5")
  .replace(/\/6\//g,"6")
  .replace(/\/7\//g,"7")
  .replace(/\/8\//g,"8")
  .replace(/\/9\//g,"9")
  .replace(/\/0\//g,"0")
  ;
  document.getElementById("content").innerHTML = res; 

}else{
}

function home()
{
  location.replace('https://leituracrista.com.br')
}