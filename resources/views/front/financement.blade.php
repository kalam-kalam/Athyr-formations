@extends('layout.navigation')
@section('content')

    <style>
        #banner {
            background-image: url("../assets/images/financement/Photo-intro.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 300px;
        }

        #footer {
            background-color: black;
        }
    </style>

    <div class="ariane" id="ariane_financement">
        <a href="{{url('front/home')}}">ACCUEIL</a> > <a href="url{{'front/financement'}}">FINANCEMENT</a>
    </div>

    <div class="singlePage_title" id="financement_title">
        <h1>FINANCEMENT <span>MODE D'EMPLOI</span></h1>
    </div>

    <div id="financement_page_container" class="page_container">
        <div id="toggle_financement_container" class="toggle_container">

            <div class="toggle_single" id="toggle_intermittents">
                <div class="subtitle_toggle_content">
                    <a href="#details_compositeurs" class="toggle_single"><h2 style="color: white">COMPOSITEURS, AUTEURS</h2></a>
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
                    <h2>INTERMITTENTS DU SPECTACLE</h2>
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
                    <h2>DEMANDEURS D'EMPLOI</h2>

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
                    <h2>SALARIES EN CDI OU CDD</h2>
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
                    <h2>AUTO-ENTREPRENEURS ET INDEPENDANTS</h2>
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
                    <h2>FINANCEMENT PERSONNEL</h2>
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


        <div class="aside_single">
            <div id="accompagnement">

                <div class="info_title">
                    <h2>ON VOUS ACCOMPAGNE</h2></div>

                <img class="encart_aside_pic" src="../assets/images/financement/Phot-encadré.jpg">

                <div id="accompagnement_step">
                    <ul>
                        <li>
                            <div class="fin_list_num"><img src="../assets/images/financement/Numéro-1.png"></div>
                            <div class="fin_list_text">
                                <h4>Rendez vous pédagogique</h4>
                                <p>Nous échangeons par téléphone afin de définir le projet pédagogique qui correspond le
                                    mieux à
                                    vos besoins.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="fin_list_num"><img src="../assets/images/financement/Numéro-2.png"></div>
                            <div class="fin_list_text">
                                <h4>Pré-inscription</h4>
                                <p>Nous réservons les dates de formation qui vous conviennent.</p>
                            </div>
                        </li>
                        <li>
                            <div class="fin_list_num"><img src="../assets/images/financement/Numéro-3.png"></div>
                            <div class="fin_list_text">
                                <h4>Financement</h4>
                                <p>Nous sommes à vos côtés pour le montage de votre dossier de financement, en toute
                                    simplicité.</p>
                            </div>
                        </li>
                        <li>
                            <div class="fin_list_num"><img src="../assets/images/financement/Numéro-4.png"></div>
                            <div class="fin_list_text">
                                <h4>Formation</h4>
                                <p>Nos formateurs vous transmettent leur expertise.</p>
                            </div>
                        </li>


                    </ul>
                </div>

            </div>

            <div id="financement_video">
                <video src=""></video>
            </div>
            <div id="question">

                <h1>Une question?</h1>
                <div id="contact_fiancement">
                    <div id="tel">
                        <img src="../assets/images/financement/Picto-tél.png">
                        <p>07 64 07 54 21</p>
                    </div>

                    <div id="rep_48">
                        <p>Réponse </br>sous 48h</p>
                    </div>

                </div>
                <input type="button" class="contact_button" value="CONTACT">

            </div>

        </div>


    </div>
    <a href="{{url('front/home')}}">
        <div class="back_link_container">
            <img src="../assets/images/financement/Picto-retour.png">
            <p class="back_link"> RETOUR A L'ACCUEIL </p>
        </div>
    </a>

@endsection