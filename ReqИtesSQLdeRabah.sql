/* donc la première version s le INNER JOIN était une syntaxe introduite dans les normes SQL plus récentes et est souvent 
préférée pour sa clarté et sa lisibilité 
La duexième méthode avec la clause WHERE était plus courante 
dans les anciennes versions de SQL et peut être renconctrée dans
 du code plus ancien 

La troisième méthode avec INNER JOIN utilisant la syntaxe ON ets également une syntaxe plus moderne qui permet de séparer plsu clairement les condtions de jointures des a utres conditions de filtrage 

Chaque méthode a ses avantage et ses inconvénients et l'évlotution des pratiques peut être liée à des améliorations 
dans la compréhension du langage SQL, des optimisations de performances introduites dans les 
SGBD, ou simplement des préférences de style */






/*Requêtes SQL à préparer et à tester individuellement Test ?*/
 
    /*Profils et comptes :*/
/*1. Requêtes d'ajout des données d'un profil + compte associé*/
-- Ajout d'un compte utilisateur
INSERT INTO `t_compte_utilisateur_cpt` (`cpt_pseudo`, `cpt_mot_de_passe`) VALUES ('valerie.marc@univ-brest.fr', MD5("gEsNACS_24"));
-- Ajout d'un profil utilisateur associé au compte
INSERT INTO `t_profil_utilisateur_prf` (`prf_nom`, `prf_prenom`, `prf_validite`, `prf_statut`, `prf_date_creation`, `cpt_pseudo`) 
VALUES ('MARC', 'Valéire', 'A', 'G', '2024-02-03', 'valerie.marc@univ-brest.fr');

/*2. Requête de vérification des données de connexion (pseudo et mot de passe), c’est à dire
requête qui vérifie l’existence (ou non) du couple pseudo / mot de passe (profil activé)*/
SELECT COUNT(*) AS count_matches
FROM t_compte_utilisateur_cpt cu
JOIN t_profil_utilisateur_prf pr ON cu.cpt_pseudo = pr.cpt_pseudo
WHERE cu.cpt_pseudo = 'valerie.marc@univ-brest.fr'
AND cu.cpt_mot_de_passe = MD5("gEsNACS_24")
AND pr.prf_validite = 'A';


/*3. Requête de récupération de toutes les données d''un utilisateur (pseudo connu)*/
SELECT *
FROM t_compte_utilisateur_cpt cu
JOIN t_profil_utilisateur_prf pr ON cu.cpt_pseudo = pr.cpt_pseudo
WHERE cu.cpt_pseudo = 'saad.elouliky@etudiant.univ-brest.fr';

/*4. Requête permettant de connaître le statut d’un utilisateur dont on connaît le nom et le
prénom*/
SELECT prf_statut
FROM t_profil_utilisateur_prf
WHERE prf_nom = 'MOUFID' AND prf_prenom = 'Yahya';

/*5. Requête de modification de plusieurs données d''un profil (pseudo connu)*/
UPDATE t_profil_utilisateur_prf
SET prf_nom = 'MOUFID', prf_prenom = 'Yahya', prf_validite = 'A', prf_statut = 'G'
WHERE cpt_pseudo = 'yahya.moufid@etudiant.univ-brest.fr';


/*6. Requête de mise à jour du mot de passe d''un compte (pseudo connu)*/
UPDATE t_compte_utilisateur_cpt
SET cpt_mot_de_passe = MD5('MIKI93485TKKEKEKEFFKEK%&$')
WHERE cpt_pseudo = 'yahya.moufid@etudiant.univ-brest.fr';

/*7. Requête listant toutes les données des profils + comptes associés*/
SELECT *
FROM t_profil_utilisateur_prf
JOIN t_compte_utilisateur_cpt ON t_profil_utilisateur_prf.cpt_pseudo = t_compte_utilisateur_cpt.cpt_pseudo;

/*8. Requête de désactivation (/activation) d'un profil (pseudo connu)*/
UPDATE t_profil_utilisateur_prf
SET prf_validite = 'D'
WHERE cpt_pseudo = 'hakim-mohamed-arab.aithamou@etudiant.univ-brest.fr';
UPDATE t_profil_utilisateur_prf
SET prf_validite = 'A'
WHERE cpt_pseudo = 'hakim-mohamed-arab.aithamou@etudiant.univ-brest.fr';

