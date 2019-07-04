CREATE TABLE "estados" (
  "id" Serial UNIQUE PRIMARY KEY NOT NULL,
  "CO_UF" int UNIQUE NOT NULL,
  "SG_UF" varchar(12) NOT NULL,
  "NO_UF" varchar(255) NOT NULL,
  "NO_REGIAO" varchar(255) NOT NULL
);

CREATE TABLE "cidades" (
  "id" Serial UNIQUE PRIMARY KEY NOT NULL,
  "COD_IBGE" varchar(255) NOT NULL,
  "NO_MU" varchar(255) NOT NULL,
  "CO_UF" int NOT NULL,
  "SG_UF" varchar(12) NOT NULL,
  "NO_UF" varchar(255) NOT NULL,
  "LAT" varchar(255) NOT NULL,
  "LON" varchar(255) NOT NULL
);

ALTER TABLE "cidades" ADD FOREIGN KEY ("CO_UF") REFERENCES "estados" ("CO_UF");