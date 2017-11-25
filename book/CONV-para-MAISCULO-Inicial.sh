#!/bin/bash
echo "Qual arquivo modificar?" 
read arquivo


## entre Colchete

sed -i 's/\[gn/\[Gn/g' $arquivo
sed -i 's/\[ex/\[Ex/g' $arquivo
sed -i 's/\[lv/\[Lv/g' $arquivo
sed -i 's/\[nm/\[Nm/g' $arquivo
sed -i 's/\[dt/\[Dt/g' $arquivo
sed -i 's/\[js/\[Js/g' $arquivo
sed -i 's/\[jz/\[Jz/g' $arquivo
sed -i 's/\[rt/\[Rt/g' $arquivo
sed -i 's/\[1sm/\[1 Sm/g' $arquivo
sed -i 's/\[2sm/\[2 Sm/g' $arquivo
sed -i 's/\[1rs/\[1 Rs/g' $arquivo
sed -i 's/\[2rs/\[2 Rs/g' $arquivo
sed -i 's/\[1cr/\[1 Cr/g' $arquivo
sed -i 's/\[2cr/\[2 Cr/g' $arquivo
sed -i 's/\[ed/\[Ed/g' $arquivo
sed -i 's/\[ne/\[Ne/g' $arquivo
sed -i 's/\[et/\[Et/g' $arquivo
sed -i 's/\[jó/\[Jó/g' $arquivo
sed -i 's/\[sl/\[Sl/g' $arquivo
sed -i 's/\[pv/\[Pv/g' $arquivo
sed -i 's/\[ec/\[Ec/g' $arquivo
sed -i 's/\[ct/\[Ct/g' $arquivo
sed -i 's/\[is/\[Is/g' $arquivo
sed -i 's/\[jr/\[Jr/g' $arquivo
sed -i 's/\[lm/\[Lm/g' $arquivo
sed -i 's/\[ez/\[Ez/g' $arquivo
sed -i 's/\[dn/\[Dn/g' $arquivo
sed -i 's/\[os/\[Os/g' $arquivo
sed -i 's/\[jl/\[Jl/g' $arquivo
sed -i 's/\[am/\[Am/g' $arquivo
sed -i 's/\[ob/\[Ob/g' $arquivo
sed -i 's/\[jn/\[Jn/g' $arquivo
sed -i 's/\[mq/\[Mq/g' $arquivo

sed -i 's/\[hc/\[Hc/g' $arquivo
sed -i 's/\[sf/\[Sf/g' $arquivo
sed -i 's/\[ag/\[Ag/g' $arquivo
sed -i 's/\[zc/\[Zc/g' $arquivo
sed -i 's/\[ml/\[Ml/g' $arquivo
sed -i 's/\[mt/\[Mt/g' $arquivo
sed -i 's/\[mc/\[Mc/g' $arquivo
sed -i 's/\[lc/\[Lc/g' $arquivo
sed -i 's/\[jo/\[Jo/g' $arquivo
sed -i 's/\[atos/\[Atos/g' $arquivo
sed -i 's/\[at/\[Atos/g' $arquivo
sed -i 's/\[rm/\[Rm/g' $arquivo
sed -i 's/\[1co/\[1 Co/g' $arquivo
sed -i 's/\[2co/\[2 Co/g' $arquivo
sed -i 's/\[gl/\[Gl/g' $arquivo
sed -i 's/\[ef/\[Ef/g' $arquivo
sed -i 's/\[fp/\[Fp/g' $arquivo
sed -i 's/\[cl/\[Cl/g' $arquivo
sed -i 's/\[1ts/\[1Ts/g' $arquivo
sed -i 's/\[2ts/\[2Ts/g' $arquivo
sed -i 's/\[1tm/\[1Tm/g' $arquivo
sed -i 's/\[2tm/\[2Tm/g' $arquivo
sed -i 's/\[tt/\[Tt/g' $arquivo
sed -i 's/\[fm/\[Fm/g' $arquivo
sed -i 's/\[hb/\[Hb/g' $arquivo
sed -i 's/\[tg/\[Tg/g' $arquivo
sed -i 's/\[1pe/\[1 Pe/g' $arquivo
sed -i 's/\[2pe/\[2 Pe/g' $arquivo
sed -i 's/\[1jo/\[1 Jo/g' $arquivo
sed -i 's/\[2jo/\[2 Jo/g' $arquivo
sed -i 's/\[3jo/\[3 Jo/g' $arquivo
sed -i 's/\[jd/\[Jd/g' $arquivo
sed -i 's/\[ap/\[Ap/g' $arquivo