/*9. Requête(s) supprimant un profil et le compte associé (pseudo connu)*/
DELETE t_profil_utilisateur_prf, t_compte_utilisateur_cpt
FROM t_profil_utilisateur_prf
JOIN t_compte_utilisateur_cpt ON t_profil_utilisateur_prf.cpt_pseudo = t_compte_utilisateur_cpt.cpt_pseudo
WHERE t_profil_utilisateur_prf.cpt_pseudo = 'rabah.toubal@etudiant.univ-brest.fr
';
    /* Actualités :*/
/*10. Requête d'ajout d'une actualité à la date d’insertion (sans texte car tout est dans le titre !)*/
INSERT INTO t_actualite_act (act_titre,act_text, act_date_publication, act_etat, cpt_pseudo) 
VALUES ('Titre_de_l_actualite',NULL, CURRENT_DATE(), 'L', 'rabah.toubal@etudiant.univ-brest.fr');
negh 
INSERT INTO t_actualite_act (act_numero, act_titre, act_text,act_date_publication,act_etat, cpt_pseudo) 
VALUES (NULL,'Titre_de_l_actualite',NULL, CURRENT_DATE(), 'L', 'rabah.toubal@etudiant.univ-brest.fr');

/*11. Requête donnant la toute première actualité ajoutée*/
SELECT * FROM t_actualite_act
ORDER BY act_id ASC
LIMIT 1;

/*12. Requête listant toutes les actualités et leur auteur (Membre)*/
SELECT act.act_id, act.act_titre, act.act_date_publication, act.cpt_pseudo AS auteur_pseudo, prf.prf_nom AS auteur_nom, prf.prf_prenom AS auteur_prenom
FROM t_actualite_act act
JOIN t_profil_utilisateur_prf prf ON act.cpt_pseudo =  prf.cpt_pseudo;

/*13. Requête listant toutes les 10 dernières actualités et leur auteur (Membre)*/
SELECT act.act_id, act.act_titre, act.act_date_publication, act.cpt_pseudo AS auteur_pseudo, prf.prf_nom AS auteur_nom, prf.prf_prenom AS auteur_prenom
FROM t_actualite_act act
JOIN t_profil_utilisateur_prf prf ON act.cpt_pseudo = prf.cpt_pseudo
ORDER BY act.act_date_publication DESC
LIMIT 10;

/*14. Requête de modification d'une actualité*/
UPDATE t_actualite_act
SET act_titre = 'xali xali',
    act_texte = ' an3am ih'    
WHERE act_id = 1;

/*15. Requêtes mettant en ligne (/ cachant) une actualité*/
UPDATE t_actualite_act
SET act_etat = 'C'
WHERE act_id = 1;  

UPDATE t_actualite_act
SET act_etat = 'L'
WHERE act_id = 2; 


/*16. Requête de suppression d'une actualité à partir de son ID (n°)*/
DELETE FROM t_actualite_act
WHERE act_id = 1; 

/*17. Requête de désactivation de toutes les actualités publiées avant une certaine date
(archivage des actualités trop anciennes)*/
    /*Récupération des données d’une fiche :*/
UPDATE t_actualite_act
SET act_etat = 'C'
WHERE act_date_publication < '2024-01-01';

/*18. Requête qui récupère toutes les informations, sans oublier l’hyperlien, d’une fiche
particulière dont on connaît l’identifiant (ID)*/
SELECT
    f.fch_numero,
    f.fch_label,
    f.fch_contenu,
    f.fch_fichier_image,
    f.fch_code,
    f.fch_etat,
    s.suj_numero,
    s.suj_intitule,
    s.suj_date_ajout,
    s.cpt_pseudo,
    h.hln_nom,
    h.hln_url
FROM
    t_fiche_fch f
JOIN
    t_sujet_suj s ON f.suj_id = s.suj_id
LEFT JOIN
    t_association_asc a ON f.fch_numero = a.fch_numero
LEFT JOIN
    t_hyperlien_hln h ON a.hln_numero = h.hln_numero
WHERE
    f.fch_numero = 11;


/*19. Requête qui récupère toutes les informations d’une fiche particulière (code connu)*/
    SELECT
    f.fch_numero,
    f.fch_label,
    f.fch_contenu,
    f.fch_fichier_image,
    f.fch_code,
    f.fch_etat,
    s.suj_numero,
    s.suj_intitule,
    s.suj_date_ajout,
    s.cpt_pseudo
FROM
    t_fiche_fch f
JOIN
    t_sujet_suj s ON f.suj_id = s.suj_id
WHERE
    f.fch_code = 'F63JD85KDNFM';

    
    
    /*Sujets / fiches (+ hyperliens) :*/
