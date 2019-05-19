
CREATE TABLE biodata (
  id int IDENTITY(1,1) PRIMARY KEY,
  nama varchar(50) NOT NULL,
  jenis_kelamin varchar(50) NOT NULL,
  alamat varchar(100) NOT NULL,
  no_hp varchar(12) NOT NULL
) ;
