CREATE TABLE tt_content (
    tx_pimpmaskexport_category int(11) unsigned DEFAULT '0' NOT NULL,
    tx_pimpmaskexport_image int(11) unsigned DEFAULT '0' NOT NULL,
    tx_pimpmaskexport_texts int(11) unsigned DEFAULT '0' NOT NULL
);
CREATE TABLE tx_pimpmaskexport_category (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_pimpmaskexport_image int(11) unsigned DEFAULT '0' NOT NULL,
    tx_pimpmaskexport_titre varchar(255) DEFAULT '' NOT NULL,
    tx_pimpmaskexport_color varchar(255) DEFAULT '' NOT NULL,
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
