
create table CLIENTES
(
   ID_CLIENTE           varchar(13) not null,
   ID_ESTADO            char(1),
   NOMBRES_CLIENTE      varchar(50) not null,
   DIRECCION_CLIENTE    varchar(50),
   TELEFONO_CLIENTE     varchar(7),
   CELULAR_CLIENTE      varchar(10),
   primary key (ID_CLIENTE)
);

create table CUENTASXCOBRAR
(
   ID_CXC               int not null,
   ID_ESTADO            char(1),
   ID_ORDEN             int,
   VALOR_CXC            decimal(6,2) not null,
   COBRAR_CXC           decimal(6,2) not null,
   CUOTAS_CXC           int not null,
   FECHA_CXC            date not null,
   primary key (ID_CXC)
);

create table CUENTASXPAGAR
(
   ID_CXP               int not null,
   ID_ESTADO            char(1),
   ID_PROVEEDOR         varchar(13),
   FACTURA_CXP          int not null,
   VALOR_CXP            decimal(6,2) not null,
   PAGAR_CXP            decimal(6,2) not null,
   CUOTAS_CXP           int not null,
   FECHA_CXP            date not null,
   primary key (ID_CXP)
);

create table DETALLE_ORDEN
(
   ID_PRODUCTO          varchar(10),
   ID_ORDEN             int,
   LINEA_DETALLE        int not null,
   CANTIDAD_DETALLE     int not null,
   PRECIO_DETALLE       decimal(6,2) not null,
   TOTALPRECIO_DETALLE  decimal(6,2) not null
);

create table ESTADO
(
   ID_ESTADO            char(1) not null,
   NOMBRE_ESTADO        varchar(20) not null,
   primary key (ID_ESTADO)
);

create table ORDEN
(
   ID_ORDEN             int not null,
   ID_USUARIO           varchar(10),
   ID_CLIENTE           varchar(13),
   ID_TRANSPORTE        varchar(4),
   ID_ESTADO            char(1),
   FECHA_ORDEN          date not null,
   SUBTOTAL1_ORDEN      decimal(6,2) not null,
   PRECIOTRANSPORTE_ORDEN decimal(6,2) not null,
   SUBTOTAL2_ORDEN      decimal(6,2) not null,
   DESCUENTO_ORDEN      decimal(6,2) not null,
   SUBTOTAL3_ORDEN      decimal(6,2) not null,
   IVA_ORDEN            decimal(6,2) not null,
   TOTAL_ORDEN          decimal(6,2) not null,
   FSALIDA_ORDEN        datetime not null,
   FENTRADA_ORDEN       datetime not null,
   OBSERVACION_ORDEN    varchar(50),
   primary key (ID_ORDEN)
);

create table PRODUCTO
(
   ID_PRODUCTO          varchar(10) not null,
   ID_TIPOPRODUCTO      int,
   ID_ESTADO            char(1),
   ID_PROVEEDOR         varchar(13),
   NOMBRE_PRODUCTO      varchar(80) not null,
   CANTIDAD_PRODUCTO    int not null,
   PRECIO_PRODUCTO      decimal(6,2) not null,
   primary key (ID_PRODUCTO)
);

create table PROVEEDOR
(
   ID_PROVEEDOR         varchar(13) not null,
   ID_ESTADO            char(1),
   NOMBRES_PROVEEDOR    varchar(50) not null,
   DIRECCION_PROVEEDOR  varchar(50),
   TELEFONO_PROVEEDOR   varchar(10),
   primary key (ID_PROVEEDOR)
);

create table TIPO_PRODUCTO
(
   ID_TIPOPRODUCTO      int not null,
   NOMBRE_TIPOPRODUCTO  varchar(20) not null,
   primary key (ID_TIPOPRODUCTO)
);

create table TIPO_USUARIO
(
   ID_TIPOUSUARIO       int not null,
   NOMBRE_TIPOUSUARIO   varchar(20),
   primary key (ID_TIPOUSUARIO)
);

