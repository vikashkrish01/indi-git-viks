#
# Table structure for table 'tx_hofexpress_domain_model_customer'
#
CREATE TABLE tx_hofexpress_domain_model_customer (

	user_id int(11) DEFAULT '0' NOT NULL,
	name varchar(255) DEFAULT '' NOT NULL,
	address varchar(255) DEFAULT '' NOT NULL,
	phone_number int(11) DEFAULT '0' NOT NULL,
	email_id varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_hofexpress_domain_model_address'
#
CREATE TABLE tx_hofexpress_domain_model_address (

);

#
# Table structure for table 'tx_hofexpress_domain_model_food'
#
CREATE TABLE tx_hofexpress_domain_model_food (

	food_name varchar(255) DEFAULT '' NOT NULL,
	restaurant_id int(11) DEFAULT '0' NOT NULL,
	price int(11) DEFAULT '0' NOT NULL,
	food_type varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_hofexpress_domain_model_restaurant'
#
CREATE TABLE tx_hofexpress_domain_model_restaurant (

	restaurant_id int(11) DEFAULT '0' NOT NULL,
	restaurant_name varchar(255) DEFAULT '' NOT NULL,
	description varchar(255) DEFAULT '' NOT NULL,
	logo int(11) unsigned NOT NULL default '0',
	address varchar(255) DEFAULT '' NOT NULL,
	restaurant_type varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_hofexpress_domain_model_order'
#
CREATE TABLE tx_hofexpress_domain_model_order (

);

#
# Table structure for table 'tx_hofexpress_domain_model_orderitems'
#
CREATE TABLE tx_hofexpress_domain_model_orderitems (

	order_id int(11) DEFAULT '0' NOT NULL,
	food_items varchar(255) DEFAULT '' NOT NULL,
	quantity int(11) DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_hofexpress_domain_model_deliverytype'
#
CREATE TABLE tx_hofexpress_domain_model_deliverytype (

);