## Corrigir links

sed -i 's:\/Gn:\/gn:g' $arquivo
sed -i 's:\/Êx:\/ex:g' $arquivo
sed -i 's:\/Lv:\/lv:g' $arquivo
sed -i 's:\/Nm:\/nm:g' $arquivo
sed -i 's:\/Dt:\/dt:g' $arquivo
sed -i 's:\/Js:\/js:g' $arquivo
sed -i 's:\/Jz:\/jz:g' $arquivo
sed -i 's:\/Rt:\/rt:g' $arquivo
sed -i 's:\/1Sm:\/1sm:g' $arquivo
sed -i 's:\/2Sm:\/2sm:g' $arquivo
sed -i 's:\/1Rs:\/1rs:g' $arquivo
sed -i 's:\/2Rs:\/2rs:g' $arquivo
sed -i 's:\/1Cr:\/1cr:g' $arquivo
sed -i 's:\/2Cr:\/2cr:g' $arquivo
sed -i 's:\/Ed:\/ed:g' $arquivo
sed -i 's:\/Ne:\/ne:g' $arquivo
sed -i 's:\/Et:\/et:g' $arquivo
sed -i 's:\/Jó:\/jó:g' $arquivo
sed -i 's:\/Sl:\/sl:g' $arquivo
sed -i 's:\/Pv:\/pv:g' $arquivo
sed -i 's:\/Ec:\/ec:g' $arquivo
sed -i 's:\/Ct:\/ct:g' $arquivo
sed -i 's:\/Is:\/is:g' $arquivo
sed -i 's:\/Jr:\/jr:g' $arquivo
sed -i 's:\/Lm:\/lm:g' $arquivo
sed -i 's:\/Ez:\/ez:g' $arquivo
sed -i 's:\/Dn:\/dn:g' $arquivo
sed -i 's:\/Jl:\/jl:g' $arquivo
sed -i 's:\/Am:\/am:g' $arquivo
sed -i 's:\/Jn:\/jn:g' $arquivo
sed -i 's:\/Mq:\/mq:g' $arquivo
sed -i 's:\/Os:\/os:g' $arquivo
sed -i 's:\/Hc:\/hc:g' $arquivo
sed -i 's:\/Sf:\/sf:g' $arquivo
sed -i 's:\/Ag:\/ag:g' $arquivo
sed -i 's:\/Zc:\/zc:g' $arquivo
sed -i 's:\/Ml:\/ml:g' $arquivo
sed -i 's:\/Mt:\/mt:g' $arquivo
sed -i 's:\/Mc:\/mc:g' $arquivo
sed -i 's:\/Lc:\/lc:g' $arquivo
sed -i 's:\/Jo:\/jo:g' $arquivo
sed -i 's:\/At:\/atos:g' $arquivo
sed -i 's:\/at:\/atos:g' $arquivo
sed -i 's:\/Rm:\/rm:g' $arquivo
sed -i 's:\/1Co:\/1co:g' $arquivo
sed -i 's:\/2Co:\/2co:g' $arquivo
sed -i 's:\/Gl:\/gl:g' $arquivo
sed -i 's:\/Ef:\/ef:g' $arquivo
sed -i 's:\/Fp:\/fp:g' $arquivo
sed -i 's:\/Cl:\/cl:g' $arquivo
sed -i 's:\/1Ts:\/1ts:g' $arquivo
sed -i 's:\/2Ts:\/2ts:g' $arquivo
sed -i 's:\/1Tm:\/1tm:g' $arquivo
sed -i 's:\/2Tm:\/2tm:g' $arquivo
sed -i 's:\/Tt:\/tt:g' $arquivo
sed -i 's:\/Hb:\/hb:g' $arquivo
sed -i 's:\/Tg:\/tg:g' $arquivo
sed -i 's:\/1Pe:\/1pe:g' $arquivo
sed -i 's:\/2Pe:\/2pe:g' $arquivo
sed -i 's:\/1Jo:\/1jo:g' $arquivo
sed -i 's:\/Ap:\/ap:g' $arquivo

