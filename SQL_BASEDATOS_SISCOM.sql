CREATE TABLE IF NOT EXISTS horario(
    dia VARCHAR(10) not null,
    hora time not null,
    PRIMARY KEY(dia,hora) 
    );
    
CREATE TABLE IF NOT EXISTS postulante(
    matricula int(10) not null,
    nombre VARCHAR(50) not null,
    PRIMARY KEY(matricula)
    );
          
CREATE TABLE IF NOT EXISTS profesor(
    rut varchar(12) not null,
    nombre varchar(50) not null,
    PRIMARY KEY(rut)
    );    
CREATE TABLE IF NOT EXISTS ramo(
    codigo varchar(8) not null,
    nombre varchar(50) not null,
    PRIMARY KEY(codigo)
    );
CREATE TABLE IF NOT EXISTS semestre(
    codigo varchar(6) not null,
    PRIMARY KEY(codigo)
    );
CREATE TABLE IF NOT EXISTS postula(
    matricula  int(10) NOT null,
    codigo varchar(8) not null,
    solicitado char not null,
    seleccionado char not null,
    PRIMARY KEY(codigo,matricula),
    FOREIGN KEY(matricula) references postulante(matricula),
    FOREIGN KEY(codigo) references ramo(codigo)
    );
CREATE TABLE IF NOT EXISTS dicta(
    codigo varchar(8) not null,
    rut varchar(12) not null,
    codigo_semestre varchar(8) not null,
    PRIMARY KEY(codigo,rut),
    FOREIGN KEY(codigo) references ramo(codigo),
    FOREIGN KEY(rut) references profesor(rut),
    FOREIGN KEY(codigo_semestre) references semestre(codigo)
    );
CREATE TABLE IF NOT EXISTS ayudo(
    matricula int(10) not null,
    codigo varchar(8) not null,
    codigo_semestre varchar(6) not null,
    PRIMARY KEY(matricula,codigo,codigo_semestre),
    FOREIGN KEY(matricula) references postulante(matricula),
    FOREIGN KEY(codigo) references ramo(codigo),
    FOREIGN KEY(codigo_semestre) references semestre(codigo)
    );
CREATE TABLE IF NOT EXISTS curso(
    matricula int(10) not null,
    codigo varchar(8) not null,
    calificaion varchar(3) not null,
    PRIMARY KEY(matricula,codigo,calificaion),
    FOREIGN KEY(matricula) references postulante(matricula),
    FOREIGN KEY(codigo) references ramo(codigo)
    );
CREATE TABLE IF NOT EXISTS tiene(
    codigo varchar(8) not null,
    dia VARCHAR(10) not null,
    hora time not null,
    PRIMARY KEY(codigo,dia,hora),
    FOREIGN KEY(dia,hora) references horario(dia,hora),
    FOREIGN KEY(codigo) references ramo(codigo)
    );
CREATE TABLE IF NOT EXISTS dispone(
    matricula int(10) not null,
    dia VARCHAR(10) not null,
    hora time not null,
    PRIMARY KEY(matricula,dia,hora),
    FOREIGN KEY(dia,hora) references horario(dia,hora),
    FOREIGN KEY(matricula) references postulante(matricula)
    );


INSERT INTO horario(dia, hora) VALUES ('LUNES','08:15:00');
INSERT INTO horario(dia, hora) VALUES ('LUNES','09:15:00');
INSERT INTO horario(dia, hora) VALUES ('LUNES','10:15:00');
INSERT INTO horario(dia, hora) VALUES ('LUNES','11:15:00');
INSERT INTO horario(dia, hora) VALUES ('LUNES','12:15:00');
INSERT INTO horario(dia, hora) VALUES ('LUNES','13:15:00');
INSERT INTO horario(dia, hora) VALUES ('LUNES','14:15:00');
INSERT INTO horario(dia, hora) VALUES ('LUNES','15:15:00');
INSERT INTO horario(dia, hora) VALUES ('LUNES','16:15:00');
INSERT INTO horario(dia, hora) VALUES ('LUNES','17:15:00');
INSERT INTO horario(dia, hora) VALUES ('LUNES','18:15:00');
INSERT INTO horario(dia, hora) VALUES ('LUNES','19:15:00');
INSERT INTO horario(dia, hora) VALUES ('LUNES','20:15:00');

