<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* public/cgu.html.twig */
class __TwigTemplate_3ad67d60dfcd31a4c004cb9ebff9eb0f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/cgu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/cgu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "public/cgu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "CGU / CGV
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
<section class=\"container\">
<h1> Conditions générales d'utilisation : </h1>

<h2 class=\"my-5\"> Article 1 : Objet </h2>
<p> Les présentes CGU ou Conditions Générales d’Utilisation encadrent juridiquement l’utilisation des services du site Coachingdevperso.fr (ci-après dénommé « le site »). Constituant le contrat entre la société Easywebfactory EURL, l’Utilisateur, l’accès au site doit être précédé de l’acceptation de ces CGU. L’accès à cette plateforme signifie l’acceptation des présentes CGU.  </p>

<h2 class=\"my-5\"> Article 2 : Mentions légales </h2>
<p>  L’édition du site Coachingdevperso.fr est assurée par la société Easywebfactory EURL inscrite au RCS sous le numéro 987654321, dont le siège social est localisé au 111 Route de saint Vrain, 91760 ITTEVILLE, France Métropolitaine. L’hébergeur du site Coachingdevperso.fr est la société Ionos SARL, 7 place de la gare, BP 70109, 57200 Sarreguemines Cedex, France.  </p>
 
<h2 class=\"my-5\"> Article 3 : Accès au site </h2>
<p> Le site Coachingdevperso.fr permet d’accéder gratuitement aux services suivants :  Vente de formation, produits, services sur le développement personnel. Le site est accessible gratuitement depuis n’importe où par tout utilisateur disposant d’un accès à Internet. Tous les frais nécessaires pour l’accès aux services (matériel informatique, connexion Internet…) sont à la charge de l’utilisateur. L’accès aux services dédiés aux membres s’effectue à l’aide d’un identifiant et d’un mot de passe. Pour des raisons de maintenance ou autres, l’accès au site peut être interrompu ou suspendu par l’éditeur sans préavis ni justification.  </p>
 
<h2 class=\"my-5\"> Article 4 : Collecte des données </h2>
<p> Pour la création du compte de l’Utilisateur, la collecte des informations au moment de l’inscription sur le site est nécessaire et obligatoire. Conformément à la loi n°78-17 du 6 janvier relative à l’informatique, aux fichiers et aux libertés, la collecte et le traitement d’informations personnelles s’effectuent dans le respect de la vie privée. Suivant la loi Informatique et Libertés en date du 6 janvier 1978, articles 39 et 40, l’Utilisateur dispose du droit d’accéder, de rectifier, de supprimer et d’opposer ses données personnelles. L’exercice de ce droit s’effectue par :  Le formulaire de contact ;  Son espace client.  </p>

<h2 class=\"my-5\"> Article 5 : Propriété intellectuelle </h2>
<p>  Les marques, logos ainsi que les contenus du site Coachingdevperso.fr (illustrations graphiques, textes…) sont protégés par le Code de la propriété intellectuelle et par le droit d’auteur. La reproduction et la copie des contenus par l'utilisateur requièrent une autorisation préalable du site. Dans ce cas, toute utilisation à des usages commerciaux ou à des fins publicitaires est proscrite. </p>
 
<h2 class=\"my-5\"> Article 6 : Responsabilité </h2>
<p>  Bien que les informations publiées sur le site soient réputées fiables, le site se réserve la faculté d’une non-garantie de la fiabilité des sources. Les informations diffusées sur le site sont présentées à titre purement informatif et sont sans valeur contractuelle. En dépit des mises à jour régulières, la responsabilité du site ne peut être engagée en cas de modification des dispositions administratives et juridiques apparaissant après la publication. Il en est de même pour l’utilisation et l’interprétation des informations communiquées sur la plateforme. Le site décline toute responsabilité concernant les éventuels virus pouvant infecter le matériel informatique de l'utilisateur après l’utilisation ou l’accès à ce site. Le site ne peut être tenu pour responsable en cas de force majeure ou du fait imprévisible et insurmontable d’un tiers. La garantie totale de la sécurité et la confidentialité des données n’est pas assurée par le site. Cependant, le site s’engage à mettre en œuvre toutes les méthodes requises pour le faire au mieux. </p>

<h2 class=\"my-5\"> Article 7 : Liens hypertextes </h2>
<p> Le site peut être constitué de liens hypertextes. En cliquant sur ces derniers, l’Utilisateur sortira de la plateforme. Cette dernière n’a pas de contrôle et ne peut pas être tenue responsable du contenu des pages web relatives à ces liens.  </p>

<h2 class=\"my-5\"> Article 8 : Cookies  </h2>
<p> Lors des visites sur le site, l’installation automatique d’un cookie sur le logiciel de navigation de l'utilisateur peut survenir. Les cookies correspondent à de petits fichiers déposés temporairement sur le disque dur de l’ordinateur de l'utilisateur. Ces cookies sont nécessaires pour assurer l’accessibilité et la navigation sur le site. Ces fichiers ne comportent pas d’informations personnelles et ne peuvent pas être utilisés pour l’identification d’une personne. L’information présente dans les cookies est utilisée pour améliorer les performances de navigation sur le site. En naviguant sur le site, l’Utilisateur accepte les cookies. Leur désactivation peut s’effectuer via les paramètres du logiciel de navigation. </p>