#retirar barra de final de links
sed -i 's:\/):):g' $arquivo

# siglas soltas Maiusculas para nomes Completos

sed -i 's/ Gn / Gênesis /g' $arquivo
sed -i 's/ Ex / Êxodo /g' $arquivo
sed -i 's/ Lv / Levítico /g' $arquivo
sed -i 's/ Nm / Números /g' $arquivo
sed -i 's/ Dt / Deuteronômio /g' $arquivo
sed -i 's/ Js / Josué /g' $arquivo
sed -i 's/ Jz / Juízes /g' $arquivo
sed -i 's/ Rt / Rute /g' $arquivo
sed -i 's/ 1 Sm / 1 Samuel /g' $arquivo
sed -i 's/ 2 Sm / 2 Samuel /g' $arquivo
sed -i 's/ 1 Rs / 1 Reis /g' $arquivo
sed -i 's/ 2 Rs / 2 Reis /g' $arquivo
sed -i 's/ 1 Cr / 1 Crônicas /g' $arquivo
sed -i 's/ 2 Cr / 2 Crônicas /g' $arquivo
sed -i 's/ Ed / Esdras /g' $arquivo
sed -i 's/ Ne / Neemias /g' $arquivo
sed -i 's/ Et / Ester /g' $arquivo
sed -i 's/ Jó / Jó /g' $arquivo
sed -i 's/ Sl / Salmos /g' $arquivo
sed -i 's/ Pv / Provérbios /g' $arquivo
sed -i 's/ Ec / Eclesiastes /g' $arquivo
sed -i 's/ Ct / Cânticos /g' $arquivo
sed -i 's/ Is / Isaías /g' $arquivo
sed -i 's/ Jr / Jeremias /g' $arquivo
sed -i 's/ Lm / Lamentações /g' $arquivo
sed -i 's/ Ez / Ezequiel /g' $arquivo
sed -i 's/ Dn / Daniel /g' $arquivo
sed -i 's/ Jl / Joel /g' $arquivo
sed -i 's/ Am / Amós /g' $arquivo
sed -i 's/ Jn / Jonas /g' $arquivo
sed -i 's/ Mq / Miquéias /g' $arquivo

