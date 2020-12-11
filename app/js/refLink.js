$(document).ready(function(){

  var str = document.getElementById("content").innerHTML; 
  var res = str
  .replace(/([0-9]{1,3}), ([0-9]{1,3}:[0-9]{1,3})/gi, "$1; $2")
  .replace(/([0-9]{1,3}:[0-9]{1,3}) e ([0-9]{1,3}:[0-9]{1,3})/gi,"$1; $2")
  .replace(/Êxodo /gi,"Exodo ")
  .replace(/Êx /gi,"Ex ")
  .replace(/Gênesis/gi,"Genesis")
.replace(/(1 Coríntios|1 Crônicas|1 João|1 Pedro|1 Reis|1 Samuel|1 Tessalonicenses|1 Timóteo|2 Coríntios|2 Crônicas|2 João|2 Pedro|2 Reis|2 Samuel|2 Tessalonicenses|2 Timóteo|3 João|Ageu|Amós|Apocalipse|Atos dos Apóstolos|Atos|Cantares|Colossenses|Daniel|Deuteronômio|Eclesiastes|Efésios|Esdras|Ester|Êxodo|Exodo|Ex|Êx|Ezequiel|Filemom|Filipenses|Gálatas|Gênesis|Genesis|Habacuque|Hebreus|Isaías|Jeremias|Jó|João|Joel|Jonas|Josué|Judas|Juízes|Lamentações|Levítico|Lucas|Malaquias|Marcos|Mateus|Miqueias|Naum|Neemias|Números|Número|Obadias|Oseias|Provérbios|Romanos|Rute|Salmos|Salmo|Sofonias|Tiago|Tito|Zacarias|1Coríntios|1Crônicas|1João|1Pedro|1Reis|1Samuel|1Tessalonicenses|1Timóteo|2Coríntios|2Crônicas|2João|2Pedro|2Reis|2Samuel|2Tessalonicenses|2Timóteo|3João|1 Co|1 Cr|1 Jo|1 Pe|1 Rs|1 Sm|1 Ts|1 Tm|2 Co|2 Cr|2 Jo|2 Pe|2 Rs|2 Sm|2 Ts|2 Tm|3 Jo|1Co|1Cr|1Jo|1Pe|1Pd|1 Pd|2Pd|2 Pd|1Rs|1Sm|1Ts|1Tm|2Co|2Cr|2Jo|2Pe|2Rs|2Sm|2Ts|2Tm|3Jo|Ag|Am|Ap|At|Ct|Cl|Dn|Dt|Ec|Ef|Ed|Et|Êx|Ez|Fm|Fp|Gl|Gn|Hc|Hb|Is|Jr|Jó|Jo|Jl|Jn|Js|Jd|Jz|Lm|Lv|Lc|Ml|Mc|Mt|Mq|Na|Ne|Nm|Ob|Os|Pv|Rm|Rt|Sl|Sf|Tg|Tt|Zc|1 Co.|1 Cr.|1 Jo.|1 Pe.|1 Rs.|1 Sm.|1 Ts.|1 Tm.|2 Co.|2 Cr.|2 Jo.|2 Pe.|2 Rs.|2 Sm.|2 Ts.|2 Tm.|3 Jo.|1Co.|1Cr.|1Jo.|1Pe.|1Rs.|1Sm.|1Ts.|1Tm.|2Co.|2Cr.|2Jo.|2Pe.|2Rs.|2Sm.|2Ts.|2Tm.|3Jo.|Ag.|Am.|Ap.|At.|Ct.|Cl.|Dn.|Dt.|Ec.|Ef.|Ed.|Et.|Êx.|Ez.|Fm.|Fp.|Gl.|Gn.|Hc.|Hb.|Is.|Jr.|Jó.|Jo.|Jl.|Jn.|Js.|Jd.|Jz.|Lm.|Lv.|Lc.|Ml.|Mc.|Mt.|Mq.|Na.|Ne.|Nm.|Ob.|Os.|Pv.|Rm.|Rt.|Sl.|Sf.|Tg.|Tt.|Zc.) (([0-9]{1,3}(\.|:)[0-9]{1,3}((,| ,|, |-| e )[0-9]{1,3}){1,})|([0-9]{1,3}(\.|:)[0-9]{1,3}))(;|)( [0-9]{1,3}(\.|:))/ig, "$1 $2; $1$10")
.replace(/(1 Coríntios|1 Crônicas|1 João|1 Pedro|1 Reis|1 Samuel|1 Tessalonicenses|1 Timóteo|2 Coríntios|2 Crônicas|2 João|2 Pedro|2 Reis|2 Samuel|2 Tessalonicenses|2 Timóteo|3 João|Ageu|Amós|Apocalipse|Atos dos Apóstolos|Atos|Cantares|Colossenses|Daniel|Deuteronômio|Eclesiastes|Efésios|Esdras|Ester|Êxodo|Exodo|Ex|Êx|Ezequiel|Filemom|Filipenses|Gálatas|Gênesis|Genesis|Habacuque|Hebreus|Isaías|Jeremias|Jó|João|Joel|Jonas|Josué|Judas|Juízes|Lamentações|Levítico|Lucas|Malaquias|Marcos|Mateus|Miqueias|Naum|Neemias|Números|Número|Obadias|Oseias|Provérbios|Romanos|Rute|Salmos|Salmo|Sofonias|Tiago|Tito|Zacarias|1Coríntios|1Crônicas|1João|1Pedro|1Reis|1Samuel|1Tessalonicenses|1Timóteo|2Coríntios|2Crônicas|2João|2Pedro|2Reis|2Samuel|2Tessalonicenses|2Timóteo|3João|1 Co|1 Cr|1 Jo|1 Pe|1 Rs|1 Sm|1 Ts|1 Tm|2 Co|2 Cr|2 Jo|2 Pe|2 Rs|2 Sm|2 Ts|2 Tm|3 Jo|1Co|1Cr|1Jo|1Pe|1Pd|1 Pd|2Pd|2 Pd|1Rs|1Sm|1Ts|1Tm|2Co|2Cr|2Jo|2Pe|2Rs|2Sm|2Ts|2Tm|3Jo|Ag|Am|Ap|At|Ct|Cl|Dn|Dt|Ec|Ef|Ed|Et|Êx|Ez|Fm|Fp|Gl|Gn|Hc|Hb|Is|Jr|Jó|Jo|Jl|Jn|Js|Jd|Jz|Lm|Lv|Lc|Ml|Mc|Mt|Mq|Na|Ne|Nm|Ob|Os|Pv|Rm|Rt|Sl|Sf|Tg|Tt|Zc|1 Co.|1 Cr.|1 Jo.|1 Pe.|1 Rs.|1 Sm.|1 Ts.|1 Tm.|2 Co.|2 Cr.|2 Jo.|2 Pe.|2 Rs.|2 Sm.|2 Ts.|2 Tm.|3 Jo.|1Co.|1Cr.|1Jo.|1Pe.|1Rs.|1Sm.|1Ts.|1Tm.|2Co.|2Cr.|2Jo.|2Pe.|2Rs.|2Sm.|2Ts.|2Tm.|3Jo.|Ag.|Am.|Ap.|At.|Ct.|Cl.|Dn.|Dt.|Ec.|Ef.|Ed.|Et.|Êx.|Ez.|Fm.|Fp.|Gl.|Gn.|Hc.|Hb.|Is.|Jr.|Jó.|Jo.|Jl.|Jn.|Js.|Jd.|Jz.|Lm.|Lv.|Lc.|Ml.|Mc.|Mt.|Mq.|Na.|Ne.|Nm.|Ob.|Os.|Pv.|Rm.|Rt.|Sl.|Sf.|Tg.|Tt.|Zc.) (([0-9]{1,3}(\.|:)[0-9]{1,3}((,| ,|, |-| e )[0-9]{1,3}){1,})|([0-9]{1,3}(\.|:)[0-9]{1,3}))(;|)( [0-9]{1,3}(\.|:))/ig, "$1 $2; $1$10")
.replace(/(1 Coríntios|1 Crônicas|1 João|1 Pedro|1 Reis|1 Samuel|1 Tessalonicenses|1 Timóteo|2 Coríntios|2 Crônicas|2 João|2 Pedro|2 Reis|2 Samuel|2 Tessalonicenses|2 Timóteo|3 João|Ageu|Amós|Apocalipse|Atos dos Apóstolos|Atos|Cantares|Colossenses|Daniel|Deuteronômio|Eclesiastes|Efésios|Esdras|Ester|Êxodo|Exodo|Ex|Êx|Ezequiel|Filemom|Filipenses|Gálatas|Gênesis|Genesis|Habacuque|Hebreus|Isaías|Jeremias|Jó|João|Joel|Jonas|Josué|Judas|Juízes|Lamentações|Levítico|Lucas|Malaquias|Marcos|Mateus|Miqueias|Naum|Neemias|Números|Número|Obadias|Oseias|Provérbios|Romanos|Rute|Salmos|Salmo|Sofonias|Tiago|Tito|Zacarias|1Coríntios|1Crônicas|1João|1Pedro|1Reis|1Samuel|1Tessalonicenses|1Timóteo|2Coríntios|2Crônicas|2João|2Pedro|2Reis|2Samuel|2Tessalonicenses|2Timóteo|3João|1 Co|1 Cr|1 Jo|1 Pe|1 Rs|1 Sm|1 Ts|1 Tm|2 Co|2 Cr|2 Jo|2 Pe|2 Rs|2 Sm|2 Ts|2 Tm|3 Jo|1Co|1Cr|1Jo|1Pe|1Pd|1 Pd|2Pd|2 Pd|1Rs|1Sm|1Ts|1Tm|2Co|2Cr|2Jo|2Pe|2Rs|2Sm|2Ts|2Tm|3Jo|Ag|Am|Ap|At|Ct|Cl|Dn|Dt|Ec|Ef|Ed|Et|Êx|Ez|Fm|Fp|Gl|Gn|Hc|Hb|Is|Jr|Jó|Jo|Jl|Jn|Js|Jd|Jz|Lm|Lv|Lc|Ml|Mc|Mt|Mq|Na|Ne|Nm|Ob|Os|Pv|Rm|Rt|Sl|Sf|Tg|Tt|Zc|1 Co.|1 Cr.|1 Jo.|1 Pe.|1 Rs.|1 Sm.|1 Ts.|1 Tm.|2 Co.|2 Cr.|2 Jo.|2 Pe.|2 Rs.|2 Sm.|2 Ts.|2 Tm.|3 Jo.|1Co.|1Cr.|1Jo.|1Pe.|1Rs.|1Sm.|1Ts.|1Tm.|2Co.|2Cr.|2Jo.|2Pe.|2Rs.|2Sm.|2Ts.|2Tm.|3Jo.|Ag.|Am.|Ap.|At.|Ct.|Cl.|Dn.|Dt.|Ec.|Ef.|Ed.|Et.|Êx.|Ez.|Fm.|Fp.|Gl.|Gn.|Hc.|Hb.|Is.|Jr.|Jó.|Jo.|Jl.|Jn.|Js.|Jd.|Jz.|Lm.|Lv.|Lc.|Ml.|Mc.|Mt.|Mq.|Na.|Ne.|Nm.|Ob.|Os.|Pv.|Rm.|Rt.|Sl.|Sf.|Tg.|Tt.|Zc.) (([0-9]{1,3}(\.|:)[0-9]{1,3}((,| ,|, |-| e )[0-9]{1,3}){1,})|([0-9]{1,3}(\.|:)[0-9]{1,3}))(;|)( [0-9]{1,3}(\.|:))/ig, "$1 $2; $1$10")
.replace(/(1 Coríntios|1 Crônicas|1 João|1 Pedro|1 Reis|1 Samuel|1 Tessalonicenses|1 Timóteo|2 Coríntios|2 Crônicas|2 João|2 Pedro|2 Reis|2 Samuel|2 Tessalonicenses|2 Timóteo|3 João|Ageu|Amós|Apocalipse|Atos dos Apóstolos|Atos|Cantares|Colossenses|Daniel|Deuteronômio|Eclesiastes|Efésios|Esdras|Ester|Êxodo|Exodo|Ex|Êx|Ezequiel|Filemom|Filipenses|Gálatas|Gênesis|Genesis|Habacuque|Hebreus|Isaías|Jeremias|Jó|João|Joel|Jonas|Josué|Judas|Juízes|Lamentações|Levítico|Lucas|Malaquias|Marcos|Mateus|Miqueias|Naum|Neemias|Números|Número|Obadias|Oseias|Provérbios|Romanos|Rute|Salmos|Salmo|Sofonias|Tiago|Tito|Zacarias|1Coríntios|1Crônicas|1João|1Pedro|1Reis|1Samuel|1Tessalonicenses|1Timóteo|2Coríntios|2Crônicas|2João|2Pedro|2Reis|2Samuel|2Tessalonicenses|2Timóteo|3João|1 Co|1 Cr|1 Jo|1 Pe|1 Rs|1 Sm|1 Ts|1 Tm|2 Co|2 Cr|2 Jo|2 Pe|2 Rs|2 Sm|2 Ts|2 Tm|3 Jo|1Co|1Cr|1Jo|1Pe|1Pd|1 Pd|2Pd|2 Pd|1Rs|1Sm|1Ts|1Tm|2Co|2Cr|2Jo|2Pe|2Rs|2Sm|2Ts|2Tm|3Jo|Ag|Am|Ap|At|Ct|Cl|Dn|Dt|Ec|Ef|Ed|Et|Êx|Ez|Fm|Fp|Gl|Gn|Hc|Hb|Is|Jr|Jó|Jo|Jl|Jn|Js|Jd|Jz|Lm|Lv|Lc|Ml|Mc|Mt|Mq|Na|Ne|Nm|Ob|Os|Pv|Rm|Rt|Sl|Sf|Tg|Tt|Zc|1 Co.|1 Cr.|1 Jo.|1 Pe.|1 Rs.|1 Sm.|1 Ts.|1 Tm.|2 Co.|2 Cr.|2 Jo.|2 Pe.|2 Rs.|2 Sm.|2 Ts.|2 Tm.|3 Jo.|1Co.|1Cr.|1Jo.|1Pe.|1Rs.|1Sm.|1Ts.|1Tm.|2Co.|2Cr.|2Jo.|2Pe.|2Rs.|2Sm.|2Ts.|2Tm.|3Jo.|Ag.|Am.|Ap.|At.|Ct.|Cl.|Dn.|Dt.|Ec.|Ef.|Ed.|Et.|Êx.|Ez.|Fm.|Fp.|Gl.|Gn.|Hc.|Hb.|Is.|Jr.|Jó.|Jo.|Jl.|Jn.|Js.|Jd.|Jz.|Lm.|Lv.|Lc.|Ml.|Mc.|Mt.|Mq.|Na.|Ne.|Nm.|Ob.|Os.|Pv.|Rm.|Rt.|Sl.|Sf.|Tg.|Tt.|Zc.) (([0-9]{1,3}(\.|:)[0-9]{1,3}((,| ,|, |-| e )[0-9]{1,3}){1,})|([0-9]{1,3}(\.|:)[0-9]{1,3}))(;|)( [0-9]{1,3}(\.|:))/ig, "$1 $2; $1$10")
.replace(/(1 Coríntios|1 Crônicas|1 João|1 Pedro|1 Reis|1 Samuel|1 Tessalonicenses|1 Timóteo|2 Coríntios|2 Crônicas|2 João|2 Pedro|2 Reis|2 Samuel|2 Tessalonicenses|2 Timóteo|3 João|Ageu|Amós|Apocalipse|Atos dos Apóstolos|Atos|Cantares|Colossenses|Daniel|Deuteronômio|Eclesiastes|Efésios|Esdras|Ester|Êxodo|Exodo|Ex|Êx|Ezequiel|Filemom|Filipenses|Gálatas|Gênesis|Genesis|Habacuque|Hebreus|Isaías|Jeremias|Jó|João|Joel|Jonas|Josué|Judas|Juízes|Lamentações|Levítico|Lucas|Malaquias|Marcos|Mateus|Miqueias|Naum|Neemias|Números|Número|Obadias|Oseias|Provérbios|Romanos|Rute|Salmos|Salmo|Sofonias|Tiago|Tito|Zacarias|1Coríntios|1Crônicas|1João|1Pedro|1Reis|1Samuel|1Tessalonicenses|1Timóteo|2Coríntios|2Crônicas|2João|2Pedro|2Reis|2Samuel|2Tessalonicenses|2Timóteo|3João|1 Co|1 Cr|1 Jo|1 Pe|1 Rs|1 Sm|1 Ts|1 Tm|2 Co|2 Cr|2 Jo|2 Pe|2 Rs|2 Sm|2 Ts|2 Tm|3 Jo|1Co|1Cr|1Jo|1Pe|1Pd|1 Pd|2Pd|2 Pd|1Rs|1Sm|1Ts|1Tm|2Co|2Cr|2Jo|2Pe|2Rs|2Sm|2Ts|2Tm|3Jo|Ag|Am|Ap|At|Ct|Cl|Dn|Dt|Ec|Ef|Ed|Et|Êx|Ez|Fm|Fp|Gl|Gn|Hc|Hb|Is|Jr|Jó|Jo|Jl|Jn|Js|Jd|Jz|Lm|Lv|Lc|Ml|Mc|Mt|Mq|Na|Ne|Nm|Ob|Os|Pv|Rm|Rt|Sl|Sf|Tg|Tt|Zc|1 Co.|1 Cr.|1 Jo.|1 Pe.|1 Rs.|1 Sm.|1 Ts.|1 Tm.|2 Co.|2 Cr.|2 Jo.|2 Pe.|2 Rs.|2 Sm.|2 Ts.|2 Tm.|3 Jo.|1Co.|1Cr.|1Jo.|1Pe.|1Rs.|1Sm.|1Ts.|1Tm.|2Co.|2Cr.|2Jo.|2Pe.|2Rs.|2Sm.|2Ts.|2Tm.|3Jo.|Ag.|Am.|Ap.|At.|Ct.|Cl.|Dn.|Dt.|Ec.|Ef.|Ed.|Et.|Êx.|Ez.|Fm.|Fp.|Gl.|Gn.|Hc.|Hb.|Is.|Jr.|Jó.|Jo.|Jl.|Jn.|Js.|Jd.|Jz.|Lm.|Lv.|Lc.|Ml.|Mc.|Mt.|Mq.|Na.|Ne.|Nm.|Ob.|Os.|Pv.|Rm.|Rt.|Sl.|Sf.|Tg.|Tt.|Zc.) (([0-9]{1,3}(\.|:)[0-9]{1,3}((,| ,|, |-| e )[0-9]{1,3}){1,})|([0-9]{1,3}(\.|:)[0-9]{1,3}))(;|)( [0-9]{1,3}(\.|:))/ig, "$1 $2; $1$10")
.replace(/(1 Coríntios|1 Crônicas|1 João|1 Pedro|1 Reis|1 Samuel|1 Tessalonicenses|1 Timóteo|2 Coríntios|2 Crônicas|2 João|2 Pedro|2 Reis|2 Samuel|2 Tessalonicenses|2 Timóteo|3 João|Ageu|Amós|Apocalipse|Atos dos Apóstolos|Atos|Cantares|Colossenses|Daniel|Deuteronômio|Eclesiastes|Efésios|Esdras|Ester|Êxodo|Exodo|Ex|Êx|Ezequiel|Filemom|Filipenses|Gálatas|Gênesis|Genesis|Habacuque|Hebreus|Isaías|Jeremias|Jó|João|Joel|Jonas|Josué|Judas|Juízes|Lamentações|Levítico|Lucas|Malaquias|Marcos|Mateus|Miqueias|Naum|Neemias|Números|Número|Obadias|Oseias|Provérbios|Romanos|Rute|Salmos|Salmo|Sofonias|Tiago|Tito|Zacarias|1Coríntios|1Crônicas|1João|1Pedro|1Reis|1Samuel|1Tessalonicenses|1Timóteo|2Coríntios|2Crônicas|2João|2Pedro|2Reis|2Samuel|2Tessalonicenses|2Timóteo|3João|1 Co|1 Cr|1 Jo|1 Pe|1 Rs|1 Sm|1 Ts|1 Tm|2 Co|2 Cr|2 Jo|2 Pe|2 Rs|2 Sm|2 Ts|2 Tm|3 Jo|1Co|1Cr|1Jo|1Pe|1Pd|1 Pd|2Pd|2 Pd|1Rs|1Sm|1Ts|1Tm|2Co|2Cr|2Jo|2Pe|2Rs|2Sm|2Ts|2Tm|3Jo|Ag|Am|Ap|At|Ct|Cl|Dn|Dt|Ec|Ef|Ed|Et|Êx|Ez|Fm|Fp|Gl|Gn|Hc|Hb|Is|Jr|Jó|Jo|Jl|Jn|Js|Jd|Jz|Lm|Lv|Lc|Ml|Mc|Mt|Mq|Na|Ne|Nm|Ob|Os|Pv|Rm|Rt|Sl|Sf|Tg|Tt|Zc|1 Co.|1 Cr.|1 Jo.|1 Pe.|1 Rs.|1 Sm.|1 Ts.|1 Tm.|2 Co.|2 Cr.|2 Jo.|2 Pe.|2 Rs.|2 Sm.|2 Ts.|2 Tm.|3 Jo.|1Co.|1Cr.|1Jo.|1Pe.|1Rs.|1Sm.|1Ts.|1Tm.|2Co.|2Cr.|2Jo.|2Pe.|2Rs.|2Sm.|2Ts.|2Tm.|3Jo.|Ag.|Am.|Ap.|At.|Ct.|Cl.|Dn.|Dt.|Ec.|Ef.|Ed.|Et.|Êx.|Ez.|Fm.|Fp.|Gl.|Gn.|Hc.|Hb.|Is.|Jr.|Jó.|Jo.|Jl.|Jn.|Js.|Jd.|Jz.|Lm.|Lv.|Lc.|Ml.|Mc.|Mt.|Mq.|Na.|Ne.|Nm.|Ob.|Os.|Pv.|Rm.|Rt.|Sl.|Sf.|Tg.|Tt.|Zc.) (([0-9]{1,3}(\.|:)[0-9]{1,3}((,| ,|, |-| e )[0-9]{1,3}){1,})|([0-9]{1,3}(\.|:)[0-9]{1,3}))(;|)( [0-9]{1,3}(\.|:))/ig, "$1 $2; $1$10")
.replace(/(1 Coríntios|1 Crônicas|1 João|1 Pedro|1 Reis|1 Samuel|1 Tessalonicenses|1 Timóteo|2 Coríntios|2 Crônicas|2 João|2 Pedro|2 Reis|2 Samuel|2 Tessalonicenses|2 Timóteo|3 João|Ageu|Amós|Apocalipse|Atos dos Apóstolos|Atos|Cantares|Colossenses|Daniel|Deuteronômio|Eclesiastes|Efésios|Esdras|Ester|Êxodo|Exodo|Ex|Êx|Ezequiel|Filemom|Filipenses|Gálatas|Gênesis|Genesis|Habacuque|Hebreus|Isaías|Jeremias|Jó|João|Joel|Jonas|Josué|Judas|Juízes|Lamentações|Levítico|Lucas|Malaquias|Marcos|Mateus|Miqueias|Naum|Neemias|Números|Número|Obadias|Oseias|Provérbios|Romanos|Rute|Salmos|Salmo|Sofonias|Tiago|Tito|Zacarias|1Coríntios|1Crônicas|1João|1Pedro|1Reis|1Samuel|1Tessalonicenses|1Timóteo|2Coríntios|2Crônicas|2João|2Pedro|2Reis|2Samuel|2Tessalonicenses|2Timóteo|3João|1 Co|1 Cr|1 Jo|1 Pe|1 Rs|1 Sm|1 Ts|1 Tm|2 Co|2 Cr|2 Jo|2 Pe|2 Rs|2 Sm|2 Ts|2 Tm|3 Jo|1Co|1Cr|1Jo|1Pe|1Pd|1 Pd|2Pd|2 Pd|1Rs|1Sm|1Ts|1Tm|2Co|2Cr|2Jo|2Pe|2Rs|2Sm|2Ts|2Tm|3Jo|Ag|Am|Ap|At|Ct|Cl|Dn|Dt|Ec|Ef|Ed|Et|Êx|Ez|Fm|Fp|Gl|Gn|Hc|Hb|Is|Jr|Jó|Jo|Jl|Jn|Js|Jd|Jz|Lm|Lv|Lc|Ml|Mc|Mt|Mq|Na|Ne|Nm|Ob|Os|Pv|Rm|Rt|Sl|Sf|Tg|Tt|Zc|1 Co.|1 Cr.|1 Jo.|1 Pe.|1 Rs.|1 Sm.|1 Ts.|1 Tm.|2 Co.|2 Cr.|2 Jo.|2 Pe.|2 Rs.|2 Sm.|2 Ts.|2 Tm.|3 Jo.|1Co.|1Cr.|1Jo.|1Pe.|1Rs.|1Sm.|1Ts.|1Tm.|2Co.|2Cr.|2Jo.|2Pe.|2Rs.|2Sm.|2Ts.|2Tm.|3Jo.|Ag.|Am.|Ap.|At.|Ct.|Cl.|Dn.|Dt.|Ec.|Ef.|Ed.|Et.|Êx.|Ez.|Fm.|Fp.|Gl.|Gn.|Hc.|Hb.|Is.|Jr.|Jó.|Jo.|Jl.|Jn.|Js.|Jd.|Jz.|Lm.|Lv.|Lc.|Ml.|Mc.|Mt.|Mq.|Na.|Ne.|Nm.|Ob.|Os.|Pv.|Rm.|Rt.|Sl.|Sf.|Tg.|Tt.|Zc.) (([0-9]{1,3}(\.|:)[0-9]{1,3}((,| ,|, |-| e )[0-9]{1,3}){1,})|([0-9]{1,3}(\.|:)[0-9]{1,3}))(;|)( [0-9]{1,3}(\.|:))/ig, "$1 $2; $1$10")
document.getElementById("content").innerHTML = res;
  
  $books = "1 Coríntios,1 Crônicas,1 João,1 Pedro,1 Reis,1 Samuel,1 Tessalonicenses,1 Timóteo,2 Coríntios,2 Crônicas,2 João,2 Pedro,2 Reis,2 Samuel,2 Tessalonicenses,2 Timóteo,3 João,Ageu,Amós,Apocalipse,Atos dos Apóstolos,Atos,Cantares,Colossenses,Daniel,Deuteronômio,Eclesiastes,Efésios,Esdras,Ester,Êxodo,Exodo,Êx,Ex,Ezequiel,Filemom,Filipenses,Gálatas,Gênesis,Genesis,Habacuque,Hebreus,Isaías,Jeremias,Jó,João,Joel,Jonas,Josué,Judas,Juízes,Lamentações,Levítico,Lucas,Malaquias,Marcos,Mateus,Miqueias,Naum,Neemias,Números,Número,Obadias,Oseias,Provérbios,Romanos,Rute,Salmos,Salmo,Sofonias,Tiago,Tito,Zacarias,1Coríntios,1Crônicas,1João,1Pedro,1Reis,1Samuel,1Tessalonicenses,1Timóteo,2Coríntios,2Crônicas,2João,2Pedro,2Reis,2Samuel,2Tessalonicenses,2Timóteo,3João,1 Co,1 Cr,1 Jo,1 Pe,1 Rs,1 Sm,1 Ts,1 Tm,2 Co,2 Cr,2 Jo,2 Pe,2 Rs,2 Sm,2 Ts,2 Tm,3 Jo,1Co,1Cr,1Jo,1Pe,1Pd,1 Pd,2Pd,2 Pd,1Rs,1Sm,1Ts,1Tm,2Co,2Cr,2Jo,2Pe,2Rs,2Sm,2Ts,2Tm,3Jo,Ag,Am,Ap,At,Ct,Cl,Dn,Dt,Ec,Ef,Ed,Et,Êx,Ez,Fm,Fp,Gl,Gn,Hc,Hb,Is,Jr,Jó,Jo,Jl,Jn,Js,Jd,Jz,Lm,Lv,Lc,Ml,Mc,Mt,Mq,Na,Ne,Nm,Ob,Os,Pv,Rm,Rt,Sl,Sf,Tg,Tt,Zc,1 Co.,1 Cr.,1 Jo.,1 Pe.,1 Rs.,1 Sm.,1 Ts.,1 Tm.,2 Co.,2 Cr.,2 Jo.,2 Pe.,2 Rs.,2 Sm.,2 Ts.,2 Tm.,3 Jo.,1Co.,1Cr.,1Jo.,1Pe.,1Rs.,1Sm.,1Ts.,1Tm.,2Co.,2Cr.,2Jo.,2Pe.,2Rs.,2Sm.,2Ts.,2Tm.,3Jo.,Ag.,Am.,Ap.,At.,Ct.,Cl.,Dn.,Dt.,Ec.,Ef.,Ed.,Et.,Êx.,Ez.,Fm.,Fp.,Gl.,Gn.,Hc.,Hb.,Is.,Jr.,Jó.,Jo.,Jl.,Jn.,Js.,Jd.,Jz.,Lm.,Lv.,Lc.,Ml.,Mc.,Mt.,Mq.,Na.,Ne.,Nm.,Ob.,Os.,Pv.,Rm.,Rt.,Sl.,Sf.,Tg.,Tt.,Zc."

  host = "https://bibliaonline.com.br/acf/"
  var searchTerm = $books.split(",");
  
  
  
$("#content").each(function() {
  // var cap = "(([0-9]{1,3}(\.|:)[0-9]{1,3}((,| ,|, |-| e )[0-9]{1,3}){1,})|([0-9]{1,3}(\.|:)[0-9]{1,3})|([0-9]{1,3}))"
  var cap = "(([0-9]{1,3}(\.|:)[0-9]{1,3}((,| ,|, |-)[0-9]{1,3}){1,})|([0-9]{1,3}(\.|:)[0-9]{1,3})|([0-9]{1,3}))"
  var html = $(this).html().toString();
      var pattern = "\\b(" + searchTerm.join('|') + ")( " + cap + ")\\b";
      var rg = new RegExp(pattern, 'ig');
      var match = rg.exec(html);
  
      html = html.replace(rg, '<a href="'+host+'$1$2" target="_blank" style="color:red">$1$2</a>')
      .replace(/Exodo/gi, "Êxodo")
      .replace(/Genesis/gi, "Gênesis")
      ;
      $(this).html(html);
  });

  // $(document).ready(function(){
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
              .replace(/\/Numero\//gi, "/Números/")

              ; 
              $(this).attr("href", newUrl); 
  });
  });

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


// scrooling

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