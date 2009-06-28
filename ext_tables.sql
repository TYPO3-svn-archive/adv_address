#
# Table structure for table 'tx_advaddress_persons'
#
CREATE TABLE tx_advaddress_persons (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	firstname tinytext NOT NULL,
	middlename tinytext NOT NULL,
	lastname tinytext NOT NULL,
	title tinytext NOT NULL,
	letter_title tinytext NOT NULL,
	gender int(11) DEFAULT '0' NOT NULL,
	birthday tinytext NOT NULL,
	picture blob NOT NULL,
	note text NOT NULL,
	employer int(11) DEFAULT '0' NOT NULL,
	addresses int(11) DEFAULT '0' NOT NULL,
	type int(11) DEFAULT '0' NOT NULL,
	status int(11) DEFAULT '0' NOT NULL,
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_advaddress_addresses'
#
CREATE TABLE tx_advaddress_addresses (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	title tinytext NOT NULL,
	street text NOT NULL,
	zip tinytext NOT NULL,
	city tinytext NOT NULL,
	country tinytext NOT NULL,
	parentid tinytext NOT NULL,
	parenttable tinytext NOT NULL,
	contacts int(11) DEFAULT '0' NOT NULL,
	is_main tinyint(3) DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_advaddress_contacts'
#
CREATE TABLE tx_advaddress_contacts (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	parentid tinytext NOT NULL,
	parenttable tinytext NOT NULL,
	title int(11) DEFAULT '0' NOT NULL,
	value tinytext NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_advaddress_companies'
#
CREATE TABLE tx_advaddress_companies (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	name tinytext NOT NULL,
	description text NOT NULL,
	note text NOT NULL,
	addresses int(11) DEFAULT '0' NOT NULL,
	employees int(11) DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_advaddress_staff'
#
CREATE TABLE tx_advaddress_staff (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	starttime int(11) DEFAULT '0' NOT NULL,
	endtime int(11) DEFAULT '0' NOT NULL,
	companyid int(11) DEFAULT '0' NOT NULL,
	personid int(11) DEFAULT '0' NOT NULL,
	companysort tinytext NOT NULL,
	personsort tinytext NOT NULL,
	jobtitle tinytext NOT NULL,
	department tinytext NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'tx_advaddress_status'
#
CREATE TABLE tx_advaddress_status (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    cruser_id int(11) DEFAULT '0' NOT NULL,
    deleted tinyint(4) DEFAULT '0' NOT NULL,
    hidden tinyint(4) DEFAULT '0' NOT NULL,
    starttime int(11) DEFAULT '0' NOT NULL,
    endtime int(11) DEFAULT '0' NOT NULL,
    status int(11) DEFAULT '0' NOT NULL,
		statustype int(11) DEFAULT '0' NOT NULL,
    statusdate int(11) DEFAULT '0' NOT NULL,
		parentid tinytext NOT NULL,
		parenttable tinytext NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);