sed -i 's/ Hc / Habacuque /g' $arquivo
sed -i 's/ Sf / Sofonias /g' $arquivo
sed -i 's/ Ag / Ageu /g' $arquivo
sed -i 's/ Zc / Zacarias /g' $arquivo
sed -i 's/ Ml / Malaquias /g' $arquivo
sed -i 's/ Mt / Mateus /g' $arquivo
sed -i 's/ Mc / Marcos /g' $arquivo
sed -i 's/ Lc / Lucas /g' $arquivo
sed -i 's/ Jo / João /g' $arquivo
sed -i 's/ At /Atos /g' $arquivo
sed -i 's/ Rm / Romanos /g' $arquivo
sed -i 's/ 1 Co / 1 Coríntios /g' $arquivo
sed -i 's/ 2 Co / 2 Coríntios /g' $arquivo
sed -i 's/ Gl / Gálatas /g' $arquivo
sed -i 's/ Ef / Efésios /g' $arquivo
sed -i 's/ Fp / Filipenses /g' $arquivo
sed -i 's/ Cl / Colossenses /g' $arquivo
sed -i 's/ 1Ts / 1 Tessalonicenses /g' $arquivo
sed -i 's/ 2Ts / 2 Tessalonicenses /g' $arquivo
sed -i 's/ 1Tm / 1 Timóteo /g' $arquivo
sed -i 's/ 2Tm / 2 Timóteo /g' $arquivo
sed -i 's/ Tt / Tito /g' $arquivo
sed -i 's/ Fm / Filemom /g' $arquivo
sed -i 's/ Hb / Hebreus /g' $arquivo
sed -i 's/ Tg / Tiago /g' $arquivo
sed -i 's/ 1 Pe / 1 Pedro /g' $arquivo
sed -i 's/ 2 Pe / 2 Pedro /g' $arquivo
sed -i 's/ 1 Jo / 1 João /g' $arquivo
sed -i 's/ 2 Jo / 2 João /g' $arquivo
sed -i 's/ 3 Jo / 3 João /g' $arquivo
sed -i 's/ Jd / Judas /g' $arquivo
sed -i 's/ Ap / Apocalipse /g' $arquivo

# Siglas soltas minúsculas para nomes completos

sed -i 's/ gn / Gênesis /g' $arquivo
sed -i 's/ ex / Êxodo /g' $arquivo
sed -i 's/ lv / Levítico /g' $arquivo
sed -i 's/ nm / Números /g' $arquivo
sed -i 's/ dt / Deuteronômio /g' $arquivo
sed -i 's/ js / Josué /g' $arquivo
sed -i 's/ jz / Juízes /g' $arquivo
sed -i 's/ rt / Rute /g' $arquivo
sed -i 's/ 1sm / 1 Samuel /g' $arquivo
sed -i 's/ 2sm / 2 Samuel /g' $arquivo
sed -i 's/ 1rs / 1 Reis /g' $arquivo
sed -i 's/ 2rs / 2 Reis /g' $arquivo
sed -i 's/ 1cr / 1 Crônicas /g' $arquivo
sed -i 's/ 2cr / 2 Crônicas /g' $arquivo
sed -i 's/ ed / Esdras /g' $arquivo
sed -i 's/ ne / Neemias /g' $arquivo
sed -i 's/ et / Ester /g' $arquivo
sed -i 's/ jó / Jó /g' $arquivo
sed -i 's/ sl / Salmos /g' $arquivo
sed -i 's/ pv / Provérbios /g' $arquivo
sed -i 's/ ec / Eclesiastes /g' $arquivo
sed -i 's/ ct / Cânticos /g' $arquivo
sed -i 's/ is / Isaías /g' $arquivo
sed -i 's/ jr / Jeremias /g' $arquivo
sed -i 's/ lm / Lamentações /g' $arquivo
sed -i 's/ ez / Ezequiel /g' $arquivo
sed -i 's/ dn / Daniel /g' $arquivo
sed -i 's/ jl / Joel /g' $arquivo
sed -i 's/ am / Amós /g' $arquivo
sed -i 's/ jn / Jonas /g' $arquivo
sed -i 's/ mq / Miquéias /g' $arquivo

