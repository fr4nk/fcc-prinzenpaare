-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- --------------------------------------------------------

-- 
-- Table `tl_fcc_pp_jahrgang`
-- 

CREATE TABLE `tl_fcc_pp_jahrgang` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `sorting` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `session_beginn` int(10) unsigned NOT NULL default '0',
  `session_ende` int(10) unsigned NOT NULL default '0',
  `titel_weibl` varchar(20) NOT NULL default 'Kelterm&auml;usle',
  `titel_maennl` varchar(20) NOT NULL default 'Oberbacchus',
  `bemerkung` text NULL,
  PRIMARY KEY  (`id`),
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

-- 
-- Table `tl_fcc_pp_name`
-- 

CREATE TABLE `tl_fcc_pp_name` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `sorting` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `name_weibl` varchar(25) NOT NULL default 'Sie',
  `name_maennl` varchar(25) NOT NULL default 'Er',
  `ordinal_weibl` decimal(3,0) NOT NULL default '1',
  `ordinal_maennl` decimal(3,0) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
