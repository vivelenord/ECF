use marketplace2;
drop table if exists TypeUser;
drop table if exists User;

create table if not exists TypeUser(
    type		int 	primary key,  
    lib_type 		CHAR(10) 	not null
) engine=InnoDB;

create table if not exists User(
    id 		int 	primary key auto_increment,  
    nom_usr 		VARCHAR(50) 	not null,
    prenom_usr 		VARCHAR(50) 	not null,
    mail_usr 		VARCHAR(50) 	not null,
    date_compte 	date 	not null,
    tel_usr 		INT 	not null,
    passw_usr 		VARCHAR(50) 	not null,
    ad1_usr 		VARCHAR(50) 	not null,
    ad2_usr 		VARCHAR(50) 	,
    code_post		INT 	not null check (code_post REGEXP '^[0-9]{4,5}$'),
    pathImgP		VARCHAR(50),
    type		int not null,
    foreign key (type) references TypeUser(type)
    
) engine=InnoDB;




insert into TypeUser values (1,'Artisan');
insert into TypeUser values (2,'Client');



insert into compte values ('1','Durand','Paul','p.durand@gmail.com',
'2023-11-10',0622554411,'durand1122$$','Rue de la paix', 'Residence les oliviers',06000,'path',1);
insert into compte values ('2','Jacques','Monnier','j.Monnier@gmail.com',
'2023-11-11',0644554463,'jacques1122$$','Rue de la fete', 'Residence les jasmins',75011,'path',2);
insert into compte values ('3','Patrick','Lafitte','p.Laffitte@gmail.com',
'2023-11-11',0644554463,'patrick1122$$','Rue de la gloire', 'Residence les beaux',75012,'path',2);
insert into compte values ('4','cristian','haroche','c.haroche@gmail.com',
'2023-11-12',0614226512,'haroche1122$$','Rue de la peche', 'Residence les pommiers',44000,'path',1);
insert into compte values ('5','Nicolas','holande','n.holande@gmail.com',
'2023-11-12',0622654841,'nicolas1122$$','Rue de la seine', 'Residence la chocolatine',69000,'path',2);
insert into compte values ('6','Aurelie','Gasquet','a.gasquet@gmail.com',
'2023-11-13',0654652531,'aurelie1122$$','Rue du carnaval', 'Residence les frites',34000,'path',1);
insert into compte values ('7','Isabelle','Leroi','i.leroi@gmail.com',
'2023-11-13',0621546522,'isabelle1122$$','Rue du bordeaux', 'Residence les omelettes',75012,'path',2);
insert into compte values ('8','Samira','jacson','s.jacson@gmail.com',
'2024-01-04',0665222154,'belleisa1122$$','Rue du coca', 'Residence les cola',13010,'path',1);