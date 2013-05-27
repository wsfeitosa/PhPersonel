-- phpMyAdmin SQL Dump
-- version 3.3.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Mai 26, 2013 as 10:17 AM
-- Versão do Servidor: 5.5.31
-- Versão do PHP: 5.4.6-1ubuntu1.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `phpersonel`
--
CREATE DATABASE `phpersonel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phpersonel`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `category_description` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `categories`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `costs`
--

DROP TABLE IF EXISTS `costs`;
CREATE TABLE IF NOT EXISTS `costs` (
  `cost_id` int(11) NOT NULL AUTO_INCREMENT,
  `cost_number` char(10) COLLATE latin1_general_ci NOT NULL,
  `cost_description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cost_id_category` int(11) NOT NULL,
  `cost_value` float(10,2) NOT NULL,
  `fixed_cost` char(1) COLLATE latin1_general_ci NOT NULL,
  `cost_inserted_user_id` int(11) NOT NULL,
  `cost_inserted_date` datetime NOT NULL,
  PRIMARY KEY (`cost_id`),
  KEY `cost_inserted_user_id` (`cost_inserted_user_id`),
  KEY `cost_id_category` (`cost_id_category`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `costs`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `incomes`
--

DROP TABLE IF EXISTS `incomes`;
CREATE TABLE IF NOT EXISTS `incomes` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `income_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `income_receiving_date` datetime NOT NULL,
  `income_inserted_user_id` int(11) NOT NULL,
  `income_inserted_date` datetime NOT NULL,
  `income_value` float(10,2) NOT NULL,
  PRIMARY KEY (`schedule_id`),
  KEY `income_inserted_user_id` (`income_inserted_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `incomes`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_number` char(10) COLLATE latin1_general_ci NOT NULL,
  `payment_description` text COLLATE latin1_general_ci NOT NULL,
  `payment_done` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `payments`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `payments_x_costs`
--

DROP TABLE IF EXISTS `payments_x_costs`;
CREATE TABLE IF NOT EXISTS `payments_x_costs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payment_id` int(10) unsigned NOT NULL,
  `cost_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `payment_id` (`payment_id`,`cost_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `payments_x_costs`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `schedulings`
--

DROP TABLE IF EXISTS `schedulings`;
CREATE TABLE IF NOT EXISTS `schedulings` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `schedule_number` char(10) COLLATE latin1_general_ci NOT NULL,
  `schedule_date` date NOT NULL,
  `payment_id` int(11) NOT NULL,
  PRIMARY KEY (`schedule_id`),
  KEY `payment_id` (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `schedulings`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `user_login` varchar(55) COLLATE latin1_general_ci NOT NULL,
  `user_password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `insert_date` datetime NOT NULL,
  `alter_date` datetime NOT NULL,
  `active_user` char(1) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_login`, `user_password`, `insert_date`, `alter_date`, `active_user`) VALUES
(1, 'WELLINGTON FEITOSA', 'wsfall', '2302', '2012-12-02 00:00:00', '2012-12-02 00:00:00', 'S');
