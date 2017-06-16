-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2016 at 05:03 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site_celle`
--

-- --------------------------------------------------------

--
-- Table structure for table `perguntas`
--

CREATE DATABASE site_celle;
USE site_celle;

CREATE TABLE perguntas (
  id int(11) NOT NULL,
  audio varchar(20) COLLATE latin1_general_ci NOT NULL,
  alt_1 varchar(20) COLLATE latin1_general_ci NOT NULL,
  alt_2 varchar(20) COLLATE latin1_general_ci NOT NULL,
  alt_3 varchar(20) COLLATE latin1_general_ci NOT NULL,
  alt_4 varchar(20) COLLATE latin1_general_ci NOT NULL,
  alt_correta varchar(1) COLLATE latin1_general_ci NOT NULL,
  descricao varchar(20) COLLATE latin1_general_ci NOT NULL,
  contexto varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table perguntas
--

INSERT INTO perguntas (id, audio, alt_1, alt_2, alt_3, alt_4, alt_correta, descricao, contexto) VALUES
(1, 'table.mp3', 'couch.jpg', 'wardrobe_arm.jpg', 'table.jpg', 'nightstand.jpg', '3', 'Table', 'mobilias'),
(2, 'couch.mp3', 'bed.jpg', 'chair.jpg', 'wardrobe_gr.jpg', 'couch.jpg', '4', 'Couch', 'mobilias'),
(3, 'wardrobe_arm.mp3', 'fruit_bowl.jpg', 'wardrobe_arm.jpg', 'curtains.jpg', 'chair.jpg', '2', 'Wardrobe', 'mobilias'),
(4, 'nightstand.mp3', 'nightstand.jpg', 'dresser.jpg', 'table.jpg', 'wardrobe_gr.jpg', '1', 'Nightstand', 'mobilias'),
(5, 'bed.mp3', 'fruit_bowl.jpg', 'couch.jpg', 'curtains.jpg', 'bed.jpg', '4', 'Bed', 'mobilias'),
(6, 'fruit_bowl.mp3', 'wardrobe_arm.jpg', 'chair.jpg', 'fruit_bowl.jpg', 'nightstand.jpg', '3', 'Fruit Bowl', 'mobilias'),
(7, 'dresser.mp3', 'wardrobe_gr.jpg', 'dresser.jpg', 'curtains.jpg', 'couch.jpg', '2', 'Dresser', 'mobilias'),
(8, 'curtains.mp3', 'nightstand.jpg', 'curtains.jpg', 'chair.jpg', 'table.jpg', '2', 'Curtains', 'mobilias'),
(9, 'chair.mp3', 'chair.jpg', 'wardrobe_arm.jpg', 'couch.jpg', 'fruit_bowl.jpg', '1', 'Chair', 'mobilias'),
(10, 'wardrobe_gr.mp3', 'nightstand.jpg', 'bed.jpg', 'wardrobe_gr.jpg', 'dresser.jpg', '3', 'Wardrobe', 'mobilias'),
(11, 'spoon.mp3', 'spoon.jpg', 'knife.jpg', 'glass.jpg', 'cup.jpg', '1', 'Spoon', 'cozinha'),
(12, 'knife.mp3', 'fork_coz.jpg', 'coffee_filter.jpg', 'knife.jpg', 'drainer.jpg', '3', 'Knife', 'cozinha'),
(13, 'shell.mp3', 'cup.jpg', 'shell.jpg', 'spatula.jpg', 'pan.jpg', '2', 'Shell', 'cozinha'),
(14, 'plates.mp3', 'cuscuzeira.jpg', 'jar.jpg', 'cake_pan.jpg', 'plates.jpg', '4', 'Plates', 'cozinha'),
(15, 'kettle.mp3', 'coffee_filter.jpg', 'fork_coz.jpg', 'spatula.jpg', 'kettle.jpg', '4', 'Kettle', 'cozinha'),
(16, 'glass.mp3', 'glass.jpg', 'drainer.jpg', 'pressure_cooker.jpg', 'frying_pan.jpg', '1', 'Glass', 'cozinha'),
(17, 'fork.mp3', 'shell.jpg', 'kettle.jpg', 'fork_coz.jpg', 'serving_platter.jpg', '3', 'Fork', 'cozinha'),
(18, 'drainer.mp3', 'cake_pan.jpg', 'drainer.jpg', 'wooden_spoon.jpg', 'thermal_bottle.jpg', '2', 'Drainer', 'cozinha'),
(19, 'jar.mp3', 'jar.jpg', 'spoon.jpg', 'serving_platter.jpg', 'spatula.jpg', '1', 'Jar', 'cozinha'),
(20, 'frying_pan.mp3', 'pan.jpg', 'thermal_bottle.jpg', 'fork_coz.jpg', 'frying_pan.jpg', '4', 'Frying Pan', 'cozinha'),
(21, 'thermal_bottle.mp3', 'drainer.jpg', 'glass.jpg', 'thermal_bottle.jpg', 'cup.jpg', '3', 'Thermal Bottle', 'cozinha'),
(22, 'cup.mp3', 'pan.jpg', 'cup.jpg', 'kettle.jpg', 'jar.jpg', '2', 'Cup', 'cozinha'),
(23, 'spatula.mp3', 'spatula.jpg', 'cake_pan.jpg', 'cuscuzeira.jpg', 'coffee_filter.jpg', '1', 'Spatula', 'cozinha'),
(24, 'pressure_cooker.mp3', 'jar.jpg', 'spatula.jpg', 'plates.jpg', 'pressure_cooker.jpg', '4', 'Pressure Cooker', 'cozinha'),
(25, 'cake_pan.mp3', 'shell.jpg', 'drainer.jpg', 'cake_pan.jpg', 'thermal_bottle.jpg', '3', 'Cake Pan', 'cozinha'),
(26, 'serving_platter.mp3', 'plates.jpg', 'fork_coz.jpg', 'pan.jpg', 'serving_platter.jpg', '4', 'Serving Platter', 'cozinha'),
(27, 'cuscuzeira.mp3', 'shell.jpg', 'cuscuzeira.jpg', 'coffee_filter.jpg', 'knife.jpg', '2', 'Cuscuzeira', 'cozinha'),
(28, 'wooden_spoon.mp3', 'wooden_spoon.jpg', 'spatula.jpg', 'serving_platter.jpg', 'frying_pan.jpg', '1', 'Wooden Spoon', 'cozinha'),
(29, 'pan.mp3', 'plates.jpg', 'pan.jpg', 'fork_coz.jpg', 'drainer.jpg', '2', 'Pan', 'cozinha'),
(30, 'coffee_filter.mp3', 'coffee_filter.jpg', 'pressure_cooker.jpg', 'drainer.jpg', 'spoon.jpg', '1', 'Coffee Filter', 'cozinha'),
(31, 'blazer.mp3', 'shirt.jpg', 'tie.jpg', 'vest.jpg', 'blazer.jpg', '4', 'Blazer', 'vestuario'),
(32, 'blouse.mp3', 'blouse.jpg', 'hat.jpg', 'jumpsuit.jpg', 'skirt.jpg', '1', 'Blouse', 'vestuario'),
(33, 'coat.mp3', 'swimwear.jpg', 'coat.jpg', 'pants.jpg', 'pijamas.jpg', '2', 'Coat', 'vestuario'),
(34, 'dress.mp3', 'dress.jpg', 'nightdress.jpg', 'shirt.jpg', 'coat.jpg', '1', 'Dress', 'vestuario'),
(35, 'hat.mp3', 'blazer.jpg', 'vest.jpg', 'hat.jpg', 'blouse.jpg', '3', 'Hat', 'vestuario'),
(36, 'jumpsuit.mp3', 'shirt.jpg', 'tie.jpg', 'shoes.jpg', 'jumpsuit.jpg', '4', 'Jumpsuit', 'vestuario'),
(37, 'nightdress.mp3', 'pants.jpg', 'vest.jpg', 'nightdress.jpg', 'hat.jpg', '3', 'Nightdress', 'vestuario'),
(38, 'pants.mp3', 'dress.jpg', 'pants.jpg', 'pijamas.jpg', 'blazer.jpg', '2', 'Pants', 'vestuario'),
(39, 'pijamas.mp3', 'swimwear.jpg', 'pijamas.jpg', 'tie.jpg', 'hat.jpg', '2', 'Pijamas', 'vestuario'),
(40, 'shirt.mp3', 'jumpsuit.jpg', 'shoes.jpg', 'skirt.jpg', 'shirt.jpg', '4', 'Shirt', 'vestuario'),
(41, 'shoe.mp3', 'shoes.jpg', 'blouse.jpg', 'blazer.jpg', 'pants.jpg', '1', 'Shoes', 'vestuario'),
(42, 'skirt.mp3', 'coat.jpg', 'swimwear.jpg', 'skirt.jpg', 'dress.jpg', '3', 'Skirt', 'vestuario'),
(43, 'swimwear.mp3', 'nightdress.jpg', 'jumpsuit.jpg', 'swimwear.jpg', 'coat.jpg', '3', 'Swimwear', 'vestuario'),
(44, 'tie.mp3', 'blouse.jpg', 'hat.jpg', 'shoes.jpg', 'tie.jpg', '4', 'Tie', 'vestuario'),
(45, 'vest.mp3', 'vest.jpg', 'dress.jpg', 'shirt.jpg', 'pants.jpg', '1', 'Vest', 'vestuario'),
(46, 'watering.mp3', 'flowerpot.jpg', 'watering.jpg', 'loan.jpg', 'esculpture.jpg', '2', 'Watering', 'jardim'),
(47, 'planter.mp3', 'fork.jpg', 'stool.jpg', 'planter.jpg', 'flower.jpg', '3', 'Planter', 'jardim'),
(48, 'flower.mp3', 'flower.jpg', 'fountain.jpg', 'tree.jpg', 'grass.jpg', '1', 'Flower', 'jardim'),
(49, 'decking.mp3', 'decking.jpg', 'tree.jpg', 'bird.jpg', 'pergola.jpg', '1', 'Decking', 'jardim'),
(50, 'composto.mp3', 'watering.jpg', 'stool.jpg', 'flower.jpg', 'composto.jpg', '4', 'Composto', 'jardim'),
(51, 'grass.mp3', 'bird.jpg', 'esculpture.jpg', 'grass.jpg', 'planter.jpg', '3', 'Grass', 'jardim'),
(52, 'pergola.mp3', 'fork.jpg', 'decking.jpg', 'pergola.jpg', 'stool.jpg', '3', 'Pergola', 'jardim'),
(53, 'bird.mp3', 'tree.jpg', 'bird.jpg', 'fountain.jpg', 'flowerpot.jpg', '2', 'Bird', 'jardim'),
(54, 'tree.mp3', 'loan.jpg', 'composto.jpg', 'grass.jpg', 'tree.jpg', '4', 'Tree', 'jardim'),
(55, 'fountain.mp3', 'fountain.jpg', 'planter.jpg', 'watering.jpg', 'flower.jpg', '1', 'Fountain', 'jardim'),
(56, 'stool.mp3', 'bird.jpg', 'planter.jpg', 'pergola.jpg', 'stool.jpg', '4', 'Stool', 'jardim'),
(57, 'fork.mp3', 'decking.jpg', 'tree.jpg', 'fork.jpg', 'esculpture.jpg', '3', 'Fork', 'jardim'),
(58, 'loan.mp3', 'loan.jpg', 'flower.jpg', 'fountain.jpg', 'flowerpot.jpg', '1', 'Loan', 'jardim'),
(59, 'esculpture.mp3', 'composto.jpg', 'esculpture.jpg', 'grass.jpg', 'watering.jpg', '2', 'Esculpture', 'jardim'),
(60, 'flowerpot.mp3', 'pergola.jpg', 'flowerpot.jpg', 'fork.jpg', 'bird.jpg', '2', 'Flowerpot', 'jardim'),
(61, 'electrician.mp3', 'lawyer.jpg', 'electrician.jpg', 'dentist.jpg', 'singer.jpg', '2', 'Electrician', 'profissoes'),
(62, 'programmer.mp3', 'writer.jpg', 'baker.jpg', 'journalist.jpg', 'programmer.jpg', '4', 'Programmer', 'profissoes'),
(63, 'writer.mp3', 'cultivator.jpg', 'mechanic.jpg', 'writer.jpg', 'teacher.jpg', '3', 'Writer', 'profissoes'),
(64, 'driver.mp3', 'photographer.jpg', 'driver.jpg', 'dentist.jpg', 'doctor.jpg', '2', 'Driver', 'profissoes'),
(65, 'baker.mp3', 'baker.jpg', 'teacher.jpg', 'lawyer.jpg', 'journalist.jpg', '1', 'Baker', 'profissoes'),
(66, 'teacher.mp3', 'teacher.jpg', 'veterinarian.jpg', 'photographer.jpg', 'programmer.jpg', '1', 'Teacher', 'profissoes'),
(67, 'veterinarian.mp3', 'cultivator.jpg', 'doctor.jpg', 'veterinarian.jpg', 'electrician.jpg', '3', 'Veterinarian', 'profissoes'),
(68, 'journalist.mp3', 'singer.jpg', 'mechanic.jpg', 'writer.jpg', 'Journalist.jpg', '4', 'Journalist', 'profissoes'),
(69, 'lawyer.mp3', 'dentist.jpg', 'electrician.jpg', 'lawyer.jpg', 'driver.jpg', '3', 'Lawyer', 'profissoes'),
(70, 'mechanic.mp3', 'baker.jpg', 'mechanic.jpg', 'photographer.jpg', 'cultivator.jpg', '2', 'Mechanic', 'profissoes'),
(71, 'dentist.mp3', 'dentist.jpg', 'teacher.jpg', 'veterinarian.jpg', 'programmer.jpg', '1', 'Dentist', 'profissoes'),
(72, 'photographer.mp3', 'singer.jpg', 'doctor.jpg', 'photographer.jpg', 'journalist.jpg', '3', 'Photographer', 'profissoes'),
(73, 'cultivator.mp3', 'cultivator.jpg', 'electrician.jpg', 'writer.jpg', 'veterinarian.jpg', '1', 'Cultivator', 'profissoes'),
(74, 'doctor.mp3', 'journalist.jpg', 'driver.jpg', 'lawyer.jpg', 'doctor.jpg', '4', 'Doctor', 'profissoes'),
(75, 'singer.mp3', 'dentist.jpg', 'singer.jpg', 'mechanic.jpg', 'baker.jpg', '2', 'Singer', 'profissoes'),
(76, 'microwave.mp3', 'microwave.jpg', 'blender.jpg', 'fan.jpg', 'sandwich_maker.jpg', '1', 'Microwave', 'eletrodomesticos'),
(77, 'tv.mp3', 'radio.jpg', 'washing_machine.jpg', 'freezer.jpg', 'tv.jpg', '4', 'TV', 'eletrodomesticos'),
(78, 'sandwich_maker.mp3', 'refrigerator.jpg', 'food_mixer.jpg', 'sandwich_maker.jpg', 'cooker.jpg', '3', 'Sandwich Maker', 'eletrodomesticos'),
(79, 'blender.mp3', 'coffee_machine.jpg', 'blender.jpg', 'aspirator.jpg', 'clothes_iron.jpg', '2', 'Blender', 'eletrodomesticos'),
(80, 'air_conditioning.mp3', 'microwave.jpg', 'radio.jpg', 'food_mixer.jpg', 'air_conditioning.jpg', '4', 'Air Conditioning', 'eletrodomesticos'),
(81, 'radio.mp3', 'radio.jpg', 'washing_machine.jpg', 'refrigerator.jpg', 'aspirator.jpg', '1', 'Radio', 'eletrodomesticos'),
(82, 'coffee_machine.mp3', 'blender.jpg', 'tv.jpg', 'cooker.jpg', 'coffee_machine.jpg', '4', 'Coffee Machine', 'eletrodomesticos'),
(83, 'fan.mp3', 'freezer.jpg', 'sandwich_maker.jpg', 'fan.jpg', 'clothes_iron.jpg', '3', 'Fan', 'eletrodomesticos'),
(84, 'freezer.mp3', 'aspirator.jpg', 'freezer.jpg', 'air_conditioning.jpg', 'refrigerator.jpg', '2', 'Freezer', 'eletrodomesticos'),
(85, 'washing_machine.mp3', 'tv.jpg', 'washing_machine.jpg', 'cooker.jpg', 'microwave.jpg', '2', 'Washing Machine', 'eletrodomesticos'),
(86, 'cooker.mp3', 'radio.jpg', 'freezer.jpg', 'cooker.jpg', 'coffee_machine.jpg', '3', 'Cooker', 'eletrodomesticos'),
(87, 'clothes_iron.mp3', 'refrigerator.jpg', 'air_conditioning.jpg', 'sandwich_maker.jpg', 'clothes_iron.jpg', '4', 'Clothes Iron', 'eletrodomesticos'),
(88, 'food_mixer.mp3', 'food_mixer.jpg', 'microwave.jpg', 'aspirator.jpg', 'blender.jpg', '1', 'Food Mixer', 'eletrodomesticos'),
(89, 'refrigerator.mp3', 'cooker.jpg', 'fan.jpg', 'refrigerator.jpg', 'tv.jpg', '3', 'Refrigerator', 'eletrodomesticos'),
(90, 'aspirator.mp3', 'coffee_machine.jpg', 'aspirator.jpg', 'microwave.jpg', 'sandwich_maker.jpg', '2', 'Aspirator', 'eletrodomesticos');

-- --------------------------------------------------------

--
-- Table structure for table resultados
--

CREATE TABLE resultados (
  id int(11) NOT NULL,
  erros int(10) NOT NULL,
  acertos int(10) NOT NULL,
  percentual double NOT NULL,
  matricula varchar(30) COLLATE utf16_unicode_ci NOT NULL,
  contexto varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  data timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table resultados
--

INSERT INTO resultados (id, erros, acertos, percentual, matricula, contexto, data) VALUES
(5, 1, 15, 93, '8819', 'vestuario', '2016-04-19 02:07:44'),
(7, 0, 15, 100, '8819', 'profissoes', '2016-04-19 02:12:30'),
(8, 1, 20, 95, '8819', 'cozinha', '2016-04-20 15:51:32'),
(9, 1, 10, 90, '8819', 'mobilias', '2016-04-21 12:30:56'),
(10, 1, 15, 93, '8819', 'profissoes', '2016-04-21 12:31:23'),
(11, 1, 10, 90, '4456', 'mobilias', '2016-04-21 12:42:28'),
(12, 1, 15, 93, '4456', 'vestuario', '2016-04-21 12:43:03'),
(13, 3, 15, 83, '8819', 'eletrodomesticos', '2016-04-21 12:46:27'),
(14, 0, 90, 100, '8819', 'todos', '2016-04-21 15:03:15');

-- --------------------------------------------------------

--
-- Table structure for table usuarios
--

CREATE TABLE usuarios (
  id int(11) NOT NULL,
  nome varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  sexo varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  datanasc varchar(10) COLLATE utf16_unicode_ci NOT NULL,
  telefone varchar(15) COLLATE utf16_unicode_ci NOT NULL,
  email varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  usuario varchar(20) COLLATE utf16_unicode_ci NOT NULL,
  senha varchar(256) COLLATE utf16_unicode_ci NOT NULL,
  periodo varchar(30) COLLATE utf16_unicode_ci NOT NULL,
  curso varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  matricula varchar(30) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table usuarios
--

INSERT INTO usuarios (id, nome, sexo, datanasc, telefone, email, usuario, senha, periodo, curso, matricula) VALUES
(12, 'Bertonni Thiago', 'Masculino', '08/11/1986', '81987330562', 'ibragamesonly@gmail.com', 'bertonnipaz', '202cb962ac59075b964b07152d234b70', '2', 'IPI', '8819'),
(13, 'Teste', 'Masculino', '08/03/1992', '', 'teste@teste.com', 'ibrakadabra', '827ccb0eea8a706c4c34a16891f84e7b', '2', 'IPI', '4456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table perguntas
--
ALTER TABLE perguntas
  ADD PRIMARY KEY (id);

--
-- Indexes for table resultados
--
ALTER TABLE resultados
  ADD PRIMARY KEY (id);

--
-- Indexes for table usuarios
--
ALTER TABLE usuarios
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY matricula (matricula);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table perguntas
--
ALTER TABLE perguntas
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table resultados
--
ALTER TABLE resultados
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table usuarios
--
ALTER TABLE usuarios
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE VOCABULARIO_CELLE (
  VOC_ID INT NOT NULL AUTO_INCREMENT,
  VOC_PALAVRA VARCHAR(50) UNIQUE NOT NULL,
  VOC_CATEGORIA VARCHAR(50) NOT NULL,
  VOC_AUDIO   VARCHAR(100) NOT NULL,
  VOC_IMAGEM VARCHAR(100) NOT NULL,
  CONSTRAINT VOC_ID_PK PRIMARY KEY (VOC_ID)
) ;