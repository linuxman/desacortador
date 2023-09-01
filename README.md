# Desacortador de URLs

Este ejercicio lo hice para desacortar urls maliciosos. Surgió la idea en el artículo [Mensajes SMS sospechosos, como evitar caer en una trampa](https://linuxmanr4.com/2023/08/28/mensajes-sms-sospechosos-como-evitar-caer-en-una-trampa/).

El código utiliza dos funciones, porque me di cuenta de que en ocasiones el resultado puede ser ligeramente distinto.

Una de ellas utiliza el método publicado por Jonathon Hill [Unshorten URLs with PHP and cURL](https://compwright.com/2012-05-18/unshorten-urls-with-php-and-curl/) que me parece excelente.

La otra función es similar, pero extrae otra información del header de la página.

Por eso los resultados pueden ser o no iguales.

Para ver este código en funcionamiento, pueden visitar [https://linuxmanr4.com/desacortador](https://linuxmanr4.com/desacortador/).