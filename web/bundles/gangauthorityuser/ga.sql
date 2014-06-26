#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


CREATE TABLE Joueur(
        idCompte      int (11) Auto_increment  NOT NULL ,
        pseudo        Varchar (25) NOT NULL ,
        email         Varchar (100) NOT NULL ,
        mdp           Varchar (32) NOT NULL ,
        pointAutorite Int NOT NULL ,
        nbMorts       Int NOT NULL ,
        nbTues        Int NOT NULL ,
        argent        DECIMAL (15,3)  NOT NULL ,
        nomGang       Varchar (25) NOT NULL ,
        PRIMARY KEY (idCompte ) ,
        UNIQUE (pseudo ,nomGang )
)ENGINE=InnoDB;


CREATE TABLE Mission(
        idMission               int (11) Auto_increment  NOT NULL ,
        dureeMission            Date NOT NULL ,
        recompenseArgent        DECIMAL (15,3)  NOT NULL ,
        difficulte              Varchar (25) NOT NULL ,
        recompensePointAutorite Int NOT NULL ,
        tempsReapparitionBase   Int NOT NULL ,
        nbMiniSbiresRequis      Int NOT NULL ,
        Mission_idTypeSbire             Int NOT NULL ,
        PRIMARY KEY (idMission )
)ENGINE=InnoDB;


CREATE TABLE TypeBatiment(
        idTypeBatiment        int (11) Auto_increment  NOT NULL ,
        libelleTypeBatiment   Varchar (25) NOT NULL ,
        tempsCreationBatiment Int NOT NULL ,
        TypeBatiment_idTypeSbire           Int NOT NULL ,
        PRIMARY KEY (idTypeBatiment )
)ENGINE=InnoDB;


CREATE TABLE TypeSbire(
        idTypeSbire      int (11) Auto_increment  NOT NULL ,
        libelleTypeSbire Varchar (25) NOT NULL ,
        cout             DECIMAL (15,3)  NOT NULL ,
        tempsApparition  Int NOT NULL ,
        TypeSbire_idTypeBatiment   Int NOT NULL ,
        PRIMARY KEY (idTypeSbire )
)ENGINE=InnoDB;


CREATE TABLE Administrateur(
        idAdmin     int (11) Auto_increment  NOT NULL ,
        pseudoAdmin Varchar (25) NOT NULL ,
        emailAdmin  Varchar (25) NOT NULL ,
        mdpAdmin    Varchar (32) NOT NULL ,
        PRIMARY KEY (idAdmin )
)ENGINE=InnoDB;


CREATE TABLE Signalement(
        idSignalement   int (11) Auto_increment  NOT NULL ,
        justification   Text NOT NULL ,
        dateSignalement Date NOT NULL ,
        Signalement_idCompte        Int NOT NULL ,
        PRIMARY KEY (idSignalement )
)ENGINE=InnoDB;


CREATE TABLE bannir(
        dateBannissement  Date NOT NULL ,
        dureeBannissement Integer NOT NULL ,
        Bannir_idAdmin           Int NOT NULL ,
        Bannir_idCompte          Int NOT NULL ,
        Bannir_idSignalement     Int NOT NULL ,
        PRIMARY KEY (Bannir_idAdmin ,Bannir_idCompte ,Bannir_idSignalement )
)ENGINE=InnoDB;


CREATE TABLE realiser(
        dateRealisation            Date NOT NULL ,
        nbSbiresEnvoyesRealisation Int NOT NULL ,
        Realiser_idMission                  Int NOT NULL ,
        Realiser_idCompte                   Int NOT NULL ,
        PRIMARY KEY (Realiser_idMission ,Realiser_idCompte )
)ENGINE=InnoDB;


CREATE TABLE construire(
        niveau         TinyINT NOT NULL ,
        populationMax  Int NOT NULL ,
        Construire_idCompte       Int NOT NULL ,
        Construire_idTypeBatiment Int NOT NULL ,
        PRIMARY KEY (Construire_idCompte ,Construire_idTypeBatiment )
)ENGINE=InnoDB;


