
CREATE TABLE Estabelecimentos (
  cod_estabelecimento INT NOT NULL AUTO_INCREMENT,
  nome_estabelecimento VARCHAR(45) NULL,
  hora_abertura TIME NOT NULL,
  hora_fechamento TIME NOT NULL,
  tipo_estabelecimento VARCHAR(45) NULL,
  PRIMARY KEY (cod_estabelecimento))
ENGINE = InnoDB;

INSERT INTO Estabelecimentos (nome_estabelecimento, hora_abertura, hora_fechamento, tipo_estabelecimento) values('Ceica Lanches', '18:00', '00:30', 'lanchonete'),('Budega do Ailton', '19:00', '01:00', 'lanchonete'), ('Gela Cuca', '16:00', '22:00', 'lanchonete'),('Central Informatica', '08:00', '17:30', 'Aetigos de Tecnologia'), ('Loterica Bujari', '07:30', '17:30', 'Serviço');
 
create user gerente identified by 'Linkin20';

GRANT SELECT, UPDATE ON InLoco.* TO gerente;