INSERT INTO horario(dia, hora) VALUES ('MARTES','08:15:00');
INSERT INTO horario(dia, hora) VALUES ('MARTES','09:15:00');
INSERT INTO horario(dia, hora) VALUES ('MARTES','10:15:00');
INSERT INTO horario(dia, hora) VALUES ('MARTES','11:15:00');
INSERT INTO horario(dia, hora) VALUES ('MARTES','12:15:00');
INSERT INTO horario(dia, hora) VALUES ('MARTES','13:15:00');
INSERT INTO horario(dia, hora) VALUES ('MARTES','14:15:00');
INSERT INTO horario(dia, hora) VALUES ('MARTES','15:15:00');
INSERT INTO horario(dia, hora) VALUES ('MARTES','16:15:00');
INSERT INTO horario(dia, hora) VALUES ('MARTES','17:15:00');
INSERT INTO horario(dia, hora) VALUES ('MARTES','18:15:00');
INSERT INTO horario(dia, hora) VALUES ('MARTES','19:15:00');
INSERT INTO horario(dia, hora) VALUES ('MARTES','20:15:00');

INSERT INTO horario(dia, hora) VALUES ('MIERCOLES','08:15:00');
INSERT INTO horario(dia, hora) VALUES ('MIERCOLES','09:15:00');
INSERT INTO horario(dia, hora) VALUES ('MIERCOLES','10:15:00');
INSERT INTO horario(dia, hora) VALUES ('MIERCOLES','11:15:00');
INSERT INTO horario(dia, hora) VALUES ('MIERCOLES','12:15:00');
INSERT INTO horario(dia, hora) VALUES ('MIERCOLES','13:15:00');
INSERT INTO horario(dia, hora) VALUES ('MIERCOLES','14:15:00');
INSERT INTO horario(dia, hora) VALUES ('MIERCOLES','15:15:00');
INSERT INTO horario(dia, hora) VALUES ('MIERCOLES','16:15:00');
INSERT INTO horario(dia, hora) VALUES ('MIERCOLES','17:15:00');
INSERT INTO horario(dia, hora) VALUES ('MIERCOLES','18:15:00');
INSERT INTO horario(dia, hora) VALUES ('MIERCOLES','19:15:00');
INSERT INTO horario(dia, hora) VALUES ('MIERCOLES','20:15:00');

INSERT INTO horario(dia, hora) VALUES ('JUEVES','08:15:00');
INSERT INTO horario(dia, hora) VALUES ('JUEVES','09:15:00');
INSERT INTO horario(dia, hora) VALUES ('JUEVES','10:15:00');
INSERT INTO horario(dia, hora) VALUES ('JUEVES','11:15:00');
INSERT INTO horario(dia, hora) VALUES ('JUEVES','12:15:00');
INSERT INTO horario(dia, hora) VALUES ('JUEVES','13:15:00');
INSERT INTO horario(dia, hora) VALUES ('JUEVES','14:15:00');
INSERT INTO horario(dia, hora) VALUES ('JUEVES','15:15:00');
INSERT INTO horario(dia, hora) VALUES ('JUEVES','16:15:00');
INSERT INTO horario(dia, hora) VALUES ('JUEVES','17:15:00');
INSERT INTO horario(dia, hora) VALUES ('JUEVES','18:15:00');
INSERT INTO horario(dia, hora) VALUES ('JUEVES','19:15:00');
INSERT INTO horario(dia, hora) VALUES ('JUEVES','20:15:00');

INSERT INTO horario(dia, hora) VALUES ('VIERNES','08:15:00');
INSERT INTO horario(dia, hora) VALUES ('VIERNES','09:15:00');
INSERT INTO horario(dia, hora) VALUES ('VIERNES','10:15:00');
INSERT INTO horario(dia, hora) VALUES ('VIERNES','11:15:00');
INSERT INTO horario(dia, hora) VALUES ('VIERNES','12:15:00');
INSERT INTO horario(dia, hora) VALUES ('VIERNES','13:15:00');
INSERT INTO horario(dia, hora) VALUES ('VIERNES','14:15:00');
INSERT INTO horario(dia, hora) VALUES ('VIERNES','15:15:00');
INSERT INTO horario(dia, hora) VALUES ('VIERNES','16:15:00');
INSERT INTO horario(dia, hora) VALUES ('VIERNES','17:15:00');
INSERT INTO horario(dia, hora) VALUES ('VIERNES','18:15:00');
INSERT INTO horario(dia, hora) VALUES ('VIERNES','19:15:00');
INSERT INTO horario(dia, hora) VALUES ('VIERNES','20:15:00');


INSERT INTO postulante(matricula, nombre) VALUES ('2013429359','Sebastián Moraga Scheuermann'),
                                                 ('2013459916','Isabel Donoso Leiva'),
                                                 ('2012000000','Katerin De la Hoz'),
                                                 ('2014000000','Gonzalo Benavides García'),
                                                 ('2001696969','Jorge Nitales');

