CREATE TABLE `usuarios` (
  `id_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nm_login` varchar(50) NOT NULL,
  `pw_senha` varchar(256) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `usuarios_un` (`nm_login`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='Tabela dos usuários';
