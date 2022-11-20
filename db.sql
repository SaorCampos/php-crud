CREATE DATABASE colegio;
CREATE TABLE `colegio`.`tb_alunos` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(55) NOT NULL,
    `cidade` VARCHAR(55) NOT NULL,
    `matricula` VARCHAR(55) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `idtb_alunos_UNIQUE` (`id` ASC) VISIBLE);