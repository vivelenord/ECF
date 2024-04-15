export class Utilisateur {
    #id;
    #type;
    #nom;
    #prenom;
    #tel;
    #mail1;
    #mail2;
    #passw1;
    #passw2;
    #inputAddress1;
    #inputAddress2;
    #codepostal;
    #ville;
    #departement;
    #photo;
    #date;
    constructor (type, id, nom,prenom,tel,mail1,mail2,passw1,passw2,inputAddress1,inputAddress2,codepostal,ville,departement,photo,date) {
        this.#type= type;
        this.#id = id;
        this.#nom = nom;
        this.#prenom =prenom;
        this.#tel=tel;
        this.#mail1=mail1;
        this.#mail2=mail2;
        this.#passw1=passw1;
        this.#passw2=passw2;
        this.#inputAddress1=inputAddress1;
        this.#inputAddress2=inputAddress2;
        this.#codepostal=codepostal;
        this.#ville=ville;
        this.#departement=this.departement;
        this.#photo= photo;
        this.#date=date;
    }
    get type() {return this.#type};
    get id() {return this.#id};
    get nom() {return this.#nom};
    get prenom() {return this.#prenom};
    get tel() {return this.#tel};
    get mail1() {return this.#mail1};
    get mail2() {return this.#mail2};
    get passw1() {return this.#passw1};
    get passw2() {return this.#passw2};
    get inputAddress1() {return this.#inputAddress1};
    get inputAddress2() {return this.#inputAddress2};
    get codepostal() {return this.#codepostal};
    get ville() {return this.#ville};
    get departement() {return this.#departement};
    get photo() {return this.#photo};
    get date() {return this.#date};

    set type(type) {this.#type = type};
    set id(id) {this.#id= id};
    set nom(nom) {this.#nom= nom};
    set prenom(prenom) {this.#prenom=prenom};
    set tel(tel) { this.#tel=tel};
    set mail1(mail1) { this.#mail1=mail1};
    set mail2(mail2) { this.#mail2=mail2};
    set passw1(passw1) { this.#passw1};
    set passw2(passw2) { this.#passw2};
    set inputAddress1(inputAddress1) { this.#inputAddress1=inputAddress1};
    set inputAddress2(inputAddress2) { this.#inputAddress2==inputAddress2};
    set codepostal(codepostal) { this.#codepostal=codepostal};
    set ville(ville) { this.#ville=this.ville};
    set departement(departement) { this.#departement=this.departement};
    set photo(photo) { this.#photo=photo};
    set date(date) { this.#date=photo};

    getComposantHtml() { 
        return `<div class="galerie">
        <section class="row">
        <div class="col-md-2">
        <div class="menu-users">\
        <img src="assets/images/images-users/${this.photo}" height="300px" width="300px" class="menu-img" alt="">\
        <div class="menu-content">\
        <a href="#">${this.nom}</a><span>${this.prenom}</span>\
        </div>\
        <div class="menu-tel">\
        ${this.tel}\
        </div>\
        <div class="menu-mail">\
        ${this.mail1}\
        </div>\
        <div class="menu-adresse1">\
        ${this.inputAddress1}\
        </div>\
        <div class="menu-adresse2">\
        ${this.inputAddress2}\
        </div>\
        <div class="menu-codepostal">\
        ${this.codepostal}\
        </div>\
        <div class="menu-ingredients">\
        ${this.ville}\
        </div>\
        <div class="menu-ville">\
        ${this.date}\
        </div>\
        </div>
        </div>
        </div>
        </div>`;
        }
    toString() {
        return `[Un Utilisateur : id=${this.#id} nom=${this.#nom} prenom=${this.#prenom} tel=${this.#tel} \
        photo=${this.#photo} type=${this.#type.toString()}]`;
        }
}
var user1 = new Utilisateur("art","p1","Sylvain","Barbay","0611223344","s.bar@gmail.com","s.bar@gmail.com","1111","1111","Rue Marehal hoche","Residence les totos","75000","Paris","image1.jpg","",new Date())
var user2 = new Utilisateur("art","p2","Arnauld","Lefort","0655663322","a.lefort@gmail.com","a.lefort@gmail.com","1111","1111","Rue Eiffel","Residence les camelias","06000","Nice","images-users/pexels-andrea-piacquadio-774909.jpg","",new Date())
var user3 = new Utilisateur("art","p3","Robert","Laffitte","0615141316","r.laffitte@gmail.com","r.laffitte@gmail.com","1111","1111","Rue Jean Moulin","Residence les cerisiers","13000","Paris","images-users/pexels-anastasiya-gepp-1462637.jpg","",new Date())
export let users = [user1, user2,user3];