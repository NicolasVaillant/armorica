<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CrossFit Armorica – La communauté qui vous fait évoluer</title>
    <meta name="description" content="Découvrez CrossFit Armorica, une salle de CrossFit conviviale et encadrée par des coachs diplômés. Réservez votre séance d’essai gratuite et démarrez  votre aventure." />
    <meta name="robots" content="index,follow" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="CrossFit Armorica – La communauté qui vous fait évoluer" />
    <meta property="og:description" content="Séances encadrées, communauté bienveillante et programmation adaptée à tous les niveaux. Réservez votre séance d’essai gratuite." />
    <meta property="og:url" content="https://www.crossfitarmorica.fr/" />
    <meta property="og:image" content="https://www.crossfitarmorica.fr/resources/images/logo/logo-crossfitarmorica.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="CrossFit Armorica – La communauté qui vous fait évoluer" />
    <meta name="twitter:description" content="Rejoignez une salle de CrossFit chaleureuse, structurée et accessible, même si vous débutez." />
    <link rel="canonical" href="https://www.crossfitarmorica.fr/" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&family=Lilita+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <link rel="stylesheet" href="resources/css/styles.css" />
    <link rel="stylesheet" href="resources/css/root.css" />

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "SportsActivityLocation",
        "name": "CrossFit Armorica",
        "description": "Salle de CrossFit conviviale proposant des entraînements encadrés pour tous les niveaux.",
        "url": "https://www.crossfitarmorica.fr/",
        "telephone": "+33-6-76-22-99-26",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "1, rue Claude Bernard ",
            "addressLocality": "Plérin",
            "postalCode": "22190",
            "addressCountry": "FR"
        },
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday","Tuesday","Wednesday","Thursday","Friday"
                ],
                "opens": "10:00",
                "closes": "21:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Saturday"
                ],
                "opens": "09:15",
                "closes": "15:00"
            }
        ]
    }
    </script>
</head>
<body>

<header class="site-header">
    <div class="container header-inner">
        <nav class="main-nav" aria-label="Navigation principale">
            <a href="#top" class="logo" aria-label="Retour à l’accueil CrossFit Armorica">
                <img src="resources/images/logo/logo-crossfitarmorica.png" alt="Logo CrossFit Armorica" loading="lazy">
            </a>
            <ul class="nav-links">
                <li><a href="#decouverte">Découvrir la box</a></li>
                <li><a href="#etapes-debuter">Comment débuter ?</a></li>
                <li><a href="#equipe">L’équipe</a></li>
                <li><a href="#planning">Planning</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>
        </nav>

        <div class="header-actions">
            <a class="btn btn-secondary" href="#seance-essai">Réserver une séance d’essai</a>
            <!-- <a href="#"><i class="fas fa-bars"></i></a> -->
        </div>
    </div>
</header>

