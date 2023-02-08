
--view object join categorie
CREATE OR REPLACE VIEW objet_details_view AS 
    SELECT 
    objet.id AS id_objet,
    objet.idUser AS id_user,
    objet.nom AS nom_objet,
    objet.prix AS prix_objet,
    categorie.id AS id_categorie,
    categorie.nom AS nom_categorie,
    user.name AS user_nom,
    p.link_photo AS link_photo
    FROM objet 
    JOIN details_objet ON objet.id = details_objet.idObjet 
    JOIN categorie ON categorie.id = details_objet.idCategorie  
    JOIN user ON objet.idUser = user.id  
    JOIN objet_photo_view as p ON p.id_objet = objet.id
;
CREATE OR REPLACE VIEW objet_photo_view AS 
    SELECT 
    objet.id AS id_objet,
    objet.idUser AS id_user,
    objet.nom AS nom_objet,
    objet.prix AS prix_objet,
    photos.id AS id_photos,
    photos.link AS link_photo
    FROM objet 
    JOIN photos ON objet.id = photos.idObjet 
;   