CREATE DATABASE mertsariozkan;
CREATE TABLE blog(baslik VARCHAR(50), icerik TEXT, tarihsaat DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP);
CREATE TABLE hakkimda(ID INT, hakkimdatext TEXT);
CREATE TABLE iletisim(iletisimbilgileri TEXT);
CREATE TABLE mesajlar(adsoyad VARCHAR(30), mesaj TEXT, tarihsaat DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP);
