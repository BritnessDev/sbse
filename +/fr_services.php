<?php 
function title(){return 'Services';}
function content(){ ?>
<section class="services">
    <h3>Services proposés</h3>
    <p>Des solutions qui font une différence</p><a href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>contact"
        class="btn">Contact</a>
</section>

<section class="services_block">
    <div class="wrap">
        <div class="blck1"><img src="/cdn/service1.png">
            <h3>Ingénierie Environnementale</h3>
            <p>Évaluations Environnementales de Site Phase I (Phase 1), Caractérisation environnementale préliminaire
                Phase II (Phase 2), Caractérisation environnementale exhaustive Phase III (Phase 3), Réhabilitation
                Environnementale des terrains contaminée Phase IV (Phase 4)</p><a
                href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>ingénierie-environnementale" class="btn">En Savoir Plus</a>
        </div>
        <div class="blck1"><img src="/cdn/service2.png">
            <h3>Ingénierie du Bâtiment</h3>
            <p>Inspection pre achat, Inspection commerciale, résidentielle et Industrielle, Inspection des façades et
                garages intérieurs (Loi 122), Étude de fonds de prévoyance (Loi 16)</p><a
                href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>ingénierie-du-bâtiment" class="btn">En Savoir Plus</a>
        </div>
        <div class="blck1"><img src="/cdn/service3.png">
            <h3>Ingénierie Structurale</h3>
            <p>Conception de structure de bâtiments, Maisons résidentielles et rénovations, Structures industrielles,
                Inspections de Structure</p><a href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>ingénierie-structurelle"
                class="btn">En Savoir Plus</a>
        </div>
        <div class="blck1"><img src="/cdn/service4.png">
            <h3>Ingénierie Géotechnique</h3>
            <p>Géotechnique et géologie, Contrôle de la Qualité des matériaux, Forage Géotechnique</p><a
                href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>ingénierie-géotechnique" class="btn">En Savoir Plus</a>
        </div>
    </div>
</section>

<?php } ?>