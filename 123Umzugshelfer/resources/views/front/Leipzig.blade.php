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
                Umzugsunternehmen Leipzig
            </h1>
            <p class="text-lg text-[#34495E] leading-relaxed">
                Wir, als Ihr Umzugsunternehmen Leipzig wissen, worauf es bei Umzügen in Leipzig ankommt. Egal, ob es sich um
                einen Firmenumzug, Privatumzug oder Seniorenumzug handelt, oder ob sogar ein europaweiter bzw.
                internationaler Umzug bevor steht, grundsätzlich ist die Vor- und Nacharbeit bei einem Umzug immer am
                aufwändigsten. Die neben der regulären Arbeit zu erledigenden Behördengänge, das Planen des ganzen Umzugs
                mit Erstellen der Umzugscheckliste, die Organisation der nötigen Hilfsmittel und Umzugshelfer, beanspruchen
                einen großen Teil der Zeit. Um Ihnen zumindest die Suche, falls Sie von außerhalb nach Leipzig zuziehen, zu
                erleichtern, finden Sie nachfolgend die Adressen der einzelnen Bürgerämter Leipzig:
            </p>
        </div>
    </section>

    {{-- Umzugsunternehmen Berlin content section --}}


    {{-- Günstiges Umzugsunternehmen Berlin section --}}

    <section class="w-full h-auto bg-[#FFFFFF] py-10">
        <div class="w-full max-w-screen-lg mx-auto px-4 md:px-6 py-8 rounded-lg">
            <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Günstiges Umzugsunternehmen Leipzig</h2>
            <p class="text-base md:text-lg leading-relaxed mt-4">
                Wir, als Ihr günstiges Umzugsunternehmen Leipzig, würden Sie gerne bei Ihrem Umzug nach Leipzig und Umgebung
                zuverlässig unterstützen. Mit uns als starken Umzugspartner an Ihrer Seite, können Sie einen entspannten und
                sorglosen Umzug in Leipzig genießen und sich gelassen um Ihre wichtigeren Angelegenheiten kümmern. Gerade
                die Planungs- und Vorbereitungsphase kann eine sehr stressige Zeit werden. Daher legen wir großen Wert auf
                Qualität und Service um für Sie diese stressige Phase so angenehm wie möglich zu gestalten. Ihre Umzugsgüter
                werden im Erstgespräch aufgenommen und im Anschluss die Maße hinzugefügt. Diese Daten werden erfasst, damit
                wir die richtige Fahrzeuggröße für Ihr Umzugsvolumen und die genaue Anzahl der Umzugshelfer planen können.
                Selbstverständlich steht Ihr persönlicher Umzugsberater für Fragen und Änderungswünsche bis ein Tag vor
                Ihrem Umzugstermin Ihnen mit Rat und Tat zur Seite.
            </p>

            <img class="w-full max-w-3xl mx-auto mt-6 rounded-lg shadow-md"
                src="{{ asset('storage/img/img-6.jpeg') }}"
                alt="Umzugsunternehmen Berlin">

            <div class="mt-8 flex flex-col gap-8">
                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Umzugskosten Leipzig</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Die Umzugskosten Leipzig dürfen natürlich auch nicht außer Acht gelassen werden. Die Frage „Was
                        sollte ein Umzug in Leipzig kosten?“ kommt den meisten Leute als erstes in den Sinn wenn ein Umzug
                        ansteht. Falls Sie Interesse haben uns als Ihr Umzugsunternehmen in Leipzig Ihren Umzug in Leipzig
                        anzuvertrauen, setzen Sie sich einfach telefonisch oder über die Chatfunktion der Webseite mit
                        unseren Umzugsberatern in Verbindung. Wir werden Ihnen gerne ein kostenloses Festpreisangebot
                        schriftlich per E- mail zusenden damit Sie die Umzugskosten vergleichen können.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Umzugsservice Leipzig</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Mit 123Umzugshelfer können Sie einen fachgerechten und professionellen Umzugsservice Leipzig mit
                        bester Qualität zu einem günstigen Preis genießen. Im Folgenden werden wir Ihnen unsere günstigen
                        und professionellen Dienstleistungen für Umzüge Leipzig und Umgebung gerne genauer erläutern. Gerne
                        wird Ihr Umzugsberater bei Interesse Ihnen ein kostenloses Festpreisangebot mit Ihren Umzugspreis
                        schriftlich per E- Mail zukommen lassen.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Halteverbotszone Leipzig</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Wir, als Ihr professionelles Umzugsunternehmen in Leipzig für Umzüge, empfehlen Ihnen, damit Sie
                        sorglos umziehen, die Beantragung einer Halteverbotszone. Circa 200 Tausend zugelassene Fahrzeuge in
                        Leipzig können zu eingeschränkten Parkplatzmöglichkeiten führen und dies erzeugt ungewollt
                        Einschränkungen und Behinderungen für Transportfahrzeuge. Um dies zu vermeiden und einen zuverlässig
                        reibungslosen Ablauf Ihres Möbeltransports zu gewährleisten, ist das Aufstellen einer
                        Halteverbotszone inkl. Genehmigung der Stadt zu empfehlen. Auf Wunsch beantragen wir als Ihre
                        professionellen Umzugshelfer die Beschilderung für Sie bei der zuständigen Behörde, bitte beachten
                        Sie dabei eine Vorlaufzeit von mindestens 14 Tagen.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Transportversicherung Umzug Leipzig</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Ein weiterer Grund, weshalb wir mehrmals mit Ihnen Ihre Umzugsgutliste durchgehen ist unser
                        Umzugsservice Transportversicherung Umzug Leipzig. Alle Habseligkeiten, die Sie bei Umzügen mit uns
                        transportieren lassen möchten, werden als Umzugsgutliste bzw. Umzugscheckliste an unseren
                        Versicherungspartner übermittelt. Falls Sie Ihren Umzug in oder nach Leipzig in Eigenregie
                        durchführen möchten, kommt keine Versicherung für den entstandenen Schaden auf. Dies ist ein
                        weiterer Vorteil, wenn Sie für Ihren Umzug eine professionelle Umzugsfirma engagieren. Sie sollten
                        jedoch darauf achten, dass nur die Gegenstände und Möbel ins Transportfahrzeug durch unsere
                        zuverlässigen Umzugshelfer beladen werden, die bei der Versicherung gemeldet wurden. Daher ist eine
                        detaillierte Auflistung Ihres Hab und Guts zwingend erforderlich. So können Sie im Falle eines
                        entstandenen Schadens bei Umzügen Schadensersatzforderungen an die Versicherung stellen. Bei Fragen
                        zu diesem Angebot, melden Sie sich bitte einfach telefonisch oder über das Kontaktformular bei
                        unseren Umzugsprofis.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Verpackungsmaterialien und Umzugskartons
                        Leipzig</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Es gibt für alle Haushaltsgegenstände verschiedene Umzugsmaterialien, die wir in unserem breiten
                        Sortiment an günstigen Verpackungsmaterialien und Umzugskartons Leipzig anbieten können. Spezielle
                        Luftpolsterfolie beispielsweise eignet sich hervorragend zum Einwickeln von Möbeln und großen
                        Küchengeräten. Unsere Kleiderboxen bieten ausreichend Stauraum für Ihre Kleidungen und haben den
                        Vorteil, dass Sie Ihre Garderobe einhängen können und in der neuen Wohnung nach Aufbau Ihres
                        Kleiderschranks knitterfrei wieder einräumen können. Stretchfolie hilft Polstermöbel zu schützen und
                        erleichtert das Tragen. Des Weiteren bieten wir Allzweckdecken, Bücherkartons, Kantenschutz,
                        Klebeband und Umzugskartons in verschiedenen Größen. Bitte fordern Sie bei Interesse einfach
                        telefonisch ein unverbindliches Angebot bei Ihrem Umzugsberater an
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Günstiger Ein- und Auspackservice Leipzig</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Ein weiterer Vorteil einer professionellen Umzugsfirma Leipzig ist, dass Sie anfallende Aufgaben mit
                        ruhigem Gewissen übergeben können, zum Beispiel durch unseren Umzugsservice günstiger Ein- und
                        Auspackservice Leipzig. Gerade während Privatumzügen kann es vorkommen, dass die fest zugesagte
                        Umzugshilfe vor oder am Umzugstag aus verschiedenen Gründen ausfällt und man vor einem ganzen Berg
                        Habseligkeiten steht, die noch nicht verpackt sind. Im Rahmen des Verpackungsservice packen unsere
                        zuverlässigen Fachkräfte in Ihrer alten Wohnung alles schnell fachgerecht ein und in Ihrem neuen
                        Heim auf Wunsch auch wieder fachgerecht aus. Falls Sie von diesem Umzugsservice Gebrauch machen
                        möchten, wird Ihr privater Umzugsberater ihnen gerne Ihr individuelles Umzugsangebot zukommen
                        lassen. Melden Sie sich einfach telefonisch oder über das Kontaktformular.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Günstiger Montageservice Leipzig</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Arbeiten wie Möbel zu demontieren oder nach Demontage wieder zu montieren, gehören bei Umzügen mit
                        123Umzugshelfer mit dem Service günstiger Montageservice Leipzig einfach zum Alltag und werden
                        fachgerecht schnell und zuverlässig von unseren Monteuren durchgeführt. Eine ruhige Hand, Erfahrung,
                        Qualität und natürlich Routine gehören für uns bei Umzügen dazu. Ihr Umzugsgut wird vor dem
                        Transport mit dem Umzugswagen ordentlich verpackt und durch geschultes Personal bewegt. Allein der
                        Gedanke an den Auf- und Abbau der Einbauküche oder Ihrer Schrankwand bereitet Ihnen schon
                        Umzugsstress? Dann sind Sie mit unseren umfangreichen Leistungen als Möbelspedition und
                        Möbelmonteure 123Umzugshelfer gut beraten. Auch wenn die vorhandene Einbauküche für die neuen vier
                        Wände angepasst werden muss, sind wir Ihr ihr professionelles Umzugsunternehmen Leipzig
                        Ansprechpartner für die Küchenmontage nach Maß. Über den perfekten Aufbau wird bereits beim Abbau
                        entschieden. Daher lohnt es sich, wenn Sie unser günstiges Angebot für die fachgerechte Möbelmontage
                        erfragen und in Kombination mit dem Transport für den Umzug buchen. Bitte beachten Sie dass für die
                        Küchenmontage im Voraus Bilder ihrer Küche benötigen.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Günstige Entrümpelung Umzug Leipzig</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Bei Umzügen ist die Vorplanungsphase eine gute Gelegenheit um von unserer Umzugsdienstleistung
                        günstige Entrümpelung Umzug Leipzig Gebrauch zu machen und nicht mehr benötigte Gegenstände, Möbel
                        und Geräte auszusortieren, gerade wenn ein Seniorenumzug bevorsteht. Nehmen Sie sich ausreichend
                        Zeit Ihre Räume durchzugehen und auszumisten. Sie werden sehen, wieviel sich über die gesamte Zeit
                        angesammelt hat und was Sie nicht mehr brauchen. Vielleicht können Sie einiges noch verschenken oder
                        auf dem Flohmarkt oder sogar über das Internet verkaufen und Ihr Budget für die Umzugskasse
                        verbessern. Viele Menschen würden vielleicht sogar noch sehr lange Freude an einigen Sachen haben.
                        Wir können aber auch am Umzugstag Ihren Sperrmüll schnell entsorgen, natürlich ordnungsgemäß. Achten
                        Sie darauf, dass Sie dies bei Ihrem Gespräch mit Ihrem zuverlässigen und persönlichen Umzugsexperten
                        für Umzüge angeben, ungeachtet ob es sich um einen vollständigen Privatumzug, einen Teilumzug,
                        Betriebsumzug oder Standardumzug handelt, damit die Planung vorbereitet werden kann.
                    </p>
                </div>
                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Umzugslift Leipzig</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Es kommt immer öfter vor, dass unsere Kunden sich für unseren Service Umzugslift mieten Leipzig
                        entscheiden, weil das reguläre transportieren großer und schwerer Güter durch die engen und schmalen
                        Gegebenheiten des Treppenhauses nicht möglich sind. Ein mobiler Umzugslift – auch Möbelaufzug oder
                        Außenaufzug genannt – erleichtert den zuverlässigen Kühlschranktransport bei Umzügen, bietet aber
                        auch schnelle Hilfe bei Transporten von Waschmaschinen, Spülmaschinen und Trocknern. Auch bei
                        Spezialtransporten wie zum Beispiel bei Klaviertransporten oder Objektumzügen wird das
                        Gesundheitsrisiko der Möbelpacker verringert. Wichtig für die professionelle Nutzung eines
                        Umzugslifts ist die ordnungsgemäße Absperrung um das Fahrzeug herum durch eine Halteverbotszone.
                    </p>
                </div>
                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Möbeleinlagerung Leipzig</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Ihr alter Mietvertrag ist ausgelaufen und der schnelle Einzug im neuen Heim verschiebt sich auf
                        Grund von Renovierungs- oder Sanierungsarbeiten, dann haben Sie immer noch die Möglichkeit, unsere
                        Möbeleinlagerung Leipzig bei Umzügen für Ihr gesamtes Hab und Gut zu nutzen. Auch wenn Sie einen
                        längeren Auslandsaufenthalt geplant haben und nicht wissen, wo Sie Ihre Sachen professionell und
                        zuverlässig deponieren können. Dabei spielt das Volumen Ihrer Güter keine Rolle, denn wir bieten
                        ausreichend Platz. Sie können sich jederzeit bei unseren Umzugsexperten über unsere
                        Lagerungsmöglichkeiten bei Umzügen in Ihrer Nähe erkundigen und ein Kostenloses Festpreisangebot
                        erhalten.
                    </p>
                </div>

                {{-- <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold text-center">Erkundigen Sie sich heute noch
                        nach einem individuellen Angebot</h2>
                </div> --}}
            </div>
        </div>
    </section>

    {{-- Günstiges Umzugsunternehmen Berlin section --}}
@endsection