CREATE TABLE entrainer(
        nbSbire      Int NOT NULL ,
        pointDefense Int NOT NULL ,
        pointAttaque Int NOT NULL ,
        Entrainer_idCompte     Int NOT NULL ,
        Entrainer_idTypeSbire  Int NOT NULL ,
        PRIMARY KEY (Entrainer_idCompte ,Entrainer_idTypeSbire )
)ENGINE=InnoDB;


CREATE TABLE concerner(
        Concerner_idSignalement Int NOT NULL ,
        Concerner_idCompte      Int NOT NULL ,
        PRIMARY KEY (Concerner_idSignalement ,Concerner_idCompte )
)ENGINE=InnoDB;


CREATE TABLE combattre(
        nbSbiresEnvoyesPvP Int NOT NULL ,
        datePvP            Date NOT NULL ,
        Combattre_idCompte_Attaquant           Int NOT NULL ,
        Combattre_idCompte_Defenseur    Int NOT NULL ,
        PRIMARY KEY (Combattre_idCompte_Attaquant ,Combattre_idCompte_Defenseur )
)ENGINE=InnoDB;

ALTER TABLE Mission ADD CONSTRAINT FK_Mission_idTypeSbire FOREIGN KEY (Mission_idTypeSbire) REFERENCES TypeSbire(idTypeSbire);
ALTER TABLE TypeBatiment ADD CONSTRAINT FK_TypeBatiment_idTypeSbire FOREIGN KEY (TypeBatiment_idTypeSbire) REFERENCES TypeSbire(idTypeSbire);
ALTER TABLE TypeSbire ADD CONSTRAINT FK_TypeSbire_idTypeBatiment FOREIGN KEY (TypeSbire_idTypeBatiment) REFERENCES TypeBatiment(idTypeBatiment);
ALTER TABLE Signalement ADD CONSTRAINT FK_Signalement_idCompte FOREIGN KEY (Signalement_idCompte) REFERENCES Joueur(idCompte);
ALTER TABLE bannir ADD CONSTRAINT FK_bannir_idAdmin FOREIGN KEY (Bannir_idAdmin) REFERENCES Administrateur(idAdmin);
ALTER TABLE bannir ADD CONSTRAINT FK_bannir_idCompte FOREIGN KEY (Bannir_idCompte) REFERENCES Joueur(idCompte);
ALTER TABLE bannir ADD CONSTRAINT FK_bannir_idSignalement FOREIGN KEY (Bannir_idSignalement) REFERENCES Signalement(idSignalement);
ALTER TABLE realiser ADD CONSTRAINT FK_realiser_idMission FOREIGN KEY (Realiser_idMission) REFERENCES Mission(idMission);
ALTER TABLE realiser ADD CONSTRAINT FK_realiser_idCompte FOREIGN KEY (Realiser_idCompte) REFERENCES Joueur(idCompte);
ALTER TABLE construire ADD CONSTRAINT FK_construire_idCompte FOREIGN KEY (Construire_idCompte) REFERENCES Joueur(idCompte);
ALTER TABLE construire ADD CONSTRAINT FK_construire_idTypeBatiment FOREIGN KEY (Construire_idTypeBatiment) REFERENCES TypeBatiment(idTypeBatiment);
ALTER TABLE entrainer ADD CONSTRAINT FK_entrainer_idCompte FOREIGN KEY (Entrainer_idCompte) REFERENCES Joueur(idCompte);
ALTER TABLE entrainer ADD CONSTRAINT FK_entrainer_idTypeSbire FOREIGN KEY (Entrainer_idTypeSbire) REFERENCES TypeSbire(idTypeSbire);
ALTER TABLE concerner ADD CONSTRAINT FK_concerner_idSignalement FOREIGN KEY (Concerner_idSignalement) REFERENCES Signalement(idSignalement);
ALTER TABLE concerner ADD CONSTRAINT FK_concerner_idCompte FOREIGN KEY (Concerner_idCompte) REFERENCES Joueur(idCompte);
ALTER TABLE combattre ADD CONSTRAINT FK_combattre_idCompte FOREIGN KEY (Combattre_idCompte_Attaquant) REFERENCES Joueur(idCompte);
ALTER TABLE combattre ADD CONSTRAINT FK_combattre_idCompte_Joueur FOREIGN KEY (Combattre_idCompte_Defenseur) REFERENCES Joueur(idCompte);