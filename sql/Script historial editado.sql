


/*==============================================================*/
/* Table: A_CARGO                                               */
/*==============================================================*/
create table A_CARGO (
   ID_REPORTE           SERIAL,
   ID_PERSONAL          SERIAL,
   constraint PK_A_CARGO primary key (ID_REPORTE, ID_PERSONAL)
);

/*==============================================================*/
/* Index: A_CARGO_PK                                            */
/*==============================================================*/
create unique index A_CARGO_PK on A_CARGO (
ID_REPORTE,
ID_PERSONAL
);

/*==============================================================*/
/* Index: A_CARGO_FK                                            */
/*==============================================================*/
create  index A_CARGO_FK on A_CARGO (
ID_PERSONAL
);

/*==============================================================*/
/* Index: A_CARGO2_FK                                           */
/*==============================================================*/
create  index A_CARGO2_FK on A_CARGO (
ID_REPORTE
);


/*==============================================================*/
/* Table: ESTADO */
/*==============================================================*/
CREATE TABLE estado(
  id serial PRIMARY KEY,
  nombre varchar(20)
);

INSERT INTO estado (id,nombre) VALUES (1,'De largo aliento');
INSERT INTO estado (id,nombre) VALUES (2,'En curso');
INSERT INTO estado (id,nombre) VALUES (3,'Terminado');

/*==============================================================*/
/* Table: HISTORIAL                                             */
/*==============================================================*/
create table HISTORIAL (
   ID_HISTORIAL         SERIAL,
   ID_REPORTE           SERIAL,
   ESTADO               CHAR(15),
   DESCRIPCION          CHAR(500)            null,
   constraint PK_HISTORIAL primary key (ID_HISTORIAL)
);

/*==============================================================*/
/* Table: PERSONAL                                              */
/*==============================================================*/
create table PERSONAL (
   ID_PERSONAL          SERIAL,
   ID_USUARIO           SERIAL,
   NOMBRE_PERSONAL      CHAR(15)             null,
   APELLIDOP_PERSONAL   CHAR(15)             null,
   APELLIDOM_PERSONAL   CHAR(15)             null,
   CARGO_PERSONAL       CHAR(15)             null,
   CORREO_PERSONAL      CHAR(50)             null,
   RUT_PERSONAL         CHAR(11)             null,
   TIPO_REPORTE         CHAR(10)             null,
   constraint PK_PERSONAL primary key (ID_PERSONAL)
);

/*==============================================================*/
/* Table: REPORTE                                               */
/*==============================================================*/
create table REPORTE (
   ID_REPORTE           SERIAL,
   NOMBRE_REPORTE       CHAR(15)             null,
   FECHA_REPORTE        DATE                 null,
   GRUPO                VARCHAR(15)          null,
   TIPO_REPORTE         CHAR(10)             null,
   CATEGORIA            VARCHAR(15)          null,
   RECURSO_SERVICIO     VARCHAR(15)          null,
   UBICACION            VARCHAR(15)          null,
   constraint PK_REPORTE primary key (ID_REPORTE)
);

/*==============================================================*/
/* Table: USUARIO                                               */
/*==============================================================*/
create table USUARIO (
   ID_USUARIO         SERIAL,
   NOMBRE_USUARIO       VARCHAR(15)          not null,
   PASSWORD             VARCHAR(15)          not null,
   constraint PK_USUARIO primary key (ID_USUARIO)
);

alter table A_CARGO
   add constraint FK_A_CARGO_A_CARGO_REPORTE foreign key (ID_REPORTE)
      references REPORTE (ID_REPORTE)
      on delete restrict on update restrict;

alter table A_CARGO
   add constraint FK_A_CARGO_A_CARGO2_PERSONAL foreign key (ID_PERSONAL)
      references PERSONAL (ID_PERSONAL)
      on delete restrict on update restrict;

alter table HISTORIAL
   add constraint FK_HISTORIA_ASOCIA_REPORTE foreign key (ID_REPORTE)
      references REPORTE (ID_REPORTE)
      on delete restrict on update restrict;

alter table PERSONAL
   add constraint FK_PERSONAL_INCORPORA_USUARIO foreign key (ID_USUARIO)
      references USUARIO (ID_USUARIO)
      on delete restrict on update restrict;


---------------------------

INSERT INTO public.usuario(
            nombre_usuario, password)
    VALUES ('usuario1',1234);

INSERT INTO public.usuario(
            nombre_usuario, password)
    VALUES ('usuario2',1234);

------------------------------------------------------------------------------------

INSERT INTO public.personal(
            nombre_personal, apellidop_personal, 
            apellidom_personal, cargo_personal, correo_personal, rut_personal, 
            tipo_reporte)
    VALUES ('nombre1','apellido1', 
            'apellidop1','cargo1','correo1',10339084-2, 
            'tipo1');


INSERT INTO public.personal(
            nombre_personal, apellidop_personal, 
            apellidom_personal, cargo_personal, correo_personal, rut_personal, 
            tipo_reporte)
    VALUES ('nombre1','apellido1', 
            'apellidop1','cargo1','correo1',10339084-2, 
            'tipo1');

----------------------------------------------------------------------------------

INSERT INTO public.reporte(
            nombre_reporte, fecha_reporte, grupo, tipo_reporte, 
            categoria, recurso_servicio, ubicacion)
    VALUES ('repote1','30-12-2017','grupo1','tipo1', 
            'categoria1','recurso1','ubicacion1');


INSERT INTO public.reporte(
            nombre_reporte, fecha_reporte, grupo, tipo_reporte, 
            categoria, recurso_servicio, ubicacion)
    VALUES ('repote2','01-01-2017','grupo2','tipo2', 
            'categoria2','recurso2','ubicacion2');

    INSERT INTO public.reporte(
            nombre_reporte, fecha_reporte, grupo, tipo_reporte, 
            categoria, recurso_servicio, ubicacion)
    VALUES ('repote3','01-01-2017','grupo2','tipo3', 
            'categoria3','recurso3','ubicacion3');

-----------------------------------------------------------------------------------

INSERT INTO public.historial(
            estado, descripcion)
    VALUES ('Largo aliento','descripcion1');

    INSERT INTO public.historial(
            estado, descripcion)
    VALUES ('En curso','descripcion2');

    INSERT INTO public.historial(
            estado, descripcion)
    VALUES ('En curso','descripcion3');


------------------------------------------------------------------------------------

INSERT INTO public.a_cargo(
            id_reporte, id_personal)
    VALUES (1,2);

INSERT INTO public.a_cargo(
            id_reporte, id_personal)
    VALUES (2,1);