sed -i 's/ hc / Habacuque /g' $arquivo
sed -i 's/ sf / Sofonias /g' $arquivo
sed -i 's/ ag / Ageu /g' $arquivo
sed -i 's/ zc / Zacarias /g' $arquivo
sed -i 's/ ml / Malaquias /g' $arquivo
sed -i 's/ mt / Mateus /g' $arquivo
sed -i 's/ mc / Marcos /g' $arquivo
sed -i 's/ lc / Lucas /g' $arquivo
sed -i 's/ jo / João /g' $arquivo
sed -i 's/ at / Atos/ g' $arquivo	
sed -i 's/ rm / Romanos /g' $arquivo
sed -i 's/ 1co / 1 Coríntios /g' $arquivo
sed -i 's/ 2co / 2 Coríntios /g' $arquivo
sed -i 's/ gl / Gálatas /g' $arquivo
sed -i 's/ ef / Efésios /g' $arquivo
sed -i 's/ fp / Filipenses /g' $arquivo
sed -i 's/ cl / Colossenses /g' $arquivo
sed -i 's/ 1ts / 1 Tessalonicenses /g' $arquivo
sed -i 's/ 2ts / 2 Tessalonicenses /g' $arquivo
sed -i 's/ 1tm / 1 Timóteo /g' $arquivo
sed -i 's/ 2tm / 2 Timóteo /g' $arquivo
sed -i 's/ tt / Tito /g' $arquivo
sed -i 's/ fm / Filemom /g' $arquivo
sed -i 's/ hb / Hebreus /g' $arquivo
sed -i 's/ tg / Tiago /g' $arquivo
sed -i 's/ 1pe / 1 Pedro /g' $arquivo
sed -i 's/ 2pe / 2 Pedro /g' $arquivo
sed -i 's/ 1jo / 1 João /g' $arquivo
sed -i 's/ 2jo / 2 João /g' $arquivo
sed -i 's/ 3jo / 3 João /g' $arquivo
sed -i 's/ jd / Judas /g' $arquivo
sed -i 's/ ap / Apocalipse /g' $arquivo


