<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('Could not connect:'.mysql_error());
}
/*   
Creating Database
   */
 $ret=mysql_query("CREATE DATABASE Testing",$con);
 if(!$ret)
 {
     die('Could not create '.mysql_error());
 }
 else
 {
     echo "Database created";
 }
 
$selectDB=mysql_select_db("Testing",$con);
if(!$selectDB)
{
Die("Can not use Testing:".mysql_error());
}
else
{
    echo "select successfully";
}
 /*
 Creating Table
 */
 /*
   category Table
 */
 
 $tbquery="CREATE TABLE category(CID varchar(10),CategoryName varchar(25),PRIMARY KEY(CID))";
 $ret=mysql_query($tbquery,$con);
 if(!$ret)
 {
     echo "<p>something went wrong in creating table category ".mysql_error();
 }
 else{
     echo "<p>Created category table</p>";
 }
 
/*
   Artist Table
    */
 $tbquery="CREATE TABLE artist(ArtistId varchar(10),ArtistName varchar(30),PRIMARY KEY(ArtistId))";
 $ret=mysql_query($tbquery,$con);
 if(!ret)
 {
     echo  "<p>something went wrong in creating table artist ".mysql_error();
 }
 else
 {
     echo "<p>Create artist table</p>";
 }
        /*
 product table
        */
 $tbquery="CREATE TABLE product(PID varchar(10),ProductImage varchar(30),CID varchar(10),ArtistId varchar(10),ProductName varchar(40),Size varchar(20),Price int,In_Hand int,
 PRIMARY KEY(PID),FOREIGN KEY(CID) REFERENCES category(CID),FOREIGN KEY(ArtistId) REFERENCES artist(ArtistId))";
 $ret=mysql_query($tbquery,$con);
 if(!$ret)
 {
     echo "<p>something went wrong in creating table product ".mysql_error();
 }
 else
 {
     echo "<p>Create product table</p>";
 }
          /*
 customer table
          */
 
 $tbquery="CREATE TABLE customer(CustomerId varchar(10),CustomerImage varchar(40),Name varchar(40),Email varchar(40),Phone varchar(12),Password varchar(10),Address varchar(50),
 PRIMARY KEY(CustomerId))";
 $ret=mysql_query($tbquery,$con);
 if(!$ret)
 {
     echo "<p>Something went wrong in creating table customer ".mysql_error();
 }
 else
 {
     echo "<p>Created customer table</p>";
 }
          /*
 Orderer Table 
          */
 $tbquery="CREATE TABLE Orderer(OId varchar(10),CustomerId varchar(10),Date date,
 PRIMARY KEY(OId),FOREIGN KEY(CustomerId) REFERENCES customer(CustomerId))";
 $ret=mysql_query($tbquery,$con);
 if(!$ret)
 {
     echo "<p>Something went wrong in creating order table ".mysql_error();
 }
 else
 {
     echo "<p>Created order table</p>";
 }
  
                 /*
 Order Detail Table
 
                 */
 $tbquery="CREATE TABLE order_detail(OrId varchar(10),OID varchar(10),PID varchar(10),Quantity int,Total_Amount int,
 PRIMARY KEY(OrId),FOREIGN KEY(OID) REFERENCES Orderer(OID))";
 $ret=mysql_query($tbquery,$con);
 if(!$ret)
 {
     echo "<p>Something went wrong in creating order detail table ".mysql_error();
 }
 else
 {
     echo "<p>Created Order Detail Table</p>";
 }
  
 /*
 Insert Category
   */
 mysql_query("INSERT INTO category(CID,CategoryName)values('C1','Shirt')",$con);
 mysql_query("INSERT INTO category(CID,CategoryName)values('C2','Hoodie')",$con);
 mysql_query("INSERT INTO category(CID,CategoryName)values('C3','Album')",$con);
 mysql_query("INSERT INTO category(CID,CategoryName)values('C4','Hat')",$con);
 mysql_query("INSERT INTO category(CID,CategoryName)values('C5','Lightstick')",$con);
 mysql_query("INSERT INTO category(CID,CategoryName)values('C6','Other')",$con);
 
 /*
   Insert Artist
 */
 mysql_query("INSERT INTO artist(ArtistId,ArtistName)values('A1','BTS')",$con);
 mysql_query("INSERT INTO artist(ArtistId,ArtistName)values('A2','BlackPink')",$con);
 mysql_query("INSERT INTO artist(Artistd,ArtistName)values('A3','TWICE')",$con);
 /*
Insert into Product Category 1 Black Pink
*/
$pet=mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0014','blackpink/shirt.png','C1','A2','TIE DYE.FALL 2022 TOUR T-SHIRT','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0015','blackpink/shirt1.png','C1','A2','BORN PINK 1st ANNIVERSARY TOUR T-SHIRT','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0016','blackpink/shirt2.png','C1','A2','BORN PINK TOUR 2022 T-SHIRT','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0017','blackpink/shirt3.png','C1','A2','PINK VENOM 1st EDITION','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0018','blackpink/shirt4.png','C1','A2','LOVESICK GIRL ALBUM T-SHIRT EDITION','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0019','blackpink/shirt5.png','C1','A2','LOVESICK GIRL TOUR T-SHIRT','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0020','blackpink/shirt6.png','C1','A2','THE ALBUM T-SHIRT VER.1','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0021','blackpink/shirt7.png','C1','A2','THE ALBUM T-SHIRT VER.2','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0022','blackpink/shirt8.png','C1','A2','ICE CREAM T-SHIRT I','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0023','blackpink/shirt9.png','C1','A2','ICE CREAM T-SHIRT II','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0024','blackpink/shirt10.png','C1','A2','ICE CREAM T-SHIRT III','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0025','blackpink/shirt11.png','C1','A2','ICE CREAM T-SHIRT IV','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0026','blackpink/shirt12.png','C1','A2','HYLT T-SHIRT I','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0027','blackpink/shirt13.png','C1','A2','HYLT T-SHIRT II','XL',40000,100)",$con);


