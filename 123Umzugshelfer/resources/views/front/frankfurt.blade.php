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
                Umzugsunternehmen Frankfurt am Main
            </h1>
            <p class="text-lg text-[#34495E] leading-relaxed">
                Wer sich entscheidet nach Frankfurt am Main umzuziehen, ist bei dem Umzugsunternehmen Frankfurt am Main
                bestens aufgehoben, mit einem umfangreichen Umzugsservice und er weiß, dass diese Stadt nicht nur eine
                Bankenmetropole ist. Als größte Stadt Hessens, hat Frankfurt am Main viel mehr zu bieten. Kaum glaubt man
                die Stadt zu kennen, entdeckt man komplett neue Seiten. Denn diese Stadt lebt. Wenn Sie nicht gerade aus
                beruflichen Gründen nach Frankfurt am Main oder Umgebung umziehen, ist ein weiterer Hauptgrund die
                gesteigerte Lebensqualität. Bis man jedoch die neu gewonnene Lebensqualität genießen kann, ist im
                Allgemeinen die Umzugsphase eine etwas stressige Zeit. Genau da kommen wir als Umzugsunternehmen Frankfurt
                am Main ins Spiel und übernehmen alle anfallenden Aufgaben von A bis Z und sorgen für den sicheren Transport
                Ihrer Umzugsgüter aus Ihrer alten Wohnung in Ihr neues Heim.Sie können währenddessen Ihre Behördengänge
                organisieren und Ihren Papierkrieg bewältigen. Wir, als Ihre Umzugsfirma, haben Ihnen hier zusätzlich die
                Bürgerbüros der verschiedenen Stadtbezirke aufgelistet, wo Sie Ihre An-, Ab- und Ummeldungen durchführen
                können Link_ Bürgerämter | Stadt Frankfurt am Main. Informieren Sie sich bitte vorab, ob Sie bei der
                persönlichen Vorsprache einen Termin vereinbaren müssen oder nicht. In manchen Fällen können Sie diese
                Meldungen auch Online durchführen.
            </p>
        </div>
    </section>
    {{-- Umzugsunternehmen Berlin content section --}}

    {{-- Günstiges Umzugsunternehmen Berlin section --}}
    <section class="w-full h-auto bg-[#FFFFFF] py-10">
        <div class="w-full max-w-screen-lg mx-auto px-4 md:px-6 py-8 rounded-lg">
            <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Umzugfirma in Frankfurt am Main</h2>
            <p class="text-base md:text-lg leading-relaxed mt-4">
                Unsere professionelle Umzugsfirma in Frankfurt am Main bietet einen erweiterten und optimierten
                Umzugsservice, der durch unsere langjährigen Erfahrungen mit Umzügen auf die individuellen Bedürfnisse
                unserer Kunden abgestimmt wurde. Sie haben die Möglichkeit von unserem Umzugsservice, den unsere Umzugsfirma
                anbietet, zu profitieren und können somit die anfallenden Aufgaben unseren professionellen Umzugshelfern
                überlasse, dies ist in Ihren Umzugskosten enthalten. Dies bietet gerade unseren arbeitstätigen Kunden, die
                täglich mindestens acht bis zehn Stunden inkl. Fahrtzeit außer Haus sind, einen großen Vorteil bei der
                Umzugsplanung. Sobald wir Ihre Kontaktdaten, Start- und Zieladresse und Umzugsdatum im System erfasst haben,
                wird eine detaillierte Auflistung Ihrer Umzugsgüter im System durch Ihren persönlichen Umzugsberater,
                unserer Umzugsfirma, erstellt. Machen Sie sich vorher eine Checkliste, was alles auf der Umzugsgutliste
                eingetragen werden soll. Unser Umzugsunternehmen bietet bei einem Klaviertransport speziell ausgebildete
                Umzugshelfer für den fachgerechten Transport. Sie werden zusätzlich über den weiteren Verlauf informiert und
                Ihr persönlicher Umzugsberater beachtet im Vorfeld bereits alle Eventualitäten und Umstände, damit ein
                reibungsloser und sorgenfreier Ablauf Ihres Umzugs mit unserem Umzugsunternehmen gewährleistet wird.
            </p>

            <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Umzugsservice Frankfurt am Main</h2>

            <img class="w-full max-w-3xl mx-auto mt-6 rounded-lg shadow-md" src="{{ asset('storage/img/img-14.PNG') }}"
                alt="Umzugsunternehmen Berlin">

            <div class="mt-8 flex flex-col gap-8">
                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Transportversicherung für Ihre Umzugsgüter
                        Frankfurt am Main</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Die Transportversicherung ist eines unserer wichtigsten Umzugsservices für Ihre gesamten
                        Umzugsgüter, die wir für Sie transportieren, dies ist einer der wichtigsten Services bei Umzügen.
                        Daher ist es für unser Umzugsunternehmen sehr wichtig, dass wir eine detaillierte Auflistung Ihres
                        Umzugsgutes erhalten. Sie ist unter anderem auch für die Beladung am Umzugstag ausschlaggebend.
                        Unser Umzugsunternehmen trifft unsererseits alle notwendigen Vorsichtsmaßnahmen für Ihren Umzug,
                        jedoch sind Schäden nicht immer beim umziehen vermeidbar. Damit Sie im Schadensfall Anspruch auf
                        Schadensersatz haben, werden für die Transportversicherung notwendigen Informationen in Ihrer
                        Umzugsgutliste erfasst. Beachten Sie, dass nur die Umzugsgüter ins Transportfahrzeug beladen werden,
                        die tatsächlich auch im System aufgenommen wurden. Der Preis für die Transportversicherung ist in
                        Ihren Umzugskosten enthalten.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Verpackungsmaterial Frankfurt am Main</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Unser breites Sortiment an Verpackungsmaterialien für Ihre Umzugsgüter sorgt für erhöhten Schutz und
                        einen sicheren Umzug von Ihrer alten Wohnung in Ihr neues Heim, dies hat uns die langjährige
                        Erfahrung mit Umzügen gezeigt. Selbstverständlich kann man sehr vieles in Umzugskartons verstauen,
                        jedoch sollte vor allem Geschirr und Gläser gesondert zusätzlich verpackt werden. Wir, als Ihr
                        Umzugsunternehmen, bieten Umzugskartons in verschiedenen Größen, Kleiderboxen, Bücherkartons,
                        Gläserkartons, Luftpolsterfolie, Stretchfolie, Kantenschutz, Tragegurte, Packpapier, Wellpapier,
                        Klebebänder und Umzugsdecken. Selbst für sensible Gegenstände und Möbel können wir spezielle
                        Verpackungsmaterialien für Ihren Umzug anbieten. Die Preise dafür kann Ihnen Ihr persönlicher
                        Umzugsberater nennen und sind dann in den gesamten Umzugskosten enthalten.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Ein- und Auspackservice Frankfurt am Main</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Unser Ein- und Auspackservice ist wohl der meist begehrteste Service in unserem Umzugsunternehmen,
                        den unsere Kunden bei Ihrem Umzug in Anspruch nehmen, denn das Verpacken des gesamten Umzugsgutes
                        muss frühzeitig erledigt werden. Dies hat uns die langjährige Erfahrung mit Umzügen gezeigt. So
                        bleibt ausreichend Zeit für die wichtigeren Tätigkeiten, wie Behördengänge, Bewältigung des
                        Papierkriegs und das Ausmisten. Gerade das Ausmisten kann mehr Zeit beanspruchen. Gehen Sie Raum für
                        Raum durch und sortieren Sie alles aus, was Sie mindestens sechs Monate oder länger nicht mehr
                        benutzt oder gebraucht haben, dadurch können auch Umzugskosten eingespart werden. Am Umzugstag
                        werden unsere professionellen Umzugshelfer dann alle Umzugsgüter fachgerecht verpacken, ins
                        Transportfahrzeug beladen, entladen und wieder auspacken. Fragen Sie einfach Ihren persönlichen
                        Umzugsberater nach dem Preis für den Ein- und Auspackservice.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Halteverbotszone beantragen Frankfurt am Main
                        und Umgebung</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Die Halteverbotszone ist in Frankfurt am Main und Umgebung sehr wichtig. Bei rund 400 Tausend
                        zugelassenen Fahrzeugen in Frankfurt am Main, denn es kann neben erheblichen Verkehrsbehinderungen
                        auch zu eingeschränkten Parkmöglichkeiten kommen. Um vorab solche Probleme zu vermeiden, kann Ihr
                        Umzugsunternehmen Frankfurt am Main auf Wunsch für Sie die notwendige Halteverbotszone mit einer
                        Vorlaufzeit von mindestens zwei Wochen bei der zuständigen Behörde beantragen und am Umzugstag
                        aufstellen, wir als Ihre Umzugsfirma kümmern uns für Sie darum. Somit bleiben die Transportwege
                        zwischen Fahrzeug und Wohnung frei und unsere Umzugshelfer können uneingeschränkt Ihre Umzugsgüter
                        tragen. Fragen Sie Ihren persönlichen Umzugsberater nach dem Preis für die Halteverbotszone. Sie ist
                        ein wichtiger Bestandteil bei Umzügen in Großstädte.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Möbellift Frankfurt am Main</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Ein Möbellift ist sinnvoll, denn die Gegebenheiten mancher Treppenhäuser lassen einen schadenfreien
                        Transport nicht zu. Zudem sind Personenlastaufzüge nicht immer vorhanden. Die schweren und sperrigen
                        Umzugsgüter und Möbel müssen trotzdem befördert werden. Vielleicht sind Sie sogar im Besitz von
                        Antiquitäten, die nicht abgebaut werden können und nur in einem Stück transportiert werden müssen.
                        Genau in solchen Fällen eignet sich ein Möbellift am besten, den das Umzugsunternehmen Frankfurt am
                        Main auch im Angebot hat. All Ihre sensiblen, großen und / oder schweren Umzugsgüter und Möbel
                        können somit viel einfacher aus der Wohnung oder in die Wohnung befördert werden auch ohne Montage.
                        Dadurch können auch die Umzugskosten gesenkt werden. Fragen Sie einfach Ihren persönlichen
                        Umzugsberater nach den Preisen für den Möbellift. Ein weiterer Vorteil ist, dass das
                        Gesundheitsrisiko maximal reduziert wird. Dies hat uns die langjährige Erfahrung mit Umzügen
                        gezeigt.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Ab- und Aufbauservice Frankfurt am Main</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Wir zählen unseren Ab- und Aufbauservice während eines Umzugs eindeutig zu den zeitintensivsten
                        Tätigkeiten, dies hat die langjährige Erfahrung mit Umzügen gezeigt. Doch mittlerweile gehört der
                        Ab- und Aufbau von Möbeln zur täglichen Routine unserer Umzugshelfer, unserer Umzugsfirma. Zum einen
                        benötigen sie viel weniger Zeit für die Montage und zum anderen wissen sie genau, worauf es bei der
                        Montage ankommt. Sie besitzen professionelles Werkzeug und können daher innerhalb einer kurzen Zeit
                        alle Möbel ab- und wieder aufbauen. Dieser Service ist in Ihren Umzugskosten enthalten. Selbst einen
                        Umbau Ihrer Einbauküche kann das Umzugsunternehmen Frankfurt am Main im Rahmen unserer Möglichkeiten
                        planen und eine fachgerechte Montage durchführen. Um eine fachgerechte Planung frühzeitig zu
                        erstellen, benötigt Ihr persönlicher Umzugsberater lediglich Bilder Ihrer Einbauküche. Fragen Sie
                        einfach Ihren persönlichen Umzugsberater nach den genauen Preisen für den Ab- und Aufbauservice.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Entrümpelung und Entsorgung Frankfurt am Main
                    </h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Eine Entrümpelung oder Entsorgung gehört bei Umzügen dazu, auch dies gehört zu unserem
                        Umzugsservice, damit Sie sorgenfrei umziehen können. Als 123Umzugshelfer bieten wir zusätzlich
                        unseren Kunden im Zuge einer Haushaltsauflösung, nach einem Todesfall, einer
                        Familienzusammenführung, beim Umziehen des Bewohners in ein Pflegeheim oder bei dauerhaftem
                        Auslandsaufenthalt, die Entsorgung von wertlosen und unbrauchbaren Gegenständen an. Diese werden
                        ordnungsgemäß und fachgerecht als Sperrmüll auf dem zuständigen Recyclinghof entsorgt. Sie haben
                        auch die Option einmal jährlich Sperrmüll bei der Stadt anzumelden. Unsere Umzugshelfer achten
                        darauf, dass alles am vorgesehenen Platz zur Abholung bereitgestellt wird, dadurch können Sie auch
                        Ihre Umzugskosten senken. Selbstverständlich wird der noch brauchbare Hausrat an die gewünschte
                        Adresse des Kunden von uns transportiert. Sie haben den Vorteil, dass Sie während des Umzugschaos
                        mehr Zeit zum Durchatmen haben und wir, als Ihre Umzugsfirma, alle weiteren Aufgaben für Sie
                        erledigen. Die Preise für die Entrümpelung und Entsorgung erfragen Sie einfach bei Ihrem
                        persönlichen Umzugsberater.
                    </p>
                </div>

                <div>
                    <h2 class="text-[#073360] text-2xl md:text-3xl font-bold">Einlagerung Frankfurt am Main</h2>
                    <p class="text-base md:text-lg leading-relaxed mt-2">
                        Das Umzugsunternehmen Frankfurt am Main, kümmert sich auch um die Einlagerung Ihrer Umzugsgüter.
                        Wenn Sie für eine gewisse Zeit ins Ausland umziehen und eine Einlagerung für Ihre Umzugsgüter
                        benötigen, können wir Ihre Umzugsgüter für Sie kurzfristig, mittellang oder langfristig einlagern,
                        als Ihre Umzugsfirma kümmern wir uns für Sie darum. Wir, als Ihr Umzugsunternehmen, ermitteln anhand
                        des Volumens Ihrer Umzugsgüter die Kubikmeter, die Sie an Lagerfläche benötigen, ein wichtiger
                        Service bei großen Umzügen. Unsere Lagerräume besitzen die entsprechenden Lagerbedingungen, um Möbel
                        einzulagern. Wir achten hierbei vor allem auf die optimale Raumtemperatur und Sauberkeit, damit
                        keine Schäden an Ihren Umzugsgütern entstehen. Um Schimmel zu vermeiden, spielt die Temperatur und
                        die Luftfeuchtigkeit eine erhebliche Rolle, bei der Einlagerung von Möbeln. Gerade wenn Ihre
                        Umzugsgüter über einen bestimmten Zeitraum eingelagert werden, sind der Schutz und die Art der
                        Verpackungsmaterialien zu beachten. Für nähere Informationen und Preise steht Ihnen Ihr persönlicher
                        Umzugsberater während der Mietdauer jederzeit zur Seite. Die Preise dafür sind auch in Ihren
                        Umzugskosten enthalten
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- Günstiges Umzugsunternehmen Berlin section --}}
@endsection
