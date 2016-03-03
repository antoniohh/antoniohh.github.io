/* 
 * Copyright (C) 2016 Antonio Horrillo Horrillo
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Función que relaciona los id´s de los divs con las páginas html con el contenido
 * de la seccion de la página.
 * @param {type} param
 */
$(document).ready(function(){
    $( '#body' ).load( 'vista/body.html' );
    $( '#sobremi' ).load( 'vista/sobremi.html' );
    $( '#formacion' ).load( 'vista/formacion.html' );
    $( '#portfolio' ).load( 'vista/portfolio.html' );
    $( '#conocimientos' ).load( 'vista/conocimientos.html' );
    $( '#experiencia' ).load( 'vista/experiencia.html' );
    $( '#curriculum' ).load( 'vista/curriculum.html' );
    $( '#contacto' ).load( 'vista/contacto.html' );
    $( '#servicios' ).load( 'vista/servicios.html' );
    $( '#blog' ).load( 'vista/blog.html' );
    $( '#footer' ).load( 'vista/footer.html' );
});