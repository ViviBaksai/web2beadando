@extends('layout-main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div id="page-introduction">
                <h1 class="mb-3">Rövid áttekintő</h1>
                <p>A <strong>Nemzeti Bajnokság</strong>, más néven <strong>NB I</strong>, a magyar labdarúgó-bajnokság legmagasabb szintje. A liga hivatalos elnevezése az OTP Bank Liga, melyet a legnagyobb szponzora után kapott. Az UEFA jelenlegi (2023) besorolása alapján a 25. helyen áll.</p>
                <p>A bajnokságban tizenkét csapat mérkőzik meg egymással háromszor. Egyszer itthon, egyszer idegenben, a harmadik meccset pedig abban a stadionban játsszák, ahol az utolsó meccset nem játszották. A szezon végén az élvonal az UEFA Bajnokok Ligája selejtezőjébe, a második és a harmadik helyezett pedig a Magyar Kupa győztesével együtt az UEFA Európa Konferencia Liga selejtezőkörébe kerül. Az alsó két klub kiesik a másodszintű Nemzeti Bajnokság II-be, helyére a győztes és az NB2 második helyezettje kerül.</p>
                <p>Amennyiben regisztrált felhasználónk, <strong> szerkesztheti a tabella adatait (forrás: NB1 adatbázis)</strong> és
                    játékosokat.</p>
                <p>Az oldalon található egy részletes <strong> kereső </strong>, amivel születési dátumok közötti
                    intervallumra
                    szűrve keresheti az adott csapat játékosait, melyet a végén <strong> PDF formátumban
                        letölthet.</strong></p>
            </div>
        </div>
    </div>
    <hr>
    <section id="hirek">
        <h1 class="mb-4 mt-5">Hírek</h1>
        <article>
            <h4 class="news-title">LŐW ZSOLT A MAGYAR FUTBALLT ÉS A SZURKOLÓKAT IS MÉLTATTA</h4>
            <div class="news-body">
                <img width="300" src="{{ asset('img/elso_cikk.jpg') }}" alt="Low Zsolt">
                <p>A Bayern München másodedzője, Lőw Zsolt a közmédiának adott interjújában a bajor sztárklub céljai mellett a magyar válogatottról is beszélt a Kossuth Rádióban. A 44 éves szakembert elsőként Franz Beckenbauerről kérdezték.</p>
                <p>„Óriási személyiséget és nagyon jó embert veszített Németország. Ahogyan Uli Hoeness és Karl-Heinz Rummenigge mondta, nemcsak egy barátot veszítettek el, hanem a Bayern-család oszlopos tagját és ikonikus személyiségét.”</p>
                <p>A német élvonal 2. helyén álló Bayern München a Hoffenheim elleni 3-0-s győzelemmel kezdte a tavaszi Bundesliga-szezont és vasárnaptól csütörtökig Portugáliában edzőtáborozik. Lőw és a csapat célja, hogy megelőzzék a jelenlegi éllovas Bayer Leverkusent.</p>
                <p>Lőw elmondása szerint több lehetősége is volt, hogy vezetőedzőként bizonyíthasson, hiszen többször megkeresték az elmúlt években top bajnokságok csapatai, de még nem érezte úgy, hogy ennek eljött az ideje.</p>
            </div>
        </article>
        <article>
            <h4 class="news-title">BUNDESLIGA: WILLI ORBÁN VISSZATÉRT, DE ÖTÖT KAPOTT A LIPCSE</h4>
            <div class="news-body">
                <img width="300" src="{{ asset('img/masodik_cikk.jpg') }}" alt="">
                <p>A Bundesliga 19. fordulójának rangadóján a tabella 3. helyén álló Stuttgart a 4. RB Leipziget fogadta. Gulácsi Péter mellett már Willi Orbán is ott volt a lipcseiek meccskeretében.</p>
                <p>A 12. percben a hazai szurkolók teniszlabdákkal árasztották el a pályát. A 23. percben Simakan kezezett a tizenhatoson belül, a megítélt büntetőt Millot higgadtan lőtte a hálóba, 1-0. Hat perccel később Undav használta ki a Leipzig védelmi hibáját, és duplázta meg a Stuttgart előnyét, 2-0. Alig telt el másfél perc, máris jött a szépítőgól: Raum szöglete után Sesko fejelte közelről a kapuba a labdát, 2-1.</p>
                <p>A második félidő elején Leweling növelte ismét kétgólosra a hazaiak előnyét: Vagnoman fejesét kotorta a hálóba 3-1. Az 55. percben pazar góllal szépített a Leipzig, Openda tekert a hosszú sarokba, 3-2. Újabb két perc elteltével Udvav fejjel volt eredményes, 4-2.</p>
                <p>A 75. percben feltette a koronát saját és csapata teljesítményére a Brighton kölcsönjátékosa, Undav mesterhármasával eldőlt a meccs, 5-2. A 85. percben pályára lépett Willi Orbán, de már nem tudott segíteni csapatán. Az RB Leipzig a Frankfurt és a Leverkusen után zsinórban harmadszor szenvedett vereséget közvetlen riválistól.</p>
                

            </div>
        </article>
        <article>
            <h4 class="news-title">GÓLÖZÖN LIPCSÉBEN, AZ UTOLSÓ PERCBEN JÖTT A CSATTANÓ</h4>
            <div class="news-body">
                <img width="300" src="{{ asset('img/harmadik_cikk.jpg') }}" alt="">
                <p>A Bundesliga 18. fordulójának szombat esti mérkőzésén a tabella negyedik helyén álló RB Leipzig látta vendégül a listavezető Leverkusent. Willi Orbán még nem volt ott a keretben, de ismét Gulácsi Péter volt a hazaiak cserekapusa.</p>
                <p>A lipcseiek fantasztikusan kezdték a mérkőzést, nem hagyták kibontakozni az éllovast.</p>
                <p>Már a 7. perc végén Sesko remek cselei után Schlager ívelt Simons lábára, aki pazar labdaátvétel után a hálóba lőtt, 1-0. A 17. percben Grimaldo egyenlíthetett volna, de Blaswich nagyot védett. A másik oldalon is kapusbravúrok: Simakan próbálkozásai után. A második félidő második percében Grimaldo lapos beadása a Frimpong helyére kényszerből beállt Tellát találta meg, aki közelről kiegyenlített, 1-1.</p>
                <p>Közel tíz perccel később Stanisic lövését védte Blaswich, a vendég szöglet után azonban a Leipzig indított ellentámadást és Olmo remek passza után Openda nem hibázott, 2-1. Néhány perccel később egy hatékony szögletet végzett el a Leverkusen: Tah fejelt közelről a kapuba, 2-2.</p>
                <p>A rendes játékidő letelte után egy újabb szöglet után volt eredményes a listavezető, a 22 éves Hincapie robbant be és nyerte meg a meccset a vendégeknek.</p>
            </div>
        </article>
    </section>
@endsection