/*
Insert into product Category 3 Album Black Pink
*/
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0028','blackpink/album1.png','C3','A2','[BORN PINK] LIMITED EDITION','',26000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0029','blackpink/album2.png','C3','A2','BORN PINK 2nd EDITION BOX VER. WHITE','',27000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0030','blackpink/album3.png','C3','A2','BORN PINK 2nd EDITION BOX VER. BLACK','',25000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0031','blackpink/album4.png','C3','A2','BORN PINK 2nd EDITION BOX VER. GREY','',28500,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0032','blackpink/album5.png','C3','A2','THE ALBUM CD','',28000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0033','blackpink/album6.png','C3','A2','THE ALBUM VER.1','',33000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0034','blackpink/album7.png','C3','A2','THE ALBUM VER.2','',31000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0035','blackpink/album8.png','C3','A2','BLACKPINK KILL THIS LOVE[2nd MINI ALBUM]','',29000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0036','blackpink/album9.png','C3','A2','BLACKPINK-THE ALBUM [1st FULL ALBUM]','',33000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0037','blackpink/album10.png','C3','A2','BLACKPINK-SQUARE UP [1st MINI ALBUM]','',32000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0038','blackpink/album11.png','C3','A2','LISA-FIRST SINGLE ALBUM LALISA','',28000,100)",$con);

/*
Insert into product category 4 hat Black Pink
*/
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0039','blackpink/hat.png','C4','A2','THE ALBUM DAD HAT','',18500,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0040','blackpink/hat1.png','C4','A2','BLACKPINK DAD HAT','',20000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0041','blackpink/hat2.png','C4','A2','SHUT DOWN DAD HAT','',20000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0042','blackpink/hat3.png','C4','A2','BLACKPIN DAD HAT I','',19000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0043','blackpink/hat4.png','C4','A2','TASTE THAT BUCKET HAT','',19000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0044','blackpink/hat5.png','C4','A2','ICREAM HAT','',22000,100)",$con);

/*
Insert LightStick category 5 Blackpink
*/
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0045','blackpink/lightstick.png','C5','A2','BLACKPINK-LIGHT STICK KEYRING','',14000,100)",$con);

/*
Insert Other category 6 Blackpink
*/
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0046','blackpink/other.png','C6','A2','THE ALBUM KEYCHAIN','',4000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0047','blackpink/other1.png','C6','A2','THE ALBUM TOTE','XL',6000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0048','blackpink/other2.png','C6','A2','BLACKPINK GLASS AND MASK','',7500,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0049','blackpink/other3.png','C6','A2','ICE CREAM KEYCHAIN','',5500,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0050','blackpink/other4.png','C6','A2','SELENA & BLACKPINK COLAB KEY','XL',9000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0051','blackpink/other5.png','C6','A2','ICE CREAM CHILLIN','',5500,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0052','blackpink/other6.png','C6','A2','ICE CREAM BUMPERS STICKERS','',9500,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0053','blackpink/other7.png','C6','A2','ICE CREAM BEACH TOWEL','',3500,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0054','blackpink/other8.png','C6','A2','BLACKPINK BUTTON SET','',6000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0055','blackpink/other9.png','C6','A2','BLACKPINK WORLD TOUR CARD SET','',10000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0056','blackpink/other10.png','C6','A2','BORN PINK POSETER','',7000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0057','blackpink/other11.png','C6','A2','SHUT DOWN WATER BOTTLE','',12000,100)",$con); 

