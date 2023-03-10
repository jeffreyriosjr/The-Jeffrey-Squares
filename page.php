<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package squares
 */

get_header();
?>

	<main id="primary" class="site-main">

	<table>
  <tbody>
    <tr>
      <td id="0"></td>
      <td id="1"></td>
      <td id="2"></td>
      <td id="3"></td>
      <td id="4"></td>
      <td id="5"></td>
      <td id="6"></td>
      <td id="7"></td>
      <td id="8"></td>
      <td id="9"></td>
    </tr>
    <tr>
      <td id="10"></td>
      <td id="11"></td>
      <td id="12"></td>
      <td id="13"></td>
      <td id="14"></td>
      <td id="15"></td>
      <td id="16"></td>
      <td id="17"></td>
      <td id="18"></td>
      <td id="19"></td>
    </tr>
    <tr>
      <td id="20"></td>
      <td id="21"></td>
      <td id="22"></td>
      <td id="23"></td>
      <td id="24"></td>
      <td id="25"></td>
      <td id="26"></td>
      <td id="27"></td>
      <td id="28"></td>
      <td id="29"></td>
    </tr>
    <tr>
      <td id="30"></td>
      <td id="31"></td>
      <td id="32"></td>
      <td id="33"></td>
      <td id="34"></td>
      <td id="35"></td>
      <td id="36"></td>
      <td id="37"></td>
      <td id="38"></td>
      <td id="39"></td>
    </tr>
    <tr>
      <td id="40"></td>
      <td id="41"></td>
      <td id="42"></td>
      <td id="43"></td>
      <td id="44"></td>
      <td id="45"></td>
      <td id="46"></td>
      <td id="47"></td>
      <td id="48"></td>
      <td id="49"></td>
    </tr>
    <tr>
      <td id="50"></td>
      <td id="51"></td>
      <td id="52"></td>
      <td id="53"></td>
      <td id="54"></td>
      <td id="55"></td>
      <td id="56"></td>
      <td id="57"></td>
      <td id="58"></td>
      <td id="59"></td>
    </tr>
    <tr>
      <td id="60"></td>
      <td id="61"></td>
      <td id="62"></td>
      <td id="63"></td>
      <td id="64"></td>
      <td id="65"></td>
      <td id="66"></td>
      <td id="67"></td>
      <td id="68"></td>
      <td id="69"></td>
    </tr>
    <tr>
      <td id="70"></td>
      <td id="71"></td>
      <td id="72"></td>
      <td id="73"></td>
      <td id="74"></td>
      <td id="75"></td>
      <td id="76"></td>
      <td id="77"></td>
      <td id="78"></td>
      <td id="79"></td>
    </tr>
    <tr>
      <td id="80"></td>
      <td id="81"></td>
      <td id="82"></td>
      <td id="83"></td>
      <td id="84"></td>
      <td id="85"></td>
      <td id="86"></td>
      <td id="87"></td>
      <td id="88"></td>
      <td id="89"></td>
    </tr>
    <tr>
      <td id="90"></td>
      <td id="91"></td>
      <td id="92"></td>
      <td id="93"></td>
      <td id="94"></td>
      <td id="95"></td>
      <td id="96"></td>
      <td id="97"></td>
      <td id="98"></td>
      <td id="99"></td>
    </tr>
</tbody>
</table>



		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
// get_footer();
