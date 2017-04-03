<?php
    $data = json_decode(file_get_contents("data.json"), true);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name='viewport' content='width=320,initial-scale=1,user-scalable=0'>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="author" content="Johan Groenen (c) 2017">
        
        <link rel='image_src' href='http://www.jgroenen.nl/img/linkedin.jpg'/>
        <link rel='shortcut icon' type='image/png' href='http://www.jgroenen.nl/img/configuration02.png'>
        
        <title>Johan Groenen | innovatie(&)strategie</title>
        <meta name="title" content="Johan Groenen | innovatie(&)strategie">
        <meta name="description" content="Design thinking en lean startup advies en begeleiding voor (in-house) digitale start-ups.">
        <meta name="keywords" content="digital, innovation, transformation, data services, api, architecture, web apps, digital strategy, startups, accelerator, incubator, amsterdam, rotterdam, web application development, systems architecture">
        
        <link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style.css">
        
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-834340-4']);
            _gaq.push(['_setDomainName', 'jgroenen.nl']);
            _gaq.push(['_trackPageview']);
            
            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body itemscope itemtype="http://data-vocabulary.org/Person">
        <div class="showoff no-mobile no-print"></div>
        <div class="wrapper">
            <header>
                <h1 itemprop="name">Johan Groenen</h1>
                <h2 class="no-print" itemprop="title">innovatie(&)strategie</h2>
                <img class="photo no-print" src="img/linkedin.jpg" alt="">
                <h3 class="no-print">Co-founder en strateeg @TiltShift. Fellow Code for NL / Code for Europe.</i></h3>
                <section class="contact">
                    <div>
                        <img class="icon" src="img/home.png" alt="Adres: " style="float: left">
                        <p itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address" style="float: left; margin: 6px 4px 0; padding-top: 6px">
                            <span itemprop="street-address">Burg. de Joss. de Jongln. 8</span><br>
                            <span itemprop="postal-code">3042 NH</span> <span itemprop="locality">Rotterdam</span>
                        </p>
                        <p style="clear: both"></p>
                    </div>
                    <p>
                        <img class="icon" src="img/mobile.png" alt="Telefoon: ">
                        <a href="tel:0641518018">06 415 18 018</a>
                    </p>
                    <p>
                        <img class="icon" src="img/email.png" alt="E-mail: ">
                        <a href="mailto:mail@jgroenen.nl">mail@jgroenen.nl</a>
                    </p>
                    <p>
                        <img class="icon" src="img/connected.png" alt="LinkedIn: ">
                        <span style="display: inline-block; width: 210px; vertical-align: top; padding-top: 6px">
                            <a style="line-height: 1.4em" href="http://www.linkedin.com/in/jgroenen/nl">www.linkedin.com/in/jgroenen</a>
                            <a  class="no-print" style="line-height: 1.4em" href="https://twitter.com/jpagroenen"><br>www.twitter.com/jpagroenen</a>
                            <!--<a  class="no-print" style="line-height: 1.4em" href="http://apitecture.blogspot.nl/"><br>apitecture.blogspot.nl</a>-->
                            <a  class="no-print" style="line-height: 1.4em" href="https://github.com/jgroenen"><br>github.com/jgroenen</a>
                        </span>
                    </p>
                    <p class="no-print no-mobile">
                        <a href="javascript:window.print()"><img class="icon" src="img/print.png" alt="Printen: ">print deze pagina</a>
                    </p>
                    <p>
                        <img class="icon" src="img/line-globe.png" alt="Website: ">
                        <a itemprop="url" href="http://www.jgroenen.nl">www.jgroenen.nl</a>
                    </p>
                </section>
                <img class="qr" src="img/qr.png" alt="">
            </header>
            <main>
                <section>
                    <h1><img class="icon" src="img/briefcase.png" alt="">Projecten</h1>
                    
                    <?php foreach ($data["projecten"] as $e) { ?>
                    <section class="ervaring">
                        <header>
                            <h2 itemprop="affiliation"><?=$e["bedrijf"]?></h2>
                            <h1><?=$e["project"]?></h1>
                            <p><?=$e["periode"]?></p>
                            <p><a href="<?=$e["link"]?>"><?=$e["link"]?></a></p>
                        </header>
                        <main>
                            <p><?=$e["omschrijving"]?></p>
                        </main>
                        <div class="clear"></div>
                    </section>
                    <?php } ?>
                </section>
                
                <section>
                    <h1><img class="icon" src="img/bookmark.png" alt="">Opleiding</h1>
                    
                    <?php foreach ($data["ervaring"] as $e) { ?>
                    <section class="opleiding">
                        <header>
                            <h2>Universiteit Leiden</h2>
                            <h1>Mastervakken Computer Science (Natural Computing)</h1>
                            <p>Leiden, 2008 - 2012</p>
                            <p><a href="http://natcomp.liacs.nl">natcomp.liacs.nl</a></p>
                        </header>
                        <main>
                            <p><i>Natural computing is de tak van informatica die zich bezig houdt met algoritmes geïnspireerd door natuurlijke processen en (emergente) intelligentie, zoals genetische algoritmes, neurale netwerken en Swarm Intelligence.</i></p>
                            <p>Vanwege het staken van mijn scriptie-onderzoek naar Distributed Particle Swarm Optimization heb ik de MSc-graad niet behaald. Ik heb wel alle mastervakken succesvol afgerond.</p>
                        </main>
                        <div class="clear"></div>
                    </section>
                    <?php } ?>
                    
                    <section class="opleiding">
                        <header>
                            <h2>Universiteit Leiden</h2>
                            <h1>Bachelor Computer Science</h1>
                            <p>Leiden, 2003 - 2008</p>
                            <p><a href="http://www.liacs.nl">www.liacs.nl</a></p>
                        </header>
                        <main>
                            <p><i>Computer Science, of Informatica, is de studie naar het optimaliseren van programmeertalen, datastructuren, algoritmes en hun samenhang.</i></p>
                            <p>Ik was speciaal geïnteresseerd in logica, speltheorie en kunstmatige intelligentie.</p>
                            <p>Daarnaast heb ik diverse extracurriculaire cursussen in psychologie, (taal)filosofie en muziekwetenschap gevolgd.</p>
                            <p>Ook was ik actief buiten de studie, onder meer als bestuurslid van studenten muziekgezelschap "Sempre Crescendo".</p>
                        </main>
                        <div class="clear"></div>
                    </section>
                    
                    <section class="opleiding">
                        <header>
                            <h2>Stedelijk College Eindhoven</h2>
                            <h1>VWO</h1>
                            <p>Eindhoven, 1994 - 2000</p>
                            <p><a href="http://www.stedelijkcollege.nl">www.stedelijkcollege.nl</a></p>
                        </header>
                        <main>
                            <p>NL, EN, WA, WB, BIO, SK, NA</p>
                        </main>
                        <div class="clear"></div>
                    </section>
                </section>
                
                <section style="page-break-before: always">
                    <h1><img class="icon" src="img/briefcase.png" alt="">Vrijwilligerswerk</h1>
                    <section class="ervaring">
                        <header>
                            <h2 itemprop="affiliation">Permanent Beta Rotterdam</h2>
                            <h1>Organisator</h1>
                            <p>2015 - heden</p>
                            <p><a href="http://www.permanentbeta.nl">www.permanentbeta.nl</a></p>
                        </header>
                        <main>
                            <p><i>Bridging brains, tech and culture</i></p>
                            <p>Permanent Beta is een nationale organisatie die mensen samenbrengt om kennis te delen over technologie, wetenschap en kunst. Wij organiseren regelmatig meetups waarbij vernieuwende denkers en doeners worden uitgenodigd om hun ideeën te delen voor een open publiek.</p>
                        </main>
                        <div class="clear"></div>
                    </section>
                    
                    <section class="ervaring">
                        <header>
                            <h2 itemprop="affiliation">CoderDojo Rotterdam</h2>
                            <h1>Mentor</h1>
                            <p>2015 - heden</p>
                            <p><a href="http://www.coderdojo.nl">www.coderdojo.nl</a></p>
                        </header>
                        <main>
                            <p><i>Bij CoderDojo kunnen kinderen van 7 t/m 17 jaar leren programmeren. Dit wordt helemaal gratis verzorgd door vrijwilligers.</i></p>
                            <p>Als mentor help ik de kinderen bij opdrachten. Ook bedenk en verzorg ik workshops in bijvoorbeeld html, css en javascript.</p>
                        </main>
                        <div class="clear"></div>
                    </section>
                    
                    <section class="ervaring">
                        <header>
                            <h2 itemprop="affiliation">Open Hack Rotterdam</h2>
                            <h1>Organisator</h1>
                            <p>2015 - heden</p>
                            <p><a href="http://www.openhack.nl">www.openhack.nl</a></p>
                        </header>
                        <main>
                            <p><i>Open Hack is een internationale meetup met een enkel doel: samen programmeren, maakt niet uit waaraan.</i></p>
                            <p>Ik organiseer een keer per twee maanden een Open Hack in Rotterdam, waar programmeurs met verschillende achtergronden en vaardigheden bij elkaar komen om samen nieuwe dingen te bouwen.</p>
                        </main>
                        <div class="clear"></div>
                    </section>
                </section>
                
                <section class="no-print">
                    <h1><img class="icon" src="img/configuration02.png" alt="">Skills</h1>
                    <p>
                        <ul>
                            <li class="tag">API architectuur</li>
                            <li class="tag">data services</li>
                            <li class="tag">web apps</li>
                            <li class="tag">Agile</li>
                            <li class="tag">Scrum projectmanagement</li>
                            <li class="tag">prototyping MVP</li>
                            <li class="tag">Lean Startup</li>
                            <li class="tag">teambuilding</li>
                            <li class="tag">productplanning</li>
                            <li class="tag">webapplicatie ontwikkeling</li>
                            <li class="tag">social media</li>
                            <li class="tag">online ads</li>
                            <li class="tag">SEO</li>
                            <li class="tag">analytics</li>
                            <li class="tag">service georienteerde architectuur</li>
                            <li class="tag">REST</li>
                            <li class="tag">requirements engineering</li>
                            <li class="tag">visualisatie</li>
                            <li class="tag">object georienteerd programmeren</li>
                            <li class="tag">MVC</li>
                            <li class="tag">natural computing</li>
                            <li class="tag">algoritmes</li>
                            <li class="tag">datastructuren</li>
                            <li class="tag">brainstorm</li>
                            <li class="tag">note taking</li>
                        </ul>
                    </p>
                </section>
                <section class="no-print">
                    <h1><img class="icon" src="img/next-item.png" alt="">Links</h1>
                    <p>
                        <h2>Blog</h2>
                        <ul>
                            <li><a href="http://apitecture.blogspot.com">APItecture blog</a>, wat ideetjes op een rij.</li>
                        </ul>
                        
                        <h2>Web apps</h2>
                        <ul>
                            <li><a href="http://www.vertrekvantreinen.nl">Vertrek van Treinen</a>, treintijden wapp.</li>
                            <li><a href="http://pitchdeck.apitecture.nl/">Pitchdeck</a>, pitchdeck generator.</li>
                            <li><a href="http://nokia.apitecture.nl/">Nokia composer</a>, old school Nokia 3310 ringtone composer.</li>
                            <li><a href="http://www.p1x.nl">Cards Against Humanity</a>, (a)sociaal party-kaartspel voor de mobiel.</li>
                        </ul>
                        
                        <h2>Organisatie</h2>
                        <ul>
                            <li><a href="http://www.apitecture.nl">APItecture</a>, data services en web apps.</li>
                            <li><a href="http://www.admoves.nl">admoves</a>, online conversies vanuit fysieke locaties.</li>
                            <li><a href="http://www.rotterdambeta.nl/">Permanent Beta</a>, <i>Bridging brains, tech and culture</i>.</li>
                            <li><a href="http://www.openhack.nl">Open Hack</a>, Hackathons in Nederland.</li>
                            <li><a href="http://www.everybit.nl">everybit</a>, creatieve digitale oplossingen.</li>
                        </ul>
                        
                        <h2>Under construction</h2>
                        <ul>
                            <li><a href="http://www.getupmagazine.nl">Get Up Magazine</a>, online glossy voor iedereen die meer uit het leven wil halen.</li>
                            <li><a href="http://www.educode.nl">EduCode</a>, coding workshops voor managers.</li>
                            <li><a href="http://www.anoniemannonu.nl">Anoniem Anno Nu</a>, online galerie voor onbekende kunstenaars.</li>
                        </ul>
                        
                        <h2>Ideeën</h2>
                        <ul>
                            <li><a href="http://www.wappslist.com">Wappslist</a>, online dashboard voor web apps.</li>
                            <li><a href="http://www.liberaalplatform.nl">Liberaal Platform</a>, partijoverstijgend platform voor Liberalisme in Nederland.</li>
                            <li><a href="http://www.rescale.eu">Rescale EU</a>, locale ecosystemen behouden in een globaliserende economie.</li>
                            <li><a href="http://www.smartcityalliance.eu">Smart City Alliance EU</a>, kennisdeling tussen slimme steden.</li>
                        </ul>
                    </p>
                </section>
            </main>
        </div>
    </body>
</html>
