CREATE TABLE events (
  eventtitle VARCHAR(50),
  imageurl VARCHAR(100),
  eventdate VARCHAR(50),
  eventdesc VARCHAR(200)
);

-- Inserting data into the events table
INSERT INTO events (eventtitle, imageurl, eventdate, eventdesc)
VALUES ('Event 1', 'https://nceptior.sirv.com/bneparkmanagement/eventimage.png', 'July 1st 2023', "Event Description"),
       ('Event 2', 'https://nceptior.sirv.com/bneparkmanagement/eventimage.png', 'July 7th 2023', "Event Description"),
       ('Event 3', 'https://nceptior.sirv.com/bneparkmanagement/eventimage.png', 'July 14th 2023', "Event Description"),
       ('Event 4', 'https://nceptior.sirv.com/bneparkmanagement/eventimage.png', 'July 21st 2023', "Event Description");

-- Creating the second table: places
CREATE TABLE places (
  placename VARCHAR(50),
  imageurl VARCHAR(100),
  placedesc VARCHAR(200)
);

-- Inserting data into the places table
INSERT INTO places (placename, imageurl, placedesc)
VALUES ('Treasury Casino and Hotel', 'https://nceptior.sirv.com/bneparkmanagement/treasury.png', "The award-winning Treasury Casino & Hotel features luxurious rooms and suites offering old-world charm and modern comforts such as free WiFi. Located just 656 feet from Brisbane River, this historic property offers 6 restaurants, 5 bars and a 24-hour reception desk."),
       ('Brisbane City Markets', 'https://nceptior.sirv.com/bneparkmanagement/bnemarkets.png', "Delivering a premium selection of fresh farm-direct produce, premium local meats, artisan goods, trawler-direct seafood, authentic baked breads, gourmet food and provisions to the middle of Brisbanes iconic CBD. South-East Queensland enjoys some of the freshest seasonal produce in Australia… something we believe everyone should have access too, even in the CBD!"),
       ('Queen Street Mall', 'https://nceptior.sirv.com/bneparkmanagement/queenstreet.png', "Queen Street Mall delivers more bang for your buck than any other shopping precinct in Queensland. Brisbane's best-known pedestrian mall has more than 500 retailers including home-grown talent, designer stores and international labels.");