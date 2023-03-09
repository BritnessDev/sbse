<?php 
function title(){return 'Ingénierie Du Batiment';}
function content(){ ?>
<style>
    .building_header {
        background-image: url(/cdn/building.jpg);
        background-size: cover;
    }

    .building_header h1 {
        color: #565656;
    }
</style>

<section class="service_header building_header">
    <div class="wrap">
        <h1>Ingénierie<br>Du Batiment</h1>
        <div class="services_header_block">
            <div class="service_header_block"><img src="/cdn/building1.png">
                <h3>INSPECTION PRE ACHAT</h3>
            </div>
            <div class="service_header_block"><img src="/cdn/building2.png">
                <h3>LOI 122 INSPECTION DE LA FAÇADE ET DU STATIONNEMENT</h3>
            </div>
            <div class="service_header_block"><img src="/cdn/building3.png">
                <h3>INSPECTIONS STRUCTURALE</h3>
            </div>
        </div>
    </div>
</section>

<div class="building_flex_one">
    <div class="building_flex_one_left"><img src="/cdn/building_flex_left.jpg"></div>
    <div class="building_flex_one_right">
        <div class="flex_box">
            <h3>Ingénierie du Bâtiment</h3>
            <p>Inspection Pre Achat, Inspection commerciale, résidentielle et Industrielle, Inspection des façades et
                garages intérieurs (Loi 122), Étude de fonds de prévoyance (Loi 16)</p>
            <a href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>contact" class="btn">Contactez Nous</a>
        </div>
    </div>
</div>

<div class="building_info">
    <div class="wrap box10">
        <div class="law122">
            <div class="law122_left">Loi 122</div>
            <div class="law122_right">Inspection des façades et garages intérieurs</div>
        </div>
        <p>Conformément au projet de loi 122 de la RBQ, le propriétaire d'un nouvel immeuble doit procéder à une
            inspection approfondie de la structure du garage souterrain nivelé dans les 12 à 18 mois suivant la fin de
            la construction.</p>
        <p>Par la suite, l'inspection doit également être effectuée tous les cinq ans suivant l'inspection initiale.
            Néanmoins, il va de soi que, dans le cas où un bâtiment présente des signes de détérioration pouvant
            entraîner un problème structurel dangereux, il doit être inspecté immédiatement.</p>
        <p>Ceci est particulièrement important dans les régions nordiques comme le Québec. Étant donné que les éléments
            structurels sont exposés au cycle de gel et de dégel ainsi qu'à des conditions qui peuvent accélérer la
            corrosion et la dégradation des composants structurels. Les voitures qui entrent dans le garage apportent
            avec elles une quantité importante de neige et de produits chimiques (sels) qui fondent une fois dans
            l'environnement plus chaud du parc de stationnement. L'eau salée fondue peut alors s'infiltrer dans les
            éléments structurels et accélérer considérablement leur corrosion et leur dégradation, diminuant ainsi leur
            capacité structurelle.</p>
        <p>Le projet de loi vise à remédier à ce problème en exigeant qu'un ingénieur membre de l'OIQ effectue une
            inspection approfondie de tout parc de stationnement comprenant au moins une dalle qui ne repose pas sur le
            sol afin d'évaluer l'état des éléments structuraux et d'identifier toute déficience des systèmes en place
            pouvant entraîner des défauts et des conditions dommageables.</p>
        <p>Les inspecteurs en bâtiment et l'équipe d'ingénierie structurale du Groupe SBSE (membres de l'OIQ),
            effectuent des inspections de stationnement souterrain à Montréal et dans les environs,</p>
        <p>Le rapport d'inspection du stationnement souterrain Bill 122 fourni par nos ingénieurs certifiés par l'OIQ
            comprend une description détaillée des observations, une évaluation des éléments structuraux et des
            recommandations pour corriger les défauts observés.</p>
        <p>Le rapport fourni est un rapport détaillé conforme aux exigences de la RBQ signé par un ingénieur membre de
            l'Ordre des ingénieurs du Québec (OIQ) et comprendra les éléments suivants :</p>

        <div class="info_padding">
            <p>&bullet; Une description du stationnement</p>
            <p>&bullet; Les déficiences observées et l'évaluation de leur niveau d'impact</p>
            <p>&bullet; La recommandation des travaux correctifs nécessaires</p>
            <p>&bullet; Les délais recommandés pour la réalisation des travaux</p>
            <p>&bullet; Les procédures relatives aux conditions dangereuses (au besoin)</p>
            <p>&bullet; Une annexe avec des photos des déficiences observées et un plan de localisation pour identifier
                les zones affectées.</p>
        </div>
        <p>Groupe SBSE Ingénieurs en structure offre ses services pour l'inspection des stationnements de la Loi 122
            dans la grande région de Montréal incluant Laval, Longueil, Brossard, Ville Saint-Laurent, Mont Royal, Côte
            Saint Luc, Hampstead, West Island, Terrebonne, Repentigny, Saint-Jérôme, Blainville Mirabel,
            Dollard-des-Ormeaux, Québec, Sherbrooke, Trois-Rivières, Chicoutimi, Saint-Jérôme, Saint-Jean-sur-Richelieu,
            Châteauguay, Drummondville et sont disponibles pour se rendre dans les régions plus éloignées de la province
            de Québec.</p>


        <div style="text-align:center;"><a href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>contact" class="btn">Contactez
                Nous</a></div>
    </div>
</div>

<div class="building_flex_two">

    <div class="building_flex_two_left">
        <div class="flex_box">
            <h3>Inspection Pre Achat</h3>
            <p>Inspection Commerciale, Inspection Résidentielle, Ou Inspection Industrielle</p>
            <a href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>contact" class="btn">Contactez Nous</a>
        </div>
    </div>

    <div class="building_flex_two_right">
        <div class="flex_box">
            <h3>Loi 16</h3>
            <p>Étude de fonds de prévoyance</p>
            <a href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>contact" class="btn">Contactez Nous</a>
        </div>
    </div>
</div>



<?php } ?>