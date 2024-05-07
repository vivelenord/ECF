<?php
namespace ECF\dao;

class RequetesUser {
    public const SELECT_User                = "select id, nom_usr, prenom_usr, mail_usr,date_compte, tel_usr,passw_usr, ad1_usr, ad2_usr, code_post, pathImgP, type from User";
    public const SELECT_User_WITH_CATEGORIE = "select id, nom_usr, prenom_usr, mail_usr,date_compte, tel_usr,passw_usr, ad1_usr, ad2_usr, code_post, pathImgP, type from user inner join TypeUser on User.id = TypeUser.type order by id";
    public const SELECT_User_BY_ID          = "select id, nom_usr, prenom_usr, mail_usr,date_compte, tel_usr,passw_usr, ad1_usr, ad2_usr, code_post, pathImgP, User.type, Typeuser.lib_type from user inner join TypeUser on User.type = TypeUser.type where User.id = :id";
    public const INSERT_User                = "insert into User (id, nom_usr, prenom_usr, mail_usr,date_compte, tel_usr,passw_usr, ad1_usr, ad2_usr, code_post, pathImgP, type ) values (:id, :nom_usr, :prenom_usr, :mail_usr, :date_compte, :tel_usr, :passw_usr, :ad1_usr, :ad2_usr, :code_post, :pathImgP, :type)";
    public const SELECT_Types               = "select type, lib_type from TypeUser order by type";
    public const SELECT_CATEGORIE_BY_ID     = "select type, lib_type from TypeUser where type = :id";
    public const INSERT_CATEGORIE           = "insert into categorie (type, lib_type) values (?,?)";
    public const DELETE_CATEGORIE           = "delete from TypeUser where type = :id";
    public const DELETE_User                = "delete from User where id = :id";

}
