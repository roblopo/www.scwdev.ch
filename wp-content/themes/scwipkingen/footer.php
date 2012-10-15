<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage SCWipkingen
 * @since SC Wipkingen 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<table>
        <colgroup width="100px" span="5"/>
        	<tr>
            	<th align="left"><a href="http://www.scwipkingen.ch/">News</a></th>
                <th align="left"><a href="http://www.scwipkingen.ch/verein">Verein</a></th>
                <th align="left"><a href="http://www.scwipkingen.ch/herren">Herren</a></th>
                <th align="left"><a href="http://www.scwipkingen.ch/damen">Damen</a></th>
                <th align="left"><a href="http://www.scwipkingen.ch/junioren">Junioren</a></th>								
				<th align="left"><a href="http://www.scwipkingen.ch/fotos">Fotos</a></th>
            </tr>
            <tr>
            	<td></td>
                <td><a href="http://www.scwipkingen.ch/verein/kontakt">Kontakt</a></td>
                <td><a href="http://www.scwipkingen.ch/herren/team">Team</a></td>
                <td><a href="http://www.scwipkingen.ch/damen/team">Team</a></td>
                <td><a href="http://www.scwipkingen.ch/junioren/junioren-b">Junioren B</a></td>
				<td><a href="http://www.scwipkingen.ch/fotos/herren">Herren</a></td>
            </tr>
            <tr>
            	<td></td>
                <td><a href="http://www.scwipkingen.ch/verein/scwvorstand">Vorstand</a></td>
				<td><a href="http://www.scwipkingen.ch/herren/tabelle">Tabelle</a></td>
                <td><a href="http://www.scwipkingen.ch/damen/tabelle">Tabelle</a></td>
                <td><a href="http://www.scwipkingen.ch/junioren/junioren-d">Junioren D</a></td>
				<td><a href="http://www.scwipkingen.ch/fotos/damen">Damen</a></td>
            </tr>
            <tr>
            	<td></td>
                <td><a href="http://www.scwipkingen.ch/verein/trainerstab">Trainerstab</a></td>
                <td><a href="http://www.scwipkingen.ch/herren/resultate">Spiele/Resultate</a></td>
                <td><a href="http://www.scwipkingen.ch/damen/resultate">Spiele/Resultate</a></td>
                <td><a href="http://www.scwipkingen.ch/junioren/junioren-e">Junioren E</a></td>
				<td><a href="http://www.scwipkingen.ch/fotos/junioren">Junioren</a></td>
            </tr>
            <tr>
            	<td></td>
                <td><a href="http://www.scwipkingen.ch/verein/sponsoren">Sponsoren</a></td>
                <td><a href="http://www.scwipkingen.ch/herren/torschuetzenliste">Torsch&uuml;tzenliste</a></td>
                <td><a href="http://www.scwipkingen.ch/category/spielberichte-damen">Spielberichte</a></td>
                <td><a href="http://www.scwipkingen.ch/junioren/junioren-f-a">Junioren F (a)</a></td>
            </tr>
            <tr>
            	<td></td>
                <td><a href="http://www.scwipkingen.ch/verein/hardhof">Hardhof</a></td>
                <td><a href="http://www.scwipkingen.ch/category/spielberichte-herren">Spielberichte</a></td>
                <td><a href="http://www.scwipkingen.ch/damen/trainingsplan">Trainingsplan</a></td>
                <td><a href="http://www.scwipkingen.ch/junioren/junioren-f-b">Junioren F (b)</a></td>
            </tr>
            <tr>
            	<td></td>
                <td><a href="http://www.scwipkingen.ch/verein/geschichte">Geschichte</a></td>
								<td><a href="http://www.scwipkingen.ch/herren/trainingsplan">Trainingsplan</a></td>
                <td></td>
                <td><a href="http://www.scwipkingen.ch/junioren/juniorinnen-c">Juniorinnen C</a></td>
            </tr>
            <tr>
            	<td></td>
                <td><a href="http://www.scwipkingen.ch/verein/scw_sucht">Der SCW sucht...</a></td>
                <td></td>
                <td></td>
                <td><a href="http://www.scwipkingen.ch/junioren/juniorinnen-d">Juniorinnen D</a></td>
            </tr>
            <tr>
            	<td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="http://www.scwipkingen.ch/category/spielberichte-junioren">Spielberichte</a></td>
            </tr>
        </table>
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
