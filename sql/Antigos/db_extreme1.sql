

CREATE SCHEMA IF NOT EXISTS `db_extreme` DEFAULT CHARACTER SET utf8 
DEFAULT COLLATE utf8_general_ci;
USE `db_extreme` ;

-- -----------------------------------------------------
-- Table `db_extreme`.`Usuario_Aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_extreme`.`Usuario_Aluno` (
  `idUsuarioAluno` INT NOT NULL AUTO_INCREMENT,
  `Nome Completo` VARCHAR(60) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Idade` INT(3) NOT NULL,
  `DatadeNascimento` DATE NOT NULL,
  `CPF` INT(11) NOT NULL,
  `Estado` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUsuarioAluno`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_extreme`.`Usuario_Professor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_extreme`.`Usuario_Professor` (
  `idUsuarioProfessor` INT NOT NULL AUTO_INCREMENT,
  `Nome Completo` VARCHAR(60) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Idade` INT NOT NULL,
  `DatadeNascimento` DATE NOT NULL,
  `CPF` INT(11) NOT NULL,
  `Estado` VARCHAR(45) NOT NULL,
  `CNPJ` INT(14) NULL,
  PRIMARY KEY (`idUsuarioProfessor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_extreme`.`Perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_extreme`.`Perfil` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `Usuario_Aluno_idUsuarioAluno` INT NOT NULL,
  `Usuario_Professor_idUsuarioProfessor` INT NOT NULL,
  PRIMARY KEY (`idUsuario`),
  CONSTRAINT `fk_Perfil_Usuario_Aluno1`
    FOREIGN KEY (`Usuario_Aluno_idUsuarioAluno`)
    REFERENCES `db_extreme`.`Usuario_Aluno` (`idUsuarioAluno`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Perfil_Usuario_Professor1`
    FOREIGN KEY (`Usuario_Professor_idUsuarioProfessor`)
    REFERENCES `db_extreme`.`Usuario_Professor` (`idUsuarioProfessor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_extreme`.`CadastroDoCurso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_extreme`.`CadastroDoCurso` (
  `DataDaInscrição` DATE NOT NULL,
  `Mensagem` VARCHAR(300) NULL,
  `Nome` VARCHAR(45) NOT NULL,
  `Idade` INT NOT NULL,
  `Estado` VARCHAR(45) NOT NULL,
  `CadastroDoCurso` INT NOT NULL AUTO_INCREMENT,
  `Usuario_Aluno_idUsuarioAluno` INT NOT NULL,
  PRIMARY KEY (`CadastroDoCurso`),
  CONSTRAINT `fk_CadastroDoCurso_Usuario_Aluno1`
    FOREIGN KEY (`Usuario_Aluno_idUsuarioAluno`)
    REFERENCES `db_extreme`.`Usuario_Aluno` (`idUsuarioAluno`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_extreme`.`Post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_extreme`.`Post` (
  `idPost` INT NOT NULL AUTO_INCREMENT,
  `Mensagem` VARCHAR(300) NOT NULL,
  `Usuario_Professor_idUsuarioProfessor` INT NOT NULL,
  `Preço` FLOAT NOT NULL,
  `Estado` VARCHAR(45) NOT NULL,
  `Cidade` VARCHAR(45) NOT NULL,
  `Curso` VARCHAR(45) NOT NULL,
  `CadastroDoCurso_CadastroDoCurso` INT NOT NULL,
  PRIMARY KEY (`idPost`),
  CONSTRAINT `fk_Post_Usuario_Professor1`
    FOREIGN KEY (`Usuario_Professor_idUsuarioProfessor`)
    REFERENCES `db_extreme`.`Usuario_Professor` (`idUsuarioProfessor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Post_CadastroDoCurso1`
    FOREIGN KEY (`CadastroDoCurso_CadastroDoCurso`)
    REFERENCES `db_extreme`.`CadastroDoCurso` (`CadastroDoCurso`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_extreme`.`Comentário`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_extreme`.`Comentário` (
  `idComentário` INT NOT NULL AUTO_INCREMENT,
  `Mensagem` VARCHAR(300) NULL,
  `Usuario_Professor_idUsuarioProfessor2` INT NOT NULL,
  `Usuario_Aluno_idUsuarioAluno2` INT NOT NULL,
  `Post_idPost` INT NOT NULL,
  PRIMARY KEY (`idComentário`),
  CONSTRAINT `fk_Comentário_Usuario_Professor1`
    FOREIGN KEY (`Usuario_Professor_idUsuarioProfessor2`)
    REFERENCES `db_extreme`.`Usuario_Professor` (`idUsuarioProfessor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Comentário_Usuario_Aluno1`
    FOREIGN KEY (`Usuario_Aluno_idUsuarioAluno2`)
    REFERENCES `db_extreme`.`Usuario_Aluno` (`idUsuarioAluno`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Comentário_Post1`
    FOREIGN KEY (`Post_idPost`)
    REFERENCES `db_extreme`.`Post` (`idPost`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

