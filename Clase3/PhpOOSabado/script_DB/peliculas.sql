-- 
-- Table structure for table `peliculas`
-- 

use curso;

CREATE TABLE IF NOT EXISTS `peliculas` (
  `cod_pelicula` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL DEFAULT '',
  `genero` varchar(45) NOT NULL DEFAULT '',
  `descripcion` varchar(200) NOT NULL DEFAULT '',
  `butacas` int(10) unsigned NOT NULL DEFAULT '0',
  `disponibles` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cod_pelicula`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`cod_pelicula`, `nombre`, `genero`, `descripcion`, `butacas`, `disponibles`) VALUES
(1, 'El paciente ingles', 'Drama', 'Durante la segunda Guerra Mundial, un piloto es rescatado de los...', 40, 9),
(2, 'Perfume de mujer', 'Drama', 'Charlie está becado en uno de los mejores colegios de Estados Unidos', 50, 50),
(3, 'El mercader de venecia', 'Drama', 'Situada en la Venecia del siglo XVI, esta eterna comedia... ', 30, 30),
(4, 'Atrapado sin salida', 'Accion', 'Para no entrar en la cárcel, Randle Patrick McMurphy convenció al juez que es...', 40, 40),
(5, 'Lo que el viento se llevo', 'Drama', 'Esta grandiosa superproduccion marco un hito en el mundo cinematografico... ', 40, 40),
(6, 'El Mago de Oz', 'Ficcion', 'Dorothy es una niña huérfana que se siente infeliz en la granja de sus...', 50, 50),
(7, 'King Kong', 'Ficcion', 'Carl Denham es un director de cine que busca desesperadamente una actriz... ', 40, 40),
(8, 'Casablanca', 'Drama', 'Durante la II Guerra Mundial, Rick Blaine dirige un exitoso local nocturno en Casablanca... ', 50, 50),
(9, 'La mujer pantera', 'Accion', 'Irena, una muchacha serbia que vive en Nueva York, se halla en el zoologico... ', 40, 40),
(10, 'Cantando bajo la lluvia', 'Musical', 'Con el nacimiento del cine sonoro en 1927, la industria cinematográfica debe renovarse... ', 30, 30);