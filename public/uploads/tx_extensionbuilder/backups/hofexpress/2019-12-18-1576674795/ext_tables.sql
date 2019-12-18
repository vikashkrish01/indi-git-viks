#
# Table structure for table 'tx_hofexpress_domain_model_customer'
#
CREATE TABLE tx_hofexpress_domain_model_customer (

	user_id int(11) DEFAULT '0' NOT NULL,
	phone_number int(11) DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_hofexpress_domain_model_address'
#
CREATE TABLE tx_hofexpress_domain_model_address (

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
	restaurant_id int(11) DEFAULT '0' NOT NULL,
	price int(11) DEFAULT '0' NOT NULL,
	food_type varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_hofexpress_domain_model_restaurant'
#
CREATE TABLE tx_hofexpress_domain_model_restaurant (

	id int(11) DEFAULT '0' NOT NULL,
	name varchar(255) DEFAULT '' NOT NULL,
	description text,
	logo int(11) unsigned NOT NULL default '0',
	address text,
	restaurant_type varchar(255) DEFAULT '' NOT NULL,
	cover_image int(11) unsigned NOT NULL default '0'

);

#
# Table structure for table 'tx_hofexpress_domain_model_order'
#
CREATE TABLE tx_hofexpress_domain_model_order (

	order_id int(11) DEFAULT '0' NOT NULL,
	user_id int(11) DEFAULT '0' NOT NULL,
	total_amount int(11) DEFAULT '0' NOT NULL,
	status varchar(255) DEFAULT '' NOT NULL

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