create table TRANSPORTE
(
   ID_TRANSPORTE        varchar(4) not null,
   ID_ESTADO            char(1),
   PLACA_TRANSPORTE     varchar(7) not null,
   MARCA_TRANSPORTE     varchar(50),
   MODELO_TRANSPORTE    varchar(50),
   TIPO_TRANSPORTE      varchar(50),
   primary key (ID_TRANSPORTE)
);

create table USUARIO
(
   ID_USUARIO           varchar(10) not null,
   ID_ESTADO            char(1),
   ID_TIPOUSUARIO       int,
   NOMBRES_USUARIO      varchar(50) not null,
   USER_USUARIO         varchar(10) not null,
   PASS_USUARIO         varchar(10) not null,
   primary key (ID_USUARIO)
);

alter table CLIENTES add constraint FK_RELATIONSHIP_17 foreign key (ID_ESTADO)
      references ESTADO (ID_ESTADO) on delete restrict on update restrict;

alter table CUENTASXCOBRAR add constraint FK_RELATIONSHIP_13 foreign key (ID_ESTADO)
      references ESTADO (ID_ESTADO) on delete restrict on update restrict;

alter table CUENTASXCOBRAR add constraint FK_RELATIONSHIP_9 foreign key (ID_ORDEN)
      references ORDEN (ID_ORDEN) on delete restrict on update restrict;

alter table CUENTASXPAGAR add constraint FK_RELATIONSHIP_12 foreign key (ID_ESTADO)
      references ESTADO (ID_ESTADO) on delete restrict on update restrict;

alter table CUENTASXPAGAR add constraint FK_RELATIONSHIP_8 foreign key (ID_PROVEEDOR)
      references PROVEEDOR (ID_PROVEEDOR) on delete restrict on update restrict;

alter table DETALLE_ORDEN add constraint FK_RELATIONSHIP_2 foreign key (ID_ORDEN)
      references ORDEN (ID_ORDEN) on delete restrict on update restrict;

alter table DETALLE_ORDEN add constraint FK_RELATIONSHIP_3 foreign key (ID_PRODUCTO)
      references PRODUCTO (ID_PRODUCTO) on delete restrict on update restrict;

alter table ORDEN add constraint FK_RELATIONSHIP_1 foreign key (ID_CLIENTE)
      references CLIENTES (ID_CLIENTE) on delete restrict on update restrict;

alter table ORDEN add constraint FK_RELATIONSHIP_16 foreign key (ID_ESTADO)
      references ESTADO (ID_ESTADO) on delete restrict on update restrict;

alter table ORDEN add constraint FK_RELATIONSHIP_4 foreign key (ID_TRANSPORTE)
      references TRANSPORTE (ID_TRANSPORTE) on delete restrict on update restrict;

alter table ORDEN add constraint FK_RELATIONSHIP_5 foreign key (ID_USUARIO)
      references USUARIO (ID_USUARIO) on delete restrict on update restrict;

alter table PRODUCTO add constraint FK_RELATIONSHIP_10 foreign key (ID_PROVEEDOR)
      references PROVEEDOR (ID_PROVEEDOR) on delete restrict on update restrict;

alter table PRODUCTO add constraint FK_RELATIONSHIP_11 foreign key (ID_TIPOPRODUCTO)
      references TIPO_PRODUCTO (ID_TIPOPRODUCTO) on delete restrict on update restrict;

alter table PRODUCTO add constraint FK_RELATIONSHIP_15 foreign key (ID_ESTADO)
      references ESTADO (ID_ESTADO) on delete restrict on update restrict;

alter table PROVEEDOR add constraint FK_RELATIONSHIP_14 foreign key (ID_ESTADO)
      references ESTADO (ID_ESTADO) on delete restrict on update restrict;

alter table TRANSPORTE add constraint FK_RELATIONSHIP_19 foreign key (ID_ESTADO)
      references ESTADO (ID_ESTADO) on delete restrict on update restrict;

alter table USUARIO add constraint FK_RELATIONSHIP_18 foreign key (ID_ESTADO)
      references ESTADO (ID_ESTADO) on delete restrict on update restrict;

alter table USUARIO add constraint FK_RELATIONSHIP_6 foreign key (ID_TIPOUSUARIO)
      references TIPO_USUARIO (ID_TIPOUSUARIO) on delete restrict on update restrict;