/*
 Insert Hoodies category 2 TWICE
*/
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0058','twice/hoodies.jpg','C2','A3','TWICE WINTER HOODIE','XL',38000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0059','twice/hoodies1.jpg','C2','A3',TWICE HOODIE I'','XL',40000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0060','twice/hoodies2.jpg','C2','A3','TWICE HOODIE II','XL',42000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0061','twice/hoodies3.jpg','C2','A3','TWICE HOODIE III','XL',46000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0062','twice/hoodies4.jpg','C2','A3','TWICE HOODIE IV','XL',44000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0063','twice/hoodies5.jpg','C2','A3','TWICE HOODIE V','XL',42000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0064','twice/hoodies6.jpg','C2','A3','TWICE WINTER HOODIE VOL.2','XL',43000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0065','twice/hoodies7.jpg','C2','A3','TWICE WINTER HOODIE VOL.1','XL',48000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0066','twice/hoodies8.jpg','C2','A3','TZUYU  SANA HOODIE','XL',45000,100)",$con);
/*
Insert shirt category 1 TWICE                                                                                                       
*/ 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0067','twice/shirt.png','C1','A3','MORE & MORE T-SHIRT I','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0068','twice/shirt1.png','C1','A3','MORE & MORE T-SHIRT II','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0069','twice/shirt2.png','C1','A3','TWICE TONAL CROP T-SHIRT','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0070','twice/shirt3.jpg','C1','A3','4TH WORLD TOUR T-SHIRT','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0071','twice/shirt4.jpg','C1','A3','TWICE T-SHIRT','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0072','twice/shirt5.png','C1','A3','TWICE COLLAGE T-SHIRT','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0073','twice/shirt6.jpg','C1','A3','TWICE T-SHIRT I','XL',40000,100)",$con); 

/*
Insert Hat category 4 TWICE
*/
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0074','twice/hat.jpg','C4','A3','TWICE-FASHION BASEBALL CAP I','',23000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0075','twice/hat1.jpg','C4','A3','TWICE-FASHION BASEBALL CAP II','',25000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0076','twice/hat2.jpg','C4','A3','TWICE-FASHION BASEBALL CAP III','',24900,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0077','twice/hat3.jpg','C4','A3','TWICE-FASHION BASEBALL CAP IV','',23500,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0078','twice/hat4.jpg','C4','A3','TWICE-FASHION BASEBALL CAP V','',23000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0079','twice/hat5.jpg','C4','A3','TWICE-FASHION BASEBALL CAP VI','',21000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0074','twice/hat6.jpg','C4','A3','TWICE-FASHION BASEBALL CAP VII','',22000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0075','twice/hat7.jpg','C4','A3','TWICE BUCKET HAT I','',24000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0076','twice/hat8.jpg','C4','A3','TWICE BUCKET HAT II','',23000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0077','twice/hat9.jpg','C4','A3','TWICE BUCKET HAT III','',22000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0078','twice/hat10.jpg','C4','A3','TWICE BUCKET HAT IV','',25000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0079','twice/hat11.png','C4','A3','TWICE BUCKET HAT V','',28000,100)",$con);
/*
Insert LightStick category 5 TWICE
*/
  mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0080','twice/lightstick.jpeg','C4','A3','TWICE NEW LIGHTSTICK','',23000,100)",$con);

  /*
    Insert Album category 3 TWICE
  */
  mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0081','twice/album.png','C3','A3','TWICE-THE FEELS SINGLE ALBUM','',30000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0082','twice/album1.png','C3','A3','BETWEEN 1&2 DIGITAL ALBUM','XL',30000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0083','twice/album2.png','C3','A3','MORE & MORE DIGITAL ALBUM','',35000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0084','twice/album3.png','C3','A3','TASTE OF LOVE 10th MINI ALBUM','',37000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0085','twice/album5.png','C3','A3','FORMULA OF LOVE THE 3rd FULL ALBUM','',38000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0086','twice/album6.png','C3','A3','EYES WIDE OPEN THE 2nd FULL ALBUM','',37000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0087','twice/album7.png','C3','A3','BETWEEN 1&2 11th MINI ALBUM','',35000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0088','twice/album8.png','C3','A3','MOONLIGH SUNRISE(INSTRUMENTAL) DIGITAL SINGLE','',34000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0089','twice/album9.png','C3','A3','MORE & MORE (ENGLISH VERSION) DIGITAL SINGLE ALBUM','',35000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0090','twice/album10.png','C3','A3','THE FEELS ENGLISH VERSION','',34000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0091','twice/album.png','C3','A3','I CANT STOP ME (ENGLISH VERSION) TEH 2nd FULL ALBUM,'',38000,100)",$con);
