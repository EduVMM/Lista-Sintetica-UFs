<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Sintética de UFs</title>
    <style>
        table{
          border-collapse: collapse;
          text-align: center;
        }

        body{
            background-color: grey;
        }

        th,
        td {
            color:white;
            border: 1.5px solid whitesmoke;
            padding: 7px;
        }

    </style>
</head>
<body>
<?php
$uf = [
    'Acre' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Bandeira_do_Acre.svg/45px-Bandeira_do_Acre.svg.png',
        'Unidade Federativa' => 'Acre',
        'Abreviação' => 'AC',
        'Sede do Governo' => 'Rio Branco',
        'Área' => '164 122,2',
        'População' => '795 145',
        'Densidade' => '4,30',
        'Pib (2015)' => '13 622 000',
        'Pib Percentual Total (2015)' => '0,2',
        'Pib per capita' => '16 953,46',
        'IDH (2010)' => '0,663',
        'Alfabetização (2016)' => '86,9%',
        'Mortalidade Infantil (2016)' => '17,0‰',
        'Expectativa de Vida (2016)' => '73,9 anos'
    ],

    'Alagoas' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Bandeira_de_Alagoas.svg/45px-Bandeira_de_Alagoas.svg.png',
        'Unidade Federativa' => 'Alagoas',
        'Abreviação' => 'AL',
        'Sede do Governo' => 'Maceió',
        'Área' => '27 767,7',
        'População' => '3 327 551',
        'Densidade' => '108,61',
        'Pib (2015)' => '46 364 000',
        'Pib Percentual Total (2015)' => '0,8',
        'Pib per capita' => '13 877,53',
        'IDH (2010)' => '0,631',
        'Alfabetização (2016)' => '80,6%',
        'Mortalidade Infantil (2016)' => '19,5‰',
        'Expectativa de Vida (2016)' => '71,6 anos'
    ],
    'Amapá' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Bandeira_do_Amapá.svg/45px-Bandeira_do_Amapá.svg.png',
        'Unidade Federativa' => 'Amapá',
        'Abreviação' => 'AP',
        'Sede do Governo' => 'Macapá',
        'Área' => '142 814,6',
        'População' => '756 500',
        'Densidade' => '4,16',
        'Pib (2015)' => '13 861 000',
        'Pib Percentual Total (2015)' => '0,2',
        'Pib per capita' => '18 079,54',
        'IDH (2010)' => '0,708',
        'Alfabetização (2016)' => '95%',
        'Mortalidade Infantil (2016)' => '23,2‰',
        'Expectativa de Vida (2016)' => '73,9 anos'
    ],
    'Amazonas' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Bandeira_do_Amazonas.svg/45px-Bandeira_do_Amazonas.svg.png',
        'Unidade Federativa' => 'Amazonas',
        'Abreviação' => 'AM',
        'Sede do Governo' => 'Manaus',
        'Área' => '1 570 745,7',
        'População' => '3 893 763',
        'Densidade' => '2,05',
        'Pib (2015)' => '86 560 000',
        'Pib Percentual Total (2015)' => '1,4',
        'Pib per capita' => '21 978,95',
        'IDH (2010)' => '0,674',
        'Alfabetização (2016)' => '93,1%',
        'Mortalidade Infantil (2016)' => '18,2‰',
        'Expectativa de Vida (2016)' => '71,9 anos'
    ],
    'Bahia' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Bandeira_da_Bahia.svg/45px-Bandeira_da_Bahia.svg.png',
        'Unidade Federativa' => 'Bahia',
        'Abreviação' => 'BA',
        'Sede do Governo' => 'Salvador',
        'Área' => '564 692,7',
        'População' => '15 150 143',
        'Densidade' => '24,46',
        'Pib (2015)' => '245 025 000',
        'Pib Percentual Total (2015)' => '4,1',
        'Pib per capita' => '16 115,89',
        'IDH (2010)' => '0,660',
        'Alfabetização (2016)' => '87%',
        'Mortalidade Infantil (2016)' => '17,3‰',
        'Expectativa de Vida (2016)' => '73,5 anos'
    ],
    'Ceará' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Bandeira_do_Cear%C3%A1.svg/1280px-Bandeira_do_Cear%C3%A1.svg.png',
        'Unidade Federativa' => 'Ceará',
        'Abreviação' => 'CE',
        'Sede do Governo' => 'Fortaleza',
        'Área' => '148 825,6',
        'População' => '8 867 448',
        'Densidade' => '54,40',
        'Pib (2015)' => '130 621 000',
        'Pib Percentual Total (2015)' => '2,2',
        'Pib per capita' => '14 669,14',
        'IDH (2010)' => '0,682',
        'Alfabetização (2016)' => '84,8%',
        'Mortalidade Infantil (2016)' => '14,4‰',
        'Expectativa de Vida (2016)' => '73,8 anos'
    ],
    'Distrito Federal' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg/45px-Bandeira_do_Distrito_Federal_%28Brasil%29.svg.png',
        'Unidade Federativa' => 'Distrito Federal',
        'Abreviação' => 'DF',
        'Sede do Governo' => 'Brasília',
        'Área' => '5 822,1',
        'População' => '2 867 869',
        'Densidade' => '400,73',
        'Pib (2015)' => '215 613 000',
        'Pib Percentual Total (2015)' => '3,6',
        'Pib per capita' => '73 971,05',
        'IDH (2010)' => '0,824',
        'Alfabetização (2016)' => '97,4%',
        'Mortalidade Infantil (2016)' => '10,5‰',
        'Expectativa de Vida (2016)' => '78,1 anos'
    ],
    'Espírito Santo' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/Bandeira_do_Espírito_Santo.svg/45px-Bandeira_do_Espírito_Santo.svg.png',
        'Unidade Federativa' => 'Espírito Santo',
        'Abreviação' => 'ES',
        'Sede do Governo' => 'Vitória',
        'Área' => '46 077,5',
        'População' => '3 894 899',
        'Densidade' => '73,97',
        'Pib (2015)' => '120 363 000',
        'Pib Percentual Total (2015)' => '2',
        'Pib per capita' => '30 627,45',
        'IDH (2010)' => '0,740',
        'Alfabetização (2016)' => '93,8%',
        'Mortalidade Infantil (2016)' => '8,8‰',
        'Expectativa de Vida (2016)' => '78,2 anos'
    ],
    'Goiás' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_Goiás.svg/45px-Flag_of_Goiás.svg.png',
        'Unidade Federativa' => 'Goiás',
        'Abreviação' => 'GO',
        'Sede do Governo' => 'Goiânia',
        'Área' => '340 086,7',
        'População' => '6 551 322',
        'Densidade' => '16,52',
        'Pib (2015)' => '173 632 000',
        'Pib Percentual Total (2015)' => '2,9',
        'Pib per capita' => '26 265,32',
        'IDH (2010)' => '0,735',
        'Alfabetização (2016)' => '93,5%',
        'Mortalidade Infantil (2016)' => '14,9‰',
        'Expectativa de Vida (2016)' => '74,2 anos'
    ],
    'Maranhão' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Bandeira_do_Maranhão.svg/45px-Bandeira_do_Maranhão.svg.png',
        'Unidade Federativa' => 'Maranhão',
        'Abreviação' => 'MA',
        'Sede do Governo' => 'São Luís',
        'Área' => '331 983,3',
        'População' => '6 861 924',
        'Densidade' => '18,38',
        'Pib (2015)' => '78 475 000',
        'Pib Percentual Total (2015)' => '1,3',
        'Pib per capita' => '11 366,23',
        'IDH (2010)' => '0,639',
        'Alfabetização (2016)' => '83,3%',
        'Mortalidade Infantil (2016)' => '21,3‰',
        'Expectativa de Vida (2016)' => '70,6 anos'
    ],
    'Mato Grosso' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Bandeira_de_Mato_Grosso.svg/45px-Bandeira_de_Mato_Grosso.svg.png',
        'Unidade Federativa' => 'Mato Grosso',
        'Abreviação' => 'MT',
        'Sede do Governo' => 'Cuiabá',
        'Área' => '903 357,9',
        'População' => '3 236 578',
        'Densidade' => '3,10',
        'Pib (2015)' => '107 418 000',
        'Pib Percentual Total (2015)' => '1,8',
        'Pib per capita' => '32 894,96',
        'IDH (2010)' => '0,725',
        'Alfabetização (2016)' => '93,5%',
        'Mortalidade Infantil (2016)' => '16,9‰',
        'Expectativa de Vida (2016)' => '74,2 anos'
    ],
    'Mato Grosso do Sul' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg/45px-Bandeira_de_Mato_Grosso_do_Sul.svg.png',
        'Unidade Federativa' => 'Mato Grosso do Sul',
        'Abreviação' => 'MS',
        'Sede do Governo' => 'Campo Grande',
        'Área' => '357 125,0',
        'População' => '2 630 098',
        'Densidade' => '6,34',
        'Pib (2015)' => '83 082 000',
        'Pib Percentual Total (2015)' => '1,4',
        'Pib per capita' => '31 337,22',
        'IDH (2010)' => '0,729',
        'Alfabetização (2016)' => '93,7%',
        'Mortalidade Infantil (2016)' => '14,0‰',
        'Expectativa de Vida (2016)' => '75,5 anos'
    ],
    'Minas Gerais' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Bandeira_de_Minas_Gerais.svg/45px-Bandeira_de_Minas_Gerais.svg.png',
        'Unidade Federativa' => 'Minas Gerais',
        'Abreviação' => 'MG',
        'Sede do Governo' => 'Belo Horizonte',
        'Área' => '586 528,3',
        'População' => '20 777 672',
        'Densidade' => '32,79',
        'Pib (2015)' => '519 326 000',
        'Pib Percentual Total (2015)' => '8,7',
        'Pib per capita' => '24 884,94',
        'IDH (2010)' => '0,731',
        'Alfabetização (2016)' => '93,8%',
        'Mortalidade Infantil (2016)' => '10,9‰',
        'Expectativa de Vida (2016)' => '77,2 anoss'
    ],
    'Pará' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/Bandeira_do_Pará.svg/45px-Bandeira_do_Pará.svg.png',
        'Unidade Federativa' => 'Pará',
        'Abreviação' => 'PA',
        'Sede do Governo' => 'Belém',
        'Área' => '1 247 689,5',
        'População' => '8 101 180',
        'Densidade' => '5,58',
        'Pib (2015)' => '130 883 000',
        'Pib Percentual Total (2015)' => '2,2',
        'Pib per capita' => '16 009,98',
        'IDH (2010)' => '0,646',
        'Alfabetização (2016)' => '90,7%',
        'Mortalidade Infantil (2016)' => '16,6‰',
        'Expectativa de Vida (2016)' => '72,1 anos'
    ],
    'Paraíba' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Bandeira_da_Paraíba.svg/45px-Bandeira_da_Paraíba.svg.png',
        'Unidade Federativa' => 'Paraíba',
        'Abreviação' => 'PB',
        'Sede do Governo' => 'João Pessoa',
        'Área' => '56 439,8',
        'População' => '3 950 359',
        'Densidade' => '63,71',
        'Pib (2015)' => '56 140 000',
        'Pib Percentual Total (2015)' => '0,9',
        'Pib per capita' => '14 133,32',
        'IDH (2010)' => '0,658',
        'Alfabetização (2016)' => '83,7%',
        'Mortalidade Infantil (2016)' => '16,1‰',
        'Expectativa de Vida (2016)' => '73,2 anos'
    ],
    'Paraná' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Bandeira_do_Paraná.svg/45px-Bandeira_do_Paraná.svg.png',
        'Unidade Federativa' => 'Paraná',
        'Abreviação' => 'PR',
        'Sede do Governo' => 'Curitiba',
        'Área' => '199 314,9',
        'População' => '11 112 062',
        'Densidade' => '51,48',
        'Pib (2015)' => '376 960 000',
        'Pib Percentual Total (2015)' => '6,3',
        'Pib per capita' => '33 768,62',
        'IDH (2010)' => '0,749',
        'Alfabetização (2016)' => '95,5%',
        'Mortalidade Infantil (2016)' => '9,3‰',
        'Expectativa de Vida (2016)' => '77,1 anos'
    ],
    'Pernambuco' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Bandeira_de_Pernambuco.svg/45px-Bandeira_de_Pernambuco.svg.png',
        'Unidade Federativa' => 'Pernambuco',
        'Abreviação' => 'PE',
        'Sede do Governo' => 'Recife',
        'Área' => '98 311,6',
        'População' => '9 297 861',
        'Densidade' => '85,58',
        'Pib (2015)' => '156 955 000',
        'Pib Percentual Total (2015)' => '2,6',
        'Pib per capita' => '16 795,34',
        'IDH (2010)' => '0,673',
        'Alfabetização (2016)' => '87,2%',
        'Mortalidade Infantil (2016)' => '12,7‰',
        'Expectativa de Vida (2016)' => '73,9 anos'
    ],
    'Piauí' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Bandeira_do_Piauí.svg/45px-Bandeira_do_Piauí.svg.png',
        'Unidade Federativa' => 'Piauí',
        'Abreviação' => 'PI',
        'Sede do Governo' => 'Teresina',
        'Área' => '251 529,2',
        'População' => '3 198 185',
        'Densidade' => '11,95',
        'Pib (2015)' => '39 148 000',
        'Pib Percentual Total (2015)' => '0,7',
        'Pib per capita' => '12 218,51',
        'IDH (2010)' => '0,646',
        'Alfabetização (2016)' => '82,8%',
        'Mortalidade Infantil (2016)' => '19,1‰',
        'Expectativa de Vida (2016)' => '71,1 anos'
    ],
    'Rio de Janeiro' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg/45px-Bandeira_do_estado_do_Rio_de_Janeiro.svg.png',
        'Unidade Federativa' => 'Rio de Janeiro',
        'Abreviação' => 'RJ',
        'Sede do Governo' => 'Rio de Janeiro',
        'Área' => '43 696,1',
        'População' => '16 497 395',
        'Densidade' => '352,05',
        'Pib (2015)' => '659 137 000',
        'Pib Percentual Total (2015)' => '11',
        'Pib per capita' => '39 826,95',
        'IDH (2010)' => '0,761',
        'Alfabetização (2016)' => '97,3%',
        'Mortalidade Infantil (2016)' => '11,5‰',
        'Expectativa de Vida (2016)' => '76,2 anos'
    ],
    'Rio Grande do Norte' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Bandeira_do_Rio_Grande_do_Norte.svg/45px-Bandeira_do_Rio_Grande_do_Norte.svg.png',
        'Unidade Federativa' => 'Rio Grande do Norte',
        'Abreviação' => 'RN',
        'Sede do Governo' => 'Natal',
        'Área' => '52 796,8',
        'População' => '3 419 550',
        'Densidade' => '56,88',
        'Pib (2015)' => '57 250 000',
        'Pib Percentual Total (2015)' => '1',
        'Pib per capita' => '16 631,86',
        'IDH (2010)' => '0,684',
        'Alfabetização (2016)' => '85,3%',
        'Mortalidade Infantil (2016)' => '14,7‰',
        'Expectativa de Vida (2016)' => '75,7 anos'
    ],
    'Rio Grande do Sul' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/63/Bandeira_do_Rio_Grande_do_Sul.svg/45px-Bandeira_do_Rio_Grande_do_Sul.svg.png',
        'Unidade Federativa' => 'Rio Grande do Sul',
        'Abreviação' => 'RS',
        'Sede do Governo' => 'Porto Alegre',
        'Área' => '281 748,5',
        'População' => '11 228 091',
        'Densidade' => '38,49',
        'Pib (2015)' => '381 985 000	',
        'Pib Percentual Total (2015)' => '6,4',
        'Pib per capita' => '33 960,36',
        'IDH (2010)' => '0,746',
        'Alfabetização (2016)' => '96,8%',
        'Mortalidade Infantil (2016)' => '9,6‰',
        'Expectativa de Vida (2016)' => '77,8 anos'
    ],
    'Rondônia' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Bandeira_de_Rondônia.svg/45px-Bandeira_de_Rondônia.svg.png',
        'Unidade Federativa' => 'Rondônia',
        'Abreviação' => 'RO',
        'Sede do Governo' => 'Porto Velho',
        'Área' => '237 590,7',
        'População' => '1 755 015',
        'Densidade' => '6,46',
        'Pib (2015)' => '36 563 000',
        'Pib Percentual Total (2015)' => '0,6',
        'Pib per capita' => '20 677,95',
        'IDH (2010)' => '0,690',
        'Alfabetização (2016)' => '93,3%',
        'Mortalidade Infantil (2016)' => '20,0‰',
        'Expectativa de Vida (2016)' => '71,3 anos'
    ],
    'Roraima' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Bandeira_de_Roraima.svg/45px-Bandeira_de_Roraima.svg.png',
        'Unidade Federativa' => 'Roraima',
        'Abreviação' => 'RR',
        'Sede do Governo' => 'Boa Vista',
        'Área' => '224 299,0',
        'População' => '500 826',
        'Densidade' => '1,74',
        'Pib (2015)' => '10 354 000',
        'Pib Percentual Total (2015)' => '0,2',
        'Pib per capita' => '20 476,71',
        'IDH (2010)' => '0,707',
        'Alfabetização (2016)' => '93,4%',
        'Mortalidade Infantil (2016)' => '17,2‰',
        'Expectativa de Vida (2016)' => '71,5 anos'
    ],
    'Santa Catarina' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Bandeira_de_Santa_Catarina.svg/45px-Bandeira_de_Santa_Catarina.svg.png',
        'Unidade Federativa' => 'Santa Catarina',
        'Abreviação' => 'SC',
        'Sede do Governo' => 'Florianópolis',
        'Área' => '95 736,2',
        'População' => '6 734 568',
        'Densidade' => '61,53',
        'Pib (2015)' => '249 073 000',
        'Pib Percentual Total (2015)' => '4,2',
        'Pib per capita' => '36 525,28',
        'IDH (2010)' => '0,774',
        'Alfabetização (2016)' => '97,2%',
        'Mortalidade Infantil (2016)' => '9,2‰',
        'Expectativa de Vida (2016)' => '79,1 anos'
    ],
    'São Paulo' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Bandeira_do_estado_de_São_Paulo.svg/45px-Bandeira_do_estado_de_São_Paulo.svg.png',
        'Unidade Federativa' => 'São Paulo',
        'Abreviação' => 'SP',
        'Sede do Governo' => 'São Paulo',
        'Área' => '248 209,4',
        'População' => '44 169 350',
        'Densidade' => '162,93',
        'Pib (2015)' => '1 939 890 000',
        'Pib Percentual Total (2015)' => '32,4',
        'Pib per capita' => '43 694,68',
        'IDH (2010)' => '0,783',
        'Alfabetização (2016)' => '97,2%',
        'Mortalidade Infantil (2016)' => '9,9‰',
        'Expectativa de Vida (2016)' => '78,1 anos'
    ],
    'Sergipe' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Bandeira_de_Sergipe.svg/45px-Bandeira_de_Sergipe.svg.png',
        'Unidade Federativa' => 'Sergipe',
        'Abreviação' => 'SE',
        'Sede do Governo' => 'Aracaju',
        'Área' => '21 910,4',
        'População' => '2 227 294',
        'Densidade' => '89,81',
        'Pib (2015)' => '38 554 000',
        'Pib Percentual Total (2015)' => '0,6',
        'Pib per capita' => '17 189,28',
        'IDH (2010)' => '0,665',
        'Alfabetização (2016)' => '85,3%',
        'Mortalidade Infantil (2016)' => '16,2‰',
        'Expectativa de Vida (2016)' => '72,7 anos'
    ],
    'Tocantins' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Bandeira_do_Tocantins.svg/45px-Bandeira_do_Tocantins.svg.png',
        'Unidade Federativa' => 'Tocantins',
        'Abreviação' => 'TO',
        'Sede do Governo' => 'Palmas',
        'Área' => '277 620,9',
        'População' => '1 502 759',
        'Densidade' => '4,70',
        'Pib (2015)' => '28 930 000',
        'Pib Percentual Total (2015)' => '0,5',
        'Pib per capita' => '19 094,16',
        'IDH (2010)' => '0,699',
        'Alfabetização (2016)' => '89,6%',
        'Mortalidade Infantil (2016)' => '15,8‰',
        'Expectativa de Vida (2016)' => '73,4 anos'
    ]
];

