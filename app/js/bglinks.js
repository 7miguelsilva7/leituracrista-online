  var BGLinks = (function() {
    var that = {};
  
    // can be set like BGLinks.parameter
    that.version = 'acf';
    that.clickTooltip = true;
    that.apocrypha = false;
    that.showTooltips = false;
    that.host = 'www.bibliaonline.com.br';
  
    var showTimer = 0;
    var hideTimer = 0;
    var container;
    var addedCSS = false;
    var setupRun = false;
    var delay = 0;
    var bgHost;
    var toolsHost;
    var cdHost;
    var browser = navigator.appVersion;
  
  var book_string = 'G[eê]nesis|Gen?|Gn|[ÊE]xodo|Exod?|[ÊE]x|Lev[ií]tico|Le?v|N[úu]meros|Nu?m|Nm|Deuteron[ôo]mio|Deut?|Dt|Josu[ée]|Js|Ju[íi]zes|Jz|Rute|Rt|(?:1|i|2|ii) ?Samuel|(?:1|i|2|ii) ?Sm|(?:1|i|2|ii) ?R(?:ei?)s?|(?:1|i|2|ii) ?Rs|(?:1|i|2|ii) ?Cr[ôo]nicas|(?:1|i|2|ii) ?Cr|(?:1|i|2|ii) ?Cr|Esdras|Ed||Neemias|Ne|Ester|Et|Jó|Salmos|Sl|Prov[ée]rbios|Proverbios|Pv|Eclesiastes|Ec|C[âa]nticos|Ct|Cnt|Cantares|Isa[íi]as|Is?|Jeremias|J(?:e?)r|Lamentacoes|Lamentações|L(?:a?)m|Ezequiel|Ez(?:e?)|Daniel|Da?n|Da|Oséias|Oseias|Os|Joel|Jl|Am[óo]s|Am|Obadias|Ob(?:ad?)?|Jonas|Jn|Miqu[ée]ias|Mq|Naum|Na|Habacuque|Hab|Hc|Sofonias|Sf|Ag(?:eu?)?|Zacarias|Zc|Malaquias|Ml|Mateus|Mat?|Mt|Mark|Marcos|Mc|Lucas|Lc|Luc?|Jo[ãa]o|Jo[ãa]|Jo|At(?:os?)?|Romanos|Rm|(?:1|i|2|ii) ?Cor[íi]ntios|(?:1|i|2|ii) ?Co|(?:1|i|2|ii) ?Cor|G[áa]latas|G[áa]l?|Gl|Ef[ée]sios|Ef?|Filipenses|Fp|Colossenses|Col|Cl|(?:1|i|2|ii) ?Tessalonicenses|(?:1|i|2|ii) ?T(?:e?)s?|(?:1|i|2|ii) ?Tim[óo]teo|(?:1|i|2|ii) ?T(?:i?)m|Tito|Tt|Filemon|Filemom|Fm|Hebreus|H(?:e?)b?|Tiago|Tg|Jas|(?:1|i|2|ii) ?Pedro|(?:1|i|2|ii) ?Pe?|(?:1|i|2|ii|3|iii) ?Jo[ãa]o|(?:1|i|2|ii|3|iii) ?Jo|Judas?|Jd|Apocalipse?|Ap';
  
  var apoc_books = '|Tobit?|To?b|Judi(?:th?)?|Jdt|(?:1|2) ?Mac(?:cabees)?|(?:1|2) ?Ma?|Wi(?:sdom)?|Wi?s|Sir(?:ach)?|Ba(?:ruc?h)?|Ba?r';
  
    that.linkVerses = function() {
      updateURLs();
      insertBiblerefs(document.body);
      if (that.showTooltips === true) {
        addBiblerefListeners();
      }
      setup();
    }
  
    var updateURLs = function() {
      bgHost = 'https://' + that.host;
      toolsHost = bgHost + '/share/tooltips/data';
      cdHost = bgHost + '/public/link-to-us/tooltips';
    }
  
    var insertBiblerefs = function(node) {
      var new_nodes;
      if (node.nodeType === 3) {
        new_nodes = searchNode(node,0);
        return new_nodes;
      }
      else if (node.tagName != undefined && node.tagName.match(/^(?:a|h\d|img|pre|input|option)$/i)) {
        return null;
      }
      else {
        var children = node.childNodes;
        var i = 0;
        while(i<children.length) {
          new_nodes = insertBiblerefs(children[i]);
          i += new_nodes +1;
        }
      }
      return null;
    }
  
    var searchNode = function(node, inserted_nodes) {
      var newTxtNode;
      var apoc_string = that.apocrypha === true ? apoc_books : '';
      var unicode_space = '[\\u0020\\u00a0\\u1680\\u2000-\\u200a\\u2028-\\u202f\\u205f\\u3000]'
      //finds book and chapter for each verse that been separated by &,and,etc...
      
  
  var book_chap = '((?:('+book_string+apoc_string+')(?:\.)?'+unicode_space+'*?)?(?:(\\d*):)?(\\d+(?:(?:ff|f|\\w)|(?:\\s?(?:-|–|—)\\s?\\d+)?)))([^a-z0-9]*)';
  
  
  var regex_string = '(?:'+book_string+apoc_string+')(?:\.)?'+unicode_space+'*?\\d+:\\d+(?:ff|f|\\w)?(?:\\s?(?:(?:(?:-|–|—)\\s?(?:(?:'+book_string+apoc_string+')(?:\.)?\\s)?)|(?:(?:,|,|&amp;|&|and|cf\\.|cf)))\\s?(?:(?:(?:vv.|vs.|vss.|v.) ?)?\\d+\\w?)(?::\\d+\\w?)?)*';
      
  
    var regex = new RegExp(regex_string,'i');
      var verse_match = node.nodeValue.match(regex);
      if (verse_match == null) {
        return inserted_nodes;
      } else {
        var text = node.nodeValue;
        var before_text = text.substr(0,text.indexOf(verse_match[0]));
        var after_text = text.substr(text.indexOf(verse_match[0])+verse_match[0].length);
        if (before_text.length > 0) {
          newTxtNode = document.createTextNode(before_text);
          node.parentNode.insertBefore(newTxtNode, node);
          inserted_nodes++;
        }
  
        var book_chap_regex = new RegExp(book_chap, 'gi');
        var book;
        var chapter;
        var verse;
        var matched;
  
        while (matched = book_chap_regex.exec(verse_match[0])) {
          // break up what may be multiple references into links.
          if (matched[2] != '' && matched[2] != null) {
  
  
  
  
  book = matched[2].replace(/[áàâã]/g,'a').replace(/[ÁÀÂÃ]/g,'A').replace(/[éèê]/g,'e').replace(/[ÉÈÊ]/g,'E').replace(/[íìî]/g,'i').replace(/[ÍÌÎ]/g,'I').replace(/[ôõ]/g,'o').replace(/[ÔÕ]/g,'O').replace(/[úùû]/g,'u').replace(/[ÚÙÛ]/g,'U').replace('Js', 'Jsh').replace('Jz', 'Jg').replace('II Sm', '2 Samuel').replace('Reis', 'Kings').replace('Rs', 'Kings').replace('Cronicas', 'Chronicles').replace('Cr', 'Chronicles').replace('Ed', 'Esdras').replace('Et', 'Ester').replace('Sl', 'Salmos').replace('Pv', 'Proverbs').replace(/(Ct)|(Canticos)|(Cantares)/g,'Songs').replace(/(Lamentacoes)|(Lamentaçoes)/g,'Lamentations').replace('At', 'Atos').replace(/(I Corintios)|(I Co)/g,'1 Coríntios').replace(/(II Corintios)|(II Co)/g,'2 Coríntios').replace('I1 Coríntios', '2 Coríntios').replace(/(I Tes)|(1 Tes)|(I Ts)|(1 Ts)/g,'1 Tessalonicenses').replace('1 Tessalonicenses', '1 Tessalonicenses').replace(/(2 Tes)|(2 Ts)/g,'2 Tessalonicenses').replace('II Tessalonicenses', '2 Tessalonicenses').replace('Fm', 'Filemom').replace('Hb', 'Hebreus').replace('Tg', 'Tiago').replace('I Pe', 'I Pedro').replace('I Pedro', 'I Pedro').replace('Jd', 'Judas').replace(/(1 T)|(I T)|(1T)|(IT)/g,'1 Tmóteo');
   
  
          }
          if (matched[3] != '' && matched[3] != null) {
            chapter = matched[3];
          }
          verse = matched[4];
          var newLinkNode = document.createElement("a");
          newLinkNode.className = 'bibleref';
          newLinkNode.target = '_BLANK';
          // var passage = book+' '+chapter+':'+verse;
          var passage = that.version+'/'+book+'/'+chapter+'/'+verse;
          // newLinkNode.href = bgHost+'/passage/?search='+passage+'&version='+that.version+'&src=tools';
          newLinkNode.href = bgHost+'/'+passage;
          newLinkNode.innerHTML = matched[1];
          if (that.clickTooltip === true) {
            newLinkNode.onclick=function() {return false};
          }
          node.parentNode.insertBefore(newLinkNode, node);
          inserted_nodes++;
          if (matched[6] != '') {
            newTxtNode = document.createTextNode(matched[5]);
            node.parentNode.insertBefore(newTxtNode, node);
            // do we need to update inserted_nodes with this?
          }
        }
  
        if (after_text.length > 0) {
          newTxtNode = document.createTextNode(after_text);
          node.parentNode.insertBefore(newTxtNode, node);
          node.parentNode.removeChild(node);
          inserted_nodes = searchNode(newTxtNode,inserted_nodes+1);
        }
        else {
          node.parentNode.removeChild(node);
        }
      }
      return inserted_nodes;
    }
  
    var addCSS = function() {
      if (!addedCSS) {
        var css = document.createElement('link');
        css.type = "text/css";
        css.rel = "stylesheet";
        if (browser.search('MSIE 6.0') != -1) {
          browser = 'ie6';
          css.href = cdHost+'/theme/bglinks-ie.css';
        } else {
          css.href = cdHost+'/theme/popover.css';
        }
        css.media = "screen";
        var n1 = document.getElementsByTagName("head")[0].childNodes[0]
        n1.parentNode.insertBefore(css,n1);
        addedCSS = true;
      }
    }
  
    var addBiblerefListeners = function() {
      var links = document.getElementsByTagName('a');
      for ( var i = 0;i< links.length;i++) {
        var link = links[i]
        if (link.className && link.className == 'bibleref') {
          if (that.clickTooltip !== false) {
            addListener(link,'click', linkMouseover);
        addListener(link,'mouseover', linkMouseover);
  
          } else {
            addListener(link,'click', toggleTooltip);
          }
        }
      }
    }
  
    var addListener = function (listen_object, action, callback) {
      if (listen_object.addEventListener) {
        if (action == 'mouseover') {
          listen_object.addEventListener("mouseover",callback,false);
        } else if (action == 'mouseout') {
          listen_object.addEventListener("mouseout",callback,false);
        } else if (action == 'click') {
          listen_object.addEventListener("click",callback,false);
        }
      } else if (listen_object.attachEvent) {
        if (action == 'mouseover') {
          listen_object.attachEvent("onmouseover",callback);
        } else if (action == 'mouseout') {
          listen_object.attachEvent("onmouseout",callback);
        } else if (action == 'click') {
          listen_object.attachEvent("onclick",callback);
        }
      } else {
        if (action == 'mouseover') {
          listen_object.onmouseover = callback;
        } else if (action == 'mouseout'){
          listen_object.onmouseout = callback;
        } else if (action == 'click') {
          listen_object.onclick = callback;
        }
      }
    }
  
    var toggleTooltip = function(e) {
      if (!e) {
        e = window.event;
      }
  
      var link = e.target || e.srcElement;
      var reference;
      var bibleref;
      if (bibleref = link.getAttribute('data-bibleref')) {
        reference = bibleref;
      } else {
        reference = link.href.match(/search=(.*?)(?:&.*)?$/)[1];
      }
  
      var id = reference.replace(/%20| /g, '');
      id = reference.replace(/:/g, '_');
      var tooltip = document.getElementById('bg_popup-'+id);
      if (tooltip === null || tooltip.style.display == 'none') {
        showTooltip(e);
      } else {
        hideTooltip(e);
      }
    }
  
    var showTooltip = function(e) {
      if (!e) {
        e = window.event;
      }
      var link = e.target || e.srcElement;
      var reference;
      var bibleref;
      var tooltip_loc;
  
      if (bibleref = link.getAttribute('data-bibleref')) {
        reference = bibleref;
      } else {
        reference = decodeURIComponent(link.href.match(/search=(.*?)(?:&.*)?$/)[1]);
      }
  
      var id = reference.replace(/%20| |[^\x00-\x80]/g, '');
      id = id.replace(/:/g, '_');
      id = id.replace(/ /g, '');
      var tooltip = document.getElementById('bg_popup-'+id);
      hideAllTooltips(e);
      if (tooltip === null) {
        tooltip = getTooltip(reference, link);
      } else {
        tooltip_loc = tooltipLocation(link);
        tooltip.style.left = tooltip_loc.offsetX+'px';
        tooltip.style.top = tooltip_loc.offsetY+'px';
        tooltip.style.display = 'block';
      }
    }
  
    var hideTooltip = function(e) {
      if (!e) {
        e = window.event;
      }
      var link = e.target || e.srcElement;
      var reference;
      var bibleref;
      if (bibleref = link.getAttribute('data-bibleref')) {
        reference = bibleref;
      } else {
        reference = link.href.match(/search=(.*?)(?:&.*)?$/)[1];
      }
  
      reference = reference.replace(/%20| /g, '');
      reference = reference.replace(/:/g, '_');
  
      var tooltip = document.getElementById('bg_popup-'+reference);
      if (tooltip) {
        tooltip.style.display = 'none';
      }
    }
  
    var hideAllTooltips = function(e) {
      var divs = container.children;
      for (var i = 0;i < divs.length;i++) {
        divs[i].style.display = 'none';
      }
    }
  
    var linkMouseover = function(e) {
      if (!e) {
        e = window.event;
      }
      if (e.target.nodeName.toLowerCase() == 'a') {
        window.clearTimeout(showTimer);
        showTimer = window.setTimeout(function() {showTooltip(e)}, delay);
      }
    }
  
    var linkMouseout = function(e) {
      if (!e) {
        e = window.event;
      }
      if (e.target.nodeName.toLowerCase() == 'a' && showTimer) {
        window.clearTimeout(showTimer);
        window.clearTimeout(hideTimer);
        hideTimer = window.setTimeout(function() {hideTooltip(e)}, delay);
      }
    }
  
    var tooltipMouseover = function(e) {
      if (!e) {
        e = window.event;
      }
      var relNode = e.relatedTarget || e.fromElement;
      while (relNode && relNode != null && (!relNode.className || relNode.className.indexOf('bg_popup-outer') == -1) && relNode.nodeName.toLowerCase() != 'body') {
        relNode = relNode.parentNode;
      }
      if (relNode && relNode.className && relNode.className.indexOf('bg_popup-outer') != -1) return;
      window.clearTimeout(showTimer);
      window.clearTimeout(hideTimer);
    }
  
    var tooltipMouseout = function(e) {
      if (!e) {
        e = window.event;
      }
      var relNode = e.relatedTarget || e.toElement;
      while (relNode && relNode != null && (!relNode.className || relNode.className.indexOf('bg_popup-outer') == -1) && relNode.nodeName.toLowerCase() != 'body') {
        relNode = relNode.parentNode;
      }
      if (relNode && relNode.className && relNode.className.indexOf('bg_popup-outer') != -1) return;
      window.clearTimeout(hideTimer);
      hideTimer = window.setTimeout(function() {hideAllTooltips(e)}, delay);
    }
  
    var createContainer = function() {
      container = document.createElement('div');
      container.id = 'bg_popup-container';
      document.body.appendChild(container);
    }
  
    var getTooltip = function(reference, link) {
      var tooltip = document.createElement('div');
      tooltip.style.display='none';
      tooltip.className = 'bg_popup bg_popup-outer';
      var tooltip_loc = tooltipLocation(link);
      tooltip.style.top = tooltip_loc.offsetY+'px';
      tooltip.style.left = tooltip_loc.offsetX+'px';
      var id = 'bg_popup-'+reference.replace(/(?:%20)|[^\x00-\x80]/g, '');
      id = id.replace(/:/g, '_');
      id = id.replace(/ /g, '');
      tooltip.id=id;
      tooltip.innerHTML = '<div class="bg_popup-header"><div class="bg_popup-header_title"><strong>'+reference.replace(/%20/g, ' ')+'</strong></div></div><div class="bg_popup-content"><div class="bg_popup-spinner"><img alt="loading" src="'+cdHost+'/theme/images/tools/spinner.gif"/></div></div><div class="bg_popup-footer"><a style="color:white; font-family: "PT Serif", serif; font-size: 1em;" href="'+bgHost+'/" rel="nofollow" target="_blank">Ler Mais</a></div>';
      tooltip.style.display = 'block';
      addCloseButton(tooltip);
  
      tooltip = container.appendChild(tooltip);
      if (that.clickTooltip !== true) {
        addListener(tooltip,'mouseover', tooltipMouseover);
        addListener(tooltip,'mouseout', tooltipMouseout);
      }
  
      var remote_passage = document.createElement('script');
      remote_passage.type = 'text/javascript';
      remote_passage.src = toolsHost+'/?search='+reference+'&version='+that.version+'&callback=BGLinks.updateTooltip';
      remote_passage.id = 'bg_remote_passage_script-'+reference.replace(/(?:%20)|[^\x00-\x80]/g, '');
      remote_passage.id = remote_passage.id.replace(/:/g, '_');
      remote_passage.id = remote_passage.id.replace(/ /g, '');
      var hook = document.getElementsByTagName('script')[0];
      hook.parentNode.insertBefore(remote_passage, hook);
  
      return tooltip;
    }
  
    that.updateTooltip = function(tooltip_content) {
      var id;
      id = 'bg_popup-'+tooltip_content.reference.replace(/:/g, '_');
      id = id.replace(/ |[^\x00-\x80]/g, '');
      var tooltip = document.getElementById(id);
  
      var reference_display = tooltip_content.reference_display.replace(/%20/g,' ');
      if (tooltip_content.text == undefined) {
        if (tooltip.text == undefined) {
          tooltip_content.text = 'Retrieving Passage...'
        }
        else {
          tooltip_content.text = tooltip.text;
          reference_display = tooltip.reference_display;
        }
      }
  
  tooltip.innerHTML = '<div class="bg_popup-header"><div class="bg_popup-header_title"><strong>'+reference_display+' ('+tooltip_content.version+')</strong></div></div><div class="bg_popup-content"><div class="bg_popup-content-bible"><p>'+tooltip_content.text+' <a class="bg_popup-more" href="'+bgHost+'/passage/?search='+tooltip_content.reference+'&version='+tooltip_content.version+'&src=tools" target="_blank"></a></p></div></div><div class="bg_popup-footer"><a style="color:white; font-family: "PT Serif", serif; font-size: 1em;" href="'+bgHost+'/passage/?search='+tooltip_content.reference+'&version='+tooltip_content.version+'&src=tools" target="_blank" rel="nofollow" target="_blank">Ler Mais</a></div>';
      addCloseButton(tooltip);
    }
  
    var addCloseButton = function(tooltip) {
      var divs = tooltip.getElementsByTagName('div');
      for (var i = 0; i < divs.length;i++) {
        if (divs[i].className == 'bg_popup-header_right') {
          addListener(divs[i], 'click', hideAllTooltips);
        }
      }
    }
  
    var tooltipLocation = function(link) {
      var width, height;
  
      var tooltip_height = 234;
      var tooltip_width = 362;
  
      if (typeof(window.innerWidth) == 'number') {
        width = window.innerWidth;
        height = window.innerHeight;
      } else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
        width = document.documentElement.clientWidth;
        height = document.documentElement.clientHeight;
      } else if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
        width = document.body.clientWidth;
        height = document.body.clientHeight;
      }
  
      var display_loc = {};
  
      var offsetPos = getOffsetPos(link);
      var leftPos = offsetPos.leftPos;
      var topPos = offsetPos.topPos;
  
      if (link.offsetWidth/link.parentNode.offsetWidth > 0.5) {
        leftPos = getOffsetPos(link.parentNode);
        leftPos = leftPos.leftPos;
      }
      if ((leftPos + tooltip_width+5) > width) {
        leftPos -= tooltip_width;
        if ((leftPos + tooltip_width + link.offsetWidth) <= width) leftPos += link.offsetWidth;
        if (leftPos + tooltip_width + 25 <= width) leftPos += 25;
        if (leftPos - (link.offsetWidth/2) >= 0) leftPos -= (link.offsetWidth/2);
      } else {
        if (leftPos + (link.offsetWidth/2) <= width && link.offsetWidth/link.parentNode.offsetWidth <= 0.5) leftPos += (link.offsetWidth/2);
        if (leftPos - 35 >= 0) {
          leftPos -= 35;
        }
      }
  
      var scrollY = window.pageYOffset || document.documentElement.scrollTop || 0;
      if ((topPos+link.offsetHeight+tooltip_height+15) <= height +scrollY || topPos-tooltip_height+5 <0) {
        topPos += link.offsetHeight + 10;
      } else {
        topPos -= tooltip_height + 10;
      }
  
      display_loc.offsetY = topPos;
      display_loc.offsetX = leftPos;
  
      return (display_loc);
    }
  
    var getOffsetPos = function(linkObj) {
      var topPos, leftPos;
      topPos = leftPos = 0;
      do {
        topPos += linkObj.offsetTop;
        leftPos += linkObj.offsetLeft;
        if(document.all) {
          topPos+=linkObj.clientTop;
          leftPos+=linkObj.clientLeft;
        }
      } while ((linkObj = linkObj.offsetParent) != null);
      return {'topPos' : topPos, 'leftPos' : leftPos};
    }
  
    var setup = function() {
      if (!setupRun) {
        if (that.showTooltips === true) {
          addCSS();
          addListener(document, 'click', hideAllTooltips);
        }
        createContainer();
        setupRun = true;
      }
    }
  
    return that;
  })();