/*20. Requête d'ajout d'un sujet*/
INSERT INTO t_sujet_suj (suj_intitule, suj_date_ajout, cpt_pseudo)
VALUES ('Sujet de Rabah', NOW(), 'rabah.toubal@etudiant.univ-brest.fr');


/*21. Requête listant toutes les données des sujets, leur(s) fiche(s) (+hyperlien(s)), s’il y en a*/
 SELECT 
    suj.suj_id,
    suj.suj_intitule,
    suj.suj_date_ajout,
    suj.cpt_pseudo AS suj_createur_pseudo,
    f.fch_numero,
    f.fch_label,
    f.fch_contenu,
    f.fch_fichier_image,
    f.fch_code,
    f.fch_etat,
    f.suj_id,
    hyp.hln_numero,
    hyp.hln_nom,
    hyp.hln_url
FROM 
    t_sujet_suj suj
LEFT JOIN 
    t_fiche_fch f ON suj.suj_id = f.suj_id
    LEFT JOIN t_association_asc USING(fch_numero)
    LEFT JOIN t_hyperlien_hln hyp USING (hln_numero);
    
/*22. Requête de modification d'un sujet*/
UPDATE t_sujet_suj 
SET suj_intitule="ravah a rabah zinga",
	suj_numero= 98493,
    suj_date_ajout=NOW(),
    cpt_pseudo="hakim-mohamed-arab.aithamou@etudiant.univ-brest.fr" WHERE suj_id=3;

/*23. Requête(s) de suppression d'un sujet à partir de son identifiant (ID)*/
DELETE FROM  t_association_asc 
WHERE fch_numero IN (
    SELECT fch_numero 
    FROM t_fiche_fch INNER JOIN t_sujet_suj USING (suj_id) 
WHERE suj_id=5);

DELETE FROM t_fiche_fch WHERE suj_id=5;
DELETE FROM t_sujet_suj WHERE suj_id=5;

/*24. Requête listant tous les sujets qui n’ont pas de fiche associée*/
SELECT 
    suj.suj_id,
    suj.suj_intitule,
    suj.suj_date_ajout,
    suj.cpt_pseudo AS suj_createur_pseudo
FROM 
    t_sujet_suj suj
LEFT JOIN 
    t_fiche_fch f ON suj.suj_id = f.suj_id
WHERE 
    f.suj_id IS NULL;

/*25. Requêtes listant toutes les fiches d’un sujet particulier */
SELECT 
    f.fch_numero,
    f.fch_label,
    f.fch_contenu,
    f.fch_fichier_image,
    f.fch_code,
    f.fch_etat,
    f.suj_id
FROM 
    t_fiche_fch f
WHERE 
    f.suj_id = 5;

/*26. Requête donnant le nombre total de fiches associées à un sujet (ID connu)*/
SELECT COUNT(*) FROM t_fiche_fch WHERE suj_id=4;

/*27. Requête d'ajout d'une fiche pour un sujet particulier*/
INSERT INTO t_fiche_fch ( fch_label, fch_contenu, fch_fichier_image, fch_code, fch_etat, suj_id)
VALUES 
    ( 'le jeune label', 'le jeune contenu', 'ficherrabah', 574930498573, 'L', 4);


/*28. Requête(s) de suppression d'une fiche connaissant son code (SANS supprimer les
hyperliens associés à d’autres fiches)*/
DELETE FROM t_association_asc WHERE fch_numero IN 
(SELECT fch_numero FROM t_fiche_fch WHERE fch_code='FJDKELORHDNT');
DELETE FROM t_fiche_fch
WHERE fch_code = 'FJDKELORHDNT';

/*29. Requête de modification d'une fiche connaissant son code*/
UPDATE t_fiche_fch
SET
    fch_label = ' label de rabah ',
    fch_contenu = 'Nouveau contenu de rabah',
    fch_fichier_image = 'zingzang.jpg'
WHERE
    fch_code = 'F63JD85KDNFM';

/*30. Requête(s) de suppression de toutes les fiches associées à un sujet particulier*/
-- Supprimer les hyperliens associés aux fiches du sujet
DELETE FROM t_association_asc
WHERE fch_numero IN (SELECT fch_numero FROM t_fiche_fch WHERE suj_id = '2');

-- Supprimer les fiches du sujet
DELETE FROM t_fiche_fch
WHERE suj_id = '2';


