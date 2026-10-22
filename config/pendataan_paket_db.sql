CREATE DATABASE pendataan_paket_db;

USE pendataan_paket_db;

CREATE TABLE paket (        
    id VARCHAR(20) NOT NULL UNIQUE,       
    nama_pengirim VARCHAR(50) NOT NULL,
    nama_penerima VARCHAR(50) NOT NULL,
    alamat_tujuan VARCHAR(40) NOT NULL,
    jenis_paket VARCHAR(40) NOT NULL,  
    berat VARCHAR(20) NOT NULL,        
    status VARCHAR(40) NOT NULL        
);

DESC paket;