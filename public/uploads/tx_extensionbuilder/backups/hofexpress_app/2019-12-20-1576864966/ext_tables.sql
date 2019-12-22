#
# Table structure for table 'tx_hofexpressapp_domain_model_customer'
#
CREATE TABLE tx_hofexpressapp_domain_model_customer (

	user_id int(11) DEFAULT '0' NOT NULL,
	phone_number int(11) DEFAULT '0' NOT NULL,
	address text NOT NULL

);

#
# Table structure for table 'tx_hofexpressapp_domain_model_address'
#
CREATE TABLE tx_hofexpressapp_domain_model_address (

	name varchar(255) DEFAULT '' NOT NULL,
	street varchar(255) DEFAULT '' NOT NULL,
	region varchar(255) DEFAULT '' NOT NULL,
	zipcode int(11) DEFAULT '0' NOT NULL,
	house_number varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_hofexpressapp_domain_model_food'
#
CREATE TABLE tx_hofexpressapp_domain_model_food (

	food_name varchar(255) DEFAULT '' NOT NULL,
	price double(11,2) DEFAULT '0.00' NOT NULL,
	food_type varchar(255) DEFAULT '' NOT NULL,
	image int(11) unsigned DEFAULT '0' NOT NULL,
	foodmenu int(11) unsigned DEFAULT '0',
	food_types text NOT NULL

);

#
# Table structure for table 'tx_hofexpressapp_domain_model_restaurant'
#
CREATE TABLE tx_hofexpressapp_domain_model_restaurant (

	name varchar(255) DEFAULT '' NOT NULL,
	description text,
	logo int(11) unsigned NOT NULL default '0',
	address text,
	restaurant_type varchar(255) DEFAULT '' NOT NULL,
	cover_image int(11) unsigned NOT NULL default '0',
	menu int(11) unsigned DEFAULT '0',
	food text NOT NULL

);

#
# Table structure for table 'tx_hofexpressapp_domain_model_order'
#
CREATE TABLE tx_hofexpressapp_domain_model_order (

	total_amount int(11) DEFAULT '0' NOT NULL,
	status varchar(255) DEFAULT '' NOT NULL,
	order_status int(11) unsigned DEFAULT '0',
	delivery int(11) unsigned DEFAULT '0',
	customer int(11) unsigned DEFAULT '0',
	order_items int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_hofexpressapp_domain_model_orderitems'
#
CREATE TABLE tx_hofexpressapp_domain_model_orderitems (

	tx_order int(11) unsigned DEFAULT '0' NOT NULL,

	quantity int(11) DEFAULT '0' NOT NULL,
	food int(11) unsigned DEFAULT '0'

);

#
# Table structure for table 'tx_hofexpressapp_domain_model_deliverytype'
#
CREATE TABLE tx_hofexpressapp_domain_model_deliverytype (

	home_or_take_type varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_hofexpressapp_domain_model_foodtype'
#
CREATE TABLE tx_hofexpressapp_domain_model_foodtype (

	select_food_type varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_hofexpressapp_domain_model_restaurantmenu'
#
CREATE TABLE tx_hofexpressapp_domain_model_restaurantmenu (

	name varchar(255) DEFAULT '' NOT NULL,
	description text

);

#
# Table structure for table 'tx_hofexpressapp_domain_model_orderstatus'
#
CREATE TABLE tx_hofexpressapp_domain_model_orderstatus (

	name varchar(255) DEFAULT '' NOT NULL,
	description text

);
