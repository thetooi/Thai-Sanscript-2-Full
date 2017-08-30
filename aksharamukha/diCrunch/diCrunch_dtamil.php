<?PHP


// http://en.wikipedia.org/wiki/Devanagari_script#Devan.C4.81gar.C4.AB_in_Unicode
// http://en.wikibooks.org/wiki/Windows_Programming/Unicode/Character_reference/0000-0FFF


$v = "்"; // Virama

/* Main arrays */

$num['tra'] = array(
    60 => "0",
    61 => "1",
    62 => "2",
    63 => "3",
    64 => "4",
    65 => "5",
    66 => "6",
    67 => "7",
    68 => "8",
    69 => "9",
);

$main['tra'] = array(

    //20 => "t ", // t end

    40 => "'", // apostrophe (avagraha)
    41 => "`", // Latin apostrophe (’)
    42 => "#", // Abbreviation

    149 => "M",
    150 => "H",
    151 => "~",

    200 => "n2a",
    202 => "r2a",

    205 => "*ga",
    //	206 => "jJa",
    207 => "*ja",
    208 => "*Da",
    209 => "*da",
    210 => "*ba",
    211 => "fa",

    213 => "khha",
    214 => "ghha",
    212 => "qha",
    215 => "xa",
    216 => "Dhha",
    217 => "rhha",

    116 => "kha",
    118 => "gha",
    117 => "ga",
    115 => "ka",
    119 => "Ga",

    121 => "cha",
    120 => "ca",
    123 => "jha",
    122 => "ja",
    124 => "Ja",

    126 => "Tha",
    128 => "Dha",
    127 => "Da",
    125 => "Ta",
    129 => "Na",

    131 => "tha",
    133 => "dha",
    132 => "da",
    130 => "ta",
    134 => "na",

    136 => "pha",
    138 => "bha",
    137 => "ba",
    135 => "pa",
    139 => "ma",

    141 => "Ya",
    140 => "ya",
    142 => "ra",
    143 => "la",
    144 => "va",

    145 => "za",
    146 => "Sa",
    147 => "sa",

    199 => "K",

    152 => "||", // ||
    153 => "|", // |
    154 => "Q", // Nukta
    155 => "@", // Abbreviation
    //	156 => "", // Udatta
    //	157 => "", // Anudatta (svarita)


    201 => "La",

    203 => "Za",

    204 =>"za",

    148 => "ha",
);

$vow['tra'] = array(

    269 => " aE",
    270 => " AE",
    271 => " aO",

    257 => " R",
    258 => " q",
    259 => " w",
    260 => " W",

    261 => " e",
    262 => " ai",
    263 => " o",
    264 => " au",

    251 => " a",
    252 => " A",
    253 => " i",
    254 => " I",
    255 => " u",
    256 => " U",

    265 => " E",
    266 => " O",

    267 => " oM",
);

$yukta['tra'] = array(

    317 => "aE",
    318 => "AE",
    319 => "aO",

    307 => "R", // joint
    308 => "q", // joint
    309 => "w", // joint
    310 => "W", // joint

    311 => "e", // joint
    312 => "ai", // joint
    313 => "o", // joint
    314 => "au", // joint

    301 => "a", // joint
    302 => "A", // joint
    303 => "i", // joint
    304 => "I", // joint
    305 => "u", // joint
    306 => "U", // joint

    315 => "E",
    316 => "O",
);

$num['scr'] = array(
    60 => "0", // 0
    61 => "1", // 1
    62 => "2", // 2
    63 => "3", // 3
    64 => "4", // 4
    65 => "5", // 5
    66 => "6", // 6
    67 => "7", // 7
    68 => "8", // 8
    69 => "9", // 9
);

$main['scr'] = array(

    //20 => "ৎ", // t end

    40 => "(அ)", // apostrophe (avagraha)
    41 => "’", // Latin apostrophe (’)
    42 => "॰", // Abbreviation

    149 => "ம‌‌்ʼ", // M
    150 => "​:", // H
    151 => "ம‌‌‌‌‌‌் ̐", // ~

    200 => "ன",
    202 => "ற",

    205 => "ஙஂˆக³",
    //	206 => "ஜ‌்º​ஞ",
    207 => "ஞஂˆஜ",
    208 => "ணஂˆட³",
    209 => "நஂˆத³",
    210 => "மஂˆப³",
    211 => "ஃப",

    213 => "ஃக²",
    214 => "ஃக³​",
    212 => "ஃக‌¹",
    215 => "ஃஜ",
    216 => "ஃ‌ட³",
    217 => "ஃ‌ட⁴",

    116 => "க²", // kha
    118 => "க⁴", // gha
    117 => "க³", // ga
    115 => "க", // ka
    119 => "ங", // Ga

    121 => "ச²", // cha
    120 => "ச", // ca
    123 => "ஜ²", // jha
    122 => "ஜ", // ja
    124 => "ஞ", // Ja

    126 => "ட²", // Tha
    128 => "ட⁴", // Dha
    127 => "ட³", // Da
    125 => "ட", // Ta
    129 => "ண", // Na

    131 => "த²", // tha
    133 => "த⁴", // dha
    132 => "த³", // da
    130 => "த", // ta
    134 => "ந", // na

    136 => "ப²", // pha
    138 => "ப⁴", // bha
    137 => "ப³", // ba
    135 => "ப", // pa
    139 => "ம", // ma

    141 => "ஃய", // Ya
    140 => "ய", // ya
    142 => "ர", // ra
    143 => "ல", // la
    144 => "வ", // va

    145 => "ஸ²", // za
    146 => "ஷ", // Sa
    147 => "ஸ", // sa

    199 => "ஃ",

    152 => "।।", // ||
    153 => "।", // |
    154 => "·", // . Nukta
    155 => "॰", // Abbreviation
    //	156 => "", // Udatta
    //	157 => "", // Anudatta (svarita)

    201 => "ள",

    203 => "ழ",

    204=> "ஶ",

    148 => "ஹ", // ha


);

$vow['scr'] = array(

    269 => " எʼ",
    270 => " ஏʼ",
    271 => " ஆʼ",

    257 => " ருʼ", // R
    258 => " ரூʼ", // q
    259 => " லுʼ", // L
    260 => " லூʼ", // W

    261 => " ஏ", // e
    262 => " ஐ", // ai
    263 => " ஓ", // o
    264 => " ஔ", // au

    251 => " அ", // a
    252 => " ஆ", // A
    253 => " இ", // i
    254 => " ஈ", // I
    255 => " உ", // u
    256 => " ஊ", // U

    265 => " எ",
    266 => " ஒ",

    267 => "ஓம்ʼ",

);

$yukta['scr'] = array(

    317 => "ெʼ",
    318 => "ேʼ",
    319 => "ாʼ",

    307 => "்ருʼ", // R joint
    308 => "்ரூʼ", // q joint
    309 => "்லுʼ", // L joint
    310 => "்லூʼ", // W  joint

    311 => "ே", // e joint
    312 => "ை", // ai joint
    313 => "ோ", // o joint
    314 => "ௌ", // au joint

    301 => "&#8205;", // a joint
    302 => "ா", // A joint
    303 => "ி", // i joint
    304 => "ீ", // I joint
    305 => "ு", // u joint
    306 => "ூ", // U joint

    315 => "ெ",
    316 => "ொ",
);