CREATE TABLE tt_content (
    tx_educcanineeduccanine_mask_exportexport_ectheme varchar(255) DEFAULT '' NOT NULL,
    tx_educcanineeduccanine_mask_exportexport_squares int(11) unsigned DEFAULT '0' NOT NULL
);
CREATE TABLE tx_educcanineeduccanine_mask_exportexport_squares (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_educcanineeduccanine_mask_exportexport_competence mediumtext,
    tx_educcanineeduccanine_mask_exportexport_competence_color varchar(255) DEFAULT '' NOT NULL,
    tx_educcanineeduccanine_mask_exportexport_competence_icon int(11) unsigned DEFAULT '0' NOT NULL,
    KEY language (l10n_parent,sys_language_uid)
);