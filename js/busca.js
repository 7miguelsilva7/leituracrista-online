
$(function(){ 

  $("#filtro").keyup(function(){
    var texto = $(this).val();
    
    $(".bloco").each(function(){
      var resultado = removeAcento($(this).text().toUpperCase()).indexOf(' '+removeAcento(texto.toUpperCase()));
      
      if(resultado < 0) {
        $(this).fadeOut();
      }else {
        $(this).fadeIn();
      }
    }); 

  });


function removeAcento (text)
				{																   
				  text = text.replace(new RegExp('[ÁÀÂÃ]','gi'), 'a');
				  text = text.replace(new RegExp('[ÉÈÊ]','gi'), 'e');
				  text = text.replace(new RegExp('[ÍÌÎ]','gi'), 'i');
				  text = text.replace(new RegExp('[ÓÒÔÕ]','gi'), 'o');
				  text = text.replace(new RegExp('[ÚÙÛ]','gi'), 'u');
				  text = text.replace(new RegExp('[Ç]','gi'), 'c');
				  return text;				 
				}

// function removeAcento (text) { 
//   text = text.replace(new RegExp('[ÁÀÂÃ]','gi'), 'a'); text = text.replace(new RegExp('[ÉÈÊ]','gi'), 'e'); 
//   text = text.replace(new RegExp('[ÍÌÎ]','gi'), 'i'); text = text.replace(new RegExp('[ÓÒÔÕ]','gi'), 'o'); 
//   text = text.replace(new RegExp('[ÚÙÛ]','gi'), 'u'); text = text.replace(new RegExp('[Ç]','gi'), 'c'); return text;}  

});

// encodeURI($(this).text().toUpperCase()).indexOf(' '+encodeURI(texto.toUpperCase()));