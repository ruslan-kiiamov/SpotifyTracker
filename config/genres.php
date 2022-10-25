<?php

use App\Services\GenreCategorizer;

return [
    'other' => GenreCategorizer::OTHER,

    'categories' => [
        GenreCategorizer::ROCK,
        GenreCategorizer::POP_RB_SOUL,
        GenreCategorizer::HIP_HOP,
        GenreCategorizer::ELECTRONIC,
        GenreCategorizer::FOLK,
        GenreCategorizer::BLUES_JAZZ_FUNK,
        GenreCategorizer::CLASSICAL,
        GenreCategorizer::WORLD,
        GenreCategorizer::OTHER,
    ],

    //Genre has several categories
    'regularKeyWords' => [
        GenreCategorizer::ROCK => ['rock', 'surf', 'punk', 'metal', 'djent', 'pixie', 'emo', 'indie', 'alternative',
            'hardcore'],
        GenreCategorizer::POP_RB_SOUL => ['pop', 'disco', 'r&b', 'soul', 'gospel'],
        GenreCategorizer::HIP_HOP => ['hip hop', 'hip-hop', 'rap', 'phonk', 'drill', 'boom bap', 'chillhop', 'lo-fi'],
        GenreCategorizer::ELECTRONIC => ['trance', 'edm', 'house', 'techno', 'dnb', 'synth', 'electro', 'tronica',
            'amapiano', 'club', 'bass', 'dubstep', 'beat', 'glitch', 'dance', 'rave', 'downtempo'],
        GenreCategorizer::FOLK => ['folk', 'country', 'bluegrass', 'roots', 'americana', 'triste', 'entehno', 'dangdut'],
        GenreCategorizer::BLUES_JAZZ_FUNK => ['jazz', 'blues', 'funk'],
        GenreCategorizer::CLASSICAL => ['classical', 'orchestra', 'romantic', 'choir', 'ballet class'],
        GenreCategorizer::WORLD => ['samba', 'rumba', 'cumbia', 'tango', 'norteno', 'bossa nova', 'indigenous',
            'reggae', 'ska', 'flamenco', 'salsa', 'hawaiian', 'arrocha', 'latin', 'trova', 'minyao'],
    ],

    //Genre has only one category
    'specialKeyWords' => [
        GenreCategorizer::ROCK => ['pop punk', 'rap rock', 'ska punk', 'dance-punk', 'dance rock', 'straight edge',
            'britpop', 'ponk', 'ukhc', 'screamo', 'beatlesque', 'funk metal', 'deathcore', 'blues rock', 'funk metal',
            'funk rock', 'classical metal', 'punk blues', 'merseybeat', 'trancecore', 'new rave', 'skate punk',
            'new wave', 'lovsang', 'visual kei', 'shoegaze'],
        GenreCategorizer::POP_RB_SOUL => ['singer-songwriter', 'diva house', 'laulaja-lauluntekija', 'francoton',
            'schlager', 'chanson', 'j-division', 'canzone napoletana', 'funk pop', 'new romantic', 'brega romantico',
            'rebel blues', 'dance pop', 'pop dance', 'electropop', 'synthpop', 'electropowerpop', 'electro-pop', 'ccm',
            'alt z', 'alternative dance', 'worship', 'idol', 'otacore', 'men chika', 'dream smp', 'shonen'],
        GenreCategorizer::HIP_HOP => ['funk mtg', 'funk consciente', 'funk ostentacao', 'funk paulista', 'drain',
            'psychokore', 'japanese beats', 'zxc', 'zhenskiy rep', 'hip house', 'rave funk', 'funk mandelao',
            'funk viral', 'funk 150 bpm', 'brega funk', 'funk bh', 'trap funk', 'mega funk', 'g funk', 'rap romantico',
            'jazzhop', 'pop rap', 'pluggnb', 'rkt', 'urbano', 'mahraganat'],
        GenreCategorizer::WORLD => ['carioca', 'rocksteady', 'dancehall', 'azontobeats', 'manguebeat', 'afrobeat',
            'axe', 'forro', 'mpb', 'cuarteto', 'pagode', 'mexicana', 'ranchera', 'grupera', 'corrido', 'sungura',
            'perreo', 'bhajan', 'ghazal', 'enka', 'contemporanea', 'manele', 'cantautor', 'bachata', 'caliente', 'dub',
            'roots reggae', 'desi pop', 'tamil pop', 'mambo', 'sarkilar', 'cubaton', 'trinibad', 'afroswing', 'khaliji',
            'sertanejo', 'shamanic', 'tollywood', 'kollywood', 'kizomba', 'carnaval', 'adoracao', 'vaqueiro', 'kavkaz',
            'hare krishna', 'mantra'],
        GenreCategorizer::ELECTRONIC => ['cyberpunk', 'funky tech house', 'disco house', 'funky house', 'drum and bass',
            'future bass', 'neurofunk', 'hjemmesnekk', 'new french touch', 'hardstyle', 'rawstyle', 'jungle',
            'jazztronica', 'nu jazz', 'jazz boom bap', 'liquid funk', 'drumfunk', 'jazzy dnb', 'uk garage',
            'jazz house', 'groove room', 'russelater', 'uptempo hardcore', 'ambient', 'frenchcore', 'tekk', 'dakke dak',
            'guaracha'],
        GenreCategorizer::BLUES_JAZZ_FUNK => ['broadway'],
    ],

    'bannedGenreNames' => ['sleep', 'white noise', 'rain', 'world meditation', 'russian chanson', 'kleine hoerspiel',
        'hoerspiel', 'writing', 'musica de fondo', 'shush', 'british soundtrack', 'epicore', 'orchestral soundtrack',
        'soundtrack', 'video game music', 'anime score', 'japanese soundtrack', 'ocean', 'kabarett', 'environmental',
        'genshin', 'asmr', 'sped up', 'pet calming', 'workout product', 'lullaby', 'water', 'bgm', 'neru', 'vocaloid',
        'japanese instrumental', 'piano cover', 'mollywood', 'sandalwood', 'spa', 'sound', 'yoga', 'pianissimo',
        'icelandic experimental', 'japanese guitar', 'japanese vgm', 'reiki', 'barnmusik', 'movie tunes',
        'german soundtrack', 'brain waves', 'korean instrumental', 'dinner jazz', 'music box', 'slowed and reverb',
        'binaural', 'bornehistorier', 'jirai kei', 'erotic product', 'puirt-a-beul', 'massage', 'zen', 'mindfulness',
        'classic bollywood', 'filmi', 'modern bollywood', 'meditation', 'ilahiler', 'lesen', 'liedermacher', '8d',
        'disney piano', 'easy listening', 'lounge', 'therapy', 'chill out', 'cancion infantil latinoamericana', 'anime',
        'j-acoustic', 'acoustic', 'kindermusik', 'ensemble stars', 'hypnosis mic', 'cartoon', 'nursery', 'high vibe',
        'theremin', 'musica per bambini', "children's choir", "children's music", 'background music', 'pony',
        'classic soundtrack', 'italian soundtrack', 'vintage italian soundtrack', 'anime piano', 'muziek voor kinderen',
        'jazz cover', 'bossa nova cover', 'coverchill', 'background jazz', 'funk das antigas', 'pop romantico',
        'russian dance', 'russian dance pop', 'uk funky', 'covertronica', 'australian dance', '432hz', 'tvog',
        'turkish soundtrack', 'norske viser', 'redneck', 'hollywood', 'show tunes', 'german oi', 'barnsagor',
        'jawaiian', 'barnemusikk', 'christelijk', 'bornesange', "preschool children's music",
        "nz children's music", 'kodomo no ongaku', 'cocuk sarkilari', 'musica infantil', "children's story",
        'musica para ninos', "british children's music", 'opm', 'weirdcore', 'wrestling', 'ambient guitar',
        'adult standards', 'gymcore', 'melbourne bounce international', 'relaxative', 'detskie pesni',
        'background piano', 'japanese piano', 'new age piano', 'erotica', 'afrikaans', 'korean ost', 'comic'],
];
