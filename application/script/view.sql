
--view object join categorie
CREATE OR REPLACE VIEW objet_categorie_view AS 
    SELECT 
    objet.id AS id_objet,
    objet.idUser AS id_user,
    objet.nom AS nom_objet,
    objet.prix AS prix_objet,
    categorie.id AS id_categorie,
    categorie.nom AS nom_categorie
    FROM objet 
    JOIN details_objet ON objet.id = details_objet.idObjet 
    JOIN categorie ON categorie.id = details_objet.idCategorie  
;