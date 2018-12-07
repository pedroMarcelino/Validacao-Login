

create table usuario(
    cd_usuario int(5) auto_increment primary key,
    ds_tipo int(1) not null,
    nm_email varchar (100)not null unique,
    nm_usuario varchar (100)not null,
    sn_usuario varchar (100)not null, 
    nm_senha varchar (100) not null,
    img varchar (500)
);



/*SN_USUARIO SERINHA O SobreNome DO USUARIO*/