INSERT INTO profesor(rut, nombre) VALUES ('15.555.555-5','Maike Litoris'),
                                         ('16.666.666-5','Patricio Carlos Agusto'),
                                         ('17.777.777-7','Aquiles Castro'),
                                         ('18.648.241-k','Stephanie Caro Torres'),
                                         ('21.696.969-1','Alberto Catesta'),
                                         ('14.555.555-5','Juan Cardenas C'),
                                         ('18.188.888-8','M. WALLACE'),
                                         ('18.288.888-8','Leonel Badilla Araya'),
                                         ('18.388.888-8','M. CAMPOS'),
                                         ('18.488.888-8','J. AGUIRRE'),
                                         ('18.588.888-8','Felipe Portales Oliva'),
                                         ('18.688.888-8','Jorge L. Delgado Morales'),
                                         ('18.688.888-3','Jorge Avila Cartes'),
                                         ('18.788.888-8','Elias Fierro Antipi'),
                                         ('18.555.888-8','Bruno Karelovic Burotto'),
                                         ('18.138.888-8','Francisco Cala R.'),
                                         ('18.148.888-8','L. NEIRA');
INSERT INTO ramo(codigo, nombre) VALUES ('520145-1','INTRODUCCION A LA MATEMÁTICA UNIVERSITARIA'),
                                        ('520145-0','INTRODUCCION A LA MATEMÁTICA UNIVERSITARIA'),
                                        ('523240-0','MET. CUANTITATIVOS I'),
                                        ('525117-0','CALCULO'),
                                        ('525157-0','CALCULO I'),
                                        ('525157-1','CALCULO I'),
                                        ('525221-0','ECUCIONES DIFERENCIALES ORDINARIAS'),
                                        ('510145-0','INTRODUCCION A LA FISICA UNIVERSITARIA'),
                                        ('510145-1','INTRODUCCION A LA FISICA UNIVERSITARIA'),
                                        ('510145-2','INTRODUCCION A LA FISICA UNIVERSITARIA'),
                                        ('510145-3','INTRODUCCION A LA FISICA UNIVERSITARIA'),
                                        ('525147-1','ALGEBRA I'),
                                        ('525147-2','ALGEBRA I'),
                                        ('525147-3','ALGEBRA I'),
                                        ('525155-0','ALGEBRA I'),
                                        ('525155-1','ALGEBRA I'),
                                        ('525211-0','CALCULO III');
INSERT INTO semestre(codigo) VALUES ('2018-1'),('2018-2'),('2017-1'),('2017-2'),('2016-1'),('2016-2'),('2015-1'),('2015-2');
INSERT INTO postula(matricula,codigo,solicitado,seleccionado) VALUES ('2013429359','520145-0','0','0'),
                                                                     ('2013429359','525211-0','0','0'),
                                                                     ('2013429359','525221-0','0','0'),
                                                                     ('2013459916','520145-1','0','0'),
                                                                     ('2013459916','523240-0','0','0'),
                                                                     ('2013459916','525117-0','0','0'),
                                                                     ('2012000000','525157-0','0','0'),
                                                                     ('2012000000','525157-1','0','0'),
                                                                     ('2012000000','525221-0','0','0'),
                                                                     ('2014000000','510145-0','0','0'),
                                                                     ('2014000000','525147-1','0','0'),
                                                                     ('2014000000','525147-2','0','0'),
                                                                     ('2001696969','510145-0','0','0'),
                                                                     ('2001696969','510145-1','0','0'),
                                                                     ('2001696969','520145-1','0','0');
INSERT INTO dicta(codigo,rut,codigo_semestre) VALUES  ('520145-1','15.555.555-5','2018-1'),
                                                      ('520145-0','18.188.888-8','2018-1'),
                                                      ('523240-0','18.648.241-k','2018-1'),
                                                      ('525117-0','18.388.888-8','2018-1'),
                                                      ('525157-0','18.148.888-8','2018-1'),
                                                      ('525157-1','21.696.969-1','2018-1'),
                                                      ('525221-0','14.555.555-5','2018-1'),
                                                      ('510145-0','18.488.888-8','2018-1'),
                                                      ('510145-1','18.588.888-8','2018-1'),
                                                      ('510145-2','18.688.888-8','2018-1'),
                                                      ('510145-3','16.666.666-5','2018-1'),
                                                      ('525147-1','14.555.555-5','2018-1'),
                                                      ('525147-2','18.688.888-3','2018-1'),
                                                      ('525147-3','18.555.888-8','2018-1'),
                                                      ('525155-0','18.648.241-k','2018-1'),
                                                      ('525155-1','18.288.888-8','2018-1'),
                                                      ('525211-0','18.688.888-3','2018-1');
INSERT INTO ayudo(matricula, codigo,codigo_semestre) VALUES ('2013429359','520145-1','2016-1'),
                                                            ('2013429359','525211-0','2017-1'),
                                                            ('2013459916','520145-1','2015-1'),
                                                            ('2012000000','525221-0','2015-2'),
                                                            ('2014000000','525147-2','2017-1'),
                                                            ('2001696969','525157-0','2015-1');