## fora de parenteses maiusculos
sed -i 's/ \[1 Ts/ \[1 Tessalonicenses/g' $arquivo
sed -i 's/ \[1 Tm/ \[1 Timóteo/g' $arquivo
sed -i 's/ \[2 Ts/ \[2 Tessalonicenses/g' $arquivo
sed -i 's/ \[2 Tm/ \[2 Timóteo/g' $arquivo
sed -i 's/ \[1 Co / \[1 Coríntios/g' $arquivo
sed -i 's/ \[1 Cr / \[1 Crônicas/g' $arquivo
sed -i 's/ \[1 Jo / \[1 João/g' $arquivo
sed -i 's/ \[1 Pe / \[1 Pedro/g' $arquivo
sed -i 's/ \[1 Rs/ \[1 Reis/g' $arquivo
sed -i 's/ \[1 Sm/ \[1 Samuel/g' $arquivo
sed -i 's/ \[1Ts/ \[1 Tessalonicenses/g' $arquivo
sed -i 's/ \[1Tm/ \[1 Timóteo/g' $arquivo
sed -i 's/ \[2 Co / \[2 Coríntios/g' $arquivo
sed -i 's/ \[2 Cr / \[2 Crônicas/g' $arquivo
sed -i 's/ \[2 Jo / \[2 João/g' $arquivo
sed -i 's/ \[2 Pe / \[2 Pedro/g' $arquivo
sed -i 's/ \[2 Rs/ \[2 Reis/g' $arquivo
sed -i 's/ \[2 Sm/ \[2 Samuel/g' $arquivo
sed -i 's/ \[2Ts/ \[2 Tessalonicenses/g' $arquivo
sed -i 's/ \[2Tm/ \[2 Timóteo/g' $arquivo
sed -i 's/ \[3 Jo / \[3 João/g' $arquivo
sed -i 's/ \[Ag / \[Ageu/g' $arquivo
sed -i 's/ \[Am / \[Amós/g' $arquivo
sed -i 's/ \[Ap / \[Apocalipse/g' $arquivo
sed -i 's/ \[At / \[Atos/g' $arquivo
sed -i 's/ \[Ct/ \[Cânticos/g' $arquivo
sed -i 's/ \[Cl/ \[Colossenses/g' $arquivo
sed -i 's/ \[Dn/ \[Daniel/g' $arquivo
sed -i 's/ \[Dt/ \[Deuteronômio/g' $arquivo
sed -i 's/ \[Ec / \[Eclesiastes/g' $arquivo
sed -i 's/ \[Ef / \[Efésios/g' $arquivo
sed -i 's/ \[Ed/ \[Esdras/g' $arquivo
sed -i 's/ \[Et/ \[Ester/g' $arquivo
sed -i 's/ \[Ex / \[Êxodo/g' $arquivo
sed -i 's/ \[Ez / \[Ezequiel/g' $arquivo
sed -i 's/ \[Fm/ \[Filemom/g' $arquivo
sed -i 's/ \[Fp/ \[Filipenses/g' $arquivo
sed -i 's/ \[Gl/ \[Gálatas/g' $arquivo
sed -i 's/ \[Gn/ \[Gênesis/g' $arquivo
sed -i 's/ \[Hc/ \[Habacuque/g' $arquivo
sed -i 's/ \[Hb/ \[Hebreus/g' $arquivo
sed -i 's/ \[Is / \[Isaías/g' $arquivo
sed -i 's/ \[Jr/ \[Jeremias/g' $arquivo
sed -i 's/ \[Jó / \[Jó/g' $arquivo
sed -i 's/ \[Jo / \[João/g' $arquivo
sed -i 's/ \[Jl/ \[Joel/g' $arquivo
sed -i 's/ \[Jn/ \[Jonas/g' $arquivo
sed -i 's/ \[Js/ \[Josué/g' $arquivo
sed -i 's/ \[Jd/ \[Judas/g' $arquivo
sed -i 's/ \[Jz/ \[Juízes/g' $arquivo
sed -i 's/ \[Lm/ \[Lamentações/g' $arquivo
sed -i 's/ \[Lv/ \[Levítico/g' $arquivo
sed -i 's/ \[Lc/ \[Lucas/g' $arquivo
sed -i 's/ \[Ml/ \[Malaquias/g' $arquivo
sed -i 's/ \[Mc/ \[Marcos/g' $arquivo
sed -i 's/ \[Mt/ \[Mateus/g' $arquivo
sed -i 's/ \[Mq/ \[Miquéias/g' $arquivo
sed -i 's/ \[Ne / \[Neemias/g' $arquivo
sed -i 's/ \[Nm/ \[Números/g' $arquivo
sed -i 's/ \[Pv/ \[Provérbios/g' $arquivo
sed -i 's/ \[Rm/ \[Romanos/g' $arquivo
sed -i 's/ \[Rt/ \[Rute/g' $arquivo
sed -i 's/ \[Sl/ \[Salmos/g' $arquivo
sed -i 's/ \[Sf/ \[Sofonias/g' $arquivo
sed -i 's/ \[Tg/ \[Tiago/g' $arquivo
sed -i 's/ \[Tt/ \[Tito/g' $arquivo
sed -i 's/ \[Zc/ \[Zacarias/g' $arquivo

