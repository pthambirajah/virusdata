<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Coronavirus disease COVID-19 - Uniquement pour les patients hospitalisés</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <script src="external/jquery/jquery.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script type="application/javascript" src="js/script-common.js"></script>
    <link rel="stylesheet" type="text/css" href="css/overrides.css">
    <style>
        .red {
            background-color: tomato;
            color: white;
            padding: 10px;
            opacity: 0.7;
        }

        .orange {
            background-color: orange;
            color: white;
            padding: 10px;
            opacity: 0.7;

        }
    </style>
</head>
<body class="mod mod-layout">
<div class="mod mod-nsbnewsdetails">
</div>


<div class="container container-main">
    <div class="container-fluid hidden-xs">
        <div class="row">
            <div class="col-sm-12">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h1>Coronavirus disease COVID-19</h1>
                    <h2>Uniquement pour les patients hospitalisés</h2>
                    <h2>Déclaration du résultat clinique suite au résultat de laboratoire positif</h2>
                    <hr>
                    <p>
                        Les résultats doivent être déclarés au service du médecin cantonal et à l’OFSP dans un délai de
                        24h<br>
                        Fax de l’OFSP : +41 58 463 87 77<br>
                        La liste des médecins cantonaux est disponible sous <a href="https://bag.admin.ch/infreporting">bag.admin.ch/infreporting</a>.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 no-margin">
                <hr>
                <h3>Dépistage COVID-19</h3>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    Médecin traitant-e
                </div>
                <div class="col-md-4">
                    <input type="search" class="form-control" id="covid19_searchmedecin">
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    Hopital (lieu du dépistage)
                </div>
                <div class="col-md-4">
                    <input type="search" class="form-control" id="covid19_searchhopital">
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    Anamnèse brève
                </div>
                <div class="col-md-4">
                    <input type="search" class="form-control" id="covid19_anamnèse">
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    Date de naissance du patient
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" id="covid19_birthdate">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 no-margin">
                <hr>
                <h3>Nombre de personnne dans le même domicile</h3>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    Professionnel-le-s de la santé ?
                </div>
                <div class="col-md-1">
                    <label>
                        <input type="radio" id="covid19_profes_non" name="covid19_profe" value="male">
                        Non
                    </label>
                </div>


                <div class="col-md-1">
                    <label>
                        <input type="radio" id="covid19_profe_oui" name="covid19_profe" value="male">
                        Oui
                    </label>
                </div>
            </div>
            <div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                            Allergie(s)
                        </div>
                        <div class="col-md-4">
                            <input type="search" class="form-control" id="covid19_allergies">
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                            Traitements en cours
                        </div>
                        <div class="col-md-4">
                            <input type="search" class="form-control" id="covid19_traiteemnts">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 no-margin">
                        <hr>
                        <h3>Début des symptômes</h3>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2">
                                Date du début des symptômes
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="covid19_birth_date">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" id="covid19_fever">
                                    Fièvre >= 38°C
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" id="covid19_cough">
                                    Toux
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" id="covid19_expectorations">
                                    Expectorations
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" id="covid19_dyspeugsie">
                                    Dyspeugsie / anosmie
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" id="covid19_myalgies">
                                    Myalgies
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" id="covid19_diarrhea">
                                    Diarrhée
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" id="covid19_odynodysphagie">
                                    Odynodysphagie
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" id="covid19_tabagisme">
                                    Tabagisme
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" id="covid19_no_symptom">
                                    Aucun symptôme
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Autres symptômes
                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control" id="covid19_other_"></textarea>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 no-margin">
                        <hr>
                        <h3>Durant les 14 jours précédents le début des symptômes</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        Contact <b>étroit</b> avec un cas COVID-19 confirmé par laboratoire
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label>
                            <input type="radio" id="covid19_radioNon" name="contect" value="male">
                            Non
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <label>
                            <input type="radio" id="covid19_radioOui" name="contect" value="male">
                            Oui (précisez type de contact, famille, travail, en milieu de soin, ou autre)
                        </label>
                    </div>
                    <div class="col-md-8">
                        <textarea class="form-control" id="covid19_precisions_contacts"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            Date du contact
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="covid19_contact_date">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        Séjours hors de Suisse
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label>
                            <input type="radio" id="covid19_radio_séjour_Non" name="séjour" value="male">
                            Non
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <label>
                            <input type="radio" id="covid19_radio_séjour_Oui" name="séjour" value="male">
                            Oui (Précisez lieu-x)
                        </label>
                    </div>
                    <div class="col-md-8">
                        <textarea class="form-control" id="covid19_radioOuiText"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            Date du séjour
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="covid19_sejour_date">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 no-margin">
                        <hr>
                        <h3>Comorbidité(s)</h3>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_age">
                                Age > 65 ans
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_hta">
                                HTA
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_diabete">
                                Diabète traité
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_cardiovasculaire">
                                Maladie cardio-vasculaire
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_maladiechronique">
                                Maladie respiratoire chronique (SAOS ne comptant pas)
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_cancer">
                                Cancer
                            </label>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 no-margin">
                        <hr>
                        <h3>Examens cliniques</h3>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2">
                                Tension artérielle
                            </div>
                            <div class="col-md-1">
                                <input type="text" id="covid19_birth_ta1">/<input type="text" id="covid19_birth_ta2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Fréquence cardiaque
                            </div>
                            <div class="col-md-1">
                                <input type="text" id="covid19_birth_fc">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Température
                            </div>
                            <div class="col-md-1">
                                <input type="text" id="covid19_birth_t">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Saturation
                            </div>
                            <div class="col-md-1">
                                <input type="text" id="covid19_birth_sat">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Fréquence respiratoire
                            </div>
                            <div class="col-md-1">
                                <input type="text" id="covid19_respiratoire">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Cardio
                            </div>
                            <div class="col-md-1">
                                <input type="text" id="covid19_cardio">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Pulmonaire
                            </div>
                            <div class="col-md-1">
                                <input type="text" id="covid19_pulmonaire">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 no-margin">
                        <hr>
                        <h3>Critère de gravité</h3>
                    </div>
                </div>

                <div class="col-md-12">

                    <div class="row">
                        <h4 class="red">Drapeau rouge : consultation aux <b>urgences</b></h4>

                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_redflag_TA">
                                Tension artérielle
                                <b><90</b> ou TAd <b><60</b>
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_redflag_fr">
                                Fréquence respiratoire <b>>30</b>
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_redflag_temp">
                                Température <b><35</b> ou <b>>40</b>
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_redflag_spo2">
                                SpO2 <b><90%</b>
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_redflag_fc">
                                Fréquence cardiaque <b>>125</b>
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <h4 class="orange">Drapeau orange : <b>supervision</b></h4>

                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_yellowflag_pej">
                                Péjoration état général
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_yellowflag_fr">
                                Fréquence réspiratoire <b>>20</b>

                            </label>
                        </div>
                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_yellowflag_temp">
                                Fièvre persistante après 4 jours
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_orangeflag_spo2">
                                SpO2 <b><94%</b>
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_yellowflag_fc">
                                Douleurs rétro-sternale

                            </label>
                        </div>

                        <div class="row">
                            <div class="col-md-12 no-margin">
                                <hr>
                                <h3>Attitude (cocher ce qui convient)</h3>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-10">
                            <label>
                                <input type="checkbox" id="covid19_frottis">
                                Frottis COVID19 effectué. Le/la patient-e et le médecin traitant-e seront avertis dès la
                                réception du résultat.
                                <b>En cas de résultat positif, nous prions le/la médecin traintant-e d'éffectuer la
                                    levée de
                                    l'isolement</b>
                                selon recommandations sous <a
                                    href="https://www.hpci.ch/">www.hpci.ch/</a> et selon la date de début des symptômes
                                inscrits au début de ce document.
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_supervision">
                                Supervision demandée
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label>
                                <input type="checkbox" id="covid19_urgence">
                                Référé-e aux urgences
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10">
                            <label>
                                <input type="checkbox" id="covid19_t_sympt">
                                Traitement(s) symptomatique(s) (PAS d'AINS)
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10">
                            <label>
                                <input type="checkbox" id="covid19_suspens">
                                Mis en suspens du traitement habituel d'AINS y compris COX-2
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10">
                            <label>
                                <input type="checkbox" id="covid19_consigne">
                                Consigne au/à la patient-e de discuter avec son/sa spécialiste de la mise en suspens des
                                immunosuppresseurs (sauf prednisone) suivant résultat du frottis.
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10">
                            <label>
                                <input type="checkbox" id="covid19_isolement">
                                Auto-isolement en attente des résulats : brochures
                                <i> Isolement au domicile / contacts étroits délivrée </i>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <label>
                                <input type="checkbox" id="covid19_professionels">
                                Pour les professione-le-s de la santé : retour au travail, sauf si contact
                                sans protection avec cas confirmé de COVID-19
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label>
                                <input type="checkbox" id="covid19_arret_travail">
                                Arrêt de travail délivré. Nombre de jours :
                            </label>
                        </div>
                        <div class="col-md-1">
                            <input type="text" id="covid19_arrets_nbjours">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn-primary" value="Créer pièce jointe pour mail"
                                    onclick="downloadLab('positive_case')">
                                <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Enregistrer
                            </button>
                        </div>
                        <div class="col-md-3">
                        </div>

                    </div>

                </div>
            </div>
        </div>

        </form>
    </div>
</div>
</body>
</html>