CREATE TABLE tt_content (
    tx_pimpmaskexport_adress mediumtext,
    tx_pimpmaskexport_background_image int(11) unsigned DEFAULT '0' NOT NULL,
    tx_pimpmaskexport_category int(11) unsigned DEFAULT '0' NOT NULL,
    tx_pimpmaskexport_color mediumtext,
    tx_pimpmaskexport_description mediumtext,
    tx_pimpmaskexport_dimensions mediumtext,
    tx_pimpmaskexport_disposition varchar(255) DEFAULT '' NOT NULL,
    tx_pimpmaskexport_icontext int(11) unsigned DEFAULT '0' NOT NULL,
    tx_pimpmaskexport_image int(11) unsigned DEFAULT '0' NOT NULL,
    tx_pimpmaskexport_image_background int(11) unsigned DEFAULT '0' NOT NULL,
    tx_pimpmaskexport_images int(11) unsigned DEFAULT '0' NOT NULL,
    tx_pimpmaskexport_link varchar(255) DEFAULT '' NOT NULL,
    tx_pimpmaskexport_main_picture int(11) unsigned DEFAULT '0' NOT NULL,
    tx_pimpmaskexport_placage mediumtext,
    tx_pimpmaskexport_price mediumtext,
    tx_pimpmaskexport_quote mediumtext,
    tx_pimpmaskexport_texts int(11) unsigned DEFAULT '0' NOT NULL,
    tx_pimpmaskexport_theme varchar(255) DEFAULT '' NOT NULL,
    tx_pimpmaskexport_wood mediumtext
);
CREATE TABLE tx_pimpmaskexport_category (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_pimpmaskexport_titre varchar(255) DEFAULT '' NOT NULL,
    tx_pimpmaskexport_image int(11) unsigned DEFAULT '0' NOT NULL,
    tx_pimpmaskexport_link varchar(255) DEFAULT '' NOT NULL,
    tx_pimpmaskexport_color varchar(255) DEFAULT '' NOT NULL,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_pimpmaskexport_icontext (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_pimpmaskexport_demachetext mediumtext,
    tx_pimpmaskexport_icon int(11) unsigned DEFAULT '0' NOT NULL,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_pimpmaskexport_texts (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_pimpmaskexport_text varchar(255) DEFAULT '' NOT NULL,
    KEY language (l10n_parent,sys_language_uid)
);