## fora de parenteses minusculos
sed -i 's/ \[1 ts/ \[1 Tessalonicenses/g' $arquivo
sed -i 's/ \[1 tm/ \[1 Timóteo/g' $arquivo
sed -i 's/ \[2 ts/ \[2 Tessalonicenses/g' $arquivo
sed -i 's/ \[2 tm/ \[2 Timóteo/g' $arquivo
sed -i 's/ \[1 co / \[1 Coríntios/g' $arquivo
sed -i 's/ \[1 cr / \[1 Crônicas/g' $arquivo
sed -i 's/ \[1 jo / \[1 João/g' $arquivo
sed -i 's/ \[1 pe / \[1 Pedro/g' $arquivo
sed -i 's/ \[1 rs/ \[1 Reis/g' $arquivo
sed -i 's/ \[1 sm/ \[1 Samuel/g' $arquivo
sed -i 's/ \[1ts/ \[1 Tessalonicenses/g' $arquivo
sed -i 's/ \[1tm/ \[1 Timóteo/g' $arquivo
sed -i 's/ \[2 co / \[2 Coríntios/g' $arquivo
sed -i 's/ \[2 cr / \[2 Crônicas/g' $arquivo
sed -i 's/ \[2 jo / \[2 João/g' $arquivo
sed -i 's/ \[2 pe / \[2 Pedro/g' $arquivo
sed -i 's/ \[2 rs/ \[2 Reis/g' $arquivo
sed -i 's/ \[2 sm/ \[2 Samuel/g' $arquivo
sed -i 's/ \[2ts/ \[2 Tessalonicenses/g' $arquivo
sed -i 's/ \[2tm/ \[2 Timóteo/g' $arquivo
sed -i 's/ \[3 jo / \[3 João/g' $arquivo
sed -i 's/ \[ag / \[Ageu/g' $arquivo
sed -i 's/ \[am / \[Amós/g' $arquivo
sed -i 's/ \[ap / \[Apocalipse/g' $arquivo
sed -i 's/ \[at / \[Atos/g' $arquivo
sed -i 's/ \[ct/ \[Cânticos/g' $arquivo
sed -i 's/ \[cl/ \[Colossenses/g' $arquivo
sed -i 's/ \[dn/ \[Daniel/g' $arquivo
sed -i 's/ \[dt/ \[Deuteronômio/g' $arquivo
sed -i 's/ \[ec / \[Eclesiastes/g' $arquivo
sed -i 's/ \[ef / \[Efésios/g' $arquivo
sed -i 's/ \[ed/ \[Esdras/g' $arquivo
sed -i 's/ \[et/ \[Ester/g' $arquivo
sed -i 's/ \[ex / \[Êxodo/g' $arquivo
sed -i 's/ \[ez / \[Ezequiel/g' $arquivo
sed -i 's/ \[fm/ \[Filemom/g' $arquivo
sed -i 's/ \[fp/ \[Filipenses/g' $arquivo
sed -i 's/ \[gl/ \[Gálatas/g' $arquivo
sed -i 's/ \[gn/ \[Gênesis/g' $arquivo
sed -i 's/ \[hc/ \[Habacuque/g' $arquivo
sed -i 's/ \[hb/ \[Hebreus/g' $arquivo
sed -i 's/ \[is / \[Isaías/g' $arquivo
sed -i 's/ \[jr/ \[Jeremias/g' $arquivo
sed -i 's/ \[jó / \[Jó/g' $arquivo
sed -i 's/ \[jo / \[João/g' $arquivo
sed -i 's/ \[jl/ \[Joel/g' $arquivo
sed -i 's/ \[jn/ \[Jonas/g' $arquivo
sed -i 's/ \[js/ \[Josué/g' $arquivo
sed -i 's/ \[jd/ \[Judas/g' $arquivo
sed -i 's/ \[jz/ \[Juízes/g' $arquivo
sed -i 's/ \[lm/ \[Lamentações/g' $arquivo
sed -i 's/ \[lv/ \[Levítico/g' $arquivo
sed -i 's/ \[lc/ \[Lucas/g' $arquivo
sed -i 's/ \[ml/ \[Malaquias/g' $arquivo
sed -i 's/ \[mc/ \[Marcos/g' $arquivo
sed -i 's/ \[mt/ \[Mateus/g' $arquivo
sed -i 's/ \[mq/ \[Miquéias/g' $arquivo
sed -i 's/ \[ne / \[Neemias/g' $arquivo
sed -i 's/ \[nm/ \[Números/g' $arquivo
sed -i 's/ \[pv/ \[Provérbios/g' $arquivo
sed -i 's/ \[rm/ \[Romanos/g' $arquivo
sed -i 's/ \[rt/ \[Rute/g' $arquivo
sed -i 's/ \[sl/ \[Salmos/g' $arquivo
sed -i 's/ \[sf/ \[Sofonias/g' $arquivo
sed -i 's/ \[tg/ \[Tiago/g' $arquivo
sed -i 's/ \[tt/ \[Tito/g' $arquivo
sed -i 's/ \[zc/ \[Zacarias/g' $arquivo


