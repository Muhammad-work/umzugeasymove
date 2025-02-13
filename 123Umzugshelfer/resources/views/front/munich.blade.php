@extends('layout.index')
@extends('front.nav')
@extends('front.footer')
@extends('front.move_company')

@section('front.home')
    <style>
        body {
            background: white;
        }
    </style>

    {{-- hero section --}}
    @yield('fornt.hero')
    {{-- hero section --}}


    {{-- Umzugsunternehmen Berlin content section --}}

    <section class="w-full h-auto bg-[#EEF4F7] px-4 md:px-6 py-12">
        <div class="w-full max-w-screen-lg mx-auto flex flex-col gap-6">
            <h1 class="text-center text-xl md:text-2xl lg:text-4xl text-[#34495E] font-bold">
                Umzugsunternehmen München
            </h1>
            <p class="text-lg text-[#34495E] leading-relaxed">
                Wir als Ihr günstiges Umzugsunternehmen München wissen, dass ein Wohnortwechsel nach München nicht nur Zeit
                und Geld kostet, sondern auch eine Menge Stress verursacht und durch die anstehenden Aufgaben Ihre Nerven
                strapaziert. Da ist es nachvollziehbar, dass sich die meisten Menschen bei Umzügen für eine gute,
                professionelle Umzugsfirma in München und Umgebung entscheiden. Grundsätzlich gilt, dass eine zuverlässige
                Umzugsplanung und Organisation im Voraus, die Durchführung am Umzugstag erheblich erleichtern. Dabei spielt
                es keine Rolle, ob Sie den Umzug selbst durchführen oder eine für Umzüge jeder Art professionelle
                Umzugsfirma engagieren. Wenn Sie rechtzeitig anfangen, dann steht einem positiven Umzugserlebnis nichts mehr
                im Weg.
            </p>
            <p class="text-lg text-[#34495E] leading-relaxed">
                Sollten Sie Ihren Umzug innerhalb von München planen oder von außerhalb nach München ziehen, geben wir Ihnen
                gerne auch einige Umzug Tipps und nachfolgend geben wir die Informationen, wo Sie Ihre Anmeldung, Abmeldung
                oder Ummeldung für Umzüge durchführen können. Egal, ob Sie dies Online durchführen, postalisch verschicken
                oder direkt Vorort erledigen, müssen Sie eine Wohnungsgeberbestätigung Link vorlegen oder übermitteln.
            </p>
        </div>
    </section>

    {{-- Umzugsunternehmen Berlin content section --}}


    {{-- Günstiges Umzugsunternehmen Berlin section --}}

    <section class="w-full h-auto bg-[#FFFFFF] py-10">
        <div class="w-full max-w-screen-lg mx-auto px-4 md:px-6 py-8 rounded-lg">
            <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Umzugsangebot München</h2>
            <p class="text-base md:text-lg leading-relaxed mt-4">
                Durch unser Umzugsangebot an günstigen extra Leistungen für Umzüge, ist es uns als Ihre zuverlässige
                Umzugsfirma möglich, Ihnen Ihr individuelles und günstiges Angebot München für Ihren Umzug zusammenzustellen
                und so die Umzugskosten zu senken. Ungeachtet, ob Sie einen privaten Umzug, einen gewerblichen Umzug, einen
                Büroumzug oder vielleicht einen Seniorenumzug planen, durch unser vielfältiges Angebot an individuellen
                Umzügen und günstigen Serviceleistungen, können wir Ihnen ein persönliches Umzugsangebot zusammenstellen.
                Durch unser Angebot an Serviceleistungen Umzüge München, Bayern und bundesweit, bekommen Sie von uns eine
                100 prozentige Zufriedenheitsgarantie. Auch wenn Sie einen Umzug von München nach Augsburg, Rosenheim,
                Ingolstadt, Dachau, Landshut, Nürnberg oder Passau planen, unsere Umzugshelfer werden Ihren Umzug so
                reibungslos wie möglich gestalten, selbst wenn es sich um einen Eilumzug handelt. Setzen Sie sich bitte,
                sobald Ihr Umzugstermin feststeht, mit uns in Verbindung und lassen Sie sich von einem unserer freundlichen
                Umzugsberater Ihr günstiges unverbindliches Festpreisangebot und detaillierte Informationen zu unseren
                gesamten Dienstleistungen für Umzüge geben. Er wird Ihnen eine umfassende Beratung zur Verfügung stellen.
            </p>
            <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Umzüge München günstig</h2>
            <p class="text-base md:text-lg leading-relaxed mt-4">Die suche nacth Umzüge München günstig kann von Kunde zu
                Kunde sehr unterschiedliche Gründe haben. Es gibt sicherlich einige Optionen, die auf Ihre individuellen
                Bedürfnisse bei Umzügen abgestimmt sind. Die Entscheidung ist getroffen und Sie planen einen Ortswechsel.
                Der eigentliche Hauptgrund eines Umzugs ist nicht ein, wie die meisten denken, gewerblicher, sondern mehr
                der Wille zur Steigerung der Lebensqualität. Für uns war diese Tatsache dann ausschlaggebend, unseren Kunden
                diese Steigerung bereits vor Ihrem Umzug zu ermöglichen. Selbstverständlich möchte jeder Mensch sich mal um
                nichts kümmern müssen. Aus diesem Grund haben wir als Ihr professionelles und zuverlässiges
                Umzugsunternehmen München unsere Angebote mit unseren fachgerechten Serviceleistungen bei Umzügen so
                optimiert, dass unsere Kunden einen stressfreien und entspannten Umzug genießen können und Ihre Umzugskosten
                gesenkt werden.</p>

            <img class="w-full max-w-3xl mx-auto mt-6 rounded-lg shadow-md"
                src="{{ asset('storage/img/img-2.jpeg')  }}" alt="Umzugsunternehmen Berlin">

            <div class="mt-8 flex flex-col gap-8">
                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Umzugsservice München</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Wenn Sie von unseren preisgünstigen Umzugsservice München und Bayern gebrauch machen möchten, haben
                        Sie auch die Möglichkeit, verschiedene Leistungen zu nutzen, dazu gehört der Ein und Auspackservice
                        oder der Montageservice. Dadurch verläuft der Transport sicher und problemlos. Darüber hinaus
                        bringen wir auf Wunsch alle wichtigen Umzugsmaterialien mit. Auf Wunsch bieten wir ihnen auch um
                        Kosten zu sparen, als Umzugsservice unsere günstige Entrümpelung an. Diesen Service finden Sie unter
                        anderem in unserem Angebot wieder, denn wir als Umzugsfirma gehen professionell vor und lassen keine
                        Wünsche offen. Mit unserer Hilfe als günstiges Umzugsunternehmen München ziehen Sie schnell und
                        sicher um. Wir arbeiten zuverlässig und fachgerecht, damit Ihr Umzug problemlos bewältigt werden
                        kann. Wir helfen Ihnen gerne innerhalb München und Umgebung allerdings ist auch ein Umzug innerhalb
                        Deutschland oder Europa kein Problem für uns. Damit der Umzugswagen und der eventuell benötigte
                        Möbellift am Tag des Umzugs auch problemlos und fachgerecht vor der alten und der neuen Lokation
                        halten können, sorgen wir gerne auch für die nötigen Halteverbotsschilder. In unserem
                        Transportfahrzeug sind Ihre Möbel vollkommen sicher, bis der Umzug beendet wurde. Durch unser
                        Angebot an günstigen Serviceleistungen Umzüge München, Umgebung und bundesweit, bekommen Sie von uns
                        eine 100 prozentige Zufriedenheitsgarantie. Setzen Sie sich bitte, sobald Ihr Umzugstermin
                        feststeht, mit uns in Verbindung und lassen Sie sich von einem unserer professionellen Umzugsberater
                        Ihr unverbindliches Umzugsangebote und detaillierte Informationen zu unseren günstigen
                        Dienstleistungen für Umzüge geben. Im Folgenden werden wir Ihnen die beliebtesten Serviceleistungen
                        nochmal auflisten.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Verpackungsmaterialien München</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Das wichtigste bei Umzügen ist, dass das Hab und Gut auch sicher und zuverlässig am Wunschort
                        ankommt, unser Umzugsservice Verpackungsmaterialien München ist dafür von besonderer Bedeutung. Für
                        die Umzugsrofis Ihrer Umzugsfirma in München und Umgebung, ist das natürlich auch kein Problem.
                        Bevor Sie sich um günstige Umzugskartons und besonders günstige Verpackungsmaterialien für Umzüge
                        selbst kümmern, besprechen Sie mit Ihrem persönlichen Umzugsberater was Sie genau für den Umzug
                        München und Umgebung an Umzugsmaterialien brauchen und wir erledigen den Rest für Sie. Da unserem
                        Umzugsunternehmen die Sicherheit Ihrer Güter sehr am Herzen liegt und wir den bestmöglichen Service
                        für Umzüge bieten wollen, haben wir unser Sortiment an günstigen Umzugsmaterialien für Umzüge aller
                        Art erweitert. Alle Habseligkeiten, Gegenstände und Möbel können somit sicher für Umzüge verpackt
                        und von A nach B sicher transportiert werden. Auf Wunsch bringen unsere Möbelpacker Allzweckdecken,
                        Umzugskartons, Kleiderboxen, Bücherboxen, Klebebänder, Ecken- und Kantenschutz, Luftpolsterfolie und
                        Stretchfolie mit.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Einpackservice Umzüge München
                    </h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Mit der Buchung von unserem Einpackservice Umzüge München und ganz Bayern sind Sie auf der sicheren
                        Seite. Auch mit der besten Planung für einen Umzug München in Eigenregie, kann es vorkommen, dass am
                        Umzugstag die Helfer aus dem Familien- und Freundeskreis aus unterschiedlichen Gründen ausfallen.
                        Gerade bei Eilumzügen kann das zu erheblichen Problemen führen. Unsere freundlichen Umzugshelfer
                        packen auf Wunsch Ihr gesamtes Hab und Gut schnell, preiswert und sicher ein und wenn Sie es möchte,
                        selbstverständlich in der neuen Wohnung auch fachgerecht wieder aus. Auch um die fachgerechte und
                        günstige Umzugsverpackung würden unsere professionellen Umzugshelfer sich auf Wunsch gerne kümmern


                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Montageservice München</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Bei Umzügen ist das Ab- und Aufbauen schwerer und sperriger Gegenstände als Aufgabe ihrer
                        Umzugshelfer nicht zu unterschätzen, aus diesem Grunde bieten wir Ihnen unseren professionellen
                        Montageservice München an. Unsere professionellen und freundlichen Monteure bauen diese bei Umzügen
                        für Sie innerhalb kurzer Zeit ab und anschließend nach Ankunft gerne wieder auf. Falls Sie Ihre
                        Einbauküche mitnehmen möchten und diese nicht die Maße Ihrer alten Küche hat, können Sie mit Ihrem
                        persönlichen Umzugsberater, nach Übersendung von Bildern Ihrer Einbauküche, eine Planung über einen
                        günstigen Umbau erstellen. Bei Umzügen können unser Küchenmonteure den Ab- und Aufbau fachgerecht
                        für Sie durchführen.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Möbellift München</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Auch unser Service günstiger Möbellift München steht ihnen bei Bedarf zur Verfügung. Einige
                        Gegenstände (Kühlschrank, Waschmaschine, Trockner, Spülmaschine) im Haushalt, erschweren den
                        Transport für die Möbelpacker über enge und schmale Treppenaufgänge bei Umzügen und wenn zu dem auch
                        noch Personenlastaufzüge fehlen, ist es fast unmöglich für die Umzugshelfer, die Güter unbeschädigt
                        ins Fahrzeug zu befördern. In diesen Fällen empfehlen wir bei Umzügen als Profis einen günstigen
                        Umzugslift, auch Außenaufzug oder Möbelaufzug genannt, der die Sachen von außen ins Freie nach unten
                        transportiert. Hierbei sollte man beachten, dass ein ausreichend großer Stellplatz vorhanden sein
                        muss. Wir empfehlen deshalb die Beantragung einer Halteverbotszone für Umzüge.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Halteverbotszone Umzug München</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Gerade wenn Sie bei Ihrem Umzug München und Umgebung einen Möbellift nutzen, empfehlen wir die
                        Beantragung einer Halteverbotszone Umzug München. Derzeit sind in München 8,17 Millionen offiziell
                        zugelassen Fahrzeuge auf den Straßen und diese Tatsache kann schnell neben Verkehrsbehinderungen
                        auch zu Parkplatzmangel speziell bei Umzügen führen. Damit wir dies rechtzeitig verhindern können
                        und um Ihren Umzug schnell und effektiv abwickeln zu können, empfehlen wir als Ihre günstigen
                        Umzugshelfer für den Tag des Umzugs frühzeitig ein Halteverbot für Umzüge bei der zuständigen
                        Behörde zu beantragen. Beachten Sie hierbei die Vorlaufzeit für die Beantragung einer
                        Halteverbotszone von mindestens zwei Wochen. Für eine individuelle Beratung stehen wir ihnen
                        jederzeit zur Verfügung, es wäre nur schön wenn Sie sich für Ihr aktuelles Angebot rechtzeitig bei
                        uns melden.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Möbeleinlagerung München</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Aus verschiedenen Gründen kann eine Möbeleinlagerung München benötigt werden. Wir haben des Öfteren
                        erlebt, dass bei Umzügen ungeplante Vorkommnisse den schnellen Einzug in die neue Wohnung verzögern
                        können. In solchen Fällen haben wir ausreichend Lagerfläche, um Ihr Hab und Gut bei uns günstig
                        zwischenzulagern. Das vereinfacht Ihnen evtl. anstehende Renovierungs- oder Sanierungsarbeiten und
                        Ihre Güter werden sicher verwahrt.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Haushaltsauflösung München</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Wenn Sie eine Zusammenführung von zwei Haushalten planen oder im schlimmsten Fall, wegen einem
                        Todesfall innerhalb der Familie, eine Haushaltsauflösung München nötig ist, übernehmen wir bei
                        Umzügen die Entrümpelung und Sperrmüll Entsorgung der Güter für einen günstigen Preis. Auch werden
                        unser Umzugshelfer, gerade in diesem Falle der Haushaltsauflösung, natürlich besonders professionell
                        und behutsam vorgehen. Für eine weitere Beratung steht Ihnen Ihr persönlicher Umzugsberater gerne
                        zur Verfügung.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold text-center">Fragen Sie noch heute nach Ihrem individuellen Angebot</h2>
                </div>
            </div>
        </div>
    </section>

    {{-- Günstiges Umzugsunternehmen Berlin section --}}
@endsection