INSERT INTO curso(matricula,codigo,calificaion) VALUES ('2013429359','520145-1','6.1'),
                                                            ('2013429359','525211-0','6.2'),
                                                            ('2013459916','520145-1','5.5'),
                                                            ('2012000000','525221-0','5.7'),
                                                            ('2014000000','525147-2','5.6'),
                                                            ('2001696969','525157-0','7.0');
INSERT INTO tiene(codigo,dia,hora) VALUES ('520145-1','MARTES','15:15:00'),
                                          ('520145-1','MARTES','16:15:00'),
                                          ('520145-0','MIERCOLES','15:15:00'),
                                          ('520145-0','MIERCOLES','16:15:00'),
                                          ('520145-1','JUEVES','15:15:00'),
                                          ('520145-1','JUEVES','16:15:00'),
                                          ('520145-0','JUEVES','17:15:00'),
                                          ('520145-0','JUEVES','18:15:00'),

                                          ('523240-0','MARTES','15:15:00'),
                                          ('523240-0','MARTES','16:15:00'),
                                          ('525117-0','MIERCOLES','15:15:00'),
                                          ('525117-0','MIERCOLES','16:15:00'),
                                          ('525157-0','JUEVES','15:15:00'),
                                          ('525157-0','JUEVES','16:15:00'),
                                          ('525157-1','JUEVES','17:15:00'),
                                          ('525157-1','JUEVES','18:15:00'),

                                          ('525221-0','MARTES','15:15:00'),
                                          ('525221-0','MARTES','16:15:00'),
                                          ('510145-0','MIERCOLES','15:15:00'),
                                          ('510145-0','MIERCOLES','16:15:00'),
                                          ('510145-1','JUEVES','15:15:00'),
                                          ('510145-1','JUEVES','16:15:00'),
                                          ('510145-2','JUEVES','17:15:00'),
                                          ('510145-2','JUEVES','18:15:00'),

                                          ('510145-3','MARTES','15:15:00'),
                                          ('510145-3','MARTES','16:15:00'),
                                          ('525147-1','MIERCOLES','15:15:00'),
                                          ('525147-1','MIERCOLES','16:15:00'),
                                          ('525147-2','JUEVES','15:15:00'),
                                          ('525147-2','JUEVES','16:15:00'),
                                          ('525147-3','JUEVES','17:15:00'),
                                          ('525147-3','JUEVES','18:15:00'),

                                          ('525155-0','MARTES','15:15:00'),
                                          ('525155-0','MARTES','16:15:00'),
                                          ('525155-1','MIERCOLES','15:15:00'),
                                          ('525155-1','MIERCOLES','16:15:00'),
                                          ('525211-0','VIERNES','15:15:00'),
                                          ('525211-0','VIERNES','16:15:00');
INSERT INTO dispone(matricula,dia,hora) VALUES ('2013429359','MARTES','15:15:00'),
                                               ('2013429359','MARTES','16:15:00'),
                                               ('2013429359','MIERCOLES','16:15:00'),
                                               ('2013429359','MIERCOLES','17:15:00'),
                                               ('2013429359','VIERNES','15:15:00'),
                                               ('2013429359','VIERNES','16:15:00'),

                                               ('2013459916','MARTES','15:15:00'),
                                               ('2013459916','MARTES','16:15:00'),
                                               ('2013459916','MIERCOLES','17:15:00'),
                                               ('2013459916','MIERCOLES','18:15:00'),
                                               ('2013459916','JUEVES','17:15:00'),
                                               ('2013459916','JUEVES','18:15:00'),

                                               ('2012000000','LUNES','15:15:00'),
                                               ('2012000000','LUNES','16:15:00'),
                                               ('2012000000','MIERCOLES','17:15:00'),
                                               ('2012000000','MIERCOLES','18:15:00'),
                                               ('2012000000','JUEVES','17:15:00'),
                                               ('2012000000','JUEVES','18:15:00'),

                                               ('2014000000','MARTES','15:15:00'),
                                               ('2014000000','MARTES','16:15:00'),
                                               ('2014000000','MIERCOLES','17:15:00'),
                                               ('2014000000','MIERCOLES','18:15:00'),
                                               ('2014000000','JUEVES','17:15:00'),
                                               ('2014000000','JUEVES','18:15:00'),

                                               ('2001696969','MARTES','15:15:00'),
                                               ('2001696969','MARTES','16:15:00'),
                                               ('2001696969','MIERCOLES','17:15:00'),
                                               ('2001696969','MIERCOLES','18:15:00'),
                                               ('2001696969','JUEVES','17:15:00'),
                                               ('2001696969','JUEVES','18:15:00');

