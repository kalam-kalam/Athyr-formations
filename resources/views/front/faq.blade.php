@extends('layout.navigation')
@section('content')

    <style>
        #banner {
            background-image: url("../assets/images/rechercher/recherche_banner.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 300px;
        }

        #footer {
            background-color: black;
        }
    </style>
    <div class="ariane" id="ariane_search">
            <a href="{{url('front/home')}}">ACCUEIL</a> > FAQ
    </div>

    <div class="singlePage_title" id="faq_title">
        <h1>QUESTIONS FRÉQUENTES</h1>
    </div>
    <section id="faq_page_container">

        <div id="toggle_faq_container" class="toggle_container">

            <div class="toggle_single" id="toggle_deroulement">
                <div class="subtitle_toggle_content">
                    <a href="#details_compositeurs" class="toggle_single"><h2 style="color: white">COMMENT SE DÉROULE UNE FORMATION?</h2></a>
                </div>
                <img class="toggle_plus" src="../assets/images/financement/Bouton-+.png">
                <img class="toggle_moins" src="../assets/images/financement/Bouton--.png">

                <div id="details_compositeurs" class="details_toggle_single">
                    <p> Vous avez droit au financement de votre stage ATHYR FORMATION dans le cadre du plan de
                        formation. Vous pouvez cumuler plusieurs modules. En tant qu’intermittent du spectacle, c’est
                        l’AFDAS qui prendra en charge le coût pédagogique de votre stage.</p>

                    <h5>Dossier de financement</h5>
                    <p> Avec ATHYR FORMATION, c’est facile : <strong>nous vous accompagnons tout au long du montage de votre
                            dossier de financement !</strong></br>
                        <span id="contactez_nous">Contactez-nous</span>, notre conseiller pédagogique vous fournira les documents indispensables et vous
                        indiquera la marche à suivre.</br>
                        Votre demande de financement devra impérativement être déposée à l’AFDAS au plus tard 3
                        semaines avant le début du stage.</p>

                    <hr>
                    <h5>Conditions d’accès au financement</h5>
                    <p> Pour prétendre à un financement AFDAS, il faut :</br>
                        - Etre affilié ou assujeti à la Maison Des Artistes ou à l’AGESSA</br>
                        - Justifier d’un montant de recettes cumulées de 9000€ brut minimum sur les trois dernières
                        années.
                    </p>

                    <hr>
                    <h5>Frais de transport et hébergement</h5>
                    <p> Si vous résidez en province, l’AFDAS peut prendre en charge, sous certaines conditions, vos
                        frais de transport et d’hébergement. Contactez votre conseiller AFDAS pour étudier votre
                        situation.
                    </p>

                </div>
            </div>


            <div id="toggle_compositeurs" class="toggle_single">
                <div class="subtitle_toggle_content">
                    <h2>COMMENT SE DÉROULE UNE FORMATION?</h2>
                </div>
                <img class="toggle_plus" src="../assets/images/financement/Bouton-+.png">
                <img class="toggle_moins" src="../assets/images/financement/Bouton--.png">

                <div id="details_compositeurs" class="details_toggle_single">
                    <p> Vous avez droit au financement de votre stage ATHYR FORMATION dans le cadre du plan de
                        formation. Vous pouvez cumuler plusieurs modules. En tant qu’intermittent du spectacle, c’est
                        l’AFDAS qui prendra en charge le coût pédagogique de votre stage.</p>

                    <h5>Dossier de financement</h5>
                    <p> Avec ATHYR FORMATION, c’est facile : <strong>nous vous accompagnons tout au long du montage de votre
                            dossier de financement !</strong></br>
                        <span id="contactez_nous">Contactez-nous</span>, notre conseiller pédagogique vous fournira les documents indispensables et vous
                        indiquera la marche à suivre.</br>
                        Votre demande de financement devra impérativement être déposée à l’AFDAS au plus tard 3
                        semaines avant le début du stage.</p>

                    <hr>
                    <h5>Conditions d’accès au financement</h5>
                    <p> Pour prétendre à un financement AFDAS, il faut :</br>
                        - Etre affilié ou assujeti à la Maison Des Artistes ou à l’AGESSA</br>
                        - Justifier d’un montant de recettes cumulées de 9000€ brut minimum sur les trois dernières
                        années.
                    </p>

                    <hr>
                    <h5>Frais de transport et hébergement</h5>
                    <p> Si vous résidez en province, l’AFDAS peut prendre en charge, sous certaines conditions, vos
                        frais de transport et d’hébergement. Contactez votre conseiller AFDAS pour étudier votre
                        situation.
                    </p>

                </div>
            </div>

            <div class="toggle_single" id="toggle_demandeurs_emploi">
                <div class="subtitle_toggle_content">
                    <h2>EST-CE QUE L'ON PEUT PAYER EN PLUSIEURS FOIS?</h2>

                </div>
                <img class="toggle_plus" src="../assets/images/financement/Bouton-+.png">
                <img class="toggle_moins" src="../assets/images/financement/Bouton--.png">

                <div id="details_compositeurs" class="details_toggle_single">
                    <p> Vous avez droit au financement de votre stage ATHYR FORMATION dans le cadre du plan de
                        formation. Vous pouvez cumuler plusieurs modules. En tant qu’intermittent du spectacle, c’est
                        l’AFDAS qui prendra en charge le coût pédagogique de votre stage.</p>

                    <h5>Dossier de financement</h5>
                    <p> Avec ATHYR FORMATION, c’est facile : <strong>nous vous accompagnons tout au long du montage de votre
                            dossier de financement !</strong></br>
                        <span id="contactez_nous">Contactez-nous</span>, notre conseiller pédagogique vous fournira les documents indispensables et vous
                        indiquera la marche à suivre.</br>
                        Votre demande de financement devra impérativement être déposée à l’AFDAS au plus tard 3
                        semaines avant le début du stage.</p>

                    <hr>
                    <h5>Conditions d’accès au financement</h5>
                    <p> Pour prétendre à un financement AFDAS, il faut :</br>
                        - Etre affilié ou assujeti à la Maison Des Artistes ou à l’AGESSA</br>
                        - Justifier d’un montant de recettes cumulées de 9000€ brut minimum sur les trois dernières
                        années.
                    </p>

                    <hr>
                    <h5>Frais de transport et hébergement</h5>
                    <p> Si vous résidez en province, l’AFDAS peut prendre en charge, sous certaines conditions, vos
                        frais de transport et d’hébergement. Contactez votre conseiller AFDAS pour étudier votre
                        situation.
                    </p>

                </div>
            </div>


            <div class="toggle_single" id="toggle_auto_entrepreneurs">
                <div class="subtitle_toggle_content">
                    <h2>QUEL TYPE DE MATÉRIEL ON UTILISE?</h2>
                </div>
                <img class="toggle_plus" src="../assets/images/financement/Bouton-+.png">
                <img class="toggle_moins" src="../assets/images/financement/Bouton--.png">

                <div id="details_compositeurs" class="details_toggle_single">
                    <p> Vous avez droit au financement de votre stage ATHYR FORMATION dans le cadre du plan de
                        formation. Vous pouvez cumuler plusieurs modules. En tant qu’intermittent du spectacle, c’est
                        l’AFDAS qui prendra en charge le coût pédagogique de votre stage.</p>

                    <h5>Dossier de financement</h5>
                    <p> Avec ATHYR FORMATION, c’est facile : <strong>nous vous accompagnons tout au long du montage de votre
                            dossier de financement !</strong></br>
                        <span id="contactez_nous">Contactez-nous</span>, notre conseiller pédagogique vous fournira les documents indispensables et vous
                        indiquera la marche à suivre.</br>
                        Votre demande de financement devra impérativement être déposée à l’AFDAS au plus tard 3
                        semaines avant le début du stage.</p>

                    <hr>
                    <h5>Conditions d’accès au financement</h5>
                    <p> Pour prétendre à un financement AFDAS, il faut :</br>
                        - Etre affilié ou assujeti à la Maison Des Artistes ou à l’AGESSA</br>
                        - Justifier d’un montant de recettes cumulées de 9000€ brut minimum sur les trois dernières
                        années.
                    </p>

                    <hr>
                    <h5>Frais de transport et hébergement</h5>
                    <p> Si vous résidez en province, l’AFDAS peut prendre en charge, sous certaines conditions, vos
                        frais de transport et d’hébergement. Contactez votre conseiller AFDAS pour étudier votre
                        situation.
                    </p>

                </div>
            </div>

            <div class="toggle_single" id="toggle_auto_entrepreneurs">
                <div class="subtitle_toggle_content">
                    <h2>FAUT-IL AVOIR UN BON NIVEAU DE MUSIQUE?</h2>
                </div>
                <img class="toggle_plus" src="../assets/images/financement/Bouton-+.png">
                <img class="toggle_moins" src="../assets/images/financement/Bouton--.png">

                <div id="details_compositeurs" class="details_toggle_single">
                    <p> Vous avez droit au financement de votre stage ATHYR FORMATION dans le cadre du plan de
                        formation. Vous pouvez cumuler plusieurs modules. En tant qu’intermittent du spectacle, c’est
                        l’AFDAS qui prendra en charge le coût pédagogique de votre stage.</p>

                    <h5>Dossier de financement</h5>
                    <p> Avec ATHYR FORMATION, c’est facile : <strong>nous vous accompagnons tout au long du montage de votre
                            dossier de financement !</strong></br>
                        <span id="contactez_nous">Contactez-nous</span>, notre conseiller pédagogique vous fournira les documents indispensables et vous
                        indiquera la marche à suivre.</br>
                        Votre demande de financement devra impérativement être déposée à l’AFDAS au plus tard 3
                        semaines avant le début du stage.</p>

                    <hr>
                    <h5>Conditions d’accès au financement</h5>
                    <p> Pour prétendre à un financement AFDAS, il faut :</br>
                        - Etre affilié ou assujeti à la Maison Des Artistes ou à l’AGESSA</br>
                        - Justifier d’un montant de recettes cumulées de 9000€ brut minimum sur les trois dernières
                        années.
                    </p>

                    <hr>
                    <h5>Frais de transport et hébergement</h5>
                    <p> Si vous résidez en province, l’AFDAS peut prendre en charge, sous certaines conditions, vos
                        frais de transport et d’hébergement. Contactez votre conseiller AFDAS pour étudier votre
                        situation.
                    </p>

                </div>
            </div>

            <div class="toggle_single" id="toggle_auto_entrepreneurs">
                <div class="subtitle_toggle_content">
                    <h2>Y A-T-IL UN SUIVI APRÈS LA FORMATION?</h2>
                </div>
                <img class="toggle_plus" src="../assets/images/financement/Bouton-+.png">
                <img class="toggle_moins" src="../assets/images/financement/Bouton--.png">

                <div id="details_compositeurs" class="details_toggle_single">
                    <p> Vous avez droit au financement de votre stage ATHYR FORMATION dans le cadre du plan de
                        formation. Vous pouvez cumuler plusieurs modules. En tant qu’intermittent du spectacle, c’est
                        l’AFDAS qui prendra en charge le coût pédagogique de votre stage.</p>

                    <h5>Dossier de financement</h5>
                    <p> Avec ATHYR FORMATION, c’est facile : <strong>nous vous accompagnons tout au long du montage de votre
                            dossier de financement !</strong></br>
                        <span id="contactez_nous">Contactez-nous</span>, notre conseiller pédagogique vous fournira les documents indispensables et vous
                        indiquera la marche à suivre.</br>
                        Votre demande de financement devra impérativement être déposée à l’AFDAS au plus tard 3
                        semaines avant le début du stage.</p>

                    <hr>
                    <h5>Conditions d’accès au financement</h5>
                    <p> Pour prétendre à un financement AFDAS, il faut :</br>
                        - Etre affilié ou assujeti à la Maison Des Artistes ou à l’AGESSA</br>
                        - Justifier d’un montant de recettes cumulées de 9000€ brut minimum sur les trois dernières
                        années.
                    </p>

                    <hr>
                    <h5>Frais de transport et hébergement</h5>
                    <p> Si vous résidez en province, l’AFDAS peut prendre en charge, sous certaines conditions, vos
                        frais de transport et d’hébergement. Contactez votre conseiller AFDAS pour étudier votre
                        situation.
                    </p>

                </div>
            </div>


        </div>







    </section>


@endsection