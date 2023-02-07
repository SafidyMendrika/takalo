
--view object join categorie
CREATE OR REPLACE VIEW objet_categorie_view AS 
    SELECT 
    * 
    FROM objet 
    JOIN details_objet ON objet.id as idObj = details_objet.idObjet as d_idObject
    JOIN categorie ON categorie.id as idCategorie = details_objet.idCategorie  as d_idCategorie
;