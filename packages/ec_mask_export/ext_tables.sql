CREATE TABLE tt_content (
    tx_ecmaskexport_col_color varchar(255) DEFAULT '' NOT NULL,
    tx_ecmaskexport_color_col varchar(255) DEFAULT '' NOT NULL,
    tx_ecmaskexport_image_col int(11) unsigned DEFAULT '0' NOT NULL,
    tx_ecmaskexport_squares int(11) unsigned DEFAULT '0' NOT NULL,
    tx_ecmaskexport_text mediumtext,
    tx_ecmaskexport_text2 mediumtext,
    tx_ecmaskexport_text3 mediumtext
);
CREATE TABLE tx_ecmaskexport_squares (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_ecmaskexport_competence mediumtext,
    tx_ecmaskexport_competence_color varchar(255) DEFAULT '' NOT NULL,
    tx_ecmaskexport_competence_icon int(11) unsigned DEFAULT '0' NOT NULL,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_ecmaskexport_texts (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_ecmaskexport_text varchar(255) DEFAULT '' NOT NULL,
    KEY language (l10n_parent,sys_language_uid)
);
