create database shop;
/*create table user_info */
create table user_info (user_id int(10), firstname varchar(100),lastname varchar(200)
,email varchar(100),password varchar(100),mobile varchar(20),add1 varchar(200),add2 varchar(300));

ALTER TABLE `user_info` CHANGE `user_id` `user_id` INT(10) NULL DEFAULT NULL AUTO_INCREMENT, add PRIMARY KEY (`user_id`);

/* create product*/
create table product (product_id int(10),product_cat varchar(100),product_brand varchar(100),
product_price varchar(100),product_desc varchar(200),product_image varchar(100),
product_keyword varchar(100), product_title varchar(100));

/* primary key added*/
ALTER TABLE `product` CHANGE `product_id` `product_id` INT(10) NULL DEFAULT NULL AUTO_INCREMENT, add PRIMARY KEY (`product_id`);

/*insert record */
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '1', '3', '12000.00', 'samsung j5 prime', 'samsung.jpg', 'samusng j5 prime', 'samsung j5');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '1', '2', '20000.00', 'samsung new series ', 'mobile5.jpeg', 'samsung new series', 'samsung A30');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '1', '2', '5000.00', 'samsung j1', 'mobile4.jpeg', 'samsung mobile j1', 'samsung A10');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '3', '6', '500.00', 'round t-shirt', 'boyes.jpg', 'red rounded t-shrit', 'red t-shirt');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '3', '6', '750.00', 'jacket brown', 'boy3.jpg', 'jacket , brown', 'jacket brown');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '3', '6', '350.00', 'casual shirt', 'boy.jpg', 'casual shirt', 'formal shirt');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '3', '6', '700.00', 'white t-shirt', 'shirt.jpg', 'white shirt', 'wthie t-shirt');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '2', '6', '300.00', 'yellow t-shirt', 'yellow.jpg', 'yellow t-shirt', 'yellow t-shirt ');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '2', '6', '800', 'white or black ', 'white.jpg', 'white or black ', 'white and black');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '2', '6', '800', 'hat dress', 'ladies1.jpg', 'white hat', 'white top');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '2', '6', '2500', 'jense top and paint', 'ladies.jpg', 'jense top', 'jense top ');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '1', '3', '14000', 'samsung mobile', 'samsung1.jpg', 'samsung mobile A10', 'Samsung A10');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '1', '3', '10000', 'samsung j5 mobile', 'samsung2.jpg', 'samsung mobile A30', 'Samsung A30');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '3', '6', '914', 'cape Dress', 'kids1.jpg', 'solid fit flare cape Dress', 'Cape Dress');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '1', '1', '45000', 'Laptop ', 'laptop4.jpeg', 'laptop hp', 'hp laptop');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '1', '1', '35000', 'lenovo laptop', 'laptop1.jpeg', 'laptop.jpeg', 'lenovo laptop');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '1', '1', '75000', 'lenovo laptop', 'laptop5.jpeg', 'ausus', 'Dell laptop');
INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keyword`, `product_title`) VALUES (NULL, '5', NULL, '120000', 'luxury wooden sofa set', 'sofa1.jpg', 'wooden sofa set', 'wooden sofa set ');

/*create category */

create  table catergory (cid int (10),ctitle varchar(100));
/*primary key*/
ALTER TABLE `catergory` CHANGE `cid` `cid` INT(10) NULL DEFAULT NULL AUTO_INCREMENT, add PRIMARY KEY (`cid`);

/* insert record */;
INSERT INTO `catergory` ( `ctitle`) VALUES ( 'Electronic');
INSERT INTO `catergory` ( `ctitle`) VALUES ( 'ladies');
INSERT INTO `catergory` ( `ctitle`) VALUES ( 'mens');

INSERT INTO `catergory` ( `ctitle`) VALUES ( 'furniture');
                                      

/* create brand */

create  table brand (brand_id int (10),brand_title varchar(100));
/*primary key*/
ALTER TABLE `brand` CHANGE `brand_id` `brand_id` INT(10) NULL DEFAULT NULL AUTO_INCREMENT, add PRIMARY KEY (`brand_id`);

/*insert Record */
INSERT INTO `brand` ( `brand_title`) VALUES ( 'HP');
INSERT INTO `brand` ( `brand_title`) VALUES ( 'Samsung');

INSERT INTO `brand` ( `brand_title`) VALUES ( 'cloth');
/*creat card*/
	
create table card(id int(30),user_id varchar(50),p_id int(30),ip_add int(30),product_title
								 varchar(200),product_image varchar(300),qty int(30), price int(30),
								 total_amount int(100));
ALTER TABLE `card` CHANGE `id` `id` INT(30) NULL DEFAULT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);
/*creat card*/