<h2 class=\"my-5\"> Article 9 : Publication par l’Utilisateur  </h2>
<p> Le site permet aux membres de publier des avis. Dans ses publications, le membre est tenu de respecter les règles de la Netiquette ainsi que les règles de droit en vigueur. Le site dispose du droit d’exercer une modération à priori sur les publications et peut refuser leur mise en ligne sans avoir à fournir de justification. Le membre garde l’intégralité de ses droits de propriété intellectuelle. Toutefois, toute publication sur le site implique la délégation du droit non exclusif et gratuit à la société éditrice de représenter, reproduire, modifier, adapter, distribuer et diffuser la publication n’importe où et sur n’importe quel support pour la durée de la propriété intellectuelle. Cela peut se faire directement ou par l’intermédiaire d’un tiers autorisé. Cela concerne notamment le droit d’utilisation de la publication sur le web et sur les réseaux de téléphonie mobile. À chaque utilisation, l’éditeur s’engage à mentionner le nom du membre à proximité de la publication. L'utilisateur est tenu responsable de tout contenu qu’il met en ligne. L’Utilisateur s’engage à ne pas publier de contenus susceptibles de porter atteinte aux intérêts de tierces personnes. Toutes procédures engagées en justice par un tiers lésé à l’encontre du site devront être prises en charge par l’Utilisateur. La suppression ou la modification par le site du contenu de l’Utilisateur peut s’effectuer à tout moment, pour n’importe quelle raison et sans préavis. </p>

<h2 class=\"my-5\"> Article 10 : </h2>
<p> Durée du contrat Le présent contrat est valable pour une durée indéterminée. Le début de l’utilisation des services du site marque l’application du contrat à l’égard de l'utilisateur.  </p>

<h2 class=\"my-5\"> Article 11 : </h2>
<p>  Droit applicable et juridiction compétente Le présent contrat est soumis à la législation française. L’absence de résolution à l’amiable des cas de litige entre les parties implique le recours aux tribunaux français compétents pour régler le contentieux. </p>
</section>

<h1> Conditions générales de vente </h1>

<section class=\"container\">
<p> Les présentes conditions générales de vente s'appliquent à toutes les ventes conclues sur le site Internet coachingdevperso.fr, sous réserve des conditions particulières indiquées dans la présentation des produits.  </p>

<h2 class=\"my-5\"> ARTICLE 1 : Mentions obligatoires </h2>
<p> Le site Internet coachingdevperso.fr est un service de : </p>
<ul class=\"text-center\" style=\"list-style:none;\">
    <li> Raison sociale : EasyWebFactory EURL </li>
    <li> Adresse du siège social : 111 Route de saint vrain 91760 Itteville FRANCE </li>
    <li> Numéro d'inscription au Registre du Commerce et des Sociétés : 987654321 </li>
    <li> Numéro individuel d'identification fiscale : 123456789 </li>
    <li> Adresse de courrier électronique : contact.easywebfactory@gmail.com </li>
    <li> Numéro de téléphone : 06 30 64 28 10 </li>
</ul>


<h2 class=\"my-5\"> ARTICLE 2 : Caractéristiques essentielles des produits et services vendus </h2>
<p> Le site Internet coachingdevperso.fr vend : </p>
<ul class=\"text-center\" style=\"list-style:none;\">
    <li> Des formations et des stages sur le domaine du développement personnel  </li>
    <li> Des coaching individuels </li>
    <li> Des produits manufacturés pour rester motivés (T-shirt, Mugs, Casquettes…) </li>
</ul>
<p> Le client déclare avoir pris connaissance et avoir accepté les conditions générales de vente antérieurement à la passation de sa commande. La validation de votre commande vaut donc pour acceptation des conditions générales de vente. </p>

<h2 class=\"my-5\"> ARTICLE 3 : Prix </h2>

<p> Les prix de nos produits sont indiqués en euros toutes taxes comprises (TTC). </p>
<p> En cas de commande livrée dans un pays autre que la France métropolitaine, le client est l'importateur des produits qu’il achète. Pour tous les produits expédiés hors des collectivités d’outre-mer ou de l’Union européenne, la facture est établie sur le prix hors taxes. Le client est seul responsable des déclarations et paiements de tout droit de douane ou autre taxe susceptibles d'être exigibles dans son pays. </p>
<p> Les frais de livraison ne sont pas compris dans le prix. Le bon de commande indique le montant des frais de livraison avant toute passation de commande. </p>

<h2 class=\"my-5\"> ARTICLE 4 : Délai de disponibilité des produits  </h2>
<p> Si vous avez commandé un produit indisponible postérieurement à la validation de votre commande, vous en serez immédiatement informé. Nous procéderons à l'annulation de votre achat. Si la somme avait déjà été débitée, vous serez immédiatement remboursé. </p>