/*31. Requête(s) de suppression de tous sujets n’ayant pas de fiche associée*/
DELETE FROM t_sujet_suj
WHERE suj_id NOT IN (SELECT DISTINCT suj_id FROM t_fiche_fch WHERE suj_id IS NOT NULL);

/*32. Requête de désactivation d’une fiche particulière*/
-- Désactiver la fiche (si elle est active)
UPDATE t_fiche_fch
SET fch_etat = 'D'
WHERE fch_code = 'PLOKJGYFIDKL';

/*33. Requête désactivant toutes les fiches associées aux sujets mis en ligne par un utilisateur
particulier dont on connaît le pseudo*/
UPDATE t_fiche_fch
SET fch_etat = 'D'
WHERE suj_id IN (SELECT suj_id FROM t_sujet_suj WHERE cpt_pseudo = 'lynda.kacemi@etudiant.univ-brest.fr');



/*34. Requête(s) associant un hyperlien / dissociant un hyperlien d’une fiche (ID connus)*/
 INSERT INTO t_association_asc (hln_numero, fch_numero)
VALUES (30,26 );

 -- Dissocier un hyperlien d'une fiche
DELETE FROM t_association_asc
WHERE hln_numero = 30 AND fch_numero = 26;

 
 /*Hyperliens :*/


/*35. Requête listant toutes les URL des hyperliens de la base*/
SELECT hln_url
FROM t_hyperlien_hln;

/*36. Requête listant les URL des hyperliens associés à une ou des fiche(s), sans redondance*/
SELECT DISTINCT hln.hln_url
FROM t_fiche_fch fch
LEFT JOIN t_association_asc a ON fch.fch_numero = a.fch_numero
LEFT JOIN t_hyperlien_hln hln ON a.hln_numero = hln.hln_numero
WHERE fch.fch_code = 'JKLNBVCF567H';


/*37. Requête listant toutes les fiches et leurs hyperliens correspondants, s’il y en a*/
SELECT 
    f.fch_code,
    f.fch_label,
    h.hln_url
FROM 
    t_fiche_fch f
LEFT JOIN 
    t_association_asc a ON f.fch_numero = a.fch_numero
LEFT JOIN 
    t_hyperlien_hln h ON a.hln_numero = h.hln_numero;



/*38. Requête listant les URL associées à une fiche dont on connaît l’identifiant (ID)*/
SELECT 
    h.hln_url
FROM 
    t_association_asc a
JOIN 
    t_hyperlien_hln h ON a.hln_numero = h.hln_numero
WHERE 
    a.fch_numero = 19;


/*39. Requête listant toutes les fiches qui n'ont pas d’hyperlien*/
SELECT 
    f.*
FROM 
    t_fiche_fch f
LEFT JOIN 
    t_association_asc a ON f.fch_numero = a.fch_numero
WHERE 
    a.hln_numero IS NULL;


/*40. Requête qui vérifie l’existence (ou non) d’une URL parmi les URL qui existent déjà dans
la base*/
SELECT 
    hln_url
FROM 
    t_hyperlien_hln
WHERE 
    hln_url = 'https://www.stresshumain.ca/le-stress/dejouer-le-stress/etape-de-gestion-du-stress-instantanee/';

/*41. Requête listant (/ supprimant) les hyperliens qui ne sont pas associés à une fiche*/
SELECT 
    hln_url
FROM 
    t_hyperlien_hln
WHERE 
    hln_numero NOT IN (SELECT hln_numero FROM t_association_asc);



DELETE FROM 
    t_hyperlien_hln
WHERE 
    hln_numero NOT IN (SELECT hln_numero FROM t_association_asc);


/*42. Requête(s) ajoutant un hyperlien pour une fiche choisie*/

-- Remplacez 'votre_url', 'votre_fiche_code' et 'votre_sujet_id' par les valeurs appropriées.
INSERT INTO t_hyperlien_hln (hln_url)
VALUES ('www.rabah.com');

INSERT INTO t_association_asc (hln_numero, fch_numero)
VALUES (
    (SELECT hln_numero FROM t_hyperlien_hln WHERE hln_url = 'www.rabah.com'),
    (SELECT fch_numero FROM t_fiche_fch WHERE fch_numero =20)
);

/*43. Requête(s) de suppression d’un hyperlien dont on connaît l’intitulé*/
DELETE FROM t_association_asc WHERE hln_numero IN (SELECT hln_numero FROM t_hyperlien_hln WHERE hln_nom='Intelligence Artificielle en Diagnostic 1');
DELETE FROM t_hyperlien_hln WHERE hln_nom='Intelligence Artificielle en Diagnostic 1';
