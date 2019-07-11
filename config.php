<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'ticketsUrl' => 'https://ti.to/on3/fullstack19 ',
    'collections' => [],
    'venue' => 'Hilton Antwerp Old Town',
    'speakers' => [
        'jeremy-keith' => [
            'url' => 'jeremy-keith',
            'name' => 'Jeremy Keith',
            'twitter' => 'adactio',
            'website' => 'https://adactio.com',
            'title' => 'Web stuff do-er at Clearleft',
            'talk' => 'Building',
        ],
        'konstantin-kudryashov' => [
            'url' => 'konstantin-kudryashov',
            'name' => 'Konstantin Kudryashov',
            'twitter' => 'everzet',
            'website' => 'https://stakeholderwhisperer.com',
            'title' => 'eXtreme Programmer',
            'talk' => 'You might not need _blank_',
            'workshop' => 'Elixir for experienced web developers',
        ],
        'sara-soueidan' => [
            'url' => 'sara-soueidan',
            'name' => 'Sara Soueidan',
            'twitter' => 'sarasoueidan',
            'website' => 'https://sarasoueidan.com',
            'title' => 'Front-End UI/UX Developer',
        ],
        'mattias-geniar' => [
            'url' => 'mattias-geniar',
            'name' => 'Mattias Geniar',
            'twitter' => 'mattiasgeniar',
            'website' => 'https://ma.ttias.be',
            'title' => 'Problem Solver at Combell',
            'talk' => 'Debugging {php,ruby,anything} as a Linux sysadmin',
        ],
        'matthias-noback' => [
            'url' => 'matthias-noback',
            'name' => 'Matthias Noback',
            'twitter' => 'matthiasnoback',
            'website' => 'https://matthiasnoback.nl',
            'title' => 'Developer at Noback\'s Office',
            'talk' => 'Advanced Web Application Architecture',
            'workshop' => 'Building Autonomous Services',
        ],
        'nataliya-remez' => [
            'url' => 'nataliya-remez',
            'name' => 'Nataliya Remez',
            'twitter' => 'nat_remez',
            'website' => 'https://izettle.com',
            'title' => 'Tech manager at iZettle',
            'talk' => 'Revealing the secrets of high availability & happy Ops',
        ],
        'gabi-davila' => [
            'url' => 'gabi-davila',
            'name' => 'Gabi D\'Ávila Ferrara',
            'twitter' => 'gabidavila',
            'website' => 'https://gabi.dev',
            'title' => 'Developer Advocate at Google Cloud',
            'talk' => 'Serverless and you, where do I run my stateless code?',
        ],
        'rik-van-bruggen' => [
            'url' => 'rik-van-bruggen',
            'name' => 'Rik Van Bruggen',
            'twitter' => 'rvanbruggen',
            'website' => 'https://blog.bruggen.com',
            'title' => 'Vice-president at Neo4j',
            'talk' => 'Graphs are Everywhere',
        ],
        'mathias-verraes' => [
            'url' => 'mathias-verraes',
            'name' => 'Mathias Verraes',
            'twitter' => 'mathiasverraes',
            'website' => 'http://verraes.net',
            'title' => 'Student of Systems',
            'workshop' => 'DDD Modelling vs Implementation',
        ],
        'indu-alagarsamy' => [
            'url' => 'indu-alagarsamy',
            'name' => 'Indu Alagarsamy',
            'twitter' => 'indu_alagarsamy',
            'website' => 'https://indu.dev',
            'title' => 'Distributed Systems Engineer',
            'talk' => 'Microservices-Ready Front-End',
        ],
        'caleb-porzio' => [
            'url' => 'caleb-porzio',
            'name' => 'Caleb Porzio',
            'twitter' => 'calebporzio',
            'website' => 'https://calebporzio.com',
            'title' => 'Full Stack Developer',
            'talk' => 'Write Less JS',
        ],
        'thijs-feryn' => [
            'url' => 'thijs-feryn',
            'name' => 'Thijs Feryn',
            'twitter' => 'ThijsFeryn',
            'website' => 'https://feryn.eu',
            'title' => 'Evangelist at Varnish Software',
            'talk' => 'Caching the uncacheable in Varnish',
        ],
        'kadi-kraman' => [
            'url' => 'kadi-kraman',
            'name' => 'Kadi Kraman',
            'twitter' => 'kadikraman',
            'website' => 'https://formidable.com',
            'title' => 'Senior Software Engineer at Formidable',
            'talk' => 'All Aboard the Type Train',
        ],
        'bram-van-damme' => [
            'url' => 'bram-van-damme',
            'name' => 'Bram Van Damme',
            'twitter' => 'bramus',
            'website' => 'https://bram.us',
            'title' => 'Freelance Creative Coder',
            'workshop' => 'React for Beginners',
        ],
        'ivan-jovanovic' => [
            'url' => 'ivan-jovanovic',
            'name' => 'Ivan Jovanovic',
            'twitter' => 'ivanjov96',
            'website' => 'https://ivanjov.com',
            'title' => 'Founder at IJ Consulting & Senior Engineer at NearForm',
            'workshop' => 'Testing JavaScript Applications',
        ],
        'joost-lubach' => [
            'url' => 'joost-lubach',
            'name' => 'Joost Lubach',
            'twitter' => 'joostlubach',
            'website' => 'https://groundcontrol.app',
            'title' => 'Founder & developer of GroundControl',
            'talk' => 'Making a suspendable DSL for chatbots',
        ],
        'susanna-wong' => [
            'url' => 'susanna-wong',
            'name' => 'Susanna Wong',
            'twitter' => 'studioswong',
            'title' => 'Senior Front-end Developer at Toyota Connected',
            'talk' => "A Front-end dev's hobbyist approach into Machine Learning",
        ],
        'tim-neutkens' => [
            'url' => 'tim-neutkens',
            'name' => 'Tim Neutkens',
            'twitter' => 'timneutkens',
            'title' => 'Next.js Lead',
            'talk' => 'Next.js: The React Framework',
        ],
    ],
    'stripProtocol' => function (string $website): string {
        $website = Str::replaceFirst('http://', '', $website);

        return Str::replaceFirst('https://', '', $website);
    },
];
