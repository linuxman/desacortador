# Desacortador de URLs

Este ejercicio lo hice para desacortar urls maliciosos. Surgió la idea en el artículo [Mensajes SMS sospechosos, como evitar caer en una trampa](https://linuxmanr4.com/2023/08/28/mensajes-sms-sospechosos-como-evitar-caer-en-una-trampa/).

La página utiliza dos funciones, porque me di cuenta de que en ocasiones el resultado puede ser ligeramente distinto.

Uno de ellos utiliza el método publicado por Jonathon Hill [Unshorten URLs with PHP and cURL](https://compwright.com/2012-05-18/unshorten-urls-with-php-and-curl/) que me parece excelente.

Durante la investigación, extraje información del header de la página y vi que el resultado era diferente, por eso la página muestra dos resultados que pueden o no ser iguales.
