#
# Table structure for table 'tx_hofexpress_domain_model_customer'
#
CREATE TABLE tx_hofexpress_domain_model_customer (

	user_id int(11) DEFAULT '0' NOT NULL,
	phone_number int(11) DEFAULT '0' NOT NULL,
	address int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_hofexpress_domain_model_address'
#
CREATE TABLE tx_hofexpress_domain_model_address (

	customer int(11) unsigned DEFAULT '0' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	street varchar(255) DEFAULT '' NOT NULL,
	region varchar(255) DEFAULT '' NOT NULL,
	zipcode int(11) DEFAULT '0' NOT NULL,
	house_number varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_hofexpress_domain_model_food'
#
CREATE TABLE tx_hofexpress_domain_model_food (

	food_name varchar(255) DEFAULT '' NOT NULL,
	price double(11,2) DEFAULT '0.00' NOT NULL,
	food_type varchar(255) DEFAULT '' NOT NULL,
	image int(11) unsigned DEFAULT '0' NOT NULL,
	foodmenu int(11) unsigned DEFAULT '0'

);

#
# Table structure for table 'tx_hofexpress_domain_model_restaurant'
#
CREATE TABLE tx_hofexpress_domain_model_restaurant (

	name varchar(255) DEFAULT '' NOT NULL,
	description text,
	logo int(11) unsigned NOT NULL default '0',
	address text,
	restaurant_type varchar(255) DEFAULT '' NOT NULL,
	cover_image int(11) unsigned NOT NULL default '0',
	menu int(11) unsigned DEFAULT '0' NOT NULL,
	food text NOT NULL

);

#
# Table structure for table 'tx_hofexpress_domain_model_order'
#
CREATE TABLE tx_hofexpress_domain_model_order (

	user_id int(11) DEFAULT '0' NOT NULL,
	total_amount int(11) DEFAULT '0' NOT NULL,
	status varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_hofexpress_domain_model_orderitems'
#
CREATE TABLE tx_hofexpress_domain_model_orderitems (

	order_id int(11) DEFAULT '0' NOT NULL,
	food varchar(255) DEFAULT '' NOT NULL,
	quantity int(11) DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_hofexpress_domain_model_deliverytype'
#
CREATE TABLE tx_hofexpress_domain_model_deliverytype (

);

#
# Table structure for table 'tx_hofexpress_domain_model_foodtype'
#
CREATE TABLE tx_hofexpress_domain_model_foodtype (

	food int(11) unsigned DEFAULT '0'

);

#
# Table structure for table 'tx_hofexpress_domain_model_restaurantmenu'
#
CREATE TABLE tx_hofexpress_domain_model_restaurantmenu (

);

#
# Table structure for table 'tx_hofexpress_restaurant_restaurantmenu_mm'
#
CREATE TABLE tx_hofexpress_restaurant_restaurantmenu_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