echo '<table border=1>';

echo '<tr>
          <th>Bandeira</th>
          <th>Unidade Federativa</th>
          <th>Abreviação</th>
          <th>Sede do Governo</th>
          <th>Área (km²)</th>
          <th>População (2014)</th>
          <th>Densidade (2005)</th>
          <th>PIB (2015)</th>
          <th>(% total) (2015)</th>
          <th>PIB per capita (R$) (2015)</th>
          <th>IDH (2010)</th>
          <th>Alfabetização (2016)</th>
          <th>Mortalidade Infantil (2016)</th>
          <th>Expectativa de Vida (2016)</th>
      </tr>';

      foreach ($uf as $i => $cod) {
    echo '<tr>';
    echo '<td><a href="' . $cod['Bandeira'] . '"><img src="' . $cod['Bandeira'] . '" alt="' . $cod['Unidade Federativa'] . '" width="55" height="40"></a></td>';
    echo '<td>' . $cod['Unidade Federativa'] . '</td>';
    echo '<td>' . $cod['Abreviação'] . '</td>';
    echo '<td>' . $cod['Sede do Governo'] . '</td>';
    echo '<td>' . $cod['Área'] . '</td>';
    echo '<td>' . $cod['População'] . '</td>';
    echo '<td>' . $cod['Densidade'] . '</td>';
    echo '<td>' . $cod['Pib (2015)'] . '</td>';
    echo '<td>' . $cod['Pib Percentual Total (2015)'] . '</td>';
    echo '<td>' . $cod['Pib per capita'] . '</td>';
    echo '<td>' . $cod['IDH (2010)'] . '</td>';
    echo '<td>' . $cod['Alfabetização (2016)'] . '</td>';
    echo '<td>' . $cod['Mortalidade Infantil (2016)'] . '</td>';
    echo '<td>' . $cod['Expectativa de Vida (2016)'] . '</td>';
    echo '</tr>';
}

echo '</table>';
?>
    
</body>
</html>