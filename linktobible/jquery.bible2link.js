// Marcelo Sabadini - 2012
(function($) {

    $.fn.bible2link = function(options){
	
        var defaults = {
            url_base: 'https://bibliaonline.com.br',
            bible: 'acf', // acf(almeida corrigida e revisada fiel), aa (almeida revisada impressa biblica), nvi (nova versao internacional), tb (sociedade bibia britanica)
            target: '',
            more_style: '',
            valid_books: [

'1CO', '1 CO', '1CR', '1JO', '1PE', '1RS', '1SM', '1TM', '1TS', '2CO', '2CR', '2JO', '2PE', '2RS', '2SM', '2TM', '2TS', '3JO', 'AG', 'AM', 'AP', 'AT', 'CL', 'CT', 'DN', 'DT', 'EC', 'ED', 'EF', 'ET', 'EX', 'EZ', 'FM', 'FP', 'GL', 'GN', 'HB', 'HC', 'IS', 'JD', 'JL', 'JN', 'JO', 'JÓ', 'JR', 'JS', 'JZ', 'LC', 'LM', 'LV', 'MC', 'ML', 'MQ', 'MT', 'NA', 'NE', 'NM', 'OB', 'OS', 'PV', 'RM', 'RT', 'SF', 'SL', 'TG', 'TT', 'ZC'

],

            callback: null,
            debug : false
        };
        // merge of parametters
        var options = $.extend(defaults, options);
        
        // IF debug than print on console
        if(options.debug == true && !$.browser.msie && window.console && window.console.firebug)
            console.info(options);
		
        $(this).each(function(){
		
            // get the text from element
            var text = $(this).val();
            // if is blank, try to get html()
            if(text == '')
                text = $(this).html();
		
            if(text != ''){
                
                text = text
                
                .replace(/((\b[1-3]{0,1}\s{0,1}[a-zA-ZáéíóúâêîôûãẽĩõũÁÉÍÓÚÂÊÎÔÛÃẼŨÕŨ]{2,3})\s{0,1}(([0-9]{1,2})):{0,1}([0-9\-,]{0,}))\b/gim, function($1, $2, $3, $4, $5, $6){
                    
                    var new_text = '<a href="'+options.url_base+'/'+options.bible+'/'+$3+'/'+$4+'/'+$6+'" style="'+options.more_style+'" target="'+options.target+'">'+$1+'</a>'; // ['+$1+', '+$2+', '+$3+', '+$4+', '+$5+', '+$6+']
                    
                    if(options.valid_books.indexOf($3.toUpperCase()) > -1){
                        return new_text;
                    } else {
                        return $1;
                    }
                    
                })


                ;
                
                // return the new text with the links
                $(this).html(text);
                // $('conteudo').html(text);
                //   document.getElementById('conteudo').innerHTML = text;

                
            }
			
        });
        	
        // There is callback? so execute...
        if(options.callback != null)
            options.callback.call(this);
		
    }
	
})(jQuery);

