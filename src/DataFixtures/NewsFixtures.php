<?php

namespace App\DataFixtures;

use App\Entity\News;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class NewsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $news = new News();
        $news->setTitre('Legislation retraite');
        $news->setDescription("Loreum ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.");
        $news->setImageName('1.jpg');
        $news->setSlug('legislation-retraite');
        $news->setCreatedAt(new \DateTime());
        $news->setUpdatedAt(new \DateTime());
        $news->setIsActive(true);
        $manager->persist($news);        
        
        $news = new News();
        $news->setTitre('La nouvelle réforme');
        $news->setDescription("Loreum ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.");
        $news->setImageName('2.webp');
        $news->setSlug('la-nouvelle-reforme');
        $news->setCreatedAt(new \DateTime());
        $news->setUpdatedAt(new \DateTime());
        $news->setIsActive(true);
        $manager->persist($news);        
        
        $news = new News();
        $news->setTitre('La vaccination obligatoire');
        $news->setDescription("Loreum ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.");
        $news->setImageName('3.jpg');
        $news->setSlug('la-vaccination-obligatoire');
        $news->setCreatedAt(new \DateTime());
        $news->setUpdatedAt(new \DateTime());
        $news->setIsActive(true);
        $manager->persist($news);                
        
        $news = new News();
        $news->setTitre('Le cumul emploi retraite');
        $news->setDescription("Cumul intégral d’une retraite et d’un revenu d’activité Vous devez au préalable avoir obtenu toutes vos retraites de base et complémentaires des régimes français, étrangers et des organisations internationales. Il s’agit des retraites dont vous remplissez les conditions d'attribution (notamment la condition d’âge de départ)
        Cessation d’activité
        
        Si le chef d’entreprise ne souhaite pas cesser l’une de ses activités professionnelles, il doit liquider l'ensemble de ses pensions de retraite auprès des régimes de retraite obligatoires. Pour poursuivre l’activité indépendante, il suffit de demander à bénéficier du cumul emploi-retraite à votre caisse régionale. 
        
        Pour poursuivre une activité relevant d'un autre régime, il est nécessaire de s’adresser à la caisse de retraite correspondante à l’activité, pour connaître les modalités.
        
        Le cumul intégral est alors possible :
        
            à partir de l’âge d'obtention de la retraite au taux maximum (aussi appelé retraite à « taux plein », 67 ans pour les personnes nées en 1955 ou après) ;
            ou dès que vous avez à la fois l’âge légal et la durée d’assurance nécessaire pour obtenir une retraite au taux maximum.
        
        Vous pouvez reprendre une activité, quelle qu’elle soit, immédiatement.
        Cumul plafonné d’une retraite et d’un revenu d’activité
        
        Si vous ne remplissez pas les conditions pour bénéficier d’un cumul intégral, vous pouvez cumuler votre retraite et vos revenus d’activité dans une certaine limite.
        La limite de cumul
        
        Le total mensuel de votre nouveau revenu et de vos retraites (de base et complémentaires) ne doit pas dépasser la moyenne mensuelle de vos revenus d’activité des 3 derniers mois civils (ou 1,6 fois le Smic si ce montant est plus avantageux).
        
        En cas de dépassement, le montant de votre retraite est réduit (en fonction du montant du dépassement). Dès que votre revenu d’activité baisse ou si vous cessez de travailler, prévenez votre caisse régionale afin que le montant de votre retraite puisse être réajusté à votre nouvelle situation.
        La date de reprise d’activité
        
        Vous pouvez reprendre une activité professionnelle immédiatement chez un nouvel employeur.
        
        En revanche vous devez attendre 6 mois après le point de départ de votre retraite pour reprendre une activité chez votre dernier employeur. Avant ce délai, le paiement de votre retraite est suspendu.
        
        Le paiement de votre retraite reprend quand vous cessez votre activité ou au plus tard le 7e mois suivant le point de départ de votre retraite.
        
        Dans le mois qui suit votre reprise d’activité vous devez impérativement :
        
            informer votre caisse régionale de la reprise d’une activité professionnelle ;
            transmettre tous les éléments d’information et les pièces justificatives relatives à cette reprise.
        
        Travailleurs indépendants
        Incidence sur la retraite complémentaire
        
        L’Assurance retraite gère aussi la retraite complémentaire des travailleurs indépendants. Celle-ci est soumise aux mêmes règles que celui des retraites de base dans le cadre du cumul emploi-retraite :
        
            dans le cas du cumul libéralisé, la retraite complémentaire est versée ;
            dans le cas du cumul plafonné, la retraite complémentaire est versée tant que les plafonds ne sont pas dépassés.
        
        En cas de dépassement, la retraite est suspendue pendant la même durée que celle du régime de base.
        ");
        $news->setImageName('4.jpg');
        $news->setSlug('le-cumul-emploi-retraite');
        $news->setCreatedAt(new \DateTime());
        $news->setUpdatedAt(new \DateTime());
        $news->setIsActive(true);
        $manager->persist($news);           
        
        
        $news = new News();
        $news->setTitre('Préparer sa retraite à 30 ans');
        $news->setDescription("Quand vous commencez votre carrière professionnelle et que vous construisez votre vie personnelle en parallèle, la retraite n’est probablement pas votre première préoccupation ! Mais y penser au plus tôt vous rendra service plus tard. En effet, mécaniquement, votre pouvoir d’achat baissera à la retraite, sauf si vous l’anticipez suffisamment tôt ! Commencer à mettre de l’argent de coté chaque mois dès maintenant vous permet de vous constituer un capital à votre rythme sans avoir à faire de sacrifices à l’approche de la retraite !
        1. Se constituer une épargne de précaution
        
        La première des priorités doit être de vous constituer une épargne de précaution. Dès que vous commencez à avoir des revenus (job d’été, premier emploi…), il est conseillé de mettre de l’argent de côté. La vie est pleine d’événements, et vous pouvez avoir un besoin d’argent rapidement pour faire face à des imprévus : une réparation de voiture, le frigo qui tombe en panne, une courte période de chômage, etc. ou tout simplement avoir envie de vous faire plaisir !
        
        3 types de placement vous permettent de placer des sommes facilement :
        
            le livret A dont le plafond est de 22 950 € ;
            le Livret développement durable et solidaire (LDDS) dont le plafond est de 12 000 € ;
            le Livret d’épargne populaire (LEP, uniquement accessible aux revenus modestes) dont le plafond est de 7 700 €.
        
        Ces comptes sont réglementés. Leur rémunération, les plafonds… sont fixés par l’État. Ils sont peu rémunérés. Le LEP a un taux légèrement supérieur (1 % actuellement) à ceux du livret A et du LDDS (0,50 %), mais tous rapportent moins que la hausse des prix (1,4 % en février 2020). Alors pourquoi épargner sur ces livrets ? Parce qu’ils sont sans risque, parce que votre capital est garanti, et vous pouvez retirer leurs sommes immédiatement et sans frais par simple virement sur votre compte bancaire. De plus les intérêts sont exonérés d’impôt sur le revenu et de prélèvement sociaux.
        
        Le montant maximum à placer sur ces produits dépend du profil d’épargnant de chacun.
        
        Néanmoins, dès lors que ces sommes ne servent qu’en cas de coup dur et rapportent peu, y mettre l’équivalent de 2 à 4 mois de salaire au total suffit amplement.
        2. Acheter sa résidence principale
        
        Vous n’allez sans doute pas acheter votre résidence principale en pensant à la retraite. Et pourtant cela contribue à prévoir sa retraite.
        
        Être propriétaire revêt de nombreux avantages pour un retraité. L’essentiel est celui de ne plus dépenser un loyer dans une période de la vie où les revenus diminuent. Autre avantage, vous conserverez l’usage de votre logement quoi qu’il arrive, tandis qu’un bail de location peut ne pas être reconduit.
        
        Par ailleurs, les prix au m2 ont tendance à augmenter, notamment dans les grandes villes. Vous avez donc la possibilité, si le marché immobilier évolue dans le bon sens, de faire une plus-value au moment de déménager si vous revendez votre bien.
        
        Une solution pour préparer le financement de votre crédit immobilier est d’ouvrir un Plan d’épargne logement (PEL). Il permet d'épargner pendant une phase de 4 à 10 ans (avec une rémunération brut de 1 % pour les PEL ouverts aujourd’hui). Vous devez verser au moins 540 € par an dans votre PEL et aucun retrait partiel n’est possible. En cas de retrait avant 4 ans, il peut être transformé en CEL (un livret également réglementé au fonctionnement similaire au Livret A). Sa rémunération est de 0,25 %, son plafond de 15 300 €.
        
        Le PEL donne ensuite la possibilité d'obtenir un prêt à un taux réglementé pour le financement d'un bien immobilier. Actuellement les taux d’emprunts sont particulièrement bas, et généralement inférieur à 2 %. Le PEL n’est donc pas intéressant immédiatement, mais il vous permet :
        
            de sécuriser ce taux d’emprunt. Ainsi, si dans 5 ans les taux sont remontés, vous pourrez bénéficier d’un taux de 2,20 % ;
            de vous constituer un apport personnel.
        
        En effet, si vous empruntez – ce qui sera très probablement nécessaire pour acheter un logement –, les établissements bancaires vous demanderont souvent un peu d’apport (au moins pour financer les frais de notaire).
        3. Préparer sa retraite à 30 ans avec des produits dédiés à la retraite
        
        Une fois l’épargne de précaution constituée, il est conseillé de se porter vers d’autres produits plus rémunérateurs à moyen ou long terme.
        
        Privilégiez des contrats souples qui vous permettront d’intensifier ou de réduire votre effort d’épargne (voire de récupérer certaines sommes) selon les évolutions de votre situation et de vos besoins.
        Préparer sa retraite avec l'assurance vie
        
        Parmi ces produits, l’assurance vie. Placement préféré des Français, c’est un produit idéal pour vous constituer progressivement un capital. Tentez d’isoler une partie de votre épargne sur un contrat d’assurance vie en vue de votre retraite. Si vous ouvrez un contrat dans cet objectif, vous serez peut-être moins tenté de venir récupérer les sommes placées pour réaliser un autre projet !
        
        Selon votre profil vous pouvez choisir au sein d’un contrat d’assurance vie les supports sur lesquels vous souhaitez placer votre épargne : l’assurance vie permet, au sein d’un même contrat, l’accès à plusieurs solutions d’investissement plus ou moins risquées qui vous offriront un rendement adapté à votre projet.
        
        Commencez dès maintenant à mettre régulièrement une petite somme de côté chaque mois sur un contrat d’assurance vie. En le faisant de façon automatique, vous vous créez ainsi un réflexe d’épargne, qui peut être indolore. Vous pouvez aussi, ponctuellement, épargner une part de vos revenus exceptionnels tels qu’un 13e mois, une prime, un cadeau… Petit à petit, vous vous dotez d’un véritable capital.
        
        Même s’il est ouvert dans une optique retraite, les fonds placés sur un contrat d’assurance vie restent disponibles en cas de besoin. Enfin, le régime fiscal de l’assurance vie devient particulièrement avantageux 8 ans après son ouverture. Alors, n’hésitez pas à l’ouvrir dès maintenant pour commencer à faire courir les 8 ans.
        À 30 ans, on peut préparer sa retraite avec le PEA
        
        Une autre solution peut être d’investir sur un Plan d’épargne en actions (PEA),  si vous souhaitez investir sur les marchés boursiers. Il s’agit d’un compte-titres alimenté par l’achat d’actions émises par des sociétés européennes. Le capital n’est pas garanti, ce placement comporte donc des risques. Mais ce risque est la contrepartie d'un potentiel de performance qui peut être plus important sur le long terme, contrairement à des investissements sur des livrets d'épargne, plus sûrs mais au rendement limité.
        
        Par ailleurs, les produits et plus-values sont exonérés d’impôts si vous les retirez après 5 ans.
        Prévoir sa retraite avec des produits d'épargne
        
        Enfin, des produits spécifiquement prévus pour préparer sa retraite (les anciens Perp et Madelin ou le petit nouveau crée par la loi Pacte, le PER Individuel) sont aussi envisageables. Ils peuvent être intéressants car vous pouvez bénéficier d’avantages fiscaux (les sommes versées sont souvent déductibles de vos revenus). Mais ces sommes sont, sauf cas particulier, bloquées jusqu’à la retraite. Il vaut mieux les envisager en complément, lorsque vous vous êtes déjà constitué un capital ou si vous avez des revenus confortables. Répartir votre épargne entre ces solutions est alors une solution intéressante.
        4. Profiter des plans d’épargne retraite de votre entreprise
        
        Si vous êtes salarié, des plans d’épargne retraite entreprise peuvent vous être proposés. Ils ont un gros avantage : une partie de l’argent versé provient de l’abondement de votre employeur… des sommes que vous n’avez pas à verser vous-même ! Alors n’hésitez pas à vous renseigner auprès de votre entreprise.
        
        Attention, les sommes versées dans ces produits (Perco et les nouveaux issus de la loi Pascte : PER d'entreprise collectif, Plan épargne retraite d'entreprise obligatoire) sont généralement bloquées jusqu’à votre retraite, sauf certains cas exceptionnels (comme l’achat de la résidence principale).
        En conclusion : commencez et diversifiez, vous ne le regretterez pas
        
        Prenez tôt le réflexe d’épargner – même sur de petites sommes. Dans l’épargne comme dans la vie, rien ne sert de courir ; il faut partir à point !
        Exemple : si à 30 ans, vous mettez 30 € (3 tickets de cinéma) par mois dans un plan avec un rendement de 2 % pendant 30 ans, vous vous retrouverez à 60 ans avec 14 708 € ! Si vous commencez à 50 ans, ce sera environ 4 fois moins (3 948 €).
        
        Bien évidemment, dès que votre pouvoir d’achat augmentera vous pourrez augmenter votre épargne régulière et ainsi obtenir un capital plus important.
        
        Quant aux produits dans lesquels vous épargnez, pensez à diversifier. En effet, les produits d’épargne se différencient par leur taux, leur risque, leurs possibilités de déblocage. Une épargne diversifiée permet ainsi de s’adapter à vos besoins et aux évènements auxquels vous pourriez faire face tout en optimisant votre capital et vos gains.
        ");
        $news->setImageName('5.jpg');
        $news->setSlug('preparer-sa-retraite-a-30-ans');
        $news->setCreatedAt(new \DateTime());
        $news->setUpdatedAt(new \DateTime());
        $news->setIsActive(true);
        $manager->persist($news);      

        $news = new News();
        $news->setTitre('La pension de réversion');
        $news->setDescription("La pension de réversion ne compense jamais totalement la perte de revenu.
        Des solutions d’assurance privée comme le plan épargne individuel permettent de protéger le conjoint survivant, y compris en cas de PACS ou de concubinage.
        Retraite : comment fonctionne la pension de réversion ?
        
        En cas de décès de votre conjoint, vous pouvez, sous conditions, toucher une partie de sa retraite de base et complémentaire, la retraite de réversion.
        Les conditions pour toucher la pension de réversion
        
        Les conditions pour toucher la pension de réversion sont les suivantes :
        
             Il faut être marié ou avoir été marié avec le défunt. En revanche, aucune réversion n’est prévue pour les personnes pacsées ou vivant en concubinage. De plus, certaines caisses exigent une durée minimale de mariage. Ainsi, pour les fonctionnaires, la durée minimale est fixée à 2 ans avant le départ à la retraite ou 4 ans dans les autres cas.
             L’époux survivant doit avoir un âge minimal, au moins 55 ans pour les conjoints des salariés du privé par exemple. L’âge du défunt n’est pas, quant à lui, une condition d’attribution.
             Pour la retraite de base (sauf fonctionnaires), les revenus du conjoint survivant ne doivent pas dépasser un certain montant (21.985€ par an en 2022 après abattement de 30%). Si le cumul revenu personnel et pension de réversion dépasse ce plafond, le montant de la pension est réduit pour respecter le plafonnement.
        
        Faut-il demander la pension de réversion ?
        
        Le versement de la pension de réversion n’est pas automatique. Un dossier complet contenant, notamment l’acte de naissance du défunt avec les mentions marginales, doit être déposé auprès du bon organisme. À défaut, un nouveau dossier auprès de la bonne caisse doit être remonté.
        Quels sont les effets d’un remariage sur la pension de réversion ?
        
        L’effet d’un remariage ou de la signature d’un PACS sur la pension de réversion varie selon les régimes. Ainsi, pour la personne survivant à un conjoint fonctionnaire, les versements s’arrêtent.
        
        Si le conjoint était salarié, seul le versement de la retraite complémentaire cesse. Enfin, il n’y a aucune incidence pour les indépendants.
        
        Par ailleurs, si la personne décédée a été mariée plusieurs fois, les conjoints survivants se partagent la pension de réversion au prorata de la durée de chaque union.
        Quel est le montant de la pension de réversion ?
        
        Chaque régime social a son propre mode de calcul de la pension de réversion. Ainsi, pour les fonctionnaires, ce montant s’élève à 50%. Pour les salariés et les indépendants (ex RSI – régime social des indépendants), le montant de la retraite de base est de 54% et de 60% pour la complémentaire.
        Réforme des retraites 2022 et pension de réversion
        
        Le projet de loi sur la réforme des retraites prévoit le maintien d’un niveau de vie minimum pour le conjoint survivant correspondant à 70% des revenus du couple avant décès. Il n’y aurait a priori plus de conditions de ressources et de plafonnement.
        
        De plus, les règles seraient harmonisées, quel que soit le statut du défunt (salarié du privé, indépendant, fonctionnaire, relevant d’un régime spécial). Le législateur emploie l’expression « droits conjugaux harmonisés » :
        
             à partir des 55 ans du conjoint survivant,
             avec une durée minimale de mariage et sous réserve de non-remariage. L’objectif est de compenser la perte réelle de revenu.
        
        Il faut, cependant, noter que les conjoints retraités vont bénéficier d’un droit spécifique :
        
             55% de la pension de la personne décédée versée à l’ex-conjoint âgé d’au-moins 55 ans,
            prorata en fonction de la durée de l’union et de la durée de cotisation de la personne décédée.
        
        La pension de réversion ne compense jamais totalement la perte de revenu. Des solutions d’assurance privée comme le plan d’épargne individuel permettent de protéger le conjoint survivant, y compris en cas de PACS ou de concubinage.  Contactez pour obtenir des conseils personnalisés.");
        $news->setImageName('6.jpg');
        $news->setSlug('la-pension-de-reversion');
        $news->setCreatedAt(new \DateTime());
        $news->setUpdatedAt(new \DateTime());
        $news->setIsActive(true);
        $manager->persist($news);    

        $manager->flush();
    }
}
