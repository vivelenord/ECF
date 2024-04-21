<?php
namespace ECF\dao;

class RequetesUser {
    public const SELECT_User               = "select id, nom_usr, prenom_usr, mail_usr,date_compte, tel_usr,passw_usr, ad1_usr, ad2_usr, code_post, pathImgP, type from User";
    // public const SELECT_PLAT                = "select idP, libelleP, prixP, compoP, pathImgP, idC from plat";
    // public const SELECT_PLAT_WITH_CATEGORIE = "select idP, libelleP, prixP, plat.idC, libelleC, compoP, pathImgP from plat inner join categorie on plat.idC = categorie.idC order by idP";
    // public const SELECT_PLAT_BY_CATEGORIE   = "select idP, libelleP, prixP, compoP, pathImgP  from plat where idC = ?";
    public const SELECT_User_BY_ID          = "select id, nom_usr, prenom_usr, mail_usr,date_compte, tel_usr,passw_usr, ad1_usr, ad2_usr, code_post, pathImgP, type from plat inner join TypeUser on User.type = TypeUser.type where User.id = :id";
    public const INSERT_User                = "insert into user (id, nom_usr, prenom_usr, mail_usr,date_compte, tel_usr,passw_usr, ad1_usr, ad2_usr, code_post, pathImgP, type ) values (:id, :nom_usr, :prenom_usr, :mail_usr, :date_compte, :tel_usr, :passw_usr, :ad1_usr, :ad2_usr, :code_post, :pathImgP, :type)";
    public const SELECT_Types           = "select type, lib_type from TypeUser order by type";
    public const SELECT_CATEGORIE_BY_ID     = "select type, lib_type from TypeUser where type = :id";
    public const INSERT_CATEGORIE           = "insert into categorie (type, lib_type) values (?,?)";
    public const DELETE_CATEGORIE           = "delete from TypeUser where type = :id";
}

    