<h2 class=\"my-5\"> ARTICLE 5 : Commande </h2>
<p> Vous avez la possibilité de commander nos produits directement sur notre site internet. </p>
<p> Pour passer une commande sur notre site, choisissez vos articles et ajoutez-les au panier. Validez le contenu de votre panier. </p>
<p> Si vous possédez déjà un compte client sur notre site, veuillez vous identifier. </p>
<p> Si vous ne possédez pas de compte client sur notre site, veuillez en créer un. </p>
<p> Cochez la case « livraison » pour validation de celle-ci.
Choisissez un mode de livraison en fonction de votre commande. </p>
<p> Cochez la case « paiement » pour honorer votre commande en ligne.
Choisissez votre mode de paiement et cochez la case « acceptation des CGV ».
Validez votre paiement.  </p>
<p> Vous recevrez un e-mail de confirmation de votre commande sur l'adresse mail que vous avez indiquée lors de la création de votre compte client. </p>
<p> Vérifiez les détails et le montant total de votre commande. Rectifiez au préalable les éventuelles erreurs avant toute acceptation. </p>
<p> Le transfert de propriété du produit n'aura lieu qu'au paiement complet de votre commande. </p>

<h2 class=\"my-5\"> ARTICLE 6 : Livraison </h2>
<p> Nous effectuons nos livraisons uniquement en France métropolitaine. Sont donc exclus la Corse et les DOM-TOM. Nous livrons exclusivement à l'adresse indiquée par le client. </p>
<p> Nous vous proposons un seul type de livraison à savoir colissimo, d'un montant de 8 € par commande. </p>
<p> Les délais de livraison sont donnés à titre indicatif. Ils peuvent évoluer en raison de différents facteurs comme la disponibilité de notre transporteur, du traitement de la commande, etc… </p>

<h2 class=\"my-5\"> ARTICLE 7 : Modalités de paiement</h2>
<p> Plusieurs moyens de paiement sont acceptés. En tant que client, vous avez la possibilité de payer par : Stripe ou PayPal. </p>
<p> Nous acceptons les paiements par carte bleue / visa / mastercard / eurocard. Lors de votre paiement en ligne, indiquez le numéro de votre carte bancaire sur la page de paiement stripe, sa date d'expiration et les 3 chiffres inscrits au dos de celle-ci. Le paiement en ligne est sécurisé. </p>
<p> Nous exigeons un paiement intégral de la commande. </p>
<p> Toutefois, en cas d'offres spéciales et pour certains produits comme les formations ou les stages, vous avez la possibilité de payer en 3 fois sans frais. </p>

<h2 class=\"my-5\"> ARTICLE 8 : Droit de rétractation </h2>
<p> Conformément à l'article L121-20 du Code de la consommation, vous disposez d'un droit de rétractation à exercer dans un délai de sept jours ouvrables à compter de la réception de l'article. Vous n'avez ni à justifier de motifs ni à payer de pénalités, mis à part les frais de retour ; </p>
<p> Dès réception du produit ou au jour de l'acceptation de l'offre, vous disposez d'un droit de rétractation de 15 jours calendaires, soit 8 jours de plus que ce que prévoit la législation française. </p>
<p> Réexpédiez le produit dans le délai mentionné ci-dessus. Dans le même délai, informez-nous de l'exercice de votre droit de rétractation par mail à contact.easywebfactory@gmail.com. </p>
<p>  La marchandise est à retourner à l'adresse suivante, les frais de retour étant à votre charge : 111 Route de saint vrain 91760 Itteville FRANCE.</p>
<p> Afin que notre produit retourné soit à nouveau commercialisable, vous vous engagez à nous le renvoyer dans son emballage d'origine et en parfait état. L'emballage peut être ouvert et l'article utilisé tant qu'il est possible de le commercialiser. </p>

<h2 class=\"my-5\"> ARTICLE 9 : Garantie et droit de retour du produit (vice caché ou défectuosité) </h2>
<p> Vous bénéficiez de la garantie légale de conformité et donc d'une application de l'article L211-4 du Code de la consommation qui dispose que : </p>
<ul class=\"text-center\" style=\"list-style:none;\">
    <li> « Le vendeur est tenu de livrer un bien conforme au contrat et répond des défauts de conformité existant lors de la délivrance. » </li>
    <li>  « Il répond également des défauts de conformité résultant de l'emballage, des instructions de montage ou de l'installation lorsque celle-ci a été mise à sa charge par le contrat ou a été réalisée sous sa responsabilité. »</li>