<main id="contenu-principal">

    <section id="top" class="hero" aria-labelledby="hero-title">
        <div class="hero-media" role="img"
            aria-label="Photo de groupe d’adhérents CrossFit en train de sourire après un entraînement">
        </div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <p class="eyebrow">POUR TOUS LES NIVEAUX · SANS PRÉ-REQUIS</p>
            <h1 id="hero-title">La communauté qui vous fait évoluer.</h1>
            <div class="hero-cta">
            <a class="btn btn-primary btn-full" href="#seance-essai">Je réserve ma séance</a>
            </div>
        </div>
    </section>

    <section id="decouverte" class="section section-intro" aria-labelledby="intro-title">
        <div class="container section-grid">
            <article class="intro-text">
                <h2 id="intro-title">CrossFit Armorica :<br> plus qu’une salle, une communauté</h2>
                <p>CrossFit Armorica, votre box de CrossFit à Plérin, vous accueille avec une équipe de coachs certifiés et à votre écoute. Rejoignez-nous pour retrouver forme et santé dans une ambiance fun et bienveillante. On se retrouve en groupe pour partager un entraînement intense, mais toujours adapté à votre niveau, vos capacités et vos objectifs personnels.</p>
                <img src="resources/images/others/box2.jpg" alt="Des adhérents de CrossFit Armorica en train de réaliser un WOD sur des ergomètres" loading="lazy">
            </article>

            <aside id="seance-essai" class="intro-form" aria-labelledby="form-title">
                <h2 id="form-title">Réservez votre séance d’essai offerte</h2>
                <form action="#" method="post" class="trial-form" aria-describedby="form-title">
                    <div class="form-group">
                        <label for="nom">Nom et prénom</label>
                        <input type="text" id="nom" name="nom" autocomplete="name" placeholder="Votre nom et prénom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" id="email" name="email" autocomplete="email" placeholder="Votre adresse e-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Numéro de téléphone</label>
                        <input type="tel" id="telephone" name="telephone" autocomplete="tel" placeholder="Numéro de téléphone" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Précisions (facultatif)</label>
                        <textarea id="message" name="message" rows="3" aria-label="Précisions sur votre demande" placeholder="Vous pouvez préciser vos disponibilités, vos objectifs, ou tout autre détail pertinent."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">Envoyer ma demande</button>
                    <p class="form-note">Vos données ne sont utilisées que pour vous recontacter.</p>
                </form>
            </aside>
        </div>
    </section>

    <section class="section section-benefits" aria-labelledby="benefits-title">
        <div class="container">
            <h2 id="benefits-title">Découvrez comment nous avons aidé des centaines de personnes à être en meilleure santé.</h2>
            <div class="benefits-grid" role="list">
                <article class="card" role="listitem">
                    <h3>UN COACHING EXPERT</h3>
                    <p>Des coachs diplômés qui adaptent chaque séance à votre niveau pour vous faire progresser en toute sécurité.</p>
                </article>
                <article class="card" role="listitem">
                    <h3>UNE COMMUNAUTÉ SOUDÉE</h3>
                    <p>Plus qu'une salle, une véritable famille qui s'entraide et se motive, quel que soit votre âge ou votre condition physique.</p>
                </article>
                <article class="card" role="listitem">
                    <h3>DES RÉSULTATS VISIBLES</h3>
                    <p>Grâce à un suivi personnalisé et une programmation intelligente, nous vous aidons à atteindre durablement vos objectifs.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="etapes-debuter" class="section section-steps" aria-labelledby="steps-title">
        <div class="container">
            <h2 id="steps-title">Comment débuter son aventure ?</h2>
            <p class="steps-subtitle">L'EFFORT N'ATTEND QUE VOUS.</p>

            <ol class="steps-list">
                <li class="step-item">
                    <h3><span class="step-number">01</span> GRATUIT</h3>
                    <h3 class="step-title">Faites une première séance d'essai</h3>
                    <p>Venez découvrir notre façon de travailler et l'ambiance de la box. C'est la meilleure manière de savoir si notre communauté est faite pour vous.</p>
                </li>
                <li class="step-item">
                    <h3><span class="step-number">02</span> SANS ENGAGEMENT</h3>
                    <h3 class="step-title">Discutez de vos objectifs avec un coach</h3>
                    <p>Après la séance, nous prenons le temps de passer en revue vos objectifs : remise en forme, performance, perte de poids... pour nous assurer que nous pouvons y répondre.</p>
                </li>
                <li class="step-item">
                    <h3><span class="step-number">03</span> LANCEZ-VOUS !</h3>
                    <h3 class="step-title">Révélez la meilleure version de vous-même</h3>
                    <p>Intégrez nos entraînements stimulants et notre communauté motivante. Progressez à votre rythme et découvrez le plaisir de devenir plus fort(e), séance après séance.</p>
                </li>
            </ol>
            <div class="steps-cta">
                <a class="btn btn-primary btn-full" href="#seance-essai">Commencez dès maintenant !</a>
            </div>
        </div>
    </section>

    <section class="section section-about" aria-labelledby="about-title">
        <div class="container">
            <div class="slider-wrapper">
                
                <div class="slider" id="slider">
                    <div class="slide">
                        <img src="resources/images/users/community.png" alt="Des adhérents de CrossFit Armorica en train de se féliciter après le WOD" loading="lazy">
                        <h3>Bien plus qu'une simple salle de sport.</h3>
                        <p>Chez CrossFit Armorica, nous croyons à la force du collectif. Vous ne rejoignez pas une salle, mais une communauté. Ici, chaque membre, du débutant à l'athlète confirmé, est encouragé, soutenu et célébré.</p>
                    </div>
                    
                    <div class="slide">
                        <img src="resources/images/others/box.png" alt="Les écho bike et vélos de CrossFit Armorica" loading="lazy">
                        <h3>Un environnement conçu pour votre réussite.</h3>
                        <p>Notre box est entièrement équipée avec du matériel de pointe. Avec nos deux espaces dédiés aux WODs et au travail technique, vous disposez de tout le nécessaire pour des entraînements efficaces et variés.</p>
                    </div>

                    <div class="slide">
                        <img src="resources/images/others/box2.jpg" alt="Des adhérents de CrossFit Armorica en train de réaliser un WOD sur des ergomètres" loading="lazy">
                        <h3>Deux salles, pour vous permettre de toujours progresser.</h3>
                        <p>Notre seconde salle est dédiée à nos cours de spécialité : gymnastique, haltérophilie, renforcement musculaire ou cardio. C'est l'endroit idéal pour affiner votre technique et atteindre de nouveaux objectifs. Elle est également disponible en Free Access pour vos entraînements autonomes. Une solution complète pour une progression sur mesure.</p>
                    </div>

                    <div class="slide">
                        <img src="resources/images/others/box.png" alt="" loading="lazy">
                        <h3>Des coachs qui croient en vous.</h3>
                        <p>Nos coachs sont vos partenaires de progression. Diplômés et passionnés, ils assurent votre sécurité, adaptent chaque effort à vos capacités et vous donnent la motivation nécessaire pour atteindre vos objectifs.</p>
                    </div>
                </div>
                
                <div class="slider-btn">
                    <button class="nav prev" onclick="scrollSlider(-1)">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="nav next" onclick="scrollSlider(1)">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>

                <script>
                    const slider = document.getElementById("slider");
                    function scrollSlider(direction) {
                        const slideWidth = slider.clientWidth;
                        slider.scrollBy({
                            left: direction * slideWidth,
                            behavior: "smooth"
                        });
                    }
                </script>

            </div>
        </div>
    </section>

    <!-- EQUIPE -->
    <section id="equipe" class="section section-team" aria-labelledby="team-title">
    <div class="container">
        <h2 id="team-title">L’équipe</h2>

        <div class="team-grid" role="list">
            <article class="coach-card" role="listitem">
                <img src="resources/images/coaches/coach-4.jpg" alt="Photo de Jérémy, Head Coach CrossFit Armorica" loading="lazy" class="coach-photo">
                <div class="coach-body">
                <h3>Jérémy – Head Coach</h3>
                <p>Issu d’un domaine professionnel totalement different  j’ai pu pratiquer en loisir la musculation et le Viet Vo Dao. En plus de ma pratique  personnel j’ai pu découvrir le coaching et l’accompagnement des personnes dans leurs objectifs ce qui m’a donné envie d’ne faire mon métier en ayant découvert le CrossFit. J’ai repris mes études à 31 ans  afin d’obtenir mon bpjeps et suite à cela j’ai ouvert ma propre salle à Plérin afin d’accompagner le plus de gens possible dans leurs objectifs et diffuser notre vision du bien être et de la bonne santé par le sport. Que cela soit pour la compétition ou pour se sentir mieux dans son quotidien.</p>
                <br>
                <p>J’ai hâte de vous retrouver à la box avec mon équipe !</p>
                </div>
            </article>

            <article class="coach-card" role="listitem">
                <img src="resources/images/coaches/coach-2.jpg" alt="Photo de Chloé, coach CrossFit Armorica" loading="lazy" class="coach-photo">
                <div class="coach-body">
                <h3>Chloé – Coach</h3>
                <p>Ancienne gymnaste  j’ai redécouvert le sport en 2017 grâce au CrossFit, jusqu’à devenir coach en 2024. Mes forces : j’ai vécu le surpoids, j’ai été très sédentaire, et j’ai aussi connu la compétition. Cette expérience variée me permet d’accompagner aussi bien les objectifs santé que la performance. Depuis un an, je me spécialise dans la santé féminine (cycle, sommeil, postpartum). À la box, je propose : du coaching de groupe, du coaching individuel pour progresser dans un domaine précis, et un accompagnement dédié aux femmes.</p>
                <br>
                <p>Hâte de vous retrouver à la box !</p>
                </div>
            </article>

            <article class="coach-card" role="listitem">
                <img src="resources/images/coaches/coach-3.jpg" alt="Photo d'Arthur, coach CrossFit Armorica" loading="lazy" class="coach-photo">
                <div class="coach-body">
                <h3>Arthur – Coach</h3>
                <p>J’ai toujours vécu au rythme du sport. Ancien skieur de haut niveau, j’ai mis un terme à ma carrière pour poursuivre mes études puis travailler sur les marchés financiers entre 2016 et 2021. C’est durant cette période que j’ai découvert le CrossFit… et ça a été une révélation. Ma passion pour le sport est devenue une passion pour la transmission. Aujourd’hui owner de CrossFit Lannion, j’interviens encore régulièrement chez CrossFit Armorica. J’y retrouve une équipe d’amis et de professionnels exigeants, ainsi que la joie de partager ce qui m’anime : le mouvement, la santé et la progression accessible à tous.</p>
                <p>Egalement, pratiquant de trail, je suis convaincu que chacun peut soigner ses douleurs, devenir plus performant, plus mobile et plus confiant grâce à une pratique encadrée, cohérente et adaptée.</p>
                </div>
            </article>
            
            <article class="coach-card" role="listitem">
                <img src="resources/images/coaches/coach-1.jpg" alt="Photo de Gautier, coach CrossFit Armorica" loading="lazy" class="coach-photo">
                <div class="coach-body">
                <h3>Gautier – Coach</h3>
                <p>Sportif depuis toujours (karaté, kitesurf, parapente, hockey, musculation...), Lorsque j'ai découvert le CrossFit, j'ai tout de suite aimé sa polyvalence – impossible de s'ennuyer – et surtout l'ambiance de la box ! Ca ma tout de suite donné envie de faire ce dont j'ai toujours eu envie, coacher et transmettre ma passion.</p>
                <p>Mon rôle : vous accompagner, en groupe ou en individuel, pour améliorer votre santé physique et mentale, en faisant de l'entraînement un plaisir, jamais une contrainte. La bonne humeur et la technique sont mes priorités pour une progression sûre.</p>
                <br>
                <p>Hâte de vous retrouver à la box pour vous aider à vous sentir mieux !</p>
                </div>
            </article>
        </div>
    </div>
    </section>

    <!-- PLANNING -->
    <section id="planning" class="section section-planning" aria-labelledby="planning-title">
    <div class="container">
        <h2 id="planning-title">Horaires</h2>
        <p class="section-intro">Des créneaux matin, midi et soir pour s’adapter à votre emploi du temps. Les WOD durent 1 heure, échauffement et mobilité inclus.</p>
        <article class="card-planning" role="listitem" aria-label="Horaires d’ouverture">
            <p>Lundi – Vendredi : 10h-13h30 / 16h00-21h00</p>
            <p>Samedi : 9h15-12h15 / 13h00-15h00</p>
            <p>Fermé les dimanches.</p>
        </article>
        <p class="planning-note">Les places étant limitées, la réservation se fait via notre application partenaire.</p>
    </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="section section-faq" aria-labelledby="faq-title">
    <div class="container">
        <h2 id="faq-title">On répond à vos questions</h2>
        <p class="section-intro">Anticiper et répondre aux dernières questions des prospects pour lever les freins.</p>

        <div class="faq-list">
            <details>
                <summary>Qu'est ce que le CrossFit ?</summary>
                <div class="faq-panel">
                <p>Le CrossFit est un entraînement fonctionnel qui combine cardio, gymnastique et haltérophilie. Il est adaptable à tous les niveaux et a pour but d'améliorer votre forme physique générale et votre bien-être.</p>
                </div>
            </details>

            <details>
                <summary>Est-ce que tout le monde peut faire du CrossFit ?</summary>
                <div class="faq-panel">
                <p>Bien sûr ! Notre force réside dans l'adaptation. Que vous soyez débutant, de retour de blessure ou sportif aguerri, nos coachs modifient chaque exercice pour vous permettre de progresser en toute sécurité et à votre rythme.</p>
                </div>
            </details>

            <details>
                <summary>Ai-je besoin d'être en forme avant de commencer le CrossFit ?</summary>
                <div class="faq-panel">
                <p>Inutile d'être déjà en forme ! Le principe du CrossFit est justement de s'adapter à chacun. Les exercices sont personnalisés et progressifs, ce qui vous permet d'améliorer votre condition physique sans pré-requis, dès la première séance.</p>
                </div>
            </details>

            <details>
                <summary>Est-ce que le CrossFit est dangereux ?</summary>
                <div class="faq-panel">
                <p>Non, si l'on est bien encadré et que l'on respecte son corps ! Nos coachs sont là pour vous enseigner les mouvements corrects et s'assurer que vous progressez en toute sécurité. La technique prime toujours sur la performance pour prévenir toute blessure.</p>
                </div>
            </details>

            <details>
                <summary>Quels sont les avantages du CrossFit par rapport à d'autres formes d'exercices ?</summary>
                <div class="faq-panel">
                <p>Le CrossFit se distingue par son approche globale : il développe simultanément force, cardio et agilité. La variété constante des entraînements maintient la motivation et l'esprit de communauté unique transforme l'effort en une expérience sociale enrichissante.</p>
                </div>
            </details>

            <details>
                <summary>Comment puis-je commencer le CrossFit dans votre box ?</summary>
                <div class="faq-panel">
                <p>Démarrez facilement avec une séance d'essai offerte ! Inscrivez-vous en ligne, et notre équipe prendra le relais. Vous serez guidé(e) de A à Z : présentation, réponses à vos questions et accompagnement personnalisé pour débuter en toute confiance.</p>
                </div>
            </details>

        </div>

        <div class="faq-cta">
        <p>Vous avez une autre question ?</p>
        <a class="btn btn-primary" href="#seance-essai">Parlez-en avec un coach</a>
        </div>
    </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container footer-grid">
        <img src="resources/images/logo/logo-crossfitarmorica.png" alt="Logo CrossFit Armorica" loading="lazy">

        <section class="footer-block" aria-label="Coordonnées de CrossFit Armorica">
            <h2 class="footer-title">CrossFit Armorica</h2>
            <p>1, rue Claude Bernard, 22190 Plérin</p>
            <p>
                <a href="tel:+33676229926">+33 6 76 22 99 26</a><br>
                <a href="mailto:cf.armorica@gmail.com">cf.armorica@gmail.com</a>
            </p>
        </section>

    <section class="footer-block" aria-label="Horaires d’ouverture">
        <h2 class="footer-title">Horaires</h2>
        <p>Lundi – Vendredi : 10h-13h30 / 16h00-21h00</p>
        <p>Samedi : 9h15-12h15 / 13h00-15h00</p>
        <p>Fermé les dimanches.</p>
    </section>

    <section class="footer-block footer-social" aria-label="Réseaux sociaux CrossFit Armorica">
        <h2 class="footer-title">Suivez la box</h2>
        <ul class="social-links">
            <li><a href="https://www.instagram.com/crossfitarmorica/" aria-label="Instagram de CrossFit Armorica"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.facebook.com/crossfitarmorica/" aria-label="Facebook de CrossFit Armorica"><i class="fa-brands fa-facebook"></i></a></li>
        </ul>
    </section>
    </div>

    <div class="footer-bottom">
    <div class="container footer-bottom-inner">
        <p>© <span id="annee-courante">2025</span> CrossFit Armorica – Tous droits réservés.</p>
        <a href="#" class="footer-link">Mentions légales</a>
    </div>
    </div>

    <script>
        // Mise à jour accessible de l’année courante
        const yearSpan = document.getElementById('annee-courante');
        if (yearSpan) {
            yearSpan.textContent = new Date().getFullYear();
        }
    </script>
</footer>
</body>
</html>