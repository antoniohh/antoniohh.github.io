<?php

/**
 * Copyright 2016 AntonioHH.
 *
 * This work is licensed under the 
 * Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported License.
 * To view a copy of this license, visit 
 *
 *      http://creativecommons.org/licenses/by-nc-nd/3.0/
 *
 * or send a letter to Creative Commons, 444 Castro Street, Suite 900, 
 * Mountain View, California, 94041, USA.
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Recuperamos la informacion de la sesion.
 */
session_start();

/**
 * Añadimos la pagina head.php con el contenido del head.
 */
require_once ('./vista/head.php');

/**
 * Añadimos la pagina body.php con el cuerpo de la aplicación.
 */
require_once ('./vista/body.php');

/**
 * Añadimos la pagina sobremi.php con con la sección Sobre mi.
 */
require_once ('./vista/sobremi.php');

/**
 * Añadimos la pagina formacion.php con con la sección Formación.
 */
require_once ('./vista/formacion.php');

/**
 * Añadimos la pagina portfolio.php con con la sección Portfolio.
 */
require_once ('./vista/portfolio.php');

/**
 * Añadimos la pagina conocimientos.php con con la sección Conocimientos.
 */
require_once ('./vista/conocimientos.php');

/**
 * Añadimos la pagina experiencia.php con con la sección Experiencia.
 */
require_once ('./vista/experiencia.php');

/**
 * Añadimos la pagina curriculum.php con con la sección Curriculum.
 */
require_once ('./vista/curriculum.php');

/**
 * Añadimos la pagina contacto.php con con la sección Contacto.
 */
require_once ('./vista/contacto.php');

/**
 * Añadimos la pagina servicios.php con con la sección Servicios.
 */
require_once ('./vista/servicios.php');

/**
 * Añadimos la pagina blog.php con con la sección Blog.
 */
require_once ('./vista/blog.php');

/**
 * Añadimos la pagina footer.php con el pie de la aplicacion.
 */
require_once ('./vista/footer.php');

?>