</ul>
<p> La garantie est applicable à nos produits ayant un caractère défectueux (absence de fonctionnalité, produit impropre à l'usage auquel vous pouvez vous attendre, absence des caractéristiques présentées en ligne, dysfonctionnement partiel ou total du produit, panne du produit) et ce, même en l'absence de garantie contractuelle. </p>
<p> Un défaut de conformité peut apparaître jusqu'à 6 mois après la transaction. Son existence est présumée au jour de la délivrance du bien et vous n'avez pas à démontrer l'existence du défaut de conformité. </p>
<p> Dans le cas d'un défaut de conformité, nous nous engageons à : </p>
<ul class=\"text-center\" style=\"list-style:none;\">
    <li>remplacer le produit ;</li>
    <li>réparer le produit dans un délai de 30 jours et sans frais.</li>
</ul>
<p> En cas de défaillance dans l'exécution de notre obligation ou en cas de défectuosité majeure, nous nous engageons à vous rembourser la totalité du prix versé ou une partie du prix si vous souhaitez conserver le produit. </p>
<p> La présomption du défaut de conformité ne s'applique plus s'il apparaît après 6 mois suivants la vente et avant 2 ans. Vous devez rapporter la preuve de la défectuosité de notre produit. </p>
<p> En cas de vice caché de votre produit, vous bénéficiez de la garantie légale des vices cachés des articles 1641 à 1649 du Code civil. Elle s'applique à tous nos produits. Cette garantie s'applique lorsque le vice rend le produit impropre à l'usage ou lorsqu'il réduit à tel point son usage que vous ne l'auriez pas acheté ou l'auriez payé à un moindre prix. La garantie contre les vices cachés ne s'applique que lorsque le vice est antérieur à la vente. Vous disposez d'un délai de 2 ans à compter de la découverte du vice pour agir. </p>
<p> En présence d'un vice, nous nous engageons à remplacer votre produit ou à vous rembourser dans les plus brefs délais. </p>
<p> *Concernant la garantie “100% satisfait ou remboursé” applicable à certains de nos produits, celle-ci est applicable : </p>
<ul class=\"text-center\" style=\"list-style:none;\">
    <li> Après un délai de 90 jours  </li>
    <li> Si la personne atteste sur l’honneur et peut prouver avoir suivi scrupuleusement les conseils et le contenu de nos formations et stages  </li>
    <li> Estime ne pas avoir obtenu les bénéfices attendus </li>
</ul>
<p> Si toutes les conditions sont réunies, alors la société EasyWebFactory procèdera comme promis à un remboursement de 80% du prix du produit commandé et utilisé par la personne par virement bancaire sous 15 jours après un entretien téléphonique avec le client pour attester de son expérience. </p>

<h2 class=\"my-5\"> ARTICLE 10 : Conditions et délais de remboursement </h2>
<p> Le remboursement des produits est intégral. Il s'effectue par virement bancaire dans les plus brefs délais et au plus tard dans les 30 jours à compter de la date d'exercice du droit de rétractation. </p>

<h2 class=\"my-5\"> ARTICLE 11 : Réclamations du consommateur </h2>
<p>  Toute réclamation du consommateur est à adresser par courrier postal à l'adresse mentionnée ci-contre 111 route de saint vrain 91760 Itteville ou par voie électronique à contact.easywebfactory@gmail.com.</p>
 
<h2 class=\"my-5\"> ARTICLE 12 : Propriété intellectuelle </h2>
<p> Tous les commentaires, images, illustrations de notre site nous sont exclusivement réservés. Au titre de la propriété intellectuelle et du droit d'auteur, toute utilisation est prohibée sauf à usage privé. </p>
<p> Sans autorisation préalable, toute reproduction de notre site, qu'elle soit partielle ou totale, est strictement interdite. </p>
  
<h2 class=\"my-5\"> ARTICLE 13 : Responsabilité  </h2>
<p> Conformément à l'article 1147 du Code civil, nous engageons notre responsabilité contractuelle de plein droit à votre égard en cas d'inexécution ou de mauvaise exécution du contrat conclu. </p>
<p> Toutefois, notre responsabilité contractuelle ne peut être engagée dans les situations mentionnées ci-dessous : </p>
<ul class=\"text-center\" style=\"list-style:none;\">
    <li>cas de la force majeure ;</li>
    <li>fait étranger qui ne peut nous être imputable ;</li>
</ul>
<p> Les images de notre site n'ont aucune valeur contractuelle. Elles ne sauraient donc engager notre responsabilité. </p>

<h2 class=\"my-5\">ARTICLE 14 : Données à caractère personnel</h2>
<p> Certaines informations relatives au client seront transmises au vendeur (à savoir le nom, prénom, adresse, code postal et numéro de téléphone) et ce, afin de permettre le traitement et la livraison des produits commandés.  </p>
<p> Le site assure au client une collecte et un traitement d'informations personnelles dans le respect de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés. Le site est déclaré à la CNIL sous le numéro 123654789 </p>
<p> En vertu des articles 39 et 40 de la loi en date du 6 janvier 1978, le client dispose d'un droit d'accès, de rectification, de suppression et d'opposition de ses données personnelles. Le client exerce ce droit via : </p>
<ul class=\"text-center\" style=\"list-style:none;\">
    <li>son espace personnel</li>
    <li>un formulaire de contact</li>
    <li>par mail à contact.easywebfactory@gmail.com</li>
</ul>

<h2 class=\"my-5\"> ARTICLE 15 : Juridiction compétente et droit applicable</h2>
<p> En cas de litige entre le client consommateur et notre société, le droit applicable est le droit français.
Les juridictions françaises ont seules compétences pour trancher le litige. </p>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "public/cgu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
CGU / CGV
{% endblock title %}

{% block main %}

<section class=\"container\">
<h1> Conditions générales d'utilisation : </h1>

<h2 class=\"my-5\"> Article 1 : Objet </h2>
<p> Les présentes CGU ou Conditions Générales d’Utilisation encadrent juridiquement l’utilisation des services du site Coachingdevperso.fr (ci-après dénommé « le site »). Constituant le contrat entre la société Easywebfactory EURL, l’Utilisateur, l’accès au site doit être précédé de l’acceptation de ces CGU. L’accès à cette plateforme signifie l’acceptation des présentes CGU.  </p>

<h2 class=\"my-5\"> Article 2 : Mentions légales </h2>
<p>  L’édition du site Coachingdevperso.fr est assurée par la société Easywebfactory EURL inscrite au RCS sous le numéro 987654321, dont le siège social est localisé au 111 Route de saint Vrain, 91760 ITTEVILLE, France Métropolitaine. L’hébergeur du site Coachingdevperso.fr est la société Ionos SARL, 7 place de la gare, BP 70109, 57200 Sarreguemines Cedex, France.  </p>
 
<h2 class=\"my-5\"> Article 3 : Accès au site </h2>
<p> Le site Coachingdevperso.fr permet d’accéder gratuitement aux services suivants :  Vente de formation, produits, services sur le développement personnel. Le site est accessible gratuitement depuis n’importe où par tout utilisateur disposant d’un accès à Internet. Tous les frais nécessaires pour l’accès aux services (matériel informatique, connexion Internet…) sont à la charge de l’utilisateur. L’accès aux services dédiés aux membres s’effectue à l’aide d’un identifiant et d’un mot de passe. Pour des raisons de maintenance ou autres, l’accès au site peut être interrompu ou suspendu par l’éditeur sans préavis ni justification.  </p>
 
<h2 class=\"my-5\"> Article 4 : Collecte des données </h2>
<p> Pour la création du compte de l’Utilisateur, la collecte des informations au moment de l’inscription sur le site est nécessaire et obligatoire. Conformément à la loi n°78-17 du 6 janvier relative à l’informatique, aux fichiers et aux libertés, la collecte et le traitement d’informations personnelles s’effectuent dans le respect de la vie privée. Suivant la loi Informatique et Libertés en date du 6 janvier 1978, articles 39 et 40, l’Utilisateur dispose du droit d’accéder, de rectifier, de supprimer et d’opposer ses données personnelles. L’exercice de ce droit s’effectue par :  Le formulaire de contact ;  Son espace client.  </p>

<h2 class=\"my-5\"> Article 5 : Propriété intellectuelle </h2>
<p>  Les marques, logos ainsi que les contenus du site Coachingdevperso.fr (illustrations graphiques, textes…) sont protégés par le Code de la propriété intellectuelle et par le droit d’auteur. La reproduction et la copie des contenus par l'utilisateur requièrent une autorisation préalable du site. Dans ce cas, toute utilisation à des usages commerciaux ou à des fins publicitaires est proscrite. </p>
 
<h2 class=\"my-5\"> Article 6 : Responsabilité </h2>
<p>  Bien que les informations publiées sur le site soient réputées fiables, le site se réserve la faculté d’une non-garantie de la fiabilité des sources. Les informations diffusées sur le site sont présentées à titre purement informatif et sont sans valeur contractuelle. En dépit des mises à jour régulières, la responsabilité du site ne peut être engagée en cas de modification des dispositions administratives et juridiques apparaissant après la publication. Il en est de même pour l’utilisation et l’interprétation des informations communiquées sur la plateforme. Le site décline toute responsabilité concernant les éventuels virus pouvant infecter le matériel informatique de l'utilisateur après l’utilisation ou l’accès à ce site. Le site ne peut être tenu pour responsable en cas de force majeure ou du fait imprévisible et insurmontable d’un tiers. La garantie totale de la sécurité et la confidentialité des données n’est pas assurée par le site. Cependant, le site s’engage à mettre en œuvre toutes les méthodes requises pour le faire au mieux. </p>

<h2 class=\"my-5\"> Article 7 : Liens hypertextes </h2>
<p> Le site peut être constitué de liens hypertextes. En cliquant sur ces derniers, l’Utilisateur sortira de la plateforme. Cette dernière n’a pas de contrôle et ne peut pas être tenue responsable du contenu des pages web relatives à ces liens.  </p>

<h2 class=\"my-5\"> Article 8 : Cookies  </h2>
<p> Lors des visites sur le site, l’installation automatique d’un cookie sur le logiciel de navigation de l'utilisateur peut survenir. Les cookies correspondent à de petits fichiers déposés temporairement sur le disque dur de l’ordinateur de l'utilisateur. Ces cookies sont nécessaires pour assurer l’accessibilité et la navigation sur le site. Ces fichiers ne comportent pas d’informations personnelles et ne peuvent pas être utilisés pour l’identification d’une personne. L’information présente dans les cookies est utilisée pour améliorer les performances de navigation sur le site. En naviguant sur le site, l’Utilisateur accepte les cookies. Leur désactivation peut s’effectuer via les paramètres du logiciel de navigation. </p>

<h2 class=\"my-5\"> Article 9 : Publication par l’Utilisateur  </h2>
<p> Le site permet aux membres de publier des avis. Dans ses publications, le membre est tenu de respecter les règles de la Netiquette ainsi que les règles de droit en vigueur. Le site dispose du droit d’exercer une modération à priori sur les publications et peut refuser leur mise en ligne sans avoir à fournir de justification. Le membre garde l’intégralité de ses droits de propriété intellectuelle. Toutefois, toute publication sur le site implique la délégation du droit non exclusif et gratuit à la société éditrice de représenter, reproduire, modifier, adapter, distribuer et diffuser la publication n’importe où et sur n’importe quel support pour la durée de la propriété intellectuelle. Cela peut se faire directement ou par l’intermédiaire d’un tiers autorisé. Cela concerne notamment le droit d’utilisation de la publication sur le web et sur les réseaux de téléphonie mobile. À chaque utilisation, l’éditeur s’engage à mentionner le nom du membre à proximité de la publication. L'utilisateur est tenu responsable de tout contenu qu’il met en ligne. L’Utilisateur s’engage à ne pas publier de contenus susceptibles de porter atteinte aux intérêts de tierces personnes. Toutes procédures engagées en justice par un tiers lésé à l’encontre du site devront être prises en charge par l’Utilisateur. La suppression ou la modification par le site du contenu de l’Utilisateur peut s’effectuer à tout moment, pour n’importe quelle raison et sans préavis. </p>

<h2 class=\"my-5\"> Article 10 : </h2>
<p> Durée du contrat Le présent contrat est valable pour une durée indéterminée. Le début de l’utilisation des services du site marque l’application du contrat à l’égard de l'utilisateur.  </p>

<h2 class=\"my-5\"> Article 11 : </h2>
<p>  Droit applicable et juridiction compétente Le présent contrat est soumis à la législation française. L’absence de résolution à l’amiable des cas de litige entre les parties implique le recours aux tribunaux français compétents pour régler le contentieux. </p>
</section>

<h1> Conditions générales de vente </h1>

<section class=\"container\">
<p> Les présentes conditions générales de vente s'appliquent à toutes les ventes conclues sur le site Internet coachingdevperso.fr, sous réserve des conditions particulières indiquées dans la présentation des produits.  </p>

<h2 class=\"my-5\"> ARTICLE 1 : Mentions obligatoires </h2>
<p> Le site Internet coachingdevperso.fr est un service de : </p>
<ul class=\"text-center\" style=\"list-style:none;\">
    <li> Raison sociale : EasyWebFactory EURL </li>
    <li> Adresse du siège social : 111 Route de saint vrain 91760 Itteville FRANCE </li>
    <li> Numéro d'inscription au Registre du Commerce et des Sociétés : 987654321 </li>
    <li> Numéro individuel d'identification fiscale : 123456789 </li>
    <li> Adresse de courrier électronique : contact.easywebfactory@gmail.com </li>
    <li> Numéro de téléphone : 06 30 64 28 10 </li>
</ul>


<h2 class=\"my-5\"> ARTICLE 2 : Caractéristiques essentielles des produits et services vendus </h2>
<p> Le site Internet coachingdevperso.fr vend : </p>
<ul class=\"text-center\" style=\"list-style:none;\">
    <li> Des formations et des stages sur le domaine du développement personnel  </li>
    <li> Des coaching individuels </li>
    <li> Des produits manufacturés pour rester motivés (T-shirt, Mugs, Casquettes…) </li>
</ul>
<p> Le client déclare avoir pris connaissance et avoir accepté les conditions générales de vente antérieurement à la passation de sa commande. La validation de votre commande vaut donc pour acceptation des conditions générales de vente. </p>

<h2 class=\"my-5\"> ARTICLE 3 : Prix </h2>

<p> Les prix de nos produits sont indiqués en euros toutes taxes comprises (TTC). </p>
<p> En cas de commande livrée dans un pays autre que la France métropolitaine, le client est l'importateur des produits qu’il achète. Pour tous les produits expédiés hors des collectivités d’outre-mer ou de l’Union européenne, la facture est établie sur le prix hors taxes. Le client est seul responsable des déclarations et paiements de tout droit de douane ou autre taxe susceptibles d'être exigibles dans son pays. </p>
<p> Les frais de livraison ne sont pas compris dans le prix. Le bon de commande indique le montant des frais de livraison avant toute passation de commande. </p>

<h2 class=\"my-5\"> ARTICLE 4 : Délai de disponibilité des produits  </h2>
<p> Si vous avez commandé un produit indisponible postérieurement à la validation de votre commande, vous en serez immédiatement informé. Nous procéderons à l'annulation de votre achat. Si la somme avait déjà été débitée, vous serez immédiatement remboursé. </p>

<h2 class=\"my-5\"> ARTICLE 5 : Commande </h2>
<p> Vous avez la possibilité de commander nos produits directement sur notre site internet. </p>
<p> Pour passer une commande sur notre site, choisissez vos articles et ajoutez-les au panier. Validez le contenu de votre panier. </p>
<p> Si vous possédez déjà un compte client sur notre site, veuillez vous identifier. </p>
<p> Si vous ne possédez pas de compte client sur notre site, veuillez en créer un. </p>
<p> Cochez la case « livraison » pour validation de celle-ci.
Choisissez un mode de livraison en fonction de votre commande. </p>
<p> Cochez la case « paiement » pour honorer votre commande en ligne.
Choisissez votre mode de paiement et cochez la case « acceptation des CGV ».
Validez votre paiement.  </p>
<p> Vous recevrez un e-mail de confirmation de votre commande sur l'adresse mail que vous avez indiquée lors de la création de votre compte client. </p>
<p> Vérifiez les détails et le montant total de votre commande. Rectifiez au préalable les éventuelles erreurs avant toute acceptation. </p>
<p> Le transfert de propriété du produit n'aura lieu qu'au paiement complet de votre commande. </p>

<h2 class=\"my-5\"> ARTICLE 6 : Livraison </h2>
<p> Nous effectuons nos livraisons uniquement en France métropolitaine. Sont donc exclus la Corse et les DOM-TOM. Nous livrons exclusivement à l'adresse indiquée par le client. </p>
<p> Nous vous proposons un seul type de livraison à savoir colissimo, d'un montant de 8 € par commande. </p>
<p> Les délais de livraison sont donnés à titre indicatif. Ils peuvent évoluer en raison de différents facteurs comme la disponibilité de notre transporteur, du traitement de la commande, etc… </p>

<h2 class=\"my-5\"> ARTICLE 7 : Modalités de paiement</h2>
<p> Plusieurs moyens de paiement sont acceptés. En tant que client, vous avez la possibilité de payer par : Stripe ou PayPal. </p>
<p> Nous acceptons les paiements par carte bleue / visa / mastercard / eurocard. Lors de votre paiement en ligne, indiquez le numéro de votre carte bancaire sur la page de paiement stripe, sa date d'expiration et les 3 chiffres inscrits au dos de celle-ci. Le paiement en ligne est sécurisé. </p>
<p> Nous exigeons un paiement intégral de la commande. </p>
<p> Toutefois, en cas d'offres spéciales et pour certains produits comme les formations ou les stages, vous avez la possibilité de payer en 3 fois sans frais. </p>

<h2 class=\"my-5\"> ARTICLE 8 : Droit de rétractation </h2>
<p> Conformément à l'article L121-20 du Code de la consommation, vous disposez d'un droit de rétractation à exercer dans un délai de sept jours ouvrables à compter de la réception de l'article. Vous n'avez ni à justifier de motifs ni à payer de pénalités, mis à part les frais de retour ; </p>
<p> Dès réception du produit ou au jour de l'acceptation de l'offre, vous disposez d'un droit de rétractation de 15 jours calendaires, soit 8 jours de plus que ce que prévoit la législation française. </p>
<p> Réexpédiez le produit dans le délai mentionné ci-dessus. Dans le même délai, informez-nous de l'exercice de votre droit de rétractation par mail à contact.easywebfactory@gmail.com. </p>
<p>  La marchandise est à retourner à l'adresse suivante, les frais de retour étant à votre charge : 111 Route de saint vrain 91760 Itteville FRANCE.</p>
<p> Afin que notre produit retourné soit à nouveau commercialisable, vous vous engagez à nous le renvoyer dans son emballage d'origine et en parfait état. L'emballage peut être ouvert et l'article utilisé tant qu'il est possible de le commercialiser. </p>

<h2 class=\"my-5\"> ARTICLE 9 : Garantie et droit de retour du produit (vice caché ou défectuosité) </h2>
<p> Vous bénéficiez de la garantie légale de conformité et donc d'une application de l'article L211-4 du Code de la consommation qui dispose que : </p>
<ul class=\"text-center\" style=\"list-style:none;\">
    <li> « Le vendeur est tenu de livrer un bien conforme au contrat et répond des défauts de conformité existant lors de la délivrance. » </li>
    <li>  « Il répond également des défauts de conformité résultant de l'emballage, des instructions de montage ou de l'installation lorsque celle-ci a été mise à sa charge par le contrat ou a été réalisée sous sa responsabilité. »</li>
</ul>
<p> La garantie est applicable à nos produits ayant un caractère défectueux (absence de fonctionnalité, produit impropre à l'usage auquel vous pouvez vous attendre, absence des caractéristiques présentées en ligne, dysfonctionnement partiel ou total du produit, panne du produit) et ce, même en l'absence de garantie contractuelle. </p>
<p> Un défaut de conformité peut apparaître jusqu'à 6 mois après la transaction. Son existence est présumée au jour de la délivrance du bien et vous n'avez pas à démontrer l'existence du défaut de conformité. </p>
<p> Dans le cas d'un défaut de conformité, nous nous engageons à : </p>
<ul class=\"text-center\" style=\"list-style:none;\">
    <li>remplacer le produit ;</li>
    <li>réparer le produit dans un délai de 30 jours et sans frais.</li>
</ul>
<p> En cas de défaillance dans l'exécution de notre obligation ou en cas de défectuosité majeure, nous nous engageons à vous rembourser la totalité du prix versé ou une partie du prix si vous souhaitez conserver le produit. </p>
<p> La présomption du défaut de conformité ne s'applique plus s'il apparaît après 6 mois suivants la vente et avant 2 ans. Vous devez rapporter la preuve de la défectuosité de notre produit. </p>
<p> En cas de vice caché de votre produit, vous bénéficiez de la garantie légale des vices cachés des articles 1641 à 1649 du Code civil. Elle s'applique à tous nos produits. Cette garantie s'applique lorsque le vice rend le produit impropre à l'usage ou lorsqu'il réduit à tel point son usage que vous ne l'auriez pas acheté ou l'auriez payé à un moindre prix. La garantie contre les vices cachés ne s'applique que lorsque le vice est antérieur à la vente. Vous disposez d'un délai de 2 ans à compter de la découverte du vice pour agir. </p>
<p> En présence d'un vice, nous nous engageons à remplacer votre produit ou à vous rembourser dans les plus brefs délais. </p>
<p> *Concernant la garantie “100% satisfait ou remboursé” applicable à certains de nos produits, celle-ci est applicable : </p>
<ul class=\"text-center\" style=\"list-style:none;\">
    <li> Après un délai de 90 jours  </li>
    <li> Si la personne atteste sur l’honneur et peut prouver avoir suivi scrupuleusement les conseils et le contenu de nos formations et stages  </li>
    <li> Estime ne pas avoir obtenu les bénéfices attendus </li>
</ul>
<p> Si toutes les conditions sont réunies, alors la société EasyWebFactory procèdera comme promis à un remboursement de 80% du prix du produit commandé et utilisé par la personne par virement bancaire sous 15 jours après un entretien téléphonique avec le client pour attester de son expérience. </p>

<h2 class=\"my-5\"> ARTICLE 10 : Conditions et délais de remboursement </h2>
<p> Le remboursement des produits est intégral. Il s'effectue par virement bancaire dans les plus brefs délais et au plus tard dans les 30 jours à compter de la date d'exercice du droit de rétractation. </p>

<h2 class=\"my-5\"> ARTICLE 11 : Réclamations du consommateur </h2>
<p>  Toute réclamation du consommateur est à adresser par courrier postal à l'adresse mentionnée ci-contre 111 route de saint vrain 91760 Itteville ou par voie électronique à contact.easywebfactory@gmail.com.</p>
 
<h2 class=\"my-5\"> ARTICLE 12 : Propriété intellectuelle </h2>
<p> Tous les commentaires, images, illustrations de notre site nous sont exclusivement réservés. Au titre de la propriété intellectuelle et du droit d'auteur, toute utilisation est prohibée sauf à usage privé. </p>
<p> Sans autorisation préalable, toute reproduction de notre site, qu'elle soit partielle ou totale, est strictement interdite. </p>
  
<h2 class=\"my-5\"> ARTICLE 13 : Responsabilité  </h2>
<p> Conformément à l'article 1147 du Code civil, nous engageons notre responsabilité contractuelle de plein droit à votre égard en cas d'inexécution ou de mauvaise exécution du contrat conclu. </p>
<p> Toutefois, notre responsabilité contractuelle ne peut être engagée dans les situations mentionnées ci-dessous : </p>
<ul class=\"text-center\" style=\"list-style:none;\">
    <li>cas de la force majeure ;</li>
    <li>fait étranger qui ne peut nous être imputable ;</li>
</ul>
<p> Les images de notre site n'ont aucune valeur contractuelle. Elles ne sauraient donc engager notre responsabilité. </p>

<h2 class=\"my-5\">ARTICLE 14 : Données à caractère personnel</h2>
<p> Certaines informations relatives au client seront transmises au vendeur (à savoir le nom, prénom, adresse, code postal et numéro de téléphone) et ce, afin de permettre le traitement et la livraison des produits commandés.  </p>
<p> Le site assure au client une collecte et un traitement d'informations personnelles dans le respect de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés. Le site est déclaré à la CNIL sous le numéro 123654789 </p>
<p> En vertu des articles 39 et 40 de la loi en date du 6 janvier 1978, le client dispose d'un droit d'accès, de rectification, de suppression et d'opposition de ses données personnelles. Le client exerce ce droit via : </p>
<ul class=\"text-center\" style=\"list-style:none;\">
    <li>son espace personnel</li>
    <li>un formulaire de contact</li>
    <li>par mail à contact.easywebfactory@gmail.com</li>
</ul>

<h2 class=\"my-5\"> ARTICLE 15 : Juridiction compétente et droit applicable</h2>
<p> En cas de litige entre le client consommateur et notre société, le droit applicable est le droit français.
Les juridictions françaises ont seules compétences pour trancher le litige. </p>
</section>
{% endblock main %}", "public/cgu.html.twig", "C:\\wamp64\\www\\symfony\\3.1 projet-coaching-prod-main\\templates\\public\\cgu.html.twig");
    }
}