/*
Insert Others category 6 TWICE
*/
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0092','twice/bottle1.jpg','C6','A3','TWICE CLASSIC LOGO WATER BOTTLE IV','',15000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0093','twice/bottle2.jpg','C6','A3','TWICE CLASSIC LOGO WATER BOTTLE III','',18000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0094','twice/bottle3.jpg','C6','A3','TWICE CLASSIC LOGO WATER BOTTLE I','',18000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0095','twice/bottle4.jpg','C6','A3','TWICE CLASSIC LOGO WATER BOTTLE II','',14000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0096','twice/card1.jpg','C6','A3','TWICE MORE & MORE CARD SET I','',8900,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0097','twice/card2.jpg','C6','A3','TWICE MORE & MORE CARD SET II','',8500,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0098','twice/card3.jpg','C6','A3','WHAT IS LOVE? CARD SET','',9000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0098','twice/card4.jpg','C6','A3','WHAT IS LOVE? VER.B CARD SET','',9000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0099','twice/card5.jpg','C6','A3','VALENTINE DAY TWICE CARD SET','',12000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0100','twice/card6.jpg','C6','A3','MERRY & HAPPY TWICE CARD SET','',8000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0101','twice/keychain1.jpg','C6','A3','TWICE KEYCHAIN I','',5000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0102','twice/keychain2.jpg','C6','A3','TWICE KEYCHAIN II','',5000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0103','twice/keychain3.jpg','C6','A3','TWICE KEYCHAIN III','',5000,100)",$con);
/*
   Insert Hoodies category 2 BTS
*/
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0104','bts/hoodies1.jpg','C2','A1','BTS COTTON HODDIE','XL',47000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0105','bts/hoodies2.jpg','C2','A1','BTS COTTON HOODIE II','XL',44000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0106','bts/hoodies3.jpg','C2','A1','BTS COTTON HOODIE III','XL',45000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0107','bts/hoodies4.jpg','C2','A1','BTS COTTON HOODIE IV','XL',45000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0108','bts/hoodies5.jpg','C2','A1','DYNAMITE OVERSIZED PATCHWORK HOODIES(ORANGE)','XL',45000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0109','bts/hoodies6.jpg','C2','A1','DYNAMITE OVERSIZED PATCHWORK HOODIES(BLUE)','XL',45000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0110','bts/hoodies7.png','C2','A1','PTD COTTON HOODIE','XL',45000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0111','bts/hoodies8.jpg','C2','A1','BTS COTTON HOODIE-GREY','XL',45000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0112','bts/hoodies9.jpg','C2','A1','BTS COTTON HOODIE-PUPLE','XL',45000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0113','bts/hoodies10.jpg','C2','A1','BUTTER COTTON HOODIE I','XL',45000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0114','bts/hoodies11.jpg','C2','A1','BUTTER COTTON HOODIE II','XL',45000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0115','bts/hoodies12.jpg','C2','A1','BUTTER COTTON HOODIE III','XL',45000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0116','bts/hoodies14.jpg','C2','A1','BUTTER COTTON HOODIE IV','XL',45000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0117','bts/hoodies15.jpg','C2','A1','BUTTER COTTON HOODIE V','XL',45000,100)",$con); 
 
      /*
      Insert Shirt Category 1 BTS
      */
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0119','bts/shirt.jpg','C1','A1','BTS ARMY K-POP T-SHIRT','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0120','bts/shirt1.png','C1','A1','YET TO COME T-SHIRT','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0121','bts/shirt2.jpg','C1','A1','BTS ARMY T-SHIRT','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0122','bts/shirt3.jpg','C1','A1','','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0123','bts/shirt4.jpg','C1','A1','BTS AMAZING T-SHIRT','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0124','bts/shirt5.jpg','C1','A1','BTS-ROUND NECK T-SHIRT','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0125','bts/shirt7.jpg','C1','A1','JIMIN BTS CREW NECK T-SHIRT','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0126','bts/shirt8.jpg','C1','A1','BTS-GROUP HIP HOP PRINTTED T-SHIRT','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0127','bts/shirt9.jpg','C1','A1','ROUND NECK T-SHIRT(SILVER)','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0128','bts/shirt10.jpg','C1','A1','BTS-I PURPLE U T-SHIRT','XL',40000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0129','bts/shirt11.jpg','C1','A1','ROUND NECK T-SHIRT BTS','XL',40000,100)",$con);

/*
   Insert Hat Category 4 BTS
   */
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0130','bts/hat.jpg','C4','A1','UNISEX COTTON CAP','',30000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0131','bts/hat1.jpeg','C4','A1','BUCKET HAT','',25000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0132','bts/hat2.jpg','C4','A1','BTS FASHION HAT CAP(PINK)','',26000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0133','bts/hat3.jpg','C4','A1','BOYS BASEBALL CAP I','',28000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0134','bts/hat4.jpg','C4','A1','BOYS BASEBALL CAP II','',28000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0135','bts/hat5.jpg','C4','A1','BOYS BASEBALL CAP III','',26000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0136','bts/hat6.jpg','C4','A1','BTS PRINTTED FASHION CAP I','',29000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0137','bts/hat7.jpg','C4','A1','BTS PRINTTED FASHION CAP II','',28000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0138','bts/hat8.jpg','C4','A1','BTS PRINTTED FASHION CAP III','',26000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0139','bts/hat9.jpg','C4','A1','DRAGMEPARTTY KNITTED HAT','',26000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0140','bts/hat10.jpg','C4','A1','PERMISSION TO DANCE BUCKET HAT','',26000,100)",$con);

/*
Insert Album Category 3 BTS
*/
  mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0141','bts/album1.jpg','C3','A1','BTS-ANTHOLOGY ALBUM','',32000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0142','bts/album2.jpg','C3','A1','BTS WORLD SOUNDTRACK','',35000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0143','bts/album3.png','C3','A1','YET TO COME (CD VER.)','',30000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0144','bts/album4.jpg','C3','A1','BUTTER (RANDOM)','',32000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0145','bts/album5.jpg','C3','A1','BTS BUTTER 7 VINYL','',34000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0146','bts/album6.jpg','C3','A1','ON-7 VINYL','',32000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0147','bts/album7.png','C3','A1','','',30000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0148','bts/album8.jpg','C3','A1','BTS WORLD OST LIMITED EDITION PACKAGE','',32000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0149','bts/album9.jpg','C3','A1','DYNAMITE-LIMITED EDITION 7 VINYL','',35000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0150','bts/album10.jpg','C3','A1','[BTS-THE BEST] SET','',38000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0151','bts/album11.png','C3','A1','JACK IN THE BOX[LP] LIMITED EDITION','',32000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0152','bts/album12.png','C3','A1','RM (BTS) INDIGO LP','',32000,100)",$con);

/*
Insert Other Category 6 BTS
*/
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0153','bts/bottle1.jpg','C6','A1','BTS WATER BOTTLE 1','',19500,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0154','bts/bottle2.jpg','C6','A1','BTS WATER BOTTLE 2','',18500,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0155','bts/bottle3.jpg','C6','A1','BTS WATER BOTTLE 3','',19000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0156','bts/bottle4.jpg','C6','A1','BTS WATER BOTTLE 4','',18000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0157','bts/card1.jpg','C6','A1','JIMIN CARD SET','',10000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0158','bts/card2.jpg','C6','A1','JIMIN LOMO CARD SET','',10000,100)",$con); 

mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0159','bts/bottle5.jpg','C6','A1',BTS WATER BOTTLE 5'','XL',18000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0160','bts/keychain1.jpg','C6','A1',BTS KETCHAIN 1'','',5000,100)",$con); 
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0161','bts/keychain2.jpg','C6','A1','BTS KEYCHAIN 2','',5000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0162','bts/keychain3.jpg','C6','A1','BTS KEYCHAIN 3','',5000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0163','bts/keychain4.jpg','C6','A1','BTS GROUP KEY CHAIN','',5000,100)",$con);
mysql_query("INSERT INTO product(PID,ProductImage,CID,ArtistId,ProductName,Size,Price,In_Hand)values('p0164','bts/keychain6.jpg','C6','A1','BTS KEY CHAIN','',5000,100)",$con);
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          